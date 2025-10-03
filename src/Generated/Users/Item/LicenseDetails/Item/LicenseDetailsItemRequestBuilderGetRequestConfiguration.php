<?php

namespace Microsoft\\Graph\\Generated\Users\Item\LicenseDetails\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class LicenseDetailsItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var LicenseDetailsItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?LicenseDetailsItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new LicenseDetailsItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param LicenseDetailsItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?LicenseDetailsItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new LicenseDetailsItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return LicenseDetailsItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): LicenseDetailsItemRequestBuilderGetQueryParameters {
        return new LicenseDetailsItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
