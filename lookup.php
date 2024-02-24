<?php

# Based on https://github.com/EnnoMeijers/ner-not-pipeline/blob/main/config.json

$NoT=array(
 "GPE" => array(
      "https://demo.netwerkdigitaalerfgoed.nl/geonames",
      "https://query.wikidata.org/sparql#entities-places"
    ),
  "PERSON" => array(
      "https://data.netwerkdigitaalerfgoed.nl/rkd/rkdartists/sparql",
      "http://data.bibliotheken.nl/thesp/sparql",
      "https://data.muziekschatten.nl/sparql/#personen",
      "https://query.wikidata.org/sparql#entities-persons",
      "https://data.beeldengeluid.nl/id/datadownload/0030"
    ),
  "DATE" => array(
      "http://vocab.getty.edu/aat/sparql/styles-and-periods",
      "https://data.cultureelerfgoed.nl/PoolParty/sparql/term/id/cht/styles-and-periods"
    ),
  "ORG" => array(
      "https://query.wikidata.org/sparql#entities-all"
    ),
  "EVENT" => array(
      "https://query.wikidata.org/sparql#entities-all"
    ),
  "CONCEPT" => array(
      "http://vocab.getty.edu/aat/sparql",
      "https://data.cultureelerfgoed.nl/PoolParty/sparql/term/id/cht"
    )
);


header('Content-Type: application/json; charset=utf-8');

if (isset($_GET["type"]) && in_array($_GET["type"],array_keys($NoT))) {

	// URL to send the request
	$url = 'https://termennetwerk-api.netwerkdigitaalerfgoed.nl/graphql';

	// Fixed GraphQL query to be sent in the request
	$data = json_encode([
		"query" => "query Terms (\$sources: [ID]!, \$query: String!) {
					terms (sources: \$sources query: \$query queryMode: OPTIMIZED) {
					  source {
						name
						uri
					  }
					  result {
						... on Terms {
						  terms {
							uri
							prefLabel
							altLabel
							scopeNote
							broader {
							  uri
							  prefLabel
							}
							narrower {
							  uri
							  prefLabel
							}
						  }
						}
						... on Error {
						  __typename
						  message
						}
					  }
					}
				  }",
		"variables" => [
			"sources" => $NoT[$_GET["type"]],
			"query" => $_GET["term"]
		]
	]);

	// Headers for the request
	$headers = [
		'User-Agent: NoT-REST-proxy (https://lab.coret.org/not-rest-proxy/)',
		'Content-Type: application/json'
	];

	// Initialize cURL session
	$ch = curl_init();

	// Set the cURL options
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

	// Execute the request
	$response = curl_exec($ch);

	// Close cURL session
	curl_close($ch);

	echo $response;

} else {
	echo "{}";
}
