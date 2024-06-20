<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employees = Employee::orderBy('Employ_ID', 'desc')->paginate(10);
        return view('employees.employee', compact('employees'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('employees.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'Employ_Name'  => 'required',
            'Employ_Email' => 'required',
            'Employ_Phone'  => 'required',
            'Gender' => 'required',
            'DOB'  => 'required',
            'Address'  => 'required',
            'Name_TK'  => 'required',
            'Password' => 'required',
        ], [
            'Employ_Name'  => 'Vui lòng điền tên nhân viên',
            'Employ_Email' => 'Vui lòng điền email nhân viên',
            'Employ_Phone'  => 'Vui lòng điền số điện thoại nhân viên',
            'Gender' => 'Vui lòng chọn giới tính',
            'DOB'  => 'Vui lòng điền ngày sinh nhân viên',
            'Address'  => 'Vui lòng điền địa chỉ nhân viên',
            'Name_TK'  => 'Vui lòng điền tên tài khoản nhân viên',
            'Password' => 'Vui lòng điền mật khẩu',
        ]);
        if(Employee::create($request->all())){
            return redirect()->route('employees.index')->with('success', 'Thêm mới thành công');
        }  
    }

    /**
     * Display the specified resource.
     */
    public function show(Employee $employee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employee $employee)
    {
        return view('employees.edit', compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Employee $employee)
    {
        $request->validate([
            'Employ_Name'  => 'required',
            'Employ_Email' => 'required',
            'Employ_Phone'  => 'required',
            'Gender' => 'required',
            'DOB'  => 'required',
            'Address'  => 'required',
            'Name_TK'  => 'required',
            'Password' => 'required',
        ], [
            'Employ_Name'  => 'Vui lòng điền tên nhân viên',
            'Employ_Email' => 'Vui lòng điền email nhân viên',
            'Employ_Phone'  => 'Vui lòng điền số điện thoại nhân viên',
            'Gender' => 'Vui lòng chọn giới tính',
            'DOB'  => 'Vui lòng điền ngày sinh nhân viên',
            'Address'  => 'Vui lòng điền địa chỉ nhân viên',
            'Name_TK'  => 'Vui lòng điền tên tài khoản nhân viên',
            'Password' => 'Vui lòng điền mật khẩu',
        ]);

        if($employee->update($request->all())){
            return redirect()->route('employees.index')->with('success', 'Cập nhật thông tin thành công');
        } 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employee $employee)
    {
        $employee->delete();
        return redirect()->route('employees.index')->with('success', 'Xóa thành công !');
    }
}
