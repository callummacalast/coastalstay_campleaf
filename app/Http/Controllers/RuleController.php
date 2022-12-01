<?php

namespace App\Http\Controllers;

use App\Models\CampsiteRule;
use App\Models\Rule;
use Illuminate\Http\Request;

class RuleController extends Controller
{
    public function index()
    {
        $rules = CampsiteRule::paginate(10);
        return view('rules.index', compact('rules'));
    }
}
