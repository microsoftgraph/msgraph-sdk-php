<?php

namespace Microsoft\\Graph\\Generated\Identity\B2xUserFlows\Item\Languages\Item\DefaultPages\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Collection of pages with the default content to display in a user flow for a specified language. This collection doesn't allow any kind of modification.
*/
class UserFlowLanguagePageItemRequestBuilderGetQueryParameters 
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
     * Instantiates a new UserFlowLanguagePageItemRequestBuilderGetQueryParameters and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
