<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Workflow</title>
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
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
            overflow-x: hidden;
        }

        /* Animated background elements */
        .bg-shapes {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: 0;
        }

        .shape {
            position: absolute;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            animation: float 20s infinite ease-in-out;
        }

        .shape:nth-child(1) {
            width: 80px;
            height: 80px;
            top: 10%;
            left: 10%;
            animation-delay: 0s;
        }

        .shape:nth-child(2) {
            width: 120px;
            height: 120px;
            top: 20%;
            right: 10%;
            animation-delay: 5s;
        }

        .shape:nth-child(3) {
            width: 60px;
            height: 60px;
            bottom: 20%;
            left: 20%;
            animation-delay: 10s;
        }

        .shape:nth-child(4) {
            width: 100px;
            height: 100px;
            bottom: 10%;
            right: 20%;
            animation-delay: 15s;
        }

        @keyframes float {

            0%,
            100% {
                transform: translateY(0px) rotate(0deg);
                opacity: 0.5;
            }

            50% {
                transform: translateY(-20px) rotate(180deg);
                opacity: 0.8;
            }
        }

        /* Main container */
        .register-container {
            position: relative;
            z-index: 1;
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border-radius: 24px;
            box-shadow: 0 20px 80px rgba(0, 0, 0, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.2);
            padding: 48px;
            width: 100%;
            max-width: 480px;
            animation: slideUp 0.8s ease-out;
        }

        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(60px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Header */
        .register-header {
            text-align: center;
            margin-bottom: 40px;
        }

        .logo {
            font-size: 32px;
            font-weight: 700;
            background: linear-gradient(135deg, #007AFF, #5856D6);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 16px;
        }

        .register-title {
            font-size: 28px;
            font-weight: 600;
            color: #1d1d1f;
            margin-bottom: 8px;
        }

        .register-subtitle {
            font-size: 16px;
            color: #6e6e73;
            font-weight: 400;
        }

        /* Form styles */
        .register-form {
            display: flex;
            flex-direction: column;
            gap: 24px;
        }

        .form-row {
            display: flex;
            gap: 16px;
        }

        .form-group {
            position: relative;
            flex: 1;
        }

        .form-input {
            width: 100%;
            padding: 16px 20px;
            border: 2px solid rgba(0, 0, 0, 0.1);
            border-radius: 12px;
            font-size: 16px;
            font-weight: 400;
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(10px);
            transition: all 0.3s ease;
            outline: none;
        }

        .form-input:focus {
            border-color: #007AFF;
            background: rgba(255, 255, 255, 0.95);
            box-shadow: 0 0 0 4px rgba(0, 122, 255, 0.1);
            transform: translateY(-2px);
        }

        .form-input::placeholder {
            color: #a1a1a6;
            font-weight: 400;
        }

        /* Floating labels */
        .form-label {
            position: absolute;
            left: 20px;
            top: 16px;
            color: #a1a1a6;
            font-size: 16px;
            font-weight: 400;
            pointer-events: none;
            transition: all 0.3s ease;
            background: rgba(255, 255, 255, 0.9);
            padding: 0 4px;
        }

        .form-input:focus+.form-label,
        .form-input:not(:placeholder-shown)+.form-label {
            top: -8px;
            font-size: 12px;
            color: #007AFF;
            font-weight: 500;
        }

        /* Password strength indicator */
        .password-strength {
            margin-top: 8px;
            height: 4px;
            background: rgba(0, 0, 0, 0.1);
            border-radius: 2px;
            overflow: hidden;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .password-strength.show {
            opacity: 1;
        }

        .strength-bar {
            height: 100%;
            border-radius: 2px;
            transition: all 0.3s ease;
            background: linear-gradient(90deg, #ff4757, #ffa502, #2ed573);
        }

        .strength-text {
            font-size: 12px;
            margin-top: 4px;
            font-weight: 500;
            transition: color 0.3s ease;
        }

        /* Checkbox styles */
        .checkbox-group {
            display: flex;
            align-items: flex-start;
            gap: 12px;
            margin: 8px 0;
        }

        .custom-checkbox {
            position: relative;
            width: 20px;
            height: 20px;
            flex-shrink: 0;
            margin-top: 2px;
        }

        .custom-checkbox input {
            position: absolute;
            opacity: 0;
            width: 100%;
            height: 100%;
            cursor: pointer;
        }

        .checkmark {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(255, 255, 255, 0.8);
            border: 2px solid rgba(0, 0, 0, 0.1);
            border-radius: 6px;
            transition: all 0.3s ease;
        }

        .custom-checkbox input:checked~.checkmark {
            background: linear-gradient(135deg, #007AFF, #5856D6);
            border-color: #007AFF;
        }

        .checkmark::after {
            content: '';
            position: absolute;
            display: none;
            left: 6px;
            top: 2px;
            width: 4px;
            height: 8px;
            border: solid white;
            border-width: 0 2px 2px 0;
            transform: rotate(45deg);
        }

        .custom-checkbox input:checked~.checkmark::after {
            display: block;
        }

        .checkbox-label {
            font-size: 14px;
            color: #6e6e73;
            line-height: 1.4;
        }

        .checkbox-label a {
            color: #007AFF;
            text-decoration: none;
            font-weight: 500;
        }

        .checkbox-label a:hover {
            text-decoration: underline;
        }

        /* Submit button */
        .submit-button {
            background: linear-gradient(135deg, #007AFF, #5856D6);
            color: white;
            padding: 18px 24px;
            border: none;
            border-radius: 12px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 8px 30px rgba(0, 122, 255, 0.3);
            margin-top: 8px;
            position: relative;
            overflow: hidden;
        }

        .submit-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 12px 40px rgba(0, 122, 255, 0.4);
        }

        .submit-button:active {
            transform: translateY(0);
        }

        .submit-button:disabled {
            opacity: 0.6;
            cursor: not-allowed;
            transform: none;
            box-shadow: 0 4px 20px rgba(0, 122, 255, 0.2);
        }

        /* Loading spinner */
        .spinner {
            display: none;
            width: 20px;
            height: 20px;
            border: 2px solid rgba(255, 255, 255, 0.3);
            border-radius: 50%;
            border-top-color: white;
            animation: spin 1s ease-in-out infinite;
            margin-right: 8px;
        }

        @keyframes spin {
            to {
                transform: rotate(360deg);
            }
        }

        .submit-button.loading .spinner {
            display: inline-block;
        }

        .submit-button.loading .button-text {
            opacity: 0.7;
        }

        /* Divider */
        .divider {
            position: relative;
            text-align: center;
            margin: 32px 0;
            color: #a1a1a6;
            font-size: 14px;
        }

        .divider::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 0;
            right: 0;
            height: 1px;
            background: rgba(0, 0, 0, 0.1);
        }

        .divider span {
            background: rgba(255, 255, 255, 0.9);
            padding: 0 16px;
        }

        /* Social buttons */
        .social-buttons {
            display: flex;
            gap: 12px;
            margin-bottom: 32px;
        }

        .social-button {
            flex: 1;
            padding: 14px;
            border: 2px solid rgba(0, 0, 0, 0.1);
            border-radius: 12px;
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(10px);
            cursor: pointer;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            font-size: 14px;
            font-weight: 500;
            color: #1d1d1f;
            text-decoration: none;
        }

        .social-button:hover {
            background: rgba(255, 255, 255, 0.95);
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
        }

        .social-icon {
            width: 20px;
            height: 20px;
            border-radius: 4px;
        }

        /* Footer */
        .register-footer {
            text-align: center;
            margin-top: 32px;
            padding-top: 24px;
            border-top: 1px solid rgba(0, 0, 0, 0.1);
        }

        .register-footer p {
            color: #6e6e73;
            font-size: 14px;
        }

        .register-footer a {
            color: #007AFF;
            text-decoration: none;
            font-weight: 500;
        }

        .register-footer a:hover {
            text-decoration: underline;
        }

        /* Responsive design */
        @media (max-width: 768px) {
            .register-container {
                padding: 32px 24px;
                margin: 20px;
                border-radius: 20px;
            }

            .form-row {
                flex-direction: column;
                gap: 24px;
            }

            .register-title {
                font-size: 24px;
            }

            .social-buttons {
                flex-direction: column;
            }
        }

        @media (max-width: 480px) {
            body {
                padding: 10px;
            }

            .register-container {
                padding: 24px 20px;
            }

            .logo {
                font-size: 28px;
            }

            .register-title {
                font-size: 22px;
            }
        }

        /* Error states */
        .form-input.error {
            border-color: #ff4757;
            background: rgba(255, 71, 87, 0.05);
        }

        .form-input.error:focus {
            box-shadow: 0 0 0 4px rgba(255, 71, 87, 0.1);
        }

        .error-message {
            color: #ff4757;
            font-size: 12px;
            margin-top: 4px;
            font-weight: 500;
            opacity: 0;
            transform: translateY(-10px);
            transition: all 0.3s ease;
        }

        .error-message.show {
            opacity: 1;
            transform: translateY(0);
        }

        /* Success states */
        .form-input.success {
            border-color: #2ed573;
            background: rgba(46, 213, 115, 0.05);
        }

        .success-icon {
            position: absolute;
            right: 16px;
            top: 50%;
            transform: translateY(-50%);
            color: #2ed573;
            font-size: 16px;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .form-input.success~.success-icon {
            opacity: 1;
        }
    </style>
</head>

<body>
    <div class="bg-shapes">
        <div class="shape"></div>
        <div class="shape"></div>
        <div class="shape"></div>
        <div class="shape"></div>
    </div>

    <div class="register-container">
        <div class="register-header">
            <div class="logo">Workflow</div>
            <h1 class="register-title">Create your account</h1>
            <p class="register-subtitle">Join thousands of teams already using Workflow</p>
        </div>

        <?php
        // 
            if (isset($_GET['acc'])&& $_GET['acc'] == "mismatched") {
                echo '<div style="padding: 1rem;border:1px solid red;border-radius:.3rem; color:red;margin:.2rem">
                Password does not match
            </div>';
            }

            if (isset($_GET['acc']) && $_GET['acc'] == "done") {
                echo '<div style="padding: 1rem;border:1px solid green;border-radius:.3rem; color:green;margin:.2rem">
                Account created successfully
            </div>';
            }



        ?>


        <div class="social-buttons">
            <a href="#" class="social-button">
                <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='%234285f4'%3E%3Cpath d='M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z'/%3E%3Cpath d='M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z' fill='%2334a853'/%3E%3Cpath d='M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z' fill='%23fbbc05'/%3E%3Cpath d='M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z' fill='%23ea4335'/%3E%3C/svg%3E" alt="Google" class="social-icon">
                Google
            </a>
            <a href="#" class="social-button">
                <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='%231877f2'%3E%3Cpath d='M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z'/%3E%3C/svg%3E" alt="Facebook" class="social-icon">
                Facebook
            </a>
        </div>

        <div class="divider">
            <span>or register with email</span>
        </div>

        <form class="register-form" id="registerForm" action="backend/auth/registerController.php" method="post">
            <div class="form-row">
                <div class="form-group">
                    <input type="text" class="form-input" id="firstName" placeholder=" " required name="first_name">
                    <label for="firstName" class="form-label">First Name</label>
                    <span class="success-icon">✓</span>
                    <div class="error-message">Please enter your first name</div>
                </div>
                <div class="form-group">
                    <input type="text" class="form-input" id="lastName" placeholder=" " required name="last_name">
                    <label for="lastName" class="form-label">Last Name</label>
                    <span class="success-icon">✓</span>
                    <div class="error-message">Please enter your last name</div>
                </div>
            </div>

            <div class="form-group">
                <input type="email" class="form-input" id="email" placeholder=" " required name="email_address">
                <label for="email" class="form-label">Email Address</label>
                <span class="success-icon">✓</span>
                <div class="error-message">Please enter a valid email address</div>
            </div>

            <div class="form-group">
                <input type="text" class="form-input" id="company" placeholder=" " name="company">
                <label for="company" class="form-label">Company Name</label>
                <span class="success-icon">✓</span>
            </div>

            <div class="form-group">
                <input type="password" class="form-input" id="password" placeholder=" " required name="password">
                <label for="password" class="form-label">Password</label>
                <span class="success-icon">✓</span>
                <div class="password-strength">
                    <div class="strength-bar"></div>
                </div>
                <div class="strength-text"></div>
                <div class="error-message">Password must be at least 8 characters</div>
            </div>

            <div class="form-group">
                <input type="password" class="form-input" id="confirmPassword" placeholder=" " required name="confirm_pass">
                <label for="confirmPassword" class="form-label">Confirm Password</label>
                <span class="success-icon">✓</span>
                <div class="error-message">Passwords do not match</div>
            </div>

            <div class="checkbox-group">
                <label class="custom-checkbox">
                    <input type="checkbox" id="terms" required>
                    <span class="checkmark"></span>
                </label>
                <label for="terms" class="checkbox-label">
                    I agree to the <a href="#">Terms of Service</a> and <a href="#">Privacy Policy</a>
                </label>
            </div>

            <div class="checkbox-group">
                <label class="custom-checkbox">
                    <input type="checkbox" id="newsletter">
                    <span class="checkmark"></span>
                </label>
                <label for="newsletter" class="checkbox-label">
                    Send me product updates and marketing emails
                </label>
            </div>

            <button type="submit" class="submit-button" id="submitBtn">
                <span class="spinner"></span>
                <span class="button-text">Create Account</span>
            </button>
        </form>

        <div class="register-footer">
            <p>Already have an account? <a href="login.php">Sign in</a></p>
        </div>
    </div>

    <!-- <script>
        // Form validation and interaction
        const form = document.getElementById('registerForm');
        const inputs = document.querySelectorAll('.form-input');
        const submitBtn = document.getElementById('submitBtn');
        const passwordInput = document.getElementById('password');
        const confirmPasswordInput = document.getElementById('confirmPassword');
        const passwordStrength = document.querySelector('.password-strength');
        const strengthBar = document.querySelector('.strength-bar');
        const strengthText = document.querySelector('.strength-text');

        // Real-time validation
        inputs.forEach(input => {
            input.addEventListener('input', () => validateField(input));
            input.addEventListener('blur', () => validateField(input));
        });

        function validateField(input) {
            const value = input.value.trim();
            const type = input.type;
            const id = input.id;
            let isValid = true;
            let errorMessage = '';

            // Remove previous states
            input.classList.remove('error', 'success');
            const errorEl = input.parentNode.querySelector('.error-message');
            errorEl.classList.remove('show');

            if (input.required && !value) {
                isValid = false;
                errorMessage = `Please enter your ${input.labels[0]?.textContent.toLowerCase() || 'information'}`;
            } else if (value) {
                switch (type) {
                    case 'email':
                        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                        if (!emailRegex.test(value)) {
                            isValid = false;
                            errorMessage = 'Please enter a valid email address';
                        }
                        break;
                    case 'password':
                        if (id === 'password') {
                            if (value.length < 8) {
                                isValid = false;
                                errorMessage = 'Password must be at least 8 characters';
                            }
                            updatePasswordStrength(value);
                        } else if (id === 'confirmPassword') {
                            if (value !== passwordInput.value) {
                                isValid = false;
                                errorMessage = 'Passwords do not match';
                            }
                        }
                        break;
                }
            }

            if (!isValid) {
                input.classList.add('error');
                errorEl.textContent = errorMessage;
                errorEl.classList.add('show');
            } else if (value) {
                input.classList.add('success');
            }

            return isValid;
        }

        // Password strength indicator
        function updatePasswordStrength(password) {
            if (password.length === 0) {
                passwordStrength.classList.remove('show');
                return;
            }

            passwordStrength.classList.add('show');

            let strength = 0;
            let strengthText = '';

            // Length check
            if (password.length >= 8) strength += 25;
            
            // Uppercase check
            if (/[A-Z]/.test(password)) strength += 25;
            
            // Lowercase check
            if (/[a-z]/.test(password)) strength += 25;
            
            // Number or special character check
            if (/[\d\W]/.test(password)) strength += 25;

            // Update strength bar
            strengthBar.style.width = `${strength}%`;

            // Update strength text and color
            if (strength < 50) {
                strengthText = 'Weak';
                strengthBar.style.background = '#ff4757';
                document.querySelector('.strength-text').style.color = '#ff4757';
            } else if (strength < 75) {
                strengthText = 'Medium';
                strengthBar.style.background = '#ffa502';
                document.querySelector('.strength-text').style.color = '#ffa502';
            } else {
                strengthText = 'Strong';
                strengthBar.style.background = '#2ed573';
                document.querySelector('.strength-text').style.color = '#2ed573';
            }

            document.querySelector('.strength-text').textContent = strengthText;
        }

        // Confirm password validation on password change
        passwordInput.addEventListener('input', () => {
            if (confirmPasswordInput.value) {
                validateField(confirmPasswordInput);
            }
        });

        // Form submission
        form.addEventListener('submit', async (e) => {
            e.preventDefault();

            // Validate all fields
            let allValid = true;
            inputs.forEach(input => {
                if (!validateField(input)) {
                    allValid = false;
                }
            });

            // Check terms checkbox
            const termsCheckbox = document.getElementById('terms');
            if (!termsCheckbox.checked) {
                allValid = false;
                // You could add error styling for the checkbox here
            }

            if (!allValid) {
                return;
            }

            // Show loading state
            submitBtn.classList.add('loading');
            submitBtn.disabled = true;

            // Simulate API call
            await new Promise(resolve => setTimeout(resolve, 2000));

            // Remove loading state
            submitBtn.classList.remove('loading');
            submitBtn.disabled = false;

            // Show success (in a real app, you'd redirect or show a success message)
            alert('Account created successfully! Welcome to Workflow.');
        });

        // Social button interactions
        document.querySelectorAll('.social-button').forEach(button => {
            button.addEventListener('click', (e) => {
                e.preventDefault();
                
                // Add loading state to clicked button
                button.style.opacity = '0.6';
                button.style.pointerEvents = 'none';
                
                setTimeout(() => {
                    button.style.opacity = '1';
                    button.style.pointerEvents = 'auto';
                    
                    const provider = button.textContent.trim();
                    alert(`${provider} registration coming soon!`);
                }, 1000);
            });
        });

        // Add ripple effect to buttons
        document.querySelectorAll('button, .social-button').forEach(button => {
            button.addEventListener('click', function(e) {
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

        // Smooth focus transitions
        inputs.forEach(input => {
            input.addEventListener('focus', () => {
                input.parentNode.style.transform = 'translateY(-2px)';
            });

            input.addEventListener('blur', () => {
                input.parentNode.style.transform = 'translateY(0)';
            });
        });
    </script> -->
</body>

</html>