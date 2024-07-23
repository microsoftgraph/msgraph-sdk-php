<?php

namespace Microsoft\Graph\Generated\Storage\Settings\Quota\Services\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ServiceStorageQuotaBreakdownItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var ServiceStorageQuotaBreakdownItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ServiceStorageQuotaBreakdownItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new ServiceStorageQuotaBreakdownItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ServiceStorageQuotaBreakdownItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ServiceStorageQuotaBreakdownItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new ServiceStorageQuotaBreakdownItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return ServiceStorageQuotaBreakdownItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): ServiceStorageQuotaBreakdownItemRequestBuilderGetQueryParameters {
        return new ServiceStorageQuotaBreakdownItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
