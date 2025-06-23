<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Workflow - Employee Management Reimagined</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
            line-height: 1.6;
            color: #1d1d1f;
            background: #ffffff;
            overflow-x: hidden;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Header */
        header {
            position: fixed;
            top: 0;
            width: 100%;
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border-bottom: 1px solid rgba(0, 0, 0, 0.1);
            z-index: 1000;
            transition: all 0.3s ease;
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .logo {
            font-size: 24px;
            font-weight: 700;
            background: linear-gradient(135deg, #007AFF, #5856D6);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .nav-links {
            display: flex;
            list-style: none;
            gap: 40px;
            align-items: center;
        }

        .nav-links a {
            text-decoration: none;
            color: #1d1d1f;
            font-weight: 400;
            transition: color 0.3s ease;
            font-size: 16px;
        }

        .nav-links a:hover {
            color: #007AFF;
        }

        .cta-button {
            background: linear-gradient(135deg, #007AFF, #5856D6);
            color: white;
            padding: 12px 24px;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 500;
            transition: all 0.3s ease;
            box-shadow: 0 4px 20px rgba(0, 122, 255, 0.3);
        }

        .cta-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 30px rgba(0, 122, 255, 0.4);
        }

        /* Hero Section */
        .hero {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            position: relative;
            overflow: hidden;
        }

        .hero::before {
            content: '';
            position: absolute;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(0, 122, 255, 0.1) 0%, transparent 70%);
            animation: float 20s ease-in-out infinite;
        }

        @keyframes float {
            0%, 100% { transform: translate(-50%, -50%) rotate(0deg); }
            50% { transform: translate(-50%, -50%) rotate(180deg); }
        }

        .hero-content {
            position: relative;
            z-index: 2;
            max-width: 800px;
            animation: fadeInUp 1s ease-out;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(60px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .hero h1 {
            font-size: clamp(3rem, 8vw, 6rem);
            font-weight: 700;
            margin-bottom: 24px;
            background: linear-gradient(135deg, #1d1d1f, #007AFF);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            line-height: 1.1;
        }

        .hero p {
            font-size: 24px;
            color: #6e6e73;
            margin-bottom: 40px;
            font-weight: 400;
        }

        .hero-buttons {
            display: flex;
            gap: 20px;
            justify-content: center;
            flex-wrap: wrap;
        }

        .primary-button {
            background: linear-gradient(135deg, #007AFF, #5856D6);
            color: white;
            padding: 16px 32px;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 600;
            font-size: 18px;
            transition: all 0.3s ease;
            box-shadow: 0 8px 30px rgba(0, 122, 255, 0.3);
            border: none;
            cursor: pointer;
        }

        .primary-button:hover {
            transform: translateY(-3px);
            box-shadow: 0 12px 40px rgba(0, 122, 255, 0.4);
        }

        .secondary-button {
            background: rgba(255, 255, 255, 0.9);
            color: #007AFF;
            padding: 16px 32px;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 600;
            font-size: 18px;
            transition: all 0.3s ease;
            border: 2px solid rgba(0, 122, 255, 0.2);
            backdrop-filter: blur(10px);
        }

        .secondary-button:hover {
            background: rgba(255, 255, 255, 1);
            border-color: #007AFF;
            transform: translateY(-2px);
        }

        /* Features Section */
        .features {
            padding: 120px 0;
            background: #ffffff;
        }

        .features h2 {
            text-align: center;
            font-size: 48px;
            font-weight: 700;
            margin-bottom: 20px;
            background: linear-gradient(135deg, #1d1d1f, #007AFF);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .features-subtitle {
            text-align: center;
            font-size: 20px;
            color: #6e6e73;
            margin-bottom: 80px;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }

        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 40px;
            margin-top: 60px;
        }

        .feature-card {
            background: rgba(255, 255, 255, 0.9);
            border-radius: 20px;
            padding: 40px;
            text-align: center;
            transition: all 0.3s ease;
            border: 1px solid rgba(0, 0, 0, 0.05);
            backdrop-filter: blur(10px);
            position: relative;
            overflow: hidden;
        }

        .feature-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, #007AFF, #5856D6, #FF2D92);
            transform: scaleX(0);
            transition: transform 0.3s ease;
        }

        .feature-card:hover::before {
            transform: scaleX(1);
        }

        .feature-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.1);
        }

        .feature-icon {
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, #007AFF, #5856D6);
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 24px;
            font-size: 32px;
            color: white;
        }

        .feature-card h3 {
            font-size: 24px;
            font-weight: 600;
            margin-bottom: 16px;
            color: #1d1d1f;
        }

        .feature-card p {
            color: #6e6e73;
            font-size: 16px;
            line-height: 1.6;
        }

        /* Stats Section */
        .stats {
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            padding: 100px 0;
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 40px;
            text-align: center;
        }

        .stat-item h3 {
            font-size: 48px;
            font-weight: 700;
            background: linear-gradient(135deg, #007AFF, #5856D6);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 8px;
        }

        .stat-item p {
            color: #6e6e73;
            font-size: 18px;
            font-weight: 500;
        }

        /* CTA Section */
        .final-cta {
            padding: 120px 0;
            background: #1d1d1f;
            color: white;
            text-align: center;
        }

        .final-cta h2 {
            font-size: 48px;
            font-weight: 700;
            margin-bottom: 24px;
        }

        .final-cta p {
            font-size: 20px;
            color: #a1a1a6;
            margin-bottom: 40px;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }

        /* Footer */
        footer {
            background: #f5f5f7;
            padding: 60px 0 40px;
            text-align: center;
        }

        .footer-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 40px;
            margin-bottom: 40px;
        }

        .footer-section h4 {
            font-weight: 600;
            margin-bottom: 16px;
            color: #1d1d1f;
        }

        .footer-section a {
            display: block;
            color: #6e6e73;
            text-decoration: none;
            margin-bottom: 8px;
            transition: color 0.3s ease;
        }

        .footer-section a:hover {
            color: #007AFF;
        }

        .footer-bottom {
            border-top: 1px solid #d1d1d6;
            padding-top: 20px;
            color: #6e6e73;
            font-size: 14px;
        }

        /* Mobile Styles */
        @media (max-width: 768px) {
            .nav-links {
                display: none;
            }

            .hero h1 {
                font-size: 2.5rem;
            }

            .hero p {
                font-size: 18px;
            }

            .hero-buttons {
                flex-direction: column;
                align-items: center;
            }

            .features h2 {
                font-size: 36px;
            }

            .features-grid {
                grid-template-columns: 1fr;
            }

            .final-cta h2 {
                font-size: 36px;
            }
        }
    </style>
</head>
<body>
    <header>
        <nav>
            <div class="logo">Workflow</div>
            <ul class="nav-links">
                <li><a href="#features">Features</a></li>
                <li><a href="#pricing">Pricing</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><a href="register.php" class="cta-button" style="color:white;">Create an Account</a></li>
            </ul>
        </nav>
    </header>

    <section class="hero">
        <div class="hero-content">
            <h1>Employee management. Simplified.</h1>
            <p>Transform how you manage your team with intelligent automation, seamless collaboration, and data-driven insights.</p>
            <div class="hero-buttons">
                <button class="primary-button">Start Free Trial</button>
                <a href="#" class="secondary-button">Watch Demo</a>
            </div>
        </div>
    </section>

    <section class="features" id="features">
        <div class="container">
            <h2>Everything you need</h2>
            <p class="features-subtitle">Powerful tools designed to help you manage your team more effectively and boost productivity across your organization.</p>
            
            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon">👥</div>
                    <h3>Team Management</h3>
                    <p>Organize teams, assign roles, and track performance with intuitive dashboards and real-time analytics.</p>
                </div>
                
                <div class="feature-card">
                    <div class="feature-icon">📊</div>
                    <h3>Performance Analytics</h3>
                    <p>Get actionable insights with advanced reporting tools and customizable performance metrics.</p>
                </div>
                
                <div class="feature-card">
                    <div class="feature-icon">⏰</div>
                    <h3>Time Tracking</h3>
                    <p>Streamline attendance, manage schedules, and optimize resource allocation with smart automation.</p>
                </div>
                
                <div class="feature-card">
                    <div class="feature-icon">💬</div>
                    <h3>Communication Hub</h3>
                    <p>Centralize team communication with integrated messaging, announcements, and collaboration tools.</p>
                </div>
                
                <div class="feature-card">
                    <div class="feature-icon">🎯</div>
                    <h3>Goal Setting</h3>
                    <p>Set objectives, track progress, and celebrate achievements with our comprehensive goal management system.</p>
                </div>
                
                <div class="feature-card">
                    <div class="feature-icon">🔐</div>
                    <h3>Enterprise Security</h3>
                    <p>Bank-level security with encrypted data, role-based access control, and compliance management.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="stats">
        <div class="container">
            <div class="stats-grid">
                <div class="stat-item">
                    <h3>99.9%</h3>
                    <p>Uptime Reliability</p>
                </div>
                <div class="stat-item">
                    <h3>50K+</h3>
                    <p>Happy Customers</p>
                </div>
                <div class="stat-item">
                    <h3>2M+</h3>
                    <p>Employees Managed</p>
                </div>
                <div class="stat-item">
                    <h3>40%</h3>
                    <p>Productivity Increase</p>
                </div>
            </div>
        </div>
    </section>

    <section class="final-cta">
        <div class="container">
            <h2>Ready to transform your team?</h2>
            <p>Join thousands of companies already using Workflow to build stronger, more productive teams.</p>
            <button class="primary-button">Start Your Free Trial</button>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h4>Product</h4>
                    <a href="#">Features</a>
                    <a href="#">Pricing</a>
                    <a href="#">Integrations</a>
                    <a href="#">API</a>
                </div>
                <div class="footer-section">
                    <h4>Company</h4>
                    <a href="#">About</a>
                    <a href="#">Careers</a>
                    <a href="#">Blog</a>
                    <a href="#">Press</a>
                </div>
                <div class="footer-section">
                    <h4>Resources</h4>
                    <a href="#">Documentation</a>
                    <a href="#">Help Center</a>
                    <a href="#">Security</a>
                    <a href="#">Status</a>
                </div>
                <div class="footer-section">
                    <h4>Legal</h4>
                    <a href="#">Privacy</a>
                    <a href="#">Terms</a>
                    <a href="#">Cookies</a>
                    <a href="#">GDPR</a>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2025 Workflow. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Header scroll effect
        let lastScrollTop = 0;
        const header = document.querySelector('header');

        window.addEventListener('scroll', function() {
            let scrollTop = window.pageYOffset || document.documentElement.scrollTop;
            
            if (scrollTop > lastScrollTop && scrollTop > 100) {
                // Scrolling down
                header.style.transform = 'translateY(-100%)';
            } else {
                // Scrolling up
                header.style.transform = 'translateY(0)';
            }
            
            lastScrollTop = scrollTop;
        });

        // Intersection Observer for animation triggers
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.animation = 'fadeInUp 0.8s ease-out forwards';
                }
            });
        }, observerOptions);

        // Observe feature cards
        document.querySelectorAll('.feature-card').forEach(card => {
            card.style.opacity = '0';
            card.style.transform = 'translateY(30px)';
            observer.observe(card);
        });

        // Observe stat items
        document.querySelectorAll('.stat-item').forEach(item => {
            item.style.opacity = '0';
            item.style.transform = 'translateY(30px)';
            observer.observe(item);
        });

        // Button click animations
        document.querySelectorAll('button, .cta-button').forEach(button => {
            button.addEventListener('click', function(e) {
                // Create ripple effect
                const ripple = document.createElement('span');
                const rect = this.getBoundingClientRect();
                const size = Math.max(rect.width, rect.height);
                const x = e.clientX - rect.left - size / 2;
                const y = e.clientY - rect.top - size / 2;
                
                ripple.style.position = 'absolute';
                ripple.style.borderRadius = '50%';
                ripple.style.background = 'rgba(255, 255, 255, 0.6)';
                ripple.style.transform = 'scale(0)';
                ripple.style.left = x + 'px';
                ripple.style.top = y + 'px';
                ripple.style.width = ripple.style.height = size + 'px';
                ripple.style.pointerEvents = 'none';
                
                this.style.position = 'relative';
                this.style.overflow = 'hidden';
                this.appendChild(ripple);
                
                ripple.animate([
                    { transform: 'scale(0)', opacity: 1 },
                    { transform: 'scale(1)', opacity: 0 }
                ], {
                    duration: 600,
                    easing: 'ease-out'
                }).onfinish = () => ripple.remove();
            });
        });
    </script>
</body>
</html>