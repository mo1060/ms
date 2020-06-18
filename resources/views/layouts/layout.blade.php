<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">


        <title>Studie</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
 
        <!-- Styles -->
       <link href="/css/main.css" rel="stylesheet">
       
   <!-- Bootstrap core CSS -->
   <link rel="stylesheet" href="/css/app.css">   
   <style>
   input[type='radio'] { transform: scale(2);     -webkit-box-sizing: border-box; /* Safari/Chrome, other WebKit */
    -moz-box-sizing: border-box;    /* Firefox, other Gecko */
    box-sizing: border-box;   }
    label {
        padding: 5px; 
    }
    @media only screen and (max-width: 600px) {

    .leftlabel  {
            font-size: 0.8em; 
        }

    .rightlabel {
        font-size: 0.8em; 
    }

    input[type=range] {
  width: 25%; /* Specific width is required for Firefox. */
}

h1 {
    font-size: 0.5em; 
}


}
   </style>
            </head>
    <body>
    @yield('study')
    @yield('grill')
    @yield('mixer')
    </body>
</html>

