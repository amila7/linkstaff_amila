<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Gakusei;
use Illuminate\Support\Facades\DB;

class GakuseiController extends Controller
{
    public function index()
    {
        $gakusei = Gakusei::all();
        return view('index', compact('gakusei'))->with('i',(request()->input('page',1)-1)*5);
    }

     public function create()
     {
        return view('create');
     }

     public function store(Request $request)
     {
        Gakusei::create($request->all());
        return view('index')->with('i',(request()->input('page',1)-1)*5);
     }

     public function edit(Gakusei $gakusei)
     {
        return view('edit',compact('Gakusei'));
     }

     public function update(Request $request, Gakusei $gakusei)
     {
         $gakusei->update($request->all());
         return redirect()->route('index')->with('update','アップデートしました!');

     }

     public function destroy(Gakusei $gakusei)
     {
         $gakusei->delete();
         return redirect()->route('index')->with('destroy','削除しました!');
     }

}
