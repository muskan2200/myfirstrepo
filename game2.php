
<!DOCTYPE html>
<?php session_start();?>
<html>
<head>
<title>Rock--Paper--Scissor</title>
</head>
<body>
<h1>Select....</h1>
<form action="game2.php"

method="post" />

<input type="image" src="images/2.png" alt="Rock" name="user_choice" value="Rock" title="Rock" /> <br /><br />

<input type="image" src="images/1.png" alt="Paper" name="user_choice" value="Paper" title="Paper" /> <br /><br />

<input type="image" src="images/3.png" alt="Scissors" name="user_choice" value="Scissors" title="Scissors" /> <br /><br />


</form>


	<?php
	
if ($_POST['user_choice'])
{
	   $user_choice = $_POST['user_choice'];
 $Choosefrom= array(Rock, Paper, Scissors);

    $Choice= rand(0,2);

    $Computer=$Choosefrom[$Choice];	
	
    IF($user_choice == $Computer){

    echo 'Result : Draw +0';

    $_SESSION['Score']= (int)$_SESSION['Score'];

    }

    ELSE IF($user_choice == 'Rock' && $Computer == 'Scissors'){

    echo 'Result : Win +1';

   $_SESSION['Score']= (int)$_SESSION['Score'] +1;

    }

    ELSE IF($user_choice == 'Rock' && $Computer == 'Paper'){

    echo 'Result : Lose -1';

    $_SESSION['Score']= (int)$_SESSION['Score'] -1;

    }

    ELSE IF($user_choice == 'Scissors' && $Computer == 'Rock'){

    echo 'Result : Lose -1';

    $_SESSION['Score']= (int)$_SESSION['Score'] -1;

    }

    ELSE IF($user_choice == 'Scissors' && $Computer == 'Paper'){

    echo 'Result : Win +1';

    $_SESSION['Score']= (int)$_SESSION['Score'] +1;

    }

    ELSE IF($user_choice == 'Paper' && $Computer == 'Rock'){

    echo 'Result : Win +1';

    $_SESSION['Score']= (int)$_SESSION['Score'] +1;

    }

    ELSE IF($user_choice == 'Paper' && $Computer == 'Scissors'){

    echo 'Result : Lose -1';

    $_SESSION['Score']= (int)$_SESSION['Score'] -1;

    }

    echo 'You\'re score is currently: '.$_SESSION['Score'].' ';

    echo '<a href="game2.php">Play Again ?</a>';

}
	
?>
</body>
</html>