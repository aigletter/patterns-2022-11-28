<?php

namespace patterns\Bridge;

class JsonFormatter implements FormatterInterface
{
    public function format(array $data, string $dir)
    {
        $filename = $dir . '/' . uniqid() . '.json';
        $json = json_encode($data);

        file_put_contents($filename, $json);
    }
}