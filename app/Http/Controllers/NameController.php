<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Names;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class NameController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return View
     */
    public function index(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'submit' => 'required',
        ]);
        if ($validator->fails()) {
            return view('name');
        }

        $data = Names::inRandomOrder()->first();
        return view('name',$data);
    }
}