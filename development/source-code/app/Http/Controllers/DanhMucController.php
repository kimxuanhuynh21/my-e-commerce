<?php

namespace App\Http\Controllers;

use App\DanhMucSanPham;
use App\SanPham;

use Illuminate\Http\Request;

use App\Http\Requests;

class DanhMucController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($danhMucSlug)
    {
        $splittedDanhMucSlug = explode("-", $danhMucSlug);
        $idDanhMucHex = $splittedDanhMucSlug[count($splittedDanhMucSlug)-1];
        $idDanhMucDec = hexdec($idDanhMucHex);
        $danhMucIns = DanhMucSanPham::where('id', $idDanhMucDec)->first();
        // $ten = $danhMucIns[0]->ten;
        $dsSanPhamTheoIdDanhMuc = [];
        // if($idDanhMucDec) :
        $dsSanPhamTheoIdDanhMuc = SanPham::where('id_danh_muc_san_pham', $idDanhMucDec)->get();
        // endif;
        $dsDanhMucSanPham = DanhMucSanPham::all();
        return view('pages.danh-sach-san-pham',['dsSanPham' => $dsSanPhamTheoIdDanhMuc,'dsDanhMucSanPham' => $dsDanhMucSanPham]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
