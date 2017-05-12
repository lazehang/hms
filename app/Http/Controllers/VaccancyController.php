<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Vaccancy;
use App\Room;
use App\Http\Requests;
use App\Booking;



class VaccancyController extends Controller
{
    function view()
    {
	 $vaccancies = Vaccancy::with('room')->paginate(5);

	 return view('front.vaccancy.vaccancies', ['vaccancies' => $vaccancies]);
    }
    
    function add(){
        $rooms = Room::all();
        return view('front.vaccancy.addVaccancy',['rooms' => $rooms]);
    }
    function post( Requests\CreateVaccancy $request){
        $type = $request['type'];
        $vaccancy = Vaccancy::where('type', $type)->first();

        if(count($vaccancy) > 0)
        {
            $old = $vaccancy->seats;
            $seats = $request['seats'];
            $vaccancy->update(['seats' => ($old + $seats)]);
        }else{
            Vaccancy::create($request->all());
        }

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
    function delete ( $id) {
        $vaccancy = Vaccancy::find($id);
        $vaccancy->delete();
        
        return redirect()->route('vaccancies');

    }

    function bookings()
    {
        $bookings = DB::table('bookings')
            ->join('vaccancies', 'bookings.vaccancy_id', '=', 'vaccancies.id')
            ->select('vaccancies.type', 'bookings.*')
            ->paginate(10);

        return view('front.admin.booking', ['bookings' => $bookings]);
    }

    function booking($id) {
        $bookings = Vaccancy::find($id);

        return view('front.vaccancy.booking',['bookings' => $bookings, $id]);
    }
    function bookRoom(Requests\CreateBooking $request, $id) {

        $booking = new Booking([
            'name' => $request['name'],
            'vaccancy_id' => $request['vaccancy_id'],
            'contact' => $request['contact'],
            'message' => $request['message'],
            'email' => $request['email']
            ]);
        $booking->save();

        $books = Vaccancy::find($id);
        $books->decrement('seats');

        return redirect()->route('booked',['books' => $books]);
    }
    function booked($id){
        $book = Vaccancy::find($id);

       return view('front.vaccancy.booked', ['book' => $book]);
    }

    function  deleteBooking($id, $vaccancy_id){
        $booking = Booking::find($id);
        $booking->delete();

        $vaccancy = Vaccancy::find($vaccancy_id);

        $vaccancy->increment('seats');

        return redirect()->route('vaccancies');

    }


}
