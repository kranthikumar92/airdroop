<div id="currency-rate-area">
    <div class="currency-rate-slider">
        <?php
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://pro-api.coinmarketcap.com/v1/cryptocurrency/listings/latest?start=1&limit=12&convert=USD',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => array(
                'X-CMC_PRO_API_KEY: dd7eacc4-930e-44b9-8047-a1ddccf2ac82'
            ),
        ));

        $response = curl_exec($curl);
        $data = json_decode($response, true);

        foreach ($data['data'] as $coin) {
            $symbol = $coin['symbol'];
            $price = number_format($coin['quote']['USD']['price'], 2);
            $change_24h = $coin['quote']['USD']['percent_change_24h'];

            $change_class = ($change_24h > 0) ? 'groth-up' : 'groth-down';

            echo "<a href='#' class='single-currency-rate'>
                    <p><strong>{$symbol}:</strong> \$ {$price} <span class='{$change_class}'>({$change_24h}%)</span></p>
                  </a>";
        }

        curl_close($curl);
        ?>
    </div>
</div>
