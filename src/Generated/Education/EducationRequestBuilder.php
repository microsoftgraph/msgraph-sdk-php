<?php

namespace Microsoft\Graph\Generated\Education;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Generated\Education\Classes\ClassesRequestBuilder;
use Microsoft\Graph\Generated\Education\Classes\Item\EducationClassItemRequestBuilder;
use Microsoft\Graph\Generated\Education\Me\MeRequestBuilder;
use Microsoft\Graph\Generated\Education\Schools\Item\EducationSchoolItemRequestBuilder;
use Microsoft\Graph\Generated\Education\Schools\SchoolsRequestBuilder;
use Microsoft\Graph\Generated\Education\Users\Item\EducationUserItemRequestBuilder;
use Microsoft\Graph\Generated\Education\Users\UsersRequestBuilder;
use Microsoft\Graph\Generated\Models\EducationRoot;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

/**
 * Provides operations to manage the educationRoot singleton.
*/
class EducationRequestBuilder 
{
    /**
     * Provides operations to manage the classes property of the microsoft.graph.educationRoot entity.
    */
    public function classes(): ClassesRequestBuilder {
        return new ClassesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the me property of the microsoft.graph.educationRoot entity.
    */
    public function me(): MeRequestBuilder {
        return new MeRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var array<string, mixed> $pathParameters Path parameters for the request
    */
    private array $pathParameters;
    
    /**
     * @var RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    private RequestAdapter $requestAdapter;
    
    /**
     * Provides operations to manage the schools property of the microsoft.graph.educationRoot entity.
    */
    public function schools(): SchoolsRequestBuilder {
        return new SchoolsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var string $urlTemplate Url template to use to build the URL for the current request builder
    */
    private string $urlTemplate;
    
    /**
     * Provides operations to manage the users property of the microsoft.graph.educationRoot entity.
    */
    public function users(): UsersRequestBuilder {
        return new UsersRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the classes property of the microsoft.graph.educationRoot entity.
     * @param string $id Unique identifier of the item
     * @return EducationClassItemRequestBuilder
    */
    public function classesById(string $id): EducationClassItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['educationClass%2Did'] = $id;
        return new EducationClassItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new EducationRequestBuilder and sets the default values.
     * @param array<string, mixed> $pathParameters Path parameters for the request
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct(array $pathParameters, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/education{?%24select,%24expand}';
        $this->requestAdapter = $requestAdapter;
        $this->pathParameters = $pathParameters;
    }

    /**
     * Get education
     * @param EducationRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function get(?EducationRequestBuilderGetRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [EducationRoot::class, 'createFromDiscriminatorValue'], $responseHandler, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Update education
     * @param EducationRoot $body The request body
     * @param EducationRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function patch(EducationRoot $body, ?EducationRequestBuilderPatchRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [EducationRoot::class, 'createFromDiscriminatorValue'], $responseHandler, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Provides operations to manage the schools property of the microsoft.graph.educationRoot entity.
     * @param string $id Unique identifier of the item
     * @return EducationSchoolItemRequestBuilder
    */
    public function schoolsById(string $id): EducationSchoolItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['educationSchool%2Did'] = $id;
        return new EducationSchoolItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Get education
     * @param EducationRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?EducationRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        $requestInfo->addHeader('Accept', "application/json");
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->addHeaders($requestConfiguration->headers);
            }
            if ($requestConfiguration->queryParameters !== null) {
                $requestInfo->setQueryParameters($requestConfiguration->queryParameters);
            }
            if ($requestConfiguration->options !== null) {
                $requestInfo->addRequestOptions(...$requestConfiguration->options);
            }
        }
        return $requestInfo;
    }

    /**
     * Update education
     * @param EducationRoot $body The request body
     * @param EducationRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(EducationRoot $body, ?EducationRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PATCH;
        $requestInfo->addHeader('Accept', "application/json");
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->addHeaders($requestConfiguration->headers);
            }
            if ($requestConfiguration->options !== null) {
                $requestInfo->addRequestOptions(...$requestConfiguration->options);
            }
        }
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

    /**
     * Provides operations to manage the users property of the microsoft.graph.educationRoot entity.
     * @param string $id Unique identifier of the item
     * @return EducationUserItemRequestBuilder
    */
    public function usersById(string $id): EducationUserItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['educationUser%2Did'] = $id;
        return new EducationUserItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

}
