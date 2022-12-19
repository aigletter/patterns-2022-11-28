<?php

namespace patterns\Composite;

class Renderer
{
    public function render(ElementInterface $element)
    {
        echo $element->render() . PHP_EOL;
    }
}