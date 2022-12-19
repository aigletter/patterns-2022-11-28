<?php

namespace patterns\Bridge;

class OrderReporter implements ReporterInterface
{
    protected $formatter;

    public function __construct(FormatterInterface $formatter)
    {
        $this->formater = $formatter;
    }

    /**
     * @param Order $entity
     * @return void
     */
    public function report($entity, string $dir)
    {
        $this->formater->format([
            'id' => $entity->getId(),
            'date' => $entity->getDate(),
            'sum' => $entity->getSum()
        ], $dir);
    }
}