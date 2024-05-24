<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\CurrencyExchangeRate;

class UpdateCurrencyExchangeRates extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'currency:update';

    /**
     * The console command description.
     *
     * @var string
     */
    
     protected $description = 'Update currency exchange rates';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $apiKey = config('services.currencybeacon.key'); // Assuming you have set the API key in your config/services.php

        $url = 'https://api.currencybeacon.com/v1/latest?api_key=' . $apiKey;
        $data = json_decode(file_get_contents($url), true);

        foreach ($data['response']['rates'] as $currencyCode => $rate) {
            CurrencyExchangeRate::updateOrCreate(
                ['currency_code' => $currencyCode],
                ['rate' => $rate]
            );
        }

        $this->info('Currency exchange rates updated successfully.');
    }
}
