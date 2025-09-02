<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Site de recettes</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }

        header {
            background: #333;
            color: white;
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        header h1 {
            margin: 0;
            font-size: 18px;
        }

        nav {
            display: none;
        }

        nav ul {
            list-style: none;
            margin: 0;
            padding: 0;
        }

        nav ul li {
            margin: 10px 0;
        }

        nav ul li a {
            color: white;
            text-decoration: none;
        }

        .menu-btn {
            font-size: 22px;
            cursor: pointer;
            border: none;
            background: none;
            color: white;
        }

        nav.active {
            display: block;
            background: #444;
            padding: 10px;
        }
    </style>
</head>
<body>
<header>
    <h1>Site de recettes</h1>
    <button class="menu-btn" onclick="toggleMenu()">☰</button>
</header>
<nav id="menu">
    <ul>
        <li><a href="index.php">Accueil</a></li>
        <li><a href="page1.php">Page 1</a></li>
        <li><a href="page2.php">Page 2</a></li>
        <li><a href="page3.php">Page 3</a></li>
    </ul>
</nav>

<script>
    function toggleMenu() {
        document.getElementById("menu").classList.toggle("active");
    }
</script>
