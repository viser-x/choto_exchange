<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function sendEmail(Request $request)
    {
        $request->validate([
            'receiver' => 'required|email',
            'subject' => 'required',
            'body' => 'required',
        ]);
        $receiver = $request->receiver;
        $subject = $request->subject;
        $body = $request->body;
        $sender = $request->sender ?? config('mail.from.address');
        $sender_name = $request->sender_name ?? config('app.name');

        Mail::to($receiver)->send(new SendMail($subject, $body, $sender, $sender_name));
        info('--------Start---------');
        info('Sender: ' . $sender);
        info('Sender name: ' . $sender_name);
        info('Receiver: ' . $receiver);
        info('Subject: ' . $subject);
        info('Body: ' . $body);
        info('--------End---------');
        return response()->json([
            'message' => 'Email sent successfully!'
        ]);
    }
}
