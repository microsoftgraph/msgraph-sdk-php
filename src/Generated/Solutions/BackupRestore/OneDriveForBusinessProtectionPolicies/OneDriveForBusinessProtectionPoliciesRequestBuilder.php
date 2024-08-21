<?php

namespace Microsoft\Graph\Generated\Solutions\BackupRestore\OneDriveForBusinessProtectionPolicies;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\OneDriveForBusinessProtectionPolicy;
use Microsoft\Graph\Generated\Models\OneDriveForBusinessProtectionPolicyCollectionResponse;
use Microsoft\Graph\Generated\Solutions\BackupRestore\OneDriveForBusinessProtectionPolicies\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\Solutions\BackupRestore\OneDriveForBusinessProtectionPolicies\Item\OneDriveForBusinessProtectionPolicyItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the oneDriveForBusinessProtectionPolicies property of the microsoft.graph.backupRestoreRoot entity.
*/
class OneDriveForBusinessProtectionPoliciesRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the oneDriveForBusinessProtectionPolicies property of the microsoft.graph.backupRestoreRoot entity.
     * @param string $oneDriveForBusinessProtectionPolicyId The unique identifier of oneDriveForBusinessProtectionPolicy
     * @return OneDriveForBusinessProtectionPolicyItemRequestBuilder
    */
    public function byOneDriveForBusinessProtectionPolicyId(string $oneDriveForBusinessProtectionPolicyId): OneDriveForBusinessProtectionPolicyItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['oneDriveForBusinessProtectionPolicy%2Did'] = $oneDriveForBusinessProtectionPolicyId;
        return new OneDriveForBusinessProtectionPolicyItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new OneDriveForBusinessProtectionPoliciesRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/solutions/backupRestore/oneDriveForBusinessProtectionPolicies{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * The list of OneDrive for Business protection policies in the tenant.
     * @param OneDriveForBusinessProtectionPoliciesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<OneDriveForBusinessProtectionPolicyCollectionResponse|null>
     * @throws Exception
    */
    public function get(?OneDriveForBusinessProtectionPoliciesRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [OneDriveForBusinessProtectionPolicyCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create a protection policy for the OneDrive service in Microsoft 365. When the policy is created, its state is set to inactive. Users can also provide a list of protection units under the policy.
     * @param OneDriveForBusinessProtectionPolicy $body The request body
     * @param OneDriveForBusinessProtectionPoliciesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<OneDriveForBusinessProtectionPolicy|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/backuprestoreroot-post-onedriveforbusinessprotectionpolicies?view=graph-rest-1.0 Find more info here
    */
    public function post(OneDriveForBusinessProtectionPolicy $body, ?OneDriveForBusinessProtectionPoliciesRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [OneDriveForBusinessProtectionPolicy::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * The list of OneDrive for Business protection policies in the tenant.
     * @param OneDriveForBusinessProtectionPoliciesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?OneDriveForBusinessProtectionPoliciesRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create a protection policy for the OneDrive service in Microsoft 365. When the policy is created, its state is set to inactive. Users can also provide a list of protection units under the policy.
     * @param OneDriveForBusinessProtectionPolicy $body The request body
     * @param OneDriveForBusinessProtectionPoliciesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(OneDriveForBusinessProtectionPolicy $body, ?OneDriveForBusinessProtectionPoliciesRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return OneDriveForBusinessProtectionPoliciesRequestBuilder
    */
    public function withUrl(string $rawUrl): OneDriveForBusinessProtectionPoliciesRequestBuilder {
        return new OneDriveForBusinessProtectionPoliciesRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
