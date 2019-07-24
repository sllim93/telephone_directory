<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entity extends Model
{
    protected $table = 'entity';

    protected $guarded = array();

    const 
        CODE_STATUS_INACTIVE = 0,
        CODE_STATUS_ACTIVE = 1
    ;

    public function entityCategory(){
        return $this->hasMany('App\EntityCategory');
    }

    public function getStatus(){
        switch ($this->status){
            case self::CODE_STATUS_ACTIVE:
                $value = trans('string.Active');
            break;
            case self::CODE_STATUS_INACTIVE:
                $value = trans('string.Inactive');
            break;
            default:
                $value = '-';
            break;
        }
        return $value;
    }

    public function getStatusLabel(){
        switch ($this->status){
            case self::CODE_STATUS_ACTIVE:
                $value = 'success';
            break;
            case self::CODE_STATUS_INACTIVE:
                $value = 'danger';
            break;
            default:
                $value = '-';
            break;
        }
        return $value;
    }
}
