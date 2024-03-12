<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
     *             type="date"
     *         )
     *     ),
     *     @OA\Parameter(
     *         name="birth_date",
     *         in="query",
     *         description="Birth date for filter",
     *         required=false,
     *         explode=true,
     *         @OA\Schema(
     *             type="date"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *         @OA\JsonContent(
     *             type="array",
     *             @OA\Items(ref="#/components/schemas/employee")
     *         )
     *     )
     * )
     */
    public function index()

    {
        //
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
     *         response=200,
     *         description="Created"
     *     ),
     *     @OA\RequestBody(ref="#/components/requestBodies/employee")
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
     *     )
     * )
     *
     * @param int $id
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
