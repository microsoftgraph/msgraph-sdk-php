<?php

namespace Microsoft\Graph\Generated\Admin\ServiceAnnouncement\Messages\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ServiceUpdateMessageItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var ServiceUpdateMessageItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ServiceUpdateMessageItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new ServiceUpdateMessageItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ServiceUpdateMessageItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ServiceUpdateMessageItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new ServiceUpdateMessageItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return ServiceUpdateMessageItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): ServiceUpdateMessageItemRequestBuilderGetQueryParameters {
        return new ServiceUpdateMessageItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
