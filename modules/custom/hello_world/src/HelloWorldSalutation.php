<?php
namespace Drupal\hello_world;
use Drupal\Core\StringTranslation\StringTranslationTrait;
use Symfony\Component\DependencyInjection\ContainerInterface;
/**
* Prepares the salutation to the world.
*/
class HelloWorldSalutation {
    //use StringTranslationTrait;
    
    /**
    * @var \Drupal\hello_world\HelloWorldSalutation
    */
    protected $salutation;
    /**
    * HelloWorldController constructor.
    *
    * @param \Drupal\hello_world\HelloWorldSalutation $salutation
    */
    //public function __construct(HelloWorldSalutation $salutation) {
    //    $this->salutation = $salutation;
    //}
    /**
    * {@inheritdoc}
    */
    //public static function create(ContainerInterface $container) {
    //    return new static(
    //        $container->get('hello_world.salutation')
    //    );
    //}
    /**
    * Returns the salutation
    */
    public function getSalutation() {
        $time = new \DateTime();
        if ((int) $time->format('G') >= 06 && (int) $time->format('G') < 12) {
            return 'Good morning world';
        }
        if ((int) $time->format('G') >= 12 && (int) $time->format('G') < 18) {
            return 'Good afternoon world';
        }
        if ((int) $time->format('G') >= 18) {
            return 'Good evening world';//$this->t('Good evening world');
        }
    }
}