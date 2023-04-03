<?php

namespace App\Http\Controllers;
use App\Models\Auto;
use App\Models\DPS;
use App\Http\Controllers\View;
use Illuminate\Http\Request;

class AutoController extends Controller
{
    public function store(Request $request)
    {

        $validated = $request->validate([
            'vendor' => 'required|max:255',
            'user' => 'required|max:255',
            'numberplate' => 'required',
            'color' => 'required|max:255',
            'dps_id' => 'required',
        ]);

        if ($validated) {
            $auto = Auto::create(
                $request->all(['vendor', 'user', 'numberplate', 'color', 'dps_id'])
            );
        }

        return view(
            'auto.store',
            ['auto' => $auto]
        );
    }
    public function index()
    {
        $auto = Auto::all();
        $dps = DPS::all();

        return view('auto.index', ['auto' => $auto, 'dps' => $dps]);
    }
    public function create()
    {
        return view('auto.create');
    }
    public function show(string $id)
    {
        $auto = Auto::find($id);
        if (!isset($auto))
        {
            return abort(404);
        }
        return view('auto.show', ['auto' => $auto]);
    }
    public function edit(string $id)
    {
        $auto = Auto::find($id);
        if (!isset($auto))
        {
            return abort(404);
        }
        return view(
            'auto.edit',
            ['auto' => $auto]
        );
    }
    public function update(Request $request, string $id)
    {
        $auto = Auto::find($id);
        if (!isset($auto))
        {
            return abort(404);
        }
        $validated = $request->validate([
            'vendor' => 'required|max:255',
            'user' => 'required|max:255',
            'numberplate' => 'required',
            'color' => 'required|max:255',
        ]);
        if ($validated) {
            $auto->vendor = $request->input('vendor');
            $auto->user = $request->input('user');
            $auto->numberplate = $request->input('numberplate');
            $auto->color = $request->input('color');
            $auto->dps_id = $request->input('dps_id');
            $auto->save();
        }
        return view('auto.update', ['auto' => $auto]);
    }
    public function destroy(string $id)
    {
        $auto = Auto::find($id);
        if (!isset($auto))
        {
            return abort(404);
        }
        $auto->delete();
        return view(
            'auto.destroy',
            ['auto' => $auto]
        );
    }
}
