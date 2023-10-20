<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\DB;


class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id',
        'id_role',
        'social_id',
        'image',
        'fullname',
        'email',
        'phone',
        'address',
        'token',
        'password',
        'wallet',
        'gender',
        'status',

    ];
    protected $table = 'users';

    public function addUsers($data){
        return $this->insert($data);
    }

    public function updateUser($data, $condition){
        return $this
            ->where($condition)
            ->update($data);
    }



    public function listUser($condition){

        return $this->orderBy('id', 'desc')->where($condition)->paginate(5);

    }

    public function Show($condition){
        return DB::table('roles')->where($condition)->get();
    }
    protected $hidden = [
        'password',
        'remember_token',
    ];
    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
    //quên mật khẩu
    public function resetPassword($condition){
        return $this
            ->where($condition)
            ->first();
    }
    public function editPassword($email,$data){
        return $this
            ->where('email','=',$email)
            ->update($data);
    }
    public function editUser($id){
        return $this->where('id', '=', $id)->first();
    }

}
