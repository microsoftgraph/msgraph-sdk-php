<?php

namespace Microsoft\Graph\Generated\Communications\OnlineMeetingConversations\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: OnlineMeetingEngagementConversationItemRequestBuilderGetRequestConfiguration
*/
class OnlineMeetingEngagementConversationItemRequestBuilderGe_7ce5221f extends BaseRequestConfiguration 
{
    /**
     * @var OnlineMeetingEngagementConversationItemRequestBuilderGe_c15f900b|null $queryParameters Request query parameters
    */
    public ?OnlineMeetingEngagementConversationItemRequestBuilderGe_c15f900b $queryParameters = null;
    
    /**
     * Instantiates a new OnlineMeetingEngagementConversationItemRequestBuilderGe_7ce5221f and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param OnlineMeetingEngagementConversationItemRequestBuilderGe_c15f900b|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?OnlineMeetingEngagementConversationItemRequestBuilderGe_c15f900b $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new OnlineMeetingEngagementConversationItemRequestBuilderGe_c15f900b.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return OnlineMeetingEngagementConversationItemRequestBuilderGe_c15f900b
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): OnlineMeetingEngagementConversationItemRequestBuilderGe_c15f900b {
        return new OnlineMeetingEngagementConversationItemRequestBuilderGe_c15f900b($expand, $select);
    }

}
