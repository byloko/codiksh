<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'users';

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    static public function get_single($id)
    {
        return self::find($id);
    }


    static public function getRecord($request)
    {
        $return =  self::select('*')
                ->orderBy('id','desc');
                
                if(!empty($request->id))
                {
                    $return = $return->where('id', '=', $request->id);
                }

                if ($request->name) {
                    $return = $return->where('name', 'like', '%' . $request->name . '%');
                }

                if ($request->email) {
                    $return = $return->where('email', 'like', '%' . $request->email . '%');
                }

                if ($request->website) {
                    $return = $return->where('website', 'like', '%' . $request->website . '%');
                }
               
                $return = $return->where('is_admin','=', 0)
                ->paginate(10);

         return $return;
    }

     static public function getCompanies()
    {
        return self::where('is_admin','=', 0)->get();
    }

}
