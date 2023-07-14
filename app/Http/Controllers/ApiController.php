<?php

namespace App\Http\Controllers;
use App\ClientMessages;
use DisplayController;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    
    public function index(Request $request, \App\Http\Controllers\ClientMessages $cm){
        
        $bodyContent = $request->getContent();
        $cm->api($request,$cm);
        return gettype($bodyContent); 
    }
    
}