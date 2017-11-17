<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\GajiLembur;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class GajiLemburController extends Controller
{
	    //mengarahkan ke halaman retrieve
	public function index(){
		$gajilembur = DB::select('SELECT id, nip,bulan,nominal FROM gaji_lemburs');
        return view('gajilembur.index', ['gajilembur' => $gajilembur]);
	}
	//Mengarahkan ke halaman create
	public function create(){
		return view('gajilemburcreate');
	}
	//Melakukan store dari request form
	public function store(Request $request){
		$gajilembur = new GajiLembur;
        $gajilembur->nip= $request->nip;
        $gajilembur->bulan =$request->bulan;
		$gajilembur->gaji_lembur_jam= $request->gaji_lembur_jam;
        $gajilembur->jam_lembur= $request->jam_lembur;
        $gajilembur->gaji_lembur= $request->gaji_lembur;
        $gajilembur->save();
        return redirect('/');
	}
	//mengarahkan ke halaman edit
	public function edit($id){
		$gajilembur = DB::select('SELECT id, nip,bulan,nominal FROM gaji_lemburs WHERE id=?',[$id]);
		
		return view('gajilemburedit',["gajilembur"=>$gajilembur]);
	}
	//melakukan update pada model
	public function update(Request $request){
		DB::update('UPDATE gaji_lemburs SET nominal=? WHERE nip= ? AND bulan=?', [$request->nominal, $request->nip, $request->bulan]);
	}
	//Mendelete record
	public function destroy($id){
		$deleted = DB::delete('DELETE FROM gaji_lemburs WHERE id=?',[$id]);

	}
}
