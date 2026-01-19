<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Epic Event Sidebar</title>
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
    </style>
</head>
<body class="bg-gray-100">
    <button id="mobileMenuBtn" class="lg:hidden fixed top-4 left-4 z-50 bg-orange-500 text-white p-3 rounded-lg shadow-lg">
        <i class="fas fa-bars text-xl"></i>
    </button>
    <div id="overlay" class="fixed inset-0 bg-black bg-opacity-50 z-30 hidden lg:hidden"></div>
    <aside id="sidebar" class="fixed top-0 left-0 h-screen bg-gradient-to-b from-orange-500 to-orange-600 sidebar-transition z-40 shadow-2xl -translate-x-full lg:translate-x-0" style="width: 280px;">
        <div class="bg-black px-6 py-5 flex items-center justify-between">
            <div class="flex items-center gap-3">
                <div class="w-10 h-10 flex items-center justify-center">
                    <img src="logo.png" alt="Logo" />
                </div>
                <span id="logoText" class="text-white text-2xl font-bold">Epic Event</span>
            </div>
            <button id="closeSidebarBtn" class="text-white hover:text-gray-300 hidden lg:block">
                <i class="fas fa-bars text-xl"></i>
            </button>
        </div>

        <!-- Navigation Menu -->
        <nav class="mt-8 px-4">
            <a href="#" class="flex items-center justify-between px-4 py-4 text-white menu-item-hover rounded-lg mb-2 group">
                <div class="flex items-center gap-4">
                    <i class="fas fa-home text-xl w-6"></i>
                    <span id="menuText1" class="text-lg font-medium">Dashboard</span>
                </div>
            </a>

            <!-- <a href="#" class="flex items-center justify-between px-4 py-4 text-white menu-item-hover rounded-lg mb-2 group">
                <div class="flex items-center gap-4">
                    <i class="fas fa-calendar-alt text-xl w-6"></i>
                    <span id="menuText2" class="text-lg font-medium">Schedule List</span>
                </div>
            </a>

            <a href="#" class="flex items-center justify-between px-4 py-4 text-white menu-item-hover rounded-lg mb-2 group">
                <div class="flex items-center gap-4">
                    <i class="fas fa-microphone text-xl w-6"></i>
                    <span id="menuText3" class="text-lg font-medium">Speaker List</span>
                </div>
            </a> -->

            <a href="#" class="flex items-center justify-between px-4 py-4 text-white menu-item-hover rounded-lg mb-2 group">
                <div class="flex items-center gap-4">
                    <i class="fas fa-calendar-check text-xl w-6"></i>
                    <span id="menuText5" class="text-lg font-medium">Event</span>
                </div>
            </a>

            <a href="#" class="flex items-center justify-between px-4 py-4 text-white menu-item-hover rounded-lg mb-2 group">
                <div class="flex items-center gap-4">
                    <i class="fas fa-calendar text-xl w-6"></i>
                    <span id="menuText6" class="text-lg font-medium">Event Calendar</span>
                </div>
            </a>

            <a href="#" class="flex items-center justify-between px-4 py-4 text-white menu-item-hover rounded-lg mb-2 group">
                <div class="flex items-center gap-4">
                    <i class="fas fa-map-marker-alt text-xl w-6"></i>
                    <span id="menuText7" class="text-lg font-medium">Contact Form</span>
                </div>
            </a>

            <a href="#" class="flex items-center justify-between px-4 py-4 text-white menu-item-hover rounded-lg mb-2 group">
                <div class="flex items-center gap-4">
                    <i class="fas fa-user text-xl w-6"></i>
                    <span id="menuText8" class="text-lg font-medium">Profile</span>
                </div>
            </a>
            <a href="#" class="flex items-center justify-between px-4 py-4 text-white menu-item-hover rounded-lg mb-2 group">
                <div class="flex items-center gap-4">
                    <i class="fas fa-sign-out text-xl w-6"></i>
                    <span id="menuText9" class="text-lg font-medium">Logout</span>
                </div>
            </a>
        </nav>
    </aside>

    <!-- Main Content Area -->
    <main id="mainContent" class="lg:ml-[280px] transition-all duration-300 p-8">
        <div class="max-w-6xl mx-auto">
            <h1 class="text-3xl font-bold text-gray-800 mb-6">Welcome to Expovent</h1>
            <div class="bg-white rounded-lg shadow-md p-6">
                <p class="text-gray-600">Your content goes here. The sidebar is fully responsive and collapsible.</p>
            </div>
        </div>
    </main>

    <script>
        const sidebar = document.getElementById('sidebar');
        const mainContent = document.getElementById('mainContent');
        const closeSidebarBtn = document.getElementById('closeSidebarBtn');
        const mobileMenuBtn = document.getElementById('mobileMenuBtn');
        const overlay = document.getElementById('overlay');
        const logoText = document.getElementById('logoText');
        let isCollapsed = false;

        // Toggle sidebar on desktop/tablet
        closeSidebarBtn.addEventListener('click', () => {
            isCollapsed = !isCollapsed;
            
            if (isCollapsed) {
                sidebar.style.width = '80px';
                mainContent.classList.remove('lg:ml-[280px]');
                mainContent.classList.add('lg:ml-[80px]');
                closeSidebarBtn.querySelector('i').classList.add('rotate-180');
                logoText.classList.add('hidden');
                
                // Hide all text and chevrons
                for (let i = 1; i <= 8; i++) {
                    const text = document.getElementById(`menuText${i}`);
                    if (text) text.classList.add('hidden');
                }
                const chevron1 = document.getElementById('chevron1');
                const chevron5 = document.getElementById('chevron5');
                const chevron8 = document.getElementById('chevron8');
                if (chevron1) chevron1.classList.add('hidden');
                if (chevron5) chevron5.classList.add('hidden');
                if (chevron8) chevron8.classList.add('hidden');
            } else {
                sidebar.style.width = '280px';
                mainContent.classList.remove('lg:ml-[80px]');
                mainContent.classList.add('lg:ml-[280px]');
                closeSidebarBtn.querySelector('i').classList.remove('rotate-180');
                logoText.classList.remove('hidden');
                
                // Show all text and chevrons
                for (let i = 1; i <= 8; i++) {
                    const text = document.getElementById(`menuText${i}`);
                    if (text) text.classList.remove('hidden');
                }
                const chevron1 = document.getElementById('chevron1');
                const chevron5 = document.getElementById('chevron5');
                const chevron8 = document.getElementById('chevron8');
                if (chevron1) chevron1.classList.remove('hidden');
                if (chevron5) chevron5.classList.remove('hidden');
                if (chevron8) chevron8.classList.remove('hidden');
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