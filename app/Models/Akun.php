<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Akun extends Model
{
    use HasFactory;

    protected $table = 'Akun';
    protected $primaryKey = 'id';
    protected $incremeenting = false;
    protected $KeyType = 'string';

    public $timestamps = false;
    
}
