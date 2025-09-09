<?php 
// Contact form processing
$form_submitted = false;
$form_success = false;
$form_errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $form_submitted = true;
    
    // Get form data and sanitize
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $subject = trim($_POST['subject'] ?? '');
    $message = trim($_POST['message'] ?? '');
    
    // Validate form fields
    if (empty($name)) {
        $form_errors[] = 'Name is required';
    } elseif (strlen($name) < 2) {
        $form_errors[] = 'Name must be at least 2 characters long';
    }
    
    if (empty($email)) {
        $form_errors[] = 'Email is required';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $form_errors[] = 'Please enter a valid email address';
    }
    
    if (empty($subject)) {
        $form_errors[] = 'Subject is required';
    }
    
    if (empty($message)) {
        $form_errors[] = 'Message is required';
    } elseif (strlen($message) < 10) {
        $form_errors[] = 'Message must be at least 10 characters long';
    }
    
    // If no errors, process the form
    if (empty($form_errors)) {
        // In a real application, you would send an email here
        // For demo purposes, we'll just set success to true
        $form_success = true;
        
        // You could add email sending logic here:
        /*
        $to = 'balram.23@msu.edu.in';
        $email_subject = 'New Contact Form Message: ' . $subject;
        $email_body = "Name: $name\nEmail: $email\nSubject: $subject\n\nMessage:\n$message";
        $headers = "From: $email\r\nReply-To: $email\r\n";
        
        if (mail($to, $email_subject, $email_body, $headers)) {
            $form_success = true;
        } else {
            $form_errors[] = 'Failed to send message. Please try again.';
        }
        */
        
        // Clear form data on success
        if ($form_success) {
            $name = $email = $subject = $message = '';
        }
    }
}

include 'includes/header.php'; 
?>

<!-- Contact Hero Section -->
<section class="contact-hero">
    <div class="container">
        <div class="contact-hero-content fade-in">
            <h1 class="contact-hero-title">Get In <span class="gradient-text">Touch</span></h1>
            <p class="contact-hero-description">
                Ready to start your next project? I'd love to hear from you. 
                Let's discuss how we can work together to bring your ideas to life.
            </p>
        </div>
    </div>
</section>

<!-- Contact Form Messages -->
<?php if ($form_submitted): ?>
    <div class="container">
        <?php if ($form_success): ?>
            <div class="form-message success fade-in">
                <div class="message-icon">
                    <i class="fas fa-check-circle"></i>
                </div>
                <div class="message-content">
                    <h3>Message Sent Successfully!</h3>
                    <p>Thank you for reaching out. I'll get back to you within 24 hours.</p>
                </div>
            </div>
        <?php elseif (!empty($form_errors)): ?>
            <div class="form-message error fade-in">
                <div class="message-icon">
                    <i class="fas fa-exclamation-triangle"></i>
                </div>
                <div class="message-content">
                    <h3>Please Fix the Following Errors:</h3>
                    <ul>
                        <?php foreach ($form_errors as $error): ?>
                            <li><?php echo htmlspecialchars($error); ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        <?php endif; ?>
    </div>
<?php endif; ?>

