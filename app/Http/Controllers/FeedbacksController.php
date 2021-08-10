<?php
namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class FeedbacksController extends Controller
{
    public function Index()
    {
        $feedbacks = Feedback::latest()->get();
        return view('admin.feedback', compact('feedbacks'));
    }

    public function Store()
    {
        $this->validate(request(), [
            'message' => 'required',
            'email' => 'required',
        ]);

        $feedback = new Feedback();
        $feedback->email = request('email');
        $feedback->message = request('message');

        $feedback->save();
        return redirect('/contacts');
    }
}
