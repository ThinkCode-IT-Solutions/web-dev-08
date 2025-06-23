<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TaskFlow - Sign Up</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
            position: relative;
            overflow: hidden;
        }

        /* Animated background elements */
        body::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(255,255,255,0.1) 1px, transparent 1px);
            background-size: 50px 50px;
            animation: moveBackground 20s linear infinite;
            z-index: 0;
        }

        @keyframes moveBackground {
            0% { transform: translate(0, 0); }
            100% { transform: translate(50px, 50px); }
        }

        /* Floating particles */
        .particle {
            position: absolute;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            animation: float 6s ease-in-out infinite;
        }

        .particle:nth-child(1) {
            width: 80px;
            height: 80px;
            top: 20%;
            left: 10%;
            animation-delay: 0s;
        }

        .particle:nth-child(2) {
            width: 120px;
            height: 120px;
            top: 60%;
            right: 10%;
            animation-delay: 2s;
        }

        .particle:nth-child(3) {
            width: 60px;
            height: 60px;
            bottom: 20%;
            left: 20%;
            animation-delay: 4s;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-20px) rotate(180deg); }
        }

        .signup-container {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 24px;
            padding: 40px;
            width: 100%;
            max-width: 450px;
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.25);
            position: relative;
            z-index: 10;
            animation: slideUp 0.8s ease-out;
        }

        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .logo {
            text-align: center;
            margin-bottom: 32px;
        }

        .logo h1 {
            color: white;
            font-size: 32px;
            font-weight: 700;
            margin-bottom: 8px;
            background: linear-gradient(135deg, #ffffff, #e0e0e0);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .logo p {
            color: rgba(255, 255, 255, 0.7);
            font-size: 16px;
            font-weight: 400;
        }

        .form-group {
            margin-bottom: 24px;
            position: relative;
        }

        .form-group label {
            display: block;
            color: rgba(255, 255, 255, 0.9);
            font-size: 14px;
            font-weight: 500;
            margin-bottom: 8px;
            transition: color 0.3s ease;
        }

        .form-group input {
            width: 100%;
            padding: 16px 20px;
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 12px;
            color: white;
            font-size: 16px;
            transition: all 0.3s ease;
            backdrop-filter: blur(10px);
        }

        .form-group input::placeholder {
            color: rgba(255, 255, 255, 0.5);
        }

        .form-group input:focus {
            outline: none;
            border-color: rgba(255, 255, 255, 0.4);
            background: rgba(255, 255, 255, 0.15);
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }

        .form-group input:focus + label {
            color: white;
        }

        .password-toggle {
            position: absolute;
            right: 16px;
            top: 50%;
            transform: translateY(-50%);
            background: none;
            border: none;
            color: rgba(255, 255, 255, 0.6);
            cursor: pointer;
            font-size: 18px;
            padding: 4px;
            transition: color 0.3s ease;
        }

        .password-toggle:hover {
            color: white;
        }

        .checkbox-group {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 32px;
        }

        .checkbox-group input[type="checkbox"] {
            width: 20px;
            height: 20px;
            accent-color: #667eea;
            cursor: pointer;
        }

        .checkbox-group label {
            color: rgba(255, 255, 255, 0.8);
            font-size: 14px;
            cursor: pointer;
            line-height: 1.4;
        }

        .checkbox-group a {
            color: #a8b3ff;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .checkbox-group a:hover {
            color: white;
            text-decoration: underline;
        }

        .signup-btn {
            width: 100%;
            padding: 16px;
            background: linear-gradient(135deg, #667eea, #764ba2);
            border: none;
            border-radius: 12px;
            color: white;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .signup-btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
            transition: left 0.5s;
        }

        .signup-btn:hover::before {
            left: 100%;
        }

        .signup-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 15px 35px rgba(102, 126, 234, 0.4);
        }

        .signup-btn:active {
            transform: translateY(0);
        }

        .divider {
            text-align: center;
            margin: 32px 0;
            position: relative;
        }

        .divider::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 0;
            right: 0;
            height: 1px;
            background: rgba(255, 255, 255, 0.2);
        }

        .divider span {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            color: rgba(255, 255, 255, 0.7);
            padding: 0 20px;
            font-size: 14px;
        }

        .social-login {
            display: flex;
            gap: 16px;
            margin-bottom: 32px;
        }

        .social-btn {
            flex: 1;
            padding: 12px;
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 12px;
            color: white;
            text-decoration: none;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            font-size: 14px;
            font-weight: 500;
            transition: all 0.3s ease;
            backdrop-filter: blur(10px);
        }

        .social-btn:hover {
            background: rgba(255, 255, 255, 0.15);
            transform: translateY(-2px);
        }

        .login-link {
            text-align: center;
            color: rgba(255, 255, 255, 0.8);
            font-size: 14px;
        }

        .login-link a {
            color: #a8b3ff;
            text-decoration: none;
            font-weight: 600;
            transition: color 0.3s ease;
        }

        .login-link a:hover {
            color: white;
            text-decoration: underline;
        }

        /* Responsive design */
        @media (max-width: 480px) {
            .signup-container {
                padding: 24px;
                margin: 16px;
            }
            
            .logo h1 {
                font-size: 28px;
            }
            
            .social-login {
                flex-direction: column;
            }
        }

        /* Loading state */
        .signup-btn.loading {
            pointer-events: none;
            opacity: 0.8;
        }

        .signup-btn.loading::after {
            content: '';
            position: absolute;
            width: 20px;
            height: 20px;
            border: 2px solid rgba(255,255,255,0.3);
            border-top: 2px solid white;
            border-radius: 50%;
            right: 16px;
            top: 50%;
            transform: translateY(-50%);
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            0% { transform: translateY(-50%) rotate(0deg); }
            100% { transform: translateY(-50%) rotate(360deg); }
        }
    </style>
