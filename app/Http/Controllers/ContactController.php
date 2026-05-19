<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Mail\ContactMessage;
use App\Mail\ContactAutoReply; // 1. IMPORT THE NEW AUTO-REPLY CLASS HERE

class ContactController extends Controller
{
    public function send(Request $request) {
        // Validate incoming data from the form
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // 2. SEND THE INTERNAL INQUIRY TO YOUR FIRM INBOX
        Mail::to('info@sehunaneattorneys.co.za')->send(new ContactMessage($data));

        // 3. SEND THE INSTANT AUTO-REPLY TO THE USER WITH RE: SUBJECT
        Mail::to($data['email'])->send(new ContactAutoReply($data['name'], $data['subject']));

        // 4. RETURN SUCCESS RESPONSE FOR SWEETALERT TO PICK UP
        if ($request->ajax()) {
            return response()->json(['success' => 'Message processed successfully!']);
        }

        return back()->with('success', 'Your message has been sent successfully!');
    }
}