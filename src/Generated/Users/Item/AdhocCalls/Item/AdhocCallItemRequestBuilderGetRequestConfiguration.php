<?php

namespace Microsoft\Graph\Generated\Users\Item\AdhocCalls\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class AdhocCallItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var AdhocCallItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?AdhocCallItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new AdhocCallItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param AdhocCallItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?AdhocCallItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new AdhocCallItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return AdhocCallItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): AdhocCallItemRequestBuilderGetQueryParameters {
        return new AdhocCallItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
