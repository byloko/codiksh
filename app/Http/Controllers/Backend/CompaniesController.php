<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\EmployeesModel;
use File;
use Str;


class CompaniesController extends Controller
{
    public function index(Request $request)
    {
        $getrecord = User::getRecord($request);
        
  
        $data['getrecord'] = $getrecord;

        $data['meta_title'] = 'Companies List';
        return view('backend.companies.list', $data);
    }

    public function create(Request $request){
        $data['meta_title'] = 'Add Companies';
        return view('backend.companies.add', $data);
    }

    public function store_update($id = '', Request $request){
        
        $add_update = request()->validate([
          'name'       => 'required',
        ]);

        if(!empty($id)){
            $add_update = User::find($id);
        }else{
            $add_update = new User;
            $add_update->is_admin          = 0;
        }

        if (!empty($request->file('logo'))) {
            if(!empty($add_update->logo) && file_exists('storage/app/public/img/'.$add_update->logo)){
                unlink('storage/app/public/img/'.$add_update->logo);
            }
            $ext            = 'jpg';
            $file           = $request->file('logo');
            $randomStr      = Str::random(30);
            $filename       = $randomStr . '.' . $ext;
            $file->move('storage/app/public/img/', $filename);
            $add_update->logo = $filename;
        }

        $add_update->name              = $request->name;
        $add_update->email             = trim($request->email);
        $add_update->website           = $request->website;
        $add_update->save();

        return redirect('admin/companies')->with('success',"Companies successfully register.");
    }

    public function edit($id, Request $request){
        $data['getrecord'] = User::get_single($id);
        $data['meta_title'] = 'Edit Companies';
        return view('backend.companies.edit', $data);
    }

    public function destroy($id)
    {
        $deleteRecord = User::get_single($id);
        $deleteRecord->delete();

        EmployeesModel::where('companies_id','=',$id)->delete();

        return redirect()->back()->with('error', 'Record successfully deleted!');
    }

    public function show($id, Request $request){
        $data['getrecord'] = User::get_single($id);
        $data['meta_title'] = 'Edit Companies';
        return view('backend.companies.view', $data);
    }

}