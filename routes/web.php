<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return view('home');
})->name('home');


Route::get('/contact', function () {
    // return "09063676340";
    return view('contact');
});
Route::get('/portifolio', function(){
    return view('portifolio');
});
//parameter using route
Route::get('/portifolio/{firstname}/{lastname}', function ($firstname, $lastname){
    // return view('portifolio');
    return "{$firstname}  {$lastname}";
});
//named route
Route::get('/test', function(){
    return "This is a test page";
})->name("testpage");

//grouped route
Route::prefix('portifolio')->group(function(){
    Route::get('/company', function(){
        return view('company');
    });
    Route::get('/about-us', function(){
        return view('about-us');
    });
});

//post route
Route::post('formsubmitted', function(Request $request){
//  return "Form Submitted Succesfully!";
//validating before grapping from user
$request->validate([
    "fullname" => "required|min:3|max:50",  
    "email" => "required|min:3|max:50|email",
]);
$fullname = $request->input("fullname");
$email = $request->input("email");
echo "Form submitted succesfully!<br>";
return "Your Full name is $fullname and your email adddress is $email";
})->name('formsubmitted');
// echo "I'm here"
