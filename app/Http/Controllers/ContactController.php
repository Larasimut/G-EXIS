<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $data = [
            'name'    => $request->name,
            'email'   => $request->email,
            'pesan' => $request->pesan
        ];

        Mail::send('emails.contact', $data, function ($mail) use ($data) {
            // UBAH EMAIL INI KE EMAIL ASLI KAMU
            $mail->to('gexisapplication@gmail.com')
                 ->subject('Pesan Baru dari Form Kontak G-EXIS');
        });

        return back()->with('success', 'Pesan kamu berhasil dikirim!');
    }
}
