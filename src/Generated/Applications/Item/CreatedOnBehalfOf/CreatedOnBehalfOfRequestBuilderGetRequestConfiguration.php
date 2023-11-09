<?php

namespace Microsoft\Graph\Generated\Applications\Item\CreatedOnBehalfOf;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class CreatedOnBehalfOfRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var CreatedOnBehalfOfRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?CreatedOnBehalfOfRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new createdOnBehalfOfRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param CreatedOnBehalfOfRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?CreatedOnBehalfOfRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new createdOnBehalfOfRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return CreatedOnBehalfOfRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): CreatedOnBehalfOfRequestBuilderGetQueryParameters {
        return new CreatedOnBehalfOfRequestBuilderGetQueryParameters($expand, $select);
    }

}
