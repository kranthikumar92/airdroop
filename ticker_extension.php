<div id="currency-rate-area">
    <div class="currency-rate-slider">
        <!-- Single Currency Rate Start -->
        <?php
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://pro-api.coinmarketcap.com/v1/cryptocurrency/quotes/latest?symbol=ETH&convert=EUR",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "Accept: application/json",
                "Content-Type: application/json",
                "X-CMC_PRO_API_KEY: dd7eacc4-930e-44b9-8047-a1ddccf2ac82"
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            $data = json_decode($response, true);
            $price = $data['data']['ETH']['quote']['EUR']['price'];
            $change24h = $data['data']['ETH']['quote']['EUR']['percent_change_24h'];
            $change24hClass = $change24h >= 0 ? 'groth-up' : 'groth-down';
            echo '<a href="single-airdrop.php" class="single-currency-rate">
                    <p><strong>ETH:</strong>€ ' . $price . ' <span class="' . $change24hClass . '">(' . $change24h . '%)</span></p>
                </a>';
        }
        ?>
        <!-- Single Currency Rate End -->
    </div>
</div>