<!-- Main Contact Section -->
<section class="section" id="contact-main">
    <div class="container">
        <div class="contact-grid">
            <!-- Contact Information -->
            <div class="contact-info fade-in">
                <h2>Let's Connect</h2>
                <p class="contact-intro">
                    I'm always interested in new opportunities, collaborations, and interesting projects. 
                    Whether you have a question or just want to say hi, feel free to reach out!
                </p>

                <div class="contact-methods">
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="contact-details">
                            <h4>Email</h4>
                            <p>
                                <a href="mailto:balram.23@msu.edu.in">balram.23@msu.edu.in</a>
                            </p>
                            <span class="response-time">Usually responds within 24 hours</span>
                        </div>
                    </div>

                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div class="contact-details">
                            <h4>Phone</h4>
                            <p>
                                <a href="tel:8388005099">+91 8388005099</a>
                            </p>
                            <span class="response-time">Available Mon-Fri, 9 AM - 6 PM</span>
                        </div>
                    </div>

                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="contact-details">
                            <h4>Location</h4>
                            <p>Soreng, West Sikkim</p>
                            <span class="response-time">Open to remote work & relocation</span>
                        </div>
                    </div>

                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-graduation-cap"></i>
                        </div>
                        <div class="contact-details">
                            <h4>Education</h4>
                            <p>Medhavi Skills University</p>
                            <span class="response-time">BCA Graduate - January 2026</span>
                        </div>
                    </div>
                </div>

                <!-- Social Links -->
                <div class="contact-social">
                    <h3>Follow Me</h3>
                    <div class="social-links">
                        <a href="#" class="social-link" aria-label="LinkedIn">
                            <i class="fab fa-linkedin-in"></i>
                            <span>LinkedIn</span>
                        </a>
                        <a href="#" class="social-link" aria-label="GitHub">
                            <i class="fab fa-github"></i>
                            <span>GitHub</span>
                        </a>
                        <a href="#" class="social-link" aria-label="Twitter">
                            <i class="fab fa-twitter"></i>
                            <span>Twitter</span>
                        </a>
                        <a href="#" class="social-link" aria-label="Instagram">
                            <i class="fab fa-instagram"></i>
                            <span>Instagram</span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="contact-form-container fade-in">
                <form class="contact-form" method="POST" action="" id="contact-form">
                    <div class="form-header">
                        <h3>Send me a message</h3>
                        <p>Fill out the form below and I'll get back to you as soon as possible.</p>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="name" class="form-label">
                                Full Name <span class="required">*</span>
                            </label>
                            <input 
                                type="text" 
                                id="name" 
                                name="name" 
                                class="form-input" 
                                value="<?php echo htmlspecialchars($name ?? ''); ?>"
                                placeholder="Your full name"
                                required
                            >
                        </div>

                        <div class="form-group">
                            <label for="email" class="form-label">
                                Email Address <span class="required">*</span>
                            </label>
                            <input 
                                type="email" 
                                id="email" 
                                name="email" 
                                class="form-input"
                                value="<?php echo htmlspecialchars($email ?? ''); ?>"
                                placeholder="your.email@example.com"
                                required
                            >
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="subject" class="form-label">
                            Subject <span class="required">*</span>
                        </label>
                        <select id="subject" name="subject" class="form-input" required>
                            <option value="">Select a subject</option>
                            <option value="job-opportunity" <?php echo (isset($subject) && $subject === 'job-opportunity') ? 'selected' : ''; ?>>Job Opportunity</option>
                            <option value="freelance-project" <?php echo (isset($subject) && $subject === 'freelance-project') ? 'selected' : ''; ?>>Freelance Project</option>
                            <option value="collaboration" <?php echo (isset($subject) && $subject === 'collaboration') ? 'selected' : ''; ?>>Collaboration</option>
                            <option value="general-inquiry" <?php echo (isset($subject) && $subject === 'general-inquiry') ? 'selected' : ''; ?>>General Inquiry</option>
                            <option value="other" <?php echo (isset($subject) && $subject === 'other') ? 'selected' : ''; ?>>Other</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="message" class="form-label">
                            Message <span class="required">*</span>
                        </label>
                        <textarea 
                            id="message" 
                            name="message" 
                            class="form-textarea" 
                            rows="6"
                            placeholder="Tell me about your project, requirements, or just say hello..."
                            required
                        ><?php echo htmlspecialchars($message ?? ''); ?></textarea>
                        <div class="character-count">
                            <span id="char-count">0</span> characters
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary form-submit">
                        <i class="fas fa-paper-plane"></i>
                        <span>Send Message</span>
                        <div class="btn-loading">
                            <i class="fas fa-spinner fa-spin"></i>
                        </div>
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="section" id="faq">
    <div class="container">
        <div class="section-header fade-in">
            <h2 class="section-title">Frequently Asked <span class="gradient-text">Questions</span></h2>
            <p class="section-subtitle">
                Quick answers to common questions about working with me
            </p>
        </div>

        <div class="faq-container">
            <div class="faq-item fade-in">
                <div class="faq-question">
                    <h4>What type of projects do you work on?</h4>
                    <i class="fas fa-chevron-down"></i>
                </div>
                <div class="faq-answer">
                    <p>I specialize in web development projects including responsive websites, web applications, and e-commerce solutions. I work with HTML, CSS, JavaScript, React, PHP, and Python to create modern, user-friendly applications.</p>
                </div>
            </div>

            <div class="faq-item fade-in">
                <div class="faq-question">
                    <h4>How do you handle project timelines?</h4>
                    <i class="fas fa-chevron-down"></i>
                </div>
                <div class="faq-answer">
                    <p>I believe in clear communication and realistic timelines. I'll provide detailed project estimates, regular updates, and always aim to deliver quality work on time. I'm experienced in both individual and team environments.</p>
                </div>
            </div>

            <div class="faq-item fade-in">
                <div class="faq-question">
                    <h4>Are you available for full-time positions?</h4>
                    <i class="fas fa-chevron-down"></i>
                </div>
                <div class="faq-answer">
                    <p>Yes! As a fresh graduate (January 2026), I'm actively seeking full-time opportunities. I'm open to both remote work and relocation, and I'm excited to contribute to innovative projects and grow with a dynamic team.</p>
                </div>
            </div>

            <div class="faq-item fade-in">
                <div class="faq-question">
                    <h4>What's your preferred communication style?</h4>
                    <i class="fas fa-chevron-down"></i>
                </div>
                <div class="faq-answer">
                    <p>I prefer clear, regular communication through email, video calls, or project management tools. I believe in keeping stakeholders informed with progress updates and I'm always available to discuss project requirements or challenges.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Quick Actions Section -->
