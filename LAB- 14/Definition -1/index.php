<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dynamic Navigation with PHP & AJAX</title>
    
    <!-- jQuery CDN -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <style>
        * {
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }
        body {
            background-color: #f4f6f8;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 800px;
            margin: 40px auto;
            background: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.08);
            overflow: hidden;
        }
        
        /* Navigation Styling */
        nav {
            display: flex;
            background-color: #2c3e50;
        }
        nav a {
            flex: 1;
            padding: 15px;
            text-align: center;
            color: #ecf0f1;
            text-decoration: none;
            font-weight: bold;
            transition: background 0.3s;
        }
        nav a:hover {
            background-color: #34495e;
        }
        nav a.active {
            background-color: #3498db;
        }

        /* Content Area Styling */
        #content-area {
            padding: 30px;
            min-height: 250px;
        }
        .loading {
            color: #7f8c8d;
            font-style: italic;
        }
        .card {
            border: 1px solid #e0e0e0;
            border-radius: 6px;
            padding: 15px;
            margin-bottom: 12px;
            background: #fafafa;
        }
    </style>
</head>
<body>

<div class="container">
    <!-- Navigation Menu -->
    <nav id="nav-menu">
        <a href="#" class="nav-link active" data-page="home">Home</a>
        <a href="#" class="nav-link" data-page="blog">Blog Posts</a>
        <a href="#" class="nav-link" data-page="products">Products</a>
        <a href="#" class="nav-link" data-page="contact">Contact</a>
    </nav>

    <!-- Dynamic Content Container -->
    <div id="content-area">
        <!-- Content will be loaded here via AJAX -->
    </div>
</div>

<script>
$(document).ready(function() {
    
    // Function to fetch and display content
    function loadPage(pageName) {
        // Show loading state
        $('#content-area').html('<p class="loading">Loading content, please wait...</p>');

        // AJAX Request
        $.ajax({
            url: 'get_content.php',      // Target PHP script
            type: 'GET',                 // HTTP method
            data: { page: pageName },    // Data sent: get_content.php?page=pageName
            success: function(response) {
                // Update the content container with received HTML
                $('#content-area').html(response);
            },
            error: function() {
                // Display an error message if the server fails
                $('#content-area').html('<p style="color:red;">Error loading content. Please try again.</p>');
            }
        });
    }

    // Load 'home' page by default when the page first loads
    loadPage('home');

    // Click event for navigation links
    $('.nav-link').click(function(e) {
        e.preventDefault(); // Stop normal page reload / URL redirect

        // Update active styling
        $('.nav-link').removeClass('active');
        $(this).addClass('active');

        // Read the 'data-page' attribute value (e.g., 'blog', 'products')
        var page = $(this).data('page');

        // Trigger AJAX load
        loadPage(page);
    });

});
</script>

</body>
</html>