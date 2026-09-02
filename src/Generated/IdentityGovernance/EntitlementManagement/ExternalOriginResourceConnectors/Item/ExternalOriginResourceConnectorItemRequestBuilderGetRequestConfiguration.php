<?php

namespace Microsoft\Graph\Generated\IdentityGovernance\EntitlementManagement\ExternalOriginResourceConnectors\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ExternalOriginResourceConnectorItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var ExternalOriginResourceConnectorItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ExternalOriginResourceConnectorItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new ExternalOriginResourceConnectorItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ExternalOriginResourceConnectorItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ExternalOriginResourceConnectorItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new ExternalOriginResourceConnectorItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return ExternalOriginResourceConnectorItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): ExternalOriginResourceConnectorItemRequestBuilderGetQueryParameters {
        return new ExternalOriginResourceConnectorItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
