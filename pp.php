<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pop-Up Ad Example</title>
    <style>
        /* Style for the pop-up container */
        .popup {
            display: none; /* Hidden by default */
            position: fixed;
            z-index: 999; /* On top of other elements */
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5); /* Black background with opacity */
            justify-content: center;
            align-items: center;
        }

        /* Style for the pop-up content */
        .popup-content {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            width: 400px;
            position: relative;
        }

        /* Close button style */
        .close-btn {
            position: absolute;
            top: 10px;
            right: 10px;
            font-size: 24px;
            cursor: pointer;
        }

        /* CTA Button */
        .cta-btn {
            background-color: orange;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }
    </style>
</head>
<body>

    <div id="popup" class="popup">
        <div class="popup-content">
            <span class="close-btn" id="close-btn">&times;</span>
            <h2>Capture and Convert More Leads with WordStream</h2>
            <p>Get Started Today</p>
            <button class="cta-btn">Free Trial</button>
        </div>
    </div>

    <script>
        // Show the pop-up when the page loads
        window.onload = function() {
            document.getElementById('popup').style.display = 'flex';
        }

        // Close the pop-up when the user clicks the close button
        document.getElementById('close-btn').onclick = function() {
            document.getElementById('popup').style.display = 'none';
           
        }
    </script>
</body>
</html>
