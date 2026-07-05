
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($pageTitle) ? $pageTitle : "World Class Wire & Cable"; ?></title>
    <style>
        /* Reset and Base Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #000;
            color: #fff;
            line-height: 1.6;
        }

        /* Translucent Navigation */
        .navbar {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 50px;
            z-index: 1000;
            background-color: rgba(0, 0, 0, 0.3);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        .logo {
            font-size: 24px;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 2px;
            color: #fff;
            text-decoration: none;
        }

        .nav-links {
            display: flex;
            list-style: none;
        }

        .nav-links li {
            margin-left: 30px;
        }

        .nav-links a {
            color: #fff;
            text-decoration: none;
            font-size: 16px;
            font-weight: 500;
            transition: color 0.3s ease;
        }

        .nav-links a:hover {
            color: #00d2ff;
        }

        /* Video Header Container */
        .video-header {
            position: relative;
            width: 100%;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
        }

        .video-header video {
            position: absolute;
            top: 50%;
            left: 50%;
            min-width: 100%;
            min-height: 100%;
            width: auto;
            height: auto;
            transform: translate(-50%, -50%);
            object-fit: cover; 
            z-index: -1;
        }

        .video-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: 0;
        }

        .header-content {
            position: relative;
            z-index: 1;
            text-align: center;
            padding: 0 20px;
            max-width: 900px;
        }

        .header-content h1 {
            font-size: 3.5rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1px;
            line-height: 1.2;
            text-shadow: 2px 2px 12px rgba(0,0,0,0.8);
        }

        /* Main Content Section */
        .main-content {
            background-color: #000000;
            padding: 60px 20px 90px 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        /* Search Bar Wrapper */
        .search-container {
            width: 100%;
            max-width: 600px;
            margin-bottom: 50px;
        }

        .search-form {
            display: flex;
            width: 100%;
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 30px;
            overflow: hidden;
            background-color: rgba(255, 255, 255, 0.05);
            transition: border-color 0.3s, box-shadow 0.3s;
        }

        .search-form:focus-within {
            border-color: #00d2ff;
            box-shadow: 0 0 10px rgba(0, 210, 255, 0.2);
        }

        .search-input {
            flex: 1;
            background: none;
            border: none;
            padding: 15px 25px;
            font-size: 16px;
            color: #fff;
            outline: none;
        }

        .search-input::placeholder {
            color: rgba(255, 255, 255, 0.5);
        }

        .search-button {
            background-color: #00d2ff;
            color: #000;
            border: none;
            padding: 0 30px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .search-button:hover {
            background-color: #00b4db;
        }

        /* Lorem Ipsum Paragraph */
        .lorem-paragraph {
            max-width: 800px;
            color: #ffffff;
            font-size: 1.1rem;
            text-align: justify;
            opacity: 0.9;
        }

        @media (max-width: 768px) {
            .navbar {
                padding: 15px 20px;
            }
            .header-content h1 {
                font-size: 2.2rem;
            }
            .nav-links {
                display: none; 
            }
            .search-container {
                max-width: 100%;
            }
        }
    </style>
</head>
<body>

<nav class="navbar">
    <a href="index.php" class="logo">MyLogo</a>
    
    <ul class="nav-links">
        <li><a href="index.php">Home</a></li>
        <li><a href="About.php">About</a></li>
        <li><a href="products.php">Services</a></li>
        <li><a href="contact-us.php">Contact</a></li>
    </ul>
</nav>