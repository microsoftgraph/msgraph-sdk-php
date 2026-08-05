<?php

namespace Microsoft\Graph\Generated\IdentityGovernance\EntitlementManagement\Catalogs\Item\ResourceRoles\Item\Resource\UploadSessions;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\IdentityGovernance\EntitlementManagement\Catalogs\Item\ResourceRoles\Item\Resource\UploadSessions\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\IdentityGovernance\EntitlementManagement\Catalogs\Item\ResourceRoles\Item\Resource\UploadSessions\Item\CustomDataProvidedResourceUploadSessionItemRequestBuilder;
use Microsoft\Graph\Generated\Models\CustomDataProvidedResourceUploadSession;
use Microsoft\Graph\Generated\Models\CustomDataProvidedResourceUploadSessionCollectionResponse;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the uploadSessions property of the microsoft.graph.accessPackageResource entity.
*/
class UploadSessionsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the uploadSessions property of the microsoft.graph.accessPackageResource entity.
     * @param string $customDataProvidedResourceUploadSessionId The unique identifier of customDataProvidedResourceUploadSession
     * @return CustomDataProvidedResourceUploadSessionItemRequestBuilder
    */
    public function byCustomDataProvidedResourceUploadSessionId(string $customDataProvidedResourceUploadSessionId): CustomDataProvidedResourceUploadSessionItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['customDataProvidedResourceUploadSession%2Did'] = $customDataProvidedResourceUploadSessionId;
        return new CustomDataProvidedResourceUploadSessionItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new UploadSessionsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/identityGovernance/entitlementManagement/catalogs/{accessPackageCatalog%2Did}/resourceRoles/{accessPackageResourceRole%2Did}/resource/uploadSessions{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * The upload sessions for uploading external access data to this resource through the Bring Your Own Data (BYOD) flow.
     * @param UploadSessionsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<CustomDataProvidedResourceUploadSessionCollectionResponse|null>
     * @throws Exception
    */
    public function get(?UploadSessionsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [CustomDataProvidedResourceUploadSessionCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to uploadSessions for identityGovernance
     * @param CustomDataProvidedResourceUploadSession $body The request body
     * @param UploadSessionsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<CustomDataProvidedResourceUploadSession|null>
     * @throws Exception
    */
    public function post(CustomDataProvidedResourceUploadSession $body, ?UploadSessionsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [CustomDataProvidedResourceUploadSession::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * The upload sessions for uploading external access data to this resource through the Bring Your Own Data (BYOD) flow.
     * @param UploadSessionsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?UploadSessionsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to uploadSessions for identityGovernance
     * @param CustomDataProvidedResourceUploadSession $body The request body
     * @param UploadSessionsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(CustomDataProvidedResourceUploadSession $body, ?UploadSessionsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return UploadSessionsRequestBuilder
    */
    public function withUrl(string $rawUrl): UploadSessionsRequestBuilder {
        return new UploadSessionsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
