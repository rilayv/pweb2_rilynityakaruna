<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;

class BarangController extends Controller
{
    public function index(){
        $data = Barang::all();
        return view('tables')->with('data',$data);
    }

    function create(){
        return view('forms');
    }

    function insertdata(Request $request){
        Barang::create($request->except(['_token','submit']));
        return redirect()->route('tables');
    }

    function edit($id){
        $data = Barang::find($id);
        return view('edit',['data' => $data]);
    }

    function update(Request $request, $id){
        $data = Barang::findorfail($id);
        $data->update($request->except(['_token','submit']));
        return redirect()->route('tables');
    }

    function destroy($id){
        $data = Barang::findorfail($id);
        $data->delete();
        return redirect()->route('tables');
    }
}