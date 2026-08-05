<?php

namespace Microsoft\Graph\Generated\IdentityGovernance\EntitlementManagement\ResourceRequests\Item\Resource\Scopes\Item\Resource\UploadSessions\Item\Files\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\IdentityGovernance\EntitlementManagement\ResourceRequests\Item\Resource\Scopes\Item\Resource\UploadSessions\Item\Files\Item\Value\ContentRequestBuilder;
use Microsoft\Graph\Generated\Models\CustomDataProvidedResourceFile;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the files property of the microsoft.graph.customDataProvidedResourceUploadSession entity.
*/
class CustomDataProvidedResourceFileItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to manage the media for the identityGovernance entity.
    */
    public function content(): ContentRequestBuilder {
        return new ContentRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new CustomDataProvidedResourceFileItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/identityGovernance/entitlementManagement/resourceRequests/{accessPackageResourceRequest%2Did}/resource/scopes/{accessPackageResourceScope%2Did}/resource/uploadSessions/{customDataProvidedResourceUploadSession%2Did}/files/{customDataProvidedResourceFile%2Did}{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * The files uploaded during this upload session. Supports $expand and $expand with nested $filter and $orderby.
     * @param CustomDataProvidedResourceFileItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<CustomDataProvidedResourceFile|null>
     * @throws Exception
    */
    public function get(?CustomDataProvidedResourceFileItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [CustomDataProvidedResourceFile::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * The files uploaded during this upload session. Supports $expand and $expand with nested $filter and $orderby.
     * @param CustomDataProvidedResourceFileItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?CustomDataProvidedResourceFileItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return CustomDataProvidedResourceFileItemRequestBuilder
    */
    public function withUrl(string $rawUrl): CustomDataProvidedResourceFileItemRequestBuilder {
        return new CustomDataProvidedResourceFileItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
