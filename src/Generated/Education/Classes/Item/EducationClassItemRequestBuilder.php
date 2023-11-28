<?php

namespace Microsoft\Graph\Generated\Education\Classes\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Education\Classes\Item\AssignmentCategories\AssignmentCategoriesRequestBuilder;
use Microsoft\Graph\Generated\Education\Classes\Item\AssignmentDefaults\AssignmentDefaultsRequestBuilder;
use Microsoft\Graph\Generated\Education\Classes\Item\Assignments\AssignmentsRequestBuilder;
use Microsoft\Graph\Generated\Education\Classes\Item\AssignmentSettings\AssignmentSettingsRequestBuilder;
use Microsoft\Graph\Generated\Education\Classes\Item\Group\GroupRequestBuilder;
use Microsoft\Graph\Generated\Education\Classes\Item\Members\MembersRequestBuilder;
use Microsoft\Graph\Generated\Education\Classes\Item\Schools\SchoolsRequestBuilder;
use Microsoft\Graph\Generated\Education\Classes\Item\Teachers\TeachersRequestBuilder;
use Microsoft\Graph\Generated\Models\EducationClass;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the classes property of the microsoft.graph.educationRoot entity.
*/
class EducationClassItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to manage the assignmentCategories property of the microsoft.graph.educationClass entity.
    */
    public function assignmentCategories(): AssignmentCategoriesRequestBuilder {
        return new AssignmentCategoriesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the assignmentDefaults property of the microsoft.graph.educationClass entity.
    */
    public function assignmentDefaults(): AssignmentDefaultsRequestBuilder {
        return new AssignmentDefaultsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the assignments property of the microsoft.graph.educationClass entity.
    */
    public function assignments(): AssignmentsRequestBuilder {
        return new AssignmentsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the assignmentSettings property of the microsoft.graph.educationClass entity.
    */
    public function assignmentSettings(): AssignmentSettingsRequestBuilder {
        return new AssignmentSettingsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the group property of the microsoft.graph.educationClass entity.
    */
    public function group(): GroupRequestBuilder {
        return new GroupRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the members property of the microsoft.graph.educationClass entity.
    */
    public function members(): MembersRequestBuilder {
        return new MembersRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the schools property of the microsoft.graph.educationClass entity.
    */
    public function schools(): SchoolsRequestBuilder {
        return new SchoolsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the teachers property of the microsoft.graph.educationClass entity.
    */
    public function teachers(): TeachersRequestBuilder {
        return new TeachersRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new EducationClassItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/education/classes/{educationClass%2Did}{?%24select,%24expand}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete an educationClass. Because a class is also a universal group, deleting a class deletes the group.
     * @param EducationClassItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/educationclass-delete?view=graph-rest-1.0 Find more info here
    */
    public function delete(?EducationClassItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Retrieve a class from the system. A class is a universal group with a special property that indicates to the system that the group is a class. Group members represent the students; group admins represent the teachers in the class. If you're using the delegated token, the user will only see classes in which they are members.
     * @param EducationClassItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<EducationClass|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/educationclass-get?view=graph-rest-1.0 Find more info here
    */
    public function get(?EducationClassItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [EducationClass::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the properties of an educationClass object.
     * @param EducationClass $body The request body
     * @param EducationClassItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<EducationClass|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/educationclass-update?view=graph-rest-1.0 Find more info here
    */
    public function patch(EducationClass $body, ?EducationClassItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [EducationClass::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete an educationClass. Because a class is also a universal group, deleting a class deletes the group.
     * @param EducationClassItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?EducationClassItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        return $requestInfo;
    }

    /**
     * Retrieve a class from the system. A class is a universal group with a special property that indicates to the system that the group is a class. Group members represent the students; group admins represent the teachers in the class. If you're using the delegated token, the user will only see classes in which they are members.
     * @param EducationClassItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?EducationClassItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            if ($requestConfiguration->queryParameters !== null) {
                $requestInfo->setQueryParameters($requestConfiguration->queryParameters);
            }
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        return $requestInfo;
    }

    /**
     * Update the properties of an educationClass object.
     * @param EducationClass $body The request body
     * @param EducationClassItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(EducationClass $body, ?EducationClassItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PATCH;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return EducationClassItemRequestBuilder
    */
    public function withUrl(string $rawUrl): EducationClassItemRequestBuilder {
        return new EducationClassItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
