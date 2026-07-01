<?php

namespace Microsoft\Graph\Generated\DeviceManagement\ExchangeConnectors\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: DeviceManagementExchangeConnectorItemRequestBuilderGetRequestConfiguration
*/
class DeviceManagementExchangeConnectorItemRequestBuilderGetR_b19687b3 extends BaseRequestConfiguration 
{
    /**
     * @var DeviceManagementExchangeConnectorItemRequestBuilderGetQ_8c6bbe5f|null $queryParameters Request query parameters
    */
    public ?DeviceManagementExchangeConnectorItemRequestBuilderGetQ_8c6bbe5f $queryParameters = null;
    
    /**
     * Instantiates a new DeviceManagementExchangeConnectorItemRequestBuilderGetR_b19687b3 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param DeviceManagementExchangeConnectorItemRequestBuilderGetQ_8c6bbe5f|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?DeviceManagementExchangeConnectorItemRequestBuilderGetQ_8c6bbe5f $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new DeviceManagementExchangeConnectorItemRequestBuilderGetQ_8c6bbe5f.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return DeviceManagementExchangeConnectorItemRequestBuilderGetQ_8c6bbe5f
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): DeviceManagementExchangeConnectorItemRequestBuilderGetQ_8c6bbe5f {
        return new DeviceManagementExchangeConnectorItemRequestBuilderGetQ_8c6bbe5f($expand, $select);
    }

}
