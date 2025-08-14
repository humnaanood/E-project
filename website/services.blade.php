@extends('website.layout')

@section('content')
<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

<style>
body {
    font-family: 'Roboto', sans-serif;
    background: #f7f7f7;
    color: #333;
}

/* Colors */
:root {
    --olive: #708238;
    --brown: #8B4513;
    --khaki: #F0E68C;
    --beige: #f5f5dc;
    --grey: #A9A9A9;
}

/* Page Header */
.page-header {
    background: var(--beige);
    padding: 60px 0;
    text-align: center;
}
.page-header h1 {
    font-size: 2.5rem;
    color: var(--olive);
    font-weight: 700;
}
.page-header p {
    color: var(--brown);
    font-weight: 500;
}

/* Services cards */
.services-container {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    justify-content: center;
}
.service-card {
    background: var(--khaki);
    border-radius: 12px;
    padding: 20px;
    width: 300px;
    text-align: center;
    box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    transition: transform 0.6s, box-shadow 0.6s;
}
.service-card:hover {
    transform: rotateY(10deg) scale(1.05);
    box-shadow: 0 8px 25px rgba(0,0,0,0.2);
}
.service-card i {
    font-size: 2.5rem;
    color: var(--olive);
    margin-bottom: 15px;
}
.service-card h3 {
    font-size: 1.5rem;
    color: var(--brown);
    margin-bottom: 10px;
}
.service-card p {
    color: var(--grey);
}

/* Testimonials */
.testimonials-container {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    justify-content: center;
    margin-top: 40px;
}
.testimonial-card {
    background: var(--beige);
    border-radius: 12px;
    padding: 20px;
    width: 300px;
    text-align: center;
    box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    transition: transform 0.6s, box-shadow 0.6s;
}
.testimonial-card:hover {
    transform: rotateY(-10deg) scale(1.05);
    box-shadow: 0 8px 25px rgba(0,0,0,0.2);
}
.testimonial-card img {
    width: 80px;
    height: 80px;
    border-radius: 50%;
    object-fit: cover;
    margin-bottom: 15px;
}
.testimonial-card h4 {
    color: var(--olive);
    margin-bottom: 10px;
}
.testimonial-card p {
    color: var(--grey);
    font-style: italic;
}
</style>

<!-- Page Header -->
<div class="page-header">
    <br>
    <br>
    <br>
    
    <h1>Our Interior Design Services</h1>
    <p>Transforming spaces into elegant and functional interiors</p>
</div>

<div class="container py-5">

    <!-- Services Section -->
    <h2 class="mb-4" style="color: var(--olive); font-weight:700;">Our Services</h2>
    <div class="services-container">
        <div class="service-card">
            <i class="fas fa-couch"></i>
            <h3>Living Room Design</h3>
            <p>Create cozy, stylish, and functional living rooms tailored to your lifestyle.</p>
        </div>
        <div class="service-card">
            <i class="fas fa-bed"></i>
            <h3>Bedroom Makeover</h3>
            <p>Design peaceful and elegant bedrooms with perfect color schemes and layouts.</p>
        </div>
        <div class="service-card">
            <i class="fas fa-utensils"></i>
            <h3>Kitchen Design</h3>
            <p>Modern and functional kitchen spaces with smart storage and aesthetic appeal.</p>
        </div>
        <div class="service-card">
            <i class="fas fa-shower"></i>
            <h3>Bathroom Interiors</h3>
            <p>Luxury and comfort combined for bathroom designs with style and usability.</p>
        </div>
        <div class="service-card">
            <i class="fas fa-lightbulb"></i>
            <h3>Lighting Solutions</h3>
            <p>Elegant lighting designs to enhance ambiance and highlight your interiors.</p>
        </div>
        <div class="service-card">
            <i class="fas fa-paint-roller"></i>
            <h3>Wall & Decor Styling</h3>
            <p>Unique wall designs and decor elements to personalize every space.</p>
        </div>
    </div>

    <!-- Testimonials Section -->
    <h2 class="mt-5 mb-4" style="color: var(--brown); font-weight:700;">What Our Customers Say</h2>
    <div class="testimonials-container">
        <div class="testimonial-card">
            <img src="{{ asset('img/testimonials/customer1.jpg') }}" alt="Customer 1">
            <h4>Sarah Khan</h4>
            <p>"Decorvista transformed my living room into a modern, elegant space I love!"</p>
        </div>
        <div class="testimonial-card">
            <img src="{{ asset('img/testimonials/customer2.jpg') }}" alt="Customer 2">
            <h4>Ali Raza</h4>
            <p>"Professional team and beautiful designs. My bedroom makeover is perfect."</p>
        </div>
        <div class="testimonial-card">
            <img src="{{ asset('img/testimonials/customer3.jpg') }}" alt="Customer 3">
            <h4>Fatima Noor</h4>
            <p>"Amazing service! The kitchen design is functional yet stunning."</p>
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

@endsection
