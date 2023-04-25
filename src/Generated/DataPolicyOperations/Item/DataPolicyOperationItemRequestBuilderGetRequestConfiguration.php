<?php

namespace Microsoft\Graph\Generated\DataPolicyOperations\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class DataPolicyOperationItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var DataPolicyOperationItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?DataPolicyOperationItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new DataPolicyOperationItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param DataPolicyOperationItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?DataPolicyOperationItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new DataPolicyOperationItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return DataPolicyOperationItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): DataPolicyOperationItemRequestBuilderGetQueryParameters {
        return new DataPolicyOperationItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
