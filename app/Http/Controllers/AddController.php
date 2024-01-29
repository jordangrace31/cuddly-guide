<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Notifications\EmailAdded;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Str;

class AddController extends Controller
{
    public function store(): RedirectResponse
    {
        $selectedInterests = $_POST['interests'] ?? []; // Get the selected interests as an array

        $interestList = implode(',', $selectedInterests);

        $attributes = request()->validate([
            'name' => 'required|string',
            'surname' => 'required|string',
            'email' => 'required|email',
            'mobile' => 'required|digits:10',
            'sa_id' => 'required|digits:13',
            'birthdate' => 'required',
            'language' => 'required',
            'interest' => 'required'
        ]);

        $attributes['interests'] = $interestList;
        $attributes['user_id'] = Auth::id();
        $attributes['slug'] = STR::random();

        $user = Post::create($attributes);

        session()->flash('success', 'The new person has been added!');

        $user->notify(new EmailAdded);

        return redirect(RouteServiceProvider::HOME);


    }

}