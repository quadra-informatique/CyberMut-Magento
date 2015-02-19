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
class Quadra_Cybermut_Model_System_Config_Backend_Keyencrypted extends Mage_Core_Model_Config_Data
{

    /**
     * Enter description here...
     *
     */
    protected function _beforeSave()
    {
        if ($path = $_FILES['groups']['tmp_name']['cybermut_payment']['fields']['key_encrypted']['value']) {

            $filecontent = file_get_contents($path);
            @unlink($path);

            if (preg_match('/.*([0-9a-zA-Z]{40}).*/i', $filecontent, $m)) {
                $value = $m[1];
            } else {
                exit(Mage::helper('cybermut')->__('Error while getting the key'));
            }

            if (!empty($value) && ($encrypted = Mage::helper('core')->encrypt($value))) {
                $this->setValue($encrypted);
            }
        }
    }

}
