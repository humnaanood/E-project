@extends('website.layout')
@section('content')

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<style>
    body {
        font-family: 'Roboto', sans-serif;
        background: #f9f9f9;
        color: #333;
    }
    .hero {
        background: url('https://images.unsplash.com/photo-1580587771525-78b9dba3b914?auto=format&fit=crop&w=1350&q=80') center/cover no-repeat;
        height: 50vh;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #fff;
        text-shadow: 0 3px 6px rgba(0,0,0,0.5);
    }
    .hero h1 {
        font-size: 3rem;
        text-align: center;
    }
    .about-text h2 {
        font-size: 2rem;
        margin-bottom: 20px;
        color: #222;
    }
    .card img {
        height: 200px;
        object-fit: cover;
        transition: transform 0.3s ease;
    }
    .card:hover img {
        transform: scale(1.05);
    }
    @media(max-width: 768px) {
        .hero h1 {
            font-size: 2rem;
        }
    }
</style>

<!-- Hero Section -->
<div class="hero">
    <h1>About DecorVista</h1>
</div>

<!-- About Section -->
<div class="container py-5">
    <div class="row mb-5 text-center">
        <div class="col-lg-8 mx-auto">
            <h2>We Transform Spaces Into Art</h2>
            <p>DecorVista specializes in interior design that combines style, functionality, and elegance. Our team works closely with clients to craft spaces that are not just beautiful but also comfortable and personalized.</p>
            <p>From cozy homes to productive offices, we focus on every detail to make your vision a reality. Creativity, quality, and attention to detail are at the heart of everything we do.</p>
        </div>
    </div>

    <!-- Image Cards -->
    <div class="row g-4">
        @foreach([
            'https://images.unsplash.com/photo-1580587771525-78b9dba3b914?auto=format&fit=crop&w=800&q=80',
            'https://images.unsplash.com/photo-1598300056845-1e9870b9a6eb?auto=format&fit=crop&w=800&q=80',
            'https://images.unsplash.com/photo-1600585154340-be6161a56a0c?auto=format&fit=crop&w=800&q=80',
            'https://images.unsplash.com/photo-1578894389431-11e80f5a3c3f?auto=format&fit=crop&w=800&q=80',
            'https://images.unsplash.com/photo-1598928506315-38ba58b93802?auto=format&fit=crop&w=800&q=80',
            'https://images.unsplash.com/photo-1600585153763-6e7c1b1b8d46?auto=format&fit=crop&w=800&q=80',
            'https://images.unsplash.com/photo-1580587771525-78b9dba3b914?auto=format&fit=crop&w=800&q=80'
        ] as $img)
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="card shadow-sm border-0 rounded-3 overflow-hidden">
                    <img src="{{ $img }}" alt="Interior Design">
                </div>
            </div>
        @endforeach
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
@endsection