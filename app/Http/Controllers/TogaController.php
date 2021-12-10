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

class TogaController extends Controller
{
    //Jurusan Akuntansi
    public function Akuntansitiga()
    {
        $mahasiswas = DB::table('mahasiswas')
        ->join('prodis', 'mahasiswas.prodi_id', '=', 'prodis.id')->whereIn('prodi_id',['11'])->WhereIn('status_registrasi',['2'])->WhereIn('status_ambil_toga',['2','3'])
        ->join('users', 'mahasiswas.npm', '=', 'users.npm')->whereNotNull('email_verified_at')
        ->join('togas', 'users.id', '=', 'togas.mahasiswa_id')->whereNotNull('nama_ayah')
        ->join('pelunasans', 'users.id', '=', 'pelunasans.mahasiswa_id')
        ->join('alamats', 'users.id', '=', 'alamats.mahasiswa_id')
        ->join('provinces', 'alamats.provinsi', '=', 'provinces.id')
        ->join('cities', 'alamats.kota', '=', 'cities.id')
        ->join('districts', 'alamats.kecamatan', '=', 'districts.id')
        ->join('villages', 'alamats.kelurahan', '=', 'villages.id')
        ->select('mahasiswas.*','prodis.*','mahasiswas.id as idmahasiswa','pelunasans.status as lunas', 'togas.*', 
                 'alamats.*', 'provinces.name as namaprov', 'cities.name as namakota', 'districts.name as namakec',
                  'villages.name as namakel')
                    ->get();
        return view('togas', ['mahasiswas' => $mahasiswas, 'prodi_id' => 'D III Akuntansi']);
    }
    public function AkuntansitigaAP()
    {
        $mahasiswas = DB::table('mahasiswas')
        ->join('prodis', 'mahasiswas.prodi_id', '=', 'prodis.id')->whereIn('prodi_id',['12'])->WhereIn('status_registrasi',['2'])->WhereIn('status_ambil_toga',['2','3'])
        ->join('users', 'mahasiswas.npm', '=', 'users.npm')->whereNotNull('email_verified_at')
        ->join('togas', 'users.id', '=', 'togas.mahasiswa_id')->whereNotNull('nama_ayah')
        ->join('pelunasans', 'users.id', '=', 'pelunasans.mahasiswa_id')
        ->join('alamats', 'users.id', '=', 'alamats.mahasiswa_id')
        ->join('provinces', 'alamats.provinsi', '=', 'provinces.id')
        ->join('cities', 'alamats.kota', '=', 'cities.id')
        ->join('districts', 'alamats.kecamatan', '=', 'districts.id')
        ->join('villages', 'alamats.kelurahan', '=', 'villages.id')
        ->select('mahasiswas.*','prodis.*','mahasiswas.id as idmahasiswa','pelunasans.status as lunas', 'togas.*', 
                 'alamats.*', 'provinces.name as namaprov', 'cities.name as namakota', 'districts.name as namakec',
                  'villages.name as namakel')
                    ->get();
        return view('togas', ['mahasiswas' => $mahasiswas, 'prodi_id' => 'D III Akuntansi AP']);
    }
    public function Akuntansiempat()
    {
        $mahasiswas = DB::table('mahasiswas')
        ->join('prodis', 'mahasiswas.prodi_id', '=', 'prodis.id')->whereIn('prodi_id',['13'])->WhereIn('status_registrasi',['2'])->WhereIn('status_ambil_toga',['2','3'])
        ->join('users', 'mahasiswas.npm', '=', 'users.npm')->whereNotNull('email_verified_at')
        ->join('togas', 'users.id', '=', 'togas.mahasiswa_id')->whereNotNull('nama_ayah')
        ->join('pelunasans', 'users.id', '=', 'pelunasans.mahasiswa_id')
        ->join('alamats', 'users.id', '=', 'alamats.mahasiswa_id')
        ->join('provinces', 'alamats.provinsi', '=', 'provinces.id')
        ->join('cities', 'alamats.kota', '=', 'cities.id')
        ->join('districts', 'alamats.kecamatan', '=', 'districts.id')
        ->join('villages', 'alamats.kelurahan', '=', 'villages.id')
        ->select('mahasiswas.*','prodis.*','mahasiswas.id as idmahasiswa','pelunasans.status as lunas', 'togas.*', 
                 'alamats.*', 'provinces.name as namaprov', 'cities.name as namakota', 'districts.name as namakec',
                  'villages.name as namakel')
                    ->get();
        return view('togas', ['mahasiswas' => $mahasiswas, 'prodi_id' => 'D IV Akuntansi']);
    }
    public function AkuntansiempatAPNon()
    {
        $mahasiswas = DB::table('mahasiswas')
        ->join('prodis', 'mahasiswas.prodi_id', '=', 'prodis.id')->whereIn('prodi_id',['14'])->WhereIn('status_registrasi',['2'])->WhereIn('status_ambil_toga',['2','3'])
        ->join('users', 'mahasiswas.npm', '=', 'users.npm')->whereNotNull('email_verified_at')
        ->join('togas', 'users.id', '=', 'togas.mahasiswa_id')->whereNotNull('nama_ayah')
        ->join('pelunasans', 'users.id', '=', 'pelunasans.mahasiswa_id')
        ->join('alamats', 'users.id', '=', 'alamats.mahasiswa_id')
        ->join('provinces', 'alamats.provinsi', '=', 'provinces.id')
        ->join('cities', 'alamats.kota', '=', 'cities.id')
        ->join('districts', 'alamats.kecamatan', '=', 'districts.id')
        ->join('villages', 'alamats.kelurahan', '=', 'villages.id')
        ->select('mahasiswas.*','prodis.*','mahasiswas.id as idmahasiswa','pelunasans.status as lunas', 'togas.*', 
                 'alamats.*', 'provinces.name as namaprov', 'cities.name as namakota', 'districts.name as namakec',
                  'villages.name as namakel')
                    ->get();
        return view('togas', ['mahasiswas' => $mahasiswas, 'prodi_id' => 'D IV Akuntansi AP Non AKT']);
    }
    public function AkuntansiempatAP()
    {
        $mahasiswas = DB::table('mahasiswas')
        ->join('prodis', 'mahasiswas.prodi_id', '=', 'prodis.id')->whereIn('prodi_id',['15'])->WhereIn('status_registrasi',['2'])->WhereIn('status_ambil_toga',['2','3'])
        ->join('users', 'mahasiswas.npm', '=', 'users.npm')->whereNotNull('email_verified_at')
        ->join('togas', 'users.id', '=', 'togas.mahasiswa_id')->whereNotNull('nama_ayah')
        ->join('pelunasans', 'users.id', '=', 'pelunasans.mahasiswa_id')
        ->join('alamats', 'users.id', '=', 'alamats.mahasiswa_id')
        ->join('provinces', 'alamats.provinsi', '=', 'provinces.id')
        ->join('cities', 'alamats.kota', '=', 'cities.id')
        ->join('districts', 'alamats.kecamatan', '=', 'districts.id')
        ->join('villages', 'alamats.kelurahan', '=', 'villages.id')
        ->select('mahasiswas.*','prodis.*','mahasiswas.id as idmahasiswa','pelunasans.status as lunas', 'togas.*', 
                 'alamats.*', 'provinces.name as namaprov', 'cities.name as namakota', 'districts.name as namakec',
                  'villages.name as namakel')
                    ->get();
        return view('togas', ['mahasiswas' => $mahasiswas, 'prodi_id' => 'D IV Akuntansi AP AKT']);
    }

