<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>E-PaperBank</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" type="text/css" href="/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="/js/jquery.js"></script>
	<script src="/js/materialize.min.js"></script>
    <style >
        /* label focus color */
        .input-field input:focus + label {
         color: red !important;
        }
         /* label underline focus color */
         .row .input-field input:focus {
           border-bottom: 1px solid red !important;
           box-shadow: 0 1px 0 0 red !important
         }
    </style>
</head>
<body>
	<div>
        @yield('content')
    </div>
</body>
</html>
