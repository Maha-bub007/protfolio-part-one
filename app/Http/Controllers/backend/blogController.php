<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class blogController extends Controller
{
    //
    public function creatBlog(){
        if (Auth::user()) {
            if (Auth::user()->role == 1) {
                return view('backend.admin.blog.creat');
            }
        }
    }
    public function storeBlog(Request $request){
        if (Auth::user()) {
            if (Auth::user()->role == 1) {
                $Blog = new Blog();
                $Blog->name = $request->name;
                $Blog->desc = $request->desc;
                $Blog->date = $request->date;
                if ($request->image) {
                    $imagename = rand() . '-Blog' . '.' . $request->image->extension();
                    $request->image->move('backend/image/Blog/', $imagename);
                    $Blog->image = $imagename;
                }
                $Blog->save();
                return redirect()->back();
            }
        }
    }
    public function listBlog()
    {
        if (Auth::user()) {
            if (Auth::user()->role == 1) {
                $Bloglist = Blog::get();
                return view('backend.admin.blog.list', compact('Bloglist'));
            }
        }
    }
}
