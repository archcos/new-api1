<?php
 namespace App\Models;

 use Illuminate\Database\Eloquent\Model;

 class User extends Model{
    protected $table = 'tblusers';
 // column sa table
    protected $fillable = [
     'fullname', 'password', 'email'
     ];

    public $timestamps = false;
    protected $primaryKey = 'id';

    protected $hidden = ['password'];
 }