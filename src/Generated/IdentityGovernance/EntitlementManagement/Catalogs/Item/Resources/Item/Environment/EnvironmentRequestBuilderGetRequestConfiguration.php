<?php

namespace Microsoft\\Graph\\Generated\IdentityGovernance\EntitlementManagement\Catalogs\Item\Resources\Item\Environment;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class EnvironmentRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var EnvironmentRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?EnvironmentRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new EnvironmentRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param EnvironmentRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?EnvironmentRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new EnvironmentRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return EnvironmentRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): EnvironmentRequestBuilderGetQueryParameters {
        return new EnvironmentRequestBuilderGetQueryParameters($expand, $select);
    }

}
