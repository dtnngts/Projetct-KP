<?php

namespace App\Models;

use CodeIgniter\Model;

class SiswaModel extends Model
{
    protected $table         = 'siswa';
    protected $primaryKey    = 'no_registrasi';
    protected $allowedFields = [
        'nama', 'ttl', 'email', 'password', 'telpon', 'pekerjaan', 'alamat', 'foto_profil', 'jenis_kendaraan',
        'kode_kendaraan', 'id_instruktur', 'paket', 'jadwal', 'status', 'jenis_pembayaran', 'jumlah_pembayaran', 'sisa_pembayaran',
        'kehadiran', 'qr', 'created_at', 'updated_at'
    ];
    protected $useTimestamps = true;

    public function get_data($email, $password)
    {
        return $this->db->table('siswa')->where(array(
            'email' => $email,
            'password' => md5($password)
        ))->get()->getRowArray();
    }

    public function getSiswaWithInstruktur()
    {
        $this->select('siswa.*, instruktur.nama as nama');
        $this->join('instruktur', 'instruktur.id_instruktur = siswa.id_instruktur');
        return $this->findAll();
    }
}
