# Taxcalulator

When selling goods from a EU member state you will have to calculate VAT as a percentage of the price of the goods. There are some rules on how this should work.

  - If the buyer is a NON-EU __company__ use the sellers country VAT rate.
  - If the buyer is a NON-EU __person__ use the sellers country VAT rate.
  - If the buyer is a EU __company__ with a valid VAT but in the same EU member state use VAT.
  - If the buyer is a EU __company__ with a valid VAT number there should be NO VAT.
  - If the buyer is a EU __company__ without a valid VAT number use the buyers country VAT rate.
  - If the buyer is a EU __person__ use the buyers country VAT rate. 

### Version
0.0.1 - But for real, who updates these things.

### Rates
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

### Usage 

```php
$tc = new TaxCalculator("be");
echo "Your country rate is " . $tc->getOriginRate();
```

```php
$tc = new TaxCalculator("fr");
echo "If you sell from " . $tc->getOriginCountry() . " to USA the rate is " . $tc->getRate("USA") . "%\n";
echo "If you sell from " . $tc->getOriginCountry() . " to USA company the rate is " . $tc->getRate("USA", true) . "%\n";
echo "If you sell from " . $tc->getOriginCountry() . " to FR the rate is " . $tc->getRate("FR") . "%\n";
echo "If you sell from " . $tc->getOriginCountry() . " to FR company the rate is " . $tc->getRate("FR", true) . "%\n";
echo "If you sell from " . $tc->getOriginCountry() . " to BE the rate is " . $tc->getRate("BE") . "%\n";
echo "If you sell from " . $tc->getOriginCountry() . " to BE company the rate is " . $tc->getRate("BE", true) . "%\n";

```

