<?php
/**
 * taxcalculator.php
 *
 * EU Vat Rate Calculator
 *
 * @author     Sam Hermans 
 * @copyright  2016 Sam Hermans
 * @link       https://github.com/MrSam/taxcalculator
 */


/**
 * Class TaxCalculator
 */
Class TaxCalculator {

    private $origin_country;
    private $origin_rate;

    // Initialise as float
    const VAT_RATES = [
        'AT' => 20.0,
        'BE' => 21.0,
        'BG' => 20.0,
        'CY' => 19.0,
        'CZ' => 21.0,
        'DE' => 19.0,
        'DK' => 25.0,
        'EE' => 20.0,
        'EL' => 23.0,
        'ES' => 21.0,
        'FI' => 24.0,
        'FR' => 20.0,
        'GB' => 20.0,
        'GR' => 23.0,
        'IE' => 23.0,
        'IT' => 22.0,
        'HR' => 25.0,
        'HU' => 27.0,
        'LV' => 21.0,
        'LT' => 21.0,
        'LU' => 17.0,
        'MT' => 18.0,
        'NL' => 21.0,
        'NO' => 25.0,
        'PL' => 23.0,
        'PT' => 23.0,
        'RO' => 20.0,
        'SE' => 25.0,
        'SK' => 20.0,
        'SI' => 22.0,
    ];

    public function __construct($origin_country_code)
    {

        if($rate = $this->getCountryRate($origin_country_code)) {
            $this->origin_country = strtoupper($origin_country_code);
            $this->origin_rate = $rate;
        } else {
            throw new Exception("Country code ". $origin_country_code ." not found. If it's not in this list you should not be using this module.");
        }
    }

    /**
     * @return string
     */
    public function getOriginCountry()
    {
        return $this->origin_country;
    }

    /**
     * @return mixed
     */
    public function getOriginRate()
    {
        return $this->origin_rate;
    }

    /**
     * @param $country_code
     * @return bool|mixed
     */
    public function getCountryRate($country_code) {
        $country_code = strtoupper($country_code);

        if(array_key_exists($country_code, self::VAT_RATES)) {
           return self::VAT_RATES[$country_code];
        }

        return false;
    }

    /**
     * @param $destination_country
     * @param bool $eu_vat_company
     * @return bool|int|mixed
     */
    public function getRate($destination_country, $eu_vat_company = false) {

        // If dest country is EU member state and you mark it as valid VAT company
        // return 0
        if($eu_vat_company && $this->getCountryRate($destination_country)) {
            // unless if it's in your own country!
            if(strtoupper($destination_country) == strtoupper($this->getOriginCountry()))
                return $this->getOriginRate();

            return 0;
        }

        // If dest country is EU member state return the rate of that country
        if($rate = $this->getCountryRate($destination_country)) {
            return $rate;
        }

        // Return my rate
        return $this->getOriginRate();
    }
}