<?php

$qtd_repositorios = 2;

$url = "https://api.github.com/search/repositories?q=language:php&per_page=".$qtd_repositorios;
$opts = [
    'http' => [
        'method' => 'GET',
        'header' => [
                'User-Agent: PHP'
        ]
    ]
];

$json = file_get_contents($url, false, stream_context_create($opts));
$obj = json_decode($json);
$data = (array) $obj;

echo "<pre>";
var_dump($data);
echo "</pre>";


#$xml = json_decode(json_encode($data),true);
#echo $xml["items"][0]["git_url"];
#echo "<br>";
#echo $xml["items"][1]["git_url"];
#





#foreach ($data->html_url as $git) { 
#    echo $git->git_url; 
#}




