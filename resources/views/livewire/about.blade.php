<style>
    .about-image img {
      width: 100%;
      max-width: 500px;
      height: auto;
      aspect-ratio: 5 / 3;
      object-fit: cover;
      border-radius: 8px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    @media (max-width: 768px) {
      .about-image img {
        width: 100%;
      }
    }
  </style>

  <section id="about" class="about-section" aria-labelledby="about-title">
    <div class="about-container">

      <!-- Content Area -->
      <div class="about-content">
        <h2 id="about-title">About Me</h2>
        <p>
          Hello! I'm <strong>Lermodious</strong>. Welcome to my website! I'm a PHP developer with a passion for crafting elegant, efficient web solutions. I specialize in Laravel and love building scalable, maintainable applications.
        </p>
        <p>
          I'm committed to delivering excellence and adapting to evolving challenges. Let's work together to bring your vision to life with clean code and a user-first approach.
        </p>
        <a href="#contact" class="btn-primary" aria-label="Navigate to contact section">Get in Touch</a>
      </div>

      <!-- Image Area -->
      <div class="about-image">
        <img src="{{ asset('images/php-laravel.jpg') }}" alt="Illustration of PHP and Laravel development" loading="lazy">
      </div>

    </div>
  </section>
