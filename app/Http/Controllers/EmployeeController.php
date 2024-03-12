<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

/**
 * @OA\Tag(
 *     name="employee",
 *     description="Employee related operations"
 * )
 */
class EmployeeController extends Controller
{

    /**
     * @OA\Get(
     *     path="/employee",
     *     tags={"employee"},
     *     summary="Finds employees by filter",
     *     description="Filter values can be provided",
     *     @OA\Parameter(
     *         name="gender",
     *         in="query",
     *         description="Gender values for filter",
     *         required=false,
     *         explode=true,
     *         @OA\Schema(
     *             type="string",
     *             enum={"M", "F"},
     *         )
     *     ),
     *     @OA\Parameter(
     *         name="first_name",
     *         in="query",
     *         description="First name for filter",
     *         required=false,
     *         explode=true,
     *         @OA\Schema(
     *             type="string"
     *         )
     *     ),
     *     @OA\Parameter(
     *         name="last_name",
     *         in="query",
     *         description="Last name for filter",
     *         required=false,
     *         explode=true,
     *         @OA\Schema(
     *             type="string"
     *         )
     *     ),
     *     @OA\Parameter(
     *         name="hire_date",
     *         in="query",
     *         description="Hire date for filter",
     *         required=false,
     *         explode=true,
     *         @OA\Schema(
     *             type="string"
     *         )
     *     ),
     *     @OA\Parameter(
     *         name="birth_date",
     *         in="query",
     *         description="Birth date for filter",
     *         required=false,
     *         explode=true,
     *         @OA\Schema(
     *             type="string"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *         @OA\JsonContent(
     *             type="array",
     *             @OA\Items(ref="#/components/schemas/employee")
     *         )
     *     ),
     *     security={
     *         {"lararh_auth": {"*"}}
     *     },
     * )
     */
    public function index()
    {
        $employees = Employee::paginate();
        return response()->json($employees);
    }

    /**
     * Add a new employee
     *
     * @OA\Post(
     *     path="/employee",
     *     tags={"employee"},
     *     @OA\Response(
     *         response=422,
     *         description="Invalid input"
     *     ),
     *     @OA\Response(
     *         response=201,
     *         description="Created"
     *     ),
     *     @OA\RequestBody(ref="#/components/requestBodies/employee"),
     *     security={
     *         {"lararh_auth": {"*"}}
     *     },
     * )
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * @OA\Get(
     *     path="/employee/{employeeId}",
     *     tags={"employee"},
     *     summary="Find employee by ID",
     *     description="Returns a single employee",
     *     @OA\Parameter(
     *         name="employeeId",
     *         in="path",
     *         description="ID of employee to return",
     *         required=true,
     *         @OA\Schema(
     *             type="integer",
     *             format="int64"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *         @OA\JsonContent(ref="#/components/schemas/employee")
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid ID supplier"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Employee not found"
     *     ),
     *     security={
     *         {"lararh_auth": {"*"}}
     *     },
     * )
     *
     * @param int $id
     */
    public function show(string $id)
    {
        //
    }

    /**
     * @OA\Put(
     *     path="/employee/{employeeId}",
     *     tags={"employee"},
     *     operationId="updateEmployee",
     *     @OA\Parameter(
     *         name="employeeId",
     *         in="path",
     *         description="ID of employee to return",
     *         required=true,
     *         @OA\Schema(
     *             type="integer",
     *             format="int64"
     *         )
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Employee not found"
     *     ),
     *     @OA\Response(
     *         response=202,
     *         description="Updated"
     *     ),
     *     @OA\Response(
     *         response=422,
     *         description="Validation exception"
     *     ),
     *     @OA\RequestBody(ref="#/components/requestBodies/employee"),
     *     security={
     *         {"lararh_auth": {"*"}}
     *     },
     * )
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * @OA\Delete(
     *     path="/employee/{employeeId}",
     *     tags={"employee"},
     *     summary="Deletes a employee",
     *     operationId="deleteemployee",
     *     @OA\Parameter(
     *         name="api_key",
     *         in="header",
     *         required=false,
     *         @OA\Schema(
     *             type="string"
     *         )
     *     ),
     *     @OA\Parameter(
     *         name="employeeId",
     *         in="path",
     *         description="employee id to delete",
     *         required=true,
     *         @OA\Schema(
     *             type="integer",
     *             format="int64"
     *         ),
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Employee not found",
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Deleted",
     *     ),
     *     security={
     *         {"lararh_auth": {"*"}}
     *     },
     * )
     */
    public function destroy(string $id)
    {
        //
    }
}
