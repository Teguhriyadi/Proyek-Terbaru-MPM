<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Model\PostBlog;

class PostBlogController extends Controller
{
	public function index()
	{
		$data = [
			"blog_post" => PostBlog::orderBy("title", "DESC")->get()
		];

		return view("/page/admin/post_blog/data_post_blog", $data);
	}

	public function form_tambah()
	{
		return view("/page/admin/post_blog/form_tambah");
	}
}
