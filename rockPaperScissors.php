<?php 
$rock = 1;
$paper = 2;
$scissor = 3;

$cont_player1 = 0;
$cont_player2 = 0;
$cont_player3 = 0;
$cont_player4 = 0;

$rounds = array(
	"first_round" => array(),
	"second_round" => array(),
	"final_round" => array()
);

function choose($player){
	switch($player){
		case 1: $choose = "Rock";
			break;
		case 2: $choose = "Paper";
			break;
		case 3: $choose = "Scissors";
			break;
	}
	return $choose;
}

for($i=1;$i<=50;$i++){

	//first play the player1 vs player2
	do{
		$player1 = rand(1,3);
		$player2 = rand(1,3);	
		//this controls the tie events
	}while($player1 == $player2);
	

	if((($player1 == $rock) && ($player2 == $scissor)) 
		|| (($player1 == $paper) && ($player2 == $rock)) 
		|| (($player1 == $scissor) && ($player2 == $paper))){
		
		$choose_p1 = choose($player1);
		$choose_p2 = choose($player2);

		$first_round = array(
			"round" => "first ".$i,
			"winner" => "player1",
			"choice1" => $choose_p1 ."->Player1",
			"choice2" => $choose_p2 ."->Player2"
		);
		do{
			$player3 = rand(1,3);
			$player4 = rand(1,3);	
			//this controls the tie events
		}while($player3 == $player4);
		
		if((($player3 == $rock) && ($player4 == $scissor)) 
		|| (($player3 == $paper) && ($player4 == $rock)) 
		|| (($player3 == $scissor) && ($player4 == $paper))){

			$choose_p3 = choose($player3);
		    $choose_p4 = choose($player4);
			
			$second_round = array(
				"round" => "second ".$i,
				"winner" => "player3",
				"choice1" => $choose_p3 . "->Player3",
				"choice2" => $choose_p4 . "->Player4"
			);
			//if player 1 and 3 wins

			do{
				$player1 = rand(1,3);
				$player3 = rand(1,3);	
			//this controls the tie events
			}while($player1 == $player3);
			
			if((($player1 == $rock) && ($player3 == $scissor)) 
			|| (($player1 == $paper) && ($player3 == $rock)) 
			|| (($player1 == $scissor) && ($player3 == $paper))){

				$choose_p1 = choose($player1);
		    	$choose_p3 = choose($player3);

				$final_round = array(
					"round" => "final ".$i,
					"winner" => "player1",
					"choice1" => $choose_p1 . "->Player1",
					"choice2" => $choose_p3 . "->Player3"
				);
			//if player 1 wins a final
			$cont_player1 ++;
			}else{
				$choose_p1 = choose($player1);
		    	$choose_p3 = choose($player3);

				$final_round = array(
					"round" => "final ".$i,
					"winner" => "player3",
					"choice1" => $choose_p1 . "->Player1",
					"choice2" => $choose_p3 . "->Player3"
				);
				//if player 3 wins a final 
				$cont_player3 ++;
			}

		}else{
			$choose_p3 = choose($player3);
		    $choose_p4 = choose($player4);

			$second_round = array(
				"round" => "second ".$i,
				"winner" => "player4",
				"choice1" => $choose_p3 . "->Player3",
				"choice2" => $choose_p4 . "->Player4"
			);
			//if player 1 and 4 wins they play again	
			
			do{
				$player1 = rand(1,3);
				$player4 = rand(1,3);	
			//this controls the tie events
			}while($player1 == $player4);
			
			if((($player1 == $rock) && ($player4 == $scissor)) 
			|| (($player1 == $paper) && ($player4 == $rock)) 
			|| (($player1 == $scissor) && ($player4 == $paper))){

				$choose_p1 = choose($player1);
		    	$choose_p4 = choose($player4);

				$final_round = array(
					"round" => "final ".$i,
					"winner" => "player1",
					"choice1" => $choose_p1 . "->Player1",
					"choice2" => $choose_p4 . "->Player4"
				);
				//if player 1 wins a final
				$cont_player1 ++;
			}else{

				$choose_p1 = choose($player1);
		    	$choose_p4 = choose($player4);

				$final_round = array(
					"round" => "final ".$i,
					"winner" => "player4",
					"choice1" => $choose_p1 . "->Player1",
					"choice2" => $choose_p4 . "->Player4"
				);
				//if player 4 wins a final 
				$cont_player4 ++;
			}
		}
	}else{
		$choose_p1 = choose($player1);
		$choose_p2 = choose($player2);

		$first_round = array(
			"round" => "first ".$i,
			"winner" => "player2",
			"choice1" => $choose_p1 . "->Player1",
			"choice2" => $choose_p2 . "->Player2"
		);
		do{
			$player3 = rand(1,3);
			$player4 = rand(1,3);	
			//this controls the tie events
		}while($player3 == $player4);
		
		if((($player3 == $rock) && ($player4 == $scissor)) 
		|| (($player3 == $paper) && ($player4 == $rock)) 
		|| (($player3 == $scissor) && ($player4 == $paper))){

			$choose_p3 = choose($player3);
		    $choose_p4 = choose($player4);

			$second_round = array(
				"round" => "second ".$i,
				"winner" => "player3",
				"choice1" => $choose_p3 . "->Player3",
				"choice2" => $choose_p4 . "->Player4"
			);
			//if player 2 and 3 wins
			do{
				$player2 = rand(1,3);
				$player3 = rand(1,3);	
			//this controls the tie events
			}while($player2 == $player3);
			
			if((($player2 == $rock) && ($player3 == $scissor)) 
			|| (($player2 == $paper) && ($player3 == $rock)) 
			|| (($player2 == $scissor) && ($player3 == $paper))){

				$choose_p2 = choose($player2);
		    	$choose_p3 = choose($player3);

				$final_round = array(
					"round" => "final ".$i,
					"winner" => "player2",
					"choice1" => $choose_p2 . "->Player2",
					"choice2" => $choose_p3 . "->Player3"
				);
				//if player 2 wins a final
				$cont_player2 ++;
			}else{

				$choose_p2 = choose($player2);
		    	$choose_p3 = choose($player3);

				$final_round = array(
					"round" => "final ".$i,
					"winner" => "player3",
					"choice1" => $choose_p2 . "->Player2",
					"choice2" => $choose_p3 . "->Player3"
				);
				//if player 3 wins a final
				$cont_player3 ++;
			}
			
		}else{

			$choose_p3 = choose($player3);
		   	$choose_p4 = choose($player4);

			$second_round = array(
				"round" => "second ".$i,
				"winner" => "player4",
				"choice1" => $choose_p3 . "->Player3",
				"choice2" => $choose_p4 . "->Player4"
			);
			//if player 2 and 4 wins
			do{
				$player2 = rand(1,3);
				$player4 = rand(1,3);	
			//this controls the tie events
			}while($player2 == $player4);
			
			if((($player2 == $rock) && ($player4 == $scissor)) 
			|| (($player2 == $paper) && ($player4 == $rock)) 
			|| (($player2 == $scissor) && ($player4 == $paper))){

				$choose_p2 = choose($player2);
		    	$choose_p4 = choose($player4);

				$final_round = array(
					"round" => "final ".$i,
					"winner" => "player2",
					"choice1" => $choose_p2 . "->Player2",
					"choice2" => $choose_p4 . "->Player4"
				);
				//if player 2 wins a final
				$cont_player2 ++;
			}else{

				$choose_p2 = choose($player2);
		    	$choose_p4 = choose($player4);

				$final_round = array(
					"round" => "final ".$i,
					"winner" => "player4",
					"choice1" => $choose_p2 . "->Player2",
					"choice2" => $choose_p4 . "->Player4"
				);
				//if player 4 wins a final
				$cont_player4 ++;
			}	
		}
	}
	array_push($rounds['first_round'], $first_round);
	array_push($rounds['second_round'], $second_round);
	array_push($rounds['final_round'], $final_round);


}
echo "<table border='1'>";
echo "<th> First Round </th>";
echo "<th> Winner of first round </th>";
echo "<th> Second Round </th>";
echo "<th> Winner of second round";
echo "<th> Final Round </th>";
echo "<th> Winner of FINAL ROUND";
	for($i=0; $i<50;$i++){
		echo "<tr>";
		echo "<td>".$rounds['first_round'][$i]['round']."</td>";
		echo "<td>"
				.$rounds['first_round'][$i]['winner'].
				"<ul>".
					"<li>".	$rounds['first_round'][$i]['choice1'] ."</li>"
					."<li>".$rounds['first_round'][$i]['choice2'] ."</li>"
				."</ul>".
				"</td>";
		echo "<td>".$rounds['second_round'][$i]['round']."</td>";
		echo "<td>"
				.$rounds['second_round'][$i]['winner'].
				"<ul>".
					"<li>".	$rounds['second_round'][$i]['choice1'] ."</li>"
					."<li>".$rounds['second_round'][$i]['choice2'] ."</li>"
				."</ul>".
				"</td>";
		echo "<td>".$rounds['final_round'][$i]['round']."</td>";
		echo "<td>"
				.$rounds['first_round'][$i]['winner'].
				"<ul>".
					"<li>".	$rounds['final_round'][$i]['choice1'] ."</li>"
					."<li>".$rounds['final_round'][$i]['choice2'] ."</li>"
				."</ul>".
				"</td>";
		echo "</tr>";
	}


echo "</table>";

echo "<br>";
echo "<h1>Final points table</h1>";

echo "<table border='1'>";
	echo "<th>Player 1</th>";
	echo "<th>Player 2</th>";
	echo "<th>Player 3</th>";
	echo "<th>Player 3</th>";
	echo "<tr>";
		echo "<td>".$cont_player1."</td>";
		echo "<td>".$cont_player2."</td>";
		echo "<td>".$cont_player3."</td>";
		echo "<td>".$cont_player4."</td>";
	echo "</tr>";
echo "</table>";



?>