<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Webpatser\Uuid\Uuid;

class Member extends Model
{
    protected $table = 'users';
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'name','username', 'email','phone', 'user_type' ,'user_status' , 'uuid' , 'password' ,
        'profile_pic' , 'just_registered', 'updated_at',  'deleted_at', 'created_at',
    ];

    public static function add($inputs = []){
        $inputs['uuid'] = Uuid::generate()->string;
        return Member::create($inputs);
    }

    public static function getAll(){
        return self::where("id" , "!=" , 1)->get();
    }

    public static function getByUUID($uuid = ''){
        return self::where("uuid" ,  $uuid)->first();
    }
    public static function getByEmail($email = ''){
        return self::where("email" ,  $email)->first();
    }
    public static function getByUsername($username = ''){
        return self::where("username" ,  $username)->first();
    }

    public static function edit($inputs = [] , $userId = 0){
        if(!is_array($inputs)){
            $inputs = $inputs->toArray();
        }
        return Member::where("uuid" , $userId)->update($inputs);
    }


    /**
     * relations
     */

    public function roles(){
        return $this->hasMany('App\Models\UserRole' , 'user_id' );
    }
}
