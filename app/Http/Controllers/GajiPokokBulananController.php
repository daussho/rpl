<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GajiPokokBulananController extends Controller
{
    //
	public function index(){
		$gajipokok = DB::table('gaji_pokok_bulanan')->get();
        return view('gajipokok.index', ['gajipokok' => $gajipokok]);
	}
	public function create(){
		
	}
	public function store(Request $request){
		$gajipokok = new GajiPokokBulanan;

        $gajipokok-> = $request->name;
        $gajipokok->nip= $request->nip;
        $gajipokok->bulan =$request->bulan;
        $gajipokok->nominal =$request->nominal;
        $gajipokok->save();
	}
	public function edit($id){
		
	}
	public function update($id){
		
	}
	public function destroy($id){
		
	}

}