<section class="section" id="quick-actions">
    <div class="container">
        <div class="quick-actions-grid fade-in">
            <div class="quick-action-card">
                <div class="action-icon">
                    <i class="fas fa-file-download"></i>
                </div>
                <h3>Download Resume</h3>
                <p>Get my detailed resume with education, skills, and project experience.</p>
                <a href="#" class="btn btn-secondary" download>
                    <i class="fas fa-download"></i>
                    Download PDF
                </a>
            </div>

            <div class="quick-action-card">
                <div class="action-icon">
                    <i class="fas fa-calendar-alt"></i>
                </div>
                <h3>Schedule a Call</h3>
                <p>Let's have a conversation about your project requirements and goals.</p>
                <a href="tel:8388005099" class="btn btn-secondary">
                    <i class="fas fa-phone"></i>
                    Call Now
                </a>
            </div>

            <div class="quick-action-card">
                <div class="action-icon">
                    <i class="fas fa-code"></i>
                </div>
                <h3>View My Work</h3>
                <p>Check out my projects and see examples of my development skills.</p>
                <a href="skills.php" class="btn btn-secondary">
                    <i class="fas fa-eye"></i>
                    View Skills
                </a>
            </div>
        </div>
    </div>
</section>

<style>
/* Contact Page Specific Styles */
.contact-hero {
    padding: var(--space-3xl) 0 var(--space-2xl);
    background: linear-gradient(135deg, rgba(29, 185, 84, 0.1) 0%, rgba(187, 134, 252, 0.1) 100%);
}

.contact-hero-content {
    text-align: center;
    max-width: 800px;
    margin: 0 auto;
}

.contact-hero-title {
    font-size: clamp(var(--font-size-3xl), 5vw, var(--font-size-5xl));
    font-weight: 700;
    margin-bottom: var(--space-lg);
    line-height: 1.2;
}

.contact-hero-description {
    font-size: var(--font-size-lg);
    color: var(--text-secondary);
    line-height: 1.7;
}

