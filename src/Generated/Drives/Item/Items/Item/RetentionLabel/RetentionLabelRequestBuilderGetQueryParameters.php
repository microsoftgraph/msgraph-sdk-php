<?php

namespace Microsoft\Graph\Generated\Drives\Item\Items\Item\RetentionLabel;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Get metadata information for a retention label applied on a driveItem. For information about retention labels from an administrator's perspective, see Use retention labels to manage the lifecycle of documents stored in SharePoint.
*/
class RetentionLabelRequestBuilderGetQueryParameters 
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
     * Instantiates a new RetentionLabelRequestBuilderGetQueryParameters and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
