<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Negozio;
use \Illuminate\Http\Response;
use DB;

class NegozioController extends Controller
{
    //
    public function create(Request $request){
      $data = $request->input();
      $negozio = new Negozio;
      $negozio->name = $data['name'];
      $values = array('name' => $negozio->name, "created_at" => now(), "updated_at" => now());
      DB::table('Negozio')->insert($values);
      return back();
    }

    public function read(){
    $listanegozi= DB::table("Negozio")->cursor();
    return view('welcome', ['listanegozi' => $listanegozi]);
    //restituisce tutti i negozi in un'array di oggetti negozi.
    }


    public function delete(Request $request){
    $data = $request->input();
    try{
            $negozioeliminato = Negozio::find($data['id']);
            $negozioeliminato->delete();
    //restituisce tutti i negozi in un'array di oggetti negozi.
      }
      catch(Exception $e){

              }
    return back();
    }

    public function update(Request $request){
      $data = $request->input();
    try{
              $negozio = new Negozio;
              $negozio->name = $data['newname'];
              $negozio->id = $data['id'];
       }
    catch(Exception $e){

            }
    DB::table('Negozio')->where('id',$negozio->id)->update(["name"=>$negozio->name]);
    return back();
    }


}
