<?php

namespace Microsoft\Graph\Generated\Communications\OnlineMeetingConversations\Item\Starter\Replies\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: EngagementConversationMessageItemRequestBuilderGetRequestConfiguration
*/
class EngagementConversationMessageItemRequestBuilderGetReque_40c79dd2 extends BaseRequestConfiguration 
{
    /**
     * @var EngagementConversationMessageItemRequestBuilderGetQuery_d2ada0cc|null $queryParameters Request query parameters
    */
    public ?EngagementConversationMessageItemRequestBuilderGetQuery_d2ada0cc $queryParameters = null;
    
    /**
     * Instantiates a new EngagementConversationMessageItemRequestBuilderGetReque_40c79dd2 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param EngagementConversationMessageItemRequestBuilderGetQuery_d2ada0cc|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?EngagementConversationMessageItemRequestBuilderGetQuery_d2ada0cc $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new EngagementConversationMessageItemRequestBuilderGetQuery_d2ada0cc.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return EngagementConversationMessageItemRequestBuilderGetQuery_d2ada0cc
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): EngagementConversationMessageItemRequestBuilderGetQuery_d2ada0cc {
        return new EngagementConversationMessageItemRequestBuilderGetQuery_d2ada0cc($expand, $select);
    }

}
