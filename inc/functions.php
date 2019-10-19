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
    'quote' => 'quote2 text',
    'source' => 'person2 name',
    'citation' => 'this is the citation2',
    'year' => 'this is the year2'
];

$quotes[] = [
    'quote' => 'quote3 text',
    'source' => 'person3 name',
    'citation' => 'this is the citation3',
    'year' => 'this is the year3'
];

$quotes[] = [
    'quote' => 'quote4 text',
    'source' => 'person4 name',
    'citation' => 'this is the citation4',
    'year' => 'this is the year4'
];

$quotes[] = [
    'quote' => 'quote5 text',
    'source' => 'person5 name',
    'citation' => 'this is the citation5',
    'year' => 'this is the year5'
];

// *Create the getRandomQuote function and name it getRandomQuote

function getRandomQuote (){
  return rand(0, 4);
};

$random = getRandomQuote();

// $randomQuote = getRandomQuote();


// *Create the printQuote funtion and name it printQuote

echo $random;

?>
