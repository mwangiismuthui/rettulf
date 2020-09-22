<?php

use Illuminate\Database\Seeder;

class BanksOfNigeriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $banks = [
            "Access Bank Plc",
            "Citibank Nigeria Limited",
            "Ecobank Nigeria Plc",
            "Fidelity Bank Plc",
            "First City Monument Bank Limited",
            "First Bank of Nigeria Limited",
            "Guaranty Trust Bank Plc",
            "Globus Bank Limited",
            "Heritage Banking Company Limited",
            "Jaiz Bank Plc",
            "Keystone Bank Limited",
            "Polaris Bank Limited",
            "Providus Bank Limited",
            "Stanbic IBTC Bank Plc",
            "Standard Chartered",
            "Sterling Bank Plc",
            "SunTrust Bank Nigeria Limited",
            "TAJBank Limited",
            "Titan Trust Bank Limited",
            "Union Bank of Nigeria Plc",
            "United Bank for Africa Plc",
            "Unity Bank Plc",
            "Wema Bank Plc",
            "Zenith Bank Plc",

        ];

        foreach ($banks as $bank) {
            \App\BankOfNigeria::create(['bank' => $bank]);
        }
    }
}
