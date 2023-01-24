<?php

namespace Microsoft\Graph\Generated\Teams\Item\Channels\Item;

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
     * @var array<string, RequestOption>|null $options Request options
    */
    public ?array $options = null;
    
    /**
     * @var ChannelItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ChannelItemRequestBuilderGetQueryParameters $queryParameters = null;
    
}
