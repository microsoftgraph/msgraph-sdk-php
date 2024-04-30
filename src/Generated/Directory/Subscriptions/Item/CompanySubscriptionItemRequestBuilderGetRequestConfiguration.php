<?php

namespace Microsoft\Graph\Generated\Directory\Subscriptions\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class CompanySubscriptionItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var CompanySubscriptionItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?CompanySubscriptionItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new CompanySubscriptionItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param CompanySubscriptionItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?CompanySubscriptionItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new CompanySubscriptionItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return CompanySubscriptionItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): CompanySubscriptionItemRequestBuilderGetQueryParameters {
        return new CompanySubscriptionItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
