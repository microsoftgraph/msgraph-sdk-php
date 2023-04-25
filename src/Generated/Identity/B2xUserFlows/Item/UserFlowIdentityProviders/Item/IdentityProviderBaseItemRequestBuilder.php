<?php

namespace Microsoft\Graph\Generated\Identity\B2xUserFlows\Item\UserFlowIdentityProviders\Item;

use Microsoft\Graph\Generated\Identity\B2xUserFlows\Item\UserFlowIdentityProviders\Item\Ref\RefRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;

/**
 * Builds and executes requests for operations under /identity/b2xUserFlows/{b2xIdentityUserFlow-id}/userFlowIdentityProviders/{identityProviderBase-id}
*/
class IdentityProviderBaseItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to manage the collection of identityContainer entities.
    */
    public function ref(): RefRequestBuilder {
        return new RefRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new IdentityProviderBaseItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], "{+baseurl}/identity/b2xUserFlows/{b2xIdentityUserFlow%2Did}/userFlowIdentityProviders/{identityProviderBase%2Did}");
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

}
