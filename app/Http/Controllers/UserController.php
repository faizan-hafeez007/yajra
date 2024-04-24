<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use Yajra\DataTables\Facades\DataTables;

class UserController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $query = User::query()->take(10);
            return DataTables::of($query)->addIndexColumn()->make(true);
        }
        return view('test');
    }
}
