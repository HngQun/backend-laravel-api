<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        // Retrieve all employees
        $employees = Employee::all();

        return response()->json($employees);
    }

    public function show($id)
    {
        // Retrieve a specific employee by ID
        $employee = Employee::find($id);

        return response()->json($employee);
    }

    public function store(Request $request)
    {
        // Create a new employee
        $employee = Employee::create($request->all());

        return response()->json($employee, 201);
    }

    public function update(Request $request, $id)
    {
        // Update an existing employee
        $employee = Employee::findOrFail($id);
        $employee->update($request->all());

        return response()->json($employee);
    }

    public function destroy($id)
    {
        // Delete an employee
        $employee = Employee::findOrFail($id);
        $employee->delete();

        return response()->json(null, 204);
    }
}
