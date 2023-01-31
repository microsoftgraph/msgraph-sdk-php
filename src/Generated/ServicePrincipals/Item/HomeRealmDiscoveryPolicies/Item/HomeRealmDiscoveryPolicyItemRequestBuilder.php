<?php

namespace Microsoft\Graph\Generated\ServicePrincipals\Item\HomeRealmDiscoveryPolicies\Item;

use Microsoft\Graph\Generated\ServicePrincipals\Item\HomeRealmDiscoveryPolicies\Item\Ref\RefRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;

/**
 * Builds and executes requests for operations under /servicePrincipals/{servicePrincipal-id}/homeRealmDiscoveryPolicies/{homeRealmDiscoveryPolicy-id}
*/
class HomeRealmDiscoveryPolicyItemRequestBuilder 
{
    /**
     * @var array<string, mixed> $pathParameters Path parameters for the request
    */
    private array $pathParameters;
    
    /**
     * Provides operations to manage the collection of servicePrincipal entities.
    */
    public function ref(): RefRequestBuilder {
        return new RefRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    private RequestAdapter $requestAdapter;
    
    /**
     * @var string $urlTemplate Url template to use to build the URL for the current request builder
    */
    private string $urlTemplate;
    
    /**
     * Instantiates a new HomeRealmDiscoveryPolicyItemRequestBuilder and sets the default values.
     * @param array<string, mixed> $pathParameters Path parameters for the request
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
     * @param string|null $homeRealmDiscoveryPolicyId key: id of homeRealmDiscoveryPolicy
    */
    public function __construct(array $pathParameters, RequestAdapter $requestAdapter, ?string $homeRealmDiscoveryPolicyId = null) {
        $this->urlTemplate = '{+baseurl}/servicePrincipals/{servicePrincipal%2Did}/homeRealmDiscoveryPolicies/{homeRealmDiscoveryPolicy%2Did}';
        $this->requestAdapter = $requestAdapter;
        $this->pathParameters = $pathParameters;
        $urlTplParams = $pathParameters;
        $urlTplParams['homeRealmDiscoveryPolicyId'] = $homeRealmDiscoveryPolicyId;
        $this->pathParameters = array_merge($this->pathParameters, $urlTplParams);
    }

}
