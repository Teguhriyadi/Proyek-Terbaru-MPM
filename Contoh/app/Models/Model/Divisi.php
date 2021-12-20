<?php

namespace App\Models\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Divisi extends Model
{
    use HasFactory;

    protected $table = "tb_divisi";

    protected $guarded = [''];

    public $timestamps = false;

    public function getAnggota()
    {
    	return $this->belongsTo("App\Models\Model\Anggota", "nim_anggota", "nim");
    }

    public function getBagian()
    {
    	return $this->belongsTo("App\Models\Model\Bagian", "id_bagian", "id_bagian");
    }


    public function getJabatan()
    {
    	return $this->belongsTo("App\Models\Model\Jabatan", "id_jabatan", "id_jabatan");
    }
}
