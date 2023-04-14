<?php
namespace Coupon\Code;
use Illuminate\Support\Facades\Route;

Route::get('Code',function (){
    echo "Hello  packages";

});
Route::post('insert',[couponcontroller::class,'insert']);

Route::get('add',function (){
   return view('Code::add');

});
Route::get('show',[couponcontroller::class,'show']);
Route::get("delete/{id}",[couponcontroller::class,'delete']);

Route::post('generateCouponCode',[couponcontroller::class,'generateCouponCode'])->name('generateCouponCode');
