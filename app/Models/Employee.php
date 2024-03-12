<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @OA\Schema(
 *  schema="employee",
 *  type="object",
 *  description="Schema of Model User",
 *  @OA\Property(
 *      property="emp_no",
 *      type="integer",
 *      description="emp_no",
 *      title="emp_no",
 *      example="42"
 *  ),
 *  @OA\Property(
 *      property="first_name",
 *      type="string",
 *      description="First name of employee",
 *      example="John"
 *  ),
 *  @OA\Property(
 *      property="last_name",
 *      type="string",
 *      description="Last name of employee",
 *      example="Doe"
 *  ),
 *  @OA\Property(
 *      property="birth_date",
 *      type="date",
 *      description="Birth date of employee",
 *      example="1990-12-13"
 *  ),
 *  @OA\Property(
 *      property="gender",
 *      type="string",
 *      description="Gender of employee",
 *      enum={"M", "F"},
 *  ),
 *  @OA\Property(
 *      property="hire_date",
 *      type="date",
 *      description="Hire date of employee",
 *      example="1990-12-13"
 *  ),
 * )
 * @OA\RequestBody(
 *     request="employee",
 *     description="Employee object",
 *     required=true,
 *     @OA\JsonContent(ref="#/components/schemas/employee")
 * )
 */


class Employee extends Model
{
    use HasFactory;
    protected $primaryKey = 'emp_no';
}
