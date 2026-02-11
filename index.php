
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Professional ID Card</title>

    <style>
        body {
            margin: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #f2f4f8;
            font-family: Arial, sans-serif;
        }

        .card {
            background-color: #ffffff;
            width: 350px;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.15);
            text-align: center;
        }

        h1 {
            margin-bottom: 5px;
        }

        .bio {
            font-size: 14px;
            color: #555;
            margin-bottom: 15px;
        }

        ul {
            text-align: left;
            padding-left: 20px;
        }

        button {
            margin-top: 15px;
            padding: 10px 15px;
            border: none;
            background-color: #007bff;
            color: white;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }

        .system-info {
            margin-top: 20px;
            font-size: 13px;
            background: #f8f9fa;
            padding: 10px;
            border-radius: 5px;
            text-align: left;
        }
    </style>
</head>
<body>

<div class="card">

    <h1>Junior Software Engineer</h1>
    <p class="bio">Ace S. Ogalesco</p>
    <p class="bio"><i>ready to learn PHP and MySQL this semester</i></p>

    <h3>Technical Skills</h3>
    <ul>
        <li>HTML, CSS, JavaScript</li>
        <li>PHP & MySQL</li>
        <li>Flutter & Firebase</li>
        <li>Basic Networking</li>
        <li>3D Annimation</li>
    </ul>

  
    <button id="initBtn">Initialize System</button>


    <div class="system-info">
        <strong>System Info</strong><br>
        <?php
            echo "Server Date & Time: " . date("Y-m-d H:i:s") . "<br>";
            echo "PHP Version: " . phpversion();
        ?>
    </div>
</div>

<script>
    document.getElementById("initBtn").addEventListener("click", function () {
        alert("WELCOME TO THE TEAM , boss!");
    });
</script>

</body>
</html>
