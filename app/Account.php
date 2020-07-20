<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Account extends Model
{
    use SoftDeletes;

    protected $table = 'Account';

    protected $fillable = [
        'id', 'name', 'typeId', 'status'
    ];

    protected $dates = ['deleted_at'];

    public function type(){
        return $this->hasOne('App\AccountType', 'id', 'typeId');
    }
}
