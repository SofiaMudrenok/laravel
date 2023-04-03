<?php

namespace App\Http\Controllers;
use App\Models\DPS;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DpsController extends Controller
{
    public function show(int $id)
    {
        $auto = DB::table('dps')
            ->leftJoin('dps', 'dps.dps_id', '=', 'dps.id')
            ->where('dps.id', '=', $id)
            ->get();
        return view('dps.show', ['auto' => $auto]);
    }
}
