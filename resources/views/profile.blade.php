@extends('layout/layout')
@section('container')
@include('layout.header')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Website MealPlan | Profile</title>
</head>
<body>
    <h1>Profil Saya</h1>
    <h3><?php echo $Name; ?></h3>
    <h3><?php echo $Gender; ?></h3>
    <h3><?php echo $Contact; ?></h3>
    <h3><?php echo $Email; ?></h3>
    <img src="profileuser.jpg" alt="Profile User" width="200">
</body>
</html> 
@include('layout.footer')
@endsection()