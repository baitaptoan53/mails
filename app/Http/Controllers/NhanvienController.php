<?php

namespace App\Http\Controllers;

use App\Models\Nhanvien;
use Illuminate\Http\Request;

class NhanvienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nhanviens = Nhanvien::all();
        return view('nhan_vien.index', compact('nhanviens'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('nhan_vien.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'ten' => 'required',
            'vi_tri' => 'required',
            'luong' => 'required',
            'phong_ban' => 'required',
        ]);
        $nhanvien = new Nhanvien;
        $nhanvien->ten = $request->ten;
        $nhanvien->vi_tri_lam_viec = $request->vi_tri_lam_viec;
        $nhanvien->luong = $request->luong;
        $nhanvien->phong_ban = $request->phong_ban;
        $nhanvien->save();
        return redirect()->route('nhanvien.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Nhanvien $nhanvien)
    {
        return view('nhan_vien.show', compact('nhanvien'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Nhanvien $nhanvien)
    {
        return view('nhan_vien.edit', compact('nhanvien'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Nhanvien $nhanvien)
    {
        $request->validate([
            'ten' => 'required',
            'vi_tri' => 'required',
            'luong' => 'required',
            'phong_ban' => 'required',
        ]);
        $nhanvien = Nhanvien::find($nhanvien->id);
        $nhanvien->ten = $request->ten;
        $nhanvien->vi_tri_lam_viec = $request->vi_tri_lam_viec;
        $nhanvien->luong = $request->luong;
        $nhanvien->phong_ban = $request->phong_ban;
        $nhanvien->save();
        return redirect()->route('nhanvien.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Nhanvien::destroy($id);
        return redirect()->route('nhanvien.index');
    }
}
