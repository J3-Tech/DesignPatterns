<?php

namespace Shop;

abstract class ShopProduct
{
    private $title;
    private $producerMainName;
    private $producerFirstName;
    private $price;
    private $discount;

    public function __construct($title, $producerMainName, $producerFirstName, $price, $discount)
    {
        $this->title = $title;
        $this->producerMainName = $producerMainName;
        $this->producerFirstName = $producerFirstName;
        $this->price = $price;
        $this->discount = $discount;
    }

    /**
     * Gets the value of title.
     *
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets the value of title.
     *
     * @param mixed $title the title
     *
     * @return self
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Gets the value of producerMainName.
     *
     * @return mixed
     */
    public function getProducerMainName()
    {
        return $this->producerMainName;
    }

    /**
     * Sets the value of producerMainName.
     *
     * @param mixed $producerMainName the producer main name
     *
     * @return self
     */
    public function setProducerMainName($producerMainName)
    {
        $this->producerMainName = $producerMainName;

        return $this;
    }

    /**
     * Gets the value of producerFirstName.
     *
     * @return mixed
     */
    public function getProducerFirstName()
    {
        return $this->producerFirstName;
    }

    /**
     * Sets the value of producerFirstName.
     *
     * @param mixed $producerFirstName the producer first name
     *
     * @return self
     */
    public function setProducerFirstName($producerFirstName)
    {
        $this->producerFirstName = $producerFirstName;

        return $this;
    }

    /**
     * Gets the value of price.
     *
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Sets the value of price.
     *
     * @param mixed $price the price
     *
     * @return self
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Gets the value of discount.
     *
     * @return mixed
     */
    public function getDiscount()
    {
        return $this->discount;
    }

    /**
     * Sets the value of discount.
     *
     * @param mixed $discount the discount
     *
     * @return self
     */
    public function setDiscount($discount)
    {
        $this->discount = $discount;

        return $this;
    }

    public function getSummaryLine()
    {
        return "{$this->title}($this->producerMainName, $this->producerFirstName)";
    }
}
