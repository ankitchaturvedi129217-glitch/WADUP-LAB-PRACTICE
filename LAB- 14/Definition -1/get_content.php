<?php
// Check which page was requested (default to 'home' if empty)
$page = isset($_GET['page']) ? $_GET['page'] : 'home';

switch ($page) {
    case 'home':
        ?>
        <h2>Welcome to Our Website</h2>
        <p>This is the homepage loaded dynamically using <strong>jQuery & AJAX</strong> without any page refresh.</p>
        <p>Click on any of the menu links above to fetch other sections from the PHP backend!</p>
        <?php
        break;

    case 'blog':
        // Example array of mock blog posts
        $posts = [
            ["title" => "Getting Started with PHP", "date" => "Aug 15, 2026", "excerpt" => "PHP is a popular server-side scripting language..."],
            ["title" => "Understanding AJAX & jQuery", "date" => "Aug 16, 2026", "excerpt" => "AJAX lets you update parts of a web page asynchronously..."],
            ["title" => "Clean Code Principles", "date" => "Aug 17, 2026", "excerpt" => "Writing clean and readable code helps beginners scale projects..."]
        ];
        ?>
        <h2>Latest Blog Posts</h2>
        <?php foreach ($posts as $post): ?>
            <div class="card">
                <h3 style="margin-top:0; color:#2c3e50;"><?php echo htmlspecialchars($post['title']); ?></h3>
                <small style="color:#888;">Published on: <?php echo htmlspecialchars($post['date']); ?></small>
                <p><?php echo htmlspecialchars($post['excerpt']); ?></p>
            </div>
        <?php endforeach; ?>
        <?php
        break;

    case 'products':
        // Example array of mock products
        $products = [
            ["name" => "Wireless Mouse", "price" => "Rs. 599", "status" => "In Stock"],
            ["name" => "Mechanical Keyboard", "price" => "Rs. 999", "status" => "In Stock"],
            ["name" => "Gaming Headset", "price" => "Rs. 1499", "status" => "Out of Stock"]
        ];
        ?>
        <h2>Our Products</h2>
        <?php foreach ($products as $item): ?>
            <div class="card">
                <h3 style="margin-top:0; color:#2c3e50;"><?php echo htmlspecialchars($item['name']); ?></h3>
                <p><strong>Price:</strong> <?php echo htmlspecialchars($item['price']); ?> | <strong>Status:</strong> <?php echo htmlspecialchars($item['status']); ?></p>
            </div>
        <?php endforeach; ?>
        <?php
        break;

    case 'contact':
        ?>
        <h2>Contact Us</h2>
        <p>Feel free to reach out to us using the details below:</p>
        <p> <strong>Email:</strong> ankitraj802101@gmail.com</p>
        <p> <strong>Phone:</strong> +91 7491040542</p>
        <p> <strong>Location:</strong> Rajkot, Gujarat</p>
        <?php
        break;

    default:
        ?>
        <h2>404 - Page Not Found</h2>
        <p>The requested section does not exist.</p>
        <?php
        break;
}
?>