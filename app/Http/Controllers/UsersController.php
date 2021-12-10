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

class UsersController extends Controller
{
    //Jurusan Akuntansi
    public function Akuntansitiga()
    {
        $mahasiswas = DB::table('mahasiswas')
        ->join('prodis', 'mahasiswas.prodi_id', '=', 'prodis.id')->whereIn('prodi_id',['11'])
        ->join('users', 'mahasiswas.npm', '=', 'users.npm')->whereNotNull('email_verified_at')
        ->select('mahasiswas.*','prodis.*', 'mahasiswas.id as idmahasiswa', 'mahasiswas.npm as npmusers')->get();
        return view('users', ['mahasiswas' => $mahasiswas, 'prodi_id' => 'D III Akuntansi']);
    }
    public function AkuntansitigaAP()
    {
        $mahasiswas = DB::table('mahasiswas')
        ->join('prodis', 'mahasiswas.prodi_id', '=', 'prodis.id')->whereIn('prodi_id',['12'])
        ->join('users', 'mahasiswas.npm', '=', 'users.npm')->whereNotNull('email_verified_at')
        ->select('mahasiswas.*','prodis.*', 'mahasiswas.id as idmahasiswa', 'mahasiswas.npm as npmusers')->get();
        return view('users', ['mahasiswas' => $mahasiswas, 'prodi_id' => 'D III Akuntansi AP']);
    }
    public function Akuntansiempat()
    {
        $mahasiswas = DB::table('mahasiswas')
        ->join('prodis', 'mahasiswas.prodi_id', '=', 'prodis.id')->whereIn('prodi_id',['13'])
        ->join('users', 'mahasiswas.npm', '=', 'users.npm')->whereNotNull('email_verified_at')
        ->select('mahasiswas.*','prodis.*', 'mahasiswas.id as idmahasiswa', 'mahasiswas.npm as npmusers')->get();
        return view('users', ['mahasiswas' => $mahasiswas, 'prodi_id' => 'D IV Akuntansi']);
    }
    public function AkuntansiempatAPNon()
    {
        $mahasiswas = DB::table('mahasiswas')
        ->join('prodis', 'mahasiswas.prodi_id', '=', 'prodis.id')->whereIn('prodi_id',['14'])
        ->join('users', 'mahasiswas.npm', '=', 'users.npm')->whereNotNull('email_verified_at')
        ->select('mahasiswas.*','prodis.*', 'mahasiswas.id as idmahasiswa', 'mahasiswas.npm as npmusers')->get();
        return view('users', ['mahasiswas' => $mahasiswas, 'prodi_id' => 'D IV Akuntansi AP Non AKT']);
    }
    public function AkuntansiempatAP()
    {
        $mahasiswas = DB::table('mahasiswas')
        ->join('prodis', 'mahasiswas.prodi_id', '=', 'prodis.id')->whereIn('prodi_id',['15'])
        ->join('users', 'mahasiswas.npm', '=', 'users.npm')->whereNotNull('email_verified_at')
        ->select('mahasiswas.*','prodis.*', 'mahasiswas.id as idmahasiswa', 'mahasiswas.npm as npmusers')->get();
        return view('users', ['mahasiswas' => $mahasiswas, 'prodi_id' => 'D IV Akuntansi AP AKT']);
    }

    //Jurusan Pajak
    public function Pajaktiga()
    {
        $mahasiswas = DB::table('mahasiswas')
        ->join('prodis', 'mahasiswas.prodi_id', '=', 'prodis.id')->whereIn('prodi_id',['21'])
        ->join('users', 'mahasiswas.npm', '=', 'users.npm')->whereNotNull('email_verified_at')
        ->select('mahasiswas.*','prodis.*', 'mahasiswas.id as idmahasiswa', 'mahasiswas.npm as npmusers')->get();
        return view('users', ['mahasiswas' => $mahasiswas, 'prodi_id' => 'D III Pajak']);
    }
    public function PajaktigaAP()
    {
        $mahasiswas = DB::table('mahasiswas')
        ->join('prodis', 'mahasiswas.prodi_id', '=', 'prodis.id')->whereIn('prodi_id',['22'])
        ->join('users', 'mahasiswas.npm', '=', 'users.npm')->whereNotNull('email_verified_at')
        ->select('mahasiswas.*','prodis.*', 'mahasiswas.id as idmahasiswa', 'mahasiswas.npm as npmusers')->get();
        return view('users', ['mahasiswas' => $mahasiswas, 'prodi_id' => 'D III Pajak AP']);
    }
    public function Pbbtiga()
    {
        $mahasiswas = DB::table('mahasiswas')
        ->join('prodis', 'mahasiswas.prodi_id', '=', 'prodis.id')->whereIn('prodi_id',['23'])
        ->join('users', 'mahasiswas.npm', '=', 'users.npm')->whereNotNull('email_verified_at')
        ->select('mahasiswas.*','prodis.*', 'mahasiswas.id as idmahasiswa', 'mahasiswas.npm as npmusers')->get();
        return view('users', ['mahasiswas' => $mahasiswas, 'prodi_id' => 'D III PBB / Penilai']);
    }
    public function PbbtigaAP19()
    {
        $mahasiswas = DB::table('mahasiswas')
        ->join('prodis', 'mahasiswas.prodi_id', '=', 'prodis.id')->whereIn('prodi_id',['25'])
        ->join('users', 'mahasiswas.npm', '=', 'users.npm')->whereNotNull('email_verified_at')
        ->select('mahasiswas.*','prodis.*', 'mahasiswas.id as idmahasiswa', 'mahasiswas.npm as npmusers')->get();
        return view('users', ['mahasiswas' => $mahasiswas, 'prodi_id' => 'D III PBB / Penilai AP 2019']);
    }
    public function PbbtigaAP18()
    {
        $mahasiswas = DB::table('mahasiswas')
        ->join('prodis', 'mahasiswas.prodi_id', '=', 'prodis.id')->whereIn('prodi_id',['24'])
        ->join('users', 'mahasiswas.npm', '=', 'users.npm')->whereNotNull('email_verified_at')
        ->select('mahasiswas.*','prodis.*', 'mahasiswas.id as idmahasiswa', 'mahasiswas.npm as npmusers')->get();
        return view('users', ['mahasiswas' => $mahasiswas, 'prodi_id' => 'D III PBB / Penilai AP 2018']);
    }

