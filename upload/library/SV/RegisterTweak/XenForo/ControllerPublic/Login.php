<?php

class SV_RegisterTweak_XenForo_ControllerPublic_Login extends XFCP_SV_RegisterTweak_XenForo_ControllerPublic_Login
{
    public function actionRegister()
    {
        SV_RegisterTweak_Globals::$registration_permitted = true;
        return $this->responseReroute('XenForo_ControllerPublic_Register', 'register');
    }

    public function actionValidateField()
    {
        SV_RegisterTweak_Globals::$registration_permitted = true;
        return $this->responseReroute('XenForo_ControllerPublic_Register', 'validatefield');
    }
}