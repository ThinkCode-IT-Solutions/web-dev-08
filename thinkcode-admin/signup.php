<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up - ThinkCode Admin</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="auth-container">
        <div class="auth-card fade-in-up" style="max-width: 450px;">
            <div class="auth-header">
                <h1>Create Account</h1>
                <p>Join ThinkCode and start managing your institution</p>
            </div>
            
            <form action="backend/auth/SignupController.php" method="POST" id="signupForm">
                <div class="form-group">
                    <label for="fullName">Full Name</label>
                    <input type="text" id="fullName" name="fullName" class="form-input" placeholder="Enter your full name" required>
                </div>
                
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" id="email" name="email" class="form-input" placeholder="Enter your email" required>
                </div>
                
                <div class="form-group">
                    <label for="institution">Institution Name</label>
                    <input type="text" id="institution" name="institution" class="form-input" placeholder="Enter your institution name" required>
                </div>
                
                <div class="form-group">
                    <label for="role">Role</label>
                    <select id="role" name="role" class="form-input" required>
                        <option value="">Select your role</option>
                        <option value="admin" disabled>Administrator</option>
                        <option value="instructor">Instructor</option>
                        <option value="coordinator">Coordinator</option>
                        <option value="manager">Manager</option>
                        <option value="student">Student</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="pass" class="form-input" placeholder="Create a strong password" required>
                    <div id="passwordStrength" style="margin-top: 0.5rem; font-size: 0.8rem;"></div>
                </div>
                
                <div class="form-group">
                    <label for="confirmPassword">Confirm Password</label>
                    <input type="password" id="confirmPassword" name="confirmPass" class="form-input" placeholder="Confirm your password" required>
                    <div id="passwordMatch" style="margin-top: 0.5rem; font-size: 0.8rem;"></div>
                </div>
                
                <div class="form-group">
                    <label style="display: flex; align-items: center; gap: 0.5rem; cursor: pointer;">
                        <input type="checkbox" name="terms" required style="margin: 0;">
                        <span style="font-size: 0.9rem;">I agree to the <a href="#" style="color: #4f46e5;">Terms of Service</a> and <a href="#" style="color: #4f46e5;">Privacy Policy</a></span>
                    </label>
                </div>
                
                <button type="submit" class="auth-button" id="submitBtn">Create Account</button>
            </form>
            
            <div class="auth-link">
                <p>Already have an account? <a href="login.php">Sign in here</a></p>
            </div>
            
            <div style="text-align: center; margin-top: 2rem;">
                <a href="landing.php" style="color: #718096; text-decoration: none; font-size: 0.9rem;">← Back to Home</a>
            </div>
        </div>
    </div>


</body>
</html>