<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - ThinkCode Admin</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body class="dashboard">
    <!-- Sidebar -->
    <aside class="sidebar">
        <div class="sidebar-logo">
            <h2 style="color: #4f46e5; font-size: 1.5rem;">ThinkCode</h2>
        </div>
        <ul class="sidebar-menu">
            <li><a href="#" class="active">📊 Dashboard</a></li>
            <li><a href="#">👥 Students</a></li>
            <li><a href="#">📚 Courses</a></li>
            <li><a href="#">👨‍🏫 Instructors</a></li>
            <li><a href="#">📝 Assignments</a></li>
            <li><a href="#">💰 Billing</a></li>
            <li><a href="#">📈 Analytics</a></li>
            <li><a href="#">⚙️ Settings</a></li>
            <li><a href="#">📞 Support</a></li>
            <li><a href="login.php">🚪 Logout</a></li>
        </ul>
    </aside>

    <!-- Main Content -->
    <main class="main-content">
        <!-- Dashboard Header -->
        <header class="dashboard-header" style="margin: -2rem -2rem 2rem -2rem;">
            <div class="container">
                <div class="dashboard-nav">
                    <div>
                        <h1 class="dashboard-title">Dashboard Overview</h1>
                        <p style="color: #718096; margin-top: 0.5rem;">Welcome back! Here's what's happening at your institution.</p>
                    </div>
                    <div class="user-info">
                        <span style="color: #4a5568;">John Admin</span>
                        <div class="user-avatar">JA</div>
                    </div>
                </div>
            </div>
        </header>

        <!-- Stats Grid -->
        <div class="stats-grid">
            <div class="stat-card fade-in-up">
                <div class="stat-title">Total Students</div>
                <div class="stat-value">1,247</div>
                <div class="stat-change">+12% from last month</div>
            </div>
            <div class="stat-card fade-in-up">
                <div class="stat-title">Active Courses</div>
                <div class="stat-value">43</div>
                <div class="stat-change">+3 new courses</div>
            </div>
            <div class="stat-card fade-in-up">
                <div class="stat-title">Total Revenue</div>
                <div class="stat-value">$84,720</div>
                <div class="stat-change">+8% from last month</div>
            </div>
            <div class="stat-card fade-in-up">
                <div class="stat-title">Completion Rate</div>
                <div class="stat-value">87.5%</div>
                <div class="stat-change">+2.3% improvement</div>
            </div>
        </div>

        <!-- Content Cards -->
        <div style="display: grid; grid-template-columns: 2fr 1fr; gap: 2rem; margin-bottom: 2rem;">
            <!-- Recent Activity -->
            <div class="content-card fade-in-up">
                <div class="card-header">
                    <h3 class="card-title">Recent Activity</h3>
                </div>
                <div class="card-content">
                    <div>
                        <div style="display: flex; align-items: center; gap: 1rem; padding: 1rem 0; border-bottom: 1px solid #f1f5f9;">
                            <div style="width: 40px; height: 40px; background: #ddd6fe; border-radius: 50%; display: flex; align-items: center; justify-content: center;">👤</div>
                            <div style="flex: 1;">
                                <p style="font-weight: 500; margin-bottom: 0.25rem;">New student enrolled</p>
                                <p style="color: #718096; font-size: 0.9rem;">Sarah Johnson joined Web Development Course</p>
                            </div>
                            <span style="color: #718096; font-size: 0.8rem;">2 min ago</span>
                        </div>
                        <div style="display: flex; align-items: center; gap: 1rem; padding: 1rem 0; border-bottom: 1px solid #f1f5f9;">
                            <div style="width: 40px; height: 40px; background: #fed7d7; border-radius: 50%; display: flex; align-items: center; justify-content: center;">📚</div>
                            <div style="flex: 1;">
                                <p style="font-weight: 500; margin-bottom: 0.25rem;">Course completed</p>
                                <p style="color: #718096; font-size: 0.9rem;">Mark Davis finished React Fundamentals</p>
                            </div>
                            <span style="color: #718096; font-size: 0.8rem;">1 hour ago</span>
                        </div>
                        <div style="display: flex; align-items: center; gap: 1rem; padding: 1rem 0; border-bottom: 1px solid #f1f5f9;">
                            <div style="width: 40px; height: 40px; background: #c6f6d5; border-radius: 50%; display: flex; align-items: center; justify-content: center;">💰</div>
                            <div style="flex: 1;">
                                <p style="font-weight: 500; margin-bottom: 0.25rem;">Payment received</p>
                                <p style="color: #718096; font-size: 0.9rem;">$299 payment for Advanced JavaScript</p>
                            </div>
                            <span style="color: #718096; font-size: 0.8rem;">3 hours ago</span>
                        </div>
                        <div style="display: flex; align-items: center; gap: 1rem; padding: 1rem 0;">
                            <div style="width: 40px; height: 40px; background: #fef2c7; border-radius: 50%; display: flex; align-items: center; justify-content: center;">📝</div>
                            <div style="flex: 1;">
                                <p style="font-weight: 500; margin-bottom: 0.25rem;">Assignment submitted</p>
                                <p style="color: #718096; font-size: 0.9rem;">12 students submitted Project #3</p>
                            </div>
                            <span style="color: #718096; font-size: 0.8rem;">5 hours ago</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Quick Actions -->
            <div class="content-card fade-in-up">
                <div class="card-header">
                    <h3 class="card-title">Quick Actions</h3>
                </div>
                <div class="card-content">
                    <div style="display: flex; flex-direction: column; gap: 1rem;">
                        <button style="background: linear-gradient(135deg, #4f46e5 0%, #7c3aed 100%); color: white; border: none; padding: 12px; border-radius: 10px; cursor: pointer; font-weight: 500;">
                            + Add New Student
                        </button>
                        <button style="background: linear-gradient(135deg, #059669 0%, #047857 100%); color: white; border: none; padding: 12px; border-radius: 10px; cursor: pointer; font-weight: 500;">
                            📚 Create Course
                        </button>
                        <button style="background: linear-gradient(135deg, #dc2626 0%, #b91c1c 100%); color: white; border: none; padding: 12px; border-radius: 10px; cursor: pointer; font-weight: 500;">
                            📝 New Assignment
                        </button>
                        <button style="background: linear-gradient(135deg, #7c2d12 0%, #92400e 100%); color: white; border: none; padding: 12px; border-radius: 10px; cursor: pointer; font-weight: 500;">
                            📊 Generate Report
                        </button>
                        <button style="background: linear-gradient(135deg, #1e40af 0%, #1d4ed8 100%); color: white; border: none; padding: 12px; border-radius: 10px; cursor: pointer; font-weight: 500;">
                            💬 Send Announcement
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Additional Content -->
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 2rem;">
            <!-- Top Courses -->
            <div class="content-card fade-in-up">
                <div class="card-header">
                    <h3 class="card-title">Top Performing Courses</h3>
                </div>
                <div class="card-content">
                    <div>
                        <div style="display: flex; justify-content: space-between; align-items: center; padding: 0.75rem 0;">
                            <div>
                                <p style="font-weight: 500;">Web Development Bootcamp</p>
                                <p style="color: #718096; font-size: 0.9rem;">124 students • 4.9 rating</p>
                            </div>
                            <span style="background: #dcfce7; color: #166534; padding: 4px 8px; border-radius: 20px; font-size: 0.8rem;">95% completion</span>
                        </div>
                        <div style="display: flex; justify-content: space-between; align-items: center; padding: 0.75rem 0;">
                            <div>
                                <p style="font-weight: 500;">React Fundamentals</p>
                                <p style="color: #718096; font-size: 0.9rem;">89 students • 4.8 rating</p>
                            </div>
                            <span style="background: #dbeafe; color: #1e40af; padding: 4px 8px; border-radius: 20px; font-size: 0.8rem;">92% completion</span>
                        </div>
                        <div style="display: flex; justify-content: space-between; align-items: center; padding: 0.75rem 0;">
                            <div>
                                <p style="font-weight: 500;">JavaScript Advanced</p>
                                <p style="color: #718096; font-size: 0.9rem;">67 students • 4.7 rating</p>
                            </div>
                            <span style="background: #fef3c7; color: #92400e; padding: 4px 8px; border-radius: 20px; font-size: 0.8rem;">88% completion</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Recent Students -->
            <div class="content-card fade-in-up">
                <div class="card-header">
                    <h3 class="card-title">Recent Enrollments</h3>
                </div>
                <div class="card-content">
                    <div>
                        <div style="display: flex; align-items: center; gap: 1rem; padding: 0.75rem 0;">
                            <div style="width: 35px; height: 35px; background: linear-gradient(135deg, #4f46e5 0%, #7c3aed 100%); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-weight: 600; font-size: 0.9rem;">SJ</div>
                            <div style="flex: 1;">
                                <p style="font-weight: 500;">Sarah Johnson</p>
                                <p style="color: #718096; font-size: 0.8rem;">Web Development Bootcamp</p>
                            </div>
                            <span style="color: #059669; font-size: 0.8rem;">Active</span>
                        </div>
                        <div style="display: flex; align-items: center; gap: 1rem; padding: 0.75rem 0;">
                            <div style="width: 35px; height: 35px; background: linear-gradient(135deg, #059669 0%, #047857 100%); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-weight: 600; font-size: 0.9rem;">MD</div>
                            <div style="flex: 1;">
                                <p style="font-weight: 500;">Mark Davis</p>
                                <p style="color: #718096; font-size: 0.8rem;">React Fundamentals</p>
                            </div>
                            <span style="color: #dc2626; font-size: 0.8rem;">Completed</span>
                        </div>
                        <div style="display: flex; align-items: center; gap: 1rem; padding: 0.75rem 0;">
                            <div style="width: 35px; height: 35px; background: linear-gradient(135deg, #dc2626 0%, #b91c1c 100%); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-weight: 600; font-size: 0.9rem;">EB</div>
                            <div style="flex: 1;">
                                <p style="font-weight: 500;">Emily Brown</p>
                                <p style="color: #718096; font-size: 0.8rem;">JavaScript Advanced</p>
                            </div>
                            <span style="color: #d97706; font-size: 0.8rem;">In Progress</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script>
        // Animation for dashboard elements
        document.addEventListener('DOMContentLoaded', function() {
            const elements = document.querySelectorAll('.fade-in-up');
            
            elements.forEach((element, index) => {
                element.style.opacity = '0';
                element.style.transform = 'translateY(30px)';
                element.style.transition = 'all 0.6s ease-out';
                
                setTimeout(() => {
                    element.style.opacity = '1';
                    element.style.transform = 'translateY(0)';
                }, index * 100);
            });
        });

        // Sidebar menu active state
        const menuItems = document.querySelectorAll('.sidebar-menu a');
        menuItems.forEach(item => {
            item.addEventListener('click', function(e) {
                if (this.textContent.includes('Logout')) return;
                
                e.preventDefault();
                menuItems.forEach(menu => menu.classList.remove('active'));
                this.classList.add('active');
            });
        });

        // Quick action button animations
        const buttons = document.querySelectorAll('button');
        buttons.forEach(button => {
            button.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-2px)';
                this.style.boxShadow = '0 8px 25px rgba(0, 0, 0, 0.15)';
            });
            
            button.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0)';
                this.style.boxShadow = 'none';
            });
            
            button.addEventListener('click', function() {
                this.style.transform = 'scale(0.98)';
                setTimeout(() => {
                    this.style.transform = 'translateY(-2px)';
                }, 150);
            });
        });

        // Responsive sidebar toggle for mobile
        if (window.innerWidth <= 768) {
            const sidebar = document.querySelector('.sidebar');
            const mainContent = document.querySelector('.main-content');
            
            // Create mobile menu button
            const menuButton = document.createElement('button');
            menuButton.innerHTML = '☰';
            menuButton.style.cssText = `
                position: fixed;
                top: 20px;
                left: 20px;
                z-index: 1001;
                background: #4f46e5;
                color: white;
                border: none;
                padding: 10px 15px;
                border-radius: 5px;
                font-size: 1.2rem;
                cursor: pointer;
            `;
            
            document.body.appendChild(menuButton);
            
            menuButton.addEventListener('click', function() {
                if (sidebar.style.transform === 'translateX(0px)') {
                    sidebar.style.transform = 'translateX(-100%)';
                } else {
                    sidebar.style.transform = 'translateX(0px)';
                }
            });
        }
    </script>
</body>
</html>