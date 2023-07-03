<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $fillable = ['nama', 'divisi_id', 'penilaian_id', 'kompetensi_id'];
}