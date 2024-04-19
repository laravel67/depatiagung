<?php

namespace App\Livewire\Ppdb;

use App\Models\Daftar;
use Livewire\Component;
use App\Models\Student;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class DataRegister extends Component
{
    public $id;
    public $no_identitas, $nama;
    public $tempat_lahir, $tanggal_lahir;
    public $jenis_kelamin, $agama;
    public $kewarganegaraan, $negara;
    public $provinsi, $kabupaten, $kecamatan, $alamat, $kode_pos;
    public $nama_ayah, $nama_ibu, $pekerjaan_ayah, $pekerjaan_ibu, $telphone_ayah, $telphone_ibu;
    public $asal_sekolah;
    public $status, $jenjang;
    public $kontak;
    public $email;
    public $image;
    public $no_identitasOld;
    public $imageOld;

    protected $listeners = [
        'uploadedImage' => 'uploadedImageHandler'
    ];

    public function mount()
    {
        $this->loadStudentData();
    }

    public function loadStudentData()
    {
        $user = Auth::user();
        if ($user->role == 'siswa') {
            $student = Student::where('email', $user->email)->first();
            if ($student) {
                $this->id = $student->id;
                $this->no_identitas = $student->no_identitas;
                $this->no_identitasOld = $student->no_identitas;
                $this->nama = $student->nama;
                $this->tempat_lahir = $student->tempat_lahir;
                $this->tanggal_lahir = $student->tanggal_lahir;
                $this->jenis_kelamin = $student->jenis_kelamin;
                $this->agama = $student->agama;
                $this->kewarganegaraan = $student->kewarganegaraan;
                $this->negara = $student->negara;
                $this->provinsi = $student->provinsi;
                $this->kabupaten = $student->kabupaten;
                $this->kecamatan = $student->kecamatan;
                $this->alamat = $student->alamat;
                $this->kode_pos = $student->kode_pos;
                $this->nama_ayah = $student->nama_ayah;
                $this->nama_ibu = $student->nama_ibu;
                $this->pekerjaan_ayah = $student->pekerjaan_ayah;
                $this->pekerjaan_ibu = $student->pekerjaan_ibu;
                $this->telphone_ayah = $student->telphone_ayah;
                $this->telphone_ibu = $student->telphone_ibu;
                $this->asal_sekolah = $student->asal_sekolah;
                $this->status = $student->status;
                $this->jenjang = $student->jenjang;
                $this->kontak = $student->kontak;
                $this->email = $student->email;
                $this->imageOld = $student->image ? asset('siswa-images/' . $student->image) : null;
            }
        }
    }
    public function render()
    {
        return view('livewire.ppdb.data-register');
    }

    public function update()
    {
        sleep(3);
        $rules = [
            'no_identitas' => 'required|max:10',
            'nama' => 'required|max:255',
            'tempat_lahir' => 'required|max:255',
            'tanggal_lahir' => 'required|date',
            'jenis_kelamin' => 'required',
            'agama' => 'required',
            'kewarganegaraan' => 'required',
            'negara' => 'required',
            'provinsi' => 'required',
            'kabupaten' => 'required',
            'kecamatan' => 'required',
            'alamat' => 'required',
            'kode_pos' => 'required',
            'nama_ayah' => 'required',
            'nama_ibu' => 'required',
            'pekerjaan_ayah' => 'required',
            'pekerjaan_ibu' => 'required',
            'telphone_ayah' => 'required',
            'telphone_ibu' => 'required',
            'asal_sekolah' => 'required',
            'status' => 'required',
            'jenjang' => 'required',
            'kontak' => 'nullable|max:12',
        ];
        if ($this->no_identitas !== $this->no_identitasOld) {
            $rules['no_identitas'] .= '|unique:registers,no_identitas';
        }
        $validatedData = $this->validate($rules, [
            'no_identitas.required' => 'Kolom no identitas harus diisi.',
            'no_identitas.max' => 'Kolom no identitas tidak boleh lebih dari 10 karakter.',
            'no_identitas.unique' => 'No identitas sudah digunakan.',
            'nama.required' => 'Kolom nama harus diisi.',
            'nama.max' => 'Kolom nama tidak boleh lebih dari 255 karakter.',
            'tempat_lahir.required' => 'Kolom tempat lahir harus diisi.',
            'tempat_lahir.max' => 'Kolom tempat lahir tidak boleh lebih dari 255 karakter.',
            'tanggal_lahir.required' => 'Kolom tanggal lahir harus diisi.',
            'tanggal_lahir.date' => 'Kolom tanggal lahir harus dalam format tanggal yang valid.',
            'jenis_kelamin.required' => 'Kolom jenis kelamin harus dipilih.',
            'agama.required' => 'Kolom agama harus dipilih.',
            'kewarganegaraan.required' => 'Kolom kewarganegaraan harus dipilih.',
            'negara.required' => 'Kolom negara harus diisi.',
            'provinsi.required' => 'Kolom provinsi harus diisi.',
            'kabupaten.required' => 'Kolom kabupaten/kota harus diisi.',
            'kecamatan.required' => 'Kolom kecamatan harus diisi.',
            'alamat.required' => 'Kolom alamat harus diisi.',
            'kode_pos.required' => 'Kolom kode pos harus diisi.',
            'nama_ayah.required' => 'Kolom nama ayah harus diisi.',
            'nama_ibu.required' => 'Kolom nama ibu harus diisi.',
            'pekerjaan_ayah.required' => 'Kolom pekerjaan ayah harus diisi.',
            'pekerjaan_ibu.required' => 'Kolom pekerjaan ibu harus diisi.',
            'telphone_ayah.required' => 'Kolom nomor telepon/whatsapp ayah harus diisi.',
            'telphone_ibu.required' => 'Kolom nomor telepon/whatsapp ibu harus diisi.',
            'asal_sekolah.required' => 'Kolom asal sekolah harus diisi.',
            'status.required' => 'Kolom status calon siswa harus dipilih.',
            'jenjang.required' => 'Kolom jenjang harus dipilih.',
            'kontak.max' => 'Kolom kontak tidak boleh lebih dari 12 digit.',
        ]);

        $user = Auth::user();
        if ($user->role == 'siswa') {
            $student = Student::where('email', $this->email)->first();
            if ($student) {
                $student->update($validatedData);

                Session::flash('success', 'Data berhasil diperbarui');
                $this->loadStudentData();
            }
        }
    }
    public function uploadedImageHandler()
    {
        Session::flash('success', 'Foto berhasil diubah');
    }

    public function cancel()
    {
        $this->loadStudentData();
    }
}
