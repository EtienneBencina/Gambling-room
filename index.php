<!DOCTYPE html>
<html lang="sl">
	<head>
		<title>	
            Roll the dice
		</title>
		<meta charset="utf-8" >
        <link rel="stylesheet" href="css/Style.css">
		<link rel="shortcut icon" href="images/Grayicon.ico" type="image/x-icon">
		<link rel="icon" href="images/favicon.ico" type="image/x-icon">
        

	</head>
	<body onload="generate()">
    <div id="Header">
                <strong class="naslov">Roll the dice</strong>
        </div>
		<form name="Obrazec" id="Obrazec" method="post" autocomplete="off" action="game.php" >
        
        
        <div id="wrapper">
            <div class="playerk">
                <strong>PLAYER 1</strong></br>
                <input type="text" name="playerone" id="player1" maxlength="10" required>
            </div>
            <div class="playerk">
                <strong>PLAYER 2</strong></br>
                <input type="text" name="playertwo" id="player2" maxlength="10" required>
            </div>
            <div class="playerk">
                <strong>PLAYER 3</strong></br>
                <input type="text" name="playerthree" id="player3" maxlength="10" required>
            </div>
            <div class="num">
                <strong>NUMBER OF DICE</strong></br>
                <select name="dNum" id="dNum">
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
            <div class="num">
                <strong>NUMBER OF ROUNDS</strong></br>
                <select name="rNum" id="rNum">
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                    <option value="4">Four</option>
                    <option value="5">Five</option>
                </select>
            </div>
            <div class="num">
                <button type="submit" id="start" >START</button>
                <input id="gumb" name="buttoun" style="display:none;">
            </div>
        </div>
        </form>
	</body>
</html>