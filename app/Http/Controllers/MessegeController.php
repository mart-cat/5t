<?php

namespace App\Http\Controllers;

use App\Models\Messeg;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MessegeController extends Controller
{
    public function messeges(Request $request)
    {
        $request->validate([
            'text' => 'required|max:255',
        ]);

        Messeg::create([
            'text' => $request->text,
            'user_id' => Auth::user()->id,
        ]);

        return redirect()->intended('/');
    }

    public function profile(Request $request)
    {
        $prof = Messeg::where('user_id',Auth::user()->id)->get();;
        return view('profile', ['profiles' => $prof]);

    }

}
