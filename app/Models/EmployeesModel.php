<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class EmployeesModel extends Model
{
    protected $table = 'employees';

	static public function get_single($id){
		return self::find($id);
	}

	public function get_companies_name(){
      return $this->belongsTo(User::class, "companies_id");
   }

    static public function getRecord($request)
    {
        $return =  self::select('employees.*')
            ->orderBy('id','desc');
            $return = $return->join('users', 'employees.companies_id', '=', 'users.id');
            if(!empty($request->id))
            {
                $return = $return->where('employees.id', '=', $request->id);
            }

            if (!empty($request->name)) {
                $return = $return->where('users.name', 'like', '%' . $request->name . '%');
            }
            
            if (!empty($request->first_name)) {
                $return = $return->where('employees.first_name', 'like', '%' . $request->first_name . '%');
            }

            if (!empty($request->last_name)) {
                $return = $return->where('employees.last_name', 'like', '%' . $request->last_name . '%');
            }

            

           
            $return = $return->paginate(10);

        return $return;
    }
   
}
