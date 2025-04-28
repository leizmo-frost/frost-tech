<footer class="footer">
    <div class="footer-content">
      <ul class="social-links" aria-label="My social media profiles">
        <li>
          <a href="https://github.com/leizmo-frost"
             target="_blank"
             rel="noopener noreferrer nofollow"
             aria-label="Visit my GitHub profile (opens in new tab)">
            <i class="fab fa-github" aria-hidden="true"></i>
            <span class="sr-only">GitHub</span>
          </a>
        </li>
        <li>
          <a href="https://linkedin.com/in/lermodious_karanja
"
             target="_blank"
             rel="noopener noreferrer nofollow"
             aria-label="Connect on LinkedIn (opens in new tab)">
            <i class="fab fa-linkedin-in" aria-hidden="true"></i>
            <span class="sr-only">LinkedIn</span>
          </a>
        </li>
        <li>
          <a href="https://instagram.com/leizmo_frost"
             target="_blank"
             rel="noopener noreferrer nofollow"
             aria-label="Follow on Instagram (opens in new tab)">
            <i class="fab fa-instagram" aria-hidden="true"></i>
            <span class="sr-only">Instagram</span>
          </a>
        </li>
        <li>
          <a href="/"
             rel="noopener noreferrer nofollow"
             aria-label="Contact me via the contact form">
            <i class="fas fa-envelope" aria-hidden="true"></i>
            <span class="sr-only">Contact</span>
          </a>
        </li>
        </ul>
        <p>&copy; {{ date('Y') }} Frost Tech. All Rights Reserved.</p>
    </div>
  </footer>

  <style>
    .footer {
      background-color: #ffffff;
      color: #1b0101;
      padding: 2rem 0;
      text-align: center;
      border-top: 1px solid #eaeaea;
    }

    .footer-content {
      max-width: 1200px;
      margin: 0 auto;
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: 1rem;
    }

    .social-links {
      display: flex;
      gap: 1.0rem;
      justify-content: center;
      flex-wrap: wrap;
      list-style: none; /* Remove default list styling */
      padding: 0;
      margin: 0;
    }

    .social-links li {
      display: inline; /* For better spacing control if needed */
    }

    .social-links a {
      color: #1b0101;
      font-size: 1.5rem;
      transition: all 0.3s ease;
      text-decoration: none;
      padding: 0rem;
      border-radius: 50%;
      width: 2.5rem;
      height: 2.5rem;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .social-links a:hover {
      color: white;
      background-color: #007bff;
      transform: translateY(-3px);
    }

    .sr-only {
      position: absolute;
      width: 1px;
      height: 1px;
      padding: 0;
      margin: -1px;
      overflow: hidden;
      clip: rect(0, 0, 0, 0);
      white-space: nowrap;
      border: 0;
    }
  </style>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer" />
