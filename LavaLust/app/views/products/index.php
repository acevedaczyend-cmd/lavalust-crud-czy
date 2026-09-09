<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Management - Czyen</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-pink-50 min-h-screen p-6">
    <div class="max-w-5xl mx-auto bg-white rounded-2xl shadow-xl border border-pink-100 p-8">
        
        <!-- Header -->
        <div class="flex justify-between items-center mb-6">
            <div>
                <h1 class="text-3xl font-bold text-pink-600">Product List</h1>
                <p class="text-gray-500 text-sm">Manage Czyen's inventory</p>
            </div>
            <a href="<?= site_url('products/create'); ?>" class="bg-pink-500 hover:bg-pink-600 text-white px-5 py-2.5 rounded-xl font-medium transition shadow-md hover:shadow-pink-200">
                + Add Product
            </a>
        </div>

        <!-- Table -->
        <div class="overflow-x-auto rounded-xl border border-pink-100">
            <table class="w-full text-left text-sm text-gray-600">
                <thead class="bg-pink-100/70 text-pink-700 uppercase font-semibold text-xs">
                    <tr>
                        <th class="py-3 px-4">Product Name</th>
                        <th class="py-3 px-4">Description</th>
                        <th class="py-3 px-4">Price</th>
                        <th class="py-3 px-4">Quantity</th>
                        <th class="py-3 px-4 text-center">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-pink-50">
                    <?php if(!empty($products)): ?>
                        <?php foreach($products as $p): ?>
                            <tr class="hover:bg-pink-50/50 transition">
                                <td class="py-3 px-4 font-medium text-gray-800"><?= html_escape($p['product_name']); ?></td>
                                <td class="py-3 px-4"><?= html_escape($p['description']); ?></td>
                                <td class="py-3 px-4 font-semibold text-pink-600">₱<?= number_format($p['price'], 2); ?></td>
                                <td class="py-3 px-4"><?= html_escape($p['quantity']); ?></td>
                                <td class="py-3 px-4 text-center space-x-2">
                                    <a href="<?= site_url('products/edit/'.$p['id']); ?>" class="text-pink-600 hover:text-pink-800 font-medium">Edit</a>
                                    <a href="<?= site_url('products/delete/'.$p['id']); ?>" onclick="return confirm('Sigurado ka bang buburahin ito?')" class="text-red-500 hover:text-red-700 font-medium">Delete</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="5" class="py-6 text-center text-gray-400">Walang laman ang products table. Mag-add ng bago!</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>

    </div>
</body>
</html>