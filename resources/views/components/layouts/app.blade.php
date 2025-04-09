<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Frost Tech' }}</title>
    <style>
        /* Basic Reset */
        body, html {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #fbfbfb;
            color: #5b5e61;
        }

        /* Navigation Bar */
        header {
            position: fixed; /* Fixes the header at the top */
            top: 0; /* Ensures it's pinned to the top */
            left: 0;
            width: 98%; /* Makes the header span the entire width */
            z-index: 1000; /* Keeps the header above other content */
            background-color: #007bff; /* Blue */
            color: rgb(230, 229, 229);
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        header a {
            color: white;
            text-decoration: none;
            margin: 0 15px;
            font-weight: bold;
            transition: color 0.3s;
        }

        header a:hover {
            color: #6e6a6a;
        }

        /* Main Content */
        main {
            /* Hero Section */
.hero-section {
    background-color: rgb(255, 255, 255);
    padding: 50px 20px;
}

.hero-container {
    display: flex;
    align-items: center;
    justify-content: center;
    max-width: 1200px;
    margin: 0 auto;
    gap: 20px;
    flex-wrap: wrap; /* For responsiveness */
}

/* Left Side: Content */
.hero-content {
    flex: 1 1 500px;
    padding: 20px;
    text-align: left;
}

.hero-content h1 {
    font-size: 3rem;
    color: #007bff;
    margin-bottom: 20px;
}

.hero-content p {
    font-size: 1.2rem;
    line-height: 1.8;
    margin-bottom: 20px;
    color: #555;
}

.hero-content .btn-primary {
    display: inline-block;
    padding: 12px 20px;
    background-color: #007bff;
    color: white;
    font-size: 1rem;
    text-decoration: none;
    border-radius: 5px;
    transition: background-color 0.3s ease;
}

.hero-content .btn-primary:hover {
    background-color: #0056b3;
}

/* Right Side: Image */
.hero-image {
    flex: 1 1 500px;
    text-align: center;
}

.hero-image img {
    max-width: 100%;
    height: auto;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s;
}

.hero-image img:hover {
    transform: scale(1.05);
}

/* Responsive Design */
@media (max-width: 768px) {
    .hero-container {
        flex-direction: column; /* Stack content vertically */
    }

    .hero-content {
        text-align: center;
    }

    .hero-content h1 {
        font-size: 2.5rem;
    }

    .hero-content p {
        font-size: 1rem;
    }
}
        }

        /* About Section */
        .about-section {
            background-color:  rgb(255, 255, 255);
            padding: 10px 20px;
        }

        .about-container {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            max-width: 1200px;
            margin: 0 auto;
            gap: 20px;
            flex-direction: row-reverse;/* Reverses the order of content and image */
        }

        .about-content {
            flex: 1 1 500px;
            padding: 20px;
        }

        .about-content h2 {
            font-size: 2.5rem;
            color: #007bff;
            margin-bottom: 20px;
        }

        .about-content p {
            font-size: 1.1rem;
            line-height: 1.8;
            margin-bottom: 20px;
            color: #555;
        }

.about-content .btn-primary {
    display: inline-block;
    padding: 12px 20px;
    background-color: #007bff;
    color: white;
    font-size: 1rem;
    text-decoration: none;
    border-radius: 5px;
    transition: background-color 0.3s;
}

.about-content .btn-primary:hover {
    background-color: #0056b3;
}

.about-image {
    flex: 1 1 500px;
    text-align: center;
}

.about-image img {
    max-width: 100%;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s;
}

.about-image img:hover {
    transform: scale(1.05);
}

/* Responsive Design */
@media (max-width: 768px) {
    .about-container {
        flex-direction: column;/* Stacks text and image vertically for small screens */
        text-align: center;/* Centers text for better layout */
    }

    .about-content {
        text-align: center; /* Centers the text for small screens */
        padding: 10px;
    }
}

        /* Grid System */
        /* Projects Section */
.projects-section {
    padding: 10px 20px;
    background-color:  rgb(245, 241, 241);;
    text-align: center;
}

.projects-section h2 {
    font-size: 2.5rem;
    color: #007bff;
    margin-bottom: 40px;
    text-transform: uppercase;
    letter-spacing: 1px;
}

/* Grid Layout */
.projects-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 20px;
    max-width: 1200px;
    margin: 0 auto;
}

/* Project Card */
.project-card {
    background-color:  rgb(255, 253, 253);
    border-radius: 12px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    text-align: left;
    display: flex;
    flex-direction: column;
}