    //Jurusan Pajak
    public function Pajaktiga()
    {
        $mahasiswas = DB::table('mahasiswas')
        ->join('prodis', 'mahasiswas.prodi_id', '=', 'prodis.id')->whereIn('prodi_id',['21'])->WhereIn('status_registrasi',['2'])->WhereIn('status_ambil_toga',['2','3'])
        ->join('users', 'mahasiswas.npm', '=', 'users.npm')->whereNotNull('email_verified_at')
        ->join('togas', 'users.id', '=', 'togas.mahasiswa_id')->whereNotNull('nama_ayah')
        ->join('pelunasans', 'users.id', '=', 'pelunasans.mahasiswa_id')
        ->join('alamats', 'users.id', '=', 'alamats.mahasiswa_id')
        ->join('provinces', 'alamats.provinsi', '=', 'provinces.id')
        ->join('cities', 'alamats.kota', '=', 'cities.id')
        ->join('districts', 'alamats.kecamatan', '=', 'districts.id')
        ->join('villages', 'alamats.kelurahan', '=', 'villages.id')
        ->select('mahasiswas.*','prodis.*','mahasiswas.id as idmahasiswa','pelunasans.status as lunas', 'togas.*', 
                 'alamats.*', 'provinces.name as namaprov', 'cities.name as namakota', 'districts.name as namakec',
                  'villages.name as namakel')
                    ->get();
        return view('togas', ['mahasiswas' => $mahasiswas, 'prodi_id' => 'D III Pajak']);
    }
    public function PajaktigaAP()
    {
        $mahasiswas = DB::table('mahasiswas')
        ->join('prodis', 'mahasiswas.prodi_id', '=', 'prodis.id')->whereIn('prodi_id',['22'])->WhereIn('status_registrasi',['2'])->WhereIn('status_ambil_toga',['2','3'])
        ->join('users', 'mahasiswas.npm', '=', 'users.npm')->whereNotNull('email_verified_at')
        ->join('togas', 'users.id', '=', 'togas.mahasiswa_id')->whereNotNull('nama_ayah')
        ->join('pelunasans', 'users.id', '=', 'pelunasans.mahasiswa_id')
        ->join('alamats', 'users.id', '=', 'alamats.mahasiswa_id')
        ->join('provinces', 'alamats.provinsi', '=', 'provinces.id')
        ->join('cities', 'alamats.kota', '=', 'cities.id')
        ->join('districts', 'alamats.kecamatan', '=', 'districts.id')
        ->join('villages', 'alamats.kelurahan', '=', 'villages.id')
        ->select('mahasiswas.*','prodis.*','mahasiswas.id as idmahasiswa','pelunasans.status as lunas', 'togas.*', 
                 'alamats.*', 'provinces.name as namaprov', 'cities.name as namakota', 'districts.name as namakec',
                  'villages.name as namakel')
                    ->get();
        return view('togas', ['mahasiswas' => $mahasiswas, 'prodi_id' => 'D III Pajak AP']);
    }
    public function Pbbtiga()
    {
        $mahasiswas = DB::table('mahasiswas')
        ->join('prodis', 'mahasiswas.prodi_id', '=', 'prodis.id')->whereIn('prodi_id',['23'])->WhereIn('status_registrasi',['2'])->WhereIn('status_ambil_toga',['2','3'])
        ->join('users', 'mahasiswas.npm', '=', 'users.npm')->whereNotNull('email_verified_at')
        ->join('togas', 'users.id', '=', 'togas.mahasiswa_id')->whereNotNull('nama_ayah')
        ->join('pelunasans', 'users.id', '=', 'pelunasans.mahasiswa_id')
        ->join('alamats', 'users.id', '=', 'alamats.mahasiswa_id')
        ->join('provinces', 'alamats.provinsi', '=', 'provinces.id')
        ->join('cities', 'alamats.kota', '=', 'cities.id')
        ->join('districts', 'alamats.kecamatan', '=', 'districts.id')
        ->join('villages', 'alamats.kelurahan', '=', 'villages.id')
        ->select('mahasiswas.*','prodis.*','mahasiswas.id as idmahasiswa','pelunasans.status as lunas', 'togas.*', 
                 'alamats.*', 'provinces.name as namaprov', 'cities.name as namakota', 'districts.name as namakec',
                  'villages.name as namakel')
                    ->get();
        return view('togas', ['mahasiswas' => $mahasiswas, 'prodi_id' => 'D III PBB / Penilai']);
    }
    public function PbbtigaAP19()
    {
        $mahasiswas = DB::table('mahasiswas')
        ->join('prodis', 'mahasiswas.prodi_id', '=', 'prodis.id')->whereIn('prodi_id',['25'])->WhereIn('status_registrasi',['2'])->WhereIn('status_ambil_toga',['2','3'])
        ->join('users', 'mahasiswas.npm', '=', 'users.npm')->whereNotNull('email_verified_at')
        ->join('togas', 'users.id', '=', 'togas.mahasiswa_id')->whereNotNull('nama_ayah')
        ->join('pelunasans', 'users.id', '=', 'pelunasans.mahasiswa_id')
        ->join('alamats', 'users.id', '=', 'alamats.mahasiswa_id')
        ->join('provinces', 'alamats.provinsi', '=', 'provinces.id')
        ->join('cities', 'alamats.kota', '=', 'cities.id')
        ->join('districts', 'alamats.kecamatan', '=', 'districts.id')
        ->join('villages', 'alamats.kelurahan', '=', 'villages.id')
        ->select('mahasiswas.*','prodis.*','mahasiswas.id as idmahasiswa','pelunasans.status as lunas', 'togas.*', 
                 'alamats.*', 'provinces.name as namaprov', 'cities.name as namakota', 'districts.name as namakec',
                  'villages.name as namakel')
                    ->get();
        return view('togas', ['mahasiswas' => $mahasiswas, 'prodi_id' => 'D III PBB / Penilai AP 2019']);
    }
    public function PbbtigaAP18()
    {
        $mahasiswas = DB::table('mahasiswas')
        ->join('prodis', 'mahasiswas.prodi_id', '=', 'prodis.id')->whereIn('prodi_id',['24'])->WhereIn('status_registrasi',['2'])->WhereIn('status_ambil_toga',['2','3'])
        ->join('users', 'mahasiswas.npm', '=', 'users.npm')->whereNotNull('email_verified_at')
        ->join('togas', 'users.id', '=', 'togas.mahasiswa_id')->whereNotNull('nama_ayah')
        ->join('pelunasans', 'users.id', '=', 'pelunasans.mahasiswa_id')
        ->join('alamats', 'users.id', '=', 'alamats.mahasiswa_id')
        ->join('provinces', 'alamats.provinsi', '=', 'provinces.id')
        ->join('cities', 'alamats.kota', '=', 'cities.id')
        ->join('districts', 'alamats.kecamatan', '=', 'districts.id')
        ->join('villages', 'alamats.kelurahan', '=', 'villages.id')
        ->select('mahasiswas.*','prodis.*','mahasiswas.id as idmahasiswa','pelunasans.status as lunas', 'togas.*', 
                 'alamats.*', 'provinces.name as namaprov', 'cities.name as namakota', 'districts.name as namakec',
                  'villages.name as namakel')
                    ->get();
        return view('togas', ['mahasiswas' => $mahasiswas, 'prodi_id' => 'D III PBB / Penilai AP 2018']);
    }

