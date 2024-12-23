<!-- resources/views/payment/payment.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <!-- Breadcrumb Section -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('consult') }}">Consultation</a></li>
            <li class="breadcrumb-item active" aria-current="page">Payment</li>
        </ol>
    </nav>

    <h2 class="text-center">Payment Page</h2>

    <!-- Success Message -->
    @if(session('success'))
        <div class="alert alert-success text-center">
            {{ session('success') }}
        </div>
    @endif

    <!-- Payment Form -->
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="text-center">Complete Your Payment</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('payment.process') }}" method="POST">
                        @csrf

                        <!-- Payment Amount -->
                        <div class="mb-3">
                            <label for="amount" class="form-label">Amount</label>
                            <input type="text" class="form-control" id="amount" name="amount" value="$50.00" disabled>
                        </div>

                        <!-- Payment Method -->
                        <div class="mb-3">
                            <label for="payment_method" class="form-label">Payment Method</label>
                            <select class="form-select" id="payment_method" name="payment_method" required>
                                <option value="credit_card">Credit Card</option>
                                <option value="paypal">PayPal</option>
                                <option value="bank_transfer">Bank Transfer</option>
                            </select>
                        </div>

                        <!-- Card Details (for Credit Card payment) -->
                        <div class="credit-card-details" id="credit-card-details" style="display: none;">
                            <div class="mb-3">
                                <label for="card_number" class="form-label">Card Number</label>
                                <input type="text" class="form-control" id="card_number" name="card_number" placeholder="Enter card number" required>
                            </div>
                            <div class="mb-3">
                                <label for="expiry_date" class="form-label">Expiry Date</label>
                                <input type="text" class="form-control" id="expiry_date" name="expiry_date" placeholder="MM/YY" required>
                            </div>
                            <div class="mb-3">
                                <label for="cvv" class="form-label">CVV</label>
                                <input type="text" class="form-control" id="cvv" name="cvv" placeholder="Enter CVV" required>
                            </div>
                        </div>

                        <!-- PayPal Details (optional, only if PayPal selected) -->
                        <div class="paypal-details" id="paypal-details" style="display: none;">
                            <div class="mb-3">
                                <label for="paypal_email" class="form-label">PayPal Email</label>
                                <input type="email" class="form-control" id="paypal_email" name="paypal_email" placeholder="Enter your PayPal email" required>
                            </div>
                        </div>

                        <!-- Submit Button -->
                        <div class="text-center">
                            <button type="submit" class="btn btn-success">Pay Now</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- JavaScript for Dynamic Form Changes (showing card details or PayPal details based on payment method) -->
<script>
    document.getElementById('payment_method').addEventListener('change', function() {
        const paymentMethod = this.value;
        const cardDetails = document.getElementById('credit-card-details');
        const paypalDetails = document.getElementById('paypal-details');

        // Hide all payment options
        cardDetails.style.display = 'none';
        paypalDetails.style.display = 'none';

        // Show selected payment method details
        if (paymentMethod === 'credit_card') {
            cardDetails.style.display = 'block';
        } else if (paymentMethod === 'paypal') {
            paypalDetails.style.display = 'block';
        }
    });
</script>

@endsection
