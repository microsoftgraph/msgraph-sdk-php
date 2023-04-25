<?php

namespace Microsoft\Graph\Generated\Groups\Item\Onenote\Operations\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class OnenoteOperationItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var OnenoteOperationItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?OnenoteOperationItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new OnenoteOperationItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param OnenoteOperationItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?OnenoteOperationItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new OnenoteOperationItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return OnenoteOperationItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): OnenoteOperationItemRequestBuilderGetQueryParameters {
        return new OnenoteOperationItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
