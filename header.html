<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Epic Event Header</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        .sidebar-transition {
            transition: width 0.3s ease-in-out;
        }
        .rotate-180 {
            transform: rotate(180deg);
        }
        .menu-item-hover:hover {
            background-color: rgba(0, 0, 0, 0.1);
        }
        .dropdown-enter {
            animation: slideDown 0.2s ease-out;
        }
        @keyframes slideDown {
            from {
                opacity: 0;
                transform: translateY(-10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>
<body class="bg-gray-100">
    <!-- Mobile Menu Button -->
    <button id="mobileMenuBtn" class="lg:hidden fixed top-4 left-4 z-50 bg-orange-500 text-white p-3 rounded-lg shadow-lg">
        <i class="fas fa-bars text-xl"></i>
    </button>

    <!-- Header -->
    <header class="fixed top-0 right-0 left-0 lg:left-[280px] bg-white shadow-md z-20 transition-all duration-300" id="mainHeader">
        <div class="flex items-center justify-between px-6 py-4">
            <!-- Left side - Page Title or Breadcrumb -->
            <div class="flex items-center gap-4">
                <h2 class="text-2xl font-bold text-gray-800">Dashboard</h2>
            </div>

            <!-- Right side - Dark Mode Toggle & Admin Profile -->
            <div class="flex items-center gap-6">
                <!-- Dark Mode Toggle -->
                <button id="darkModeToggle" class="text-gray-600 hover:text-orange-500 transition-colors">
                    <i class="fas fa-moon text-2xl"></i>
                </button>

                <!-- Admin Profile Dropdown -->
                <div class="relative">
                    <button id="profileDropdownBtn" class="flex items-center gap-3 hover:opacity-80 transition-opacity">
                        <div class="text-right hidden sm:block">
                            <p class="text-sm font-semibold text-gray-800">Admin User</p>
                            <p class="text-xs text-gray-500">Administrator</p>
                        </div>
                        <div class="w-10 h-10 rounded-full bg-orange-500 flex items-center justify-center text-white font-bold">
                            AU
                        </div>
                        <i class="fas fa-chevron-down text-gray-600 text-sm"></i>
                    </button>

                    <!-- Dropdown Menu -->
                    <div id="profileDropdown" class="absolute right-0 mt-2 w-56 bg-white rounded-lg shadow-xl border border-gray-200 hidden dropdown-enter">
                        <div class="p-4 border-b border-gray-200">
                            <p class="text-sm font-semibold text-gray-800">Admin User</p>
                            <p class="text-xs text-gray-500">admin@epicevent.com</p>
                        </div>
                        <div class="py-2">
                            <a href="#" class="flex items-center gap-3 px-4 py-3 hover:bg-gray-100 transition-colors">
                                <i class="fas fa-user text-gray-600"></i>
                                <span class="text-sm text-gray-700">My Profile</span>
                            </a>
                            <a href="#" class="flex items-center gap-3 px-4 py-3 hover:bg-gray-100 transition-colors">
                                <i class="fas fa-cog text-gray-600"></i>
                                <span class="text-sm text-gray-700">Settings</span>
                            </a>
                        </div>
                        <div class="border-t border-gray-200">
                            <a href="#" class="flex items-center gap-3 px-4 py-3 hover:bg-red-50 transition-colors text-red-600">
                                <i class="fas fa-sign-out-alt"></i>
                                <span class="text-sm font-medium">Logout</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content Area -->
    <main id="mainContent" class="lg:ml-[280px] transition-all duration-300 pt-24 p-8">
        <div class="max-w-6xl mx-auto">
            <h1 class="text-3xl font-bold text-gray-800 mb-6">Welcome to Epic Event</h1>
            <div class="bg-white rounded-lg shadow-md p-6">
                <p class="text-gray-600 mb-4">Your content goes here. The sidebar is fully responsive and collapsible.</p>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 mt-6">
                    <div class="bg-orange-50 border border-orange-200 rounded-lg p-6">
                        <div class="flex items-center justify-between mb-2">
                            <h3 class="text-lg font-semibold text-gray-800">Total Events</h3>
                            <i class="fas fa-calendar-check text-orange-500 text-2xl"></i>
                        </div>
                        <p class="text-3xl font-bold text-orange-600">24</p>
                    </div>
                    <div class="bg-blue-50 border border-blue-200 rounded-lg p-6">
                        <div class="flex items-center justify-between mb-2">
                            <h3 class="text-lg font-semibold text-gray-800">Upcoming</h3>
                            <i class="fas fa-calendar text-blue-500 text-2xl"></i>
                        </div>
                        <p class="text-3xl font-bold text-blue-600">12</p>
                    </div>
                    <div class="bg-green-50 border border-green-200 rounded-lg p-6">
                        <div class="flex items-center justify-between mb-2">
                            <h3 class="text-lg font-semibold text-gray-800">Completed</h3>
                            <i class="fas fa-check-circle text-green-500 text-2xl"></i>
                        </div>
                        <p class="text-3xl font-bold text-green-600">12</p>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script>
        const sidebar = document.getElementById('sidebar');
        const mainContent = document.getElementById('mainContent');
        const mainHeader = document.getElementById('mainHeader');
        const closeSidebarBtn = document.getElementById('closeSidebarBtn');
        const mobileMenuBtn = document.getElementById('mobileMenuBtn');
        const overlay = document.getElementById('overlay');
        const logoText = document.getElementById('logoText');
        const profileDropdownBtn = document.getElementById('profileDropdownBtn');
        const profileDropdown = document.getElementById('profileDropdown');
        const darkModeToggle = document.getElementById('darkModeToggle');
        let isCollapsed = false;

        // Profile Dropdown Toggle
        profileDropdownBtn.addEventListener('click', (e) => {
            e.stopPropagation();
            profileDropdown.classList.toggle('hidden');
        });

        // Close dropdown when clicking outside
        document.addEventListener('click', (e) => {
            if (!profileDropdownBtn.contains(e.target) && !profileDropdown.contains(e.target)) {
                profileDropdown.classList.add('hidden');
            }
        });

        // Dark Mode Toggle (placeholder functionality)
        darkModeToggle.addEventListener('click', () => {
            const icon = darkModeToggle.querySelector('i');
            if (icon.classList.contains('fa-moon')) {
                icon.classList.remove('fa-moon');
                icon.classList.add('fa-sun');
                // Add dark mode classes here
            } else {
                icon.classList.remove('fa-sun');
                icon.classList.add('fa-moon');
                // Remove dark mode classes here
            }
        });

        // Toggle sidebar on desktop/tablet
        closeSidebarBtn.addEventListener('click', () => {
            isCollapsed = !isCollapsed;
            
            if (isCollapsed) {
                sidebar.style.width = '80px';
                mainContent.classList.remove('lg:ml-[280px]');
                mainContent.classList.add('lg:ml-[80px]');
                mainHeader.classList.remove('lg:left-[280px]');
                mainHeader.classList.add('lg:left-[80px]');
                logoText.classList.add('hidden');
                
                // Hide all text
                for (let i = 1; i <= 9; i++) {
                    const text = document.getElementById(`menuText${i}`);
                    if (text) text.classList.add('hidden');
                }
            } else {
                sidebar.style.width = '280px';
                mainContent.classList.remove('lg:ml-[80px]');
                mainContent.classList.add('lg:ml-[280px]');
                mainHeader.classList.remove('lg:left-[80px]');
                mainHeader.classList.add('lg:left-[280px]');
                logoText.classList.remove('hidden');
                
                // Show all text
                for (let i = 1; i <= 9; i++) {
                    const text = document.getElementById(`menuText${i}`);
                    if (text) text.classList.remove('hidden');
                }
            }
        });

        // Mobile menu toggle
        mobileMenuBtn.addEventListener('click', () => {
            sidebar.classList.remove('-translate-x-full');
            overlay.classList.remove('hidden');
        });

        // Close mobile menu
        overlay.addEventListener('click', () => {
            sidebar.classList.add('-translate-x-full');
            overlay.classList.add('hidden');
        });

        // Close mobile menu when clicking a link
        const menuLinks = sidebar.querySelectorAll('a');
        menuLinks.forEach(link => {
            link.addEventListener('click', () => {
                if (window.innerWidth < 1024) {
                    sidebar.classList.add('-translate-x-full');
                    overlay.classList.add('hidden');
                }
            });
        });
    </script>
</body>
</html>