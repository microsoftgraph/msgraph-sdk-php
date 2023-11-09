<?php

namespace Microsoft\Graph\Generated\Privacy\SubjectRightsRequests\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\SubjectRightsRequest;
use Microsoft\Graph\Generated\Privacy\SubjectRightsRequests\Item\Approvers\ApproversRequestBuilder;
use Microsoft\Graph\Generated\Privacy\SubjectRightsRequests\Item\Collaborators\CollaboratorsRequestBuilder;
use Microsoft\Graph\Generated\Privacy\SubjectRightsRequests\Item\GetFinalAttachment\GetFinalAttachmentRequestBuilder;
use Microsoft\Graph\Generated\Privacy\SubjectRightsRequests\Item\GetFinalReport\GetFinalReportRequestBuilder;
use Microsoft\Graph\Generated\Privacy\SubjectRightsRequests\Item\Notes\NotesRequestBuilder;
use Microsoft\Graph\Generated\Privacy\SubjectRightsRequests\Item\Team\TeamRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the subjectRightsRequests property of the microsoft.graph.privacy entity.
*/
class SubjectRightsRequestItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to manage the approvers property of the microsoft.graph.subjectRightsRequest entity.
    */
    public function approvers(): ApproversRequestBuilder {
        return new ApproversRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the collaborators property of the microsoft.graph.subjectRightsRequest entity.
    */
    public function collaborators(): CollaboratorsRequestBuilder {
        return new CollaboratorsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getFinalAttachment method.
    */
    public function getFinalAttachment(): GetFinalAttachmentRequestBuilder {
        return new GetFinalAttachmentRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getFinalReport method.
    */
    public function getFinalReport(): GetFinalReportRequestBuilder {
        return new GetFinalReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the notes property of the microsoft.graph.subjectRightsRequest entity.
    */
    public function notes(): NotesRequestBuilder {
        return new NotesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the team property of the microsoft.graph.subjectRightsRequest entity.
    */
    public function team(): TeamRequestBuilder {
        return new TeamRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new SubjectRightsRequestItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/privacy/subjectRightsRequests/{subjectRightsRequest%2Did}{?%24select,%24expand}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property subjectRightsRequests for privacy
     * @param SubjectRightsRequestItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function delete(?SubjectRightsRequestItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Read the properties and relationships of a subjectRightsRequest object. This API is available in the following national cloud deployments.
     * @param SubjectRightsRequestItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<SubjectRightsRequest|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/subjectrightsrequest-get?view=graph-rest-1.0 Find more info here
    */
    public function get(?SubjectRightsRequestItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [SubjectRightsRequest::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the properties of a subjectRightsRequest object. This API is available in the following national cloud deployments.
     * @param SubjectRightsRequest $body The request body
     * @param SubjectRightsRequestItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<SubjectRightsRequest|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/subjectrightsrequest-update?view=graph-rest-1.0 Find more info here
    */
    public function patch(SubjectRightsRequest $body, ?SubjectRightsRequestItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [SubjectRightsRequest::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete navigation property subjectRightsRequests for privacy
     * @param SubjectRightsRequestItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?SubjectRightsRequestItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json, application/json");
        return $requestInfo;
    }

    /**
     * Read the properties and relationships of a subjectRightsRequest object. This API is available in the following national cloud deployments.
     * @param SubjectRightsRequestItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?SubjectRightsRequestItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
        $requestInfo->tryAddHeader('Accept', "application/json;q=1");
        return $requestInfo;
    }

    /**
     * Update the properties of a subjectRightsRequest object. This API is available in the following national cloud deployments.
     * @param SubjectRightsRequest $body The request body
     * @param SubjectRightsRequestItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(SubjectRightsRequest $body, ?SubjectRightsRequestItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PATCH;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json;q=1");
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return SubjectRightsRequestItemRequestBuilder
    */
    public function withUrl(string $rawUrl): SubjectRightsRequestItemRequestBuilder {
        return new SubjectRightsRequestItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
