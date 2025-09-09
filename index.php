<?php include 'includes/header.php'; ?>

<!-- Hero Section -->
<section class="hero">
    <div class="container">
        <div class="hero-content">
            <div class="hero-text fade-in">
                <p class="hero-greeting">Hello, I'm</p>
                <h1 class="hero-name">
                    Balram <span class="gradient-text">Sharma</span>
                </h1>
                <h2 class="hero-title">Fresher Web Developer</h2>
                <p class="hero-description">
                    A passionate Computer Application student from Sikkim with expertise in modern web technologies. 
                    I create responsive, user-friendly web applications that deliver exceptional user experiences.
                </p>
                <div class="hero-buttons">
                    <a href="#" class="btn btn-primary" download>
                        <i class="fas fa-download"></i>
                        Download Resume
                    </a>
                    <a href="contact.php" class="btn btn-secondary">
                        <i class="fas fa-envelope"></i>
                        Get In Touch
                    </a>
                </div>
            </div>
            <div class="hero-image fade-in">
                <img src="./assets/images/profile.jpeg" alt="Balram Sharma" class="profile-image" 
                     onerror="this.src='data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMzAwIiBoZWlnaHQ9IjMwMCIgdmlld0JveD0iMCAwIDMwMCAzMDAiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjxyZWN0IHdpZHRoPSIzMDAiIGhlaWdodD0iMzAwIiBmaWxsPSIjMmEyYTJhIi8+CjxjaXJjbGUgY3g9IjE1MCIgY3k9IjEyMCIgcj0iNDAiIGZpbGw9IiM3Nzc3NzciLz4KPHBhdGggZD0iTTEwMCAyMDBDMTAwIDE3Mi4zODYgMTIyLjM4NiAxNTAgMTUwIDE1MFMyMDAgMTcyLjM4NiAyMDAgMjAwVjI1MEgxMDBWMjAwWiIgZmlsbD0iIzc3Nzc3NyIvPgo8L3N2Zz4K'">
            </div>
        </div>
    </div>
</section>

<!-- About Section -->
<section class="section" id="about">
    <div class="container">
        <div class="section-header fade-in">
            <h2 class="section-title">About <span class="gradient-text">Me</span></h2>
            <p class="section-subtitle">
                Learn more about my background, education, and passion for web development
            </p>
        </div>
        
        <div class="about-content fade-in">
            <div class="about-grid">
                <div class="about-info">
                    <div class="about-card">
                        <div class="about-icon">
                            <i class="fas fa-graduation-cap"></i>
                        </div>
                        <h3>Education</h3>
                        <p><strong>Bachelor in Computer Application</strong></p>
                        <p>Medhavi Skills University</p>
                        <p>GPA: 4.46 | Expected: January 2026</p>
                    </div>
                </div>
                
                <div class="about-info">
                    <div class="about-card">
                        <div class="about-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <h3>Location</h3>
                        <p><strong>Soreng, West Sikkim</strong></p>
                        <p>Open to remote opportunities</p>
                        <p>Available for relocation</p>
                    </div>
                </div>
                
                <div class="about-info">
                    <div class="about-card">
                        <div class="about-icon">
                            <i class="fas fa-code"></i>
                        </div>
                        <h3>Experience</h3>
                        <p><strong>Fresher Web Developer</strong></p>
                        <p>Ready to contribute to innovative projects. Quick learner with strong foundations</p>
                    </div>
                </div>
            </div>
            
            <div class="about-description fade-in">
                <p>
                    I'm a dedicated Computer Application student with a passion for creating modern, 
                    responsive web applications. My journey in web development began with a curiosity 
                    about how websites work, which evolved into a deep appreciation for clean code, 
                    user experience, and innovative solutions.
                </p>
                <p>
                    During my studies at Medhavi Skills University, I've maintained a strong academic 
                    record (4.46 GPA) while actively working on practical projects. I believe in 
                    continuous learning and staying updated with the latest web technologies and best practices.
                </p>
                <p>
                    I'm particularly interested in front-end development, responsive design, and creating 
                    applications that solve real-world problems. I'm eager to bring my skills, enthusiasm, 
                    and fresh perspective to a dynamic development team.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Quick Skills Preview -->
