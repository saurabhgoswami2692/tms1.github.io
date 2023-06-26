<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Ticket;

class TicketController extends Controller
{
    //

    public function index(Request $req){

        $tickets = Ticket::get();
        
       return view('ticket.index',['tickets'=> $tickets]);
    }


    public function add(Request $req){
        
        $ticket = new Ticket;
        $ticket->query_type = $req->query_type;
        $ticket->name = $req->name;
        $ticket->email = $req->email;
        $ticket->mobile = $req->mobile;
        $ticket->priority = $req->priority;
        $ticket->subject = $req->subject;
        $ticket->message = $req->message;
        $ticket->save();


        return redirect('/')->with('status', 'Ticket added successfully!!');

    }

}
