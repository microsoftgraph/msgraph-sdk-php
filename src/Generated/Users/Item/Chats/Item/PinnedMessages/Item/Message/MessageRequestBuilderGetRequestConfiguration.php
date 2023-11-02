<?php

namespace Microsoft\Graph\Generated\Users\Item\Chats\Item\PinnedMessages\Item\Message;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class MessageRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var MessageRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?MessageRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new messageRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param MessageRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?MessageRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new messageRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return MessageRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): MessageRequestBuilderGetQueryParameters {
        return new MessageRequestBuilderGetQueryParameters($expand, $select);
    }

}
