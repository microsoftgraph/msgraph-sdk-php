<?php

namespace Microsoft\Graph\Generated\Education\Me;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Generated\Education\Me\Assignments\AssignmentsRequestBuilder;
use Microsoft\Graph\Generated\Education\Me\Assignments\Item\EducationAssignmentItemRequestBuilder;
use Microsoft\Graph\Generated\Education\Me\Classes\ClassesRequestBuilder;
use Microsoft\Graph\Generated\Education\Me\Rubrics\Item\EducationRubricItemRequestBuilder;
use Microsoft\Graph\Generated\Education\Me\Rubrics\RubricsRequestBuilder;
use Microsoft\Graph\Generated\Education\Me\Schools\Item\EducationSchoolItemRequestBuilder;
use Microsoft\Graph\Generated\Education\Me\Schools\SchoolsRequestBuilder;
use Microsoft\Graph\Generated\Education\Me\TaughtClasses\TaughtClassesRequestBuilder;
use Microsoft\Graph\Generated\Education\Me\User\UserRequestBuilder;
use Microsoft\Graph\Generated\Models\EducationUser;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

/**
 * Provides operations to manage the me property of the microsoft.graph.educationRoot entity.
*/
class MeRequestBuilder 
{
    /**
     * Provides operations to manage the assignments property of the microsoft.graph.educationUser entity.
    */
    public function assignments(): AssignmentsRequestBuilder {
        return new AssignmentsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the classes property of the microsoft.graph.educationUser entity.
    */
    public function classes(): ClassesRequestBuilder {
        return new ClassesRequestBuilder($this->pathParameters, $this->requestAdapter);
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
     * Provides operations to manage the rubrics property of the microsoft.graph.educationUser entity.
    */
    public function rubrics(): RubricsRequestBuilder {
        return new RubricsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the schools property of the microsoft.graph.educationUser entity.
    */
    public function schools(): SchoolsRequestBuilder {
        return new SchoolsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the taughtClasses property of the microsoft.graph.educationUser entity.
    */
    public function taughtClasses(): TaughtClassesRequestBuilder {
        return new TaughtClassesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var string $urlTemplate Url template to use to build the URL for the current request builder
    */
    private string $urlTemplate;
    
    /**
     * Provides operations to manage the user property of the microsoft.graph.educationUser entity.
    */
    public function user(): UserRequestBuilder {
        return new UserRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the assignments property of the microsoft.graph.educationUser entity.
     * @param string $id Unique identifier of the item
     * @return EducationAssignmentItemRequestBuilder
    */
    public function assignmentsById(string $id): EducationAssignmentItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['educationAssignment%2Did'] = $id;
        return new EducationAssignmentItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the classes property of the microsoft.graph.educationUser entity.
     * @param string $id Unique identifier of the item
     * @return \Microsoft\Graph\Generated\Education\Me\Classes\Item\EducationClassItemRequestBuilder
    */
    public function classesById(string $id): \Microsoft\Graph\Generated\Education\Me\Classes\Item\EducationClassItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['educationClass%2Did'] = $id;
        return new \Microsoft\Graph\Generated\Education\Me\Classes\Item\EducationClassItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new MeRequestBuilder and sets the default values.
     * @param array<string, mixed> $pathParameters Path parameters for the request
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct(array $pathParameters, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/education/me{?%24select,%24expand}';
        $this->requestAdapter = $requestAdapter;
        $this->pathParameters = $pathParameters;
    }

    /**
     * Delete navigation property me for education
     * @param MeRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function delete(?MeRequestBuilderDeleteRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendNoContentAsync($requestInfo, $responseHandler, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Get me from education
     * @param MeRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function get(?MeRequestBuilderGetRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [EducationUser::class, 'createFromDiscriminatorValue'], $responseHandler, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Update the navigation property me in education
     * @param EducationUser $body The request body
     * @param MeRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function patch(EducationUser $body, ?MeRequestBuilderPatchRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [EducationUser::class, 'createFromDiscriminatorValue'], $responseHandler, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Provides operations to manage the rubrics property of the microsoft.graph.educationUser entity.
     * @param string $id Unique identifier of the item
     * @return EducationRubricItemRequestBuilder
    */
    public function rubricsById(string $id): EducationRubricItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['educationRubric%2Did'] = $id;
        return new EducationRubricItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the schools property of the microsoft.graph.educationUser entity.
     * @param string $id Unique identifier of the item
     * @return EducationSchoolItemRequestBuilder
    */
    public function schoolsById(string $id): EducationSchoolItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['educationSchool%2Did'] = $id;
        return new EducationSchoolItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the taughtClasses property of the microsoft.graph.educationUser entity.
     * @param string $id Unique identifier of the item
     * @return \Microsoft\Graph\Generated\Education\Me\TaughtClasses\Item\EducationClassItemRequestBuilder
    */
    public function taughtClassesById(string $id): \Microsoft\Graph\Generated\Education\Me\TaughtClasses\Item\EducationClassItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['educationClass%2Did'] = $id;
        return new \Microsoft\Graph\Generated\Education\Me\TaughtClasses\Item\EducationClassItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Delete navigation property me for education
     * @param MeRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?MeRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->addHeaders($requestConfiguration->headers);
            }
            if ($requestConfiguration->options !== null) {
                $requestInfo->addRequestOptions(...$requestConfiguration->options);
            }
        }
        return $requestInfo;
    }

    /**
     * Get me from education
     * @param MeRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?MeRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update the navigation property me in education
     * @param EducationUser $body The request body
     * @param MeRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(EducationUser $body, ?MeRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
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

}
