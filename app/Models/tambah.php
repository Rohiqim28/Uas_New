<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tambah extends Model
{
    use HasFactory;
    public $table ="pelanggaran";
    protected $fillable=['nama_santri','jenis_pelanggaran','asrama','tgl','waktu'];

}
