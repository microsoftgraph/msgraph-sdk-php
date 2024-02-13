<?php

namespace Microsoft\Graph\Generated\Drives\Item\EscapedList\ContentTypes\Item\Base;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class BaseRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var BaseRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?BaseRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new BaseRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param BaseRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?BaseRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new BaseRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return BaseRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): BaseRequestBuilderGetQueryParameters {
        return new BaseRequestBuilderGetQueryParameters($expand, $select);
    }

}
