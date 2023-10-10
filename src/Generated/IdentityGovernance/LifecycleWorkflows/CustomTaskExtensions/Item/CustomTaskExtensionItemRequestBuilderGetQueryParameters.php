<?php

namespace Microsoft\Graph\Generated\IdentityGovernance\LifecycleWorkflows\CustomTaskExtensions\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Read the properties and relationships of a customTaskExtension object. This API is available in the following national cloud deployments.
*/
class CustomTaskExtensionItemRequestBuilderGetQueryParameters 
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
     * Instantiates a new CustomTaskExtensionItemRequestBuilderGetQueryParameters and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
