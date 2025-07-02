<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ThinkCode - Admin Portal</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Header -->
    <header class="header">
        <nav class="container">
            <div class="nav">
                <a href="landing.php" class="logo">ThinkCode</a>
                <ul class="nav-links">
                    <li><a href="#features">Features</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="login.php">Login</a></li>
                    <li><a href="signup.php">Sign Up</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <div class="fade-in-up">
                <h1>Welcome to ThinkCode</h1>
                <p>Powerful admin portal for modern software institutions. Manage your courses, students, and operations with ease.</p>
                <a href="signup.php" class="cta-button">Get Started Today</a>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="features">
        <div class="container">
            <h2>Why Choose ThinkCode?</h2>
            <div class="features-grid">
                <div class="feature-card fade-in-up">
                    <div class="feature-icon">📊</div>
                    <h3>Analytics Dashboard</h3>
                    <p>Get comprehensive insights into your institution's performance with real-time analytics and reporting.</p>
                </div>
                <div class="feature-card fade-in-up">
                    <div class="feature-icon">👥</div>
                    <h3>Student Management</h3>
                    <p>Efficiently manage student enrollment, progress tracking, and communication all in one place.</p>
                </div>
                <div class="feature-card fade-in-up">
                    <div class="feature-icon">📚</div>
                    <h3>Course Administration</h3>
                    <p>Create, organize, and manage courses with our intuitive course management system.</p>
                </div>
                <div class="feature-card fade-in-up">
                    <div class="feature-icon">🔒</div>
                    <h3>Secure Platform</h3>
                    <p>Enterprise-grade security ensuring your data and student information is always protected.</p>
                </div>
                <div class="feature-card fade-in-up">
                    <div class="feature-icon">📱</div>
                    <h3>Mobile Responsive</h3>
                    <p>Access your admin panel from anywhere with our fully responsive mobile-friendly design.</p>
                </div>
                <div class="feature-card fade-in-up">
                    <div class="feature-icon">⚡</div>
                    <h3>Lightning Fast</h3>
                    <p>Optimized performance ensures quick loading times and smooth user experience.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="features" style="background: #f8fafc;">
        <div class="container">
            <div style="text-align: center; max-width: 800px; margin: 0 auto;">
                <h2>About ThinkCode</h2>
                <p style="font-size: 1.1rem; color: #4a5568; margin-bottom: 2rem;">
                    ThinkCode is a cutting-edge admin portal designed specifically for software institutions. 
                    We understand the unique challenges faced by educational technology organizations and have 
                    created a comprehensive solution that streamlines operations, enhances student experience, 
                    and provides powerful insights for better decision-making.
                </p>
                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 2rem; margin-top: 3rem;">
                    <div>
                        <h3 style="color: #4f46e5; font-size: 2rem; margin-bottom: 0.5rem;">500+</h3>
                        <p style="color: #718096;">Institutions Trust Us</p>
                    </div>
                    <div>
                        <h3 style="color: #4f46e5; font-size: 2rem; margin-bottom: 0.5rem;">50K+</h3>
                        <p style="color: #718096;">Students Managed</p>
                    </div>
                    <div>
                        <h3 style="color: #4f46e5; font-size: 2rem; margin-bottom: 0.5rem;">99.9%</h3>
                        <p style="color: #718096;">Uptime Guarantee</p>
                    </div>
                    <div>
                        <h3 style="color: #4f46e5; font-size: 2rem; margin-bottom: 0.5rem;">24/7</h3>
                        <p style="color: #718096;">Support Available</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <p>&copy; 2025 ThinkCode. All rights reserved. Empowering software institutions worldwide.</p>
        </div>
    </footer>

    <script>
        // Simple scroll animation
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);

        document.querySelectorAll('.fade-in-up').forEach(el => {
            el.style.opacity = '0';
            el.style.transform = 'translateY(30px)';
            el.style.transition = 'all 0.6s ease-out';
            observer.observe(el);
        });
    </script>
</body>
</html>