<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Lumen\Routing\Controller as BaseController;

class IndexController extends BaseController
{
    public function index()
    {
        return 'Hello Kolesa Backend Upgrade!';
    }

//    public function hello(Request $request)
//    {
//        $name = $request->input('name');
//    }
}
