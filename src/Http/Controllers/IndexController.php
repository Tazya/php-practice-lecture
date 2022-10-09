<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\View;
use Laravel\Lumen\Routing\Controller as BaseController;

class IndexController extends BaseController
{
    public function index()
    {
        return View::make('home');
    }
}
