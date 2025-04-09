<?php

namespace Microsoft\Graph\Generated\Solutions\VirtualEvents\Webinars\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\VirtualEventWebinar;
use Microsoft\Graph\Generated\Solutions\VirtualEvents\Webinars\Item\Presenters\PresentersRequestBuilder;
use Microsoft\Graph\Generated\Solutions\VirtualEvents\Webinars\Item\RegistrationConfiguration\RegistrationConfigurationRequestBuilder;
use Microsoft\Graph\Generated\Solutions\VirtualEvents\Webinars\Item\Registrations\RegistrationsRequestBuilder;
use Microsoft\Graph\Generated\Solutions\VirtualEvents\Webinars\Item\RegistrationsWithEmail\RegistrationsWithEmailRequestBuilder;
use Microsoft\Graph\Generated\Solutions\VirtualEvents\Webinars\Item\RegistrationsWithUserId\RegistrationsWithUserIdRequestBuilder;
use Microsoft\Graph\Generated\Solutions\VirtualEvents\Webinars\Item\Sessions\SessionsRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the webinars property of the microsoft.graph.virtualEventsRoot entity.
*/
class VirtualEventWebinarItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to manage the presenters property of the microsoft.graph.virtualEvent entity.
    */
    public function presenters(): PresentersRequestBuilder {
        return new PresentersRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the registrationConfiguration property of the microsoft.graph.virtualEventWebinar entity.
    */
    public function registrationConfiguration(): RegistrationConfigurationRequestBuilder {
        return new RegistrationConfigurationRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the registrations property of the microsoft.graph.virtualEventWebinar entity.
    */
    public function registrations(): RegistrationsRequestBuilder {
        return new RegistrationsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the sessions property of the microsoft.graph.virtualEvent entity.
    */
    public function sessions(): SessionsRequestBuilder {
        return new SessionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new VirtualEventWebinarItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/solutions/virtualEvents/webinars/{virtualEventWebinar%2Did}{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property webinars for solutions
     * @param VirtualEventWebinarItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function delete(?VirtualEventWebinarItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Read the properties and relationships of a virtualEventWebinar object. All roles can get the details of a webinar event.
     * @param VirtualEventWebinarItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<VirtualEventWebinar|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/virtualeventwebinar-get?view=graph-rest-1.0 Find more info here
    */
    public function get(?VirtualEventWebinarItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [VirtualEventWebinar::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the properties of a virtualEventWebinar object. Only the Organizer and Co-organizer can make changes to a webinar event.
     * @param VirtualEventWebinar $body The request body
     * @param VirtualEventWebinarItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<VirtualEventWebinar|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/virtualeventwebinar-update?view=graph-rest-1.0 Find more info here
    */
    public function patch(VirtualEventWebinar $body, ?VirtualEventWebinarItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [VirtualEventWebinar::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Provides operations to manage the registrations property of the microsoft.graph.virtualEventWebinar entity.
     * @param string $email Alternate key of virtualEventRegistration
     * @return RegistrationsWithEmailRequestBuilder
    */
    public function registrationsWithEmail(string $email): RegistrationsWithEmailRequestBuilder {
        return new RegistrationsWithEmailRequestBuilder($this->pathParameters, $this->requestAdapter, $email);
    }

    /**
     * Provides operations to manage the registrations property of the microsoft.graph.virtualEventWebinar entity.
     * @param string $userId Alternate key of virtualEventRegistration
     * @return RegistrationsWithUserIdRequestBuilder
    */
    public function registrationsWithUserId(string $userId): RegistrationsWithUserIdRequestBuilder {
        return new RegistrationsWithUserIdRequestBuilder($this->pathParameters, $this->requestAdapter, $userId);
    }

    /**
     * Delete navigation property webinars for solutions
     * @param VirtualEventWebinarItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?VirtualEventWebinarItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        return $requestInfo;
    }

    /**
     * Read the properties and relationships of a virtualEventWebinar object. All roles can get the details of a webinar event.
     * @param VirtualEventWebinarItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?VirtualEventWebinarItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update the properties of a virtualEventWebinar object. Only the Organizer and Co-organizer can make changes to a webinar event.
     * @param VirtualEventWebinar $body The request body
     * @param VirtualEventWebinarItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(VirtualEventWebinar $body, ?VirtualEventWebinarItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return VirtualEventWebinarItemRequestBuilder
    */
    public function withUrl(string $rawUrl): VirtualEventWebinarItemRequestBuilder {
        return new VirtualEventWebinarItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
