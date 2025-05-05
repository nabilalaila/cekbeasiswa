<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class PageController extends Controller
{
    public array $users=[
        ['nama_lengkap' => 'Nabila Laila Sholihah',
        'username' => 'nabb',
        'password' => 'permisibang',
        'email' => 'nabilalailash@gmail.com',
        'jenis_kelamin' => 'Perempuan',
        'sedang_menempuh' => 'S3',
        'no_telp' => '085806500458'
        ],
        ['nama_lengkap' => 'Chintya Amanda Firdausi',
        'username' => 'chin',
        'password' => 'dittolongindit',
        'email' => 'chintyaaf@gmail.com',
        'jenis_kelamin' => 'Perempuan',
        'sedang_menempuh' => 'S1',
        'no_telp' => '085806500458'
        ],
        ['nama_lengkap' => 'Tantri Okta Puspita Sari',
        'username' => 'tantrum',
        'password' => 'siapayangtau',
        'email' => 'oktatan@gmail.com',
        'jenis_kelamin' => 'Perempuan',
        'sedang_menempuh' => 'S1',
        'no_telp' => '085806500458'
        ],
     ];

    public array $data_beasiswa = [
        ['foto'=> 'images/beasiswa-1.png',
        'nama_beasiswa'=> 'U-Go Scholarship Program 2025',
       'Penyelenggara' => 'INOTEK Foundation',
       'awal_daftar' => '30-04-2025',
       'akhir_daftar' => '23-05-2025',
       'target' => 'SMA, D4, S1',
       'benefit' => 'Uang saku, Pelatihan Soft Skills, Networking',
       'informasi' => 'https://beasiswaugo.id/'
        ],
        ['foto'=> 'images/beasiswa-2.jpg',
        'nama_beasiswa'=> 'Beasiswa Prestasi Telkom University 2025',
        'Penyelenggara' => 'Telkom University',
        'awal_daftar' => '12-04-2025',
        'akhir_daftar' => '06-06-2025',
        'target' => 'SMA, Gap Year',
        'benefit' => 'Beasiswa sampai lulus, Fasttrack S1 + S2 dalam waktu 5 tahun',
        'informasi' => 'https://telkomuniversity.ac.id'
        ],
        ['foto'=> 'images/beasiswa-3.png',
        'nama_beasiswa'=> 'Tobe Maki Foundation Jepang 2025',
        'Penyelenggara' => 'Maki Foundation',
        'awal_daftar' => '01-04-2025',
        'akhir_daftar' => '12-05-2025',
        'target' => 'S1, S2, S3',
        'benefit' => 'Tunjangan bulanan  ¥70,000 sampai  ¥60,000',
        'informasi' => 'https://tobe-maki.or.jp/scholarship/'
        ],
        ['foto'=> 'images/beasiswa-4.png',
        'nama_beasiswa'=> 'Italian Government Scholarships 2025–2026',
        'Penyelenggara' => 'Pemerintah Italia',
        'awal_daftar' => '01-04-2025',
        'akhir_daftar' => '16-05-2025',
        'target' => 'S1, S2, S3',
        'benefit' => 'Uang saku dan Asuransi kesehatan',
        'informasi' => 'https://studyinitaly.esteri.it/'
        ],
        ['foto'=> 'images/beasiswa-5.jpg',
        'nama_beasiswa'=> 'Enigma by Eloi Coco',
        'Penyelenggara' => 'Eloi Coco',
        'awal_daftar' => '22-04-2025',
        'akhir_daftar' => '31-05-2025',
        'target' => 'Non-Degree',
        'benefit' => 'Mentoring dan sertifikasi',
        'informasi' => 'https://eloicoco.com/'
        ],
        ['foto'=> 'images/beasiswa-6.png',
        'nama_beasiswa'=> 'Schwarzman Universitas Tsinghua',
        'Penyelenggara' => 'Eloi Coco',
        'awal_daftar' => '01-04-2025',
        'akhir_daftar' => '10 Sep 2025',
        'target' => 'S2',
        'benefit' => 'Biaya kuliah penuh, Uang sehari-hari',
        'informasi' => 'https://application.sc.tsinghua.edu.cn/'
        ],
        ['foto'=> 'images/beasiswa-7.jpg',
        'nama_beasiswa'=> 'Inagro Muda 2025',
        'Penyelenggara' => 'INAGRO dan Yayasan Khouw Kalbe',
        'awal_daftar' => '28-04-2025',
        'akhir_daftar' => '23-05-2025',
        'target' => 'SMP, SMA, D3, D4, S1',
        'benefit' => 'Dukungan biaya pendidikan, Pelatihan karakter & kepemimpinan',
        'informasi' => 'https://inagro.co.id/2025/04/14/beasiswa-inagro-muda-2025/'
        ],
        ['foto'=> 'images/beasiswa-8.png',
        'nama_beasiswa'=> 'Tanoto Foundation Fellowship Program',
        'Penyelenggara' => 'Tanoto Foundation',
        'awal_daftar' => '07-04-2025',
        'akhir_daftar' => '25-05-2025',
        'target' => 'S1, S2',
        'benefit' => 'Uang saku bulanan, asuransi kesehatan',
        'informasi' => 'https://www.tanotofoundation.org/'
        ],
        ['foto'=> 'images/beasiswa-9.png',
        'nama_beasiswa'=> 'Beasiswa Afrina Scholarship 2025',
        'Penyelenggara' => 'Afrina Academy',
        'awal_daftar' => '01-04-2025',
        'akhir_daftar' => '22-06-2025',
        'target' => 'S1',
        'benefit' => 'Biaya UKT hingga lulus',
        'informasi' => 'https://santrihub.id/beasiswa/afrina-scholarship/'
        ],
        ['foto'=> 'images/beasiswa-10.jpg',
        'nama_beasiswa'=> 'Crewing Talent Scouting 2025',
        'Penyelenggara' => 'Pertamina International Shipping (PIS)',
        'awal_daftar' => '26-04-2025',
        'akhir_daftar' => '07-05-2025',
        'target' => 'D3, D4',
        'benefit' => 'Uang saku, biaya hidup',
        'informasi' => 'https://beasiswa-cts.pertaminafoundation.org/'
        ],
    ];

    public function login()
    {
        return view('login', ['noNavbar' => true]);
    }

    public function validasi_login(Request $request){
        $usernameinput = $request->input('username');
        $passwordinput = $request->input('password');

        foreach($this->users as $user){
            if($user['username'] === $usernameinput && $user['password'] === $passwordinput){
                // session(['user' => $user]);
                return redirect('/dashboard?username=' . $usernameinput);
            }
        }
        return back()->with('error', 'Username atau password salah');
    }


    public function dashboard(Request $request) {
        $username = $request->query('username');
        $dataBeasiswa = $this->data_beasiswa;
        $beasiswaBisaDaftar = array_filter($dataBeasiswa, function ($item) {
        return isset($item['akhir_daftar']) &&
        (Carbon::parse($item['akhir_daftar'])->isToday() || Carbon::parse($item['akhir_daftar'])->isFuture());
        });
        $beasiswaTerdekat = collect($this->data_beasiswa)
        ->filter(function ($item) {
            return isset($item['akhir_daftar']) &&
                   (Carbon::parse($item['akhir_daftar'])->isToday() ||
                    Carbon::parse($item['akhir_daftar'])->isFuture());
        })
        ->sortBy('akhir_daftar')
        ->first();
        return view('dashboard', [
            'username' => $username,
            'beasiswaTerdekat' => $beasiswaTerdekat,
            'jumlahBeasiswaBuka' => count($beasiswaBisaDaftar),
        ]);
    }

    public function profile(Request $request) {
        $username = $request->query('username');
        $user = collect($this->users)->firstWhere('username', $username);
        return view('profile', ['user' => $user]);
    }

    public function pengelolaan(Request $request){
        $beasiswa = $this->data_beasiswa;
        $username = $request->query('username');
        return view('pengelolaan', [
            'beasiswa' => $beasiswa,
            'username' => $username, 
        ]);
    }
}
