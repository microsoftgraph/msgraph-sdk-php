<?php

namespace Microsoft\Graph\Generated\Users\Item\Chats\Item\PinnedMessages\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class PinnedChatMessageInfoItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var PinnedChatMessageInfoItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?PinnedChatMessageInfoItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new PinnedChatMessageInfoItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param PinnedChatMessageInfoItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?PinnedChatMessageInfoItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new PinnedChatMessageInfoItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return PinnedChatMessageInfoItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): PinnedChatMessageInfoItemRequestBuilderGetQueryParameters {
        return new PinnedChatMessageInfoItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
