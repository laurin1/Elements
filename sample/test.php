<?php
use Elements\Element, \Elements\Tags;

$oHTML = new Element(new Tags\HTML());
$oHead = new Element(new Tags\Head());
$oHead->addTitle("My Home Page");
$oHTML->addContent($oHead);


echo $oHTML->getHTML();