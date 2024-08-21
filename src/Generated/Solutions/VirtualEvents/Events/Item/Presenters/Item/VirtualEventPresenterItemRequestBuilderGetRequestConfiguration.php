<?php

namespace Microsoft\Graph\Generated\Solutions\VirtualEvents\Events\Item\Presenters\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class VirtualEventPresenterItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var VirtualEventPresenterItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?VirtualEventPresenterItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new VirtualEventPresenterItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param VirtualEventPresenterItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?VirtualEventPresenterItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new VirtualEventPresenterItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return VirtualEventPresenterItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): VirtualEventPresenterItemRequestBuilderGetQueryParameters {
        return new VirtualEventPresenterItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
