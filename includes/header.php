<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle ?? 'Prospera Consulting'; ?></title>
    <link rel="stylesheet" href="css/style.css"> 
</head>
<body>

<header class="main-header">
    <div class="logo">
        <a href="index.php">
            <span class="logo-text">Prospera Consulting</span>
        </a>
    </div>
    <nav class="main-nav">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li class="dropdown">
                <a href="services.php">Services</a>
                <ul class="dropdown-content">
                    <li><a href="bookkeeping.php">Bookkeeping</a></li>
                    <li><a href="consulting.php">Consulting</a></li>
                    <li><a href="virtual-assistant.php">Virtual Assistant</a></li>
                </ul>
            </li>
            <li><a href="case-studies.php">Case Studies</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="blog.php">Blog</a></li>
            <li><a href="contact.php" class="cta-button">Contact Us</a></li>
        </ul>
    </nav>
</header>
<main>