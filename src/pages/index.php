<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    include_once("../partials/header.php")
    ?>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');

        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>
<body class="bg-slate-600 h-screen flex items-center justify-center py-8">
    <main class="w-full max-w-[50%] h-full bg-slate-500 p-8 mx-auto rounded-xl border border-white shadow-lg">
        <!-- Site Name -->
        <div class="text-center">
            <h1 class="text-4xl font-bold text-white hover:text-slate-300 transition duration-300">Authentication System</h1>
        </div>

        <!-- Site Description -->
        <div class="text-center mt-4">
            <p class="text-lg text-slate-300 hover:text-white transition duration-300">
                This is a site based on my best idea of authentication for a user in any system. Sign up below to subscribe for updates on how this changes.
            </p>
        </div>

        <!-- Email Subscription Form -->
        <div class="mt-8 flex flex-col items-center">
            <input type="email" placeholder="Enter your email" class="w-full max-w-md p-3 text-slate-700 rounded-lg outline-none border border-slate-400 focus:border-slate-300 focus:ring focus:ring-slate-300 transition duration-300">
            <button class="mt-4 w-full max-w-md p-3 bg-white text-slate-600 font-semibold rounded-lg hover:bg-slate-300 hover:text-white transition duration-300">Subscribe for Updates</button>
        </div>
    </main>
</body>
</html>
