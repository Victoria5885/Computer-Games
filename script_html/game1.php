<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Computer Games</title>
</head>
<body>
    <header>
        <h1>Dota 2</h1></h1>
    </header>
    
    <nav>
        <ul>
            <li><a href="home.php">Головна</a></li>
            <li id="games-link" class="active">
                Games 
                <span id="arrow" onclick="toggleGamesDropdown()">&#9662;</span> <!-- Стрілочка -->
                <div id="games-dropdown" class="dropdown-menu">
                    <ul>
                        <li><a href="game1.php">Game 1</a></li>
                        <li><a href="game2.php">Game 2</a></li>
                        <li><a href="game3.php">Game 3</a></li>
                    </ul>
                </div>
            </li>
            <li><a href="about.php">Про сайт</a></li>
            <li><a href="contacts.php">Контакти</a></li>
            <li><a href="chat.php">Chat</a></li>
        </ul>
    </nav>
	
	<div class="container">
    	
	 	<div class="text">
	 	
        	<p>Dota 2 is a 2013 multiplayer online battle arena (MOBA) video game by Valve. The game is a sequel to Defense of the Ancients (DotA), a community-created mod for Blizzard Entertainment's Warcraft III: Reign of Chaos. Dota 2 is played in matches between two teams of five players, with each team occupying and defending their own separate base on the map. Each of the ten players independently controls a powerful character known as a "hero" that all have unique abilities and differing styles of play. During a match players collect experience points and items for their heroes to defeat the opposing team's heroes in player versus player combat. A team wins by being the first to destroy the other team's "Ancient", a large structure located within their base.<br>

				<br>Development of Dota 2 began in 2009 when IceFrog, lead designer of Defense of the Ancients, was hired by Valve to design a modernized remake in the Source game engine. It was released for Windows, OS X, and Linux via the digital distribution platform Steam in July 2013, following a Windows-only open beta phase that began two years prior. The game is fully free-to-play with no heroes or any other gameplay element needing to be bought or otherwise unlocked. To maintain it, Valve supports the game as a service, selling loot boxes and a battle pass subscription system called Dota Plus that offer non-gameplay altering virtual goods in return, such as hero cosmetics and audio replacement packs. The game was ported to the Source 2 engine in 2015, making it the first game to use it.<br>

				<img src="../image/Dota_2.png" class="image" width=25%>Dota 2 has a large esports scene, with teams from around the world playing in various professional leagues and tournaments. Valve organizes the Dota Pro Circuit, which are a series of tournaments that award qualification points for earning direct invitations to The International, the game's premier tournament held annually. Internationals feature a crowdfunded prize money system that has seen amounts in upwards of US$40 million, making Dota 2 the most lucrative esport. Media coverage of most tournaments is done by a selection of on-site staff who provide commentary and analysis for the ongoing matches similar to traditional sporting events. In addition to playing live to audiences in arenas and stadiums, broadcasts of them are also streamed over the internet and sometimes simulcast on television, with several million in viewership numbers.<br>

				<br>Despite criticism going towards its steep learning curve and overall complexity, Dota 2 was praised for its rewarding gameplay, production quality, and faithfulness to its predecessor, with many considering it to be one of the greatest video games of all time. It has been one of the most played games on Steam since its release, with over a million concurrent players at its peak. The popularity of the game has led to merchandise and media adaptations, including comic books and an anime series, as well as promotional tie-ins to other games and media. The game allows for the community to create their own gamemodes, maps, and cosmetics, which are uploaded to the Steam Workshop. Two spinoff games, Artifact and Dota Underlords, were released by Valve. Dota 2 has been used in machine learning experiments, with a team of bots known as the OpenAI Five showing the capability to defeat professional players.</p>
    	</div>
	</div>

	<h3>Додати коментар</h3>
        <form action="../script_php/comments_dota2.php" method="post">
            <label for="name">Ім'я:</label>
            <input type="text" name="name" required><br>

            <label for="comment">Коментар:</label>
            <textarea name="comment" rows="4" required></textarea><br>

            <input type="submit" value="Додати коментар">
        </form>
        
    <div class="comments-section">
        <h2>Коментарі</h2>
   	<?php
        $comments = file_get_contents('../txt/dota_2.txt');
        if (!empty($comments)) {
            $commentsArray = explode("\n", $comments);
            foreach ($commentsArray as $comment) {
                echo '<h1 >' . $comment . '</h1>';
            }
        }
    ?> 
        </div>
        
    <footer>
        <?php
        $currentDateTime = date('Y-m-d H:i:s');
        echo "<p>$currentDateTime</p>";
        ?>
    </footer>

<script src="../script.js"></script>
</body>
</html>