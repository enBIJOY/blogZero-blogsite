@extends('frontend.layout.app')
@section('title','Blog | Newsletter Subscribe')
@section('content')


<section class="py-5 text-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">

                <h1 class="fw-bold mb-3">Subscribe to Our Newsletter</h1>
                <p class="text-muted mb-4">
                    Get the latest articles, updates and resources delivered straight to your inbox.
                </p>

                <form class="row g-2 justify-content-center" method="POST" action="/newsletter-subscribe">
                    
                    <!-- Email input -->
                    <div class="col-md-8">
                        <input 
                            type="email" 
                            class="form-control form-control-lg "
                            style="border-radius: 50px;"
                            placeholder="Enter your email address"
                            required
                        >
                        <small class="text-muted d-block mt-3">
                            No spam. Unsubscribe anytime.
                        </small>
                    </div>

                    <!-- Submit button -->
                    <div class="col-md-4 d-grid">
                        <button class="btn btn-primary btn-lg" type="submit">
                            Subscribe
                        </button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</section>
<section class="conatainer mt-2">
    <div class="text-center">
        <h1 class="p-4">Hey Mental People!!</h1>
    </div>
    <div>
        <h4>Introduction</h4>
        <p><strong>These Website Terms of Use ("Terms") govern your use of our website provided by Dgtal Space ("we," "us," or "our"). By accessing or using our website, you agree to be bound by these Terms. If you disagree with any part of the Terms, please refrain from using our website.</strong></p>
        <h4>Disclaimer of Warranties</h4>
        <p><strong>Our website is provided on an "as is" and "as available" basis. We make no warranties or representations of any kind, express or implied, regarding the accuracy, reliability, or completeness of any information on our website.</strong></p>
        <p><strong>We disclaim all warranties, express or implied, including but not limited to warranties of merchantability, fitness for a particular purpose, and non-infringement.</strong></p>
    </div>
    <div class="text-center p-5">
        <button class="btn btn-primary">Home</button>
        <button class="btn btn-primary">Contact</button>
    </div>
</section>

@endsection