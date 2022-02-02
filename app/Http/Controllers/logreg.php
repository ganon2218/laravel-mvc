<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class logreg extends Controller
{
    //functions for login
    function userlog()
    {
        //echo'userlog';
        $email = $_POST["usn"];
        echo $email;
    }

    function adminlog()
    {
        echo 'adminlog';
    }

    function agentlog()
    {
        echo 'agentlog';
    }

    //functions for registration
    function userreg()
    {
        //echo'userreg';
        $fname = $_POST["fname"];
        $lname = $_POST["lname"];
        $email = $_POST["email"];
        $phno = $_POST["phno"];
        $pwd = $_POST["pwd"];
        $dis = $_POST["dis"];
        $st = $_POST["st"];
        $ctr = $_POST["ctr"];
        echo "<pre>";
        echo print_r($_POST);
        echo "</pre>";
        return DB::select("insert into users values('$fname','$lname','$email','$phno','$pwd','$dis','$st','$ctr')");
        return redirect()->route('usrformlog');
    }

    function agentreg()
    {
        //echo 'agentreg';
        $rname = $_POST["rname"];
        $oname = $_POST["oname"];
        $email = $_POST["email"];
        $phno = $_POST["phno"];
        $pwd = $_POST["pwd"];
        $dis = $_POST["dis"];
        $st = $_POST["st"];
        $ctr = $_POST["ctr"];
        $ra = $_POST["ra"];
        $rc = $_POST["rc"];
       /* echo "<pre>";
        echo print_r($_POST);
        echo "</pre>";*/
        DB::select("insert into agents values('$rname','$oname','$email','$phno','$pwd','$dis','$st','$ctr','$ra','$rc')");
        return redirect()->route('agtformlog');
    }
}
