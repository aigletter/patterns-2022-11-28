<?php

namespace patterns\Composite;

class Div extends CompositeAbstract implements ElementInterface
{
    public function render(): string
    {
        $output = '<div>';
        $output .= $this->text;
        $output .= $this->renderChildren();
        $output .= '</div>';

        return $output;
    }
}