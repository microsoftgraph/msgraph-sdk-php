<?php

namespace Microsoft\Graph\Generated\Teams\Item\Channels\Item\SharedWithTeams\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class SharedWithChannelTeamInfoItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var SharedWithChannelTeamInfoItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?SharedWithChannelTeamInfoItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new SharedWithChannelTeamInfoItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param SharedWithChannelTeamInfoItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?SharedWithChannelTeamInfoItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new SharedWithChannelTeamInfoItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return SharedWithChannelTeamInfoItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): SharedWithChannelTeamInfoItemRequestBuilderGetQueryParameters {
        return new SharedWithChannelTeamInfoItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
