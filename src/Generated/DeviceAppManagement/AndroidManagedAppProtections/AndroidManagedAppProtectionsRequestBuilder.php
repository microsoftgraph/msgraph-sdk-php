<?php

namespace Microsoft\Graph\Generated\DeviceAppManagement\AndroidManagedAppProtections;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\DeviceAppManagement\AndroidManagedAppProtections\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\DeviceAppManagement\AndroidManagedAppProtections\Item\AndroidManagedAppProtectionItemRequestBuilder;
use Microsoft\Graph\Generated\Models\AndroidManagedAppProtection;
use Microsoft\Graph\Generated\Models\AndroidManagedAppProtectionCollectionResponse;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the androidManagedAppProtections property of the microsoft.graph.deviceAppManagement entity.
*/
class AndroidManagedAppProtectionsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the androidManagedAppProtections property of the microsoft.graph.deviceAppManagement entity.
     * @param string $androidManagedAppProtectionId The unique identifier of androidManagedAppProtection
     * @return AndroidManagedAppProtectionItemRequestBuilder
    */
    public function byAndroidManagedAppProtectionId(string $androidManagedAppProtectionId): AndroidManagedAppProtectionItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['androidManagedAppProtection%2Did'] = $androidManagedAppProtectionId;
        return new AndroidManagedAppProtectionItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new AndroidManagedAppProtectionsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceAppManagement/androidManagedAppProtections{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Android managed app policies.
     * @param AndroidManagedAppProtectionsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<AndroidManagedAppProtectionCollectionResponse|null>
     * @throws Exception
    */
    public function get(?AndroidManagedAppProtectionsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [AndroidManagedAppProtectionCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to androidManagedAppProtections for deviceAppManagement
     * @param AndroidManagedAppProtection $body The request body
     * @param AndroidManagedAppProtectionsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<AndroidManagedAppProtection|null>
     * @throws Exception
    */
    public function post(AndroidManagedAppProtection $body, ?AndroidManagedAppProtectionsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [AndroidManagedAppProtection::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Android managed app policies.
     * @param AndroidManagedAppProtectionsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?AndroidManagedAppProtectionsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to androidManagedAppProtections for deviceAppManagement
     * @param AndroidManagedAppProtection $body The request body
     * @param AndroidManagedAppProtectionsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(AndroidManagedAppProtection $body, ?AndroidManagedAppProtectionsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return AndroidManagedAppProtectionsRequestBuilder
    */
    public function withUrl(string $rawUrl): AndroidManagedAppProtectionsRequestBuilder {
        return new AndroidManagedAppProtectionsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
