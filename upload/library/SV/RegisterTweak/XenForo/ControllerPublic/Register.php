<?php

class SV_RegisterTweak_XenForo_ControllerPublic_Register extends XFCP_SV_RegisterTweak_XenForo_ControllerPublic_Register
{
    public function actionRegister()
    {
        if (empty(SV_RegisterTweak_Globals::$registration_permitted))
        {
            throw $this->responseException($this->responseError(
                new XenForo_Phrase('new_registrations_currently_not_being_accepted')
            ));
        }
        return parent::actionRegister();
    }

    public function actionValidateField()
    {
        if (empty(SV_RegisterTweak_Globals::$registration_permitted))
        {
            throw $this->responseException($this->responseError(
                new XenForo_Phrase('new_registrations_currently_not_being_accepted')
            ));
        }
        return parent::actionValidateField();
    }
}