    //Juruan Bea Cukai
    public function Beacukaitiga()
    {
        $mahasiswas = DB::table('mahasiswas')
        ->join('prodis', 'mahasiswas.prodi_id', '=', 'prodis.id')->whereIn('prodi_id',['31'])->WhereIn('status_registrasi',['2'])->WhereIn('status_ambil_toga',['2','3'])
        ->join('users', 'mahasiswas.npm', '=', 'users.npm')->whereNotNull('email_verified_at')
        ->join('togas', 'users.id', '=', 'togas.mahasiswa_id')->whereNotNull('nama_ayah')
        ->join('pelunasans', 'users.id', '=', 'pelunasans.mahasiswa_id')
        ->join('alamats', 'users.id', '=', 'alamats.mahasiswa_id')
        ->join('provinces', 'alamats.provinsi', '=', 'provinces.id')
        ->join('cities', 'alamats.kota', '=', 'cities.id')
        ->join('districts', 'alamats.kecamatan', '=', 'districts.id')
        ->join('villages', 'alamats.kelurahan', '=', 'villages.id')
        ->select('mahasiswas.*','prodis.*','mahasiswas.id as idmahasiswa','pelunasans.status as lunas', 'togas.*', 
                 'alamats.*', 'provinces.name as namaprov', 'cities.name as namakota', 'districts.name as namakec',
                  'villages.name as namakel')
                    ->get();
        return view('togas', ['mahasiswas' => $mahasiswas, 'prodi_id' => 'D III Bea Cukai']);
    }
    public function BeacukaitigaAP()
    {
        $mahasiswas = DB::table('mahasiswas')
        ->join('prodis', 'mahasiswas.prodi_id', '=', 'prodis.id')->whereIn('prodi_id',['32'])->WhereIn('status_registrasi',['2'])->WhereIn('status_ambil_toga',['2','3'])
        ->join('users', 'mahasiswas.npm', '=', 'users.npm')->whereNotNull('email_verified_at')
        ->join('togas', 'users.id', '=', 'togas.mahasiswa_id')->whereNotNull('nama_ayah')
        ->join('pelunasans', 'users.id', '=', 'pelunasans.mahasiswa_id')
        ->join('alamats', 'users.id', '=', 'alamats.mahasiswa_id')
        ->join('provinces', 'alamats.provinsi', '=', 'provinces.id')
        ->join('cities', 'alamats.kota', '=', 'cities.id')
        ->join('districts', 'alamats.kecamatan', '=', 'districts.id')
        ->join('villages', 'alamats.kelurahan', '=', 'villages.id')
        ->select('mahasiswas.*','prodis.*','mahasiswas.id as idmahasiswa','pelunasans.status as lunas', 'togas.*', 
                 'alamats.*', 'provinces.name as namaprov', 'cities.name as namakota', 'districts.name as namakec',
                  'villages.name as namakel')
                    ->get();
        return view('togas', ['mahasiswas' => $mahasiswas, 'prodi_id' => 'D III Bea Cukai AP']);
    }

