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
    //'citation' => 'this is the citation',
    //'year' => 'this is the year'
];

$quotes[] = [
    'quote' => 'Be kind, for everyone you meet is fighting a hard battle.',
    'source' => 'Ian Maclaren', //source: wikipedia
    'citation' => 'Himself',
    //'year' => 'this is the year'
];

$quotes[] = [
    'quote' => 'Shake n bake.',
    'source' => 'Ricky Bobby',
    //'citation' => 'this is the citation',
    'year' => '2006'
];

$quotes[] = [
    'quote' => 'One of the most difficult things is not to change society - but to change yourself.',
    'source' => 'Nelson Mandela',
    //'citation' => 'this is the citation',
    //'year' => 'this is the year'
];

$quotes[] = [
    'quote' => 'Who wants to fit in anyway?',
    'source' => 'Ed Sheeran',
    'citation' => "I don't care",
    'year' => '2019'
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
  $displayQuote = getRandomQuote();
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
