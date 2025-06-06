<?php

namespace App\Http\Controllers;

use App\Models\ContactRequest as UserRequest;
use Illuminate\Http\Request;

class RequestController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string'
        ]);

        UserRequest::create($data);

        return back()->with('success', 'Заявка отправлена!');
    }
}
