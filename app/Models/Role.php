<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Webpatser\Uuid\Uuid;

class Role extends Model
{
    protected $table = 'roles';
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'uuid', 'name_en', 'name_ar',  'updated_at',  'deleted_at', 'created_at',
    ];

    /**
     * @return all accounts order by id ASC
     */
    public static function getAll(){
        return self::all();
    }



    public static function getAllOrderByIdDesc(){
        return self::orderBy('id' , "DESC")->with("groupPermission")->get();
    }


    public static function getRoleByUuId($uuId){
        return self::where('uuid' , $uuId)->first();
    }

    public static function updateRole($uuId , $data){
        return self::where('uuid' , $uuId)->update($data);
    }
    public static function add($inputs = []){
        $inputs['uuid'] = Uuid::generate()->string;
        return Role::create($inputs);
    }


    public function permissions(){
        return $this->hasMany('App\Models\RolePermissions', 'role_id' );
    }
}
