<?php

require_once 'vendor/autoload.php';

use App\Color;
use App\Renderer;
use App\Rectangle;
use App\BorderedRectangle;
use App\PositionedRectangle;

//$renderer = new Renderer(array(
//    new Rectangle(new Color(76, 45, 166), 250, 150),
//    new BorderedRectangle(new Color(166, 164, 45), 300, 250, 'blue'),
//    new PositionedRectangle(new Color(166, 45, 50), 400, 350, 100, 500)
//));

// Using addShape method and type hint in it, we can avoid situations when client's code
// tries to put into shapes array everything except object of the Component type.
$renderer = new Renderer;

$renderer->addShape(new Rectangle(new Color(76, 45, 166), 250, 150));
$renderer->addShape(new BorderedRectangle(new Color(166, 164, 45), 300, 250, 'blue'));
$renderer->addShape(new PositionedRectangle(new Color(166, 45, 50), 400, 350, 100, 500));

$renderer->show();
