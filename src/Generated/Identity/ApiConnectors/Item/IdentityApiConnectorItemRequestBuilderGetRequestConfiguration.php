<?php

namespace Microsoft\Graph\Generated\Identity\ApiConnectors\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class IdentityApiConnectorItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var IdentityApiConnectorItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?IdentityApiConnectorItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new IdentityApiConnectorItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param IdentityApiConnectorItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?IdentityApiConnectorItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new IdentityApiConnectorItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return IdentityApiConnectorItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): IdentityApiConnectorItemRequestBuilderGetQueryParameters {
        return new IdentityApiConnectorItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
