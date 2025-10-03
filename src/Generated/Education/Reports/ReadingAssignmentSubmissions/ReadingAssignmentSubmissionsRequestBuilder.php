<?php

namespace Microsoft\\Graph\\Generated\Education\Reports\ReadingAssignmentSubmissions;

use Exception;
use Http\Promise\Promise;
use Microsoft\\Graph\\Generated\Education\Reports\ReadingAssignmentSubmissions\Count\CountRequestBuilder;
use Microsoft\\Graph\\Generated\Education\Reports\ReadingAssignmentSubmissions\Item\ReadingAssignmentSubmissionItemRequestBuilder;
use Microsoft\\Graph\\Generated\Models\ODataErrors\ODataError;
use Microsoft\\Graph\\Generated\Models\ReadingAssignmentSubmission;
use Microsoft\\Graph\\Generated\Models\ReadingAssignmentSubmissionCollectionResponse;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the readingAssignmentSubmissions property of the microsoft.graph.reportsRoot entity.
*/
class ReadingAssignmentSubmissionsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the readingAssignmentSubmissions property of the microsoft.graph.reportsRoot entity.
     * @param string $readingAssignmentSubmissionId The unique identifier of readingAssignmentSubmission
     * @return ReadingAssignmentSubmissionItemRequestBuilder
    */
    public function byReadingAssignmentSubmissionId(string $readingAssignmentSubmissionId): ReadingAssignmentSubmissionItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['readingAssignmentSubmission%2Did'] = $readingAssignmentSubmissionId;
        return new ReadingAssignmentSubmissionItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new ReadingAssignmentSubmissionsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/education/reports/readingAssignmentSubmissions{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get a list of reading assignments that were submitted by a student.
     * @param ReadingAssignmentSubmissionsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ReadingAssignmentSubmissionCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/reportsroot-list-readingassignmentsubmissions?view=graph-rest-1.0 Find more info here
    */
    public function get(?ReadingAssignmentSubmissionsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ReadingAssignmentSubmissionCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to readingAssignmentSubmissions for education
     * @param ReadingAssignmentSubmission $body The request body
     * @param ReadingAssignmentSubmissionsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ReadingAssignmentSubmission|null>
     * @throws Exception
    */
    public function post(ReadingAssignmentSubmission $body, ?ReadingAssignmentSubmissionsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ReadingAssignmentSubmission::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get a list of reading assignments that were submitted by a student.
     * @param ReadingAssignmentSubmissionsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?ReadingAssignmentSubmissionsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to readingAssignmentSubmissions for education
     * @param ReadingAssignmentSubmission $body The request body
     * @param ReadingAssignmentSubmissionsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(ReadingAssignmentSubmission $body, ?ReadingAssignmentSubmissionsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return ReadingAssignmentSubmissionsRequestBuilder
    */
    public function withUrl(string $rawUrl): ReadingAssignmentSubmissionsRequestBuilder {
        return new ReadingAssignmentSubmissionsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
