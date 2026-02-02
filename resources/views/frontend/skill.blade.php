@extends('frontend.layout.app')
@section('title','Blog | About Us')
@section('content')
<section class="py-5">
  <div class="container">
    <div class="row align-items-center">

      <!-- LEFT : SKILLS -->
      <div class="col-lg-6">
        <h2 class="mb-4">Here Are Some of My Skills</h2>

        <div class="row">
          <!-- Skill 1 -->
          <div class="col-md-6 mb-4">
            <h6 class="fw-bold">1 - GRAPHIC DESIGN</h6>
            <ul class="list-unstyled text-muted">
              <li>• UI Design</li>
              <li>• Website & Digital Design</li>
              <li>• Branding & Visual Identity</li>
              <li>• Print Design</li>
            </ul>
          </div>

          <!-- Skill 2 -->
          <div class="col-md-6 mb-4">
            <h6 class="fw-bold">2 - ILLUSTRATION</h6>
            <ul class="list-unstyled text-muted">
              <li>• Editorial</li>
              <li>• Narrative</li>
              <li>• Motion Graphics</li>
              <li>• Animation</li>
              <li>• Visual Effects</li>
            </ul>
          </div>

          <!-- Skill 3 -->
          <div class="col-md-6 mb-4">
            <h6 class="fw-bold">3 - FRONT END DEVELOPMENT</h6>
            <ul class="list-unstyled text-muted">
              <li>• HTML / CSS</li>
              <li>• JS & jQuery</li>
              <li>• WordPress</li>
              <li>• Joomla</li>
            </ul>
          </div>

          <!-- Skill 4 -->
          <div class="col-md-6 mb-4">
            <h6 class="fw-bold">4 - WEB MARKETING</h6>
            <ul class="list-unstyled text-muted">
              <li>• Sales Marketing</li>
              <li>• Invoice</li>
              <li>• eCommerce</li>
            </ul>
          </div>
        </div>
      </div>

      <!-- RIGHT : IMAGE -->
      <div class="col-lg-6 text-center">
        <img 
          src="your-image.jpg" 
          alt="Skills Preview" 
          class="img-fluid rounded"
        >
      </div>

    </div>
  </div>
</section>

@endsection