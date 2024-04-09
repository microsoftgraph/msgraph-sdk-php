<?php

namespace Microsoft\Graph\Generated\Applications;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Applications\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\Applications\Delta\DeltaRequestBuilder;
use Microsoft\Graph\Generated\Applications\GetAvailableExtensionProperties\GetAvailableExtensionPropertiesRequestBuilder;
use Microsoft\Graph\Generated\Applications\GetByIds\GetByIdsRequestBuilder;
use Microsoft\Graph\Generated\Applications\Item\ApplicationItemRequestBuilder;
use Microsoft\Graph\Generated\Applications\ValidateProperties\ValidatePropertiesRequestBuilder;
use Microsoft\Graph\Generated\Models\Application;
use Microsoft\Graph\Generated\Models\ApplicationCollectionResponse;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the collection of application entities.
*/
class ApplicationsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the delta method.
    */
    public function delta(): DeltaRequestBuilder {
        return new DeltaRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getAvailableExtensionProperties method.
    */
    public function getAvailableExtensionProperties(): GetAvailableExtensionPropertiesRequestBuilder {
        return new GetAvailableExtensionPropertiesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getByIds method.
    */
    public function getByIds(): GetByIdsRequestBuilder {
        return new GetByIdsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the validateProperties method.
    */
    public function validateProperties(): ValidatePropertiesRequestBuilder {
        return new ValidatePropertiesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the collection of application entities.
     * @param string $applicationId The unique identifier of application
     * @return ApplicationItemRequestBuilder
    */
    public function byApplicationId(string $applicationId): ApplicationItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['application%2Did'] = $applicationId;
        return new ApplicationItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new ApplicationsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/applications{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get the list of applications in this organization.
     * @param ApplicationsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ApplicationCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/application-list?view=graph-rest-1.0 Find more info here
    */
    public function get(?ApplicationsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ApplicationCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create a new application object.
     * @param Application $body The request body
     * @param ApplicationsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<Application|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/application-post-applications?view=graph-rest-1.0 Find more info here
    */
    public function post(Application $body, ?ApplicationsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [Application::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get the list of applications in this organization.
     * @param ApplicationsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?ApplicationsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create a new application object.
     * @param Application $body The request body
     * @param ApplicationsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(Application $body, ?ApplicationsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return ApplicationsRequestBuilder
    */
    public function withUrl(string $rawUrl): ApplicationsRequestBuilder {
        return new ApplicationsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
