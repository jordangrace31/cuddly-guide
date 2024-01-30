<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Notifications\EmailAdded;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
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
        $attributes['slug'] = Str::uuid();

        $user = Post::create($attributes);

        session()->flash('success', 'The new person has been added!');

        $user->notify(new EmailAdded);

        return redirect(RouteServiceProvider::HOME);


    }

}