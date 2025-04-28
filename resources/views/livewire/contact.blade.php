<section id="contact" class="py-16 contact-section" aria-labelledby="contact-heading">
    <div class="contact-container">
        <div class="contact-description">
            <h2 id="contact-heading">Contact Me</h2>
            <p>
                Let's connect! If you'd like to work together or just say hi, use the form. I'll get back to you soon.
            </p>
        </div>

        <div class="contact-form">
            <h2>Get In Touch</h2>

            @if (session()->has('success'))
                <div style="color: green; margin-bottom: 10px;" role="alert">
                    {{ session('success') }}
                </div>
            @endif

            <form wire:submit.prevent="submit" aria-label="Contact Form">
                <div class="form-group">
                    <label for="name">Name <span aria-hidden="true">*</span></label>
                    <input type="text" id="name" wire:model.defer="name" placeholder="Your Name"
                           required aria-required="true"
                           @error('name') aria-describedby="name-error" @enderror>
                    @error('name')
                    <span id="name-error" style="color:red" role="alert">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="email">Email <span aria-hidden="true">*</span></label>
                    <input type="email" id="email" wire:model.defer="email" placeholder="Your Email"
                           required aria-required="true"
                           @error('email') aria-describedby="email-error" @enderror>
                    @error('email')
                    <span id="email-error" style="color:red" role="alert">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="message">Message <span aria-hidden="true">*</span></label>
                    <textarea id="message" wire:model.defer="message" rows="4" placeholder="Your Message"
                              required aria-required="true"
                              @error('message') aria-describedby="message-error" @enderror></textarea>
                    @error('message')
                    <span id="message-error" style="color:red" role="alert">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Honeypot field for spam prevention -->
                <div style="position: absolute; left: -5000px;" aria-hidden="true">
                    <input type="text" wire:model.defer="honeypot" tabindex="-1">
                </div>

                <button type="submit" wire:loading.attr="disabled">
                    <span wire:loading.remove>Send Message</span>
                    <span wire:loading>Sending...</span>
                </button>
            </form>
        </div>
    </div>
</section>
