<?php

namespace Microsoft\Graph\Generated\Education\Classes\Item\Assignments\Item\SetUpFeedbackResourcesFolder;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\EducationAssignment;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the setUpFeedbackResourcesFolder method.
*/
class SetUpFeedbackResourcesFolderRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new SetUpFeedbackResourcesFolderRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/education/classes/{educationClass%2Did}/assignments/{educationAssignment%2Did}/setUpFeedbackResourcesFolder');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Create a SharePoint folder to upload feedback files for a given educationSubmission. Only teachers can perform this operation. The teacher determines the resources to upload in the feedback resources folder of a submission.
     * @param SetUpFeedbackResourcesFolderRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<EducationAssignment|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/educationassignment-setupfeedbackresourcesfolder?view=graph-rest-1.0 Find more info here
    */
    public function post(?SetUpFeedbackResourcesFolderRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [EducationAssignment::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create a SharePoint folder to upload feedback files for a given educationSubmission. Only teachers can perform this operation. The teacher determines the resources to upload in the feedback resources folder of a submission.
     * @param SetUpFeedbackResourcesFolderRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(?SetUpFeedbackResourcesFolderRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::POST;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return SetUpFeedbackResourcesFolderRequestBuilder
    */
    public function withUrl(string $rawUrl): SetUpFeedbackResourcesFolderRequestBuilder {
        return new SetUpFeedbackResourcesFolderRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
