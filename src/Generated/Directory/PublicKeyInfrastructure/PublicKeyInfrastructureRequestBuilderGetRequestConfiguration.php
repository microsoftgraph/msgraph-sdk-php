<?php

namespace Microsoft\\Graph\\Generated\Directory\PublicKeyInfrastructure;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class PublicKeyInfrastructureRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var PublicKeyInfrastructureRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?PublicKeyInfrastructureRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new PublicKeyInfrastructureRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param PublicKeyInfrastructureRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?PublicKeyInfrastructureRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new PublicKeyInfrastructureRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return PublicKeyInfrastructureRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): PublicKeyInfrastructureRequestBuilderGetQueryParameters {
        return new PublicKeyInfrastructureRequestBuilderGetQueryParameters($expand, $select);
    }

}
