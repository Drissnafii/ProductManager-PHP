<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
       <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
   <link rel="stylesheet" href="./View/assets/css/style.css">
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

</head>
<body class="font-outfit bg-[#F5EFFF]">
    <div class="container mx-auto mt-8 p-4">
        <div class="bg-white shadow-md rounded-lg p-6 border border-gray-200 text-center mb-8">
            <div class="w-20 h-20 bg-[#CDC1FF] rounded-full inline-flex items-center justify-center mb-4 mx-auto">
                <i class="fas fa-user-circle text-7xl text-[#A294F9]"></i>
            </div>
            <h1 class="text-2xl font-semibold text-gray-800">Welcome, Driss !</h1>
              <p class="text-gray-600 text-sm">Email:</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="bg-white shadow-md rounded-lg p-6 border border-gray-200">
                <h2 class="text-xl font-semibold text-gray-800 mb-4">Browse Products</h2>
                <p class="text-gray-600 mb-4">
                    Check out our amazing products.
                </p>
                <a href="/products/index.php" class="
                    inline-block
                    bg-[#A294F9]
                    text-white
                    px-4
                   py-2
                    rounded-full
                    transition-colors
                    duration-300
                   hover:bg-[#8C7DF9]
                    focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-opacity-50
                   ">
                    View Products
                </a>
            </div>

            <div class="bg-white shadow-md rounded-lg p-6 border border-gray-200">
                <h2 class="text-xl font-semibold text-gray-800 mb-4">Your Orders</h2>
                <p class="text-gray-600 mb-4">
                    Check your order history.
                </p>
                <a href="/orders" class="
                  inline-block
                     bg-[#A294F9]
                    text-white
                   px-4
                    py-2
                    rounded-full
                    transition-colors
                   duration-300
                  hover:bg-[#8C7DF9]
                     focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-opacity-50
                   ">
                    View Orders
                </a>
            </div>
        </div>
          <div class="mt-8 border-t border-gray-200 pt-4 flex justify-center">
            <a href="/logout" class="
                bg-gray-300
                text-gray-700
                px-4
               py-2
               rounded-full
                transition-colors
               duration-300
                hover:bg-gray-400
            ">
              Logout
            </a>
          </div>
    </div>
</body>
</html>