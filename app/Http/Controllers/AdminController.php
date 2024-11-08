<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Messeg;

class AdminController extends Controller
{
    public function admin(Request $request)
    {
        $bads = Messeg::where('bad','1');
        return view('admin', ['bads' => $bads]);

}}
