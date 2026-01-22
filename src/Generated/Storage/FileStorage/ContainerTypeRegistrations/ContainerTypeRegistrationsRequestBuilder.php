<?php

namespace Microsoft\Graph\Generated\Storage\FileStorage\ContainerTypeRegistrations;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\FileStorageContainerTypeRegistration;
use Microsoft\Graph\Generated\Models\FileStorageContainerTypeRegistrationCollectionResponse;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Storage\FileStorage\ContainerTypeRegistrations\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\Storage\FileStorage\ContainerTypeRegistrations\Item\FileStorageContainerTypeRegistrationItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the containerTypeRegistrations property of the microsoft.graph.fileStorage entity.
*/
class ContainerTypeRegistrationsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the containerTypeRegistrations property of the microsoft.graph.fileStorage entity.
     * @param string $fileStorageContainerTypeRegistrationId The unique identifier of fileStorageContainerTypeRegistration
     * @return FileStorageContainerTypeRegistrationItemRequestBuilder
    */
    public function byFileStorageContainerTypeRegistrationId(string $fileStorageContainerTypeRegistrationId): FileStorageContainerTypeRegistrationItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['fileStorageContainerTypeRegistration%2Did'] = $fileStorageContainerTypeRegistrationId;
        return new FileStorageContainerTypeRegistrationItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new ContainerTypeRegistrationsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/storage/fileStorage/containerTypeRegistrations{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get a list of the fileStorageContainerTypeRegistration objects and their properties.
     * @param ContainerTypeRegistrationsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<FileStorageContainerTypeRegistrationCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/filestorage-list-containertyperegistrations?view=graph-rest-1.0 Find more info here
    */
    public function get(?ContainerTypeRegistrationsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [FileStorageContainerTypeRegistrationCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to containerTypeRegistrations for storage
     * @param FileStorageContainerTypeRegistration $body The request body
     * @param ContainerTypeRegistrationsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<FileStorageContainerTypeRegistration|null>
     * @throws Exception
    */
    public function post(FileStorageContainerTypeRegistration $body, ?ContainerTypeRegistrationsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [FileStorageContainerTypeRegistration::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get a list of the fileStorageContainerTypeRegistration objects and their properties.
     * @param ContainerTypeRegistrationsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?ContainerTypeRegistrationsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to containerTypeRegistrations for storage
     * @param FileStorageContainerTypeRegistration $body The request body
     * @param ContainerTypeRegistrationsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(FileStorageContainerTypeRegistration $body, ?ContainerTypeRegistrationsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return ContainerTypeRegistrationsRequestBuilder
    */
    public function withUrl(string $rawUrl): ContainerTypeRegistrationsRequestBuilder {
        return new ContainerTypeRegistrationsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
