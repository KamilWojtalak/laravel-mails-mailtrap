<?php

namespace App\Http\Controllers;

use App\Mail\Feedback;
use Illuminate\Support\Facades\Mail;

class TestMailController extends Controller
{
    public function index()
    {
        $email = 'kontakt@wojtalak.com';
        $content = 'jakiś content';

        Mail::to($email)
            ->send(new Feedback($content));

        // Można dać też
        // ->queue(new Feedback($content));
    }
}

