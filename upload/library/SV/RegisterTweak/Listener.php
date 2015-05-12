<?php

class SV_RegisterTweak_Listener
{
    const AddonNameSpace = 'SV_RegisterTweak';

    public static function load_class($class, array &$extend)
    {
        $extend[] = self::AddonNameSpace.'_'.$class;
    }
}