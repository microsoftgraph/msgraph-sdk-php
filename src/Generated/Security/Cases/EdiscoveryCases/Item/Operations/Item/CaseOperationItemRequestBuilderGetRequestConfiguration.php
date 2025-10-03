<?php

namespace Microsoft\\Graph\\Generated\Security\Cases\EdiscoveryCases\Item\Operations\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class CaseOperationItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var CaseOperationItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?CaseOperationItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new CaseOperationItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param CaseOperationItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?CaseOperationItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new CaseOperationItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return CaseOperationItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): CaseOperationItemRequestBuilderGetQueryParameters {
        return new CaseOperationItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
