<?php

namespace App\Http\Controllers;

use App\Models\Szakdogak;
use Illuminate\Http\Request;

class SzakdogakController extends Controller
{
    public function index(){
        return Szakdogak::all();
    }
    
    public function store(Request $request){
        $record= new Szakdogak();
        $record->fill($request->all());
        $record->save();
    }
    
    public function show(string $id){
        $doga=Szakdogak::where('id', $id)->get();
        return $doga;
    }
    
    public function put(Request $request, string $id){
        $record=Szakdogak::find($id);
        $record->fill($request->all());
        $record->save();
    }
    public function destroy($id){
        Szakdogak::find($id)->delete();
    }
}
