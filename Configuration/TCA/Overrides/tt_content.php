<?php
if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

$TCA['tt_content']['types']['list']['subtypes_excludelist']['tx_mkforms'] = 'layout,select_key,pages';

// Das tt_content-Feld pi_flexform einblenden
$TCA['tt_content']['types']['list']['subtypes_addlist']['tx_mkforms'] = 'pi_flexform';

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue('tx_mkforms', 'FILE:EXT:mkforms/flexform_main.xml');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPlugin([
    'LLL:EXT:mkforms/locallang_db.xml:plugin.mkforms.label',
    'tx_mkforms',
    'EXT:mkforms/ext_icon.gif',
], 'list_type', 'mkforms');
