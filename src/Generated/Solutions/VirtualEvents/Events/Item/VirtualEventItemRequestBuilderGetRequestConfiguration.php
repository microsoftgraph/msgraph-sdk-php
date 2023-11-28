<?php

namespace Microsoft\Graph\Generated\Solutions\VirtualEvents\Events\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class VirtualEventItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var VirtualEventItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?VirtualEventItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new VirtualEventItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param VirtualEventItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?VirtualEventItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new VirtualEventItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return VirtualEventItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): VirtualEventItemRequestBuilderGetQueryParameters {
        return new VirtualEventItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
