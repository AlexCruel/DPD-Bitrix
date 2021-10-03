<?php

class Cities
{
    public $countryCode;

    public function __construct($countryCode)
    {
        $this->countryCode = $countryCode;
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

    public function findCities()
    {
        include '../settings.php';

        $client = new SoapClient("$server[0]geography2?wsdl");

        $arData = array(
            'auth' => array(
                'clientNumber' => $MY_NUMBER,
                'clientKey' => $MY_KEY
            ),
            'countryCode' => $this->countryCode
        );

        $arRequest['request'] = $arData;

        $ret = $client->getCitiesCashPay($arRequest);

        return $ret;
    }
}

// $ret = 'saf';



// $city = 'Екатеринбург';
// $findCity = (array)findCity($city);
// $mass = stdToArray($findCity);

// echo '<pre>';
// // print_r($findCity);

// $cityClass = new City();
// $cityClass->regPropsCity($mass, $city);
// $cityClass->echoPropsCity();

// echo '</pre>';

?>



