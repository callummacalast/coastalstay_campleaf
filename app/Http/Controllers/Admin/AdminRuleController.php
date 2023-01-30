<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CampsiteRule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class AdminRuleController extends Controller
{
    public function index(CampsiteRule $campsiteRule)
    {
        $campsiteRule = CampsiteRule::paginate(10);
        return view('admin.rules.index', compact('campsiteRule'));
    }

    public function show(CampsiteRule $campsiteRule)
    {
        return view('admin.rules.show', compact('campsiteRule'));
    }

    public function store(Request $request, CampsiteRule $campsiteRule)
    {
        $validated = $request->validate([
            'title' => 'required',
            'rule' => 'required'
        ]);

        $campsiteRule = new CampsiteRule;

        $campsiteRule->fill($validated);

        $campsiteRule->save();
        return Redirect::route('admin.rules.index')->with('success', 'Rule Created');
    }

    public function create()
    {
        return view('admin.rules.create');
    }

    public function destroy(CampsiteRule $campsiteRule)
    {
        $campsiteRule->delete();
        return Redirect::route('admin.rules.index')->with('success', 'Rule Deleted');
    }

    public function update(Request $request, CampsiteRule $campsiteRule)
    {
        $validated = $request->validate([
            'title' => 'required',
            'rule' => 'required'
        ]);
        $campsiteRule->fill($validated);
        $campsiteRule->update();

        return Redirect::route('admin.rules.index')->with('success', 'Rule Updated');
    }
}
