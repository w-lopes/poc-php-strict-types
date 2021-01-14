<?php

namespace src;

class ArugulaWithoutTypes
{

    public function someFunction(int $a): int
    {
        return $a * 2;
    }

    /**
     * @param int[] $q My param
     */
    public function qwe(array $q): void
    {
        array_walk($q, function ($item) {
            $item = $item;
        });
    }
}
