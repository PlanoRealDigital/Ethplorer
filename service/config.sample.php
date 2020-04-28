<?php
return array(

    'ga'     => '',
    'fb'     => '',
    "mongo" => array(
        "server" => "geonosis.mongodb.umbler.com:52289",
        "dbName" => "everex-db",
    ),
    "ethereum" => "http://127.0.0.1:8545",
    "client"    => array(
        "testnet"       => false,
        "ga"            => '',
        "updateLink"    => '', // Link address
        "tokens" => array(
            'address' => array('symbol'    => '', 'image'     => ''),
        )
    ),
    'redirects' => array(
        'substring' => 'address'
    )
);
