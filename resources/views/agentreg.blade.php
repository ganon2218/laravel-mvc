<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Agent Registration</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
       

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body>
        <center><h1>Agent Registration</h1></center>
                <form method="POST" action="agtreg">
                    @csrf
            <input type="text" id="rname" class ="rname" name="rname" placeholder="Resort Name">
            <small class="rname-msg" ></small><br><br>
            
            <input type="text" id="oname" class ="oname" name="oname" placeholder="Owner Name">
            <small class="oname-msg" ></small><br><br>
            <input type="email" id="email" class ="email" name="email" placeholder="Email address"><br>
            <small class="email-msg" ></small><br>
            
            <input type="text" id="phno" name="phno" class="phno" placeholder="contact number"><br>
            <small class="phno-msg" ></small><br>

            <input type="password" id="pwd" name="pwd" class="pwd" placeholder="password">
            <small class="pwd-msg" ></small><br><br>
            <input type="password" id="cpwd" name="cpwd" class="cpwd" placeholder="confirm password">
            <small class="cpwd-msg" ></small><br><br>
            <input type="text" id="dis" name="dis" placeholder="district">
            <input type="text" id="st" name="st" placeholder="state">
            <input type="text" id="ctr" name="ctr" placeholder="country"><br><br>
            <input type="number" id="ra" name="ra" placeholder="rate/day/person"><br><br>
            <input type="number" id="rc" name="rc" placeholder="rate/day/child"><br><br>
            <button type="submit">Register</button>
        </form>
    </body>