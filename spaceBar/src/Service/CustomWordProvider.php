<?php
/**
 * Created by PhpStorm.
 * User: icamara
 * Date: 14/06/18
 * Time: 10:56
 */

namespace App\Service;


use KnpU\LoremIpsumIbrahBundle\KnpUWordProvider;

class CustomWordProvider extends KnpUWordProvider
{
    public function getWordList(): array
    {
        $word = parent::getWordList();
        $word[] = 'beatch';

        return $word;
    }

}