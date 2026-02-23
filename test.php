<?php include 'header.php'; ?>
<div class="container" style="text-align: center;">
    <h2>Білімді тексеру (Интерактивті ойындар)</h2>
    
    <div style="margin-bottom: 20px;">
        <button class="btn" onclick="openGame('https://www.umapalata.com/zexpo/game.html?LANG=RU&idGames=181571')">For циклі ойыны</button>
        <button class="btn" onclick="openGame('https://learningapps.org/watch?v=p428xynnt25')">Else циклі тапсырмасы</button>
    </div>

    <div id="game-container" style="display:none; margin-top: 20px;">
        <div style="border: 2px solid var(--neon-blue); border-radius: 10px; overflow: hidden; background: white;">
            <iframe id="game-frame" src="" width="100%" height="600px" frameborder="0"></iframe>
        </div>
        <button class="btn" style="border-color: red; color: red; margin-top: 10px;" onclick="closeGame()">Жабу</button>
    </div>
</div>

<script>
    function openGame(url) {
        document.getElementById('game-frame').src = url;
        document.getElementById('game-container').style.display = 'block';
        window.scrollTo(0, document.body.scrollHeight);
    }
    function closeGame() {
        document.getElementById('game-container').style.display = 'none';
        document.getElementById('game-frame').src = '';
    }
</script>
</body>
</html>