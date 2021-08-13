<?php


namespace App\Http\Controllers;

use App\Models\Maba;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class DataController extends Controller
{
    public function index(Request $request)
    {
        $data = DB::table('maba');
        // menangkap data pencarian
        $cari = $request->cari;

        // mengambil data dari table sesuai pencarian data
        $data = Maba::where('nim', 'LIKE', "%" . $cari . "%")
            ->paginate(1);

        // mengirim data ke view index
        return view('frontend.cari', compact('data'));
    }

    public function show($data)
    {
        $maba = Maba::findOrFail($data);

        return view('frontend.cari', ['maba' => $data]);
    }
}
