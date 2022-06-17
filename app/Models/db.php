<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class db extends Model
{
    use HasFactory;

    //DB中的table名稱
    protected $table = 'db';

    //填入你的primarykey
    public $primaryKey = 'id';

    //填入你的白名單，就是可以修改的欄位
    protected $fillable = [
        'templateId',
        'templateName',
        'templateContent',
        'lineAccountId',
        'market',
        'camapigId',
        'type',
    ];

    //填入的欄位會隱藏起來
    // protected $hidden = [
    //     'password', 'remember_token',
    // ];
}
