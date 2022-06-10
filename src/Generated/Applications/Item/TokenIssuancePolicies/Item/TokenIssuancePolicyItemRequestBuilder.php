<?php

namespace Microsoft\Graph\Applications\Item\TokenIssuancePolicies\Item;

use Microsoft\Graph\Applications\Item\TokenIssuancePolicies\Item\Ref\RefRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;

class TokenIssuancePolicyItemRequestBuilder 
{
    /**
     * @var array<string, mixed> $pathParameters Path parameters for the request
    */
    private array $pathParameters;
    
    /**
     * The ref property
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
     * Instantiates a new TokenIssuancePolicyItemRequestBuilder and sets the default values.
     * @param array<string, mixed> $pathParameters Path parameters for the request
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct(array $pathParameters, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/applications/{application%2Did}/tokenIssuancePolicies/{tokenIssuancePolicy%2Did}';
        $this->requestAdapter = $requestAdapter;
        $this->pathParameters = $pathParameters;
    }

}
