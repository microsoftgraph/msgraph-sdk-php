<?php

namespace Microsoft\\Graph\\Generated\Reports\Partners\Billing\Usage\Billed;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class BilledRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var BilledRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?BilledRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new BilledRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param BilledRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?BilledRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new BilledRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return BilledRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): BilledRequestBuilderGetQueryParameters {
        return new BilledRequestBuilderGetQueryParameters($expand, $select);
    }

}
