<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../chat_style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Computer Games</title>
</head>
<body>
    <header>
        <h1>Chat</h1>
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
   <div class="chat-container">
   		<div class="chat-messages">
   			<?php
        		$comments = file_get_contents('../txt/chat.txt');
    	 		if (!empty($comments)) 
    	 		{
        		 	$commentsArray = explode("\n", $comments);
            		foreach ($commentsArray as $comment) 
            		{
            			if (trim($comment) !== '') 
            			{
                		echo '<h1>' . $comment . '</h1>';
            			}
            		}
        		}
    		?> 
    	</div>
    </div>
    <p></p>
	<script src="../script.js"></script>
	<footer>
		<?php
    	session_start();
    	// Перевірити, чи є повідомлення про успішну реєстрацію
    	if (isset($_SESSION['registration_success']) && $_SESSION['registration_success']) {
        	// Знищити збережене повідомлення, щоб не виводилося при подальших перезавантаженнях
        	unset($_SESSION['registration_success']);
    	?>	
        <form action="../script_php/message.php" method="post">
            <input type="text" name="name" placeholder="Введіть нікнейм" required><br>
            <textarea name="comment" rows="4" placeholder="Введіть коментар" required></textarea><br>
            <input type="submit" value="Надіслати">
        </form>
        <?php } else { ?>
    	<form action="../script_php/register_process.php" method="post">
        	<label for="username">Логін:</label>
        	<input type="text" name="username" required>
        	<label for="password">Пароль:</label>
        	<input type="password" name="password" required>
        	<button type="submit">Зареєструватися</button>
    	</form>
    	<?php } ?>
        <?php
        $currentDateTime = date('Y-m-d H:i:s');
        echo "<p>$currentDateTime</p>";
        ?>
	</footer>
</body>
</html>
