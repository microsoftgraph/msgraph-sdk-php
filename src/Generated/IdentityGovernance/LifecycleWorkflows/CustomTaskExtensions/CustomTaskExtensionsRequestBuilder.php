<?php

namespace Microsoft\Graph\Generated\IdentityGovernance\LifecycleWorkflows\CustomTaskExtensions;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\IdentityGovernance\LifecycleWorkflows\CustomTaskExtensions\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\IdentityGovernance\LifecycleWorkflows\CustomTaskExtensions\Item\CustomTaskExtensionItemRequestBuilder;
use Microsoft\Graph\Generated\Models\IdentityGovernance\CustomTaskExtension;
use Microsoft\Graph\Generated\Models\IdentityGovernance\CustomTaskExtensionCollectionResponse;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the customTaskExtensions property of the microsoft.graph.identityGovernance.lifecycleWorkflowsContainer entity.
*/
class CustomTaskExtensionsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the customTaskExtensions property of the microsoft.graph.identityGovernance.lifecycleWorkflowsContainer entity.
     * @param string $customTaskExtensionId The unique identifier of customTaskExtension
     * @return CustomTaskExtensionItemRequestBuilder
    */
    public function byCustomTaskExtensionId(string $customTaskExtensionId): CustomTaskExtensionItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['customTaskExtension%2Did'] = $customTaskExtensionId;
        return new CustomTaskExtensionItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new CustomTaskExtensionsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/identityGovernance/lifecycleWorkflows/customTaskExtensions{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get a list of the customTaskExtension objects and their properties.
     * @param CustomTaskExtensionsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<CustomTaskExtensionCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/identitygovernance-lifecycleworkflowscontainer-list-customtaskextensions?view=graph-rest-1.0 Find more info here
    */
    public function get(?CustomTaskExtensionsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [CustomTaskExtensionCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create a new customTaskExtension object.
     * @param CustomTaskExtension $body The request body
     * @param CustomTaskExtensionsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<CustomTaskExtension|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/identitygovernance-lifecycleworkflowscontainer-post-customtaskextensions?view=graph-rest-1.0 Find more info here
    */
    public function post(CustomTaskExtension $body, ?CustomTaskExtensionsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [CustomTaskExtension::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get a list of the customTaskExtension objects and their properties.
     * @param CustomTaskExtensionsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?CustomTaskExtensionsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create a new customTaskExtension object.
     * @param CustomTaskExtension $body The request body
     * @param CustomTaskExtensionsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(CustomTaskExtension $body, ?CustomTaskExtensionsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return CustomTaskExtensionsRequestBuilder
    */
    public function withUrl(string $rawUrl): CustomTaskExtensionsRequestBuilder {
        return new CustomTaskExtensionsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
