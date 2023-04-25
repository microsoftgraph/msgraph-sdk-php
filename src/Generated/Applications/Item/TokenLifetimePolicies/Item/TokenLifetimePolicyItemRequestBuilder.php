<?php

namespace Microsoft\Graph\Generated\Applications\Item\TokenLifetimePolicies\Item;

use Microsoft\Graph\Generated\Applications\Item\TokenLifetimePolicies\Item\Ref\RefRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;

/**
 * Builds and executes requests for operations under /applications/{application-id}/tokenLifetimePolicies/{tokenLifetimePolicy-id}
*/
class TokenLifetimePolicyItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to manage the collection of application entities.
    */
    public function ref(): RefRequestBuilder {
        return new RefRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new TokenLifetimePolicyItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], "{+baseurl}/applications/{application%2Did}/tokenLifetimePolicies/{tokenLifetimePolicy%2Did}");
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

}
