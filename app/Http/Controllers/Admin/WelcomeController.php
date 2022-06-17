<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\Member;

class WelcomeController extends Controller
{
    public function welcome()
    {
        $members = Member::with('eclesiastic')->get();
        $departments = Department::with('eclesiastic')->get();
        $lastRegister = $members->last()->created_at->diffForHumans();
        return view('dashboard', compact('members', 'departments', 'lastRegister'));
    }
}
