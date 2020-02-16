<?php

require_once './vendor/autoload.php';

$phpWord = new \PhpOffice\PhpWord\PhpWord();

$section = $phpWord->addSection();

/* $section->addText('"Learn from yesterday, live for today, hope for tomorrow. The important thing is not to stop questioning." (Albert Einstein)'
); */

$fontStyle = new \PhpOffice\PhpWord\Style\Font();
$fontStyle->setBold(false);
$fontStyle->setName('Arial');
$fontStyle->setSize(19);
$myTextElement = $section->addText('Conteúdo do arquivo');
$myTextElement->setFontStyle($fontStyle);

$objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2016');
$objWriter->save('celke.docx');