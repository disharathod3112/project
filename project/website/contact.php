
﻿<?php
include_once('header.php');
?>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Contact Form #06</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f8f9fa;
    }
    .contact-section {
      padding: 60px 0;
    }
    .contact-form {
      background: #fff;
      padding: 30px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }
    .contact-info {
      background: #fff;
      padding: 30px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }
    .info-icon {
      font-size: 20px;
      margin-right: 10px;
      color: #0d6efd;
    }
    iframe {
      border: 0;
      width: 100%;
      height: 250px;
      border-radius: 8px;
    }
  </style>
</head>
<body>

<section class="contact-section">
  <div class="container">
    <div class="row g-4">
      <!-- Contact Form -->
      <div class="col-md-6">
        <div class="contact-form">
          <h4 class="mb-4">Contact Us</h4>
          <form>
            <div class="mb-3">
              <label for="name" class="form-label">Full Name</label>
              <input type="text" name="name"  class="form-control" id="name" placeholder="Your Name">
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email Address</label>
              <input type="email" name="email" class="form-control" id="email" placeholder="you@example.com">
            </div>
            <div class="mb-3">
              <label for="number" class="form-label">Mobile Number</label>
              <input type="number" name="mob"  class="form-control" id="email" placeholder="Your Mobile Number ">
            </div>
            <div class="mb-3">
              <label for="subject" class="form-label">Subject</label>
              <input type="text" name="subject"  class="form-control" id="subject" placeholder="Subject">
            </div>
            <div class="mb-3">
              <label for="message" class="form-label">Message</label>
              <textarea class="form-control" name="message"  id="message" rows="5" placeholder="Your message..."></textarea>
            </div>
            <button name="submit" type="submit" class="btn btn-primary">Send Message</button>
          </form>
        </div>
      </div>

      <!-- Contact Info + Map -->
      <div class="col-md-6">
        <div class="contact-info">
          <h4 class="mb-4">Get in Touch</h4>
          <p><i class="bi bi-geo-alt info-icon"></i>198 West 21th Street, New York, NY</p>
          <p><i class="bi bi-telephone info-icon"></i>+1235 2355 98</p>
          <p><i class="bi bi-envelope info-icon"></i>info@yoursite.com</p>
          <p><i class="bi bi-globe info-icon"></i>yoursite.com</p>
          <iframe src="https://maps.google.com/maps?q=New%20York&t=&z=13&ie=UTF8&iwloc=&output=embed"></iframe>
        </div>
      </div>
    </div>
  </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

   <?php
   include_once('footer.php');
   ?>
