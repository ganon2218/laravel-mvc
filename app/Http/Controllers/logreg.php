<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class logreg extends Controller
{
    //functions for login
    function userlog()
    {
        echo'userlog';
    }
    
    function adminlog()
    {
        echo'adminlog'; 
    }
    
    function agentlog()
    {
        echo'agentlog';
    }

    //functions for registration
    function userreg()
    {
        echo'userreg';
    }
    
    function agentreg()
    {
        echo'agentreg';
    }
}
