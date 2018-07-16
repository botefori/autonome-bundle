<?php
/**
 * Created by PhpStorm.
 * User: icamara
 * Date: 14/06/18
 * Time: 10:56
 */

namespace App\Service;


use KnpU\LoremIpsumIbrahBundle\WordProviderInterface;

class CustomWordProvider implements WordProviderInterface
{
    public function getWordList(): array
    {

        return ['Beach'];
    }

}