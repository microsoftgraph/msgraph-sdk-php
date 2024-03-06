<?php

namespace Microsoft\Graph\Generated\ApplicationsWithUniqueName;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\Application;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the collection of application entities.
*/
class ApplicationsWithUniqueNameRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new ApplicationsWithUniqueNameRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
     * @param string|null $uniqueName Alternate key of application
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter, ?string $uniqueName = null) {
        parent::__construct($requestAdapter, [], '{+baseurl}/applications(uniqueName=\'{uniqueName}\'){?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $urlTplParams = $pathParametersOrRawUrl;
            $urlTplParams['uniqueName'] = $uniqueName;
            $this->pathParameters = $urlTplParams;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete an application object. When deleted, apps are moved to a temporary container and can be restored within 30 days. After that time, they are permanently deleted.
     * @param ApplicationsWithUniqueNameRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/application-delete?view=graph-rest-1.0 Find more info here
    */
    public function delete(?ApplicationsWithUniqueNameRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Get the properties and relationships of an application object.
     * @param ApplicationsWithUniqueNameRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<Application|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/application-get?view=graph-rest-1.0 Find more info here
    */
    public function get(?ApplicationsWithUniqueNameRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [Application::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the properties of an application object.
     * @param Application $body The request body
     * @param ApplicationsWithUniqueNameRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<Application|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/application-update?view=graph-rest-1.0 Find more info here
    */
    public function patch(Application $body, ?ApplicationsWithUniqueNameRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [Application::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete an application object. When deleted, apps are moved to a temporary container and can be restored within 30 days. After that time, they are permanently deleted.
     * @param ApplicationsWithUniqueNameRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?ApplicationsWithUniqueNameRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = '{+baseurl}/applications(uniqueName=\'{uniqueName}\')';
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
     * Get the properties and relationships of an application object.
     * @param ApplicationsWithUniqueNameRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?ApplicationsWithUniqueNameRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update the properties of an application object.
     * @param Application $body The request body
     * @param ApplicationsWithUniqueNameRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(Application $body, ?ApplicationsWithUniqueNameRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = '{+baseurl}/applications(uniqueName=\'{uniqueName}\')';
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
     * @return ApplicationsWithUniqueNameRequestBuilder
    */
    public function withUrl(string $rawUrl): ApplicationsWithUniqueNameRequestBuilder {
        return new ApplicationsWithUniqueNameRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
