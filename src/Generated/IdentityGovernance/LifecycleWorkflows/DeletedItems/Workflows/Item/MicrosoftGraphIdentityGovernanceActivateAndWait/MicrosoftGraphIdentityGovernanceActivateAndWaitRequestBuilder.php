<?php

namespace Microsoft\Graph\Generated\IdentityGovernance\LifecycleWorkflows\DeletedItems\Workflows\Item\MicrosoftGraphIdentityGovernanceActivateAndWait;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\IdentityGovernance\AwaitedWorkflowProcessingResult;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the activateAndWait method.
*/
class MicrosoftGraphIdentityGovernanceActivateAndWaitRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new MicrosoftGraphIdentityGovernanceActivateAndWaitRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/identityGovernance/lifecycleWorkflows/deletedItems/workflows/{workflow%2Did}/microsoft.graph.identityGovernance.activateAndWait');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Activate a lifecycle workflow for a specified subject and synchronously wait for execution to complete. This action returns an awaitedWorkflowProcessingResult with the execution outcome. Use this action when you need immediate confirmation of workflow completion, for example when provisioning a non-user subject.
     * @param ActivateAndWaitPostRequestBody $body The request body
     * @param MicrosoftGraphIdentityGovernanceActivateAndWaitRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<AwaitedWorkflowProcessingResult|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/identitygovernance-workflow-activateandwait?view=graph-rest-1.0 Find more info here
    */
    public function post(ActivateAndWaitPostRequestBody $body, ?MicrosoftGraphIdentityGovernanceActivateAndWaitRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [AwaitedWorkflowProcessingResult::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Activate a lifecycle workflow for a specified subject and synchronously wait for execution to complete. This action returns an awaitedWorkflowProcessingResult with the execution outcome. Use this action when you need immediate confirmation of workflow completion, for example when provisioning a non-user subject.
     * @param ActivateAndWaitPostRequestBody $body The request body
     * @param MicrosoftGraphIdentityGovernanceActivateAndWaitRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(ActivateAndWaitPostRequestBody $body, ?MicrosoftGraphIdentityGovernanceActivateAndWaitRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return MicrosoftGraphIdentityGovernanceActivateAndWaitRequestBuilder
    */
    public function withUrl(string $rawUrl): MicrosoftGraphIdentityGovernanceActivateAndWaitRequestBuilder {
        return new MicrosoftGraphIdentityGovernanceActivateAndWaitRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
