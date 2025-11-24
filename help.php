<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Help</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&family=Poppins&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Josefin Sans', sans-serif;
        }
        .hero-section {
            background-image: url('https://source.unsplash.com/1600x900/?helpdesk');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 100px 0;
            text-align: center;
        }
        .hero-section h1 {
            font-size: 3rem;
            font-weight: bold;
        }
        .faq-section h2 {
            font-weight: bold;
        }
        .faq-item {
            background-color: #f9f9f9;
            margin-bottom: 1rem;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            padding: 1rem;
        }
        .contact-form {
            margin-top: 2rem;
            padding: 2rem;
            background-color: #f9f9f9;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
        }
        footer {
            background-color: #343a40;
            color: white;
            padding: 10px 0;
            text-align: center;
        }
        footer p {
            margin: 0;
        }
    </style>
</head>
<body>

    <!-- Hero Section -->
    <section class="hero-section">
        <h1>How Can We Help You?</h1>
        <p class="lead">Find answers to common questions or reach out for support</p>
    </section>

    <!-- FAQ Section -->
    <section class="container my-5 faq-section">
        <h2 class="text-center mb-4">Frequently Asked Questions</h2>
        <div id="accordion">
            <div class="faq-item">
                <div class="card-header" id="faq1">
                    <h5 class="mb-0">
                        <button class="btn btn-link" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                            How do I create an account?
                        </button>
                    </h5>
                </div>
                <div id="collapse1" class="collapse show" aria-labelledby="faq1" data-parent="#accordion">
                    <div class="card-body">
                        To create an account, click on the "Sign Up" button at the top right of the page and fill out the required information.
                    </div>
                </div>
            </div>
            <div class="faq-item">
                <div class="card-header" id="faq2">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                            How can I reset my password?
                        </button>
                    </h5>
                </div>
                <div id="collapse2" class="collapse" aria-labelledby="faq2" data-parent="#accordion">
                    <div class="card-body">
                        To reset your password, go to the login page and click "Forgot Password." You'll receive an email with instructions.
                    </div>
                </div>
            </div>
            <div class="faq-item">
                <div class="card-header" id="faq3">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                            How do I contact customer support?
                        </button>
                    </h5>
                </div>
                <div id="collapse3" class="collapse" aria-labelledby="faq3" data-parent="#accordion">
                    <div class="card-body">
                        You can contact us using the form below or call us at +91 63594 72166.
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Form Section -->
    <section class="container contact-form">
        <h3 class="text-center mb-4">Contact Us</h3>
        <form action="" method="post">
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Subject</label>
                <input type="text" name="subject" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Message</label>
                <textarea name="message" class="form-control" rows="5" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Send Message</button>
        </form>
    </section>

    <!-- Footer -->
    <footer>
        <p> Nurinas Clothing</p>
        <p>Contact: +91 63594 72166 | Address: Hussain Sindhi, Valsad, Gujarat</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
