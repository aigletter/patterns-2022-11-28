<?php

namespace patterns\Observer;

use patterns\Composite\P;

class Order implements \SplSubject
{
    protected $id;

    protected $date;

    protected $status;

    /**
     * @var \SplObserver[]
     */
    private $observers = [];

    public function activate()
    {
        $this->setStatus('active');
    }

    public function process()
    {
        $this->setStatus('process');
    }

    public function setStatus(string $status)
    {
        $this->status = $status;
        $this->notify();
    }

    public function attach(\SplObserver $observer)
    {
        $this->observers[] = $observer;
    }

    public function detach(\SplObserver $observer)
    {
        foreach ($this->observers as $key => $item) {
            if ($observer === $item) {
                unset($this->observers[$key]);
            }
        }
    }

    public function notify()
    {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param mixed $date
     */
    public function setDate($date): void
    {
        $this->date = $date;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }
}