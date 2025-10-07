<?php

namespace Microsoft\\Graph\\Generated\Users\Item\Teamwork\InstalledApps\Item\Chat;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ChatRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var ChatRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ChatRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new ChatRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ChatRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ChatRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new ChatRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return ChatRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): ChatRequestBuilderGetQueryParameters {
        return new ChatRequestBuilderGetQueryParameters($expand, $select);
    }

}
