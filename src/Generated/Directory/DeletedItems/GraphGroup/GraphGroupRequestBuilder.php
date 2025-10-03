<?php

namespace Microsoft\\Graph\\Generated\Directory\DeletedItems\GraphGroup;

use Exception;
use Http\Promise\Promise;
use Microsoft\\Graph\\Generated\Directory\DeletedItems\GraphGroup\Count\CountRequestBuilder;
use Microsoft\\Graph\\Generated\Models\GroupCollectionResponse;
use Microsoft\\Graph\\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Casts the previous resource to group.
*/
class GraphGroupRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new GraphGroupRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/directory/deletedItems/graph.group{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Retrieve a list of recently deleted directory objects. Currently, deleted items functionality is only supported for the application, servicePrincipal, group, administrative unit, and user resources. Retrieve a list of recently deleted directory objects from deleted items. The following types are supported:- administrativeUnit- application- certificateBasedAuthPki- certificateAuthorityDetail- group- servicePrincipal- user
     * @param GraphGroupRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<GroupCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/directory-deleteditems-list?view=graph-rest-1.0 Find more info here
    */
    public function get(?GraphGroupRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [GroupCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Retrieve a list of recently deleted directory objects. Currently, deleted items functionality is only supported for the application, servicePrincipal, group, administrative unit, and user resources. Retrieve a list of recently deleted directory objects from deleted items. The following types are supported:- administrativeUnit- application- certificateBasedAuthPki- certificateAuthorityDetail- group- servicePrincipal- user
     * @param GraphGroupRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?GraphGroupRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return GraphGroupRequestBuilder
    */
    public function withUrl(string $rawUrl): GraphGroupRequestBuilder {
        return new GraphGroupRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
