<?php
/**
 * Created by PhpStorm.
 * User: aholsinger
 * Date: 9/8/16
 * Time: 8:25 AM
 */

namespace Novate\Http\Controllers;

use Illuminate\Http\Request;
use Novate\Models\User;

class UserController extends Controller {

    public function userLookup(Request $request) {
        //this validates that email is provided and is a valid email address, don't want go to the database if not needed
        $this->validate($request, [
            'email'=>'required|email'
        ]);

        //ask the database if that email exists, this syntax will just look for a count and not query the
        //whole row which is nice
        if (User::where("email", $request->input("email"))->exists()) {
            return response()->json(['exists'=>true]);
        } else {
            return response()->json(['exists'=>false]);
        }
    }
}