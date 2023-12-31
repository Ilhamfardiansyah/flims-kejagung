<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('Dashboard.index');
    }

    public function form_regis()
    {
        return view('Dashboard.FormRegis');
    }

    public function form_list()
    {
        return view('Dashboard.FormList');
    }

    public function regist()
    {
        return view('Dashboard.regist');
    }

    public function coc()
    {
        return view('Dashboard.coc');
    }

    public function print()
    {
        return view('Print.CetakanRegistrasi');
    }

    public function detail()
    {
        return view('Dashboard.detail');
    }

    public function daftar_kasus()
    {
        return view('Dashboard.DaftarKasus');
    }

    public function edit_regist()
    {
        return view('Dashboard.detail');
    }

    public function detail_list()
    {
        return view('Detail.DetailList');
    }

    public function search()
    {
        return view('Search');
    }

    public function tambah()
    {
        return view('TambahBBE');
    }

    public function detail_listcase()
    {
        return view('Detail.ListCase');
    }

    public function edit_listcase()
    {
        return view('Edit.ListCase');
    }

    public function detail_coc()
    {
        return view('Detail.Coc');
    }

    public function print_coc()
    {
        return view('Print.Coc');
    }

    public function ba_akuisisi()
    {
        return view('Print.Ba');
    }

    public function akuisisi()
    {
        return view('Dashboard.Akuisisi');
    }

    public function search_ba()
    {
        return view('SearchBa');
    }

    public function laporan()
    {
        return view('Laporan');
    }

    public function foto()
    {
        return view('Detail.Foto');
    }

}
