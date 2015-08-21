<?php

class SV_RegisterTweak_Listener
{
    const AddonNameSpace = 'SV_RegisterTweak_';

    public static function load_class($class, array &$extend)
    {
        $extend[] = self::AddonNameSpace.$class;
    }
}