/* Form Messages */
.form-message {
    margin: var(--space-xl) 0;
    padding: var(--space-xl);
    border-radius: 15px;
    display: flex;
    align-items: flex-start;
    gap: var(--space-lg);
    border: 2px solid;
}

.form-message.success {
    background: rgba(29, 185, 84, 0.1);
    border-color: var(--accent-primary);
    color: var(--accent-primary);
}

.form-message.error {
    background: rgba(231, 76, 60, 0.1);
    border-color: #e74c3c;
    color: #e74c3c;
}

.message-icon {
    font-size: var(--font-size-2xl);
    margin-top: var(--space-xs);
}

.message-content h3 {
    font-size: var(--font-size-xl);
    font-weight: 600;
    margin-bottom: var(--space-sm);
}

.message-content ul {
    margin: 0;
    padding-left: var(--space-lg);
}

.message-content li {
    margin-bottom: var(--space-xs);
}

/* Contact Grid */
.contact-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: var(--space-3xl);
    align-items: start;
}

/* Contact Info */
.contact-info h2 {
    font-size: var(--font-size-2xl);
    font-weight: 700;
    margin-bottom: var(--space-lg);
    color: var(--text-primary);
}

.contact-intro {
    color: var(--text-secondary);
    line-height: 1.7;
    margin-bottom: var(--space-2xl);
    font-size: var(--font-size-lg);
}

.contact-methods {
    margin-bottom: var(--space-2xl);
}

.contact-item {
    display: flex;
    align-items: flex-start;
    gap: var(--space-lg);
    margin-bottom: var(--space-xl);
    padding: var(--space-lg);
    background: var(--card-bg);
    border: 1px solid var(--border-color);
    border-radius: 15px;
    transition: all var(--transition-normal);
}

.contact-item:hover {
    border-color: var(--accent-primary);
    transform: translateY(-2px);
    box-shadow: var(--shadow-glow);
}

.contact-icon {
    width: 50px;
    height: 50px;
    background: var(--gradient);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: var(--font-size-lg);
    flex-shrink: 0;
}

.contact-details h4 {
    font-size: var(--font-size-lg);
    font-weight: 600;
    margin-bottom: var(--space-xs);
    color: var(--text-primary);
}

.contact-details p {
    margin-bottom: var(--space-xs);
}

.contact-details a {
    color: var(--accent-primary);
    text-decoration: none;
    font-weight: 500;
    transition: color var(--transition-fast);
}

.contact-details a:hover {
    color: var(--accent-secondary);
}

.response-time {
    font-size: var(--font-size-sm);
    color: var(--text-muted);
    font-style: italic;
}

/* Contact Social */
.contact-social {
    padding-top: var(--space-xl);
    border-top: 1px solid var(--border-color);
}

.contact-social h3 {
    font-size: var(--font-size-xl);
    font-weight: 600;
    margin-bottom: var(--space-lg);
    color: var(--text-primary);
}

.contact-social .social-links {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: var(--space-md);
}

.contact-social .social-link {
    display: flex;
    align-items: center;
    gap: var(--space-sm);
    padding: var(--space-sm) var(--space-md);
    background: var(--card-bg);
    border: 1px solid var(--border-color);
    border-radius: 10px;
    color: var(--text-secondary);
    text-decoration: none;
    transition: all var(--transition-normal);
    font-weight: 500;
}

.contact-social .social-link:hover {
    border-color: var(--accent-primary);
    color: var(--accent-primary);
    transform: translateY(-2px);
    box-shadow: var(--shadow-sm);
}

.contact-social .social-link i {
    font-size: var(--font-size-lg);
}

/* Contact Form */
.contact-form-container {
    background: var(--card-bg);
    border: 1px solid var(--border-color);
    border-radius: 20px;
    padding: var(--space-2xl);
    position: sticky;
    top: 100px;
}

.form-header {
    text-align: center;
    margin-bottom: var(--space-2xl);
}

