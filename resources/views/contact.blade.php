@extends('layouts.default')

@section('header')
 This is this my contact page!       
@endsection
@section('maincontent')
 <h1>Contact</h1>
 <a href="{{url('/')}}">Go to home</a><br>
 <a href="{{route('home')}}">Go to home using route</a>
@endsection
@section('footer')
 This is the footer!
@endsection
