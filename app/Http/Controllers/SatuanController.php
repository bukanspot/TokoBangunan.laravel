<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Satuan;

class SatuanController extends Controller
{
    public function index()
    {
        $satuan = Satuan::get();
        return view('main.satuan', compact('satuan'));
    }

    public function create(Request $request)
    {
        Satuan::create($request->all());
        return redirect('/satuan');
    }

    public function destroy($id)
    {
        Satuan::destroy($id);
        return back();
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'satuan'=> 'required'
        ]);

        Satuan::where('id', $id)
            ->update([
                'satuan' => $request->satuan
            ]);
        return back();
    }
}
