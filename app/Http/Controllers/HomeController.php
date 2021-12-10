<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

use App\Competition;
use App\Data;
use App\Models\User;
use Carbon\Carbon;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function member()
    {
        return view('member');
    }
    public function index()
    {
        $countPendaftar = DB::table('persembahans')->count();
        $countBand      = DB::table('persembahans')->where('jenis_persembahan','band')->count();
        $countPuisi     = DB::table('persembahans')->where('jenis_persembahan','puisi')->count();
        $countRap       = DB::table('persembahans')->where('jenis_persembahan','rap')->count(); 
        $countPWH       = DB::table('persembahans')->where('jenis_persembahan','pwh')->count();
        $countSolo      = DB::table('persembahans')->where('jenis_persembahan','solo')->count();                   
        

        
        $year = ['2021'];

        $user = [];
        foreach ($year as $key => $value) {
            $user[] = User::where(\DB::raw("DATE_FORMAT(created_at, '%Y')"),$value)->count();
        }

        return view('home', ['countPendaftar' => $countPendaftar,
                            'countBand'   => $countBand,
                            'countPuisi'  => $countPuisi,
                            'countRap'    => $countRap,
                            'countPWH'    => $countPWH,
                            'countSolo'   => $countSolo,
                            
                           ]
                    )->with('year',json_encode($year,JSON_NUMERIC_CHECK))->with('user',json_encode($user,JSON_NUMERIC_CHECK));;
    }

    public function Band()
    {
        $mahasiswas = DB::table('persembahans')->where('jenis_persembahan','band')
        ->join('mahasiswas', 'persembahans.mahasiswa_id', '=', 'mahasiswas.id')
        ->join('prodis', 'mahasiswas.prodi_id', '=', 'prodis.id')
        ->select('mahasiswas.*','prodis.*','mahasiswas.id as idmahasiswa', 'persembahans.*')
                    ->get();
        return view('datas', ['mahasiswas' => $mahasiswas, 'jenis_persembahan' => 'Band']);
    }
    public function Puisi()
    {
        $mahasiswas = DB::table('persembahans')->where('jenis_persembahan','puisi')
        ->join('mahasiswas', 'persembahans.mahasiswa_id', '=', 'mahasiswas.id')
        ->join('prodis', 'mahasiswas.prodi_id', '=', 'prodis.id')
        ->select('mahasiswas.*','prodis.*','mahasiswas.id as idmahasiswa', 'persembahans.*')
                    ->get();
        return view('datasolo', ['mahasiswas' => $mahasiswas, 'jenis_persembahan' => 'Puisi']);
    }
    public function Rap()
    {
        $mahasiswas = DB::table('persembahans')->where('jenis_persembahan','rap')
        ->join('mahasiswas', 'persembahans.mahasiswa_id', '=', 'mahasiswas.id')
        ->join('prodis', 'mahasiswas.prodi_id', '=', 'prodis.id')
        ->select('mahasiswas.*','prodis.*','mahasiswas.id as idmahasiswa', 'persembahans.*')
                    ->get();
        return view('datas', ['mahasiswas' => $mahasiswas, 'jenis_persembahan' => 'Rap Battle']);
    }
    public function PWH()
    {
        $mahasiswas = DB::table('persembahans')->where('jenis_persembahan','pwh')
        ->join('mahasiswas', 'persembahans.mahasiswa_id', '=', 'mahasiswas.id')
        ->join('prodis', 'mahasiswas.prodi_id', '=', 'prodis.id')
        ->select('mahasiswas.*','prodis.*','mahasiswas.id as idmahasiswa', 'persembahans.*')
                    ->get();
        return view('datas', ['mahasiswas' => $mahasiswas, 'jenis_persembahan' => 'PWH']);
    }
    public function Solo()
    {
        $mahasiswas = DB::table('persembahans')->where('jenis_persembahan','solo')
        ->join('mahasiswas', 'persembahans.mahasiswa_id', '=', 'mahasiswas.id')
        ->join('prodis', 'mahasiswas.prodi_id', '=', 'prodis.id')
        ->select('mahasiswas.*','prodis.*','mahasiswas.id as idmahasiswa', 'persembahans.*')
                    ->get();
        return view('datasolo', ['mahasiswas' => $mahasiswas, 'jenis_persembahan' => 'Solo Vocal']);
    }
    public function Rekap()
    {
        $mahasiswas = DB::table('persembahans')
        ->join('mahasiswas', 'persembahans.mahasiswa_id', '=', 'mahasiswas.id')
        ->join('prodis', 'mahasiswas.prodi_id', '=', 'prodis.id')
        ->select('mahasiswas.*','prodis.*','mahasiswas.id as idmahasiswa', 'persembahans.*')
                    ->get();
        return view('rekap', ['mahasiswas' => $mahasiswas, ]);
    }
    
}