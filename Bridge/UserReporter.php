<?php

namespace patterns\Bridge;

class UserReporter implements ReporterInterface
{
    protected $formatter;

    public function __construct(FormatterInterface $formatter)
    {
        $this->formatter = $formatter;
    }

    /**
     * @param User $entity
     * @param string $dir
     * @return void
     */
    public function report($entity, string $dir)
    {
        $this->formatter->format([
            'name' => $entity->getName(),
            'age' => $entity->getAge()
        ], $dir);
    }
}