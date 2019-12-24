<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Feedback;
class FeedbackController extends Controller
{
    public function index(){
        return view("User/feedback");
    }

    public function submit_feedback(Request $request){
        $validator = Validator::make($request->all(), [
            'feedback' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect('/')
                        ->withErrors($validator)
                        ->withInput();
        }
        else{
            $user = auth()->user();
        
            $insert = new Feedback;
            $insert->user_id = $user->id;
            $insert->feedback = $request->feedback;
            if($insert->save()){
                return redirect('/')->with('msg', 'Your Feedback Submitted Successfully!');
            }
            else{
                return redirect('/')->with('msg', 'Feedback not Submitted. Try Again.....');
            }
        }
    }
}
