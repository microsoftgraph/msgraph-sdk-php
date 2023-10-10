<?php

namespace Microsoft\Graph\Generated\Shares\Item\DriveItem;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Access a shared DriveItem or a collection of shared items by using a shareId or sharing URL. To use a sharing URL with this API, your app needs to transform the URL into a sharing token. This API is available in the following national cloud deployments.
*/
class DriveItemRequestBuilderGetQueryParameters 
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
     * Instantiates a new driveItemRequestBuilderGetQueryParameters and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
