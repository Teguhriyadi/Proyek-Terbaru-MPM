<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Model\Kategori;
use Illuminate\Support\Str;

class KategoriController extends Controller
{
	public function index()
	{
		$data = [
			"data_kategori" => Kategori::orderBy("nama_kategori", "DESC")->get()
		];

		return view("/page/admin/kategori/data_kategori", $data);
	}

	public function tambah(Request $request)
	{
		Kategori::create([
			"nama_kategori" => $request->nama_kategori,
			"slug" => Str::slug($request->nama_kategori)
		]);

		return redirect()->back();
	}
}
