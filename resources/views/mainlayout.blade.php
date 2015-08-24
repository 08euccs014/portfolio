<!DOCTYPE html>
<html lang="en">
    <head>
   		<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Mohit Agrawal</title>
        <link href='http://fonts.googleapis.com/css?family=Lato:400,700,400italic' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="{!! asset('/assets/css/bootstrap.min.css') !!}" />
		<link rel="stylesheet" href="{!! asset('/assets/css/timeline.css') !!}" />
     	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
     
        <style>
            body {
                font-family: 'Lato';
            }
        </style>
    </head>
    <body>
        <div class="container">
         @yield('content')
        </div>
    </body>
</html>
