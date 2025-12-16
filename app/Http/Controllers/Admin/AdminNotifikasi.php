<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Notification;
use Illuminate\Http\Request;

class AdminNotifikasi extends Controller
{
    public function index()
    {
        $notifs = Notification::latest()->get();
        return view('admin.kelola_notifikasi', compact('notifs'));
    }

    public function edit($id)
    {
        $notif = Notification::findOrFail($id);
        return view('admin.edit_notifikasi', compact('notif'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'pesan' => 'required|string'
        ]);

        $notif = Notification::findOrFail($id);
        $notif->update([
            'pesan' => $request->pesan
        ]);

        return redirect()
            ->route('admin.kelola.notifikasi')
            ->with('success', 'Notifikasi berhasil diperbarui');
    }

    public function destroy($id)
    {
        Notification::findOrFail($id)->delete();
        return back()->with('success', 'Notifikasi berhasil dihapus');
    }
}
