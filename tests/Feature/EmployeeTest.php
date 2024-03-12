<?php
use App\Models\Employee;
use Illuminate\Foundation\Testing\RefreshDatabase;
use function Pest\Laravel\{
    getJson,
    postJson,
    putJson
};

uses(RefreshDatabase::class);

it('list employees', function () {
    // Arrange
    $employees = Employee::factory(5)->create();

    // Act && Assert
    ($response = getJson(route('employee.list')))->assertOk()->assertSee([
        ...$employees->pluck('first_name')->values()->toArray(),
        ...$employees->pluck('last_name')->values()->toArray()
    ]);
});


it('create employee', function () {
    // Arrange

    // Act && Assert
});


it('find employee', function () {
    // Arrange

    // Act && Assert
});


it('update employee', function () {
    // Arrange

    // Act && Assert
});


it('delete employee', function () {
    // Arrange

    // Act && Assert
});