<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Notifications\UserNotification;

class ProfileController extends Controller
{
    public function edit()
    {
        return view('profile.edit', ['user' => Auth::user()]);
    }

    public function update(Request $request)
    {
        // Validasi input dari pengguna
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'password' => 'nullable|string|min:8|confirmed',
        ]);

        // Ambil pengguna yang sedang login
        $user = Auth::user();
        
        // Update nama dan email
        $user->name = $request->name;
        $user->email = $request->email;

        // Jika ada password baru, hash dan simpan
        if ($request->password) {
            $user->password = bcrypt($request->password);
        }

        // Simpan perubahan ke database
        $user->save();

        // Kirim notifikasi setelah profil diperbarui
        $user->notify(new UserNotification('Your profile has been updated!'));

        // Redirect ke halaman edit profil dengan status
        return redirect()->route('profile.edit')->with('status', 'Profile updated successfully!');
    }
}