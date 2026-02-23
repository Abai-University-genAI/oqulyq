<?php include 'header.php'; 
function getAudioBtn($id, $file) {
    return '
        <span class="audio-player" 
              style="font-size: 1.2em; cursor: pointer; margin-left: 10px; vertical-align: middle;" 
              onclick="toggleAudio(\''.$id.'\', this)">
            ▶️
        </span>
        <audio id="'.$id.'" src="audio/'.$file.'"></audio>
    ';
}
?>

<style>
    .topic-card {
        background: rgba(255, 255, 255, 0.05);
        border: 1px solid var(--neon-blue);
        border-radius: 15px;
        padding: 30px;
        margin-top: 30px;
        animation: fadeIn 0.8s ease-in-out;
    }
    .badge {
        background: var(--neon-pink);
        color: white;
        padding: 5px 12px;
        border-radius: 20px;
        font-size: 0.8rem;
        text-transform: uppercase;
        margin-bottom: 10px;
        display: inline-block;
    }
    .step {
        border-left: 3px dashed var(--neon-blue);
        margin-left: 10px;
        padding-left: 20px;
        margin-bottom: 30px;
    }
    .practice-box {
        background: rgba(57, 255, 20, 0.05);
        border: 1px solid var(--neon-green);
        padding: 20px;
        border-radius: 10px;
        margin: 20px 0;
    }
    .result-box {
        background: #000;
        color: #ff00ff;
        padding: 10px;
        border-radius: 5px;
        font-family: 'Courier New', monospace;
        margin-top: 5px;
        border: 1px solid #333;
    }
    .theory-note {
        background: rgba(255, 242, 0, 0.1);
        border-left: 5px solid #fff200;
        padding: 15px;
        margin: 15px 0;
    }
    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
    }
    table { width: 100%; border-collapse: collapse; margin-top: 15px; }
    th, td { border: 1px solid var(--neon-blue); padding: 10px; text-align: center; }
    th { background: rgba(0, 242, 255, 0.2); }
</style>