    //Jurusan Manajemen Keuangan
    public function Kbntiga()
    {
        $mahasiswas = DB::table('mahasiswas')
        ->join('prodis', 'mahasiswas.prodi_id', '=', 'prodis.id')->whereIn('prodi_id',['41'])->WhereIn('status_registrasi',['2'])->WhereIn('status_ambil_toga',['2','3'])
        ->join('users', 'mahasiswas.npm', '=', 'users.npm')->whereNotNull('email_verified_at')
        ->join('togas', 'users.id', '=', 'togas.mahasiswa_id')->whereNotNull('nama_ayah')
        ->join('pelunasans', 'users.id', '=', 'pelunasans.mahasiswa_id')
        ->join('alamats', 'users.id', '=', 'alamats.mahasiswa_id')
        ->join('provinces', 'alamats.provinsi', '=', 'provinces.id')
        ->join('cities', 'alamats.kota', '=', 'cities.id')
        ->join('districts', 'alamats.kecamatan', '=', 'districts.id')
        ->join('villages', 'alamats.kelurahan', '=', 'villages.id')
        ->select('mahasiswas.*','prodis.*','mahasiswas.id as idmahasiswa','pelunasans.status as lunas', 'togas.*', 
                 'alamats.*', 'provinces.name as namaprov', 'cities.name as namakota', 'districts.name as namakec',
                  'villages.name as namakel')
                    ->get();
        return view('togas', ['mahasiswas' => $mahasiswas, 'prodi_id' => 'D III Kebendaharaan Negara']);
    }
    public function KbntigaAP()
    {
        $mahasiswas = DB::table('mahasiswas')
        ->join('prodis', 'mahasiswas.prodi_id', '=', 'prodis.id')->whereIn('prodi_id',['42'])->WhereIn('status_registrasi',['2'])->WhereIn('status_ambil_toga',['2','3'])
        ->join('users', 'mahasiswas.npm', '=', 'users.npm')->whereNotNull('email_verified_at')
        ->join('togas', 'users.id', '=', 'togas.mahasiswa_id')->whereNotNull('nama_ayah')
        ->join('pelunasans', 'users.id', '=', 'pelunasans.mahasiswa_id')
        ->join('alamats', 'users.id', '=', 'alamats.mahasiswa_id')
        ->join('provinces', 'alamats.provinsi', '=', 'provinces.id')
        ->join('cities', 'alamats.kota', '=', 'cities.id')
        ->join('districts', 'alamats.kecamatan', '=', 'districts.id')
        ->join('villages', 'alamats.kelurahan', '=', 'villages.id')
        ->select('mahasiswas.*','prodis.*','mahasiswas.id as idmahasiswa','pelunasans.status as lunas', 'togas.*', 
                 'alamats.*', 'provinces.name as namaprov', 'cities.name as namakota', 'districts.name as namakec',
                  'villages.name as namakel')
                    ->get();
        return view('togas', ['mahasiswas' => $mahasiswas, 'prodi_id' => 'D III Kebendaharaan Negara AP']);
    }
    public function Mansettiga()
    {
        $mahasiswas = DB::table('mahasiswas')
        ->join('prodis', 'mahasiswas.prodi_id', '=', 'prodis.id')->whereIn('prodi_id',['43'])->WhereIn('status_registrasi',['2'])->WhereIn('status_ambil_toga',['2','3'])
        ->join('users', 'mahasiswas.npm', '=', 'users.npm')->whereNotNull('email_verified_at')
        ->join('togas', 'users.id', '=', 'togas.mahasiswa_id')->whereNotNull('nama_ayah')
        ->join('pelunasans', 'users.id', '=', 'pelunasans.mahasiswa_id')
        ->join('alamats', 'users.id', '=', 'alamats.mahasiswa_id')
        ->join('provinces', 'alamats.provinsi', '=', 'provinces.id')
        ->join('cities', 'alamats.kota', '=', 'cities.id')
        ->join('districts', 'alamats.kecamatan', '=', 'districts.id')
        ->join('villages', 'alamats.kelurahan', '=', 'villages.id')
        ->select('mahasiswas.*','prodis.*','mahasiswas.id as idmahasiswa','pelunasans.status as lunas', 'togas.*', 
                 'alamats.*', 'provinces.name as namaprov', 'cities.name as namakota', 'districts.name as namakec',
                  'villages.name as namakel')
                    ->get();
        return view('togas', ['mahasiswas' => $mahasiswas, 'prodi_id' => 'D III Manajemen Aset']);

    }

