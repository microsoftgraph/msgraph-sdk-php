<?php

namespace Microsoft\Graph\Generated\Teamwork\WorkforceIntegrations\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class WorkforceIntegrationItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var WorkforceIntegrationItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?WorkforceIntegrationItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new WorkforceIntegrationItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param WorkforceIntegrationItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?WorkforceIntegrationItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new WorkforceIntegrationItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return WorkforceIntegrationItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): WorkforceIntegrationItemRequestBuilderGetQueryParameters {
        return new WorkforceIntegrationItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
