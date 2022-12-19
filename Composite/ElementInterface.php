<?php

namespace patterns\Composite;

interface ElementInterface
{
    public function add(ElementInterface $element);

    public function remote(ElementInterface $element);

    public function render(): string;
}