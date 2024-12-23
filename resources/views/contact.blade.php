@extends('layouts.app')

@section('content')
<div class="container my-5">
  <h1 class="text-center mb-4">Contact Us</h1>
  <p class="lead text-center">Have any questions or feedback? Feel free to reach out to us using the form below.</p>
  <form class="my-4">
    <div class="mb-3">
      <label for="name" class="form-label">Name</label>
      <input type="text" class="form-control" id="name" placeholder="Your Name">
    </div>
    <div class="mb-3">
      <label for="email" class="form-label">Email</label>
      <input type="email" class="form-control" id="email" placeholder="Your Email">
    </div>
    <div class="mb-3">
      <label for="message" class="form-label">Message</label>
      <textarea class="form-control" id="message" rows="4" placeholder="Your Message"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Send Message</button>
  </form>

  <section class="mt-5">
    <div class="row">
      <!-- Email Card -->
      <div class="col-md-4 mb-4">
        <div class="card shadow-sm rounded-3 border-0">
          <div class="card-body text-center">
            <h5 class="card-title"><i class="bi bi-envelope-fill"></i> Email</h5>
            <p class="card-text">support@calm.com</p>
          </div>
        </div>
      </div>

      <!-- Phone Card -->
      <div class="col-md-4 mb-4">
        <div class="card shadow-sm rounded-3 border-0">
          <div class="card-body text-center">
            <h5 class="card-title"><i class="bi bi-telephone-fill"></i> Phone</h5>
            <p class="card-text">+62 234 567 890</p>
          </div>
        </div>
      </div>

      <!-- Address Card -->
      <div class="col-md-4 mb-4">
        <div class="card shadow-sm rounded-3 border-0">
          <div class="card-body text-center">
            <h5 class="card-title"><i class="bi bi-geo-alt-fill"></i> Address</h5>
            <p class="card-text">123 Calm HeadQuarter, New York, NY</p>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
@endsection