<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Siswa extends Model
{
    use SoftDeletes;
    use HasFactory;
    protected $table = 'siswa';

    protected $fillable  = ['nama','umur','alamat'];

    protected $dates =['deleted_at'];

}
