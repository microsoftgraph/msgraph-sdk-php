<?php

namespace Microsoft\Graph\Generated\Users\Item\DataSecurityAndGovernance;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\UserDataSecurityAndGovernance;
use Microsoft\Graph\Generated\Users\Item\DataSecurityAndGovernance\Activities\ActivitiesRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\DataSecurityAndGovernance\ProcessContent\ProcessContentRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\DataSecurityAndGovernance\ProtectionScopes\ProtectionScopesRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the dataSecurityAndGovernance property of the microsoft.graph.user entity.
*/
class DataSecurityAndGovernanceRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to manage the activities property of the microsoft.graph.userDataSecurityAndGovernance entity.
    */
    public function activities(): ActivitiesRequestBuilder {
        return new ActivitiesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the processContent method.
    */
    public function processContent(): ProcessContentRequestBuilder {
        return new ProcessContentRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the protectionScopes property of the microsoft.graph.userDataSecurityAndGovernance entity.
    */
    public function protectionScopes(): ProtectionScopesRequestBuilder {
        return new ProtectionScopesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new DataSecurityAndGovernanceRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/users/{user%2Did}/dataSecurityAndGovernance{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property dataSecurityAndGovernance for users
     * @param DataSecurityAndGovernanceRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function delete(?DataSecurityAndGovernanceRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * The data security and governance settings for the user. Read-only. Nullable.
     * @param DataSecurityAndGovernanceRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<UserDataSecurityAndGovernance|null>
     * @throws Exception
    */
    public function get(?DataSecurityAndGovernanceRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [UserDataSecurityAndGovernance::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the navigation property dataSecurityAndGovernance in users
     * @param UserDataSecurityAndGovernance $body The request body
     * @param DataSecurityAndGovernanceRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<UserDataSecurityAndGovernance|null>
     * @throws Exception
    */
    public function patch(UserDataSecurityAndGovernance $body, ?DataSecurityAndGovernanceRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [UserDataSecurityAndGovernance::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete navigation property dataSecurityAndGovernance for users
     * @param DataSecurityAndGovernanceRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?DataSecurityAndGovernanceRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * The data security and governance settings for the user. Read-only. Nullable.
     * @param DataSecurityAndGovernanceRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?DataSecurityAndGovernanceRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update the navigation property dataSecurityAndGovernance in users
     * @param UserDataSecurityAndGovernance $body The request body
     * @param DataSecurityAndGovernanceRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(UserDataSecurityAndGovernance $body, ?DataSecurityAndGovernanceRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return DataSecurityAndGovernanceRequestBuilder
    */
    public function withUrl(string $rawUrl): DataSecurityAndGovernanceRequestBuilder {
        return new DataSecurityAndGovernanceRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
