<?php

namespace Microsoft\\Graph\\Generated\Users\Item\JoinedTeams\Item\PrimaryChannel;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class PrimaryChannelRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var PrimaryChannelRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?PrimaryChannelRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new PrimaryChannelRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param PrimaryChannelRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?PrimaryChannelRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new PrimaryChannelRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return PrimaryChannelRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): PrimaryChannelRequestBuilderGetQueryParameters {
        return new PrimaryChannelRequestBuilderGetQueryParameters($expand, $select);
    }

}
