<?php

namespace Microsoft\Graph\Generated\Privacy\SubjectRightsRequests\Item\Collaborators;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\UserCollectionResponse;
use Microsoft\Graph\Generated\Privacy\SubjectRightsRequests\Item\Collaborators\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\Privacy\SubjectRightsRequests\Item\Collaborators\Item\UserItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the collaborators property of the microsoft.graph.subjectRightsRequest entity.
*/
class CollaboratorsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the collaborators property of the microsoft.graph.subjectRightsRequest entity.
     * @param string $userId The unique identifier of user
     * @return UserItemRequestBuilder
    */
    public function byUserId(string $userId): UserItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['user%2Did'] = $userId;
        return new UserItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new CollaboratorsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/privacy/subjectRightsRequests/{subjectRightsRequest%2Did}/collaborators{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Collection of users who can collaborate on the request.
     * @param CollaboratorsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<UserCollectionResponse|null>
     * @throws Exception
    */
    public function get(?CollaboratorsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [UserCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Collection of users who can collaborate on the request.
     * @param CollaboratorsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?CollaboratorsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return CollaboratorsRequestBuilder
    */
    public function withUrl(string $rawUrl): CollaboratorsRequestBuilder {
        return new CollaboratorsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
