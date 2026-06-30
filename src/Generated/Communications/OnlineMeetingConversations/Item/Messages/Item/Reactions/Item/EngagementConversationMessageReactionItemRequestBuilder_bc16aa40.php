<?php

namespace Microsoft\Graph\Generated\Communications\OnlineMeetingConversations\Item\Messages\Item\Reactions\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: EngagementConversationMessageReactionItemRequestBuilderGetRequestConfiguration
*/
class EngagementConversationMessageReactionItemRequestBuilder_bc16aa40 extends BaseRequestConfiguration 
{
    /**
     * @var EngagementConversationMessageReactionItemRequestBuilder_4913536b|null $queryParameters Request query parameters
    */
    public ?EngagementConversationMessageReactionItemRequestBuilder_4913536b $queryParameters = null;
    
    /**
     * Instantiates a new EngagementConversationMessageReactionItemRequestBuilder_bc16aa40 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param EngagementConversationMessageReactionItemRequestBuilder_4913536b|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?EngagementConversationMessageReactionItemRequestBuilder_4913536b $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new EngagementConversationMessageReactionItemRequestBuilder_4913536b.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return EngagementConversationMessageReactionItemRequestBuilder_4913536b
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): EngagementConversationMessageReactionItemRequestBuilder_4913536b {
        return new EngagementConversationMessageReactionItemRequestBuilder_4913536b($expand, $select);
    }

}