.form-header h3 {
    font-size: var(--font-size-2xl);
    font-weight: 700;
    margin-bottom: var(--space-sm);
    color: var(--text-primary);
}

.form-header p {
    color: var(--text-secondary);
    line-height: 1.6;
}

.form-row {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: var(--space-lg);
}

.form-group {
    margin-bottom: var(--space-lg);
}

.form-label {
    display: block;
    font-weight: 600;
    color: var(--text-primary);
    margin-bottom: var(--space-sm);
    font-size: var(--font-size-base);
}

.required {
    color: #e74c3c;
}

.form-input,
.form-textarea {
    width: 100%;
    padding: var(--space-md) var(--space-lg);
    background: var(--bg-secondary);
    border: 2px solid var(--border-color);
    border-radius: 12px;
    color: var(--text-primary);
    font-family: var(--font-family);
    font-size: var(--font-size-base);
    transition: all var(--transition-normal);
    resize: vertical;
}

.form-input:focus,
.form-textarea:focus {
    outline: none;
    border-color: var(--accent-primary);
    box-shadow: 0 0 0 3px rgba(29, 185, 84, 0.1);
    background: var(--bg-primary);
}

.form-input::placeholder,
.form-textarea::placeholder {
    color: var(--text-muted);
}

.character-count {
    text-align: right;
    font-size: var(--font-size-sm);
    color: var(--text-muted);
    margin-top: var(--space-xs);
}

/* Checkbox Group */
.checkbox-group {
    margin: var(--space-xl) 0;
}

.checkbox-label {
    display: flex;
    align-items: flex-start;
    gap: var(--space-sm);
    cursor: pointer;
    font-size: var(--font-size-sm);
    color: var(--text-secondary);
    line-height: 1.5;
}

.checkbox-label input[type="checkbox"] {
    opacity: 0;
    position: absolute;
}

.checkmark {
    width: 20px;
    height: 20px;
    background: var(--bg-secondary);
    border: 2px solid var(--border-color);
    border-radius: 4px;
    position: relative;
    transition: all var(--transition-normal);
    flex-shrink: 0;
    margin-top: 2px;
}

.checkbox-label input[type="checkbox"]:checked + .checkmark {
    background: var(--accent-primary);
    border-color: var(--accent-primary);
}

.checkmark::after {
    content: '';
    position: absolute;
    left: 6px;
    top: 2px;
    width: 6px;
    height: 10px;
    border: solid white;
    border-width: 0 2px 2px 0;
    transform: rotate(45deg);
    opacity: 0;
    transition: opacity var(--transition-fast);
}

.checkbox-label input[type="checkbox"]:checked + .checkmark::after {
    opacity: 1;
}

.link {
    color: var(--accent-primary);
    text-decoration: none;
    transition: color var(--transition-fast);
}

.link:hover {
    color: var(--accent-secondary);
    text-decoration: underline;
}

/* Form Submit Button */
.form-submit {
    width: 100%;
    padding: var(--space-lg);
    font-size: var(--font-size-lg);
    font-weight: 600;
    position: relative;
    overflow: hidden;
}

.form-submit .btn-loading {
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);
    opacity: 0;
    transition: opacity var(--transition-normal);
}

.form-submit.loading span {
    opacity: 0;
}

.form-submit.loading .btn-loading {
    opacity: 1;
}

/* FAQ Section */
.faq-container {
    max-width: 800px;
    margin: 0 auto;
}

.faq-item {
    background: var(--card-bg);
    border: 1px solid var(--border-color);
    border-radius: 15px;
    margin-bottom: var(--space-lg);
    overflow: hidden;
    transition: all var(--transition-normal);
}

.faq-item:hover {
    border-color: var(--accent-primary);
    box-shadow: var(--shadow-sm);
}

.faq-question {
    padding: var(--space-xl);
    cursor: pointer;
    display: flex;
    justify-content: space-between;
    align-items: center;
    transition: all var(--transition-normal);
}

.faq-question:hover {
    background: rgba(29, 185, 84, 0.05);
}

