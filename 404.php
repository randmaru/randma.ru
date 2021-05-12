<?php
header('HTTP/1.1 404 Not Found');
header('Status: 404 Not Found');
?>
<!DOCTYPE html>
<html lang="ru">

<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <style>
 :root{--bg-color:#fff;--text-active: #000;--green:rgb(52,199,89);--green-bg:rgba(50,204,88,.2)}@media(prefers-color-scheme:dark){:root{--bg-color:#121212;--text-active: #fff;--green: rgb(48,209,88)}}
 body{display:flex;align-items:center;justify-content:center;box-sizing:border-box;margin:0;padding:calc(20px + (30 - 20)*((100vw - 320px)/(1920 - 320)));height:100vh;background:var(--bg-color);color:var(--text-active);font-family:'Fira Code VF',monospace}
 .title {font-family: Monospace;display: block;margin: auto auto;max-width: max-content}
 .text {text-align:center}
 </style>
 <title>Ошибка 404 - randma.ru</title>
</head>

<body>
 <main>
  <p class="title">
    ___   ___  ________  ___   ___<br>
   |\  \ |\  \|\   __  \|\  \ |\  \<br>
   \ \  \\_\  \ \  \|\  \ \  \\_\  \<br>
    \ \______  \ \  \\\  \ \______  \<br>
     \|_____|\  \ \  \\\  \|_____|\  \<br>
            \ \__\ \_______\     \ \__\<br>
             \|__|\|_______|      \|__|<br>
  </p>
  <p class="text">Вас автоматически перенаправит на главную страницу через <span id="redirectTimer">3</span> секунды</p>
  <p class="text"><a href="http://randma.ru">Нажмите сюда</a>, если этого не случилось</p>
 </main>
 <script>
 function redirectTimer(current) {
  let timer = setInterval(go, 1000)

  function go() {
   document.getElementById('redirectTimer').innerHTML = current
   if (current == 0) {
    clearInterval(timer)
    window.location.href = 'https://randma.ru'
   }
   current--
  }
  go()
 }
 // redirectTimer(3);
 </script>
</body>

</html>
