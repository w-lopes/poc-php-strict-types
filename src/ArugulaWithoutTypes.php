<?php

namespace src;

/**
 * Should warning this file.
 */
class ArugulaWithoutTypes
{

    public function someFunction($a)
    {
        return $a * 2;
    }

    /**
     * @param int[] $q
     * @return void Nothing :D
     */
    public function qwe($q)
    {
        array_walk($q, function ($item) {
            $item = $item;
        });
    }
}
