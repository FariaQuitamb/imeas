<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Member;

class WelcomeController extends Controller
{
    //
    public function welcome()
    {
        $totalMember = Member::count();
        return view('dashboard', compact('totalMember'));
    }
}
