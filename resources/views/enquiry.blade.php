@include('header')
@section('content')


<style>
    .form-container {
        background-color: #fff;
        padding: 20px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
        width: 100%;
        max-width: 600px;
        margin-top: 11rem;
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
        background-color: #FBB249;
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
@endsection
@include('footer')