<?php
// *PHP - Random Quote Generator
// *Create the Multidimensional array of quote elements and name it quotes
// *Each inner array element should be an associative array

$quotes[] = [
    'quote' => "Stay hungry, stay foolish.",
    'source' => "Steve Jobs",
    'citation' => "Stanford commencement",
    'year' => "2005"
];

$quotes[] = [
    'quote' => 'Whether you think you can, or you think you can’t – you’re right.',
    'source' => 'Henry Ford',
    //'citation' => 'this is the citation2',
    //'year' => 'this is the year2'
];

$quotes[] = [
    'quote' => 'Be kind, for everyone you meet is fighting a hard battle.',
    'source' => 'Ian Maclaren', //source: wikipedia
    //'citation' => 'this is the citation3',
    //'year' => 'this is the year3'
];

$quotes[] = [
    'quote' => 'Shake n bake.',
    'source' => 'Ricky Bobby',
    //'citation' => 'this is the citation4',
    //'year' => 'this is the year4'
];

$quotes[] = [
    'quote' => 'One of the most difficult things is not to change society - but to change yourself.',
    'source' => 'Nelson Mandela',
    //'citation' => 'this is the citation5',
    //'year' => 'this is the year5'
];

// *Create the getRandomQuote function and name it getRandomQuote

function getRandomQuote (){
  global $quotes;
  $random = rand(0, 4);
  return $quotes[$random];
}
$displayQuote = getRandomQuote();

// *Create the printQuote funtion and name it printQuote

function printQuote (){
  global $displayQuote;
  $mainQuote = '<p class="quote">' . $displayQuote['quote'] . '</p>' . '<p class="quote">' . $displayQuote['source'] . '</p>';
  //return $displayQuote['quote'] . " " . $displayQuote['source'];
  return $mainQuote;
}

$onScreen = printQuote();
echo $onScreen;
?>
