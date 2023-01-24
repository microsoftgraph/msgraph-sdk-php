<?php

namespace Microsoft\Graph\Generated\DeviceManagement\ExchangeConnectors\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * The list of Exchange Connectors configured by the tenant.
*/
class DeviceManagementExchangeConnectorItemRequestBuilderGetQueryParameters 
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
    
}
