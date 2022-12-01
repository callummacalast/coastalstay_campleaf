<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CampsiteRule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class AdminRuleController extends Controller
{
    public function index()
    {
        $rules = CampsiteRule::paginate(5);


        return view('admin.rules.index', compact('rules'));
    }

    public function show($rule)
    {
        $rule = CampsiteRule::find($rule);

        return view('admin.rules.show', compact('rule'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
            'rule' => 'required'
        ]);

        $rule = new CampsiteRule;

        $rule->fill($validated);

        $rule->save();
        return Redirect::route('admin.rules.index')->with('success', 'Rule Created');
    }

    public function create()
    {
        return view('admin.rules.create');
    }

    public function destroy($rule)
    {
        $rule = CampsiteRule::findOrFail($rule);

        $rule->delete();

        return Redirect::route('admin.rules.index')->with('success', 'Rule Deleted');
    }

    public function update(Request $request, $rule)
    {
        $validated = $request->validate([
            'title' => 'required',
            'rule' => 'required'
        ]);

        $rule = CampsiteRule::findOrFail($rule);

        $rule->fill($validated);

        $rule->update();

        return Redirect::route('admin.rules.index')->with('success', 'Rule Updated');
    }
}
