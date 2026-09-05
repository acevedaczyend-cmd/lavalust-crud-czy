<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Directory - Laboratory Activity No. 4</title>
    <!-- Google Font & Font Awesome Icons -->
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        :root {
            --primary: #4f46e5;
            --primary-hover: #4338ca;
            --bg-body: #0f172a;
            --card-bg: #1e293b;
            --text-main: #f8fafc;
            --text-muted: #94a3b8;
            --border-color: #334155;
            --badge-bg: rgba(79, 70, 229, 0.15);
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: 'Plus Jakarta Sans', sans-serif;
        }

        body {
            background-color: var(--bg-body);
            color: var(--text-main);
            min-height: 100vh;
            padding: 40px 20px;
            display: flex;
            justify-content: center;
            align-items: flex-start;
        }

        .container {
            width: 100%;
            max-width: 1050px;
            background: var(--card-bg);
            border-radius: 16px;
            border: 1px solid var(--border-color);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.3);
            overflow: hidden;
        }

        /* Header Section */
        .card-header {
            padding: 24px 32px;
            border-bottom: 1px solid var(--border-color);
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 16px;
        }

        .header-title h2 {
            font-size: 1.5rem;
            font-weight: 700;
            letter-spacing: -0.02em;
        }

        .header-title p {
            color: var(--text-muted);
            font-size: 0.875rem;
            margin-top: 4px;
        }

        .user-count {
            background: var(--badge-bg);
            color: #818cf8;
            padding: 6px 14px;
            border-radius: 20px;
            font-size: 0.85rem;
            font-weight: 600;
            border: 1px solid rgba(99, 102, 241, 0.2);
        }

        /* Table Design */
        .table-responsive {
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            text-align: left;
        }

        th {
            background-color: rgba(15, 23, 42, 0.6);
            color: var(--text-muted);
            font-size: 0.75rem;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            padding: 16px 24px;
            border-bottom: 1px solid var(--border-color);
        }

        td {
            padding: 18px 24px;
            border-bottom: 1px solid var(--border-color);
            font-size: 0.9rem;
            color: var(--text-main);
            vertical-align: middle;
        }

        tr:last-child td {
            border-bottom: none;
        }

        tr:hover td {
            background-color: rgba(255, 255, 255, 0.02);
        }

        /* Custom Column Elements */
        .user-id {
            font-family: monospace;
            color: var(--text-muted);
            font-weight: 600;
        }

        .user-profile {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .avatar {
            width: 38px;
            height: 38px;
            border-radius: 50%;
            background: linear-gradient(135deg, #6366f1, #a855f7);
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            color: #fff;
            font-size: 0.85rem;
            text-transform: uppercase;
        }

        .username-badge {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            background: rgba(255, 255, 255, 0.05);
            padding: 4px 10px;
            border-radius: 6px;
            color: #cbd5e1;
            font-size: 0.85rem;
        }

        .empty-state {
            text-align: center;
            padding: 48px 24px;
            color: var(--text-muted);
        }

        .empty-state i {
            font-size: 2.5rem;
            margin-bottom: 12px;
            display: block;
            opacity: 0.5;
        }
    </style>
</head>
<body>

    <div class="container">
        <!-- Header -->
        <div class="card-header">
            <div class="header-title">
                <h2>System Users Directory</h2>
                <p>Laboratory Activity No. 4 — User Management</p>
            </div>
            <div class="user-count">
                <i class="fa-solid fa-users"></i>
                <?= !empty($users) ? count($users) : 0; ?> Registered
            </div>
        </div>

        <!-- Table -->
        <div class="table-responsive">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>User Profile</th>
                        <th>Username</th>
                        <th>Email Address</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if(!empty($users)): ?>
                        <?php foreach($users as $user): ?>
                            <tr>
                                <td class="user-id">#<?= sprintf('%03d', $user['id']); ?></td>
                                <td>
                                    <div class="user-profile">
                                        <div class="avatar">
                                            <?= strtoupper(substr($user['firstname'], 0, 1)); ?>
                                        </div>
                                        <div>
                                            <strong><?= htmlspecialchars($user['firstname'] . ' ' . $user['lastname']); ?></strong>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <span class="username-badge">
                                        <i class="fa-regular fa-user" style="font-size:0.75rem;"></i>
                                        @<?= htmlspecialchars($user['username']); ?>
                                    </span>
                                </td>
                                <td style="color: #94a3b8;">
                                    <?= htmlspecialchars($user['email']); ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="4">
                                <div class="empty-state">
                                    <i class="fa-regular fa-folder-open"></i>
                                    No registered users found in the database.
                                </div>
                            </td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>

</body>
</html>