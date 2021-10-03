<?php

class City
{
    public $cityID, $countryCode, $countryName, $regionCode,
        $regionName, $cityCode, $cityName, $abbreviation, $indexMin, $indexMax;

    public function __construct()
    {
    }

    public function regPropsCity($mass, $city)
    {
        foreach ($mass as $key => $key1) {

            foreach ($key1 as $city_id => $cities) {

                if (in_array($city, $cities)) {
                    $this->cityID = $cities['cityId'];
                    $this->countryCode = $cities['countryCode'];
                    $this->countryName = $cities['countryName'];
                    $this->regionCode = $cities['regionCode'];
                    $this->regionName = $cities['regionName'];
                    $this->cityCode = $cities['cityCode'];
                    $this->cityName = $cities['cityName'];
                    $this->abbreviation = $cities['abbreviation'];
                    $this->indexMin = $cities['indexMin'];
                    $this->indexMax = $cities['indexMax'];
                }
            }
        }
    }

    public function echoPropsCity()
    {
        print "ID города: $this->cityID";
        echo '<br>';
        print "Регион города: $this->regionName";
    }
}
