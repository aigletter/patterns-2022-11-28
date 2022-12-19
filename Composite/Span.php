<?php

namespace patterns\Composite;

class Span extends CompositeAbstract implements ElementInterface
{
    public function render(): string
    {
        $output = '<span>';
        $output .= $this->text;
        $output .= $this->renderChildren();
        $output .= '</span>';

        return $output;
    }
}