<?php
use App\Mail\TestEmail;
use \Illuminate\Support\Facades\Mail;


function testMail($to = '' , $data=[]){
    Mail::to('eng.mina23@gmail.com')->send(new TestEmail($data));
}

function sendResetPassword($to='' ,$data =''){
//    return $data['message'];
    Mail::to($to)->send(new \App\Mail\ResetEmail($data));
}