</head>
<body>
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>

    <div class="signup-container">
        <div class="logo">
            <h1>TaskFlow</h1>
            <p>Organize your life, one task at a time</p>
        </div>

        <form id="signupForm" action="backend/signup_controllerl.php" method="POST">
            <div class="form-group">
                <input type="text" id="fullName" name="fullName" placeholder="Full Name" required>
                <label for="fullName">Full Name</label>
            </div>

            <div class="form-group">
                <input type="email" id="email" name="email" placeholder="Email Address" required>
                <label for="email">Email Address</label>
            </div>

            <div class="form-group">
                <input type="text" id="username" name="username" placeholder="Username" required>
                <label for="username">Username</label>
            </div>

            <div class="form-group" style="position: relative;">
                <input type="password" id="password" name="password" placeholder="Password" required minlength="8">
                <label for="password">Password</label>
                <button type="button" class="password-toggle" onclick="togglePassword('password')">👁️</button>
            </div>

            <div class="form-group" style="position: relative;">
                <input type="password" id="confirmPassword" name="confirmPassword" placeholder="Confirm Password" required>
                <label for="confirmPassword">Confirm Password</label>
                <button type="button" class="password-toggle" onclick="togglePassword('confirmPassword')">👁️</button>
            </div>

            <div class="checkbox-group">
                <input type="checkbox" id="terms" name="terms" required>
                <label for="terms">
                    I agree to the <a href="/terms">Terms of Service</a> and <a href="/privacy">Privacy Policy</a>
                </label>
            </div>

            <button type="submit" class="signup-btn" id="signupBtn">
                Create Account
            </button>
        </form>

        <div class="divider">
            <span>or continue with</span>
        </div>

        <div class="social-login">
            <a href="/auth/google" class="social-btn">
                <span>🔗</span> Google
            </a>
            <a href="/auth/github" class="social-btn">
                <span>🔗</span> GitHub
            </a>
        </div>

        <div class="login-link">
            Already have an account? <a href="/login">Sign In</a>
        </div>
    </div>

    <!-- <script>
        // Form validation and submission
        const form = document.getElementById('signupForm');
        const signupBtn = document.getElementById('signupBtn');

        form.addEventListener('submit', async (e) => {
            e.preventDefault();
            
            const formData = new FormData(form);
            const data = Object.fromEntries(formData);
            
            // Validate passwords match
            if (data.password !== data.confirmPassword) {
                alert('Passwords do not match!');
                return;
            }
            
            // Add loading state
            signupBtn.classList.add('loading');
            signupBtn.textContent = 'Creating Account...';
            
            try {
                // Simulate API call
                await new Promise(resolve => setTimeout(resolve, 2000));
                
                // Here you would typically make an actual API call
                console.log('Signup data:', data);
                alert('Account created successfully!');
                
                // Redirect to dashboard or login
                window.location.href = '/dashboard';
                
            } catch (error) {
                console.error('Signup error:', error);
                alert('Failed to create account. Please try again.');
            } finally {
                signupBtn.classList.remove('loading');
                signupBtn.textContent = 'Create Account';
            }
        });

        // Password toggle functionality
        function togglePassword(fieldId) {
            const field = document.getElementById(fieldId);
            const button = field.nextElementSibling.nextElementSibling;
            
            if (field.type === 'password') {
                field.type = 'text';
                button.textContent = '🙈';
            } else {
                field.type = 'password';
                button.textContent = '👁️';
            }
        }

        // Real-time validation
        const emailInput = document.getElementById('email');
        const passwordInput = document.getElementById('password');
        const confirmPasswordInput = document.getElementById('confirmPassword');

        emailInput.addEventListener('blur', validateEmail);
        passwordInput.addEventListener('input', validatePassword);
        confirmPasswordInput.addEventListener('input', validatePasswordMatch);

        function validateEmail() {
            const email = emailInput.value;
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            
            if (email && !emailRegex.test(email)) {
                emailInput.style.borderColor = '#ff6b6b';
            } else {
                emailInput.style.borderColor = 'rgba(255, 255, 255, 0.2)';
            }
        }

        function validatePassword() {
            const password = passwordInput.value;
            
            if (password.length > 0 && password.length < 8) {
                passwordInput.style.borderColor = '#ff6b6b';
            } else {
                passwordInput.style.borderColor = 'rgba(255, 255, 255, 0.2)';
            }
        }

        function validatePasswordMatch() {
            const password = passwordInput.value;
            const confirmPassword = confirmPasswordInput.value;
            
            if (confirmPassword && password !== confirmPassword) {
                confirmPasswordInput.style.borderColor = '#ff6b6b';
            } else {
                confirmPasswordInput.style.borderColor = 'rgba(255, 255, 255, 0.2)';
            }
        }

        // Add focus animations
        const inputs = document.querySelectorAll('input');
        inputs.forEach(input => {
            input.addEventListener('focus', () => {
                input.parentElement.style.transform = 'scale(1.02)';
            });
            
            input.addEventListener('blur', () => {
                input.parentElement.style.transform = 'scale(1)';
            });
        });
    </script> -->
</body>
</html>