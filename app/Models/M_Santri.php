<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\M_Absensi;
use App\Models\M_Kafilah;

class M_Santri extends Model
{
    protected $table = "tbl_santri";

    protected $fillable = [
        'id_santri',
        'nama',
        'jk',
        'tanggal_lahir',
        'tempat_lahir',
        'alamat',
        'no_hp',
        'email',
        'active',
        'id_kafilah',
        'kelas',
        'status_ortu',
        'nama_ortu'
    ];

    public function kafilahData()
    {
        return $this -> belongsTo(M_Kafilah::class, 'id_kafilah', 'id_kafilah');
    }

    public function getDataKafilah($idKafilah)
    {
        return M_Kafilah::where('id_kafilah', $idKafilah) -> first();
    }

    public function getAbsensiData($idSantri)
    {
        $tanggal = date("d");
        $bulan = date("m");
        $tahun = date("Y");
        return M_Absensi::where('id_santri', $idSantri) -> where('tanggal', $tanggal) -> where('bulan', $bulan) -> where('tahun', $tahun) -> count();
    }

    public function getKehadiranAbsensi($idSantri, $bulan, $tahun)
    {
        return M_Absensi::where('id_santri', $idSantri) -> where('bulan', $bulan) -> where('tahun', $tahun) -> count();
    }

    public function buktibayarspp(){
        return $this->belongsTo(M_BuktiBayarSpp::class);
    }

}

