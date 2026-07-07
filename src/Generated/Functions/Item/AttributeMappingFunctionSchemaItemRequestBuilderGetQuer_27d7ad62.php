<?php

namespace Microsoft\Graph\Generated\Functions\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Get entity from functions by key Original name: AttributeMappingFunctionSchemaItemRequestBuilderGetQueryParameters
*/
class AttributeMappingFunctionSchemaItemRequestBuilderGetQuer_27d7ad62 
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
     * Instantiates a new AttributeMappingFunctionSchemaItemRequestBuilderGetQuer_27d7ad62 and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