.faq-question h4 {
    font-size: var(--font-size-lg);
    font-weight: 600;
    color: var(--text-primary);
    margin: 0;
}

.faq-question i {
    color: var(--accent-primary);
    transition: transform var(--transition-normal);
}

.faq-item.active .faq-question i {
    transform: rotate(180deg);
}

.faq-answer {
    padding: 0 var(--space-xl);
    max-height: 0;
    overflow: hidden;
    transition: all var(--transition-normal);
}

.faq-item.active .faq-answer {
    padding: 0 var(--space-xl) var(--space-xl);
    max-height: 200px;
}

.faq-answer p {
    color: var(--text-secondary);
    line-height: 1.7;
    margin: 0;
}

/* Quick Actions */
.quick-actions-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: var(--space-xl);
}

.quick-action-card {
    background: var(--card-bg);
    border: 1px solid var(--border-color);
    border-radius: 15px;
    padding: var(--space-2xl);
    text-align: center;
    transition: all var(--transition-normal);
}

.quick-action-card:hover {
    transform: translateY(-5px);
    border-color: var(--accent-primary);
    box-shadow: var(--shadow-glow);
}

.action-icon {
    width: 70px;
    height: 70px;
    background: var(--gradient);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto var(--space-lg);
    font-size: var(--font-size-2xl);
    color: white;
}

.quick-action-card h3 {
    font-size: var(--font-size-xl);
    font-weight: 600;
    margin-bottom: var(--space-md);
    color: var(--text-primary);
}

.quick-action-card p {
    color: var(--text-secondary);
    line-height: 1.6;
    margin-bottom: var(--space-xl);
}

/* Responsive Design */
@media screen and (max-width: 968px) {
    .contact-grid {
        grid-template-columns: 1fr;
        gap: var(--space-2xl);
    }
    
    .contact-form-container {
        position: static;
    }
    
    .form-row {
        grid-template-columns: 1fr;
        gap: 0;
    }
    
    .contact-social .social-links {
        grid-template-columns: 1fr;
        max-width: 280px;
        gap: var(--space-md);
    }
}

@media screen and (max-width: 768px) {
    .contact-hero-title {
        font-size: var(--font-size-3xl);
    }
    
    .contact-item {
        flex-direction: column;
        text-align: center;
        gap: var(--space-md);
    }
    
    .contact-form-container {
        padding: var(--space-xl);
    }
    
    .quick-actions-grid {
        grid-template-columns: 1fr;
    }
    
    .faq-question {
        padding: var(--space-lg);
    }
    
    .faq-answer {
        padding: 0 var(--space-lg);
    }
    
    .faq-item.active .faq-answer {
        padding: 0 var(--space-lg) var(--space-lg);
    }
}
</style>

