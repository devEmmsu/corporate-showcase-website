<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <link rel="icon" type="image/png" href="{{ asset('images/logo_dark.png') }}" />
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <title>{{ $title ?? 'White Dove | Bienvenu' }}</title>
    <style>
        .icon{
          font-size: 100px;
        }
        .footer{
          position: relative;
          bottom: 0px;
          width: 100%;
        }
        .f-20{
          font-size:20px
        }
        .is-active{
          border-bottom: 4px solid #2261fd;
        }
        select {
          -webkit-appearance: none !important;
          -webkit-border-radius: 0px !important;
        }
    </style>
  </head>
  <body>