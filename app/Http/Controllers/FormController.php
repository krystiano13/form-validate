<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FormController extends Controller
{
    public function index() {
        return view('app');
    }

    public function store(Request $request) {
        $validator = Validator::make($request -> all(),[
            'name' => ['required', 'max:100'],
            'email' => ['required', 'email'],
            'text' => ['required', 'max:500'],
            'phone' => ['required', 'numeric'],
            'file' => ['file', 'max:5120', 'mimes:jpg,pdf']
        ]);

        if($validator -> fails()) {
            return response([
                'status' => false,
                'message' => 'Validation Error',
                'errors' => $validator -> errors()
            ],403);
        }

        return response([
            'status' => true,
            'message' => 'Message Sent',
            'file' => $request -> all()
        ], 200);
    }
}
