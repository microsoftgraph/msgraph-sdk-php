<?php

namespace Microsoft\\Graph\\Generated\DeviceManagement\VirtualEndpoint\AuditEvents;

use Exception;
use Http\Promise\Promise;
use Microsoft\\Graph\\Generated\DeviceManagement\VirtualEndpoint\AuditEvents\Count\CountRequestBuilder;
use Microsoft\\Graph\\Generated\DeviceManagement\VirtualEndpoint\AuditEvents\GetAuditActivityTypes\GetAuditActivityTypesRequestBuilder;
use Microsoft\\Graph\\Generated\DeviceManagement\VirtualEndpoint\AuditEvents\Item\CloudPcAuditEventItemRequestBuilder;
use Microsoft\\Graph\\Generated\Models\CloudPcAuditEvent;
use Microsoft\\Graph\\Generated\Models\CloudPcAuditEventCollectionResponse;
use Microsoft\\Graph\\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the auditEvents property of the microsoft.graph.virtualEndpoint entity.
*/
class AuditEventsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getAuditActivityTypes method.
    */
    public function getAuditActivityTypes(): GetAuditActivityTypesRequestBuilder {
        return new GetAuditActivityTypesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the auditEvents property of the microsoft.graph.virtualEndpoint entity.
     * @param string $cloudPcAuditEventId The unique identifier of cloudPcAuditEvent
     * @return CloudPcAuditEventItemRequestBuilder
    */
    public function byCloudPcAuditEventId(string $cloudPcAuditEventId): CloudPcAuditEventItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['cloudPcAuditEvent%2Did'] = $cloudPcAuditEventId;
        return new CloudPcAuditEventItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new AuditEventsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/virtualEndpoint/auditEvents{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * List all the cloudPcAuditEvent objects for the tenant.
     * @param AuditEventsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<CloudPcAuditEventCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/virtualendpoint-list-auditevents?view=graph-rest-1.0 Find more info here
    */
    public function get(?AuditEventsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [CloudPcAuditEventCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to auditEvents for deviceManagement
     * @param CloudPcAuditEvent $body The request body
     * @param AuditEventsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<CloudPcAuditEvent|null>
     * @throws Exception
    */
    public function post(CloudPcAuditEvent $body, ?AuditEventsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [CloudPcAuditEvent::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * List all the cloudPcAuditEvent objects for the tenant.
     * @param AuditEventsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?AuditEventsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to auditEvents for deviceManagement
     * @param CloudPcAuditEvent $body The request body
     * @param AuditEventsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(CloudPcAuditEvent $body, ?AuditEventsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return AuditEventsRequestBuilder
    */
    public function withUrl(string $rawUrl): AuditEventsRequestBuilder {
        return new AuditEventsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
