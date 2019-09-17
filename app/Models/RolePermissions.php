<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Webpatser\Uuid\Uuid;

class RolePermissions extends Model
{
    protected $table = 'role_permissions';
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'uuid', 'permission_id' , 'role_id' ,  'updated_at',  'deleted_at', 'created_at',
    ];

    /**
     * @return all accounts order by id ASC
     */
    public static function getAll(){
        return self::all();
    }



    public static function getAllOrderByIdDesc(){
        return self::orderBy('id' , "DESC")->get();
    }


//    public static function updateRole($uuId , $data){
//        return self::where('uuid' , $uuId)->update($data);
//    }
    public static function add($inputs = []){
        $inputs['uuid'] = Uuid::generate()->string;
        return RolePermissions::create($inputs);
    }



    public function permissionData(){
        return $this->belongsTo('App\Models\Permissions', 'permission_id' );
    }
}
