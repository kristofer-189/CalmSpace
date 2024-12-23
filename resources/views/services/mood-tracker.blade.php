@extends('layouts.app')

@section('content')
<div class="container">
    <!-- Breadcrumb Section -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Mood Tracker</li>
        </ol>
    </nav>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Mood Tracker</div>

                <div class="card-body">
                    <p>Track your mood and observe emotional patterns over time. Please answer the questions below to better understand your current state:</p>

                    <form method="POST" action="{{ route('mood-tracker.save') }}">
                        @csrf

                        <!-- Question 1 -->
                        <div class="mb-3">
                            <label for="mood" class="form-label">How do you feel today?</label>
                            <select class="form-select" id="mood" name="mood" required>
                                <option value="happy">Happy</option>
                                <option value="neutral">Neutral</option>
                                <option value="sad">Sad</option>
                                <option value="angry">Angry</option>
                                <option value="anxious">Anxious</option>
                            </select>
                        </div>

                        <!-- Question 2 -->
                        <div class="mb-3">
                            <label for="energy" class="form-label">How is your energy level today?</label>
                            <select class="form-select" id="energy" name="energy" required>
                                <option value="high">High</option>
                                <option value="moderate">Moderate</option>
                                <option value="low">Low</option>
                                <option value="very_low">Very Low</option>
                            </select>
                        </div>

                        <!-- Question 3 -->
                        <div class="mb-3">
                            <label for="stress" class="form-label">How stressed do you feel?</label>
                            <select class="form-select" id="stress" name="stress" required>
                                <option value="not_stressed">Not Stressed</option>
                                <option value="slightly_stressed">Slightly Stressed</option>
                                <option value="moderately_stressed">Moderately Stressed</option>
                                <option value="very_stressed">Very Stressed</option>
                            </select>
                        </div>

                        <!-- Question 4 -->
                        <div class="mb-3">
                            <label for="sleep" class="form-label">How well did you sleep last night?</label>
                            <select class="form-select" id="sleep" name="sleep" required>
                                <option value="great">Great</option>
                                <option value="good">Good</option>
                                <option value="poor">Poor</option>
                                <option value="very_poor">Very Poor</option>
                            </select>
                        </div>

                        <!-- Question 5 -->
                        <div class="mb-3">
                            <label for="social" class="form-label">How socially connected do you feel today?</label>
                            <select class="form-select" id="social" name="social" required>
                                <option value="very_connected">Very Connected</option>
                                <option value="somewhat_connected">Somewhat Connected</option>
                                <option value="neutral">Neutral</option>
                                <option value="disconnected">Disconnected</option>
                            </select>
                        </div>

                        <!-- Additional Notes -->
                        <div class="mb-3">
                            <label for="notes" class="form-label">Additional Notes (Optional)</label>
                            <textarea class="form-control" id="notes" name="notes" rows="4" placeholder="Any thoughts you'd like to share?"></textarea>
                        </div>

                        <!-- Submit Button -->
                        <button type="submit" class="btn btn-primary">Save Mood</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<p class="text-center">Ingin melihat history mood Anda? <a href="{{ route('profile') }}">Klik di sini untuk menuju halaman profil.</a></p>

@endsection
