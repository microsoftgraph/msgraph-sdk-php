<?php

namespace Microsoft\Graph\Generated\Policies\AdminConsentRequestPolicy;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class AdminConsentRequestPolicyRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var AdminConsentRequestPolicyRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?AdminConsentRequestPolicyRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new AdminConsentRequestPolicyRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param AdminConsentRequestPolicyRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?AdminConsentRequestPolicyRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new AdminConsentRequestPolicyRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return AdminConsentRequestPolicyRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): AdminConsentRequestPolicyRequestBuilderGetQueryParameters {
        return new AdminConsentRequestPolicyRequestBuilderGetQueryParameters($expand, $select);
    }

}
