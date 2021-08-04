<?php


namespace App\Http\Controllers;

use App\Models\Maba;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
 
 
class DataController extends Controller
{
	public function index(Request $request)
	{
    		// menangkap data pencarian
		$cari = $request->cari;
 
        // mengambil data dari table sesuai pencarian data
    $data = Maba::where('nim','like',"%".$cari."%")
    ->paginate();

        // mengirim data ke view index
    return view('frontend.cari',compact('data'));
 
	}
 
}