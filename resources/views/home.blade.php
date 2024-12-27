@extends('layouts.app')

@section('head')
<link rel="stylesheet" href="/css/home.css">
@endsection

@section('content')
<!-- Top Card Section -->
<div class="top-card-section">
    <img src="/images/f5.png" alt="Background Image">
    <div class="top-card-text">
        <h1>Welcome to CalmSpace</h1>
        <p>Take a moment to relax, breathe, and enjoy insightful articles tailored for your mental well-being.</p>
        <a href="{{ route('consult') }}" class="btn custom-button btn-lg mt-3 px-4 py-2">
            Ceritakan Masalahmu
        </a>
    </div>
</div>

<!-- Why Mental Health Matters Section -->
<div class="section-container text-center mt-5 mb-5">
    <h2 class="fw-bold">Why Mental Health Matters</h2>
    <p class="text-muted px-3" style="max-width: 800px; margin: 0 auto; font-size: 1.25rem;">
        Mental health is an essential part of our overall well-being. It affects how we think, feel, and act, influencing
        our relationships, work, and daily lives. By managing stress, building resilience, and staying mindful, we can
        enhance our emotional well-being. Prioritizing mental health helps us overcome challenges, improve productivity,
        and strengthen relationships. Taking care of our mental health leads to a happier, more fulfilling life.
    </p>
</div>

<!-- Tips to Maintain Mental Health Section -->
<div class="section-container text-center mt-5 mb-3">
    <h2 class="fw-bold">Tips to Maintain Mental Health</h2>
</div>
<div class="d-flex justify-content-center flex-wrap mt-3 mb-5 card-container">
    <!-- Tip 1 -->
    <div class="card mx-3 p-3 grow-card"
        style="width: 20rem; border: none; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); border-radius: 10px; transition: transform 0.3s; margin-bottom: 20px;">
        <div class="text-center">
            <img src="/images/meditate.gif" alt="Meditate Image" class="service-image" style="width: 100%; height: auto; border-radius: 10px;">
        </div>
        <div class="card-body text-center">
            <h5 class="card-title fw-bold mb-2">Practice Mindfulness</h5>
            <p class="card-text text-muted">Engage in daily mindfulness practices like meditation to stay grounded.</p>
        </div>
    </div>

    <!-- Tip 2 -->
    <div class="card mx-3 p-3 grow-card"
        style="width: 20rem; border: none; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); border-radius: 10px; transition: transform 0.3s; margin-bottom: 20px;">
        <div class="text-center">
            <img src="/images/exercise.gif" alt="Exercise Image" class="service-image" style="width: 100%; height: auto; border-radius: 10px;">
        </div>
        <div class="card-body text-center">
            <h5 class="card-title fw-bold mb-2">Stay Active</h5>
            <p class="card-text text-muted">Regular exercise can improve mood and reduce anxiety.</p>
        </div>
    </div>

    <!-- Tip 3 -->
    <div class="card mx-3 p-3 grow-card"
        style="width: 20rem; border: none; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); border-radius: 10px; transition: transform 0.3s; margin-bottom: 20px;">
        <div class="text-center">
            <img src="/images/family.gif" alt="Family Image" class="service-image" style="width: 100%; height: auto; border-radius: 10px;">
        </div>
        <div class="card-body text-center">
            <h5 class="card-title fw-bold mb-2">Connect with Loved Ones</h5>
            <p class="card-text text-muted">Building strong relationships can enhance emotional support.</p>
        </div>
    </div>

    <!-- Tip 4 -->
    <div class="card mx-3 p-3 grow-card"
        style="width: 20rem; border: none; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); border-radius: 10px; transition: transform 0.3s; margin-bottom: 20px;">
        <div class="text-center">
            <img src="/images/diet.gif" alt="Diet Image" class="service-image" style="width: 100%; height: auto; border-radius: 10px;">
        </div>
        <div class="card-body text-center">
            <h5 class="card-title fw-bold mb-2">Maintain a Balanced Diet</h5>
            <p class="card-text text-muted">Eating nutritious food can positively impact your mental well-being.</p>
        </div>
    </div>
</div>

<!-- Our Services Section -->
<div class="section-container text-center mt-5 mb-1">
    <h2 class="fw-bold">Our Services</h2>
</div>
<div class="d-flex justify-content-center flex-wrap mt-5 mb-5 card-container">
    <!-- Consultation -->
    <div class="card mx-3 p-3" style="width: 20rem; border: none; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); border-radius: 10px;">
        <div class="text-center">
            <img src="/images/psychology.png" alt="Icon" class="service-icon">
        </div>
        <div class="card-body text-center">
            <h5 class="card-title fw-bold">Consult with Psychologists</h5>
            <p class="card-text text-muted">QnA section with our Professional Psychologists Online</p>
            @auth
                <a href="{{ route('consult') }}" class="btn btn-outline-primary rounded-circle" style="width: 40px; height: 40px;">
                    <i class="bi bi-arrow-right"></i>
                </a>
            @endauth
            @guest
                <button class="btn btn-outline-primary rounded-circle" style="width: 40px; height: 40px;" data-bs-toggle="modal" data-bs-target="#loginModal">
                    <i class="bi bi-arrow-right"></i>
                </button>
            @endguest
        </div>
    </div>

    <!-- Experts Article -->
    <div class="card mx-3 p-3" style="width: 20rem; border: none; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); border-radius: 10px;">
        <div class="text-center">
            <img src="/images/Icon1.png" alt="Icon" class="service-icon">
        </div>
        <div class="card-body text-center">
            <h5 class="card-title fw-bold">Experts Toughts & Experience</h5>
            <p class="card-text text-muted">How experts cope with their mental health issues</p>
            @auth
                <a href="{{ route('articles') }}" class="btn btn-outline-primary rounded-circle" style="width: 40px; height: 40px;">
                    <i class="bi bi-arrow-right"></i>
                </a>
            @endauth
            @guest
                <button class="btn btn-outline-primary rounded-circle" style="width: 40px; height: 40px;" data-bs-toggle="modal" data-bs-target="#loginModal">
                    <i class="bi bi-arrow-right"></i>
                </button>
            @endguest
        </div>
    </div>

    <!-- Mood Tracker -->
    <div class="card mx-3 p-3" style="width: 20rem; border: none; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); border-radius: 10px;">
        <div class="text-center">
            <img src="/images/mood.png" alt="Icon" class="service-icon">
        </div>
        <div class="card-body text-center">
            <h5 class="card-title fw-bold">Mood Tracker</h5>
            <p class="card-text text-muted">Track your mood daily and observe your emotional patterns over time. Just give it a try!</p>
            @auth
                <a href="{{ route('mood-tracker.index') }}" class="btn btn-outline-primary rounded-circle" style="width: 40px; height: 40px;">
                    <i class="bi bi-arrow-right"></i>
                </a>
            @endauth
            @guest
                <button class="btn btn-outline-primary rounded-circle" style="width: 40px; height: 40px;" data-bs-toggle="modal" data-bs-target="#loginModal">
                    <i class="bi bi-arrow-right"></i>
                </button>
            @endguest
        </div>
    </div>
</div>

<!-- Modal (PopUp agar user login/register terlebih dahulu sebelum bisa membuka fitur)-->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="loginModalLabel">Login Required</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                You must be logged in to access this feature. Please login or register to continue.
            </div>
            <div class="modal-footer">
                <a href="{{ route('login') }}" class="btn btn-primary">Login</a>
                <a href="{{ route('register') }}" class="btn btn-secondary">Register</a>
            </div>
        </div>
    </div>
</div>
@endsection
