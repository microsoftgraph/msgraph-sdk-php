<?php

namespace Microsoft\\Graph\\Generated\Identity\B2xUserFlows\Item\ApiConnectorConfiguration\PostFederationSignup;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class PostFederationSignupRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var PostFederationSignupRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?PostFederationSignupRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new PostFederationSignupRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param PostFederationSignupRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?PostFederationSignupRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new PostFederationSignupRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return PostFederationSignupRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): PostFederationSignupRequestBuilderGetQueryParameters {
        return new PostFederationSignupRequestBuilderGetQueryParameters($expand, $select);
    }

}
