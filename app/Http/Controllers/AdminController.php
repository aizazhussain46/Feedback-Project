<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Feedback;
use App\User;
class AdminController extends Controller
{
    public function index(){
        return view("Admin/index");
    }
    public function view_feedbacks(){
        $feedback_obj = new Feedback;
        $data["feedbacks"] = $feedback_obj->feedbacks_with_users(); 
        return view("Admin/view_feedbacks", $data);
    }
}