.project-card img {
    width: 100%;
    height: 180px;
    object-fit: cover;
    border-bottom: 2px solid #e9ecef;
    transition: transform 0.3s ease;
}

.project-card h3 {
    font-size: 1.6rem;
    margin: 15px;
    color: #343a40;
}

.project-card p {
    margin: 0 15px 20px;
    color: #6c757d;
    font-size: 1rem;
    line-height: 1.6;
}

.project-card a {
    align-self: flex-start;
    margin: 0 15px 20px;
    padding: 10px 20px;
    background-color: #007bff;
    color: white;
    text-decoration: none;
    border-radius: 8px;
    font-size: 1rem;
    font-weight: bold;
    transition: background-color 0.3s ease;
}

.project-card a:hover {
    background-color: #0056b3;
}

/* Hover Effect */
.project-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.15);
}

.project-card img:hover {
    transform: scale(1.05);
}

/* Responsive Design */
@media (max-width: 768px) {
    .projects-section h1 {
        font-size: 2rem;
    }

    .project-card img {
        height: 150px;
    }
}


/* Form Styling */
.contact-section {
    background-color:  rgb(248, 248, 248);
    padding: 10px 20px;
}

.contact-container {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    max-width: 1200px;
    margin: 0 auto;
    gap: 20px;
}

.contact-description {
    flex: 1 1 500px;
    padding: 20px;
    text-align: left;
}

.contact-description h2 {
    font-size: 2.5rem;
    color: #007bff;
    margin-bottom: 15px;
}

.contact-description p {
    font-size: 1.1rem;
    line-height: 1.8;
    margin-bottom: 15px;
    color: #555;
}

.contact-form {
    flex: 1 1 500px;
    background-color: #ffffff;
    padding: 20px 30px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.contact-form h2 {
    margin-bottom: 20px;
    text-align: center;
    color: #007bff;
}

.form-group {
    margin-bottom: 15px;
}

.form-group label {
    display: block;
    font-size: 14px;
    margin-bottom: 5px;
    color: #555;
}

.form-group input,
.form-group textarea {
    width: 100%;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 5px;
    font-size: 14px;
    color: #333;
    background-color: #f9f9f9;
    transition: border-color 0.3s ease-in-out;
}

.form-group input:focus,
.form-group textarea:focus {
    border-color: #007bff;
    outline: none;
    background-color: #ffffff;
}

button {
    width: 100%;
    padding: 10px;
    font-size: 16px;
    color: #ffffff;
    background-color: #007bff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease-in-out;
}

button:hover {
    background-color: #0056b3;
}

@media (max-width: 768px) {
    .contact-container {
        flex-direction: column;
        text-align: center;
    }

    .contact-description,
    .contact-form {
        flex: 1 1 100%;
        text-align: center;
    }

    .contact-description {
        padding: 10px;
    }
}

        /* Footer */
        footer {
    background-color: #f8f9fa;
    padding: 20px;
    text-align: center;
    border-top: 1px solid #e0e0e0;
    color: #6c757d;
}

footer .social-links {
    margin: 10px 0;
}

footer .social-links a {
    margin: 0 10px;
    color: #6c757d;
    font-size: 1.5rem;
    text-decoration: none;
    transition: color 0.3s ease;
}

footer .social-links a:hover {
    color: #007bff; /* Blue hover effect */
}

/* Responsive Footer */
@media (max-width: 600px) {
    footer {
        padding: 15px;
    }

    footer .social-links a {
        font-size: 1.2rem;
        margin: 5px;
    }
}
    </style>

    @livewireStyles
</head>
<body>
    <!-- Header -->
    <header>
        <div>Frost Tech</div>
        <nav>
            <a href="#home">Home</a>
            <a href="{{ asset('resume/cv.pdf') }}" target="_blank">Resume</a>
            <a href="#about">About</a>
            <a href="#projects">My Work</a>
            <a href="#contact">Contact</a>
        </nav>
    </header>

    <!-- Main Content -->
        <main class="container px-5 py-16 mx-auto">
            {{ $slot }}
        </main>

    <!-- About -->
    <section class="about">
        @include('livewire.about')
    </section>


    <!-- Projects -->
    <section class="projects">
        @include('livewire.projects')
    </section>

    <!-- Contact -->
    <section class="contact">
        @include('livewire.contact')
    </section>

    <!-- Footer -->
    @include('components.layouts.includes.footer')

    @livewireScripts
</body>
</html>
