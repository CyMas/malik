<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ruangtamu;
use App\pesan;


class FurnitureController extends Controller
{
    public function databarang()
    {
      $data = ruangtamu::orderBy('id','desc')->get();
      return view('admin.databarang', ['data'=>$data]);
    }
    public function inputbarang()
    {
      return view('admin.inputbarang');
    }
    public function about()
    {
      return view('about');
    }
    public function blog()
    {
      return view('blog');
    }
    public function kontak()
    {
      return view('kontak');
    }
    public function pesanfurniture()
    {
      return view('pesan.pesanfurniture');
    }
    public function homeadmin()
    {
      $ruangtamu = \App\ruangtamu::count();
      $pesan     = \App\pesan::count();
      return view('admin.admin')->with('ruangtamu',$ruangtamu)->with('pesan',$pesan);

    }
    public function detailadmin($id)
    {
      $data = ruangtamu::find($id);
      return view('admin.detailadmin', ['data'=>$data]);
    }
    public function listfurniture()
    {
      $data = ruangtamu::orderBy('id', 'desc')->get();
      return view('pesan.listfurniture', ['data'=>$data]);
    }
    public function editbarang($id)
    {
      $data = ruangtamu::find($id);
      return view('admin/editbarang', ['data'=>$data]);
    }
    public function detailpesan($id)
    {
      $data = ruangtamu::find($id);
      return view('pesan.detail', ['data'=>$data]);
    }
    public function datapesanan()
    {
      $data = pesan::orderBy('id','desc')->get();
      return view('admin.datapesanan', ['data'=>$data]);
    }
    public function detailpesanan($id)
    {
      $data = pesan::find($id);
      return view('admin.detailpesanan', ['data'=>$data]);
    }

}
