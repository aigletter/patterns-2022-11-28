<?php

require_once __DIR__ . '/../../vendor/autoload.php';

$renderer = new \patterns\Composite\Renderer();


$span = new \patterns\Composite\Span('Test content');
$renderer->render($span);

$p = new \patterns\Composite\P('Test p content');
$p->add($span);

$div = new \patterns\Composite\Div();
$div->add($p);
$div->add(new \patterns\Composite\P('Hello world'));
$div->add(new \patterns\Composite\Span('Test span'));

$renderer->render($div);