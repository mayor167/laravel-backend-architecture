@extends('layouts.default')

@section('header')
 This is this my header!       
@endsection

@section('header')
@section('maincontent')
 <h1>Home</h1>
 <a href="{{ route('testpage')}}">Go to test page</a>
 <form action="{{route('formsubmitted')}}" method="POST">
         @csrf
         <label for="fullname">Full name:</label>
         <input type="text" id="fullname" name="fullname" placeholder="Enter your full name" required>
         <br><br> 
         <label for="email">Email Address:</label>
         <input type="email" id="email" name="email" placeholder="Enter your email address" required>
         <br><br>
         <button>Submit</button>
 </form>  
@endsection
@section('footer')
 This is the footer!
@endsection
