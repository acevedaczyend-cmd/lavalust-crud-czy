<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Management</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-pink-50 min-h-screen font-sans">
    <nav class="bg-white border-b border-pink-100 shadow-sm">
        <div class="max-w-6xl mx-auto px-4 py-4 flex justify-between items-center">
            <h1 class="text-xl font-bold text-pink-600 flex items-center gap-2">
                🌸 Product Manager
            </h1>
            <a href="<?php echo site_url('logout'); ?>" onclick="return confirm('Are you sure you want to log out?');" class="bg-pink-100 hover:bg-pink-200 text-pink-700 px-4 py-2 rounded-xl text-sm font-medium transition">
                Logout
            </a>
        </div>
    </nav>

    <div class="max-w-6xl mx-auto px-4 py-8">
        <div class="flex justify-between items-center mb-6">
            <div>
                <h2 class="text-2xl font-bold text-gray-800">Products</h2>
                <p class="text-gray-500 text-sm">Manage your product catalog</p>
            </div>
            <a href="<?php echo site_url('products/create'); ?>" class="bg-pink-500 hover:bg-pink-600 text-white font-semibold px-5 py-2.5 rounded-xl shadow-md shadow-pink-200 transition">
                + Add New Product
            </a>
        </div>

        <div class="bg-white rounded-2xl shadow-sm border border-pink-100 overflow-hidden">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="bg-pink-50/50 text-pink-700 text-sm border-b border-pink-100">
                        <th class="p-4">Product Name</th>
                        <th class="p-4">Description</th>
                        <th class="p-4">Price</th>
                        <th class="p-4">Quantity</th>
                        <th class="p-4 text-center">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-pink-50 text-gray-700 text-sm">
                    <?php if(!empty($products)): ?>
                        <?php foreach($products as $p): ?>
                            <tr class="hover:bg-pink-50/30 transition">
                                <td class="p-4 font-semibold text-gray-800"><?php echo htmlspecialchars($p['product_name']); ?></td>
                                <td class="p-4 text-gray-500"><?php echo htmlspecialchars($p['description']); ?></td>
                                <td class="p-4 font-medium text-pink-600">₱<?php echo number_format($p['price'], 2); ?></td>
                                <td class="p-4">
                                    <span class="bg-pink-100 text-pink-700 px-2.5 py-1 rounded-full text-xs font-semibold">
                                        <?php echo $p['quantity']; ?> pcs
                                    </span>
                                </td>
                                <td class="p-4 text-center space-x-2">
                                    <a href="<?php echo site_url('products/edit/' . $p['id']); ?>" class="text-pink-500 hover:text-pink-700 font-medium">Edit</a>
                                    <a href="<?php echo site_url('products/delete/' . $p['id']); ?>" onclick="return confirm('Delete this product?');" class="text-rose-400 hover:text-rose-600 font-medium">Delete</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="5" class="p-8 text-center text-gray-400">No products found. Click "Add New Product" to start!</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>