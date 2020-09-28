<?php
/**
 * Copyright (c) 2016 Martin Aarhof
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is furnished
 * to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in all
 * copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 */

namespace Altapay\Types;

class CurrencyTypes
{
    /** @var array<string, string> */
    protected static $currencies = [
            'AED' => '784',
            'AFN' => '971',
            'ALL' => '008',
            'AMD' => '051',
            'ANG' => '532',
            'AOA' => '973',
            'ARS' => '032',
            'AUD' => '036',
            'AWG' => '533',
            'AZN' => '944',
            'BAM' => '977',
            'BBD' => '052',
            'BDT' => '050',
            'BGN' => '975',
            'BHD' => '048',
            'BIF' => '108',
            'BMD' => '060',
            'BND' => '096',
            'BOB' => '068',
            'BOV' => '984',
            'BRL' => '986',
            'BSD' => '044',
            'BTN' => '064',
            'BWP' => '072',
            'BYR' => '974',
            'BZD' => '084',
            'CAD' => '124',
            'CDF' => '976',
            'CHE' => '947',
            'CHF' => '756',
            'CHW' => '948',
            'CLF' => '990',
            'CLP' => '152',
            'CNY' => '156',
            'COP' => '170',
            'COU' => '970',
            'CRC' => '188',
            'CUC' => '931',
            'CUP' => '192',
            'CVE' => '132',
            'CZK' => '203',
            'DJF' => '262',
            'DKK' => '208',
            'DOP' => '214',
            'DZD' => '012',
            'EGP' => '818',
            'ERN' => '232',
            'ETB' => '230',
            'EUR' => '978',
            'FJD' => '242',
            'FKP' => '238',
            'GBP' => '826',
            'GEL' => '981',
            'GHS' => '936',
            'GIP' => '292',
            'GMD' => '270',
            'GNF' => '324',
            'GTQ' => '320',
            'GYD' => '328',
            'HKD' => '344',
            'HNL' => '340',
            'HRK' => '191',
            'HTG' => '332',
            'HUF' => '348',
            'IDR' => '360',
            'ILS' => '376',
            'INR' => '356',
            'IQD' => '368',
            'IRR' => '364',
            'ISK' => '352',
            'JMD' => '388',
            'JOD' => '400',
            'JPY' => '392',
            'KES' => '404',
            'KGS' => '417',
            'KHR' => '116',
            'KMF' => '174',
            'KPW' => '408',
            'KRW' => '410',
            'KWD' => '414',
            'KYD' => '136',
            'KZT' => '398',
            'LAK' => '418',
            'LBP' => '422',
            'LKR' => '144',
            'LRD' => '430',
            'LSL' => '426',
            'LYD' => '434',
            'MAD' => '504',
            'MDL' => '498',
            'MGA' => '969',
            'MKD' => '807',
            'MMK' => '104',
            'MNT' => '496',
            'MOP' => '446',
            'MRO' => '478',
            'MUR' => '480',
            'MVR' => '462',
            'MWK' => '454',
            'MXN' => '484',
            'MXV' => '979',
            'MYR' => '458',
            'MZN' => '943',
            'NAD' => '516',
            'NGN' => '566',
            'NIO' => '558',
            'NOK' => '578',
            'NPR' => '524',
            'NZD' => '554',
            'OMR' => '512',
            'PAB' => '590',
            'PEN' => '604',
            'PGK' => '598',
            'PHP' => '608',
            'PKR' => '586',
            'PLN' => '985',
            'PYG' => '600',
            'QAR' => '634',
            'RON' => '946',
            'RSD' => '941',
            'RUB' => '643',
            'RWF' => '646',
            'SAR' => '682',
            'SBD' => '090',
            'SCR' => '690',
            'SDG' => '938',
            'SEK' => '752',
            'SGD' => '702',
            'SHP' => '654',
            'SLL' => '694',
            'SOS' => '706',
            'SRD' => '968',
            'SSP' => '728',
            'STD' => '678',
            'SYP' => '760',
            'SZL' => '748',
            'THB' => '764',
            'TJS' => '972',
            'TMT' => '934',
            'TND' => '788',
            'TOP' => '776',
            'TRY' => '949',
            'TTD' => '780',
            'TWD' => '901',
            'TZS' => '834',
            'UAH' => '980',
            'UGX' => '800',
            'USD' => '840',
            'USN' => '997',
            'USS' => '998',
            'UYI' => '940',
            'UYU' => '858',
            'UZS' => '860',
            'VEF' => '937',
            'VND' => '704',
            'VUV' => '548',
            'WST' => '882',
            'XAF' => '950',
            'XAG' => '961',
            'XAU' => '959',
            'XBA' => '955',
            'XBB' => '956',
            'XBC' => '957',
            'XBD' => '958',
            'XCD' => '951',
            'XDR' => '960',
            'XOF' => '952',
            'XPD' => '964',
            'XPF' => '953',
            'XPT' => '962',
            'XSU' => '994',
            'XTS' => '963',
            'XUA' => '965',
            'XXX' => '999',
            'YER' => '886',
            'ZAR' => '710',
            'ZMW' => '967',
        ];

    /**
     * @param string $code
     * @return bool
     */
    public static function currencyCodeExists($code)
    {
        return array_key_exists(strtoupper($code), self::$currencies);
    }

    /**
     * @param int $number
     * @return bool
     */
    public static function currencyNumberExists($number)
    {
        return array_key_exists($number, array_flip(self::$currencies));
    }
}
