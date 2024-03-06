<?php

namespace Microsoft\Graph\Generated\Reports\Partners\Billing;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class BillingRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var BillingRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?BillingRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new BillingRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param BillingRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?BillingRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new BillingRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return BillingRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): BillingRequestBuilderGetQueryParameters {
        return new BillingRequestBuilderGetQueryParameters($expand, $select);
    }

}
