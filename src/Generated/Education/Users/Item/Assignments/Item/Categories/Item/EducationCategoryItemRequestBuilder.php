<?php

namespace Microsoft\Graph\Generated\Education\Users\Item\Assignments\Item\Categories\Item;

use Microsoft\Graph\Generated\Education\Users\Item\Assignments\Item\Categories\Item\Ref\RefRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;

/**
 * Builds and executes requests for operations under /education/users/{educationUser-id}/assignments/{educationAssignment-id}/categories/{educationCategory-id}
*/
class EducationCategoryItemRequestBuilder 
{
    /**
     * @var array<string, mixed> $pathParameters Path parameters for the request
    */
    private array $pathParameters;
    
    /**
     * Provides operations to manage the collection of educationRoot entities.
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
     * Instantiates a new EducationCategoryItemRequestBuilder and sets the default values.
     * @param array<string, mixed> $pathParameters Path parameters for the request
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
     * @param string|null $educationCategoryId key: id of educationCategory
    */
    public function __construct(array $pathParameters, RequestAdapter $requestAdapter, ?string $educationCategoryId = null) {
        $this->urlTemplate = '{+baseurl}/education/users/{educationUser%2Did}/assignments/{educationAssignment%2Did}/categories/{educationCategory%2Did}';
        $this->requestAdapter = $requestAdapter;
        $this->pathParameters = $pathParameters;
        $urlTplParams = $pathParameters;
        $urlTplParams['educationCategoryId'] = $educationCategoryId;
        $this->pathParameters = array_merge($this->pathParameters, $urlTplParams);
    }

}
