<?php

namespace patterns\Bridge;

class CsvFormatter implements FormatterInterface
{
    public function format(array $data, string $dir)
    {
        $filename = $dir . '/' . uniqid() . '.csv';
        $file = fopen($filename, 'w');
        fwrite($file, implode(',', array_keys($data)) . PHP_EOL);
        fwrite($file, implode(',', array_values($data)) . PHP_EOL);
        fclose($file);
    }
}