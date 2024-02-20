<?php

namespace Microsoft\Graph\Generated\Security\Triggers;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class TriggersRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var TriggersRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?TriggersRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new TriggersRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param TriggersRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?TriggersRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new TriggersRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return TriggersRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): TriggersRequestBuilderGetQueryParameters {
        return new TriggersRequestBuilderGetQueryParameters($expand, $select);
    }

}
