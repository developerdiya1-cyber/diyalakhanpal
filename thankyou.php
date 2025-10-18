<?php
// Get the name from URL parameter (if available)
$name = isset($_GET['name']) ? htmlspecialchars($_GET['name']) : 'Friend';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            background: linear-gradient(135deg, #030006ff, #ff7425);
            color: #fff;
            text-align: center;
        }
        .thankyou-container {
            background: rgba(0,0,0,0.6);
            padding: 50px 40px;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.3);
            animation: fadeIn 1s ease-in-out;
        }
        h1 {
            font-size: 3em;
            margin-bottom: 20px;
        }
        p {
            font-size: 1.2em;
            margin-bottom: 30px;
        }
        .btn-home {
            display: inline-block;
            padding: 12px 25px;
            font-size: 1em;
            color: #ff7425;
            background: #fff;
            border-radius: 50px;
            text-decoration: none;
            transition: all 0.3s ease;
        }
        .btn-home:hover {
            background: #06020aff;
            color: #fff;
        }
        @keyframes fadeIn {
            from {opacity: 0; transform: translateY(-20px);}
            to {opacity: 1; transform: translateY(0);}
        }
        .checkmark {
            font-size: 4em;
            color: #4CAF50;
            margin-bottom: 20px;
            animation: bounce 1s ease infinite alternate;
        }
        @keyframes bounce {
            0% { transform: translateY(0); }
            100% { transform: translateY(-15px); }
        }
    </style>
</head>
<body>
    <div class="thankyou-container">
        <div class="checkmark">&#10004;</div>
        <h1>Thank You, <?php echo $name; ?>!</h1>
        <p>Your message has been sent successfully. We will get back to you shortly.</p>
        <a href="index.php" class="btn-home">Go Back Home</a>
    </div>

    <!-- Optional automatic redirect after 5 seconds -->
    <script>
        setTimeout(function(){
            window.location.href = 'index.php';
        }, 5000); // 5 seconds
    </script>
</body>
</html>
