<?php

namespace Microsoft\Graph\Generated\Storage\FileStorage\ContainerTypeRegistrations\Item\ApplicationPermissionGrants;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\FileStorageContainerTypeAppPermissionGrant;
use Microsoft\Graph\Generated\Models\FileStorageContainerTypeAppPermissionGrantCollectionResponse;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Storage\FileStorage\ContainerTypeRegistrations\Item\ApplicationPermissionGrants\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\Storage\FileStorage\ContainerTypeRegistrations\Item\ApplicationPermissionGrants\Item\FileStorageContainerTypeAppPermissionGrantAppItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the applicationPermissionGrants property of the microsoft.graph.fileStorageContainerTypeRegistration entity.
*/
class ApplicationPermissionGrantsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the applicationPermissionGrants property of the microsoft.graph.fileStorageContainerTypeRegistration entity.
     * @param string $fileStorageContainerTypeAppPermissionGrantAppId The unique identifier of fileStorageContainerTypeAppPermissionGrant
     * @return FileStorageContainerTypeAppPermissionGrantAppItemRequestBuilder
    */
    public function byFileStorageContainerTypeAppPermissionGrantAppId(string $fileStorageContainerTypeAppPermissionGrantAppId): FileStorageContainerTypeAppPermissionGrantAppItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['fileStorageContainerTypeAppPermissionGrant%2DappId'] = $fileStorageContainerTypeAppPermissionGrantAppId;
        return new FileStorageContainerTypeAppPermissionGrantAppItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new ApplicationPermissionGrantsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/storage/fileStorage/containerTypeRegistrations/{fileStorageContainerTypeRegistration%2Did}/applicationPermissionGrants{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * List all app permission grants in a fileStorageContainerTypeRegistration.
     * @param ApplicationPermissionGrantsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<FileStorageContainerTypeAppPermissionGrantCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/filestoragecontainertyperegistration-list-applicationpermissiongrants?view=graph-rest-1.0 Find more info here
    */
    public function get(?ApplicationPermissionGrantsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [FileStorageContainerTypeAppPermissionGrantCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to applicationPermissionGrants for storage
     * @param FileStorageContainerTypeAppPermissionGrant $body The request body
     * @param ApplicationPermissionGrantsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<FileStorageContainerTypeAppPermissionGrant|null>
     * @throws Exception
    */
    public function post(FileStorageContainerTypeAppPermissionGrant $body, ?ApplicationPermissionGrantsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [FileStorageContainerTypeAppPermissionGrant::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * List all app permission grants in a fileStorageContainerTypeRegistration.
     * @param ApplicationPermissionGrantsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?ApplicationPermissionGrantsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to applicationPermissionGrants for storage
     * @param FileStorageContainerTypeAppPermissionGrant $body The request body
     * @param ApplicationPermissionGrantsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(FileStorageContainerTypeAppPermissionGrant $body, ?ApplicationPermissionGrantsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return ApplicationPermissionGrantsRequestBuilder
    */
    public function withUrl(string $rawUrl): ApplicationPermissionGrantsRequestBuilder {
        return new ApplicationPermissionGrantsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
