<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link  rel="stylesheet" href="\Agenstvo\Css\Agenstvo.css">
    <link  rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" integrity="undefined" crossorigin="anonymous">
    <script src="\Agenstvo\Js\Agensto.js"></script>
    <link  rel="stylesheet" href="\Agenstvo\Css\reg.css">
    <title>Туристическое агентство</title>
</head>
<body>
<header class="header bg" >
  <div class="container" >
    <a href="Agenstvo.html" class="logo"><img height="60px" width="60px" src="\Agenstvo\img\logo.png" alt=""></a>
    <nav>
      <ul>
          <li><a style="color: black" class="underline-one" href="Agenstvo.php">Главная </a></li>
          <li><a style="color: black" class="underline-one" href="admin.php">Админ</a></li>
          <li><a style="color: black" class="underline-one" href="avtorizaciya.php">Авторизация</a></li>
          <li><a style="color: black" class="underline-one" href="Registraciya.php">Регистрация</a></li>
      </ul>
    </nav>
  </div>
</header>
<main>  
  <div class="midle">
    >
      <?php
$host = 'localhost';
$database = 'agenstvo';
$userdb = 'root';
$password = '';

$link = mysqli_connect($host, $userdb, $password, $database);

// Проверка подключения
if (!$link) {
    die('Ошибка подключения: ' . mysqli_connect_error());
}

// Запрос к базе данных
$sql = "SELECT * FROM user";
$result = mysqli_query($link, $sql);

if (mysqli_num_rows($result) > 0) {
    // Вывод данных
    while($row = mysqli_fetch_assoc($result)) {

        echo "Name: " . $row["Name"] . "<br>";
        echo "Email: " . $row["Email"] . "<br>";
        echo "Role: " . $row["Role"] . "<br><br>";
    }
} else {
    echo "Нет данных для вывода";
}

// Освобождаем память и закрываем соединение с базой данных
mysqli_free_result($result);
mysqli_close($link);
?>

  
  
     
</main>  
    <footer class="footer">
      <nav>
      <ul2 >
          
      <li ><a style="color: black" class="a1" href="https://web.telegram.org/k/">Telegram</a>    <a href="https://web.telegram.org/k/"><img class="imgs2" src="\Agenstvo\img\Social\telegram.png"></a> </li>
      <li ><a style="color: black" class="a1" href="https://vk.com/feed">Вконтакте</a>           <a href="https://vk.com/feed"><img class="imgs2" src="\Agenstvo\img\Social\vk.png"></a> </li>
      <li ><a style="color: black" class="a1" href="https://www.youtube.com/">YouTube </a>       <a href="https://www.youtube.com/"><img class="imgs2" src="\Agenstvo\img\Social\youtube.png"></a> </li>
      <li ><a style="color: black" class="a1" href="https://web.whatsapp.com/">WhatsApp</a>      <a href="https://web.whatsapp.com/"><img class="imgs2" src="\Agenstvo\img\Social\whatsapp.png"></a> </li>
      <li ><a style="color: black" class="a1" href="https://e.mail.ru/inbox">Почта</a>           <a href="https://e.mail.ru/inbox"><img class="imgs2" src="\Agenstvo\img\Social\pochta.png"></a> </li>
      <li ><img class="imgs2" src="\Agenstvo\img\Social\tel.png"></li>
      <li ><p style="color: black">55-55-55</p></li>       
      <li ><p style="color: black">44-44-44</p></li>
      </ul2>
      </nav> 
  </footer> 
</body>
</html>