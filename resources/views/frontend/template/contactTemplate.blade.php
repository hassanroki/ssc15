{{-- Contact Us Section Start --}}
<div class="contact">
    <div class="container">
        <div class="row">
            <h2>Contact Us</h2>
            <div class="col-lg-6 col-md-6 contact-form">
                <form>
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" placeholder="Your Name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Your Email" required>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Message</label>
                        <textarea class="form-control" id="message" rows="5" placeholder="Your Message" required></textarea>
                    </div>
                    <div class="mb-3">
                        <input type="submit" value="Message" class="btn btn-primary">
                    </div>
                </form>
            </div>
            <div class="col-lg-6 col-md-6 message-image d-flex align-items-center">
                <!-- Placeholder image for demonstration -->
                <img src="{{ asset('frontend/images/contact.jpg') }}" alt="Message Image" class="img-fluid">
            </div>
        </div>
    </div>
</div>
{{-- Contact Us Section End --}}