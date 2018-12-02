<?php

namespace App\Http\Controllers;

use App\Models\Discussion;
use Illuminate\Http\Request;

class ForumController extends Controller
{
    public function index()
    {
        $discussions = Discussion::orderBy('created_at', 'DESC')->paginate(3);
        return view('pages.public.forum.index', compact('discussions'));
    }
}
