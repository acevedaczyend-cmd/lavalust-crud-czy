<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Product System</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-pink-50 min-h-screen flex items-center justify-center font-sans">
    <div class="bg-white p-8 rounded-2xl shadow-xl w-full max-w-md border border-pink-100">
        <div class="text-center mb-6">
            <h1 class="text-3xl font-extrabold text-pink-600">Welcome Back! ✨</h1>
            <p class="text-pink-400 text-sm mt-1">Please sign in to manage your inventory</p>
        </div>

        <?php if(isset($error)): ?>
            <div class="bg-pink-100 border border-pink-300 text-pink-700 px-4 py-3 rounded-xl mb-4 text-sm text-center">
                <?php echo $error; ?>
            </div>
        <?php endif; ?>

        <form action="<?php echo site_url('login'); ?>" method="POST" class="space-y-4">
            <div>
                <label class="block text-sm font-semibold text-gray-600 mb-1">Username</label>
                <input type="text" name="username" required class="w-full px-4 py-2 rounded-xl border border-pink-200 focus:outline-none focus:ring-2 focus:ring-pink-400 focus:border-transparent transition">
            </div>
            <div>
                <label class="block text-sm font-semibold text-gray-600 mb-1">Password</label>
                <input type="password" name="password" required class="w-full px-4 py-2 rounded-xl border border-pink-200 focus:outline-none focus:ring-2 focus:ring-pink-400 focus:border-transparent transition">
            </div>
            <button type="submit" class="w-full bg-pink-500 hover:bg-pink-600 text-white font-bold py-2.5 rounded-xl transition duration-200 shadow-md shadow-pink-200">
                Sign In
            </button>
        </form>
    </div>
</body>
</html>