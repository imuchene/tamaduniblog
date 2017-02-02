<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Socialite;
use App\Http\Controllers\Controller;

class OauthController extends Controller
{
    public function redirect(Request $request)
    {
    	return Socialite::driver('google')->with(['hd' => 'tamaduni.co.ke'])->redirect();
    }

    public function callback(Request $request)
    {
    	$author = Socialite::driver('google')->user();

    	$avatar = $author->getAvatar();
 		
    	$name = $author->getName();

    	$email = $author->getEmail(); 
    	



    }
}
