<?php

namespace Microsoft\Graph\Generated\Security\Cases\EdiscoveryCases\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class EdiscoveryCaseItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var EdiscoveryCaseItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?EdiscoveryCaseItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new EdiscoveryCaseItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param EdiscoveryCaseItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?EdiscoveryCaseItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new EdiscoveryCaseItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return EdiscoveryCaseItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): EdiscoveryCaseItemRequestBuilderGetQueryParameters {
        return new EdiscoveryCaseItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
