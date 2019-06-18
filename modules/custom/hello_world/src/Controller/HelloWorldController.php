<?php
namespace Drupal\hello_world\Controller;
use Drupal\Core\Controller\ControllerBase;

use Drupal\hello_world\HelloWorldSalutation;
use Symfony\Component\DependencyInjection\ContainerInterface;
/**
* Controller for the salutation message.
*/
class HelloWorldController extends ControllerBase {
    /**
    * Hello World.
    *
    * @return string
    */
    public function helloWorld() {

    $salutation = \Drupal::service('hello_world.salutation');
    $greeting = $salutation->getSalutation();

        return [
            '#markup' => $this->t('Saludo: '.$greeting),
        ];
    }
}