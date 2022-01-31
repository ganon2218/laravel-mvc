<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

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
        <center><h1>Admin login</h1></center>
        <form method="POST" action="admlog">
            @csrf
            <center><input type="email" name='usn' id="usn" placeholder="username"><br><br>
            <input type="password" name="pass" id="pass" placeholder="password"><br><br>
            <button type="submit">Verify</button></center>
        </form>
    </body>