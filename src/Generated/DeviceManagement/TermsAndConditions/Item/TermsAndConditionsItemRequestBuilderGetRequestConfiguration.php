<?php

namespace Microsoft\\Graph\\Generated\DeviceManagement\TermsAndConditions\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class TermsAndConditionsItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var TermsAndConditionsItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?TermsAndConditionsItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new TermsAndConditionsItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param TermsAndConditionsItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?TermsAndConditionsItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new TermsAndConditionsItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return TermsAndConditionsItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): TermsAndConditionsItemRequestBuilderGetQueryParameters {
        return new TermsAndConditionsItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
