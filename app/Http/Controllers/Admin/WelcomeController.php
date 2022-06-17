<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Eclesiastic;
use App\Models\Member;

class WelcomeController extends Controller
{
    public function welcome()
    {
        $members = Member::count();
        $ladies = Eclesiastic::where('department_id', 4)->count();

        return view('dashboard', compact('members', 'ladies'));
    }
}
