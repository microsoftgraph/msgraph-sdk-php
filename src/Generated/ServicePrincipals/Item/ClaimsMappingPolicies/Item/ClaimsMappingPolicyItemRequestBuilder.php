<?php

namespace Microsoft\Graph\Generated\ServicePrincipals\Item\ClaimsMappingPolicies\Item;

use Microsoft\Graph\Generated\ServicePrincipals\Item\ClaimsMappingPolicies\Item\Ref\RefRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;

/**
 * Builds and executes requests for operations under /servicePrincipals/{servicePrincipal-id}/claimsMappingPolicies/{claimsMappingPolicy-id}
*/
class ClaimsMappingPolicyItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to manage the collection of servicePrincipal entities.
    */
    public function ref(): RefRequestBuilder {
        return new RefRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new ClaimsMappingPolicyItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/servicePrincipals/{servicePrincipal%2Did}/claimsMappingPolicies/{claimsMappingPolicy%2Did}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

}
