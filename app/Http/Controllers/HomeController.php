<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Notifications\MailNotification;
use Illuminate\Support\Facades\Notification;


class HomeController extends Controller
{
    public function index(){
        $users = User::get();
        $post = [
            'title' => 'post title',
            'slug' => 'post-slug'
        ];
        //Notification::send($user, new MailNotification($post));
        foreach ($users as $user){
            $user->notify(new MailNotification($post));
        }
        dd('Successfully');
    }
}
