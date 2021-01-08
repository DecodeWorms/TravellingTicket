<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Ticket;
use App\User;
use Validator;
use Auth;


class TicketController extends Controller
{

    public function bookTicket(Request $request){
        $formData = $request->all();
        $rules = [
            'departureDate'=>['required','string'],
            'arrivalDate'=>['required','string'],
            'country'=>['required','string'],
            'hotel'=>['required','string']

        ];

        $validator = Validator::make($formData,$rules);
        
        if($validator){
            Ticket::create([
                'user_id'=>Auth::user()->id,
                'depature_date'=>$request->departureDate,
                'arrival_date'=>$request->arrivalDate,
                'country'=>$request->country,
                'hotel'=>$request->hotel

            ]);
            return redirect()->intended('/Ticketdetails');
        }else{
            

        }

    }
}
