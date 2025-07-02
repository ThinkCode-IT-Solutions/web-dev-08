<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - ThinkCode Admin</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="auth-container">
        <div class="auth-card fade-in-up">
            <div class="auth-header">
                <h1>Welcome Back</h1>
                <p>Sign in to your ThinkCode admin account</p>
            </div>
            
            <form action="backend/login_process.php" method="POST">
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" id="email" name="email" class="form-input" placeholder="Enter your email" required>
                </div>
                
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" class="form-input" placeholder="Enter your password" required>
                </div>
                
                <div class="form-group" style="display: flex; justify-content: space-between; align-items: center;">
                    <label style="display: flex; align-items: center; gap: 0.5rem; cursor: pointer;">
                        <input type="checkbox" name="remember" style="margin: 0;">
                        <span style="font-size: 0.9rem;">Remember me</span>
                    </label>
                    <a href="#" style="color: #4f46e5; text-decoration: none; font-size: 0.9rem;">Forgot password?</a>
                </div>
                
                <button type="submit" class="auth-button">Sign In</button>
            </form>
            
            <div class="auth-link">
                <p>Don't have an account? <a href="signup.php">Create one here</a></p>
            </div>
            
            <div style="text-align: center; margin-top: 2rem;">
                <a href="landing.php" style="color: #718096; text-decoration: none; font-size: 0.9rem;">← Back to Home</a>
            </div>
        </div>
    </div>

    <script>
        // Add animation on load
        document.addEventListener('DOMContentLoaded', function() {
            const card = document.querySelector('.auth-card');
            card.style.opacity = '0';
            card.style.transform = 'translateY(30px)';
            
            setTimeout(() => {
                card.style.opacity = '1';
                card.style.transform = 'translateY(0)';
                card.style.transition = 'all 0.6s ease-out';
            }, 100);
        });

        // Form validation and enhancement
        const form = document.querySelector('form');
        const inputs = document.querySelectorAll('.form-input');
        
        inputs.forEach(input => {
            input.addEventListener('focus', function() {
                this.parentElement.style.transform = 'scale(1.02)';
                this.parentElement.style.transition = 'transform 0.2s ease';
            });
            
            input.addEventListener('blur', function() {
                this.parentElement.style.transform = 'scale(1)';
            });
        });

        form.addEventListener('submit', function(e) {
            const button = document.querySelector('.auth-button');
            button.style.background = 'linear-gradient(135deg, #6366f1 0%, #8b5cf6 100%)';
            button.innerHTML = 'Signing In...';
            button.disabled = true;
            
            // In a real application, you wouldn't prevent default here
            // This is just for demonstration
            setTimeout(() => {
                button.innerHTML = 'Sign In';
                button.disabled = false;
                button.style.background = 'linear-gradient(135deg, #4f46e5 0%, #7c3aed 100%)';
            }, 2000);
        });
    </script>
</body>
</html>