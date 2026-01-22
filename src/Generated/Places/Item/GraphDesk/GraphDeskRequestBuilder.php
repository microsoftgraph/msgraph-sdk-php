<?php

namespace Microsoft\Graph\Generated\Places\Item\GraphDesk;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\Desk;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Places\Item\GraphDesk\CheckIns\CheckInsRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Casts the previous resource to desk.
*/
class GraphDeskRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to manage the checkIns property of the microsoft.graph.place entity.
    */
    public function checkIns(): CheckInsRequestBuilder {
        return new CheckInsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new GraphDeskRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/places/{place%2Did}/graph.desk{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get a collection of the specified type of place objects defined in a tenant. You can do the following for a given tenant:- List all buildings.- List all floors.- List all sections.- List all desks.- List all rooms.- List all workspaces.- List all room lists.- List rooms in a specific room list.- List workspaces in a specific room list.
     * @param GraphDeskRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<Desk|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/place-list?view=graph-rest-1.0 Find more info here
    */
    public function get(?GraphDeskRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [Desk::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get a collection of the specified type of place objects defined in a tenant. You can do the following for a given tenant:- List all buildings.- List all floors.- List all sections.- List all desks.- List all rooms.- List all workspaces.- List all room lists.- List rooms in a specific room list.- List workspaces in a specific room list.
     * @param GraphDeskRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?GraphDeskRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return GraphDeskRequestBuilder
    */
    public function withUrl(string $rawUrl): GraphDeskRequestBuilder {
        return new GraphDeskRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
