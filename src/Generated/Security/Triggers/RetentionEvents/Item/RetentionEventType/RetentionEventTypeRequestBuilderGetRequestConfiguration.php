<?php

namespace Microsoft\\Graph\\Generated\Security\Triggers\RetentionEvents\Item\RetentionEventType;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class RetentionEventTypeRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var RetentionEventTypeRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?RetentionEventTypeRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new RetentionEventTypeRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param RetentionEventTypeRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?RetentionEventTypeRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new RetentionEventTypeRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return RetentionEventTypeRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): RetentionEventTypeRequestBuilderGetQueryParameters {
        return new RetentionEventTypeRequestBuilderGetQueryParameters($expand, $select);
    }

}
