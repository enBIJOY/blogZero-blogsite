@extends('frontend.layout.app')
@section('title','Blog | Newsletter Subscribe')
@section('content')

@include('frontend.layout.about')

<section class="py-5 text-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">

                <h2 class="fw-bold mb-3">Subscribe to Our Newsletter</h2>
                <p class="text-muted mb-4">
                    Get the latest articles, updates and resources delivered straight to your inbox.
                </p>

                <form class="row g-2 justify-content-center" method="POST" action="/newsletter-subscribe">
                    
                    <!-- Email input -->
                    <div class="col-md-8">
                        <input 
                            type="email" 
                            class="form-control form-control-lg"
                            placeholder="Enter your email address"
                            required
                        >
                    </div>

                    <!-- Submit button -->
                    <div class="col-md-4 d-grid">
                        <button class="btn btn-primary btn-lg" type="submit">
                            Subscribe
                        </button>
                    </div>

                </form>

                <small class="text-muted d-block mt-3">
                    No spam. Unsubscribe anytime.
                </small>

            </div>
        </div>
    </div>
</section>

@endsection