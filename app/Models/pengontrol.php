<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pengontrol extends Model
{
    use HasFactory;
    public $table="pengontrols";
    protected $fillable=['nama','daerah_kontrol'];
}
