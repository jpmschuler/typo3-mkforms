<?php
/**
 * Plugin 'rdt_submit' for the 'ameos_formidable' extension.
 *
 * @author  Jerome Schneider <typo3dev@ameos.com>
 */


class tx_mkforms_widgets_reset_Main extends formidable_mainrenderlet
{
    public function _render()
    {
        $sLabel = $this->getLabel();

        if (($sPath = $this->_navConf('/path')) !== false) {
            $sPath = $this->getForm()->getRunnable()->callRunnableWidget($this, $sPath);
            $sPath = $this->oForm->toWebPath($sPath);
            $sHtml = '<input type="image" name="' . $this->_getElementHtmlName() . '" id="' . $this->_getElementHtmlId() . '" value="' . $sLabel . '" src="' . $sPath . '"' . $this->_getAddInputParams() . ' />';
        } else {
            $sHtml = '<input type="reset" name="' . $this->_getElementHtmlName() . '" id="' . $this->_getElementHtmlId() . '" value="' . $sLabel . '"' . $this->_getAddInputParams() . ' />';
        }

        return $sHtml;
    }


    public function _searchable()
    {
        return $this->_defaultFalse('/searchable/');
    }

    public function _renderOnly($bForAjax = false)
    {
        return true;
    }
}


if (defined('TYPO3_MODE') && $GLOBALS['TYPO3_CONF_VARS'][TYPO3_MODE]['XCLASS']['ext/mkforms/widgets/submit/class.tx_mkforms_widgets_submit_Main.php']) {
    include_once($GLOBALS['TYPO3_CONF_VARS'][TYPO3_MODE]['XCLASS']['ext/mkforms/widgets/submit/class.tx_mkforms_widgets_submit_Main.php']);
}
