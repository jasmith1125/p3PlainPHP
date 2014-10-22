<?php 

//pull data from form
if(isset ($_POST['text_type'])) {
	$text_type = $_POST['text_type'];
	} else {
	$text_type = 'lorem_ipsum';
}

if(isset ($_POST['number_of_paragraphs'])) {
	$number_of_paragraphs = $_POST['number_of_paragraphs'];
	} else {
		$number_of_paragraphs = 5;
}

//prevent problems when 0 or large number typed in url
$error = null;
if($number_of_paragraphs < 1 || $number_of_paragraphs > 20) {
     $number_of_paragraphs = $error;
     $error = "Please choose a number between 1 and 20";
}


//run logic on form responses
if($words = file('words.txt')) {
	
  $selected_words = [];
  
  for($i = 0; $i < $count; $i++) {
   //generate random number from 0 to $words array size
  	$max = count($words) - 1;
  	$rand = rand(0, $max);

  	$word = $words[$rand];
 
  	array_push($selected_words, $word);
  } 
}

if($number) {
	$numbers = range(1, 50);
  $rand = rand(0, count($numbers) -1);
  $number = $numbers[$rand];
} 

if($symbol) {
  $symbols = ['!', '@', '#', '$', '%', '^', '&', '*'];
  $rand = rand(0, count($symbols) -1);
  $symbol =  $symbols[$rand];
} 

if($uppercase) {
	foreach($selected_words as $index => $word) {
		$selected_words[$index] = ucfirst($word);
		//echo $selected_words[$index];
	}
	}


//update variables to send back

$password = implode("", $selected_words)." ".$symbol." ".$number;