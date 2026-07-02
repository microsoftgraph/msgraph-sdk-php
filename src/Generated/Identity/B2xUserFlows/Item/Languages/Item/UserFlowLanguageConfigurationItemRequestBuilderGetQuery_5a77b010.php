<?php

namespace Microsoft\Graph\Generated\Identity\B2xUserFlows\Item\Languages\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Read the properties and relationships of a userFlowLanguageConfiguration object. These objects represent a language available in a user flow. Note: Language customization is enabled by default in Microsoft Entra user flows. Original name: UserFlowLanguageConfigurationItemRequestBuilderGetQueryParameters
*/
class UserFlowLanguageConfigurationItemRequestBuilderGetQuery_5a77b010 
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
     * Instantiates a new UserFlowLanguageConfigurationItemRequestBuilderGetQuery_5a77b010 and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
