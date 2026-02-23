<?php include 'header.php'; ?>

<style>
    .video-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(450px, 1fr));
        gap: 30px;
        margin-top: 30px;
    }
    .video-card {
        background: rgba(255, 255, 255, 0.05);
        border: 2px solid var(--neon-blue);
        border-radius: 15px;
        padding: 15px;
        transition: 0.3s;
    }
    .video-card:hover {
        box-shadow: 0 0 20px var(--neon-blue);
        transform: translateY(-5px);
    }
    .video-card h3 {
        color: var(--neon-pink);
        font-size: 1.1rem;
        margin-bottom: 15px;
        height: 50px;
    }
    iframe {
        border-radius: 10px;
        border: 1px solid #333;
    }
    .category-title {
        border-left: 5px solid var(--neon-pink);
        padding-left: 15px;
        margin: 40px 0 20px 0;
        color: var(--neon-blue);
    }
</style>

<div class="container">
    <h1 style="font-family: 'Orbitron';">Видеосабақтар</h1>
    <p style="text-align: center;">Python тілін видеонұсқаулықтар арқылы тереңірек меңгеріңіз.</p>

    <h2 class="category-title">📌 For циклі</h2>
    <div class="video-grid">
        <div class="video-card">
            <h3>Теория: For циклін түсіндіру</h3>
            <iframe width="100%" height="250" src="https://www.youtube.com/embed/0gS_y7MDWZw" frameborder="0" allowfullscreen></iframe>
        </div>
        <div class="video-card">
            <h3>Практика: For цикліне есептер шығару</h3>
            <iframe width="100%" height="250" src="https://www.youtube.com/embed/reG4upLObqs" frameborder="0" allowfullscreen></iframe>
        </div>
    </div>

    <h2 class="category-title" style="border-color: var(--neon-green);">🔹 Else циклін басқару</h2>
    <div class="video-grid">
        <div class="video-card" style="border-color: var(--neon-green);">
            <h3>Теория: Else ті түсіндіру</h3>
            <iframe width="100%" height="250" src="https://www.youtube.com/embed/EvcrvaFLd3o" frameborder="0" allowfullscreen></iframe>
        </div>
        <div class="video-card" style="border-color: var(--neon-green);">
            <h3>Практика: Else тақырыбына есептер</h3>
            <iframe width="100%" height="250" src="https://www.youtube.com/embed/SWYhCHX8fN8" frameborder="0" allowfullscreen></iframe>
        </div>
    </div>
</div>

</body>
</html>