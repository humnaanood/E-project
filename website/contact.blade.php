<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact page</title>
</head>
<body>
    

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background: #f7f7f7;
            color: #333;
        }

        /* Page Banner */
        .page-banner {
            position: relative;
            background: url('img/intr4.jpg') center/cover no-repeat;
            height: 250px;
            display: flex;
            align-items: center;
            justify-content: center;
            /* color: #fff;
             */
            text-align: center;
        }
        .page-banner h1 {
            font-size: 2.5rem;
            font-weight: 600;
            text-shadow: 2px 2px 8px rgba(0,0,0,0.6);
        }
        .page-banner a {
            color: #c9a64c03c03c03c03c03c;
            text-decoration: underline;
            font-weight: 500;
            margin-top: 10px;
            display: inline-block;
        }

        /* Cards & Form */
        .card {
            border: none;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            transition: transform 0.3s, box-shadow 0.3s;
        }
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0,0,0,0.15);
        }
        .card h2 {
            font-weight: 500;
            color: #222;
        }
        .form-control:focus {
            border-color: #ff6b6b;
            box-shadow: 0 0 5px rgba(255,107,107,0.4);
        }
        .btn-custom {
            background: #ff6b6b;
            color: #fff;
            transition: background 0.3s;
        }
        .btn-custom:hover {
            background: #ff4757;
        }
        .icon-text i {
            color: #ff6b6b;
            margin-right: 10px;
        }
    </style>

    <!-- Page Banner -->
    <br>
    <br>
    <br>
    <br>
    <div class="page-banner">
        <div>
            <h1>Contact Decorvista</h1>
             <br>
              <br>
            <a href="{{ route('home') }}"><i class="fas fa-home"></i> Back to Home</a>
        </div>
    </div>

    <!-- Contact & Login Section -->
    <div class="container py-5">
        <div class="row g-4 justify-content-center">
            <!-- Contact Info -->
            <div class="col-md-6 col-lg-4">
                <div class="card p-4">
                    <h2 class="mb-4">Contact Us</h2>
                    <p class="icon-text"><i class="fas fa-envelope"></i> Email: contact@decorvista.com</p>
                    <p class="icon-text"><i class="fas fa-phone"></i> Phone: +92 300 1234567</p>
                    <p class="icon-text"><i class="fas fa-map-marker-alt"></i> Address: 123 Decor Street, Karachi, Pakistan</p>
                </div>
            </div>

            <!-- Login Form -->
            <div class="col-md-6 col-lg-4">
                <div class="card p-4">
                    <h2 class="mb-4">Login</h2>
                    <form action="{{ route('login') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="Enter your email" required>
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" name="password" id="password" class="form-control" placeholder="Enter your password" required>
                        </div>

                        <button type="submit" class="btn btn-custom w-100">
                            <i class="fas fa-sign-in-alt"></i> Login
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
@endsection
