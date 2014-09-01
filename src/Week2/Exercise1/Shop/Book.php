<?php
/**
 * Created by PhpStorm.
 * User: dchellem
 * Date: 9/1/14
 * Time: 8:15 AM
 */

namespace Shop;

class Book extends ShopProduct
{
    private $numberOfPage;

    public function __construct($title, $producerMainName, $producerFirstName, $price, $discount, $numberOfPage)
    {
        parent::__construct($title, $producerMainName, $producerFirstName, $price, $discount);
        $this->numberOfPage = $numberOfPage;
    }

    /**
     * @param  mixed $numberOfPage
     * @return $this
     */
    public function setNumberOfPage($numberOfPage)
    {
        $this->numberOfPage = $numberOfPage;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getNumberOfPage()
    {
        return $this->numberOfPage;
    }

    public function getSummaryLine()
    {
        $base = $this->getSummaryLine();

        return "{$base} - {$this->numberOfPage}";
    }
}
