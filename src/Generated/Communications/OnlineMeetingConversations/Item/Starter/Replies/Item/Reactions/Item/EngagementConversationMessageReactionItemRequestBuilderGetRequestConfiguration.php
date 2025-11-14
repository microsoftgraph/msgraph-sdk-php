<?php

namespace Microsoft\Graph\Generated\Communications\OnlineMeetingConversations\Item\Starter\Replies\Item\Reactions\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class EngagementConversationMessageReactionItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var EngagementConversationMessageReactionItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?EngagementConversationMessageReactionItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new EngagementConversationMessageReactionItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param EngagementConversationMessageReactionItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?EngagementConversationMessageReactionItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new EngagementConversationMessageReactionItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return EngagementConversationMessageReactionItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): EngagementConversationMessageReactionItemRequestBuilderGetQueryParameters {
        return new EngagementConversationMessageReactionItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
