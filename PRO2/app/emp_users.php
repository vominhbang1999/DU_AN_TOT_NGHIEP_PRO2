<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class emp_users extends Model
{
    protected $primaryKey='id';
    protected $table='users';
    protected $filltable=array('vip','admin','xu','name','hinhanh','dienthoai','email','email_verified_at','status','token','password','re_password','remember_token');
}
