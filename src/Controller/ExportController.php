<?php

namespace Drupal\your_module\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpFoundation\Response;

class ExportController extends ControllerBase
{
  public function update_config()
  {

    $config = \Drupal::configFactory();
    $editable_config = $config->getEditable('system.site');
    $editable_config->set('name', 'Site Renamed :)')->save();

    // Output a message confirming the update.
    $response = new Response("The configuration variable has been updated successfully.\n");
    $response->headers->set('Content-Type', 'text/html');
    return $response;

  }
}
