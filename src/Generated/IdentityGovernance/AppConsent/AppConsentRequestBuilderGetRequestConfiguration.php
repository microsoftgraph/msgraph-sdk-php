<?php

namespace Microsoft\Graph\Generated\IdentityGovernance\AppConsent;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class AppConsentRequestBuilderGetRequestConfiguration 
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
     * @var AppConsentRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?AppConsentRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new appConsentRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return AppConsentRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): AppConsentRequestBuilderGetQueryParameters {
        return new AppConsentRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new appConsentRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param AppConsentRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?AppConsentRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
