<?php

namespace Microsoft\Graph\Generated\Devices\Item\RegisteredOwners\Item\GraphEndpoint;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class GraphEndpointRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var GraphEndpointRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?GraphEndpointRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new GraphEndpointRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param GraphEndpointRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?GraphEndpointRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new GraphEndpointRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return GraphEndpointRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): GraphEndpointRequestBuilderGetQueryParameters {
        return new GraphEndpointRequestBuilderGetQueryParameters($expand, $select);
    }

}
