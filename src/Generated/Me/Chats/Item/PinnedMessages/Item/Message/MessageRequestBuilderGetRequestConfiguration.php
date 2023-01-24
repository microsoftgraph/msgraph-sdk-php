<?php

namespace Microsoft\Graph\Generated\Me\Chats\Item\PinnedMessages\Item\Message;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class MessageRequestBuilderGetRequestConfiguration 
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
     * @var MessageRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?MessageRequestBuilderGetQueryParameters $queryParameters = null;
    
}
