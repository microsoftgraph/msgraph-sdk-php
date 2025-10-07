<?php

namespace Microsoft\\Graph\\Generated\DeviceAppManagement\DefaultManagedAppProtections;

use Exception;
use Http\Promise\Promise;
use Microsoft\\Graph\\Generated\DeviceAppManagement\DefaultManagedAppProtections\Count\CountRequestBuilder;
use Microsoft\\Graph\\Generated\DeviceAppManagement\DefaultManagedAppProtections\Item\DefaultManagedAppProtectionItemRequestBuilder;
use Microsoft\\Graph\\Generated\Models\DefaultManagedAppProtection;
use Microsoft\\Graph\\Generated\Models\DefaultManagedAppProtectionCollectionResponse;
use Microsoft\\Graph\\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the defaultManagedAppProtections property of the microsoft.graph.deviceAppManagement entity.
*/
class DefaultManagedAppProtectionsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the defaultManagedAppProtections property of the microsoft.graph.deviceAppManagement entity.
     * @param string $defaultManagedAppProtectionId The unique identifier of defaultManagedAppProtection
     * @return DefaultManagedAppProtectionItemRequestBuilder
    */
    public function byDefaultManagedAppProtectionId(string $defaultManagedAppProtectionId): DefaultManagedAppProtectionItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['defaultManagedAppProtection%2Did'] = $defaultManagedAppProtectionId;
        return new DefaultManagedAppProtectionItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new DefaultManagedAppProtectionsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceAppManagement/defaultManagedAppProtections{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * List properties and relationships of the defaultManagedAppProtection objects.
     * @param DefaultManagedAppProtectionsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<DefaultManagedAppProtectionCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/intune-mam-defaultmanagedappprotection-list?view=graph-rest-1.0 Find more info here
    */
    public function get(?DefaultManagedAppProtectionsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [DefaultManagedAppProtectionCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create a new defaultManagedAppProtection object.
     * @param DefaultManagedAppProtection $body The request body
     * @param DefaultManagedAppProtectionsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<DefaultManagedAppProtection|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/intune-mam-defaultmanagedappprotection-create?view=graph-rest-1.0 Find more info here
    */
    public function post(DefaultManagedAppProtection $body, ?DefaultManagedAppProtectionsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [DefaultManagedAppProtection::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * List properties and relationships of the defaultManagedAppProtection objects.
     * @param DefaultManagedAppProtectionsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?DefaultManagedAppProtectionsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create a new defaultManagedAppProtection object.
     * @param DefaultManagedAppProtection $body The request body
     * @param DefaultManagedAppProtectionsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(DefaultManagedAppProtection $body, ?DefaultManagedAppProtectionsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return DefaultManagedAppProtectionsRequestBuilder
    */
    public function withUrl(string $rawUrl): DefaultManagedAppProtectionsRequestBuilder {
        return new DefaultManagedAppProtectionsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
