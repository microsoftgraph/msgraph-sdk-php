<?php

namespace Microsoft\\Graph\\Generated\Solutions\VirtualEvents\Townhalls\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class VirtualEventTownhallItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var VirtualEventTownhallItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?VirtualEventTownhallItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new VirtualEventTownhallItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param VirtualEventTownhallItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?VirtualEventTownhallItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new VirtualEventTownhallItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return VirtualEventTownhallItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): VirtualEventTownhallItemRequestBuilderGetQueryParameters {
        return new VirtualEventTownhallItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
