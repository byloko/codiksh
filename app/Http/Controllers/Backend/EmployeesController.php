<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\EmployeesModel;
use File;
use Str;


class EmployeesController extends Controller
{
    public function index(Request $request)
    {
        $getrecord = EmployeesModel::getRecord($request);
       
        $data['getrecord'] = $getrecord;
        $data['meta_title'] = 'Employees List';
        return view('backend.employees.list', $data);
    }

    public function create(Request $request){

        $data['get_companies'] = User::getCompanies();
        $data['meta_title'] = 'Add Employees';
        return view('backend.employees.add', $data);
    }

    public function store_update($id = '', Request $request){
        $add_update = request()->validate([
          'companies_id'       => 'required',
          'first_name'         => 'required',
          'last_name'          => 'required',
          'phone'              => 'digits:10|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
         
        ]);

        if(!empty($id)){
            $add_update = EmployeesModel::find($id);
        }else{
            $add_update = new EmployeesModel;
        }

        $add_update->companies_id      = $request->companies_id;
        $add_update->first_name        = $request->first_name;
        $add_update->last_name         = $request->last_name;
        $add_update->email             = trim($request->email);
        $add_update->phone             = $request->phone;
        $add_update->save();

        return redirect('admin/employees')->with('success',"Employees successfully register.");
    }

    public function edit($id, Request $request){
        $data['getrecord'] = EmployeesModel::get_single($id);
        $data['get_companies'] = User::getCompanies();
        $data['meta_title'] = 'Edit Employees';
        return view('backend.employees.edit', $data);
    }

    public function destroy($id)
    {
        $deleteRecord = EmployeesModel::get_single($id);
        $deleteRecord->delete();

        return redirect()->back()->with('error', 'Record successfully deleted!');
    }

      public function show($id, Request $request){
        $data['getrecord'] = EmployeesModel::get_single($id);
        $data['meta_title'] = 'Edit Employees';
        return view('backend.employees.view', $data);
    }

}