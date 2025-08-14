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
    --coral: #e64f17;
    --beige: #b0b08c;
    --lemon: #f6ed6e;
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
    color: var(--coral);
    font-weight: 500;
}

/* Blog cards container */
.blog-slider {
    display: flex;
    gap: 20px;
    overflow-x: auto;
    scroll-behavior: smooth;
    padding-bottom: 20px;
}
.blog-slider::-webkit-scrollbar {
    height: 8px;
}
.blog-slider::-webkit-scrollbar-thumb {
    background: var(--coral);
    border-radius: 4px;
}

/* Blog card */
.blog-card {
    min-width: 300px;
    flex: 0 0 auto;
    background: var(--beige);
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    transition: transform 0.3s, box-shadow 0.3s;
}
.blog-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 25px rgba(0,0,0,0.2);
}
.blog-card img {
    width: 100%;
    height: 200px;
    object-fit: cover;
}
.blog-card-body {
    padding: 15px;
}
.blog-card-title {
    font-size: 1.25rem;
    font-weight: 600;
    color: var(--olive);
    margin-bottom: 10px;
}
.blog-card-text {
    color: #555;
    margin-bottom: 10px;
}
.read-more {
    text-decoration: none;
    color: var(--coral);
    font-weight: 500;
}
.read-more:hover {
    color: var(--lemon);
}

/* Section title */
.section-title {
    font-size: 2rem;
    font-weight: 700;
    color: var(--olive);
    margin-bottom: 20px;
}

/* Optional: smooth auto-scroll effect */
@keyframes scrollSlider {
    0% { transform: translateX(0); }
    100% { transform: translateX(-33%); } /* Adjust based on number of cards */
}
</style>

<!-- Page Header -->
<div class="page-header">
    <br>
    <br>
    <h1>Decorvista Blog</h1>
    <p>Interior Design Inspiration & Customer Stories</p>
</div>

<div class="container py-5">

    <!-- Our Blog Posts -->
    <h2 class="section-title">Latest Blogs</h2>
    <div class="blog-slider">
        <div class="blog-card">
            {{-- <img src="{{ asset('img/blog/interior1.jpg') }}" alt="Minimalist Living Room"> --}}
            <div class="blog-card-body">
                <h3 class="blog-card-title">Minimalist Living Room Ideas</h3>
                <p class="blog-card-text">Explore clean and elegant designs for a minimalist living room with neutral tones and soft textures.</p>
                <a href="#" class="read-more">Read More &raquo;</a>
            </div>
        </div>
        <div class="blog-card">
            {{-- <img src="{{ asset('img/blog/interior2.jpg') }}" alt="Cozy Bedroom Decor"> --}}
            <div class="blog-card-body">
                <h3 class="blog-card-title">Cozy Bedroom Decor</h3>
                <p class="blog-card-text">Transform your bedroom into a warm and inviting sanctuary using soft colors, lights, and decor.</p>
                <a href="#" class="read-more">Read More &raquo;</a>
            </div>
        </div>
        <div class="blog-card">
            {{-- <img src="{{ asset('img/blog/interior3.jpg') }}" alt="Modern Kitchen Designs"> --}}
            <div class="blog-card-body">
                <h3 class="blog-card-title">Modern Kitchen Designs</h3>
                <p class="blog-card-text">Discover contemporary kitchen ideas with functional layouts, bold accents, and modern appliances.</p>
                <a href="#" class="read-more">Read More &raquo;</a>
            </div>
        </div>
    </div>

    <!-- Customer Stories -->
    <h2 class="section-title mt-5">Customer Stories</h2>
    <div class="blog-slider">
        <div class="blog-card">
            {{-- <img src="{{ asset('img/blog/customer1.jpg') }}" alt="Happy Living Room Makeover"> --}}
            <div class="blog-card-body">
                <h3 class="blog-card-title">Happy Living Room Makeover</h3>
                <p class="blog-card-text">Our client transformed their dull living room into a vibrant, welcoming space using olive and coral accents.</p>
                <a href="#" class="read-more">Read More &raquo;</a>
            </div>
        </div>
        <div class="blog-card">
            {{-- <img src="{{ asset('img/intr1) }}" alt="Elegant Bedroom Story"> --}}
            <div class="blog-card-body">
                <h3 class="blog-card-title">Elegant Bedroom Story</h3>
                <p class="blog-card-text">A customer shares how we created a serene and stylish bedroom combining beige and lemon tones.</p>
                <a href="#" class="read-more">Read More &raquo;</a>
            </div>
        </div>
        <div class="blog-card">
            {{-- <img src="{{ asset('img/blog/customer3.jpg') }}" alt="Kitchen Renovation Success"> --}}
            <div class="blog-card-body">
                <h3 class="blog-card-title">Kitchen Renovation Success</h3>
                <p class="blog-card-text">Read about a modern kitchen renovation that combined functionality and aesthetic appeal with coral and olive highlights.</p>
                <a href="#" class="read-more">Read More &raquo;</a>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
@endsection
