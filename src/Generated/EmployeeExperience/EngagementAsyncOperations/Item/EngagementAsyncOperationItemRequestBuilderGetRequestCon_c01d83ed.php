<?php

namespace Microsoft\Graph\Generated\EmployeeExperience\EngagementAsyncOperations\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: EngagementAsyncOperationItemRequestBuilderGetRequestConfiguration
*/
class EngagementAsyncOperationItemRequestBuilderGetRequestCon_c01d83ed extends BaseRequestConfiguration 
{
    /**
     * @var EngagementAsyncOperationItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?EngagementAsyncOperationItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new EngagementAsyncOperationItemRequestBuilderGetRequestCon_c01d83ed and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param EngagementAsyncOperationItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?EngagementAsyncOperationItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new EngagementAsyncOperationItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return EngagementAsyncOperationItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): EngagementAsyncOperationItemRequestBuilderGetQueryParameters {
        return new EngagementAsyncOperationItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