<section class="section" id="skills-preview">
    <div class="container">
        <div class="section-header fade-in">
            <h2 class="section-title">Technical <span class="gradient-text">Skills</span></h2>
            <p class="section-subtitle">
                Technologies I work with to bring ideas to life
            </p>
        </div>
        
        <div class="skills-preview-grid fade-in">
            <div class="skill-preview-item">
                <div class="skill-icon">
                    <i class="fab fa-html5"></i>
                </div>
                <h4>HTML5</h4>
            </div>
            
            <div class="skill-preview-item">
                <div class="skill-icon">
                    <i class="fab fa-css3-alt"></i>
                </div>
                <h4>Tailwind CSS</h4>
            </div>
            
            <div class="skill-preview-item">
                <div class="skill-icon">
                    <i class="fab fa-js-square"></i>
                </div>
                <h4>JavaScript</h4>
            </div>
            
            <div class="skill-preview-item">
                <div class="skill-icon">
                    <i class="fab fa-php"></i>
                </div>
                <h4>PHP</h4>
            </div>
            
            <div class="skill-preview-item">
                <div class="skill-icon">
                    <i class="fab fa-react"></i>
                </div>
                <h4>React.js</h4>
            </div>
            
            <div class="skill-preview-item">
                <div class="skill-icon">
                    <i class="fab fa-python"></i>
                </div>
                <h4>Python</h4>
            </div>
        </div>
        
        <div class="skills-cta fade-in">
            <a href="skills.php" class="btn btn-primary">
                <i class="fas fa-arrow-right"></i>
                View All Skills
            </a>
        </div>
    </div>
</section>

<!-- Featured Project -->
<section class="section" id="featured-project">
    <div class="container">
        <div class="section-header fade-in">
            <h2 class="section-title">Featured <span class="gradient-text">Project</span></h2>
            <p class="section-subtitle">
                Take a look at my recent work
            </p>
        </div>
        
        <div class="featured-project-card fade-in">
            <div class="featured-project-image">
                <div class="project-placeholder">
                    <i class="fas fa-tasks"></i>
                    <p>Task Manager App</p>
                </div>
            </div>
            <div class="featured-project-content">
                <h3>Task Manager Application</h3>
                <p class="project-date">May 2025</p>
                <p class="project-description">
                    Designed and implemented a comprehensive Task Manager application that enhances user 
                    productivity through intuitive task organization. Features include task deadlines, 
                    notifications, and project progress tracking with a 30% increase in user satisfaction.
                </p>
                <div class="project-highlights">
                    <div class="highlight-item">
                        <i class="fas fa-users"></i>
                        <span>Cross-functional Team Collaboration</span>
                    </div>
                    <div class="highlight-item">
                        <i class="fas fa-chart-line"></i>
                        <span>30% Increase in User Satisfaction</span>
                    </div>
                    <div class="highlight-item">
                        <i class="fas fa-mobile-alt"></i>
                        <span>Responsive Design</span>
                    </div>
                </div>
                <div class="project-tech">
                    <span class="tech-tag">HTML</span>
                    <span class="tech-tag">CSS</span>
                    <span class="tech-tag">JavaScript</span>
                    <span class="tech-tag">PHP</span>
                </div>
                <div class="project-buttons">
                    <a href="projects.php" class="btn btn-primary">
                        <i class="fas fa-external-link-alt"></i>
                        View All Projects
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="section" id="cta">
    <div class="container">
        <div class="cta-content fade-in">
            <h2 class="cta-title">Let's Work <span class="gradient-text">Together</span></h2>
            <p class="cta-description">
                I'm always excited to work on new projects and collaborate with amazing people. 
                Let's create something great together!
            </p>
            <div class="cta-buttons">
                <a href="contact.php" class="btn btn-primary">
                    <i class="fas fa-paper-plane"></i>
                    Start a Project
                </a>
                <a href="tel:8388005099" class="btn btn-secondary">
                    <i class="fas fa-phone"></i>
                    Call Now
                </a>
            </div>
        </div>
    </div>
</section>

<style>
/* Additional styles for index.php specific sections */
.about-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: var(--space-xl);
    margin-bottom: var(--space-2xl);
}

