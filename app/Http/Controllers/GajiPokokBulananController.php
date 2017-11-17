<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\GajiPokokBulanan;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class GajiPokokBulananController extends Controller
{
    //mengarahkan ke halaman retrieve
	public function index(){
		$gajipokok = DB::table('gaji_pokok_bulanans')
			->select('id','nip','bulan','nominal')
			->get();
        return view('gajipokok.index', ['gajipokok' => $gajipokok]);
	}
	//Mengarahkan ke halaman create
	public function create(){
		return view('gajipokok.create');
	}
	//Melakukan store dari request form
	public function store(Request $request){
		$gajipokok = new GajiPokokBulanan;
        $gajipokok->nip= $request->nip;
        $gajipokok->bulan =$request->bulan;
        $gajipokok->nominal =$request->nominal;
        $gajipokok->save();
        return redirect('/gajipokok');
	}
	//mengarahkan ke halaman edit
	public function edit($id){
		$gajipokok= 
			DB::table('gaji_pokok_bulanans')
			->select('id', 'nip', 'bulan', 'nominal')
			->where('id',$id)
			->get();
		return view('gajipokok.edit',["gajipokok"=>$gajipokok]);
	}
	//melakukan update pada model
	public function update(Request $request){
		DB::update('UPDATE gaji_pokok_bulanans SET nominal=? WHERE nip= ? AND bulan=?', [$request->nominal, $request->nip, $request->bulan]);
		return redirect('/gajipokok');
	}
	//Mendelete record
	public function destroy($id){
		$deleted = DB::delete('DELETE FROM gaji_pokok_bulanans WHERE id=?',[$id]);
		return redirect('/gajipokok');
	}

}
