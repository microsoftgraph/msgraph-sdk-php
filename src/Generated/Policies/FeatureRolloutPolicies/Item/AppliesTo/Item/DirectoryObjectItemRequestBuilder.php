<?php

namespace Microsoft\Graph\Generated\Policies\FeatureRolloutPolicies\Item\AppliesTo\Item;

use Microsoft\Graph\Generated\Policies\FeatureRolloutPolicies\Item\AppliesTo\Item\Ref\RefRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;

/**
 * Builds and executes requests for operations under /policies/featureRolloutPolicies/{featureRolloutPolicy-id}/appliesTo/{directoryObject-id}
*/
class DirectoryObjectItemRequestBuilder 
{
    /**
     * @var array<string, mixed> $pathParameters Path parameters for the request
    */
    private array $pathParameters;
    
    /**
     * Provides operations to manage the collection of policyRoot entities.
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
     * Instantiates a new DirectoryObjectItemRequestBuilder and sets the default values.
     * @param array<string, mixed> $pathParameters Path parameters for the request
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct(array $pathParameters, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/policies/featureRolloutPolicies/{featureRolloutPolicy%2Did}/appliesTo/{directoryObject%2Did}';
        $this->requestAdapter = $requestAdapter;
        $this->pathParameters = $pathParameters;
    }

}
