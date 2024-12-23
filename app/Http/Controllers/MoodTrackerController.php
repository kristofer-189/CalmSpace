<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MoodTrackerController extends Controller
{
    protected $moodData = []; // Temporary mood storage for demo purposes.

    public function index()
    {
        // Retrieve the last saved mood
        $lastMood = session('last_mood', null);

        return view('services.mood-tracker', ['lastMood' => $lastMood]);
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'mood' => 'required',
            'energy' => 'required',
            'stress' => 'required',
            'sleep' => 'required',
            'social' => 'required',
        ]);
    
        // Simpan data mood ke session (contoh)
        $moodData = $request->only(['mood', 'energy', 'stress', 'sleep', 'social', 'notes']);
        $moodHistory = session('mood_history', []);
        $moodHistory[] = $moodData;
        session(['mood_history' => $moodHistory]);
    
        // Redirect ke halaman profil dengan pesan sukses
        return redirect()->route('profile')->with('success', 'Mood berhasil ditambahkan!');
    }    

    public function profile()
    {
        // Ambil data mood yang tersimpan (contoh dari session)
        $moodHistory = session('mood_history', []);
    
        return view('profile', ['moodHistory' => $moodHistory]);
    }

    public function clearMoodHistory()
{
   
// Hapus riwayat mood dari session
session()->forget('mood_history');
    // Redirect kembali ke halaman profil dengan pesan sukses
    return redirect()->route('profile')->with('success', 'Riwayat mood berhasil dihapus.');
}

}
