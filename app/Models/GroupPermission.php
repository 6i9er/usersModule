<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Webpatser\Uuid\Uuid;

class GroupPermission extends Model
{
    protected $table = 'group_permissions';
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'name_ar', 'name_en', 'uuid', 'updated_at',  'deleted_at', 'created_at',
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



    public static function getGroupPermissionByUuId($uuId){
        return self::where('uuid' , $uuId)->first();
    }

    public static function updateGroupPermission($uuId , $inputs){
        if(!is_array($inputs)){
            $inputs = $inputs->toArray();
        }
        return GroupPermission::where("uuid" , $uuId)->update($inputs);
    }

    public static function add($inputs = []){
        $inputs['uuid'] = Uuid::generate()->string;
        return GroupPermission::create($inputs->toArray());
    }


    public function permissions(){
        return $this->hasMany('App\Models\Permissions' , 'group_permission_id' );
    }

}