    //Juruan Bea Cukai
    public function Beacukaitiga()
    {
        $mahasiswas = DB::table('mahasiswas')
        ->join('prodis', 'mahasiswas.prodi_id', '=', 'prodis.id')->whereIn('prodi_id',['31'])
        ->join('users', 'mahasiswas.npm', '=', 'users.npm')->whereNotNull('email_verified_at')
        ->select('mahasiswas.*','prodis.*', 'mahasiswas.id as idmahasiswa', 'mahasiswas.npm as npmusers')->get();
        return view('users', ['mahasiswas' => $mahasiswas, 'prodi_id' => 'D III Bea Cukai']);
    }
    public function BeacukaitigaAP()
    {
        $mahasiswas = DB::table('mahasiswas')
        ->join('prodis', 'mahasiswas.prodi_id', '=', 'prodis.id')->whereIn('prodi_id',['32'])
        ->join('users', 'mahasiswas.npm', '=', 'users.npm')->whereNotNull('email_verified_at')
        ->select('mahasiswas.*','prodis.*', 'mahasiswas.id as idmahasiswa', 'mahasiswas.npm as npmusers')->get();
        return view('users', ['mahasiswas' => $mahasiswas, 'prodi_id' => 'D III Bea Cukai AP']);
    }

    //Jurusan Manajemen Keuangan
    public function Kbntiga()
    {
        $mahasiswas = DB::table('mahasiswas')
        ->join('prodis', 'mahasiswas.prodi_id', '=', 'prodis.id')->whereIn('prodi_id',['41'])
        ->join('users', 'mahasiswas.npm', '=', 'users.npm')->whereNotNull('email_verified_at')
        ->select('mahasiswas.*','prodis.*', 'mahasiswas.id as idmahasiswa', 'mahasiswas.npm as npmusers')->get();
        return view('users', ['mahasiswas' => $mahasiswas, 'prodi_id' => 'D III Kebendaharaan Negara']);
    }
    public function KbntigaAP()
    {
        $mahasiswas = DB::table('mahasiswas')
        ->join('prodis', 'mahasiswas.prodi_id', '=', 'prodis.id')->whereIn('prodi_id',['42'])
        ->join('users', 'mahasiswas.npm', '=', 'users.npm')->whereNotNull('email_verified_at')
        ->select('mahasiswas.*','prodis.*', 'mahasiswas.id as idmahasiswa', 'mahasiswas.npm as npmusers')->get();
        return view('users', ['mahasiswas' => $mahasiswas, 'prodi_id' => 'D III Kebendaharaan Negara AP']);
    }
    public function Mansettiga()
    {
        $mahasiswas = DB::table('mahasiswas')
        ->join('prodis', 'mahasiswas.prodi_id', '=', 'prodis.id')->whereIn('prodi_id',['43'])
        ->join('users', 'mahasiswas.npm', '=', 'users.npm')->whereNotNull('email_verified_at')
        ->select('mahasiswas.*','prodis.*', 'mahasiswas.id as idmahasiswa', 'mahasiswas.npm as npmusers')->get();
        return view('users', ['mahasiswas' => $mahasiswas, 'prodi_id' => 'D III Manajemen Aset']);

    }

    //Rekap
    public function Rekap()
    {
        //$mahasiswas = DB::table('mahasiswas')->get();
        $mahasiswas = DB::table('mahasiswas')
        ->join('prodis', 'mahasiswas.prodi_id', '=', 'prodis.id')
        // ->join('')
        ->join('users', 'mahasiswas.id', '=', 'users.mahasiswa_id')
        ->select('mahasiswas.*','prodis.*', 'users.*','mahasiswas.id as idmahasiswa')
                    ->get();
        return view('users', ['mahasiswas' => $mahasiswas, 'prodi_id' => 'Semua']);

    }

    public function destroy($npmusers)
    {       
        $deltogas =DB::table('togas')->join('users', 'togas.mahasiswa_id', '=', 'users.id')
                    ->where('users.npm', $npmusers)->delete();
        $delalamat =DB::table('alamats')->join('users', 'alamats.mahasiswa_id', '=', 'users.id')
                    ->where('users.npm', $npmusers)->delete();            
        $data =DB::table('users')
                    ->where('users.npm', $npmusers)
       ->delete();
        return redirect()->back()->with('success', 'Data Deleted');
    }

}
