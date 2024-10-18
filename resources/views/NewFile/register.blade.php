<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <script src="https://cdn.tailwindcss.com"></script> 
</head>
<body class="bg-[#ADD8E6]">
    <div class="flex justify-center items-center h-screen">
        <div class="w-full max-w-md">
            <form  class="bg-white rounded-lg shadow-lg p-8">
                <h2 class="text-2xl font-bold text-center text-gray-800 mb-6">Register New Account</h2>
                
                <!-- Nama Karyawan -->
                <div class="mb-4">
                    <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Isi Nama Anda Boss</label>
                    <input type="text" id="name" name="name" required class="w-full p-3 border rounded-md focus:outline-none focus:ring focus:border-blue-500">
                </div>

                <!-- Jabatan -->
                <div class="mb-4">
                    <label for="position" class="block text-sm font-medium text-gray-700 mb-1">Jabatan</label>
                    <input type="text" id="position" name="position" required class="w-full p-3 border rounded-md focus:outline-none focus:ring focus:border-blue-500">
                </div>

                <!-- Tahun Masuk -->
                <div class="mb-4">
                    <label for="start_year" class="block text-sm font-medium text-gray-700 mb-1">Tahun Masuk</label>
                    <input type="number" id="start_year" name="start_year" required class="w-full p-3 border rounded-md focus:outline-none focus:ring focus:border-blue-500">
                </div>

                <!-- Tahun Pensiun -->
                <div class="mb-4">
                    <label for="retirement_year" class="block text-sm font-medium text-gray-700 mb-1">Tahun Pensiun</label>
                    <input type="number" id="retirement_year" name="retirement_year" required class="w-full p-3 border rounded-md focus:outline-none focus:ring focus:border-blue-500">
                </div>

                <!-- Submit Button -->
                <button type="submit" class="w-full bg-indigo-600 text-white py-3 rounded-md hover:bg-indigo-700 transition-all duration-300">Register</button>
            </form>
        </div>
    </div>
</body>
</html>
