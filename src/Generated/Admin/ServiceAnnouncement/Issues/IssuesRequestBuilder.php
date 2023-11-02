<?php

namespace Microsoft\Graph\Generated\Admin\ServiceAnnouncement\Issues;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Admin\ServiceAnnouncement\Issues\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\Admin\ServiceAnnouncement\Issues\Item\ServiceHealthIssueItemRequestBuilder;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\ServiceHealthIssue;
use Microsoft\Graph\Generated\Models\ServiceHealthIssueCollectionResponse;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the issues property of the microsoft.graph.serviceAnnouncement entity.
*/
class IssuesRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the issues property of the microsoft.graph.serviceAnnouncement entity.
     * @param string $serviceHealthIssueId The unique identifier of serviceHealthIssue
     * @return ServiceHealthIssueItemRequestBuilder
    */
    public function byServiceHealthIssueId(string $serviceHealthIssueId): ServiceHealthIssueItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['serviceHealthIssue%2Did'] = $serviceHealthIssueId;
        return new ServiceHealthIssueItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new IssuesRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/admin/serviceAnnouncement/issues{?%24top,%24skip,%24search,%24filter,%24count,%24orderby,%24select,%24expand}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Retrieve serviceHealthIssue resources from the issues navigation property. This operation retrieves information about all service health issues that exist for the tenant. This API is available in the following national cloud deployments.
     * @param IssuesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ServiceHealthIssueCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/serviceannouncement-list-issues?view=graph-rest-1.0 Find more info here
    */
    public function get(?IssuesRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ServiceHealthIssueCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to issues for admin
     * @param ServiceHealthIssue $body The request body
     * @param IssuesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ServiceHealthIssue|null>
     * @throws Exception
    */
    public function post(ServiceHealthIssue $body, ?IssuesRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ServiceHealthIssue::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Retrieve serviceHealthIssue resources from the issues navigation property. This operation retrieves information about all service health issues that exist for the tenant. This API is available in the following national cloud deployments.
     * @param IssuesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?IssuesRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
        $requestInfo->tryAddHeader('Accept', "application/json;q=1");
        return $requestInfo;
    }

    /**
     * Create new navigation property to issues for admin
     * @param ServiceHealthIssue $body The request body
     * @param IssuesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(ServiceHealthIssue $body, ?IssuesRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::POST;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json;q=1");
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return IssuesRequestBuilder
    */
    public function withUrl(string $rawUrl): IssuesRequestBuilder {
        return new IssuesRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
