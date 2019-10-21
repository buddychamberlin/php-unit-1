<?php
// *PHP - Random Quote Generator
// *Create the Multidimensional array of quote elements and name it quotes
// *Each inner array element should be an associative array

// Create an array by using two square brackets
$quotes[] = [
    'quote' => "Stay hungry, stay foolish.",
    'source' => "Steve Jobs",
    'citation' => "Stanford commencement",
    'year' => "2005",
    'tag' => 'Public Figure'
];

$quotes[] = [
    'quote' => 'Whether you think you can, or you think you can’t – you’re right.',
    'source' => 'Henry Ford',
    //'citation' => 'this is the citation',
    //'year' => 'this is the year',
    'tag' => 'Public Figure'
];

$quotes[] = [
    'quote' => 'Be kind, for everyone you meet is fighting a hard battle.',
    'source' => 'Ian Maclaren', //source: wikipedia
    //'citation' => 'this is the citation',
    //'year' => 'this is the year',
    'tag' => 'Public Figure'
];

$quotes[] = [
    'quote' => "Shake 'n bake.",
    'source' => 'Ricky Bobby',
    'citation' => 'Talladega Nights',
    'year' => '2006',
    'tag' => 'Movie'
];

$quotes[] = [
    'quote' => 'One of the most difficult things is not to change society - but to change yourself.',
    'source' => 'Nelson Mandela',
    //'citation' => 'this is the citation',
    //'year' => 'this is the year',
    'tag' => 'Public Figure'
];

$quotes[] = [
    'quote' => 'Who wants to fit in anyway?',
    'source' => 'Ed Sheeran',
    'citation' => "I don't care",
    'year' => '2019',
    'tag' => 'Music'
];

$quotes[] = [
    'quote' => 'Get busy living, or get busy dying',
    'source' => 'Ellis Boy "Red" Redding',
    'citation' => "The Shawshank Redemption",
    'year' => '1994',
    'tag' => 'Movie'
];

// *Create the getRandomQuote function and name it getRandomQuote

function getRandomQuote (){
  global $quotes;
  $random = rand(0, 6);
  return $quotes[$random];
}
$displayQuote = getRandomQuote();  // Naming it something logical to me

// *Create the printQuote funtion and name it printQuote

function printQuote (){
  $displayQuote = getRandomQuote();  // Setting the variable here again as it was not global
  $mainQuote = '<p class="quote">' . $displayQuote['quote'] . '</p>' . '<p class="source">' . $displayQuote['source'];
  if (isset($displayQuote['citation'])) {
    $mainQuote .= '<span class="citation">' . $displayQuote['citation'] . '</span>';
  }
  if (isset($displayQuote['year'])) {
    $mainQuote .= '<span class="year">' . $displayQuote['year'] . '</span>';
  }
  return $mainQuote . '</p>';
}

$onScreen = printQuote();
echo $onScreen;

?>
