# Taxcalulator

When selling goods from a EU member state you will have to calculate VAT as a percentage of the price of the goods. There are some rules on how this should work.

  - If the buyer is a NON-EU __company__ use the sellers country VAT rate.
  - If the buyer is a NON-EU __person__ use the sellers country VAT rate.
  - If the buyer is a EU __company__ with a valid VAT number there should be NO VAT.
  - If the buyer is a EU __company__ without a valid VAT number use the buyers country VAT rate.
  - If the buyer is a EU __person__ use the buyers country VAT rate. 

### Version
0.0.1 - But for real, who updates these things.

### Rates
        'AT' => 0.20,
        'BE' => 0.21,
        'BG' => 0.20,
        'CY' => 0.19,
        'CZ' => 0.21,
        'DE' => 0.19,
        'DK' => 0.25,
        'EE' => 0.20,
        'EL' => 0.23,
        'ES' => 0.21,
        'FI' => 0.24,
        'FR' => 0.20,
        'GB' => 0.20,
        'GR' => 0.23,
        'IE' => 0.23,
        'IT' => 0.22,
        'HR' => 0.25,
        'HU' => 0.27,
        'LV' => 0.21,
        'LT' => 0.21,
        'LU' => 0.17,
        'MT' => 0.18,
        'NL' => 0.21,
        'NO' => 0.25,
        'PL' => 0.23,
        'PT' => 0.23,
        'RO' => 0.20,
        'SE' => 0.25,
        'SK' => 0.20,
        'SI' => 0.22,

### Usage

```sh
$ todo
```

