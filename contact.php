<?php 
$pageTitle = "Contact Us | Schedule Your Discovery Call";
include 'includes/header.php'; 
?>

<section class="contact-form-section">
    <h1>Ready to Prosper? Get in Touch.</h1>
    <p>Use the form below to inquire about our services or schedule a complimentary discovery call.</p>

    <form action="process_form.php" method="POST" class="contact-form">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="service">Service of Interest:</label>
        <select id="service" name="service">
            <option value="">-- Select a Service --</option>
            <option value="Consulting">Consulting</option>
            <option value="Bookkeeping">Bookkeeping</option>
            <option value="Virtual Assistant">Virtual Assistant</option>
        </select>
        
        <label for="message">Message:</label>
        <textarea id="message" name="message" rows="6" required></textarea>
        
        <button type="submit" class="cta-button">Send Message</button>
    </form>
</section>

<section class="contact-info">
    <h2>Direct Contact Information</h2>
    <p>Email: info@prosperaconsulting.us</p>
    <p>Phone: (XX) XXXX-XXXX</p>
</section>

<?php 
include 'includes/footer.php'; 
?>