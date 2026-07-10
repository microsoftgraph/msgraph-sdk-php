<?php

namespace Microsoft\Graph\Generated\IdentityGovernance\LifecycleWorkflows\Workflows\Item\MicrosoftGraphIdentityGovernancePreviewTaskFailures;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the previewTaskFailures method.
*/
class MicrosoftGraphIdentityGovernancePreviewTaskFailuresRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new MicrosoftGraphIdentityGovernancePreviewTaskFailuresRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/identityGovernance/lifecycleWorkflows/workflows/{workflow%2Did}/microsoft.graph.identityGovernance.previewTaskFailures');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Validate the tasks configured in a workflow to check for configuration errors. This action identifies any tasks that would fail during execution, allowing you to fix issues before running the workflow. Returns an empty collection if no task failures are detected.
     * @param MicrosoftGraphIdentityGovernancePreviewTaskFailuresRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<PreviewTaskFailuresPostResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/identitygovernance-workflow-previewtaskfailures?view=graph-rest-1.0 Find more info here
    */
    public function post(?MicrosoftGraphIdentityGovernancePreviewTaskFailuresRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [PreviewTaskFailuresPostResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Validate the tasks configured in a workflow to check for configuration errors. This action identifies any tasks that would fail during execution, allowing you to fix issues before running the workflow. Returns an empty collection if no task failures are detected.
     * @param MicrosoftGraphIdentityGovernancePreviewTaskFailuresRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(?MicrosoftGraphIdentityGovernancePreviewTaskFailuresRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return MicrosoftGraphIdentityGovernancePreviewTaskFailuresRequestBuilder
    */
    public function withUrl(string $rawUrl): MicrosoftGraphIdentityGovernancePreviewTaskFailuresRequestBuilder {
        return new MicrosoftGraphIdentityGovernancePreviewTaskFailuresRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
