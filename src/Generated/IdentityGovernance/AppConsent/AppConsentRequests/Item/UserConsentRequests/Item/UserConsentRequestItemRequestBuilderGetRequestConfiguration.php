<?php

namespace Microsoft\Graph\Generated\IdentityGovernance\AppConsent\AppConsentRequests\Item\UserConsentRequests\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class UserConsentRequestItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var UserConsentRequestItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?UserConsentRequestItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new UserConsentRequestItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param UserConsentRequestItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?UserConsentRequestItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new UserConsentRequestItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return UserConsentRequestItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): UserConsentRequestItemRequestBuilderGetQueryParameters {
        return new UserConsentRequestItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
