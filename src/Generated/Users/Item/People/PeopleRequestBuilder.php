<?php

namespace Microsoft\Graph\Generated\Users\Item\People;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\PersonCollectionResponse;
use Microsoft\Graph\Generated\Users\Item\People\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\People\Item\PersonItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the people property of the microsoft.graph.user entity.
*/
class PeopleRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the people property of the microsoft.graph.user entity.
     * @param string $personId The unique identifier of person
     * @return PersonItemRequestBuilder
    */
    public function byPersonId(string $personId): PersonItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['person%2Did'] = $personId;
        return new PersonItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new PeopleRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/users/{user%2Did}/people{?%24count,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Retrieve a collection of person objects ordered by their relevance to the user, which is determined by the user's communication and collaboration patterns, and business relationships. You can get this information via the People API. For examples, see the Examples section and the article Use the People API to get information about the people most relevant to you.
     * @param PeopleRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<PersonCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/user-list-people?view=graph-rest-1.0 Find more info here
    */
    public function get(?PeopleRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [PersonCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Retrieve a collection of person objects ordered by their relevance to the user, which is determined by the user's communication and collaboration patterns, and business relationships. You can get this information via the People API. For examples, see the Examples section and the article Use the People API to get information about the people most relevant to you.
     * @param PeopleRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?PeopleRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return PeopleRequestBuilder
    */
    public function withUrl(string $rawUrl): PeopleRequestBuilder {
        return new PeopleRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
