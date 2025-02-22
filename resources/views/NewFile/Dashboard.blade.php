<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script> 
</head>
<body>
    <div class="h-screen flex">
        <!-- Left Section with Image -->
        <div class="hidden lg:flex w-full lg:w-1/2 login_img_section justify-around items-center">
            <div class="bg-black opacity-20 inset-0 z-0"></div>
            <div class="w-full mx-auto px-20 flex-col items-center space-y-6">
                <h1 class="text-white font-bold text-4xl font-sans">Empployee Data</h1>
                <p class="text-white mt-1">Website monitoring data karyawan</p>
            </div>
        </div>

        <!-- Right Section with Login Form -->
        <div class="flex w-full lg:w-1/2 justify-center items-center bg-[#ADD8E6]">
            <div class="w-full px-8 md:px-32 lg:px-24">
                <form action="{{ route('NewFile.Contact')}}" method="get" class="bg-white rounded-md shadow-2xl p-5">
                    <h1 class="text-gray-800 font-bold text-2xl mb-1">Halo Boss!!</h1>
                    <p class="text-sm font-normal text-gray-600 mb-8">Welcome Back</p>

                    <!-- Email Input -->
                    <div class="flex items-center border-2 mb-8 py-2 px-3 rounded-2xl">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
                        </svg>
                        <input id="email" class="pl-2 w-full outline-none border-none" type="email" name="email" placeholder="Email Address" />
                    </div>

                    <!-- Password Input -->
                    <div class="flex items-center border-2 mb-12 py-2 px-3 rounded-2xl">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
                        </svg>
                        <input id="password" class="pl-2 w-full outline-none border-none" type="password" name="password" placeholder="Password" />
                    </div>

                    <!-- Login Button -->
                    <button type="submit" class="block w-full bg-indigo-600 mt-5 py-2 rounded-2xl hover:bg-indigo-700 hover:-translate-y-1 transition-all duration-500 text-white font-semibold mb-2">Login</button>

                    <!-- Links -->
                    <div class="flex justify-between mt-4">
                        <span class="text-sm ml-2 hover:text-blue-500 cursor-pointer hover:-translate-y-1 transition-all duration-500">Forgot Password?</span>
                        <a href="{{ route('NewFile.register')}}" method="get" class="text-sm ml-2 hover:text-blue-500 cursor-pointer hover:-translate-y-1 transition-all duration-500">Don't have an account yet?</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <style>
        .login_img_section {
            background: linear-gradient(rgba(2, 2, 2, .7), rgba(0, 0, 0, .7)),
            url('https://files.oaiusercontent.com/file-86ctMubeHBebcXVnBjedqhm5?se=2024-10-18T10%3A46%3A06Z&sp=r&sv=2024-08-04&sr=b&rscc=max-age%3D604800%2C%20immutable%2C%20private&rscd=attachment%3B%20filename%3Dc2641af4-3643-4a1f-94c8-b130e0a88e59.webp&sig=g%2BW/NxxlZAa7QKviXrdEB1qVtXjXtgI1b/ej4%2BKpM3A%3D') center center;
            background-size: cover;
        }
    </style>
</body>
</html>
