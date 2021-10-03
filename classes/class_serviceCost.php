<?php

class ServiceCost
{
    public $delCost = array();

    function __construct()
    {
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
                'cityName' => $_REQUEST['city1'],
                'countryCode' => 'BY'
            ),
            'delivery' => array(
                'cityName' => $_REQUEST['city2'],
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
