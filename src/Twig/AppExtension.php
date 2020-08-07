<?php
/**
 * Created by PhpStorm.
 * User: Gianni GIUDICE
 * Date: 30/04/2020
 * Time: 20:49
 */

namespace App\Twig;


use Twig\Extension\AbstractExtension;
use Twig\TwigTest;

class AppExtension extends AbstractExtension {

    /**
     * @return array
     */
    public function getTests() : array {
        return [
            new TwigTest('instanceof', [ $this, 'isInstanceOf' ])
        ];
    }

    /**
     * @param $var
     * @param $instance
     * @return bool
     */
    public function isInstanceOf($var, $instance) : bool {
        return $var instanceof  $instance;
    }
}