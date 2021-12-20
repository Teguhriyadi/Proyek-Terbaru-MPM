<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AspirasiController extends Controller
{
	public function form_aspirasi()
	{
		return view("page/user/aspirasi/form_aspirasi");
	}

    public function data_aspirasi()
    {
    	return view("page/user/aspirasi/data_aspirasi");
    }

    public function tambah(Request $request)
    {
    	
    }
}
