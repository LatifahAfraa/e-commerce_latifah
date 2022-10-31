<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ListController extends Controller
{
    public function index()
    {
        $user = User::all();
        return view('pages.user_list', compact('user'));
    }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],

        ]);
             if ($validator->fails()){
            return back()->with("error", $validator->errors()->first());
        }
    }
}

/*
    C = CREATE
    R = READ
    U = UPDATE
    D = DELETE
    ===============
    RESOURCE :
        Index : List
        Create : Halaman form tambah data
        Store : Proses tambah adata
        Show : Menampilkan Detail Data
        Edit : Halaman form edit data
        Update : Proses edit data
        Delete : Hapus Data

*/
