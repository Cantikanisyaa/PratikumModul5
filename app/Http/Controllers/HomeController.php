<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class HomeController extends Controller
{
function index()
{
    $pageTitle = 'Home';
    return view('home', ['pageTitle' => $pageTitle]);
    }
    function back()
{
    $pageTitle = 'welcome';
    return view('welcome', ['pageTitle' => $pageTitle]);
    }
}
