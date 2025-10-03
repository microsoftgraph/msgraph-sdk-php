<?php

namespace Microsoft\\Graph\\Generated\AppCatalogs\TeamsApps\Item\AppDefinitions\Item\Bot;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class BotRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var BotRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?BotRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new BotRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param BotRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?BotRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new BotRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return BotRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): BotRequestBuilderGetQueryParameters {
        return new BotRequestBuilderGetQueryParameters($expand, $select);
    }

}
