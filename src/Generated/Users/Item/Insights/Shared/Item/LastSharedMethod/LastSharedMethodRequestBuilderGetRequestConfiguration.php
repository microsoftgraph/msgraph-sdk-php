<?php

namespace Microsoft\Graph\Generated\Users\Item\Insights\Shared\Item\LastSharedMethod;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class LastSharedMethodRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var LastSharedMethodRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?LastSharedMethodRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new LastSharedMethodRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param LastSharedMethodRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?LastSharedMethodRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new LastSharedMethodRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return LastSharedMethodRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): LastSharedMethodRequestBuilderGetQueryParameters {
        return new LastSharedMethodRequestBuilderGetQueryParameters($expand, $select);
    }

}
