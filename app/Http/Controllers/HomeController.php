<?php

namespace App\Http\Controllers;

use App\Type;
use App\Room;
use App\Floor;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $start_min_date = ($request->input('start_date')) ?  : Carbon::today()->addDays(3)->format('Y-m-d');
        $end_min_date = ($request->input('end_date')) ?  : Carbon::today()->addDays(4)->format('Y-m-d');
        $room_types = Type::all();
        $floors = Floor::all();
        return view('home',compact('start_min_date','end_min_date','floors','room_types'));
    }

    public function search(Request $request) {

        $start_min_date = ($request->input('start_date')) ?  : Carbon::today()->addDays(3)->format('Y-m-d');
        $end_min_date = ($request->input('end_date')) ?  : Carbon::today()->addDays(4)->format('Y-m-d');
        $room_types = Type::all();
        $floors = Floor::all();

        $query = Room::where('floor_id',$request->input('floor'))
            ->whereHas('types', function($t) use ($request) {
                $t->where('id',$request->input('room_type'));
            })
            ->paginate(7);

        return view('search',compact('start_min_date','end_min_date','floors','room_types','query'));
    }
}
