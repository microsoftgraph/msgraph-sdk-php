<?php

namespace Microsoft\Graph\Generated\IdentityGovernance\EntitlementManagement\ResourceRequests\Item\Resource\Scopes\Item\Resource\UploadSessions\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * The upload sessions for uploading external access data to this resource through the Bring Your Own Data (BYOD) flow.
*/
class CustomDataProvidedResourceUploadSessionItemRequestBuilderGetQueryParameters 
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
     * Instantiates a new CustomDataProvidedResourceUploadSessionItemRequestBuilderGetQueryParameters and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
