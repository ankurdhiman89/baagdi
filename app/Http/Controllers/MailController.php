<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Mail;

use App\Http\Requests;
use App\Http\Controllers\Controller;
class MailController extends Controller
{
   public function basic_email() {
        
        $data = array('name'=>"Virat Gandhi");
   
      Mail::send(['text'=>'frontend.emails.get_free_quote'], $data, function($message) {

        $to1 = 'ankur.baagdisolutions@gmail.com';
        $subject = 'Laravel Basic Testing Mail';
        $fromemail = 'info@baagdi.com';
        $fromname = '';
        
        $message->to($to1);
        $message->subject($subject);
        $message->from($fromemail,$fromname);
      });
      echo "Basic Email Sent. Check your inbox.";
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
