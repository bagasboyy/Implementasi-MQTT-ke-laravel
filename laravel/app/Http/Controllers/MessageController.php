<?php

namespace App\Http\Controllers;

use App\Models\ClientMessages;
use Illuminate\Http\Request;
use Illuminate\View\View;


class MessageController extends Controller
{
    public function display()
    {
        $clientMessages = ClientMessages::paginate(5);
        return view('message', compact('clientMessages'));
    }
}
