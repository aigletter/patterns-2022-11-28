<?php

namespace patterns\Composite;

abstract class CompositeAbstract
{
    /**
     * @var ElementInterface[]
     */
    protected $children;

    protected $text;

    public function __construct($text = '')
    {
        $this->text = $text;
    }

    public function add(ElementInterface $element)
    {
        $this->children[] = $element;
    }

    public function remote(ElementInterface $element)
    {
        foreach ($this->children as $key => $child) {
            if ($element === $child) {
                unset($this->children[$key]);
            }
        }
    }

    protected function renderChildren()
    {
        $output = '';
        foreach ((array) $this->children as $child) {
            $output .= $child->render();
        }

        return $output;
    }
}