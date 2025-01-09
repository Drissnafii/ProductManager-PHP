<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
   <link rel="stylesheet" href="../../assets/css/style.css">
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
     <div class="flex justify-between items-center mb-4">
          <h1 class="text-3xl font-bold text-gray-800">Product List</h1>
             <a href="/admin/products/create" class="
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
              Add New Product
            </a>
        </div>
    <div class="bg-white shadow-md rounded-lg overflow-x-auto">
        <table class="w-full table-auto">
            <thead class="bg-gray-100 text-gray-700">
                <tr>
                    <th class="px-4 py-2 text-left">ID</th>
                    <th class="px-4 py-2 text-left">Name</th>
                    <th class="px-4 py-2 text-left">Description</th>
                    <th class="px-4 py-2 text-left">Price</th>
                    <th class="px-4 py-2 text-left">Image</th>
                    <th class="px-4 py-2 text-left">Actions</th>
                </tr>
            </thead>
            <tbody class="text-gray-600">
                        <tr>
                            <td class="border px-4 py-2"></td>
                            <td class="border px-4 py-2"></td>
                            <td class="border px-4 py-2"></td>
                           <td class="border px-4 py-2"></td>
                                   <td class="border px-4 py-2">
                                       No Image
                                  </td>
                            <td class="border px-4 py-2 flex gap-2">
                                <a href="/admin/products/edit" class="text-blue-500 hover:text-blue-700">Edit</a>
                                <a href="/admin/products/delete" class="text-red-500 hover:text-red-700">Delete</a>
                            </td>
                        </tr>
                    <tr>
                       <td colspan="6" class="border px-4 py-2 text-center">No Products found</td>
                 </tr>
            </tbody>
        </table>
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