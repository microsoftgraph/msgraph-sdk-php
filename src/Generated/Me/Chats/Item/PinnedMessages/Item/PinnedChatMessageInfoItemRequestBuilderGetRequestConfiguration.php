<?php

namespace Microsoft\Graph\Generated\Me\Chats\Item\PinnedMessages\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class PinnedChatMessageInfoItemRequestBuilderGetRequestConfiguration 
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
     * @var PinnedChatMessageInfoItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?PinnedChatMessageInfoItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new PinnedChatMessageInfoItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return PinnedChatMessageInfoItemRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): PinnedChatMessageInfoItemRequestBuilderGetQueryParameters {
        return new PinnedChatMessageInfoItemRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new PinnedChatMessageInfoItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param PinnedChatMessageInfoItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?PinnedChatMessageInfoItemRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
