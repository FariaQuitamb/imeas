<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Classe;
use App\Models\Department;
use App\Models\Eclesiastic;
use App\Models\Member;

class WelcomeController extends Controller
{
    public function welcome()
    {
        $members = Member::with('eclesiastic')->get();
        $departments = Department::with('eclesiastics')->get();

        $classes = Classe::withOnly('eclesiastic')->get();

        $relatedMembers = Eclesiastic::all();

        $lastRegister = $members->last()->created_at->diffForHumans();
        $lastRelated = $relatedMembers->last()->created_at->diffForHumans();

        return view(
            'dashboard',
            compact(
                'members',
                'departments',
                'lastRegister',
                'relatedMembers',
                'lastRelated',
                'classes'
            )
        );
    }
}
