@include('header')
<section class="event-detail">
    <div class="event-container">
        <div class="event-image">
            <img src="{{ asset('storage/' . $PersonalEvents->image) }}" alt="{{ $PersonalEvents->title }}">
        </div>
        <div class="event-content">
            <h1>{{ $PersonalEvents->title }}</h1>
            <p class="event-description">{{ $PersonalEvents->description }}</p>

            <!-- Additional Event Details -->
           
        </div>
    </div>
</section>

<div class="form-container">
    <h2>Event Inquiry Form</h2>
    <form action="{{ route('enquiry.store') }}" method="POST" class="inquiry-form" id="inquiry-form">
    @csrf
    <!-- Name Field -->
    <div class="form-group">
        <label for="name">Name <span class="required">*</span></label>
        <input type="text" id="name" name="name" required placeholder="Enter your full name">
    </div>

    <!-- Email Field -->
    <div class="form-group">
        <label for="email">Email <span class="required">*</span></label>
        <input type="email" id="email" name="email" required placeholder="Enter your email address">
    </div>

    <!-- Phone Number Field -->
    <div class="form-group">
        <label for="phone">Phone Number <span class="required">*</span></label>
        <input type="tel" id="phone" name="phone" required placeholder="Enter your phone number">
    </div>

    <!-- Message Field -->
    <div class="form-group">
        <label for="message">Message <span class="required">*</span></label>
        <textarea id="message" name="message" required placeholder="Enter your message"></textarea>
    </div>

    <!-- Event Type Field -->
    <div class="form-group">
        <label for="event-type">Type of Event <span class="required">*</span></label>
        <select id="event-type" name="event_type" required>
            <option value="">Select an event</option>
            <option value="wedding">Wedding</option>
            <option value="birthday">Birthday Party</option>
            <option value="corporate">Corporate Event</option>
            <option value="anniversary">Anniversary</option>
        </select>
    </div>

    <!-- Submit Button -->
    <button type="submit" class="submit-btn">Submit Inquiry</button>
</form>


</div>
<style>
    .event-image {
        max-width: 100vw;
        /* min-height: 400px; */
    }

    .event-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .event-detail {
        display: flex;
        flex-direction: column;
        padding: 20px;
        margin-top: 100px;
    }

    .event-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        max-width: 1200px;
        margin: 0 auto;
        flex-direction: column;
    }


    .event-content {
        width: 100%;
        margin-top: 40px;
    }

    .event-content h1 {
        font-size: 2.5rem;
        margin-bottom: 15px;
    }

    .event-content .event-description {
        font-size: 1.2rem;
        margin-bottom: 20px;
    }

    .register-button {
        display: inline-block;
        background-color: #007BFF;
        color: white;
        padding: 10px 20px;
        text-decoration: none;
        border-radius: 5px;
        font-weight: bold;
        margin-top: 20px;
    }

    .register-button:hover {
        background-color: #0056b3;
    }

    .related-events {
        margin-top: 40px;
    }

    .related-event-item {
        margin-bottom: 20px;
    }

    .related-event-item h4 {
        font-size: 1.5rem;
        margin-bottom: 5px;
    }

    .related-event-item a {
        text-decoration: none;
        color: #007BFF;
    }

    .related-event-item a:hover {
        text-decoration: underline;
    }
    
    /* who is best section start */
    .features-section {
        text-align: center;
        padding: 112px 0px 112px 0px;
    }

    .features-section .material-symbols-outlined {
        color: hsl(220, 48%, 28%) !important;
        font-size: 2rem !important;
    }

    .features-section h2 {
        font-size: 2.5rem;
        margin-bottom: 44px;
        color: hsl(220, 48%, 28%);
    }

    .features-section p {
        margin: 28px 0px;
    }

    .features-container {
        display: flex;
        justify-content: space-between;
        flex-wrap: wrap;
    }

    .feature-box {
        width: 30%;
        /*padding: 20px;*/
        text-align: left;
        transition: transform 0.3s ease;
    }

    .feature-box:hover {
        transform: translateY(-10px);
    }

    .feature-box img {
        width: 100%;
        height: auto;
    }

    .feature-box h3 {
        color: #666;
        font-size: 1.5rem;
        margin: 20px 0 10px;
    }

    .feature-box p {
        color: #7a7a7a;
        font-size: 1rem;
        line-height: 1.5;
    }

    /* Responsive Styles */
    @media (max-width: 1024px) {
        .feature-box {
            width: 45%;
        }
    }

    @media (max-width: 768px) {
        .feature-box {
            width: 100%;
            margin-bottom: 20px;
        }

        .features-container {
            flex-direction: column;
            align-items: center;
        }

        .features-section {
            text-align: center;
            padding: 50px 20px 50px 20px;
        }
    }

    /* who is best section end */
</style>
<style>
    .form-container {
        background-color: #fff;
        padding:100px 20px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
        width: 65%;
        /* max-width: 600px; */
        margin: auto;
    }

    h2 {
        text-align: center;
        margin-bottom: 20px;
    }

    .form-group {
        margin-bottom: 20px;
    }

    label {
        display: block;
        font-weight: bold;
        margin-bottom: 5px;
    }

    input,
    textarea,
    select {
        width: 100%;
        padding: 10px;
        border: 1px solid #ddd;
        border-radius: 4px;
        font-size: 14px;
        background-color: #f9f9f9;
    }

    input[type="text"],
    input[type="email"],
    input[type="tel"],
    textarea,
    select {
        margin-top: 5px;
    }

    textarea {
        height: 150px;
        resize: vertical;
    }

    button[type="submit"] {
        width: 100%;
        padding: 12px;
        background-color: hsl(220, 48%, 28%);
        color: #fff;
        border: none;
        border-radius: 4px;
        font-size: 16px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    button[type="submit"]:hover {
        background-color: #e09a37;
    }

    /* Required field styling */
    .required {
        color: red;
    }

    /* Add some spacing for mobile responsiveness */
    @media (max-width: 600px) {
        .form-container {
            padding: 15px;
        }

        button[type="submit"] {
            padding: 10px;
        }
    }
</style>
@include('footer')