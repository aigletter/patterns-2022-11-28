<?php

namespace patterns\Composite;

class P extends CompositeAbstract implements ElementInterface
{
    public function render(): string
    {
        $output = '<p>';
        $output .= $this->text;

        $output .= $this->renderChildren();

        $output .= '</p>';

        return $output;
    }


}