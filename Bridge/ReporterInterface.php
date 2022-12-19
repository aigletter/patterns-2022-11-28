<?php

namespace patterns\Bridge;

interface ReporterInterface
{
    public function report($entity, string $dir);
}