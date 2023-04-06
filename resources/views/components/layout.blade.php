<!DOCTYPE html>
<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
{{-- css --}}

<link rel="stylesheet" href="{{ URL::asset('css/font-awesome.css') }}"  type='text/css'/>
<link rel="stylesheet" href="{{ URL::asset('css/bootstrap-3.1.1.min.css') }}"  type='text/css'/>


{{-- js --}}

<script src="{{ URL::asset('js/jquery.min.js') }}"></script>
<script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>

<link rel="stylesheet" href="{{ URL::asset('css/style.css') }}" type='text/css'/>
<link href='//fonts.googleapis.com/css?family=Roboto:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>

<script src="//unpkg.com/alpinejs" defer></script>

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

</head>


    <body>

        <x-flash-message />
        @include('partials._navbar')
        @include('partials._search')
            <div class="container">
                <div class="single">
                    {{$slot}}
                </div>
            </div>
       

    </body>
</html>