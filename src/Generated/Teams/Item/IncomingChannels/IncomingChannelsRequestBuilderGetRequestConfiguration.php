<?php

namespace Microsoft\Graph\Generated\Teams\Item\IncomingChannels;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class IncomingChannelsRequestBuilderGetRequestConfiguration 
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
     * @var IncomingChannelsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?IncomingChannelsRequestBuilderGetQueryParameters $queryParameters = null;
    
}
