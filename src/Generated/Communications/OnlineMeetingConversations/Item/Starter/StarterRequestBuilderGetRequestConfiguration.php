<?php

namespace Microsoft\Graph\Generated\Communications\OnlineMeetingConversations\Item\Starter;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class StarterRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var StarterRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?StarterRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new StarterRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param StarterRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?StarterRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new StarterRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return StarterRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): StarterRequestBuilderGetQueryParameters {
        return new StarterRequestBuilderGetQueryParameters($expand, $select);
    }

}
