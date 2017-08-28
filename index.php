<?php 

// Autoload SDK package for composer based installations
require 'vendor/autoload.php';

$apiContext = new \PayPal\Rest\ApiContext(
  new \PayPal\Auth\OAuthTokenCredential(
    'AYlSxZf4u9xc3TdbKH9ChZ6Fn9QXRUao6ZvB3R8AQGIAXZ5iszedX_UOMvgx3l5MiU_VwlmgDj7TEme1',
    'EODVJJqrrClEUG4sj0olFX4-3FRqLdh--ks-UxlbV3OHjgu9ruX7aOY-Wp0wfTnoUQvJWK3nE90s-klK'
  )
);


?>

