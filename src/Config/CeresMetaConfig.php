<?php

namespace Ceres\Config;

use Plenty\Modules\Webshop\Helpers\PluginConfig;

class CeresMetaConfig extends PluginConfig
{
    public $robotsHome;
    public $robotsContact;
    public $robotsCancellationRights;
    public $robotsCancellationForm;
    public $robotsLegalDisclosure;
    public $robotsPrivacyPolicy;
    public $robotsTermsAndConditions;
    public $robotsSearchResult;
    
    protected function getPluginName()
    {
        return 'Ceres';
    }

    protected function load()
    {
        $this->robotsHome                           = $this->getTextValue( 'meta.robots_home' , 'all' );
        $this->robotsContact                        = $this->getTextValue( 'meta.robots_contact' , 'all' );
        $this->robotsCancellationRights             = $this->getTextValue( 'meta.robots_cancel_rights' , 'all' );
        $this->robotsCancellationForm               = $this->getTextValue( 'meta.robots_cancel_form' , 'all' );
        $this->robotsLegalDisclosure                = $this->getTextValue( 'meta.robots_legal_disclosure' , 'all' );
        $this->robotsPrivacyPolicy                  = $this->getTextValue( 'meta.robots_privacy_policy' , 'all' );
        $this->robotsTermsAndConditions             = $this->getTextValue( 'meta.robots_terms_and_conditions' , 'all' );
        $this->robotsSearchResult                   = $this->getTextValue( 'meta.robots_search_result' , 'all' );
    }
}
