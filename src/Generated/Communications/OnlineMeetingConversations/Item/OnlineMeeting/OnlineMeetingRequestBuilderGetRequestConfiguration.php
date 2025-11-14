<?php

namespace Microsoft\Graph\Generated\Communications\OnlineMeetingConversations\Item\OnlineMeeting;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class OnlineMeetingRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var OnlineMeetingRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?OnlineMeetingRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new OnlineMeetingRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param OnlineMeetingRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?OnlineMeetingRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new OnlineMeetingRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return OnlineMeetingRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): OnlineMeetingRequestBuilderGetQueryParameters {
        return new OnlineMeetingRequestBuilderGetQueryParameters($expand, $select);
    }

}
