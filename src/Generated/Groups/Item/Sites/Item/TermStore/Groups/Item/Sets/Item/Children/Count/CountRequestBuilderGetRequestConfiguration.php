<?php

namespace Microsoft\Graph\Generated\Groups\Item\Sites\Item\TermStore\Groups\Item\Sets\Item\Children\Count;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class CountRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var CountRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?CountRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new CountRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param CountRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?CountRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new CountRequestBuilderGetQueryParameters.
     * @param string|null $filter Filter items by property values
     * @param string|null $search Search items by search phrases
     * @return CountRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?string $filter = null, ?string $search = null): CountRequestBuilderGetQueryParameters {
        return new CountRequestBuilderGetQueryParameters($filter, $search);
    }

}
