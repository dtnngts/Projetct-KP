<?php

namespace App\Controllers;
use App\Models\AdminModel;
use App\Models\SuperModel;
use App\Models\ValidatorModel;
use App\Models\DaftarModel;

class AdminController extends BaseController
{

    public function __construct()
	{
		if (session()->get('username') == '') {
			session()->setFlashdata('gagal', 'Anda belum login');
			return redirect()->to(base_url('/login'));
		}
		$this->DaftarModel = new DaftarModel();
	}

    public function admin()
	{
		if (session()->get('username') == '') {
			session()->setFlashdata('gagal', 'Anda belum login');
			return redirect()->to(base_url('/login'));
		}
		
		$DaftarModel = model("DaftarModel");
		$data = [
			'title' => "Home",
			'hendri' => $DaftarModel->where('instruktur', 'Hendri')->findAll(),
			'suhadi' => $DaftarModel->where('instruktur', 'Suhadi')->findAll(),
			'yono' => $DaftarModel->where('instruktur', 'Yono')->findAll(),
			'eko' => $DaftarModel->where('instruktur', 'Eko')->findAll(),
			// 'siswa' => $DaftarModel->where('status', 'siswa')->findAll(),
			// 'alumni' => $DaftarModel->where('status', 'alumni')->findAll(),
			'nama' => session()->get('username')
		];
		return view('admin/v_admin', $data);
	}

    public function hendri()
    {
		if (session()->get('username') == '') {
			session()->setFlashdata('gagal', 'Anda belum login');
			return redirect()->to(base_url('/login'));
		}

        $keyword = $this->request->getVar('keyword');
		if ($keyword) {
			$hendri = $this->DaftarModel->where('instruktur', 'Hendri')->search($keyword);
		} else {
			$hendri = $this->DaftarModel;
		}

        $data = [
			'hendri' => $hendri->where('instruktur', 'hendri')->findAll(),
		];
        
        return view('admin/data_kursus/v_hendri', $data);
    }

	public function suhadi()
    {
		if (session()->get('username') == '') {
			session()->setFlashdata('gagal', 'Anda belum login');
			return redirect()->to(base_url('/login'));
		}
		
        $keyword = $this->request->getVar('keyword');
		if ($keyword) {
			$suhadi = $this->DaftarModel->where('instruktur', 'Suhadi')->search($keyword);
		} else {
			$suhadi = $this->DaftarModel;
		}

        $data = [
			'suhadi' => $suhadi->where('instruktur', 'Suhadi')->findAll(),
		];
        
        return view('admin/data_kursus/v_suhadi', $data);
    }

	public function yono()
    {
		if (session()->get('username') == '') {
			session()->setFlashdata('gagal', 'Anda belum login');
			return redirect()->to(base_url('/login'));
		}
		
        $keyword = $this->request->getVar('keyword');
		if ($keyword) {
			$yono = $this->DaftarModel->where('instruktur', 'Yono')->search($keyword);
		} else {
			$yono = $this->DaftarModel;
		}

        $data = [
			'yono' => $yono->where('instruktur', 'Yono')->findAll(),
		];
        
        return view('admin/data_kursus/v_yono', $data);
    }

	public function eko()
    {
		if (session()->get('username') == '') {
			session()->setFlashdata('gagal', 'Anda belum login');
			return redirect()->to(base_url('/login'));
		}
		
        $keyword = $this->request->getVar('keyword');
		if ($keyword) {
			$eko = $this->DaftarModel->where('instruktur', 'Eko')->search($keyword);
		} else {
			$eko = $this->DaftarModel;
		}

        $data = [
			'eko' => $eko->where('instruktur', 'Eko')->findAll(),
		];
        
        return view('admin/data_kursus/v_eko', $data);
    }

	public function edit($no_registrasi)
	{
		if (session()->get('username') == '') {
			session()->setFlashdata('gagal', 'Anda belum login');
			return redirect()->to(base_url('/login'));
		}

		$data = [
			'row' => $this->DaftarModel->getDaftar($no_registrasi),
		];

		return view("admin/v_edit", $data);
	}

	public function update($no_registrasi, $status)
	{
		if (session()->get('username') == '') {
			session()->setFlashdata('gagal', 'Anda belum login');
			return redirect()->to(base_url('/login'));
		}

		$DaftarModel = model("DaftarModel");
		$data = $this->request->getPost();
		$DaftarModel->update($no_registrasi, $data);

		return redirect()->to(base_url($status));
	}

	public function delete($no_registrasi, $status)
	{
		if (session()->get('username') == '') {
			session()->setFlashdata('gagal', 'Anda belum login');
			return redirect()->to(base_url('/login'));
		}

		$row = new DaftarModel();
		$row->where(['no_registrasi' => $no_registrasi])->delete();
		return redirect()->to(base_url($status));
	}

	public function create() {
		if (session()->get('username') == '') {
			session()->setFlashdata('gagal', 'Anda belum login');
			return redirect()->to(base_url('/login'));
		}

		$AdminModel = new AdminModel();
		$SuperModel = new SuperModel();
		$ValidatorModel = new ValidatorModel();

		$data = [
			'admin' => $AdminModel->findAll(),
			'super' => $SuperModel->findAll(),
			'validator' => $ValidatorModel->findAll(),
			'nama' => session()->get('username')
		];
		return view('admin/v_inputadmin', $data);
	}

	public function store() {
		$data = [
			'username' => $this->request->getVar('username'),
			'password' => $this->request->getVar('password'),
			'nama' => $this->request->getVar('nama'),
			'admin' => $this->request->getVar('admin'),
			'role' => $this->request->getVar('role'),
		];

		model($data['admin'])->insert($data);

		return redirect()->to(base_url('admin/inputadmin'));
	}

	public function lihatadmin()
    {
		if (session()->get('username') == '') {
			session()->setFlashdata('gagal', 'Anda belum login');
			return redirect()->to(base_url('/login'));
		}

        $AdminModel = new AdminModel();
		$SuperModel = new SuperModel();
		$ValidatorModel = new ValidatorModel();

		$data = [
			'admin' => $AdminModel->findAll(),
			'super' => $SuperModel->findAll(),
			'validator' => $ValidatorModel->findAll(),
			'nama' => session()->get('username')
		];
		return view('admin/v_lihatadmin', $data);
    }

	public function excel () 
	{
		if (session()->get('username') == '') {
			session()->setFlashdata('gagal', 'Anda belum login');
			return redirect()->to(base_url('/login'));
		}

        $keyword = $this->request->getVar('keyword');
		if ($keyword) {
			$siswa = $this->DaftarModel->where('status', 'siswa')->search($keyword);
		} else {
			$siswa = $this->DaftarModel;
		}

        $data = [
			'siswa' => $siswa->where('status', 'siswa')->findAll(),
		];
        
        return view('admin/data_kursus/excel_siswa', $data);
	}
}
