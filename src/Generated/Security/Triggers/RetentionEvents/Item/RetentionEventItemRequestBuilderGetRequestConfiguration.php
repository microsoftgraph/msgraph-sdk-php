<?php

namespace Microsoft\Graph\Generated\Security\Triggers\RetentionEvents\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class RetentionEventItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var RetentionEventItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?RetentionEventItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new RetentionEventItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param RetentionEventItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?RetentionEventItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new RetentionEventItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return RetentionEventItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): RetentionEventItemRequestBuilderGetQueryParameters {
        return new RetentionEventItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
