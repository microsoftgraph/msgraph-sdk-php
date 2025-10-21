<?php

namespace Microsoft\\Graph\\Generated\IdentityGovernance\LifecycleWorkflows\CustomTaskExtensions\Item\LastModifiedBy;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class LastModifiedByRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var LastModifiedByRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?LastModifiedByRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new LastModifiedByRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param LastModifiedByRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?LastModifiedByRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new LastModifiedByRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return LastModifiedByRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): LastModifiedByRequestBuilderGetQueryParameters {
        return new LastModifiedByRequestBuilderGetQueryParameters($expand, $select);
    }

}
