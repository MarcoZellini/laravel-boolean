<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Models\Lead;
use App\Mail\NewLeadEmail;
use Illuminate\Support\Facades\Mail;

class LeadController extends Controller
{
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'max:50', 'string'],
            'email' => ['required', 'email'],
            'phone' => ['required'],
            'message' => ['required'],
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ]);
        }

        $lead = Lead::create($request->all());

        $email = Mail::to('test@cocktails.it')->send(new NewLeadEmail($lead));

        return response()->json([
            'success' => true,
            'email' => $email,
            'message' => 'Message Sent Successfully!'
        ]);
    }
}
