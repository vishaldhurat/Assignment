<?php

namespace EasternEnterprise\DynamicPrice\Plugin;

class Product
{
    protected $zendClient;

    public function __construct(
        \Zend\Http\Client $zendClient
    ) {
        $this->zendClient = $zendClient;
    }

    public function afterGetPrice(
        \Magento\Catalog\Model\Product $subject,
        $result
    ) {
        $productSku = $subject->getSku();
        $price = $this->getPriceBySku($productSku);
        if (!empty($price)) {
            $result = $price;
        }
        return $result;
    }

    /**
     * calling a third party API to get product price by passing sku
     */
    public function getPriceBySku($productSku)
    {
        // Here you can call a third party API to get product price by passing sku $productSku as shown in below code
        /*try
        {
            $this->zendClient->reset();
            $this->zendClient->setUri("https://api.xyz.com/product/v1/json?q=$productSku"); //external api url
            $this->zendClient->setMethod(\Zend\Http\Request::METHOD_GET);
            $this->zendClient->send();
            $response = $this->zendClient->getResponse()->getBody();
        }
        catch (\Zend\Http\Exception\RuntimeException $runtimeException)
        {
            echo $runtimeException->getMessage();
        }

        $product = json_decode($response, true);

        $price = $product['price'];*/

        $price = 20; // I am using dummy product price now
        return $price;
    }
}
