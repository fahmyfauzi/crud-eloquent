<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;

class SiswaController extends Controller
{
    public function index()
    {

      $siswa = Siswa::all();
      return view('siswa',['siswa'=>$siswa]);
    }

    public function add()
    {
      return view('add_siswa');
    }
    public function store(Request $request)
    {
      $this->validate($request,[
        'nama' => 'required',
        'umur'=> 'required',
        'alamat'=> 'required'
      ]);

      Siswa::create([
        'nama' => $request->nama,
        'umur' => $request->umur,
        'alamat'=> $request->alamat
      ]);
    return redirect('/siswa');
    }

    public function edit($id)
    {
    $siswa =Siswa::find($id);
    return view('siswa_edit',['siswa'=>$siswa]);
    }

    public function update(Request $request, $id)
    {
      $this -> validate($request, [
        'nama' => 'required',
        'umur'=> 'required',
        'alamat'=> 'required'
      ]);


      $siswa = Siswa::find($id);
      $siswa->nama = $request->nama;
      $siswa->umur = $request->umur;
      $siswa->alamat = $request->alamat;
      $siswa->save();
      return redirect('/siswa');
    }

    public function destroy($id)
    {
      $siswa = Siswa::find($id);
      $siswa->delete();
      return redirect('/siswa');
    }

    public function trash()
    {
      $siswa = Siswa::onlyTrashed()->get();
      return view('siswa_trash',['siswa'=>$siswa]);
    }

    public function kembalikan($id)
    {
      $siswa = Siswa::onlyTrashed()->where('id',$id);
      $siswa->restore();
      return redirect('/siswa/trash');
    }
    public function kembalikan_semua()
    {
      $siswa = Siswa::onlyTrashed();
      $siswa -> restore();
      return redirect('/siswa/trash');
    }

    public function hapus_permanen($id)
    {
      $siswa =Siswa::onlyTrashed()->where('id',$id);
      $siswa->forceDelete();
      return redirect('/siswa/trash');
    }

    public function hapus_permanen_semua()
    {
      $siswa = Siswa::onlyTrashed();
      $siswa->forceDelete();
      return redirect('/siswa/trash');
    }
}
