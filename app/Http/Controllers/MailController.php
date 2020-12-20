<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

use App\Http\Requests;
use App\Http\Controllers\Controller;


class MailController extends Controller {
   public function basic_email() {
    $to_name = 'dakun';
    $to_email = 'sakun915@gmail.com';
    $data = [];
    Mail::send('mail', $data, function($message) use ($to_email, $to_name)
        {
            $message->from('panencuan@kulitekno.com', "Goodfarm");
            $message->subject("Welcome to Goodfarm");
            $message->to($to_email);
        });
    // $data = array('name'=>"Sam Jose", "body" => "Test mail");
    // Mail::send('mail', $data, function($message) use ($to_email, $to_name) {
    //     $message->to($to_email)->subject('Artisans Web Testing Mail');
    //     $message->from('panencuan@kulitekno.com','Artisans Web');
    // });
    // Mail::send('emails.mail', $data, function($message) use ($to_name, $to_email) {
    //     $message->to($to_email, $to_name)
    //             ->subject('Artisans Web Testing Mail');
    //     $message->from('FROM_EMAIL_ADDRESS','Artisans Web');
    // });
   }
   public function html_email() {
      $data = array('name'=>"Virat Gandhi");
      Mail::send('mail', $data, function($message) {
         $message->to('abc@gmail.com', 'Tutorials Point')->subject
            ('Laravel HTML Testing Mail');
         $message->from('xyz@gmail.com','Virat Gandhi');
      });
      echo "HTML Email Sent. Check your inbox.";
   }
   public function attachment_email() {
      $data = array('name'=>"Virat Gandhi");
      Mail::send('mail', $data, function($message) {
         $message->to('abc@gmail.com', 'Tutorials Point')->subject
            ('Laravel Testing Mail with Attachment');
         $message->attach('C:\laravel-master\laravel\public\uploads\image.png');
         $message->attach('C:\laravel-master\laravel\public\uploads\test.txt');
         $message->from('xyz@gmail.com','Virat Gandhi');
      });
      echo "Email Sent with attachment. Check your inbox.";
   }
}