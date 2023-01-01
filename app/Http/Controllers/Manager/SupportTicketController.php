<?php

namespace App\Http\Controllers\Manager;


use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\SupportTicket;

class SupportTicketController extends Controller
{


    public function list()
    {
        $tickets = SupportTicket::paginate();

        return view('manager.modules.support_ticket.list', compact('tickets'));
    }

}
