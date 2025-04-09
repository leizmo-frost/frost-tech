<style>
    .hero-image img {
        width: 500px; /* Set desired width */
        height: 500px; /* Set desired height */
        object-fit: cover; /* Ensure the image covers the area while maintaining aspect ratio */
        border-radius: 8px; /* Optional: for rounded corners */
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Optional: add shadow */
    }
    .hero-content a {
        display: inline-block; /* Ensure consistent spacing for inline elements */
        margin-top: 10px; /* Adjust spacing between buttons */
        margin-right: 10px; /* Optional: Add space between buttons if needed */
    }
</style>

<div>
    <section id="home" class="hero-section">
        <div class="hero-container">
            <!-- Left Side: Name and Details -->
            <div class="hero-content">
                <h2>I'ma</h2>
                <h1>php Web Artisan</h1>
                <p>
                    Hi, I'm a passionate php web developer with a love for creating
                    innovative solutions that make a difference. I specialize in building scalable
                    and user-friendly websites.
                </p>
                <a href="#contact" class="btn-primary">Contact Me</a>
                <a href="{{ asset('resume/cv.pdf') }}" target="_blank" class="btn-primary ">View Resume</a>

            </div>
            <!-- Right Side: Picture -->
            <div class="hero-image">
                <img src="{{ asset('images/programming-code-glowing-in-the-dark.jpg') }}" alt="hero Image">
            </div>
        </div>
    </section>
</div>
