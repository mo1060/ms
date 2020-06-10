<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=.7">


        <title>Studie</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
 
        <!-- Styles -->
       <link href="/css/main.css" rel="stylesheet">
       
   <!-- Bootstrap core CSS -->
   <link rel="stylesheet" href="/css/app.css">   
            </head>
    <body>
    @yield('study')
    @yield('grill')
    @yield('mixer')
    </body>
</html>

