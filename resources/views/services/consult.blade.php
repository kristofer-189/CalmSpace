@extends('layouts.app')

@section('content')
<div class="container">
    <!-- Breadcrumb -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Consultation</li>
        </ol>
    </nav>

    <div class="row justify-content-center">
        <!-- Card for Psychologists -->
        <div class="col-md-4 mb-4">
            <div class="card custom-card dr-sarah">
                <div class="card-header text-center">
                    Dr. Sarah Williams
                </div>
                <div class="card-body">
                    <h5 class="card-title">Conditions Treated</h5>
                    <ul>
                        <li>Depression</li>
                        <li>Anxiety</li>
                        <li>Stress Management</li>
                        <li>Relationship Issues</li>
                    </ul>
                    <h5 class="card-title">Consultation Schedule</h5>
                    <p>Mon-Fri: 10:00 AM - 4:00 PM</p>
                    <a href="{{ route('payment') }}" class="btn btn-primary mt-3">Start your Session</a>
                </div>
            </div>
        </div>

        <!-- Repeat for other psychologists with unique bright colors -->
        <div class="col-md-4 mb-4">
            <div class="card custom-card dr-john">
                <div class="card-header text-center">
                    Dr. John Doe
                </div>
                <div class="card-body">
                    <h5 class="card-title">Conditions Treated</h5>
                    <ul>
                        <li>Phobias</li>
                        <li>PTSD</li>
                        <li>OCD</li>
                    </ul>
                    <h5 class="card-title">Consultation Schedule</h5>
                    <p>Mon, Wed, Fri: 2:00 PM - 6:00 PM</p>
                    <a href="{{ route('payment') }}" class="btn btn-primary mt-3">Start your Session</a>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card custom-card dr-emily">
                <div class="card-header text-center">
                    Dr. Emily Stone
                </div>
                <div class="card-body">
                    <h5 class="card-title">Conditions Treated</h5>
                    <ul>
                        <li>Sleep Disorders</li>
                        <li>Childhood Trauma</li>
                        <li>Self-Esteem Issues</li>
                    </ul>
                    <h5 class="card-title">Consultation Schedule</h5>
                    <p>Tue-Thu: 9:00 AM - 3:00 PM</p>
                    <a href="{{ route('payment') }}" class="btn btn-primary mt-3">Start your Session</a>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card custom-card dr-michael">
                <div class="card-header text-center">
                    Dr. Michael Brown
                </div>
                <div class="card-body">
                    <h5 class="card-title">Conditions Treated</h5>
                    <ul>
                        <li>Grief and Loss</li>
                        <li>Anger Management</li>
                        <li>Personality Disorders</li>
                    </ul>
                    <h5 class="card-title">Consultation Schedule</h5>
                    <p>Mon, Thu: 11:00 AM - 5:00 PM</p>
                    <a href="{{ route('payment') }}" class="btn btn-primary mt-3">Start your Session</a>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card custom-card dr-olivia">
                <div class="card-header text-center">
                    Dr. Olivia Green
                </div>
                <div class="card-body">
                    <h5 class="card-title">Conditions Treated</h5>
                    <ul>
                        <li>Eating Disorders</li>
                        <li>Adolescent Mental Health</li>
                        <li>Chronic Pain</li>
                    </ul>
                    <h5 class="card-title">Consultation Schedule</h5>
                    <p>Wed-Fri: 1:00 PM - 7:00 PM</p>
                    <a href="{{ route('payment') }}" class="btn btn-primary mt-3">Start your Session</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Custom CSS for Cards -->
<style>
    /* Custom styles for the cards */
    .custom-card {
        transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
    }

    /* Hover effect */
    .custom-card:hover {
        transform: translateY(-10px); /* Move the card slightly up */
        box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.15); /* Add a shadow effect */
    }

    /* Card Button width */
    .custom-card .btn {
        width: 100%;
    }

    /* Different bright colors for each doctor */
    .dr-sarah .card-header {
        background-color: #FF9800; /* Bright orange for Sarah */
    }

    .dr-john .card-header {
        background-color: #4CAF50; /* Bright green for John */
    }

    .dr-emily .card-header {
        background-color: #2196F3; /* Bright blue for Emily */
    }

    /* Changed color for Dr. Michael Brown */
    .dr-michael .card-header {
        background-color: #FF4081; /* Bright pink for Michael */
    }

    .dr-olivia .card-header {
        background-color: #FF5722; /* Bright red-orange for Olivia */
    }

    /* Outline color on hover */
    .dr-sarah:hover {
        outline: 4px solid #FF9800;
    }

    .dr-john:hover {
        outline: 4px solid #4CAF50;
    }

    .dr-emily:hover {
        outline: 4px solid #2196F3;
    }

    /* Outline color on hover */
    .dr-michael:hover {
        outline: 4px solid #FF4081; /* Pink outline on hover */
    }

    .dr-olivia:hover {
        outline: 4px solid #FF5722;
    }

    /* Increase font size and bold doctor name */
    .card-header {
        font-size: 1.5rem; /* Larger font size */
        font-weight: bold; /* Bold text */
    }
</style>
@endsection
