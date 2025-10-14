<?php

namespace Microsoft\\Graph\\Generated\Communications\OnlineMeetingConversations\Item\Starter\ReplyTo;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ReplyToRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var ReplyToRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ReplyToRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new ReplyToRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ReplyToRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ReplyToRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new ReplyToRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return ReplyToRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): ReplyToRequestBuilderGetQueryParameters {
        return new ReplyToRequestBuilderGetQueryParameters($expand, $select);
    }

}
