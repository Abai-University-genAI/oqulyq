<!DOCTYPE html>
<html lang="kk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&family=Exo+2:wght@300;600&display=swap" rel="stylesheet">
    <style>
        :root { --neon-blue: #00f2ff; --neon-pink: #ddff00; --bg-dark: #0a0b10; }
        body { margin: 0; font-family: 'Exo 2', sans-serif; background: var(--bg-dark); color: white; line-height: 1.6; }
        nav { display: flex; justify-content: space-around; padding: 20px; background: rgba(0,0,0,0.9); border-bottom: 2px solid var(--neon-blue); position: sticky; top: 0; z-index: 100; }
        nav a { color: white; text-decoration: none; font-weight: bold; text-transform: uppercase; transition: 0.3s; }
        nav a:hover { color: var(--neon-blue); text-shadow: 0 0 10px var(--neon-blue); }
        .container { max-width: 1000px; margin: 40px auto; padding: 25px; background: rgba(255,255,255,0.05); border-radius: 15px; border: 1px solid rgba(0,242,255,0.2); }
        h1, h2 { color: var(--neon-blue); text-shadow: 0 0 8px var(--neon-blue); text-align: center; }
        .btn { display: inline-block; padding: 12px 24px; margin: 10px; border: 2px solid var(--neon-pink); color: var(--neon-pink); text-decoration: none; border-radius: 5px; transition: 0.4s; cursor: pointer; background: transparent; }
        .btn:hover { background: var(--neon-pink); color: white; box-shadow: 0 0 20px var(--neon-pink); }
        .code-box { background: #1a1a1a; padding: 20px; border-left: 5px solid #39ff14; font-family: 'Courier New', monospace; color: #39ff14; margin: 20px 0; overflow-x: auto; }
    </style>
</head>
<body>
<nav>
    <a href="index.php">Басты бет</a>
    <a href="theory.php">Тақырып түсіндіру</a>
    <a href="video.php">Видеосабақтар</a> 
    <a href="test.php">Білімді тексеру</a>
    <a href="kmzh.php">ҚМЖ</a>
    <a href="contact.php">Байланыс</a>
</nav>