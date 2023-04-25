<?php

namespace Microsoft\Graph\Generated\Teams\Item\Channels\Item\Members\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ConversationMemberItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var ConversationMemberItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ConversationMemberItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new ConversationMemberItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ConversationMemberItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ConversationMemberItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new ConversationMemberItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return ConversationMemberItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): ConversationMemberItemRequestBuilderGetQueryParameters {
        return new ConversationMemberItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