.about-card {
    background: var(--card-bg);
    padding: var(--space-xl);
    border-radius: 15px;
    border: 1px solid var(--border-color);
    text-align: center;
    transition: all var(--transition-normal);
}

.about-card:hover {
    transform: translateY(-5px);
    border-color: var(--accent-primary);
    box-shadow: var(--shadow-glow);
}

.about-icon {
    width: 60px;
    height: 60px;
    background: var(--gradient);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto var(--space-md);
    font-size: var(--font-size-xl);
    color: white;
}

.about-card h3 {
    font-size: var(--font-size-xl);
    font-weight: 600;
    margin-bottom: var(--space-md);
    color: var(--accent-primary);
}

.about-card p {
    color: var(--text-secondary);
    margin-bottom: var(--space-sm);
}

.about-description {
    max-width: 800px;
    margin: 0 auto;
    text-align: center;
}

.about-content {
    text-align: center;
}

.about-description p {
    color: var(--text-secondary);
    margin-bottom: var(--space-lg);
    line-height: 1.7;
}

.skills-preview-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
    gap: var(--space-lg);
    margin-bottom: var(--space-2xl);
}

.skill-preview-item {
    background: var(--card-bg);
    padding: var(--space-xl) var(--space-lg);
    border-radius: 15px;
    border: 1px solid var(--border-color);
    text-align: center;
    transition: all var(--transition-normal);
}

.skill-preview-item:hover {
    transform: translateY(-5px);
    border-color: var(--accent-primary);
    box-shadow: var(--shadow-glow);
}

.skill-icon {
    font-size: var(--font-size-3xl);
    color: var(--accent-primary);
    margin-bottom: var(--space-md);
}

.skill-preview-item h4 {
    font-size: var(--font-size-lg);
    font-weight: 600;
    color: var(--text-primary);
}

.skills-cta {
    text-align: center;
}

.featured-project-card {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: var(--space-3xl);
    align-items: center;
    background: var(--card-bg);
    padding: var(--space-3xl);
    border-radius: 20px;
    border: 1px solid var(--border-color);
}

.featured-project-image {
    background: var(--bg-tertiary);
    border-radius: 15px;
    height: 300px;
    display: flex;
    align-items: center;
    justify-content: center;
    position: relative;
    overflow: hidden;
}

.featured-project-image::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: var(--gradient);
    opacity: 0.1;
}

.project-placeholder {
    text-align: center;
    color: var(--text-muted);
    z-index: 2;
    position: relative;
}

.project-placeholder i {
    font-size: var(--font-size-4xl);
    margin-bottom: var(--space-md);
    color: var(--accent-primary);
}

.featured-project-content h3 {
    font-size: var(--font-size-2xl);
    font-weight: 700;
    margin-bottom: var(--space-sm);
    color: var(--text-primary);
}

.project-date {
    color: var(--accent-primary);
    font-weight: 500;
    margin-bottom: var(--space-lg);
}

.project-highlights {
    margin: var(--space-xl) 0;
}

.highlight-item {
    display: flex;
    align-items: center;
    gap: var(--space-md);
    margin-bottom: var(--space-md);
    color: var(--text-secondary);
}

.highlight-item i {
    color: var(--accent-primary);
    width: 20px;
}

.cta-content {
    text-align: center;
    max-width: 600px;
    margin: 0 auto;
    padding: var(--space-3xl);
    background: var(--card-bg);
    border-radius: 20px;
    border: 1px solid var(--border-color);
}

.cta-title {
    font-size: var(--font-size-3xl);
    font-weight: 700;
    margin-bottom: var(--space-lg);
}

.cta-description {
    font-size: var(--font-size-lg);
    color: var(--text-secondary);
    margin-bottom: var(--space-2xl);
    line-height: 1.7;
}

.cta-buttons {
    display: flex;
    gap: var(--space-lg);
    justify-content: center;
    flex-wrap: wrap;
}

@media screen and (max-width: 768px) {
    .featured-project-card {
        grid-template-columns: 1fr;
        gap: var(--space-xl);
    }
    
    .cta-buttons {
        flex-direction: column;
        align-items: center;
    }
    
    .skills-preview-grid {
        grid-template-columns: repeat(auto-fit, minmax(120px, 1fr));
        gap: var(--space-md);
    }
}
</style>

<?php include 'includes/footer.php'; ?>