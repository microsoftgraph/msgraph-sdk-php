<?php

namespace Microsoft\Graph\Generated\Users\Item\JoinedTeams\Item\Channels\Item\Messages\Item\Replies\Item\HostedContents\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ChatMessageHostedContentItemRequestBuilderGetRequestConfiguration 
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
     * @var ChatMessageHostedContentItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ChatMessageHostedContentItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new ChatMessageHostedContentItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ChatMessageHostedContentItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ChatMessageHostedContentItemRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new ChatMessageHostedContentItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return ChatMessageHostedContentItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): ChatMessageHostedContentItemRequestBuilderGetQueryParameters {
        return new ChatMessageHostedContentItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
