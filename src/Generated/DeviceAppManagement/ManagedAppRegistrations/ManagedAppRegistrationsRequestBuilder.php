<?php

namespace Microsoft\Graph\Generated\DeviceAppManagement\ManagedAppRegistrations;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\DeviceAppManagement\ManagedAppRegistrations\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\DeviceAppManagement\ManagedAppRegistrations\GetUserIdsWithFlaggedAppRegistration\GetUserIdsWithFlaggedAppRegistrationRequestBuilder;
use Microsoft\Graph\Generated\DeviceAppManagement\ManagedAppRegistrations\Item\ManagedAppRegistrationItemRequestBuilder;
use Microsoft\Graph\Generated\Models\ManagedAppRegistration;
use Microsoft\Graph\Generated\Models\ManagedAppRegistrationCollectionResponse;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the managedAppRegistrations property of the microsoft.graph.deviceAppManagement entity.
*/
class ManagedAppRegistrationsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getUserIdsWithFlaggedAppRegistration method.
    */
    public function getUserIdsWithFlaggedAppRegistration(): GetUserIdsWithFlaggedAppRegistrationRequestBuilder {
        return new GetUserIdsWithFlaggedAppRegistrationRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the managedAppRegistrations property of the microsoft.graph.deviceAppManagement entity.
     * @param string $managedAppRegistrationId The unique identifier of managedAppRegistration
     * @return ManagedAppRegistrationItemRequestBuilder
    */
    public function byManagedAppRegistrationId(string $managedAppRegistrationId): ManagedAppRegistrationItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['managedAppRegistration%2Did'] = $managedAppRegistrationId;
        return new ManagedAppRegistrationItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new ManagedAppRegistrationsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceAppManagement/managedAppRegistrations{?%24top,%24skip,%24search,%24filter,%24count,%24orderby,%24select,%24expand}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * List properties and relationships of the iosManagedAppRegistration objects.
     * @param ManagedAppRegistrationsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ManagedAppRegistrationCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/intune-mam-iosmanagedappregistration-list?view=graph-rest-1.0 Find more info here
    */
    public function get(?ManagedAppRegistrationsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ManagedAppRegistrationCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create a new androidManagedAppRegistration object.
     * @param ManagedAppRegistration $body The request body
     * @param ManagedAppRegistrationsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ManagedAppRegistration|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/intune-mam-androidmanagedappregistration-create?view=graph-rest-1.0 Find more info here
    */
    public function post(ManagedAppRegistration $body, ?ManagedAppRegistrationsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ManagedAppRegistration::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * List properties and relationships of the iosManagedAppRegistration objects.
     * @param ManagedAppRegistrationsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?ManagedAppRegistrationsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create a new androidManagedAppRegistration object.
     * @param ManagedAppRegistration $body The request body
     * @param ManagedAppRegistrationsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(ManagedAppRegistration $body, ?ManagedAppRegistrationsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return ManagedAppRegistrationsRequestBuilder
    */
    public function withUrl(string $rawUrl): ManagedAppRegistrationsRequestBuilder {
        return new ManagedAppRegistrationsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
