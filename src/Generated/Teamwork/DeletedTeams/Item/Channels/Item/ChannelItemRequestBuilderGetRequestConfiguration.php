<?php

namespace Microsoft\Graph\Generated\Teamwork\DeletedTeams\Item\Channels\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ChannelItemRequestBuilderGetRequestConfiguration 
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
     * @var ChannelItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ChannelItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new ChannelItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return ChannelItemRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): ChannelItemRequestBuilderGetQueryParameters {
        return new ChannelItemRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new ChannelItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param ChannelItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ChannelItemRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
