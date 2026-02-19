<?php

namespace Microsoft\Graph\Generated\Admin\Exchange\Tracing;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class TracingRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var TracingRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?TracingRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new TracingRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param TracingRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?TracingRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new TracingRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return TracingRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): TracingRequestBuilderGetQueryParameters {
        return new TracingRequestBuilderGetQueryParameters($expand, $select);
    }

}
