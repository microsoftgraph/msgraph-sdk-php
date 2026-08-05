<?php

namespace Microsoft\Graph\Generated\IdentityGovernance\EntitlementManagement\Resources\Item\Scopes\Item\Resource\Roles\Item\Resource\UploadSessions\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\IdentityGovernance\EntitlementManagement\Resources\Item\Scopes\Item\Resource\Roles\Item\Resource\UploadSessions\Item\Files\FilesRequestBuilder;
use Microsoft\Graph\Generated\IdentityGovernance\EntitlementManagement\Resources\Item\Scopes\Item\Resource\Roles\Item\Resource\UploadSessions\Item\UploadFile\UploadFileRequestBuilder;
use Microsoft\Graph\Generated\Models\CustomDataProvidedResourceUploadSession;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the uploadSessions property of the microsoft.graph.accessPackageResource entity.
*/
class CustomDataProvidedResourceUploadSessionItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to manage the files property of the microsoft.graph.customDataProvidedResourceUploadSession entity.
    */
    public function files(): FilesRequestBuilder {
        return new FilesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the uploadFile method.
    */
    public function uploadFile(): UploadFileRequestBuilder {
        return new UploadFileRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new CustomDataProvidedResourceUploadSessionItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/identityGovernance/entitlementManagement/resources/{accessPackageResource%2Did}/scopes/{accessPackageResourceScope%2Did}/resource/roles/{accessPackageResourceRole%2Did}/resource/uploadSessions/{customDataProvidedResourceUploadSession%2Did}{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property uploadSessions for identityGovernance
     * @param CustomDataProvidedResourceUploadSessionItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function delete(?CustomDataProvidedResourceUploadSessionItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * The upload sessions for uploading external access data to this resource through the Bring Your Own Data (BYOD) flow.
     * @param CustomDataProvidedResourceUploadSessionItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<CustomDataProvidedResourceUploadSession|null>
     * @throws Exception
    */
    public function get(?CustomDataProvidedResourceUploadSessionItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [CustomDataProvidedResourceUploadSession::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the navigation property uploadSessions in identityGovernance
     * @param CustomDataProvidedResourceUploadSession $body The request body
     * @param CustomDataProvidedResourceUploadSessionItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<CustomDataProvidedResourceUploadSession|null>
     * @throws Exception
    */
    public function patch(CustomDataProvidedResourceUploadSession $body, ?CustomDataProvidedResourceUploadSessionItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [CustomDataProvidedResourceUploadSession::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete navigation property uploadSessions for identityGovernance
     * @param CustomDataProvidedResourceUploadSessionItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?CustomDataProvidedResourceUploadSessionItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * The upload sessions for uploading external access data to this resource through the Bring Your Own Data (BYOD) flow.
     * @param CustomDataProvidedResourceUploadSessionItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?CustomDataProvidedResourceUploadSessionItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update the navigation property uploadSessions in identityGovernance
     * @param CustomDataProvidedResourceUploadSession $body The request body
     * @param CustomDataProvidedResourceUploadSessionItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(CustomDataProvidedResourceUploadSession $body, ?CustomDataProvidedResourceUploadSessionItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return CustomDataProvidedResourceUploadSessionItemRequestBuilder
    */
    public function withUrl(string $rawUrl): CustomDataProvidedResourceUploadSessionItemRequestBuilder {
        return new CustomDataProvidedResourceUploadSessionItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
