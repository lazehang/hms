<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Vaccancy;
use App\Room;
use App\Http\Requests;



class VaccancyController extends Controller
{
    function view()
    {
	 $vaccancies = Vaccancy::with('room')->paginate(10);
	 return view('front.vaccancy.vaccancies', ['vaccancies' => $vaccancies ]);
    }
    function add(){
        $rooms = Room::all();
        return view('front.vaccancy.addVaccancy',['rooms' => $rooms]);
    }
    function post( Requests\CreateVaccancy $request){

        Vaccancy::create($request->all());
        return redirect()-> route('vaccancies');

    }
    function edit( $id ){

        $vaccancy = Vaccancy::find($id);
        $rooms = Room::all();
        return view('front.vaccancy.editVaccancy', ['vaccancy' => $vaccancy, 'rooms' => $rooms]);
    }
    function  update (Requests\CreateVaccancy $request, $id) {

        $vaccancy = Vaccancy::find($id);
        $vaccancy->update( $request->all());

        return redirect()->route('vaccancies');

    }
    function delete ($id) {
        $vaccancy = Vaccancy::find($id);
        $vaccancy->delete();

        return redirect()->route('vaccancies');

    }


}
