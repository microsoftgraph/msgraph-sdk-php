<?php

namespace Microsoft\Graph\Generated\IdentityGovernance\EntitlementManagement\ResourceEnvironments\Item\Resources\Item\Scopes\Item\Resource\Roles\Item\Resource\UploadSessions\Item\Files\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * The files uploaded during this upload session. Supports $expand and $expand with nested $filter and $orderby.
*/
class CustomDataProvidedResourceFileItemRequestBuilderGetQueryParameters 
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
     * Instantiates a new CustomDataProvidedResourceFileItemRequestBuilderGetQueryParameters and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
