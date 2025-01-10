<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
     <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<script src="https://cdn.tailwindcss.com"></script>
<script>
/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./src/**/*.{html,js}"],
  theme: {
    extend: {
       fontFamily:{
        'outfit' : ['Outfit', 'sans-serif'],
          'poppins': ['Poppins', 'sans-serif'],
        }
    },
  },
  plugins: [],
}
</script>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&family=Outfit:wght@100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
   <style>
        .dropdown-menu {
           opacity: 0;
           transform: translateY(-10px);
           visibility: hidden;
           transition: opacity 150ms ease-in-out, transform 150ms ease-in-out;
        }
        .dropdown-menu.active {
            opacity: 1;
           transform: translateY(0);
          visibility: visible;
        }
    </style>
</head>
<body class="font-outfit bg-[#F5EFFF]">
    <div class="container mx-auto p-6">
        <!-- Welcome Section -->
        <div class="mb-8">
            <div class="flex items-center justify-between">
                <div>
                    <h1 class="text-3xl font-bold text-gray-800">Welcome back, Admin! 👋</h1><br>
                    <!-- <p class="text-gray-600 mt-2">Here's what's happening with your store today.</p> -->
                </div>
                 <div class="flex items-center gap-4">
                    <button class="text-gray-600 hover:text-gray-800">
                       <svg class="w-6 h-6 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path>
                        </svg>
                   </button>
                    <div class="relative" id="profileDropdown">
                        <button class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-[#A294F9] text-white font-bold hover:bg-[#8C7DF9] transition-colors focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#A294F9] mb-5" id="profileButton">
                            A
                        </button>
                      <div class="dropdown-menu absolute right-0 mt-2 w-48 bg-white rounded-lg shadow-lg py-2 z-50 border border-gray-100">
                            <div class="px-4 py-3 border-b border-gray-100">
                                <p class="text-sm font-medium text-gray-900">Admin User</p>
                                <p class="text-sm text-gray-500 truncate">admin@example.com</p>
                            </div>
                            <a href="/profile" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 transition-colors">
                                <div class="flex items-center">
                                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                    </svg>
                                    Profile Settings
                                </div>
                            </a>
                            <a href="/settings" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 transition-colors">
                                 <div class="flex items-center">
                                   <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                   </svg>
                                    Account Settings
                                </div>
                           </a>
                            <div class="border-t border-gray-100"></div>
                            <form action="..">

                                <button class="block w-full text-left px-4 py-2 text-sm text-red-600 hover:bg-red-50 transition-colors">
                                    <div class="flex items-center">
                                       <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                                       </svg>
                                       Logout
                                     </div>
                               </button>
                            </form>
                      </div>
                   </div>
              </div>
        </div>
         <!-- Quick Stats -->
       <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
            <div class="bg-white rounded-xl p-6 shadow-sm hover:shadow-md transition-shadow">
                <div class="flex items-center gap-4">
                    <div class="p-3 bg-[#A294F9]/10 rounded-lg">
                         <svg class="w-6 h-6 text-[#A294F9]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                        </svg>
                   </div>
                    <div>
                         <p class="text-sm text-gray-600">Today's Orders</p>
                        <p class="text-2xl font-bold text-gray-800">12</p>
                    </div>
                </div>
            </div>
            <div class="bg-white rounded-xl p-6 shadow-sm hover:shadow-md transition-shadow">
                <div class="flex items-center gap-4">
                    <div class="p-3 bg-[#A294F9]/10 rounded-lg">
                         <svg class="w-6 h-6 text-[#A294F9]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                    </div>
                     <div>
                        <p class="text-sm text-gray-600">Active Clients</p>
                        <p class="text-2xl font-bold text-gray-800">847</p>
                    </div>
                </div>
            </div>
            <div class="bg-white rounded-xl p-6 shadow-sm hover:shadow-md transition-shadow">
                <div class="flex items-center gap-4">
                    <div class="p-3 bg-[#A294F9]/10 rounded-lg">
                        <svg class="w-6 h-6 text-[#A294F9]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                   </div>
                    <div>
                        <p class="text-sm text-gray-600">Monthly Revenue</p>
                         <p class="text-2xl font-bold text-gray-800">$24,502</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-8">
            <div class="bg-white rounded-xl p-6 shadow-sm hover:shadow-md transition-shadow">
                <div class="flex items-center justify-between mb-4">
                    <h2 class="text-xl font-semibold text-gray-800">Product Management</h2>
                  <span class="text-xs font-medium text-[#A294F9] bg-[#A294F9]/10 px-2 py-1 rounded-full">12 new items</span>
                </div>
                <p class="text-gray-600 mb-6">Manage your product catalog, update inventory, and set pricing.</p>
                 <div class="flex gap-4">
                    <a href="./products/index.php" class="flex-1 inline-flex justify-center items-center px-4 py-2 bg-[#A294F9] text-white rounded-lg hover:bg-[#8C7DF9] transition-colors">
                        View Products
                    </a>
                    <a href="./products/creatProduct.php" class="flex-1 inline-flex justify-center items-center px-4 py-2 bg-gray-100 text-gray-700 rounded-lg hover:bg-gray-200 transition-colors">
                        Add New
                    </a>
                </div>
           </div>

            <div class="bg-white rounded-xl p-6 shadow-sm hover:shadow-md transition-shadow">
                <div class="flex items-center justify-between mb-4">
                    <h2 class="text-xl font-semibold text-gray-800">Client Management</h2>
                   <span class="text-xs font-medium text-green-600 bg-green-100 px-2 py-1 rounded-full">3 new today</span>
                </div>
                <p class="text-gray-600 mb-6">Manage client accounts, view profiles, and handle support requests.</p>
                <a href="./UserManagement.php" class="block text-center px-4 py-2 bg-[#A294F9] text-white rounded-lg hover:bg-[#8C7DF9] transition-colors">
                    View Clients
                </a>
            </div>

            <div class="bg-white rounded-xl p-6 shadow-sm hover:shadow-md transition-shadow">
                <div class="flex items-center justify-between mb-4">
                   <h2 class="text-xl font-semibold text-gray-800">Order Management</h2>
                     <span class="text-xs font-medium text-orange-600 bg-orange-100 px-2 py-1 rounded-full">5 pending</span>
                </div>
                 <p class="text-gray-600 mb-6">Track orders, manage fulfillment, and handle customer requests.</p>
               <a href="/admin/orders" class="block text-center px-4 py-2 bg-[#A294F9] text-white rounded-lg hover:bg-[#8C7DF9] transition-colors">
                     View Orders
                </a>
            </div>
        </div>

        <!-- Statistics -->
       <div class="bg-white rounded-xl p-6 shadow-sm hover:shadow-md transition-shadow">
            <div class="flex items-center justify-between mb-6">
                <h2 class="text-xl font-semibold text-gray-800">Monthly Orders Statistics</h2>
               <select class="bg-gray-100 text-gray-700 px-3 py-1 rounded-lg">
                    <option>Last 6 months</option>
                    <option>Last year</option>
                 </select>
            </div>
             <div class="overflow-x-auto">
                <table class="w-full">
                    <thead>
                        <tr class="text-left">
                            <th class="pb-4 text-gray-600 font-medium">Month</th>
                            <th class="pb-4 text-gray-600 font-medium">Orders</th>
                            <th class="pb-4 text-gray-600 font-medium">Growth</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-600">
                        <tr class="border-t">
                            <td class="py-4">January</td>
                            <td class="py-4">20</td>
                            <td class="py-4 text-green-600">+15%</td>
                         </tr>
                         <tr class="border-t">
                            <td class="py-4">February</td>
                            <td class="py-4">30</td>
                            <td class="py-4 text-green-600">+50%</td>
                        </tr>
                         <tr class="border-t">
                            <td class="py-4">March</td>
                            <td class="py-4">20</td>
                             <td class="py-4 text-red-600">-33%</td>
                        </tr>
                        <tr class="border-t">
                             <td class="py-4">April</td>
                             <td class="py-4">15</td>
                             <td class="py-4 text-red-600">-25%</td>
                        </tr>
                         <tr class="border-t">
                            <td class="py-4">May</td>
                            <td class="py-4">5</td>
                           <td class="py-4 text-red-600">-67%</td>
                         </tr>
                        <tr class="border-t">
                            <td class="py-4">June</td>
                            <td class="py-4">10</td>
                            <td class="py-4 text-green-600">+100%</td>
                        </tr>
                    </tbody>
                </table>
            </div>
       </div>

        <!-- Footer -->
        <div class="mt-8 flex justify-center">
    <button  class="
        px-6
        py-2
        bg-white
        text-gray-700
        rounded-full
        border
        border-gray-300
        hover:bg-[#EE9595]
        transition-colors
        flex
        items-center
        gap-2
    ">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
           <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
        </svg>
        Logout
    </button>
</div>
    </div>

        <script>
        // Profile Dropdown Functionality
         const profileButton = document.getElementById('profileButton');
        const profileDropdown = document.getElementById('profileDropdown');
         const dropdownMenu = profileDropdown.querySelector('.dropdown-menu');

        // Toggle dropdown
        profileButton.addEventListener('click', (e) => {
            e.stopPropagation();
            dropdownMenu.classList.toggle('active');
        });

        // Close dropdown when clicking outside
        document.addEventListener('click', (e) => {
            if (!profileDropdown.contains(e.target)) {
                dropdownMenu.classList.remove('active');
            }
        });

        // Escape key closes dropdown
        document.addEventListener('keydown', (e) => {
           if (e.key === 'Escape') {
                dropdownMenu.classList.remove('active');
           }
       });
         // Handle logout with confirmation
      function handleLogout() {
            if (confirm('Are you sure you want to logout?')) {
                // Show loading state
                const logoutButton = event.currentTarget;
                 const originalContent = logoutButton.innerHTML;
                logoutButton.innerHTML = `
                   <div class="flex items-center">
                        <svg class="animate-spin h-4 w-4 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                        </svg>
                         Logging out...
                    </div>
              `;
           }
      }
    </script>
</body>
</html>