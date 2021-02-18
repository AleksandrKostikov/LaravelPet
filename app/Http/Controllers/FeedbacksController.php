<?php

namespace App\Http\Controllers;

use App\Models\Feedback;

class FeedbacksController extends Controller
{
    public function index()
    {
        $feedbacks = Feedback::latest()->get();

        return view('feedback', compact('feedbacks'));
    }

    public function store()
    {
        $attributes = request()->validate([
            'email' => 'required|email',
            'message' => 'required',
        ]);

        Feedback::create($attributes);

        return redirect('/');
    }
}
