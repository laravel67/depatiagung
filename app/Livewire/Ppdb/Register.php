<?php

namespace App\Livewire\Ppdb;

use App\Models\Student;
use App\Models\Taj;
use App\Models\User;
use Livewire\Component;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class Register extends Component
{
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

    public $isActive = false;
    public function render()
    {
        return view('livewire.ppdb.register');
    }
    public function submit()
    {
        sleep(2);
        $validatedData = $this->validate([
            'no_identitas' => 'required|unique:students,no_identitas|max:10',
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
            'kontak' => 'nullable',
            'email' => [
                'required',
                'email',
                Rule::unique('students', 'email'),
                Rule::unique('users', 'email')
            ],
        ], [
            'no_identitas.required' => 'Kolom no identitas harus diisi.',
            'no_identitas.unique' => 'No identitas sudah ada dalam database.',
            'no_identitas.max' => 'Kolom no identitas tidak boleh lebih dari 10 karakter.',
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
            'email.required' => 'Kolom email harus diisi.',
            'email.email' => 'Format email tidak valid.',
            'email.unique' => 'Email sudah ada dalam database.',
        ]);
        $password = Hash::make($validatedData['no_identitas']);
        $email = $validatedData['no_identitas'];
        $latestTajId = Taj::latest()->value('id');
        $validatedData['ta_id'] = $latestTajId;
        User::create([
            'name' => $validatedData['nama'],
            'email' => $validatedData['email'],
            // 'username' => $validatedData['nama'],
            'password' => Hash::make($validatedData['no_identitas']),
        ]);
        Student::create($validatedData);
        $this->resetForm();
        Session::flash('success', 'Pendaftaran berhasil, silahkan login menggunakan email yang terdaftar');
    }
    private function resetForm()
    {
        $this->reset([
            'no_identitas', 'nama', 'tempat_lahir', 'tanggal_lahir', 'jenis_kelamin', 'agama', 'kewarganegaraan',
            'negara', 'provinsi', 'kabupaten', 'kecamatan', 'alamat', 'kode_pos', 'nama_ayah', 'nama_ibu',
            'pekerjaan_ayah', 'pekerjaan_ibu', 'telphone_ayah', 'telphone_ibu', 'asal_sekolah', 'status',
            'jenjang', 'kontak', 'email'
        ]);
    }

    public function checkActive()
    {
        $count = Taj::where('status', 1)->count();
        return $count > 0;
    }
}
