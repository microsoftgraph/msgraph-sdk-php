<?php

namespace Microsoft\Graph\Generated\Education\Me;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Generated\Education\Me\Assignments\AssignmentsRequestBuilder;
use Microsoft\Graph\Generated\Education\Me\Assignments\Item\EducationAssignmentItemRequestBuilder;
use Microsoft\Graph\Generated\Education\Me\Classes\ClassesRequestBuilder;
use Microsoft\Graph\Generated\Education\Me\Classes\Item\EducationClassItemRequestBuilder as MicrosoftGraphGeneratedEducationMeClassesItemEducationClassItemRequestBuilder;
use Microsoft\Graph\Generated\Education\Me\Rubrics\Item\EducationRubricItemRequestBuilder;
use Microsoft\Graph\Generated\Education\Me\Rubrics\RubricsRequestBuilder;
use Microsoft\Graph\Generated\Education\Me\Schools\Item\EducationSchoolItemRequestBuilder;
use Microsoft\Graph\Generated\Education\Me\Schools\SchoolsRequestBuilder;
use Microsoft\Graph\Generated\Education\Me\TaughtClasses\Item\EducationClassItemRequestBuilder as MicrosoftGraphGeneratedEducationMeTaughtClassesItemEducationClassItemRequestBuilder;
use Microsoft\Graph\Generated\Education\Me\TaughtClasses\TaughtClassesRequestBuilder;
use Microsoft\Graph\Generated\Education\Me\User\UserRequestBuilder;
use Microsoft\Graph\Generated\Models\EducationUser;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\RequestOption;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

class MeRequestBuilder 
{
    /**
     * The assignments property
    */
    public function assignments(): AssignmentsRequestBuilder {
        return new AssignmentsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The classes property
    */
    public function classes(): ClassesRequestBuilder {
        return new ClassesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /** @var array<string, mixed> $pathParameters Path parameters for the request */
    private array $pathParameters;
    
    /** @var RequestAdapter $requestAdapter The request adapter to use to execute the requests. */
    private RequestAdapter $requestAdapter;
    
    /**
     * The rubrics property
    */
    public function rubrics(): RubricsRequestBuilder {
        return new RubricsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The schools property
    */
    public function schools(): SchoolsRequestBuilder {
        return new SchoolsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The taughtClasses property
    */
    public function taughtClasses(): TaughtClassesRequestBuilder {
        return new TaughtClassesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /** @var string $urlTemplate Url template to use to build the URL for the current request builder */
    private string $urlTemplate;
    
    /**
     * The user property
    */
    public function user(): UserRequestBuilder {
        return new UserRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Gets an item from the Microsoft\Graph\Generated.education.me.assignments.item collection
     * @param string $id Unique identifier of the item
     * @return EducationAssignmentItemRequestBuilder
    */
    public function assignmentsById(string $id): EducationAssignmentItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['educationAssignment_id'] = $id;
        return new EducationAssignmentItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Generated.education.me.classes.item collection
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphGeneratedEducationMeClassesItemEducationClassItemRequestBuilder
    */
    public function classesById(string $id): MicrosoftGraphGeneratedEducationMeClassesItemEducationClassItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['educationClass_id'] = $id;
        return new MicrosoftGraphGeneratedEducationMeClassesItemEducationClassItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new MeRequestBuilder and sets the default values.
     * @param array<string, mixed> $pathParameters Path parameters for the request
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct(array $pathParameters, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/education/me{?select,expand}';
        $this->requestAdapter = $requestAdapter;
        $this->pathParameters = $pathParameters;
    }

    /**
     * Delete navigation property me for education
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @return RequestInformation
    */
    public function createDeleteRequestInformation(?array $headers = null, ?array $options = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
        if ($headers !== null) {
            $requestInfo->headers = array_merge($requestInfo->headers, $headers);
        }
        if ($options !== null) {
            $requestInfo->addRequestOptions(...$options);
        }
        return $requestInfo;
    }

    /**
     * Get me from education
     * @param array|null $queryParameters Request query parameters
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @return RequestInformation
    */
    public function createGetRequestInformation(?array $queryParameters = null, ?array $headers = null, ?array $options = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        if ($headers !== null) {
            $requestInfo->headers = array_merge($requestInfo->headers, $headers);
        }
        if ($queryParameters !== null) {
            $requestInfo->setQueryParameters($queryParameters);
        }
        if ($options !== null) {
            $requestInfo->addRequestOptions(...$options);
        }
        return $requestInfo;
    }

    /**
     * Update the navigation property me in education
     * @param EducationUser $body 
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @return RequestInformation
    */
    public function createPatchRequestInformation(EducationUser $body, ?array $headers = null, ?array $options = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PATCH;
        if ($headers !== null) {
            $requestInfo->headers = array_merge($requestInfo->headers, $headers);
        }
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        if ($options !== null) {
            $requestInfo->addRequestOptions(...$options);
        }
        return $requestInfo;
    }

    /**
     * Delete navigation property me for education
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function delete(?array $headers = null, ?array $options = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createDeleteRequestInformation($headers, $options);
        try {
            return $this->requestAdapter->sendAsync($requestInfo, '', $responseHandler);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Get me from education
     * @param array|null $queryParameters Request query parameters
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function get(?array $queryParameters = null, ?array $headers = null, ?array $options = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createGetRequestInformation($queryParameters, $headers, $options);
        try {
            return $this->requestAdapter->sendAsync($requestInfo, EducationUser::class, $responseHandler);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Update the navigation property me in education
     * @param EducationUser $body 
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function patch(EducationUser $body, ?array $headers = null, ?array $options = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createPatchRequestInformation($body, $headers, $options);
        try {
            return $this->requestAdapter->sendAsync($requestInfo, '', $responseHandler);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Gets an item from the Microsoft\Graph\Generated.education.me.rubrics.item collection
     * @param string $id Unique identifier of the item
     * @return EducationRubricItemRequestBuilder
    */
    public function rubricsById(string $id): EducationRubricItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['educationRubric_id'] = $id;
        return new EducationRubricItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Generated.education.me.schools.item collection
     * @param string $id Unique identifier of the item
     * @return EducationSchoolItemRequestBuilder
    */
    public function schoolsById(string $id): EducationSchoolItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['educationSchool_id'] = $id;
        return new EducationSchoolItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Generated.education.me.taughtClasses.item collection
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphGeneratedEducationMeTaughtClassesItemEducationClassItemRequestBuilder
    */
    public function taughtClassesById(string $id): MicrosoftGraphGeneratedEducationMeTaughtClassesItemEducationClassItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['educationClass_id'] = $id;
        return new MicrosoftGraphGeneratedEducationMeTaughtClassesItemEducationClassItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

}
