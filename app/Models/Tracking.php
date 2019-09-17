<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Webpatser\Uuid\Uuid;

class Tracking extends Model
{
    protected $table = 'tracking';
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'uuid', 'user_id', 'action', 'updated_at',  'deleted_at', 'created_at',
    ];


    public static function getAll($pages = "1" , $pagination = "1" ,$user_id = '0' ){
        $data = new Tracking();
        if($user_id == "1"){
            $data = $data->where("user_id" , $user_id);
        }
        if($pagination == "1"){
            return $data->paginate($pages);
        }else{
            return $data->get();
        }
    }


    public static function add($inputs = []){
        $inputs['uuid'] = Uuid::generate()->string;
        return Tracking::create($inputs);
    }


    public function member(){
        return $this->belongsTo('App\Models\Member', 'user_id' );
    }
}
