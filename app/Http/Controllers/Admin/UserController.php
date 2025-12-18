<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
   public function index(Request $request)
{
    $query = User::whereIn('role', ['pembina', 'siswa']);

    // 🔍 SEARCH USERNAME
    if ($request->filled('search')) {
        $query->where('name', 'LIKE', '%' . $request->search . '%');
    }

    $users = $query->get();

    return view('admin.data_pembina', compact('users'));
}


    public function create()
    {
        return view('admin.create_pembina');
    }

    public function store(Request $request)
    {

        $validated = $request->validate([
            'name'     => 'required|string|max:255',
            'email'    => 'required|email|unique:users,email',
            'role'     => 'required|in:pembina,siswa',
            'password' => 'required|min:6',
        ]);

        User::create([
            'name'     => $validated['name'],
            'email'    => $validated['email'],
            'role'     => $validated['role'],
            'password' => Hash::make($validated['password']),
        ]);

        return redirect()->route('admin.users.index')
            ->with('success', 'User berhasil ditambahkan');
    }

    public function destroy($id)
    {
        User::findOrFail($id)->delete();
        return back()->with('success', 'User dihapus');
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('admin.edit_pembina', compact('user'));
    }

}
