<?php

namespace App\Http\Controllers;

use App\KebunModel;
use Illuminate\Http\Request;
use App\PilotModel;
use Illuminate\Support\Facades\Hash;
class RegisterPilotController extends Controller
{
    protected $kebun = null;
    protected $pilot = null;

    public function __construct() {
        $this->kebun = new KebunModel();
        $this->pilot = new PilotModel();
    }

    public function register() {
        $kebun = $this->kebun->all();
        return view('register', compact('kebun') );
    }

    public function submit(Request $request) {
        $data = $request->validate([
            'nama' => 'required|max:50|string',
            'email' => 'required|string|email|max:50|unique:pilot',
            'nik_sap' => 'required|string|numeric|digits_between:1,10|unique:pilot',
            'jabatan' => 'required|string|alpha_num|max:50',
            'no_hp' => 'required|string|numeric|digits_between:5,20|unique:pilot',
            'username' => 'required|string|alpha_num|max:30|unique:pilot',
            'password' => 'required|string|min:8|max:20|confirmed',
            'password_confirmation' => 'required|string|min:8|max:20',
            'kode_kebun' => 'required|string|max:6|alpha_num|exists:kebun,kode_kebun',
            'afdeling' => 'required|numeric|digits_between:1,3'
        ]);

        $data['password'] = Hash::make($data['password']);
        $this->pilot->create($data);
        $nama_pilot = $request->input('nama');

        return redirect()->back()->with('success', "Pilot drone $nama_pilot telah terdaftar" );
    }
}