<script>
// Contact Page JavaScript
document.addEventListener('DOMContentLoaded', function() {
    // Character counter for message textarea
    const messageTextarea = document.getElementById('message');
    const charCount = document.getElementById('char-count');
    
    if (messageTextarea && charCount) {
        function updateCharCount() {
            const count = messageTextarea.value.length;
            charCount.textContent = count;
            
            // Change color based on length
            if (count < 10) {
                charCount.style.color = '#e74c3c';
            } else if (count < 50) {
                charCount.style.color = '#f39c12';
            } else {
                charCount.style.color = '#1DB954';
            }
        }
        
        messageTextarea.addEventListener('input', updateCharCount);
        updateCharCount(); // Initial count
    }
    
    // Form submission with loading state
    const contactForm = document.getElementById('contact-form');
    const submitButton = contactForm?.querySelector('.form-submit');
    
    if (contactForm && submitButton) {
        contactForm.addEventListener('submit', function(e) {
            // Show loading state
            submitButton.classList.add('loading');
            submitButton.disabled = true;
            
            // Remove loading state after submission attempt
            setTimeout(() => {
                submitButton.classList.remove('loading');
                submitButton.disabled = false;
            }, 2000);
        });
    }
    
    // FAQ Accordion functionality
    const faqItems = document.querySelectorAll('.faq-item');
    
    faqItems.forEach(item => {
        const question = item.querySelector('.faq-question');
        
        question.addEventListener('click', () => {
            // Close other FAQ items
            faqItems.forEach(otherItem => {
                if (otherItem !== item && otherItem.classList.contains('active')) {
                    otherItem.classList.remove('active');
                }
            });
            
            // Toggle current item
            item.classList.toggle('active');
        });
    });
    
    // Form validation enhancements
    const formInputs = contactForm?.querySelectorAll('.form-input, .form-textarea');
    
    formInputs?.forEach(input => {
        // Add focus classes for better styling
        input.addEventListener('focus', function() {
            this.parentElement.classList.add('focused');
        });
        
        input.addEventListener('blur', function() {
            this.parentElement.classList.remove('focused');
            
            // Validate on blur
            validateField(this);
        });
        
        input.addEventListener('input', function() {
            // Clear validation errors on input
            clearFieldError(this);
        });
    });
    
    function validateField(field) {
        const value = field.value.trim();
        const fieldName = field.name;
        
        // Clear previous errors
        clearFieldError(field);
        
        // Validation rules
        switch(fieldName) {
            case 'name':
                if (!value) {
                    showFieldError(field, 'Name is required');
                } else if (value.length < 2) {
                    showFieldError(field, 'Name must be at least 2 characters');
                }
                break;
                
            case 'email':
                const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                if (!value) {
                    showFieldError(field, 'Email is required');
                } else if (!emailRegex.test(value)) {
                    showFieldError(field, 'Please enter a valid email address');
                }
                break;
                
            case 'subject':
                if (!value) {
                    showFieldError(field, 'Please select a subject');
                }
                break;
                
            case 'message':
                if (!value) {
                    showFieldError(field, 'Message is required');
                } else if (value.length < 10) {
                    showFieldError(field, 'Message must be at least 10 characters');
                }
                break;
        }
    }
    
    function showFieldError(field, message) {
        field.style.borderColor = '#e74c3c';
        
        // Create error message element
        const errorDiv = document.createElement('div');
        errorDiv.className = 'field-error';
        errorDiv.textContent = message;
        errorDiv.style.cssText = `
            color: #e74c3c;
            font-size: 0.875rem;
            margin-top: 0.5rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        `;
        
        const errorIcon = document.createElement('i');
        errorIcon.className = 'fas fa-exclamation-circle';
        errorDiv.insertBefore(errorIcon, errorDiv.firstChild);
        
        field.parentElement.appendChild(errorDiv);
    }
    
    function clearFieldError(field) {
        field.style.borderColor = '';
        const errorDiv = field.parentElement.querySelector('.field-error');
        if (errorDiv) {
            errorDiv.remove();
        }
    }
    
    // Smooth scroll to form on page load if there are errors
    <?php if (!empty($form_errors)): ?>
    setTimeout(() => {
        document.getElementById('contact-main').scrollIntoView({
            behavior: 'smooth',
            block: 'start'
        });
    }, 500);
    <?php endif; ?>
    
    // Auto-hide success message after 5 seconds
    const successMessage = document.querySelector('.form-message.success');
    if (successMessage) {
        setTimeout(() => {
            successMessage.style.opacity = '0';
            successMessage.style.transform = 'translateY(-20px)';
            setTimeout(() => {
                successMessage.remove();
            }, 500);
        }, 5000);
    }
});

// Contact form analytics (optional)
function trackFormInteraction(action, field = null) {
    // You can add analytics tracking here
    console.log(`Form interaction: ${action}`, field);
}

// Social link tracking
document.querySelectorAll('.social-link').forEach(link => {
    link.addEventListener('click', function(e) {
        const platform = this.getAttribute('aria-label');
        trackFormInteraction('social_click', platform);
    });
});
</script>

<?php include 'includes/footer.php'; ?>