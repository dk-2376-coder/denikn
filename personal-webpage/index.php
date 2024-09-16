<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>denik personal Website</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f5f5f5;
        }
        .hero {
            height: 100vh;
            background: url('images/pexels-ifreestock-585752.jpg') center center/cover no-repeat;
            color: black;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
        }
       .hero img{
        width: 150px;
        height: auto;
        display: block;
        margin: 0 auto;
        padding: 10px;
        border-radius: 50%;
        border: 2px solid #ccc;
        box-shadow: 0px 4px 8px rgb(0, 0, 0, 0.1);

       }
       .container{
        background-color: rgba(255, 255, 255, 0.2);
       }
        .hero h1 {
            font-size: 4rem;
        }
        .section-title {
            text-align: center;
            margin-top: 50px;
            margin-bottom: 50px;
        }
        .about img {
            border-radius: 50%;
        }

        .about{
            background: url('images/pexels-kevin-ku-92347-577585.jpg') center center/cover no-repeat;
            color: whitesmoke;
        }
        .portfolio img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }
        footer {
            background-color: #222;
            color: white;
            padding: 20px 0;
            text-align: center;
        }
    </style>
</head>
<body>

<section class="hero">
    <div class="container">
    <img src="images/deniklogo.png" alt="logo" class="img-fluid mb-3">
        <h1>Welcome to My Personal Website</h1>
        <p>Your Web Developer & Designer</p>
    </div>
</section>

<section id="about" class="about py-5">
    <div class="container text-center">
        <h2 class="section-title">About Me</h2>
        <div class="row">
            <div class="col-md-4 offset-md-4">
                <img src="images/WhatsApp Image 2024-09-11 at 08.25.55.jpeg" alt="Profile Picture" class="img-fluid mb-3">
                <p>Hi, I'm Denis, a passionate web developer and graphic designer specializing in creating modern and responsive websites. I love turning ideas into visually appealing and functional websites that solve real-world problems.</p>
            </div>
        </div>
    </div>
</section>
<section id="portfolio" class="portfolio py-5">
    <div class="container">
        <h2 class="section-title">Portfolio</h2>
        <div class="row">
            <div class="col-md-4">
                <img src="images/Screenshot 2024-09-11 105357.png" alt="Project 1" class="img-fluid">
                <h5 class="mt-2">Denik Inventory System</h5>
            </div>
            <div class="col-md-4">
                <img src="images/deniklogo.png" alt="Project 2" class="img-fluid">
                <h5 class="mt-2">logo designings</h5>
            </div>
            <div class="col-md-4">
                <img src="images/1.png" alt="Project 3" class="img-fluid">
                <h5 class="mt-2">business card designs</h5>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section id="services" class="services py-5">
    <div class="container text-center">
        <h2 class="section-title">Services</h2>
        <div class="row">
            <div class="col-md-4">
                <h5>Web Development</h5>
                <p>Custom websites built using HTML, CSS, PHP, and Bootstrap.</p>
            </div>
            <div class="col-md-4">
                <h5>Graphic Design</h5>
                <p>Logos, business cards, and branding materials designed to suit your needs.</p>
            </div>
            <div class="col-md-4">
                <h5>UI/UX Design</h5>
                <p>Beautiful and intuitive user interface and experience designs for web and mobile apps.</p>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="contact" class="contact py-5">
    <div class="container text-center">
        <h2 class="section-title">Contact Me</h2>
        <form action="contact.php" method="post" class="w-50 mx-auto">
            <div class="mb-3">
                <input type="text" class="form-control" placeholder="Your Name" required>
            </div>
            <div class="mb-3">
                <input type="email" class="form-control" placeholder="Your Email" required>
            </div>
            <div class="mb-3">
                <textarea class="form-control" rows="5" placeholder="Your Message" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Send Message</button>
        </form>
    </div>
</section>

<!-- Footer -->
<footer>
    <p>&copy; 2024 Denik. All Rights Reserved.</p>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
