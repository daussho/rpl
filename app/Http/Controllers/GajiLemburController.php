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
		$gajipokok = DB::table('gaji_lemburs')->select('nip','bulan','gaji_lembur_jam','gaji_lembur','jam_lembur')->get();
        return view('gajilembur.index', ['gajilembur' => $gajilembur]);
	}
	//Mengarahkan ke halaman create
	public function create(){
		return view('gajilembur.create');
	}
	//Melakukan store dari request form
	public function store(Request $request){
		$gajilembur = new GajiLembur;
        $gajilembur->nip= $request->nip;
        $gajilembur->bulan =$request->bulan;
		$gajilembur->gaji_lembur_jam= $request->gaji_lembur_jam;
        $gajilembur->jam_lembur= $request->jam_lembur;
        $gajilembur->gaji_lembur= $request->jam_lembur *$request->gaji_lembur_jam;
        $gajilembur->save();
        return redirect('/');
	}
	//mengarahkan ke halaman edit
	public function edit($id){
		$gajilembur= 
			DB::table('gaji_pokok_bulanans')
			->select('nip', 'bulan', 'gaji_lembur_jam','gaji_lembur','jam_lembur')
			->where('id',$id)
			->get();
		return view('gajilembur.edit',["gajilembur"=>$gajilembur]);
	}
	//melakukan update pada model
	public function update(Request $request){
		DB::update('UPDATE gaji_lemburs SET gaji_lembur_jam=?, jam_lembur=?, gaji_lembur=? WHERE nip= ? AND bulan=?', [$request->gaji_lembur_jam, $request->jam_lembur, $request->jam_lembur *$request->gaji_lembur_jam, $request->nip, $request->bulan]);
		return redirect('/gajilembur');
	}
	//Mendelete record
	public function destroy($id){
		$deleted = DB::delete('DELETE FROM gaji_lemburs WHERE id=?',[$id]);
		return redirect('/gajilembur');
	}
}
