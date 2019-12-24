<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
class Feedback extends Model
{
    protected $fillable = ['user_id', 'feedback'];

    public function feedbacks_with_users()
    {
        $feedbacks = DB::table('feedback')
            ->join('users', 'users.id', '=', 'feedback.user_id')
            ->select('users.*', 'feedback.*')
            ->get();
            return $feedbacks;
    }
}
