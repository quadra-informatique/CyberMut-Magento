<?php

/**
 * 1997-2015 Quadra Informatique
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0) that is available
 * through the world-wide-web at this URL: http://www.opensource.org/licenses/OSL-3.0
 * If you are unable to obtain it through the world-wide-web, please send an email
 * to modules@quadra-informatique.fr so we can send you a copy immediately.
 *
 * @author Quadra Informatique <modules@quadra-informatique.fr>
 * @copyright 1997-2015 Quadra Informatique
 * @license http://www.opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 */
class Quadra_Cybermut_Model_Source_Language
{

    public function toOptionArray()
    {
        return array(
            array('value' => 'EN', 'label' => Mage::helper('cybermut')->__('English')),
            array('value' => 'FR', 'label' => Mage::helper('cybermut')->__('French')),
            array('value' => 'DE', 'label' => Mage::helper('cybermut')->__('German')),
            array('value' => 'IT', 'label' => Mage::helper('cybermut')->__('Italian')),
            array('value' => 'ES', 'label' => Mage::helper('cybermut')->__('Spain')),
            array('value' => 'NL', 'label' => Mage::helper('cybermut')->__('Dutch')),
        );
    }

}
