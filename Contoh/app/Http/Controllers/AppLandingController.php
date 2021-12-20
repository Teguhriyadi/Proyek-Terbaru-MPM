<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Model\Berita;
use App\Models\Model\HubungiKami;

class AppLandingController extends Controller
{
	public function template_user()
	{
		return view("page/user/layouts/template_user");
	}

    public function index()
    {
        $data = [
            "data_berita" => Berita::orderBy("judul")->get()
        ];

    	return view("page/user/dashboard", $data);
    }

    public function tentang_kami()
    {
    	return view("page/user/tentang_kami");
    }

    public function blog()
    {
    	return view("page/user/blog");
    }

    public function kontak()
    {
    	return view("page/user/kontak");
    }

    public function login()
    {
        return view("page/user/auth/login");
    }

    public function kirim_login(Request $request)
    {
        if (Auth::attempt(["email" => $request->email, "password" => $request->password])) {
            $request->session()->regenerate();

            return redirect("/");
        } else {
            return redirect("/");
        }
    }

    public function register()
    {
        return view("page/user/register");
    }

    public function cek_register(Request $request)
    {
        $pass = $request->password;
        $retype = $request->retype_password;

        if ($pass != $retype)
        {

            return redirect()->back()->with("gagal", "Konfirmasi Password Tidak Sesuai");

        }

        User::create([
            "nama" => $request->nama,
            "email" => $request->email,
            "password" => bcrypt($request->password)
        ]);

        return redirect("/")->with("sukses", "Data Berhasil di Inputkan");
    }

    public function tambah_pesan(Request $request)
    {
        HubungiKami::create([
            "nama" => $request->nama,
            "email" => $request->email,
            "judul" => $request->judul,
            "pesan" => $request->pesan
        ]);

        return redirect()->back();
    }

    public function galeri()
    {
        $data = [
            "data_berita" => Berita::all()
        ];

        return view("/page/user/galeri", $data);
    }
}
