<?php

/**
 * 1997-2016 Quadra Informatique
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0) that is available
 * through the world-wide-web at this URL: http://www.opensource.org/licenses/OSL-3.0
 * If you are unable to obtain it through the world-wide-web, please send an email
 * to modules@quadra-informatique.fr so we can send you a copy immediately.
 *
 * @author Quadra Informatique
 * @copyright 1997-2016 Quadra Informatique
 * @license http://www.opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 */
class Quadra_Cybermut_Model_Payment extends Quadra_Cybermut_Model_Abstract
{

    protected $_code = 'cybermut_payment';

    /**
     *  Return URL for Cybermut success response
     *
     *  @return	  string URL
     */
    protected function getSuccessURL()
    {
        return Mage::getUrl('cybermut/payment/success', array('_secure' => true));
    }

    /**
     *  Return URL for Cybermut failure response
     *
     *  @return	  string URL
     */
    protected function getErrorURL()
    {
        return Mage::getUrl('cybermut/payment/error', array('_secure' => true));
    }

    /**
     *  Return URL for Cybermut notify response
     *
     *  @return	  string URL
     */
    protected function getNotifyURL()
    {
        return Mage::getUrl('cybermut/payment/notify', array('_secure' => true));
    }

    /**
     *  Return Order Place Redirect URL
     *
     *  @return	  string Order Redirect URL
     */
    public function getOrderPlaceRedirectUrl()
    {
        Mage::getSingleton('checkout/session')->setIsMultishipping(false);
        return Mage::getUrl('cybermut/payment/redirect');
    }

}
