<?php

namespace Microsoft\Graph\Generated\Education\Reports\SpeakerAssignmentSubmissions;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Education\Reports\SpeakerAssignmentSubmissions\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\Education\Reports\SpeakerAssignmentSubmissions\Item\SpeakerAssignmentSubmissionItemRequestBuilder;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\SpeakerAssignmentSubmission;
use Microsoft\Graph\Generated\Models\SpeakerAssignmentSubmissionCollectionResponse;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the speakerAssignmentSubmissions property of the microsoft.graph.reportsRoot entity.
*/
class SpeakerAssignmentSubmissionsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the speakerAssignmentSubmissions property of the microsoft.graph.reportsRoot entity.
     * @param string $speakerAssignmentSubmissionId The unique identifier of speakerAssignmentSubmission
     * @return SpeakerAssignmentSubmissionItemRequestBuilder
    */
    public function bySpeakerAssignmentSubmissionId(string $speakerAssignmentSubmissionId): SpeakerAssignmentSubmissionItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['speakerAssignmentSubmission%2Did'] = $speakerAssignmentSubmissionId;
        return new SpeakerAssignmentSubmissionItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new SpeakerAssignmentSubmissionsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/education/reports/speakerAssignmentSubmissions{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get a list of speaker assignments that were submitted by a student.
     * @param SpeakerAssignmentSubmissionsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<SpeakerAssignmentSubmissionCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/reportsroot-list-speakerassignmentsubmissions?view=graph-rest-1.0 Find more info here
    */
    public function get(?SpeakerAssignmentSubmissionsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [SpeakerAssignmentSubmissionCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to speakerAssignmentSubmissions for education
     * @param SpeakerAssignmentSubmission $body The request body
     * @param SpeakerAssignmentSubmissionsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<SpeakerAssignmentSubmission|null>
     * @throws Exception
    */
    public function post(SpeakerAssignmentSubmission $body, ?SpeakerAssignmentSubmissionsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [SpeakerAssignmentSubmission::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get a list of speaker assignments that were submitted by a student.
     * @param SpeakerAssignmentSubmissionsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?SpeakerAssignmentSubmissionsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to speakerAssignmentSubmissions for education
     * @param SpeakerAssignmentSubmission $body The request body
     * @param SpeakerAssignmentSubmissionsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(SpeakerAssignmentSubmission $body, ?SpeakerAssignmentSubmissionsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::POST;
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
     * @return SpeakerAssignmentSubmissionsRequestBuilder
    */
    public function withUrl(string $rawUrl): SpeakerAssignmentSubmissionsRequestBuilder {
        return new SpeakerAssignmentSubmissionsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
