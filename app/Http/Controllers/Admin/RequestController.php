<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Faker\Guesser\Name;
use Illuminate\Http\Request;

use App\Models\ContactRequest as UserRequest;

class RequestController extends Controller
{
    public function index()
    {
        $requests = UserRequest::latest()->get();
        return view('admin.index', compact('requests'));
    }

    public function destroy($id)
    {
        UserRequest::findOrFail($id)->delete();
        return back()->with('success', 'Заявка удалена');
    }

    public function markDone($id)
    {
        $request = UserRequest::findOrFail($id);
        $request->is_handled = true;
        $request->save();

        return back()->with('success', 'Заявка отмечена как обработанная');
    }
}