    //Rekap
    public function Rekap()
    {
        //$mahasiswas = DB::table('mahasiswas')->get();
        $mahasiswas = DB::table('mahasiswas')
        ->join('prodis', 'mahasiswas.prodi_id', '=', 'prodis.id')->WhereIn('status_registrasi',['2'])->WhereIn('status_ambil_toga',['2','3'])
        ->join('users', 'mahasiswas.npm', '=', 'users.npm')->whereNotNull('email_verified_at')
        ->join('togas', 'users.id', '=', 'togas.mahasiswa_id')->whereNotNull('nama_ayah')
        ->join('pelunasans', 'users.id', '=', 'pelunasans.mahasiswa_id')
        ->join('alamats', 'users.id', '=', 'alamats.mahasiswa_id')
        ->join('provinces', 'alamats.provinsi', '=', 'provinces.id')
        ->join('cities', 'alamats.kota', '=', 'cities.id')
        ->join('districts', 'alamats.kecamatan', '=', 'districts.id')
        ->join('villages', 'alamats.kelurahan', '=', 'villages.id')
        ->select('mahasiswas.*','prodis.*','mahasiswas.id as idmahasiswa','pelunasans.status as lunas', 'togas.*', 
                 'alamats.*', 'provinces.name as namaprov', 'cities.name as namakota', 'districts.name as namakec',
                  'villages.name as namakel')
                    ->get();
        return view('togas', ['mahasiswas' => $mahasiswas, 'prodi_id' => 'Semua']);

    }

}
