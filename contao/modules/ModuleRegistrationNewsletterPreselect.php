<?php

namespace iMi\NewsletterPreselect;
use Composer\Script\ScriptEvents;


/**
 * @category IMI
 * @package ${MAGENTO_MODULE_NAMESPACE}_${MAGENTO_MODULE}
 */
class ModuleRegistrationNewsletterPreselect extends \ModuleRegistration
{

    /**
     * Inject Javascript to preselect newsletters
     * @return string
     */
    public function generate()
    {
        $parentResult = parent::generate();
        if (TL_MODE == 'BE')
        {

            return $parentResult;
        }

        if ((\Input::post('FORM_SUBMIT') == 'tl_registration')) {
            return $parentResult;
        }

        $script = <<<SCRIPT
<script language="JavaScript">
jQuery('#tl_registration input[name="newsletter[]"]').prop('checked', true);
</script>
SCRIPT;

        return $parentResult . $script;
    }

}