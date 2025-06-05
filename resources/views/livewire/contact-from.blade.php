<section id="contact" class="py-16 contact-section" aria-labelledby="contact-heading">
    <div class="contact-container">
      <div class="contact-description">
        <h2 id="contact-heading">Contact Me</h2>
        <p>
          Let's connect! If you'd like to work together or just say hi, use the form. I’ll get back to you soon.
        </p>
      </div>

      <div class="contact-form">
        <h2>Get In Touch</h2>

        {{-- @if (session()->has('success'))
          <div style="color: green; margin-bottom: 10px;">
            {{ session('success') }}
          </div>
        @endif

        <form wire:submit.prevent="submit" aria-label="Contact Form" action="{{ route('contact.submit') }}" method="POST">
          <div class="form-group">
            <label for="name">Name <span>*</span></label>
            <input type="text" id="name" wire:model.defer="name" placeholder="Your Name" required>
            @error('name') <span style="color:red">{{ $message }}</span> @enderror
          </div>

          <div class="form-group">
            <label for="email">Email <span>*</span></label>
            <input type="email" id="email" wire:model.defer="email" placeholder="Your Email" required>
            @error('email') <span style="color:red">{{ $message }}</span> @enderror
          </div>

          <div class="form-group">
            <label for="message">Message <span>*</span></label>
            <textarea id="message" wire:model.defer="message" rows="4" placeholder="Your Message" required></textarea>
            @error('message') <span style="color:red">{{ $message }}</span> @enderror
          </div>

          <button type="submit">Send Message</button>
        </form> --}}
      </div>
    </div>
  </section>
