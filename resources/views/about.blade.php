@extends('layouts.app')

@section('head')
<link rel="stylesheet" href="/css/about.css">
@endsection

@section('content')
<div class="container my-5 container-content">
  <h1 class="text-center mb-3">About Us</h1>
  <p class="text-center">
    At CalmSpace, we believe that mental well-being is the cornerstone of a fulfilling and balanced life.
    Our platform is designed to provide a safe and serene space where individuals can explore resources,
    articles, and tools tailored to promote relaxation, mindfulness, and self-growth.
  </p>

  <div class="card mb-4">
    <div class="card-body">
      <h2 class="card-title text-center"><i class="bi bi-bullseye text-primary"></i> Our Mission</h2>
      <p class="card-text text-center">
        Our mission is to empower individuals to prioritize their mental health through accessible, high-quality
        content.
        We aim to foster a supportive community where people can take small yet impactful steps toward a healthier mind
        and happier life. CalmSpace is committed to delivering practical insights and encouragement for anyone seeking
        balance in the chaos of modern living.
      </p>
    </div>
  </div>

  <div class="card">
    <div class="card-body">
      <h2 class="card-title text-center"><i class="bi bi-journal-text text-primary"></i> Our Story</h2>
      <ul class="timeline">
        <li>
          <h4>2024</h4>
          <p>CalmSpace was founded with the vision of creating a digital sanctuary for mental well-being.</p>
        </li>
        <li>
          <h4>Today</h4>
          <p>CalmSpace continues to inspire individuals worldwide to take a pause and prioritize self-growth.</p>
        </li>
      </ul>
    </div>
  </div>
</div>
@endsection