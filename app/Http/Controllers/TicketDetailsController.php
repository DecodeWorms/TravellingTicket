<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Ticket;

class TicketDetailsController extends Controller
{
    
    protected function ticketDetails(Request $request){
        $userId = $request->user()->id;
        $result = $request->user()->with('tickets')->where('id','=',$userId)->get();
        return view('travellerDetails',compact('result'));

    }
}
