<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{


// partner with us
    public function partner_with_us()
    {
        return view("partner_with_us");   
    }
    // career opportunities
    public function career_opportunities()
    {
        return view("career_opportunities");   
    }
}
?>