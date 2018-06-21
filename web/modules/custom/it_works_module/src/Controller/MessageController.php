<?php

namespace Drupal\it_works_module\Controller;

use Drupal\Core\Controller\ControllerBase;

class MessageController extends ControllerBase {

  /**
   * Display the markup.
   *
   * @return array
   */
  public function content() {
    return [
      '#type' => 'markup',
      '#markup' => $this->t('It works !'),
    ];
  }

}
