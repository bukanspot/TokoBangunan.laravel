<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jenis;
use App\Flight;

class JenisController extends Controller
{
    public function index()
    {
        $jenis = Jenis::get();
        return view('main.jenis', compact('jenis'));
    }

    public function create(Request $request)
    {
        Jenis::create($request->all());
        return redirect('/jenis');
    }

    public function destroy($id)
    {
        Jenis::destroy($id);
        return back();
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'jenis'=> 'required'
        ]);

        Jenis::where('id', $id)
            ->update([
                'jenis' => $request->jenis
            ]);
        return back();
    }
}
