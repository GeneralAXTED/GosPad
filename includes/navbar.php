<nav class="bg-blue-600 text-white p-4">
    <div class="container mx-auto flex justify-between items-center">
        <a href="index.php" class="text-xl font-bold">GosPad</a>
        <div class="space-x-4">
            <a href="index.php" class="hover:underline">Bosh sahifa</a>
            <?php if (isset($_SESSION['admin'])): ?>
                <a href="admin.php" class="hover:underline">Admin Panel</a>
                <a href="logout.php" class="hover:underline">Chiqish</a>
            <?php else: ?>
                <a href="login.php" class="hover:underline">Kirish</a>
            <?php endif; ?>
        </div>
    </div>
</nav>