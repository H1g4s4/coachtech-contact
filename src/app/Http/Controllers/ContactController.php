<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function confirm(ContactRequest $request)
    {
        $contact = $request->only(['first-name', 'later-name', 'gender', 'email', 'phone_part1', 'phone_part2', 'phone_part3', 'address', 'house', 'inquiry_type', 'content']);
        return view('confirm', ['contact' => $contact]);
    }

    public function store(ContactRequest $request)
    {
        $contact = $request->only(['first-name', 'later-name', 'email', 'phone_part1', 'phone_part2', 'phone_part3', 'content', 'address', 'house', 'gender', 'inquiry_type']);
        return view('thanks');
    }

}