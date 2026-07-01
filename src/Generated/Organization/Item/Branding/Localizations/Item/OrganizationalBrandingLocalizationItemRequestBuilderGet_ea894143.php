<?php

namespace Microsoft\Graph\Generated\Organization\Item\Branding\Localizations\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Read the properties and relationships of an organizationalBrandingLocalization object. To retrieve a localization branding object, specify the value of id in the URL. Original name: OrganizationalBrandingLocalizationItemRequestBuilderGetQueryParameters
*/
class OrganizationalBrandingLocalizationItemRequestBuilderGet_ea894143 
{
    /**
     * @QueryParameter("%24expand")
     * @var array<string>|null $expand Expand related entities
    */
    public ?array $expand = null;
    
    /**
     * @QueryParameter("%24select")
     * @var array<string>|null $select Select properties to be returned
    */
    public ?array $select = null;
    
    /**
     * Instantiates a new OrganizationalBrandingLocalizationItemRequestBuilderGet_ea894143 and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
