<html lang="en">
<head>
    <link rel="stylesheet" href="../style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Computer Games</title>
</head>
<body>
    <header>
        <h1>Wellcome</h1>
    </header>
    
    

    <nav>
        <ul>
            <li><a href="home.php">Головна</a></li>
            <li id="games-link" class="active">
                Games 
                <span id="arrow" onclick="toggleGamesDropdown()">&#9660;</span> <!-- Стрілочка -->
                <div id="games-dropdown" class="dropdown-menu">
                    <ul>
                        <li><a href="game1.php">Dota 2</a></li>
                        <li><a href="game2.php">league_of_legends</a></li>
                        <li><a href="game3.php">CS 2</a></li>
                    </ul>
                </div>
            </li>
            <li><a href="about.php">Про сайт</a></li>
            <li><a href="chat.php">Chat</a></li>
        </ul>
    </nav>

    <p><b>Звісно, кіберспорт став справжньою есеєнцією сучасного спорту та розваг. Він вже давно вийшов за межі пасивного перегляду відеогр або онлайн-трансляцій і перетворився на спосіб життя для молоді та дорослих. Та що саме робить цю галузь такою цікавою та захоплюючою? <br>
		<br> На перший погляд, кіберспорт може здатися всього лише грою в відеоігри, але це набагато більше. Це командна робота, стратегія, реакція на непередбачувані ситуації та вирішення завдань в реальному часі. Величезна кількість ігор, які входять до кіберспорту, дозволяє кожному знайти свій шлях у цій галузі. <br>
		<br> Найпопулярнішими іграми у світі кіберспорту є: <li> League of Legends</li><li>Dota 2</li><li>Counter-Strike: Global Offensive</li><li>Fortnite</li> <br>
	<p>
    
	<p text-align = "center">Ці ігри зібрали величезну кількість гравців, які змагаються на різних рівнях від аматорів до професіоналів. <br> 
		<br>Та кіберспорт - це не лише гра на комп'ютері. Це також організація та участь у турнірах, спільнота гравців, тренування, аналіз власної гри та гри супротивників. Це можливість заробляти гроші, рекламувати товари, подорожувати світом та зустрічати нових друзів. <br>
		<br> Тому, якщо вас цікавить світ кіберспорту, то він є надзвичайно різноманітним і насиченим. Ви можете дізнатися більше про кращих гравців, команди, тренди та новини в цій галузі. Поглиблюючи свої знання в кіберспорті, ви зможете ще більше насолоджуватися грою та відкривати для себе нові аспекти цієї захоплюючої індустрії.</b>
	</p>

	<div class="image-container">
		<img src = "https://cq.ru/storage/uploads/images/83740/image32.jpg" width ="30%">
		<img src = "https://cloudfront-us-east-1.images.arcpublishing.com/infobae/WB3RBWJDRNB73IPJWBDG2NOIKI.jpg" width ="30.52%">
		<img src = "https://cdn.akamai.steamstatic.com/steam/apps/730/capsule_616x353.jpg?t=1683566799" width ="29.52%">
	</div>

	<p></p>

	<p><b><i>Найкращі гравці за останній час:</i></b></p>

	<table border = "1">
 		<tr>
    		<th></th>
    		<th>Dota 2</th>
    		<th>CS: GO</th>
 		</tr>

 		<tr>
			<th>У світі</th>
    		<td>V肉夹馍V</td>
	 		<td>s1mple(Олександр Костилєв)</td>
		</tr>
 
		<tr>
    		<th>В Україні</th>
    		<td>yatoro(Илья Mulyarchuk)</td>
    		<td>s1mple(Олександр Костилєв)</td>
		</tr>
 	</table>
    <?php
    session_start();

    // Перевірити, чи є повідомлення про успішну реєстрацію
    if (isset($_SESSION['registration_success']) && $_SESSION['registration_success']) {
        // Знищити збережене повідомлення, щоб не виводилося при подальших перезавантаженнях
        unset($_SESSION['registration_success']);
    ?>
    	<h3>Додати коментар</h3>
        <form action="../script_php/comments_home.php" method="post">
            <label for="name">Ім'я:</label>
            <input type="text" name="name" placeholder="Введіть нікнейм" required><br>

            <label for="comment">Коментар:</label>
            <textarea name="comment" rows="4" placeholder="Введіть коментар" required></textarea><br>

            <input type="submit" value="Додати коментар">
        </form>
        
    <div class="comments-section">
        <h2>Коментарі</h2>
   		
    </div>    
    <?php } else {?>
    <form action="../script_php/register_process.php" method="post">
        <label for="username">Логін:</label>
        <input type="text" name="username" required>
        
        <label for="password">Пароль:</label>
        <input type="password" name="password" required>

        <button type="submit">Зареєструватися</button>
    </form>
    <?php } ?>
    
   <style>
    .chat-message {
        padding: 8px;
        text-align: center;
        margin: 5px 0;
        border-radius: 10px;
        background-color: #fff; /* Фон кожного окремого повідомлення */
        word-wrap: break-word;
    }

    .chat-message h1 {
        font-size: 16px; /* Розмір шрифту */
        margin: 0; /* Знімання зовнішнього відступу */
    }
	</style>
	
	<?php
    $comments = file_get_contents('../txt/comments.txt');
    if (!empty($comments)) 
    {
        $commentsArray = explode("\n", $comments);
        foreach ($commentsArray as $comment) 
        {
            // Ігноруємо пробільні рядки
            if (trim($comment) !== '') {
                echo '<div class="chat-message"><h1>' . $comment . '</h1></div>';
            }
        }
    }
	?>

    <footer>
        <?php
        $currentDateTime = date('Y-m-d H:i:s');
        echo "<p>$currentDateTime</p>";
        ?>
    </footer>

	<script src="../script.js"></script>
</body>
</html>