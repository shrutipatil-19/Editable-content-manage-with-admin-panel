@include('header')
<style>
    /* alert */
    .alert {
    padding: 15px;
    margin-bottom: 20px;
    border-radius: 5px;
    font-size: 16px;
    color: #fff;
    border: none;
    display: flex;
    align-items: center;
}

.alert-success {
    background-color: #28a745; /* Green background for success */
    box-shadow: 0px 4px 15px rgba(0, 128, 0, 0.2);
}

.alert-success i {
    margin-right: 10px;
}

.alert.success {
    font-weight: 600;
}

.alert p {
    margin: 0;
}

    .heading {
    text-align: center;
    padding: 20px;
    background: #003366;
    color: white;
}

h1, h2 {
    margin-bottom: 10px;
}

p {
    line-height: 1.6;
}

/* Contact Page Layout */
.contact-container {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    max-width: 1200px;
    margin: 20px auto;
    padding: 20px;
}

.contact-form-section {
    flex: 2;
}

.contact-info-section {
    flex: 1;
    background: hsl(220, 48%, 28%);
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    color: white;
}

/* Form Styles */
.contact-form .form-group {
    margin-bottom: 15px;
}

.contact-form label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
}

.contact-form input,
.contact-form textarea {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 16px;
}

.contact-form textarea {
    resize: none;
}

.submit-btn {
    display: block;
    background: #003366;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
    margin-top: 10px;
}

.submit-btn:hover {
    background: #0055aa;
}

/* Contact Info */
.contact-info-section ul {
    list-style: none;
    padding: 0;
}

.contact-info-section li {
    margin-bottom: 10px;
}

.contact-info-section .social-icons a {
    display: inline-block;
    margin-right: 10px;
    font-size: 24px;
    color: #003366;
    text-decoration: none;
}

.contact-info-section .social-icons a:hover {
    color: #0055aa;
}

/* Footer */
.footer {
    text-align: center;
    padding: 10px;
    background: #f1f1f1;
}

/* Responsive Styles */
@media screen and (max-width: 768px) {
    .contact-container {
        flex-direction: column;
    }

    .contact-info-section {
        margin-top: 20px;
    }
}
</style>
<div class="heading">
        <h1>Contact Us</h1>
        <p>We’d love to hear from you! Fill out the form below or reach out directly.</p>
</div>
    <main class="contact-container">
        <section class="contact-form-section">
            <h2>Get in Touch</h2>
            <form action="{{ route('contact.store') }}" method="POST" class="contact-form">
            @csrf 
            @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" placeholder="Your Name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" placeholder="Your Email" required>
                </div>
                <div class="form-group">
                    <label for="phone">Phone Number:</label>
                    <input type="tel" id="phone" name="phone" placeholder="Phone Number" required>
                </div>
                <div class="form-group">
                    <label for="message">Message:</label>
                    <textarea id="message" name="message" rows="5" placeholder="Write your message here..." required></textarea>
                </div>
                <button type="submit" class="submit-btn">Send Message</button>
            </form>
        </section>

        <aside class="contact-info-section">
            <h2>Contact Information</h2>
            <ul>
                <li><strong>Address:</strong> 123 Main Street, City, Country</li>
                <li><strong>Email:</strong> contact@yourwebsite.com</li>
                <li><strong>Phone:</strong> +123 456 7890</li>
            </ul>
            <h2>Follow Us</h2>
            <div class="social-icons">
                <a href="#" aria-label="Facebook">🌐</a>
                <a href="#" aria-label="Twitter">🌐</a>
                <a href="#" aria-label="LinkedIn">🌐</a>
            </div>
        </aside>
    </main>
@include('footer')