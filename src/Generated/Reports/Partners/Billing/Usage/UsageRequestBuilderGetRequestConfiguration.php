<?php

namespace Microsoft\\Graph\\Generated\Reports\Partners\Billing\Usage;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class UsageRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var UsageRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?UsageRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new UsageRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param UsageRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?UsageRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new UsageRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return UsageRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): UsageRequestBuilderGetQueryParameters {
        return new UsageRequestBuilderGetQueryParameters($expand, $select);
    }

}
