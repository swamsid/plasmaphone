<?php

namespace App\Model\master;

use Illuminate\Database\Eloquent\Model;

class karyawan extends Model
{
    protected $table = 'd_karyawan';
    protected $primaryKey = 'nik_karyawan';
    public $incrementing = false;
}
