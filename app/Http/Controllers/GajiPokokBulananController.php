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
        $gajipokok->nip=$nipbaru= $request->nip;
        $gajipokok->bulan=$bulanbaru =$request->bulan;
        $gajipokok->nominal =$request->nominal;

        $gajipokok->save();
        //Nambahin data di daftar pembayaran gaji
        DB::insert('insert into pembayaran_gajis(nip_bayar,bulan) values(?,?)',[$nipbaru, $bulanbaru]);
        //Nambahin data di daftar gaji lembur
        DB::insert('insert into gaji_lemburs(nip,bulan) select nip,bulan from gaji_pokok_bulanans where nip=?', [$nipbaru,$bulanbaru]);
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
		$carinip= DB::table('gaji_pokok_bulanans')
			->select('id', 'nip')
			->where('id',$id)
			->get()
			->first();
		$deleted = DB::delete('DELETE FROM gaji_pokok_bulanans WHERE id=?',[$id]);
		$deleted1 = DB::delete('DELETE FROM gaji_lemburs WHERE nip=?', [$carinip -> nip] );
		$deleted2= DB::delete('DELETE FROM pembayaran_gajis WHERE nip_bayar=?', [$carinip -> nip]);
		return redirect('/gajipokok');
	}

}
