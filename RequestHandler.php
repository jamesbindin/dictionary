<!-- checks if word_id is set as a GET request. if so a call is made to the api, -->
<!-- a definition or message is echoed back to the client -->

<?php
    if(isset($_GET['word_id'])){
        // define url with the word_id value
        $url = "https://od-api.oxforddictionaries.com/api/v2/entries/en-gb/". $_GET['word_id'] ."?fields=definitions&strictMatch=true";
        
        // initilize curl
        $ch = curl_init($url);

        // add headers
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'App_id: 2d99e335',
            'App_key: f8a3a58634f2132471c0e4e3b933c48e'
        ));

        // set curl_exec to return result as variable
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, True);

        // send request and store result
        $server_output = curl_exec($ch);

        // close curl
        curl_close($ch);
        
        // convert to assoc
        $json_res =  json_decode($server_output);

        // checks definition exists, then sends the definition or message
        if(isset($json_res->results[0]->lexicalEntries[0]->entries[0]->senses[0]->definitions[0])){
            $definition = $json_res->results[0]->lexicalEntries[0]->entries[0]->senses[0]->definitions[0];
            // sends back escaped string
            echo htmlspecialchars($definition);
        } else {
            echo 'Sorry, we could not find a match.';
        }

    }



?>