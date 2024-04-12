<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function index()
    {
        return view('clients.contact-us');
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:191',
            'email' => 'required|max:191',
            'subject' => 'max:191',
            'message' => 'required'
        ]);

        $message = new Feedback();
        $message->name = $request->input('name');
        $message->subject = $request->input('subject');
        $message->email = $request->input('email');
        $message->message = $request->input('message');

        $message->save();
        if ($request->ajax())
            return response()->json(["message" => "Thank you!"], 201);
        return back()->with('success', 'Thank your for your feedback');
    }

    public function feedbacks()
    {
        $f = Feedback::paginate(10);
        return view("admin.feedbacks", ["feedbacks" => $f]);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return JsonResponse
     */
    public function show($id)
    {
        $f = Feedback::find($id);
        return response()->json($f);
    }

    public function update(Request $request)
    {
        $f = Feedback::find($request->id);
        if (!$f) abort(404);
        $f->read = $request->read;
        $f->update();
        return response()->json([], 204);
    }


    public function destroy(Feedback $feedback)
    {
        $feedback->delete();
        return back();
    }
}
