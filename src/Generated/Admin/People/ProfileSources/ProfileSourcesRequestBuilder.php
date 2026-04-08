<?php

namespace Microsoft\Graph\Generated\Admin\People\ProfileSources;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Admin\People\ProfileSources\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\Admin\People\ProfileSources\Item\ProfileSourceItemRequestBuilder;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\ProfileSource;
use Microsoft\Graph\Generated\Models\ProfileSourceCollectionResponse;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the profileSources property of the microsoft.graph.peopleAdminSettings entity.
*/
class ProfileSourcesRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the profileSources property of the microsoft.graph.peopleAdminSettings entity.
     * @param string $profileSourceId The unique identifier of profileSource
     * @return ProfileSourceItemRequestBuilder
    */
    public function byProfileSourceId(string $profileSourceId): ProfileSourceItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['profileSource%2Did'] = $profileSourceId;
        return new ProfileSourceItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new ProfileSourcesRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/admin/people/profileSources{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get a list of the profileSource objects and their properties, which represent both external data sources and out-of-the-box Microsoft data sources configured for user profiles in an organization.
     * @param ProfileSourcesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ProfileSourceCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/peopleadminsettings-list-profilesources?view=graph-rest-1.0 Find more info here
    */
    public function get(?ProfileSourcesRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ProfileSourceCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create a new profileSource object.
     * @param ProfileSource $body The request body
     * @param ProfileSourcesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ProfileSource|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/peopleadminsettings-post-profilesources?view=graph-rest-1.0 Find more info here
    */
    public function post(ProfileSource $body, ?ProfileSourcesRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ProfileSource::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get a list of the profileSource objects and their properties, which represent both external data sources and out-of-the-box Microsoft data sources configured for user profiles in an organization.
     * @param ProfileSourcesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?ProfileSourcesRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create a new profileSource object.
     * @param ProfileSource $body The request body
     * @param ProfileSourcesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(ProfileSource $body, ?ProfileSourcesRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return ProfileSourcesRequestBuilder
    */
    public function withUrl(string $rawUrl): ProfileSourcesRequestBuilder {
        return new ProfileSourcesRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
