<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<!doctype html>
<html lang="en">

<head>
    @foreach($homesetting as $homeset)
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{$homeset->webtitle}}</title>
    <meta name="keywords" content="{{$homeset->keyword}}" />
    <meta name="description" content="{{$homeset->des}}">
     <link rel="shortcut icon" href="{{asset('images/'.$homeset->image)}}" type="{{asset('images/'.$homeset->image)}}">
    <!-- google font -->
    <link href="//fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <!-- Template CSS Style link -->
    <link rel="stylesheet" href="{{ asset('assets/css/style-starter.css') }}">
     @endforeach
</head>