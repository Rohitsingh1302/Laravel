<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\welcomeMail;
use Illuminate\Support\Facades\Mail;
use Throwable;

class EmailController extends Controller
{
    public function sendEmail(Request $request)
    {
        $data = $request->validate([
            'to' => ['required', 'email'],
            'subject' => ['required', 'string', 'max:255'],
            'message' => ['required', 'string'],
        ]);

        try {
            Mail::to($data['to'])->send(new welcomeMail($data['subject'], $data['message']));
            return response('sent succesfully');
        } catch (Throwable $e) {
            return response('Mail authentication failed. Update MAIL_USERNAME / MAIL_PASSWORD (Gmail App Password) and run php artisan optimize:clear.', 500);
        }
    }
}
