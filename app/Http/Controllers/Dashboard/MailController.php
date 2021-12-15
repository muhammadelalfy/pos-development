<?php

namespace App\Http\Controllers\Dashboard;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;
use App\Mail\FatoraMail;
use Illuminate\Http\Request;


class MailController extends Controller
{
     public function email(Request $request)
    {
        $details=[
            'title'=>'Mail Form Ahmed Test Laravel 8',
            'body'=>'This Is Fore Testing mail useng laravel'
        ];
        
        $status = Mail::to('biteamgoal@gmail.com')->send(new FatoraMail($details));
               return 'Email Sent';
        
    }
}
