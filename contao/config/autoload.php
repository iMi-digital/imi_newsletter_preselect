<?php

/**
 * Register the namespaces
 */
ClassLoader::addNamespaces(array
(
    'iMi\NewsletterPreselect',
));
/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
    'iMi\NewsletterPreselect\ModuleRegistrationNewsletterPreselect'
        => 'system/modules/imi_newsletter_preselect/modules/ModuleRegistrationNewsletterPreselect.php',
));
