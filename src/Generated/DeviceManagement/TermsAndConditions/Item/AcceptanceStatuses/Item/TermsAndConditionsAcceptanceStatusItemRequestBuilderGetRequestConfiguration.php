<?php

namespace Microsoft\Graph\Generated\DeviceManagement\TermsAndConditions\Item\AcceptanceStatuses\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class TermsAndConditionsAcceptanceStatusItemRequestBuilderGetRequestConfiguration 
{
    /**
     * @var array<string, array<string>|string>|null $headers Request headers
    */
    public ?array $headers = null;
    
    /**
     * @var array<RequestOption>|null $options Request options
    */
    public ?array $options = null;
    
    /**
     * @var TermsAndConditionsAcceptanceStatusItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?TermsAndConditionsAcceptanceStatusItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new TermsAndConditionsAcceptanceStatusItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return TermsAndConditionsAcceptanceStatusItemRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): TermsAndConditionsAcceptanceStatusItemRequestBuilderGetQueryParameters {
        return new TermsAndConditionsAcceptanceStatusItemRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new TermsAndConditionsAcceptanceStatusItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param TermsAndConditionsAcceptanceStatusItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?TermsAndConditionsAcceptanceStatusItemRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
