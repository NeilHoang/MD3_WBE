<?php

namespace App\Http\Controllers;

use App\Http\Requests\ManagementRequest;
use App\Management;
use Illuminate\Http\Request;

class ManagementController extends Controller
{
    public function index()
    {
        $managements = Management::paginate(5);
        return view('manager.list', compact('managements'));
    }

    public function create()
    {
        $managements = Management::all();
        return view('manager.create', compact('managements'));
    }

    public function store(Request $request)
    {
        $management = new Management();
        $management->firstName = $request->firstName;
        $management->lastName = $request->lastName;
        $management->phone = $request->phone;
        $management->email = $request->email;
        $management->address = $request->address;
        $image = $request->file('image');
        $path = $image->store('image', 'public');
        $management->avatar = $path;
        $management->save();
        return redirect()->route('manager.list');
    }

    public function destroy($id)
    {
        $management = Management::findOrFail($id);
        if (file_exists(storage_path("app/public/image/$management->avatar"))) {
            \Illuminate\Support\Facades\File::delete(storage_path("app/public/image/$management->avatar"));
        }
        $management->delete();
        return redirect()->route('manager.list');
    }

    public function edit($id)
    {
        $management = Management::findOrFail($id);
        return view('manager.edit', compact('management'));
    }

    public function update(Request $request, $id)
    {
        $management = Management::findOrFail($id);
        $management->firstName = $request->firstName;
        $management->lastName = $request->lastName;
        $management->phone = $request->phone;
        $management->email = $request->email;
        $management->address = $request->address;
        if (file_exists(storage_path("app/public/image/$management->avatar"))) {
            \Illuminate\Support\Facades\File::delete(storage_path("app/public/image/$management->avatar"));
        };
        $management->save();
    }

    public function search(Request $request)
    {
        $keyword = $request->input('keyword');
        if (!$keyword) {
            return redirect()->route('manager.list');
        }
        $managements = Management::where('firstName', 'LIKE', '%' . $keyword . '%')->orWhere('lastName', 'LIKE', '%' . $keyword . '%')->paginate(3);
        return view('manager.list', compact('managements'));
    }
}
