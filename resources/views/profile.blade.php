@extends('layouts.app')

@section('content')
<div class="container">
    <!-- Breadcrumb -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">{{ __('Home') }}</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ __('Profile') }}</li>
        </ol>
    </nav>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Profile') }}</div>

                <div class="card-body">
                    <!-- Pesan Sukses -->
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <!-- User Details -->
                    <h5 class="card-title">{{ Auth::user()->name }}</h5>
                    <p class="card-text">{{ Auth::user()->email }}</p>

                    <!-- Logout Button -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="btn btn-danger">
                            {{ __('Logout') }}
                        </button>
                    </form>

                    <!-- Mood History Section -->
                    <h5 class="mt-4">Riwayat Mood Anda</h5>

                    @if(!empty($moodHistory) && count($moodHistory) > 0)
                        <table class="table table-bordered mt-3">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Mood</th>
                                    <th>Energy</th>
                                    <th>Stress</th>
                                    <th>Sleep</th>
                                    <th>Social</th>
                                    <th>Notes</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($moodHistory as $index => $mood)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ ucfirst($mood['mood']) }}</td>
                                        <td>{{ ucfirst($mood['energy']) }}</td>
                                        <td>{{ ucfirst($mood['stress']) }}</td>
                                        <td>{{ ucfirst($mood['sleep']) }}</td>
                                        <td>{{ ucfirst($mood['social']) }}</td>
                                        <td>{{ $mood['notes'] ?? 'No Notes' }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @else
                        <p class="text-muted">Belum ada data mood yang tersimpan.</p>
                    @endif

                    <!-- Tombol Hapus Riwayat -->
                    <div class="mt-3 text-end">
                        <form method="POST" action="{{ route('clear-mood-history') }}">
                            @csrf
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus semua riwayat mood?')">
                                Delete Mood History
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
