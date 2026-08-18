<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jQuery Background Color Demo</title>
    
    <!-- Include jQuery from CDN -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
            max-width: 600px;
            margin: 0 auto;
        }
        
        .box {
            padding: 15px;
            margin: 10px 0;
            border: 2px solid #ddd;
            border-radius: 5px;
        }
        
        button {
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            margin: 5px;
        }
        
        button:hover {
            background-color: #45a049;
        }
        
        .btn-reset {
            background-color: #f44336;
        }
        
        .btn-reset:hover {
            background-color: #da190b;
        }
    </style>
</head>
<body>

    <h1>jQuery Background Color Demo</h1>
    
    <div class="box">
        <h2>Heading 1</h2>
        <p>This is a paragraph with some text content.</p>
        <p>Another paragraph for demonstration.</p>
        <button>Click Me!</button>
    </div>
    
    <div class="box">
        <h3>Subheading</h3>
        <p>More text content here.</p>
        <button>Another Button</button>
    </div>
    
    <div>
        <button id="changeColor">Change Background to Red</button>
        <button id="resetColor" class="btn-reset">Reset Background</button>
    </div>

    <script>
        $(document).ready(function() {
            
            // Change background to red when button is clicked
            $('#changeColor').click(function() {
                // Select multiple elements and change their background
                $('h1, h2, h3, p, button').css('background-color', 'red');
                // Also change text color to white for better visibility
                $('h1, h2, h3, p, button').css('color', 'white');
            });
            
            // Reset background to original
            $('#resetColor').click(function() {
                // Reset background color
                $('h1, h2, h3, p, button').css('background-color', '');
                // Reset text color
                $('h1, h2, h3, p, button').css('color', '');
            });
            
        });
    </script>

</body>
</html>