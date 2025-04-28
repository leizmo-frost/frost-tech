<section id="contact" style="padding: 4rem 2rem; background-color: #f9f9f9;">
    <div class="contact-container" style="max-width: 1200px; margin: 0 auto; display: flex; gap: 3rem; align-items: flex-start;">

        <!-- Left Column - Description -->
        <div class="contact-description" style="flex: 1; padding: 2rem; background: #fff; border-radius: 8px; box-shadow: 0 4px 8px rgba(0,0,0,0.05);">
            <h2 id="contact-heading" style="font-size: 2.25rem; font-weight: bold; margin-bottom: 1.6rem; color: #007bff;">Contact Me</h2>
            <p style="font-size: 1.1rem; color: #555; line-height: 1.6; margin-bottom: 2rem;">
                Let's connect! If you'd like to work together or just say hi, use the form. I'll get back to you soon.
            </p>

            <div style="margin-top: 3rem;">
                <h3 style="font-size: 1.25rem; margin-bottom: 1rem; color: #007bff;">Other Ways to Connect</h3>
                <ul style="list-style: none; padding: 0; display: flex; gap: 1rem;">
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
                        <a href="https://linkedin.com/in/lermodiouskaranja
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
            </div>
        </div>

        <!-- Right Column - Form -->
        <div class="contact-form" style="flex: 1; background: #fff; padding: 2rem; border-radius: 8px; box-shadow: 0 4px 8px rgba(0,0,0,0.05);">
            <h3 style="font-size: 1.5rem; margin-bottom: 1.5rem; color: #007bff;">Get In Touch</h3>

            @if (session()->has('success'))
                <div class="alert-success" role="alert" style="background-color: #d4edda; color: #155724; padding: 1rem; border-radius: 5px; margin-bottom: 1.5rem; border: 1px solid #c3e6cb;">
                    ✅ {{ session('success') }}
                </div>
            @endif

            <form wire:submit.prevent="submit" aria-label="Contact Form" style="display: flex; flex-direction: column; gap: 1.5rem;">
                <div>
                    <label for="name" style="display: block; font-weight: bold; color: #555; margin-bottom: 0.5rem;">Name <span aria-hidden="true" style="color:red;">*</span></label>
                    <input
                        type="text"
                        id="name"
                        wire:model.defer="name"
                        required
                        aria-required="true"
                        @error('name') aria-describedby="name-error" @enderror
                        style="width: 100%; padding: 0.75rem; border: 1px solid #ddd; border-radius: 5px; transition: border-color 0.3s;"
                        class="focus:border-blue-500"
                    >
                    @error('name')
                        <span id="name-error" style="color:red; font-size: 0.9rem; display: block; margin-top: 0.5rem;">{{ $message }}</span>
                    @enderror
                </div>

                <div>
                    <label for="email" style="display: block; font-weight: bold; color: #555; margin-bottom: 0.5rem;">Email <span aria-hidden="true" style="color:red;">*</span></label>
                    <input
                        type="email"
                        id="email"
                        wire:model.defer="email"
                        required
                        aria-required="true"
                        @error('email') aria-describedby="email-error" @enderror
                        style="width: 100%; padding: 0.75rem; border: 1px solid #ddd; border-radius: 5px; transition: border-color 0.3s;"
                        class="focus:border-blue-500"
                    >
                    @error('email')
                        <span id="email-error" style="color:red; font-size: 0.9rem; display: block; margin-top: 0.5rem;">{{ $message }}</span>
                    @enderror
                </div>

                <div>
                    <label for="message" style="display: block; font-weight: bold; color: #555; margin-bottom: 0.5rem;">Message <span aria-hidden="true" style="color:red;">*</span></label>
                    <textarea
                        id="message"
                        wire:model.defer="message"
                        rows="5"
                        required
                        aria-required="true"
                        @error('message') aria-describedby="message-error" @enderror
                        style="width: 90%; padding: 0.75rem; border: 1px solid #ddd; border-radius: 5px; resize: vertical; transition: border-color 0.3s; min-height: 90px;"
                        class="focus:border-blue-500"
                    ></textarea>
                    @error('message')
                        <span id="message-error" style="color:red; font-size: 0.9rem; display: block; margin-top: 0.5rem;">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Honeypot anti-spam field -->
                <div style="position: absolute; left: -9999px;" aria-hidden="true">
                    <input type="text" wire:model.defer="honeypot" tabindex="-1" autocomplete="off">
                </div>

                <button
                    type="submit"
                    wire:loading.attr="disabled"
                    style="background-color: #3b82f6; color: white; padding: 1rem; font-size: 1rem; font-weight: bold; border: none; border-radius: 5px; cursor: pointer; transition: all 0.3s ease; width: 100%;"
                    onmouseover="this.style.backgroundColor='#2563eb'; this.style.transform='translateY(-2px)';"
                    onmouseout="this.style.backgroundColor='#3b82f6'; this.style.transform='translateY(0)';"
                >
                    <span wire:loading.remove>Send Message</span>
                    <span wire:loading>
                        <i class="fas fa-spinner fa-spin" style="margin-right: 8px;"></i> Sending...
                    </span>
                </button>
            </form>
        </div>
    </div>
</section>

<!-- Font Awesome for icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
