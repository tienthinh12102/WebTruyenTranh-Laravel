<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sach extends Model
{
    use HasFactory;

    protected $dates = [
        'created_at',
        'updated_at'
    ];

    public $timestamps = false;
    protected $fillable = [
    	'tensach','hinhanh','tomtat','slug_sach','views','created_at','updated_at','kichhoat'
    ];
    protected $primaryKey = 'id';
    protected $table = 'sach';

}
