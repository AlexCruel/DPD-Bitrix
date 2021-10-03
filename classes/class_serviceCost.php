<?php

class ServiceCost
{
    public $delCost = array();
    public $cityPickup, $cityDelivery, $weight;

    public function __construct($cityPickup, $cityDelivery, $weight)
    {
        $this->cityPickup = $cityPickup;
        $this->cityDelivery = $cityDelivery;
        $this->weight = $weight;
    }

    function stdToArray($obj)
    {
        $rc = (array)$obj;

        foreach ($rc as $key => $item) {
            $rc[$key] = (array)$item;

            foreach ($rc[$key] as $keys => $items) {
                $rc[$key][$keys] = (array)$items;
            }
        }

        return $rc;
    }

    public function getServiceCost()
    {
        include '../settings.php';

        $client = new SoapClient("$server[0]calculator2?wsdl");

        $arData = array(
            'auth' => array(
                'clientNumber' => $MY_NUMBER,
                'clientKey' => $MY_KEY
            ),
            'pickup' => array(
                'cityName' => $this->cityPickup,
                'countryCode' => 'BY'
            ),
            'delivery' => array(
                'cityName' => $this->cityDelivery,
                'countryCode' => 'BY'
            ),
            'selfPickup' => false,
            'selfDelivery' => false,
            'weight' => $_REQUEST['weight']
        );

        $arRequest['request'] = $arData;

        $ret = $client->getServiceCost2($arRequest);

        return $ret;
    }
}

?>