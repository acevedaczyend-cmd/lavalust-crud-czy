<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-pink-50 min-h-screen flex items-center justify-center font-sans py-10">
    <div class="bg-white p-8 rounded-2xl shadow-xl w-full max-w-lg border border-pink-100">
        <h2 class="text-2xl font-bold text-pink-600 mb-1">Add New Product</h2>
        <p class="text-gray-400 text-sm mb-6">Enter the product details below</p>

        <form action="<?php echo site_url('products/store'); ?>" method="POST" class="space-y-4">
            <div>
                <label class="block text-sm font-semibold text-gray-600 mb-1">Product Name</label>
                <input type="text" name="product_name" required class="w-full px-4 py-2 rounded-xl border border-pink-200 focus:outline-none focus:ring-2 focus:ring-pink-400">
            </div>

            <div>
                <label class="block text-sm font-semibold text-gray-600 mb-1">Description</label>
                <textarea name="description" rows="3" class="w-full px-4 py-2 rounded-xl border border-pink-200 focus:outline-none focus:ring-2 focus:ring-pink-400"></textarea>
            </div>

            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm font-semibold text-gray-600 mb-1">Price (₱)</label>
                    <input type="number" step="0.01" name="price" required class="w-full px-4 py-2 rounded-xl border border-pink-200 focus:outline-none focus:ring-2 focus:ring-pink-400">
                </div>
                <div>
                    <label class="block text-sm font-semibold text-gray-600 mb-1">Quantity</label>
                    <input type="number" name="quantity" required class="w-full px-4 py-2 rounded-xl border border-pink-200 focus:outline-none focus:ring-2 focus:ring-pink-400">
                </div>
            </div>

            <div class="flex gap-3 pt-4">
                <a href="<?php echo site_url('products'); ?>" class="w-1/2 bg-gray-100 text-gray-600 font-semibold py-2.5 rounded-xl text-center hover:bg-gray-200 transition">Cancel</a>
                <button type="submit" class="w-1/2 bg-pink-500 hover:bg-pink-600 text-white font-semibold py-2.5 rounded-xl shadow-md shadow-pink-200 transition">Save Product</button>
            </div>
        </form>
    </div>
</body>
</html>