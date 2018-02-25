<?php

namespace Drupal\http_451\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class Http451Controller.
 */
class Http451Controller extends ControllerBase {

  /**
   * Http451.
   *
   * @return string
   *   Return Hello string.
   */
  public function http451() {
    return new Response($content = "<html>
     <head><title>Unavailable For Legal Reasons</title></head>
     <body>
      <h1>Unavailable For Legal Reasons</h1>
      <p>This request may not be serviced in the Roman Province
        of Judea due to the Lex Julia Majestatis, which disallows
        access to resources hosted on servers deemed to be
        operated by the People's Front of Judea.</p>
      </body>
      </html>", $status = 451, $headers = array());
  }
}