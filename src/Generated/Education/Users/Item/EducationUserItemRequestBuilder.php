<?php

namespace Microsoft\Graph\Generated\Education\Users\Item;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Generated\Education\Users\Item\Assignments\AssignmentsRequestBuilder;
use Microsoft\Graph\Generated\Education\Users\Item\Assignments\Item\EducationAssignmentItemRequestBuilder;
use Microsoft\Graph\Generated\Education\Users\Item\Classes\ClassesRequestBuilder;
use Microsoft\Graph\Generated\Education\Users\Item\Classes\Item\EducationClassItemRequestBuilder as MicrosoftGraphGeneratedEducationUsersItemClassesItemEducationClassItemRequestBuilder;
use Microsoft\Graph\Generated\Education\Users\Item\Rubrics\Item\EducationRubricItemRequestBuilder;
use Microsoft\Graph\Generated\Education\Users\Item\Rubrics\RubricsRequestBuilder;
use Microsoft\Graph\Generated\Education\Users\Item\Schools\Item\EducationSchoolItemRequestBuilder;
use Microsoft\Graph\Generated\Education\Users\Item\Schools\SchoolsRequestBuilder;
use Microsoft\Graph\Generated\Education\Users\Item\TaughtClasses\Item\EducationClassItemRequestBuilder as MicrosoftGraphGeneratedEducationUsersItemTaughtClassesItemEducationClassItemRequestBuilder;
use Microsoft\Graph\Generated\Education\Users\Item\TaughtClasses\TaughtClassesRequestBuilder;
use Microsoft\Graph\Generated\Education\Users\Item\User\UserRequestBuilder;
use Microsoft\Graph\Generated\Models\EducationUser;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\RequestOption;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

class EducationUserItemRequestBuilder 
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
    
    /**
     * @var array<string, mixed> $pathParameters Path parameters for the request
    */
    private array $pathParameters;
    
    /**
     * @var RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
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
    
    /**
     * @var string $urlTemplate Url template to use to build the URL for the current request builder
    */
    private string $urlTemplate;
    
    /**
     * The user property
    */
    public function user(): UserRequestBuilder {
        return new UserRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Gets an item from the Microsoft\Graph\Generated.education.users.item.assignments.item collection
     * @param string $id Unique identifier of the item
     * @return EducationAssignmentItemRequestBuilder
    */
    public function assignmentsById(string $id): EducationAssignmentItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['educationAssignment%2Did'] = $id;
        return new EducationAssignmentItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Generated.education.users.item.classes.item collection
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphGeneratedEducationUsersItemClassesItemEducationClassItemRequestBuilder
    */
    public function classesById(string $id): MicrosoftGraphGeneratedEducationUsersItemClassesItemEducationClassItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['educationClass%2Did'] = $id;
        return new MicrosoftGraphGeneratedEducationUsersItemClassesItemEducationClassItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new EducationUserItemRequestBuilder and sets the default values.
     * @param array<string, mixed> $pathParameters Path parameters for the request
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct(array $pathParameters, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/education/users/{educationUser%2Did}{?%24select,%24expand}';
        $this->requestAdapter = $requestAdapter;
        $this->pathParameters = $pathParameters;
    }

    /**
     * Delete navigation property users for education
     * @param array<string, mixed>|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function createDeleteRequestInformation(?EducationUserItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->headers = array_merge($requestInfo->headers, $requestConfiguration->headers);
            }
            if ($requestConfiguration->options !== null) {
                $requestInfo->addRequestOptions(...$requestConfiguration->options);
            }
        }
        return $requestInfo;
    }

    /**
     * Get users from education
     * @param array<string, mixed>|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function createGetRequestInformation(?EducationUserItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->headers = array_merge($requestInfo->headers, $requestConfiguration->headers);
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
     * Update the navigation property users in education
     * @param EducationUser $body 
     * @param array<string, mixed>|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function createPatchRequestInformation(EducationUser $body, ?EducationUserItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PATCH;
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->headers = array_merge($requestInfo->headers, $requestConfiguration->headers);
            }
            if ($requestConfiguration->options !== null) {
                $requestInfo->addRequestOptions(...$requestConfiguration->options);
            }
        }
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

    /**
     * Delete navigation property users for education
     * @param array<string, mixed>|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function delete(?EducationUserItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createDeleteRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
            '4XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
            '5XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
            ];
            return $this->requestAdapter->sendNoContentAsync($requestInfo, $responseHandler, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Get users from education
     * @param array<string, mixed>|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function get(?EducationUserItemRequestBuilderGetRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
            '4XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
            '5XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
            ];
            return $this->requestAdapter->sendAsync($requestInfo, array(EducationUser::class, 'createFromDiscriminatorValue'), $responseHandler, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Update the navigation property users in education
     * @param EducationUser $body 
     * @param array<string, mixed>|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function patch(EducationUser $body, ?EducationUserItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createPatchRequestInformation($body, $requestConfiguration);
        try {
            $errorMappings = [
            '4XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
            '5XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
            ];
            return $this->requestAdapter->sendNoContentAsync($requestInfo, $responseHandler, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Gets an item from the Microsoft\Graph\Generated.education.users.item.rubrics.item collection
     * @param string $id Unique identifier of the item
     * @return EducationRubricItemRequestBuilder
    */
    public function rubricsById(string $id): EducationRubricItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['educationRubric%2Did'] = $id;
        return new EducationRubricItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Generated.education.users.item.schools.item collection
     * @param string $id Unique identifier of the item
     * @return EducationSchoolItemRequestBuilder
    */
    public function schoolsById(string $id): EducationSchoolItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['educationSchool%2Did'] = $id;
        return new EducationSchoolItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Generated.education.users.item.taughtClasses.item collection
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphGeneratedEducationUsersItemTaughtClassesItemEducationClassItemRequestBuilder
    */
    public function taughtClassesById(string $id): MicrosoftGraphGeneratedEducationUsersItemTaughtClassesItemEducationClassItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['educationClass%2Did'] = $id;
        return new MicrosoftGraphGeneratedEducationUsersItemTaughtClassesItemEducationClassItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

}
