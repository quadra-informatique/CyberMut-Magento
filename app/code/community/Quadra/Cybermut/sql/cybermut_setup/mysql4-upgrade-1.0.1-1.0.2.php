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
$installer = $this;
/* @var $installer Mage_Core_Model_Resource_Setup */

$installer->startSetup();

$data = $installer->getConnection()->fetchAll("SHOW COLUMNS FROM `{$installer->getTable('sales_flat_quote_payment')}`;");

$columnExist = false;

foreach ($data as $row) {
    if ($row['Field'] == 'nbrech') {
        $columnExist = true;
        break;
    }
}

if (!$columnExist) {
    $installer->run("
        ALTER TABLE `{$installer->getTable('sales_flat_quote_payment')}`
        ADD COLUMN `nbrech` TINYINT(1) UNSIGNED NOT NULL DEFAULT '1' COMMENT 'CyberMut';
    ");
}

$installer->endSetup();
