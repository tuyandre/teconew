<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class Employees extends Controller
{

    public function index()
    {
        $employees = Employee::all();
        return view('employee.index', ['employees' => $employees]);
    }


    public function create()
    {
        return view('employee.create');
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'date_of_birth' => 'required|date',
            'address' => 'required'
        ]);

        $employee = new Employee();
        $employee->name = $request->input('name');
        $employee->date_of_birth = $request->input('date_of_birth');
        $employee->address = $request->input('address');

        $employee->save();
        return redirect()->route('employees.index');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $employee = Employee::findOrFail($id);
        return view('employee.edit', ['employee'=> $employee]);
    }


    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'date_of_birth' => 'required|date',
            'address' => 'required'
        ]);

        $employee = Employee::findOrFail($id);
        $employee->name = $request->input('name');
        $employee->date_of_birth = $request->input('date_of_birth');
        $employee->address = $request->input('address');

        $employee->update();
        return redirect()->route('employees.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $employee = Employee::findOrFail($id);
        $employee->delete();
        return redirect()->route('employees.index');
    }
}
