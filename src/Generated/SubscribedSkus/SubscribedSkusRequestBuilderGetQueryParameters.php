<?php

namespace Microsoft\Graph\Generated\SubscribedSkus;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Get the list of commercial subscriptions that an organization has acquired. For the mapping of license names as displayed on the Azure portal or the Microsoft 365 admin center against their Microsoft Graph **skuId** and **skuPartNumber** properties, see Product names and service plan identifiers for licensing.
*/
class SubscribedSkusRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("%24orderby")
     * @var array<string>|null $orderby Order items by property values
    */
    public ?array $orderby = null;
    
    /**
     * @QueryParameter("%24search")
     * @var string|null $search Search items by search phrases
    */
    public ?string $search = null;
    
    /**
     * @QueryParameter("%24select")
     * @var array<string>|null $select Select properties to be returned
    */
    public ?array $select = null;
    
    /**
     * Instantiates a new subscribedSkusRequestBuilderGetQueryParameters and sets the default values.
     * @param array<string>|null $orderby Order items by property values
     * @param string|null $search Search items by search phrases
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $orderby = null, ?string $search = null, ?array $select = null) {
        $this->orderby = $orderby;
        $this->search = $search;
        $this->select = $select;
    }

}
