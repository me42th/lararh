<?php
use App\Models\Employee;
use Illuminate\Foundation\Testing\RefreshDatabase;
use function Pest\Laravel\{
    getJson,
    postJson,
    putJson,
    deleteJson
};
use function Pest\Faker\fake;

uses(RefreshDatabase::class);

it('list employees', function () {
    // Arrange
    $employees = Employee::factory(5)->create();

    // Act && Assert
    getJson(route('employee.list'))->assertOk()->assertSee([
        ...$employees->pluck('first_name')->values()->toArray(),
        ...$employees->pluck('last_name')->values()->toArray(),
        ...["last_page","last_page_url","first_page_url","links","next_page_url","path","per_page","prev_page_url","to" ]
    ])->assertJsonFragment(["total"=>$employees->count()]);
});

it('list filtered employees', function () {
    // Arrange
    $employee = (Employee::factory(5)->create())->first();

    // Act && Assert
    $url = $query = implode([
        route('employee.list'),
        '?',
        http_build_query($employee->toArray())
    ]);
    getJson($url)->assertOk()->assertSee([
        ...$employee->toArray(),
        ...["last_page","last_page_url","first_page_url","links","next_page_url","path","per_page","prev_page_url","to" ]
    ])->assertJsonFragment(["total"=>1]);
});

it('create employee', function () {
    // Arrange
    $data = Employee::factory()->definition();

    // Act && Assert
    postJson(route('employee.store'),$data)->assertStatus(201);
    $expect = expect(Employee::first());
    foreach($data as $key => $value){
        $expect->{$key}->toBe($value);
    }
});

it('reject invalid employee data', function () {
    // Arrange
    $data = Employee::factory()->definition();
    foreach($data as $key => &$value){
        $value = 42;
    }

    // Act && Assert
    postJson(route('employee.store'),$data)->assertStatus(422)->assertSee(
        ...array_keys($data)
    );
    postJson(route('employee.store'),[])->assertStatus(422)->assertSee(
        ...array_keys($data)
    );
});


it('find employee', function () {
    // Arrange
    $employee = Employee::factory()->create();

    // Act && Assert
    getJson(route('employee.find',$employee->emp_no))
        ->assertOk()->assertSee($employee->toArray());
});


it('not find employee', function () {
    // Arrange
    $employee = Employee::factory()->create();

    // Act && Assert
    getJson(route('employee.find',42))
        ->assertStatus(404);
});


it('update employee', function () {
    // Arrange
    $employee = Employee::factory()->create();
    $data = Employee::factory()->definition();

    // Act && Assert
    putJson(route('employee.update',$employee->emp_no),$data)->assertStatus(202);

    $expect = expect(Employee::first());
    foreach($data as $key => $value){
        $expect->{$key}->toBe($value);
    }
});

it('cant update employee because not find him', function () {
    // Arrange
    $employee = Employee::factory()->create();
    $data = Employee::factory()->definition();

    // Act && Assert
    putJson(route('employee.update',42),$data)->assertStatus(404);
});

it('cant update employee because the data was wrong',function(){
    // Arrange
    $employee = Employee::factory()->create();
    $data = Employee::factory()->definition();
    foreach($data as $key => &$value){
        $value = 42;
    }

    // Act && Assert
    putJson(route('employee.update',$employee->emp_no),$data)->assertStatus(422)->assertSee(
        ...array_keys($data)
    );
});

it('delete employee', function () {
    // Arrange
    $employee = Employee::factory()->create();

    // Act && Assert
    deleteJson(route('employee.delete',$employee->emp_no))
        ->assertOk();

    expect(Employee::count())->toBe(0);
});


it('cant delete employee because not find him', function () {
    // Act && Assert
    deleteJson(route('employee.delete',42))
        ->assertStatus(404);
});