<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homecontroller extends Controller{
public function helloWorld(Request $request):string {
   var_dump($request->query('name') );
    var_dump($request->query('lastname') );
    return "Hello World !!!";
}
}
