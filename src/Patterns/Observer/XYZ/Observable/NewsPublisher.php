<?php

namespace XYZ\Observable;

use XYZ\Subscriber\Subscriber;

abstract class NewsPublisher
{
    protected $subscribers=array();
    protected $currentNews;

    public function attach(Subscriber $subscriber)
    {
        $this->subscribers[]=$subscriber;

        return $this;
    }

    public function detach(Subscriber $subscriber)
    {
        if ($key=array_search($subscriber, $this->subscribers)) {
            unset($this->subscribers[$key]);
        }

        return $this;
    }

    public function notify()
    {
        foreach ($this->subscribers as $subscriber) {
            $subscriber->update();
        }
    }

    public function setCurrentNews($currentNews)
    {
        $this->currentNews=$currentNews;

        return $this;
    }

    abstract public function update(Subscriber $subscriber);
}
