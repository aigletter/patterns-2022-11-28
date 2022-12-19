<?php

namespace patterns\Bridge;

interface FormatterInterface
{
    public function format(array $data, string $dir);
}