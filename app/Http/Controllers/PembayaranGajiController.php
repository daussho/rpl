<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PembayaranGaji;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class PembayaranGajiController extends Controller
{
    //mengarahkan ke halaman retrieve
	public function index(){
		$pembayarangaji = DB::table('pembayaran_gajis')
			->select('id','nip_bayar','bulan','total_pembayaran','status_pembayaran')
			->get();
        return view('pembayarangaji.index', ['pembayarangaji' => $pembayarangaji]);
	}
	//Mengarahkan ke halaman create
	public function create(){
		return view('pembayarangaji.create');
	}
	//Melakukan store dari request form
	public function store(Request $request){
		$pembayarangaji = new PembayaranGaji;
        $pembayarangaji->nip_bayar= $request->nip_bayar;
        $pembayarangaji->bulan =$request->bulan;
        $pembayarangaji->total_pembayaran =$request->total_pembayaran;
        $pembayarangaji->status_pembayaran =$request->status_pembayaran;
        $pembayarangaji->save();
        return redirect('/pembayarangaji');
	}
	//Mengubah status pembayaran
	public function edit($id){
		$result= 
			DB::table('pembayaran_gajis')
			->select('id', 'nip_bayar', 'bulan', 'total_pembayaran','status_pembayaran')
			->where('id',$id)
			-> get()
			-> first();

		if ($result->total_pembayaran != NULL) {
			if ($result-> status_pembayaran == 1){
				DB::update('UPDATE pembayaran_gajis SET status_pembayaran=0 WHERE nip_bayar= ? AND bulan=?', [$result->nip_bayar, $result->bulan]);
				
			} else {
				DB::update('UPDATE pembayaran_gajis SET status_pembayaran=1 WHERE nip_bayar= ? AND bulan=?', [$result->nip_bayar, $result->bulan]);
				DB::update('UPDATE gaji_lemburs SET gaji_lembur=0, jam_lembur = 0 WHERE nip= ? AND bulan=?', [$result->nip_bayar, $result->bulan]);
			}	 
		} else {
			
		}
		
		return redirect('/pembayarangaji');
	}
	
	//melakukan update pada model
	public function update(Request $request){
		DB::update('UPDATE pembayaran_gajis SET total_pembayaran=?, status_pembayaran=? WHERE nip_bayar= ? AND bulan=?', [$request->total_pembayaran, $request -> status_pembayaran, $request->nip_bayar, $request->bulan]);
		return redirect('/pembayarangaji');
	}
	//Mendelete record
	public function destroy($id){
		$deleted = DB::delete('DELETE FROM pembayaran_gajis WHERE id=?',[$id]);
		return redirect('/pembayarangaji');
	}

	//Menampilkan total pembayaran
	public function totalbiaya($id){
		$result= 
			DB::table('pembayaran_gajis')
			->select('id', 'nip_bayar', 'bulan', 'total_pembayaran','status_pembayaran')
			->where('id',$id)
			-> get()
			-> first();
		$gajipokokid= 
			DB::table('gaji_pokok_bulanans')
			->select('nominal')
			->where('nip',$result->nip_bayar)
			->get()
			-> first();
		$gajilemburid= 
			DB::table('gaji_lemburs')
			->select('gaji_lembur')
			->where('nip',$result->nip_bayar)
			->get()
			->first();

			//$total = $gajipokokid['nominal']+$gajilemburid['gaji_lembur'];

		DB::update('UPDATE pembayaran_gajis SET total_pembayaran=? WHERE nip_bayar= ? AND bulan=?', [$gajipokokid->nominal+$gajilemburid->gaji_lembur, $result->nip_bayar, $result->bulan]);
		return redirect('/pembayarangaji');
	}

}
