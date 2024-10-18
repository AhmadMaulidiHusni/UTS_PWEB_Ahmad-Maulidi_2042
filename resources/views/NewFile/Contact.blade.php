@extends('Login\Layouts.app')

@section('title', 'Contact')

@section('content')
<h2 class="text-3xl mb-4"></h2>

<!-- This is an example component -->
<div class="max-w-2xl mx-auto">

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <div class="p-4">
            <label for="table-search" class="sr-only">Search</label>
            <div class="relative mt-1">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                            clip-rule="evenodd"></path>
                    </svg>
                </div>
                <input type="text" id="table-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-80 pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search for employees">
            </div>
        </div>
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-[#ADD8E6] text-white">
                <tr>
                    <th scope="col" class="p-4">
                        <div class="flex items-center">
                            <input id="checkbox-all-search" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="checkbox-all-search" class="sr-only">checkbox</label>
                        </div>
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Nama Karyawan
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Jabatan
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Tahun Masuk
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Tahun Pensiun
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <span class="sr-only">Edit</span>
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php 
                // Dummy data
                $employees = [
                    ['nama' => 'John Doe', 'jabatan' => 'Manager', 'tahun_masuk' => '2005', 'tahun_pensiun' => '2030'],
                    ['nama' => 'Jane Smith', 'jabatan' => 'HR Specialist', 'tahun_masuk' => '2010', 'tahun_pensiun' => '2040'],
                    ['nama' => 'Michael Johnson', 'jabatan' => 'Developer', 'tahun_masuk' => '2012', 'tahun_pensiun' => '2042']
                ];

                // Looping 10 times
                for ($i = 1; $i <= 10; $i++) {
                    // Pilih karyawan secara acak dari array dummy
                    $employee = $employees[array_rand($employees)];
                ?>
                <tr class="bg-[#ADD8E6] border-b hover:bg-blue-200 dark:hover:bg-gray-600 text-black">
                    <td class="w-4 p-4">
                        <div class="flex items-center">
                            <input id="checkbox-table-search-<?php echo $i; ?>" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="checkbox-table-search-<?php echo $i; ?>" class="sr-only">checkbox</label>
                        </div>
                    </td>
                    <th scope="row" class="px-6 py-4 font-medium text-black whitespace-nowrap">
                        <?php echo $employee['nama']; ?>
                    </th>
                    <td class="px-6 py-4">
                        <?php echo $employee['jabatan']; ?>
                    </td>
                    <td class="px-6 py-4">
                        <?php echo $employee['tahun_masuk']; ?>
                    </td>
                    <td class="px-6 py-4">
                        <?php echo $employee['tahun_pensiun']; ?>
                    </td>
                    <td class="px-6 py-4 text-right">
                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                    </td>
                </tr>
                <?php 
                } 
                ?>
            </tbody>

        </table>
    </div>

    <p class="mt-5">This table component is part of a larger, open-source library of Tailwind CSS components.
        Learn
        more
        by going to the official <a class="text-blue-600 hover:underline"
            href="https://flowbite.com/docs/getting-started/introduction/" target="_blank">Flowbite
            Documentation</a>.
    </p>
    <script src="https://unpkg.com/flowbite@1.3.4/dist/flowbite.js"></script>
</div>

@endsection
