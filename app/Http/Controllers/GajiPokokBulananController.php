<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\GajiPokokBulanan;
use App\Http\Controllers\Controller;

class GajiPokokBulananController extends Controller
{
    //mengarahkan ke halaman retrieve
	public function index(){
		$gajipokok = DB::select('SELECT id, nip,bulan,nominal FROM gaji_pokok_bulanans');
        return view('gajipokok.index', ['gajipokok' => $gajipokok]);
	}
	//Mengarahkan ke halaman create
	public function create(){
	//	DB::insert('INSERT INTO gaji_pokok_bulanans (nip, bulan,nominal ) values (?, ?,?)', [$request->nip, $request->, $request->nominal]);
		return view('gajipokokcreate');
	}
	//Melakukan store dari request form
	public function store(Request $request){
		$gajipokok = new GajiPokokBulanan;
        $gajipokok->nip= $request->nip;
        $gajipokok->bulan =$request->bulan;
        $gajipokok->nominal =$request->nominal;
        $gajipokok->save();
        return redirect('/');
	}
	//mengarahkan ke halaman edit
	public function edit(){

	}
	//melakukan update pada model
	public function update($id){
		DB::update('UPDATE gaji_pokok_bulanans SET nominal=? WHERE nip= ? AND bulan=?', [$nominal, $nip, $bulan]);
	}
	//Mendelete record
	public function destroy($id){
		$deleted = DB::delete('DELETE FROM users WHERE id=?',[$id]);

	}

}
