<?php

namespace Microsoft\Graph\Generated\Me\JoinedTeams\Item\PrimaryChannel;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class PrimaryChannelRequestBuilderGetRequestConfiguration 
{
    /**
     * @var array<string, array<string>|string>|null $headers Request headers
    */
    public ?array $headers = null;
    
    /**
     * @var array<RequestOption>|null $options Request options
    */
    public ?array $options = null;
    
    /**
     * @var PrimaryChannelRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?PrimaryChannelRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new primaryChannelRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return PrimaryChannelRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): PrimaryChannelRequestBuilderGetQueryParameters {
        return new PrimaryChannelRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new primaryChannelRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param PrimaryChannelRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?PrimaryChannelRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
