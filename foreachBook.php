<?php

$books = [
    'The Hobbit' => [
        'published' => 1937,
        'author' => 'J. R. R. Tolkien',
        'pages' => 310
    ],
    'Game of Thrones' => [
        'published' => 1996,
        'author' => 'George R. R. Martin',
        'pages' => 835
    ],
    'The Catcher in the Rye' => [
        'published' => 1951,
        'author' => 'J. D. Salinger',
        'pages' => 220
    ],
    'A Tale of Two Cities' => [
        'published' => 1859,
        'author' => 'Charles Dickens',
        'pages' => 544
    ]
];

foreach ($books as $title => $bookInfo) {
		echo $title . PHP_EOL;
	foreach ($bookInfo as $key => $value) {
		echo "$key:  $value" . PHP_EOL;
	}
}

echo "==========================" . PHP_EOL;
echo "Books Published After 1950" . PHP_EOL;
echo "==========================" . PHP_EOL;

foreach ($books as $title => $bookInfo) {
		if ($bookInfo['published'] >= 1950) {
			echo $title . PHP_EOL;
			echo "Published By: " . $bookInfo['published'] . PHP_EOL;
			echo "Written By: " . $bookInfo['author'] . PHP_EOL;
			echo "Number of Pages: " . $bookInfo['pages'] . PHP_EOL;
		}	
}