<div class="container">
    <h1 style="font-family: 'Orbitron'; text-align: center;">Программалау теориясы мен практикасы</h1>
    
    <div style="text-align: center; margin-bottom: 40px;">
        <button class="btn" onclick="show('for')">🔹 For циклі: Теория & Практика</button>
        <button class="btn" onclick="show('else')" style="border-color: var(--neon-green); color: var(--neon-green);">🔹 For + Else: Тереңдетілген курс</button>
    </div>

    <div id="for-content" class="topic-card" style="display:none;">
        <h2>1. For циклінің жұмыс істеу механизмі</h2>
        <p><b>Цикл</b> – алгоритмнің белгілі бір бөлігін бірнеше рет қайталауды ұйымдастыратын құрылым.
        <?php echo getAudioBtn("audio1", "for1.mp3"); ?>
        </p>
        

        <div class="theory-note">
            <b>💡 Маңызды:</b> Python-дағы <code>for</code> циклі басқа тілдерден ерекшеленеді. Ол "әрбір элемент үшін" (for each) принципімен жұмыс істейді.
            <?php echo getAudioBtn("audio2", "for2.mp3"); ?>
        </div>

        <div class="step">
            <h3>📌 for циклі деген не?</h3>
            <p>for циклі — элементтер жиыны бойынша қайталану үшін қолданылады. Python тілінде for көбіне мыналармен қолданылады:</p>
            <ul>
                <li><code>range()</code> функциясымен — сандар тізбегі үшін.</li>
                <li><code>Тізіммен (list)</code> — элементтер жиынтығы үшін.</li>
                <li><code>Жолмен (string)</code> — мәтіндік символдар үшін.</li>
            </ul>
        </div>

        <div class="step">
            <h3>📌 Жалпы жазылу формасы</h3>
            <div class="code-box">
                for айнымалы in элементтер:<br>
                &nbsp;&nbsp;&nbsp;&nbsp;орындалатын код
            </div>
        </div>

        <div class="step">
            <h3>🔢 range() функциясының 3 түрі</h3>
            <ul>
                <li><code>range(n)</code> — 0-ден n-1-ге дейін.</li>
                <li><code>range(start, stop)</code> — басынан соңына дейін (соңы кірмейді).</li>
                <li><code>range(start, stop, step)</code> — қадам бойынша жүру.</li>
            </ul>
        </div>

        <div class="practice-box">
            <h3>🚀 Практикалық тапсырма №1: Кері санақ</h3>
            <p>10-нан 1-ге дейін кері қарай сандарды шығару:</p>
            <div class="code-box">
                for i in range(10, 0, -1):<br>
                &nbsp;&nbsp;&nbsp;&nbsp;print(i, end=" ")
            </div>
            <div class="result-box">Нәтиже: 10 9 8 7 6 5 4 3 2 1</div>
        </div>

        <div class="step">
            <h3>🔤 Жолдармен (String) жұмыс</h3>
            <p>Цикл сөздің әрбір әрпін жеке-жеке өңдей алады.</p>
            <div class="code-box">
                word = "PYTHON"<br>
                for char in word:<br>
                &nbsp;&nbsp;&nbsp;&nbsp;print(char.lower(), end="-")
            </div>
            <div class="result-box">Нәтиже: p-y-t-h-o-n-</div>
        </div>

        <div class="practice-box" style="border-color: var(--neon-pink);">
            <h3>🔥 Күрделі практика: Көбейту кестесі</h3>
            <p>Кез келген санның көбейту кестесін шығару:</p>
            <div class="code-box">
                n = 5<br>
                for i in range(1, 11):<br>
                &nbsp;&nbsp;&nbsp;&nbsp;print(f"{n} * {i} = {n * i}")
            </div>
        </div>
    </div>

    <div id="else-content" class="topic-card" style="display:none; border-color: var(--neon-green);">
        <h2>2. Басқару операторлары мен Else блогы</h2>
        <p>Циклдің барысын бақылау үшін <code>break</code> және <code>continue</code> операторлары қолданылады.
        <?php echo getAudioBtn("audio3", "else1.mp3"); ?>
        </p>

        <div class="step">
            <h3>🔹 for + else деген не?</h3>
            <p>Python тілінде for цикліне else қосуға болады. <b>else бөлігі:</b></p>
            <ul>
                <li>Цикл қалыпты түрде аяқталса ғана орындалады.</li>
                <li>Егер цикл <code>break</code> арқылы тоқтаса — else орындалмайды.</li>
            </ul>
        </div>

        <div class="step">
            <h3>📌 Жалпы жазылу формасы:</h3>
            <div class="code-box">
                for айнымалы in элемент:<br>
                &nbsp;&nbsp;&nbsp;&nbsp;код<br>
                else:<br>
                &nbsp;&nbsp;&nbsp;&nbsp;код
            </div>
        </div>

        <div class="step">
            <h3>🚫 break және continue айырмашылығы</h3>
            
            <ul>
                <li><b>break:</b> Циклді толық тоқтатып, одан шығып кетеді.</li>
                <li><b>continue:</b> Ағымдағы қадамды өткізіп жіберіп, келесі қадамға көшеді.</li>
            </ul>
        </div>

        <div class="practice-box">
            <h3>🚀 Практикалық тапсырма №2: Жұп сандарды сүзу</h3>
            <p>1-ден 10-ға дейінгі сандардың ішінде тек тақ сандарды шығару (continue қолдану):</p>
            <div class="code-box">
                for i in range(1, 11):<br>
                &nbsp;&nbsp;&nbsp;&nbsp;if i % 2 == 0:<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;continue<br>
                &nbsp;&nbsp;&nbsp;&nbsp;print(i)
            </div>
        </div>

        <div class="step">
            <h3>🔹 For + Else: Іздеу алгоритмі</h3>
            <p><code>else</code> блогы — цикл ішінде "іздеген затымыз табылмаса" не істеу керектігін шешуге өте ыңғайлы.</p>
            <div class="code-box">
                fruits = ["apple", "banana", "cherry"]<br>
                search = "orange"<br><br>
                for f in fruits:<br>
                &nbsp;&nbsp;&nbsp;&nbsp;if f == search:<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;print("Табылды!")<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break<br>
                else:<br>
                &nbsp;&nbsp;&nbsp;&nbsp;print("Тізімде мұндай жеміс жоқ.")
            </div>
        </div>

        <div class="practice-box" style="border-color: #fff200;">
            <h3>🎓 Логикалық есеп: Жай сандарды табу</h3>
            <p>1-ден 20-ға дейінгі барлық жай сандарды экранға шығару:</p>
            <div class="code-box">
                for num in range(2, 21):<br>
                &nbsp;&nbsp;&nbsp;&nbsp;for i in range(2, num):<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if num % i == 0:<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break<br>
                &nbsp;&nbsp;&nbsp;&nbsp;else:<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;print(num, end=" ")
            </div>
            <div class="result-box">Нәтиже: 2 3 5 7 11 13 17 19</div>
        </div>
    </div>
</div>

<script>
    // Тақырыптарды ауыстырып қосу функциясы
    function show(id) {
        // Барлық карточкаларды жабу
        document.getElementById('for-content').style.display = 'none';
        document.getElementById('else-content').style.display = 'none';
        
        // Таңдалған карточканы ашу
        document.getElementById(id + '-content').style.display = 'block';
        
        // Автоматты түрде төмен жылжыту
        window.scrollTo({ top: 400, behavior: 'smooth' });
    }

    // Аудионы қосу/өшіру функциясы
    function toggleAudio(id, el) {
        let audio = document.getElementById(id);
        
        // 1. Беттегі барлық басқа аудиоларды табу және тоқтату
        document.querySelectorAll('audio').forEach(a => {
            if (a.id !== id) {
                a.pause();
                a.currentTime = 0; // Басына қайтару
                // Басқа батырмалардың иконкасын ▶️ қалпына келтіру
                // Ескерту: Бұл аудио тегінің алдында span тұрса жұмыс істейді
                if (a.previousElementSibling && a.previousElementSibling.classList.contains('audio-player')) {
                    a.previousElementSibling.innerText = '▶️';
                }
            }
        });

        // 2. Таңдалған аудионы ойнату немесе тоқтату
        if (audio.paused) {
            audio.play();
            el.innerText = '⏸️'; // Кідірту иконкасы
        } else {
            audio.pause();
            el.innerText = '▶️'; // Ойнату иконкасы
        }

        // 3. Аудио аяқталғанда иконканы автоматты түрде ▶️ ауыстыру
        audio.onended = () => {
            el.innerText = '▶️';
        };
    }
</script>

</body>
</html>