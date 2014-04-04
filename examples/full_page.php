<?php
use Elements\Element, \Elements\Tags;

$oHTML = new Element(new HTML());
$oHead = new Element(new Head());
$oHead->addTitle("My Home Page");
$oHTML->addContent($oHead);


echo $oHTML->getHTML();