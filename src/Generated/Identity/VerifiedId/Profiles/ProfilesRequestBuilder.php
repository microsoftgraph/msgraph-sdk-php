<?php

namespace Microsoft\Graph\Generated\Identity\VerifiedId\Profiles;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Identity\VerifiedId\Profiles\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\Identity\VerifiedId\Profiles\Item\VerifiedIdProfileItemRequestBuilder;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\VerifiedIdProfile;
use Microsoft\Graph\Generated\Models\VerifiedIdProfileCollectionResponse;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the profiles property of the microsoft.graph.identityVerifiedIdRoot entity.
*/
class ProfilesRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the profiles property of the microsoft.graph.identityVerifiedIdRoot entity.
     * @param string $verifiedIdProfileId The unique identifier of verifiedIdProfile
     * @return VerifiedIdProfileItemRequestBuilder
    */
    public function byVerifiedIdProfileId(string $verifiedIdProfileId): VerifiedIdProfileItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['verifiedIdProfile%2Did'] = $verifiedIdProfileId;
        return new VerifiedIdProfileItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new ProfilesRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/identity/verifiedId/profiles{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get a list of the verifiedIdProfile objects and their properties.
     * @param ProfilesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<VerifiedIdProfileCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/identityverifiedidroot-list-profiles?view=graph-rest-1.0 Find more info here
    */
    public function get(?ProfilesRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [VerifiedIdProfileCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create a new verifiedIdProfile object.
     * @param VerifiedIdProfile $body The request body
     * @param ProfilesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<VerifiedIdProfile|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/identityverifiedidroot-post-profiles?view=graph-rest-1.0 Find more info here
    */
    public function post(VerifiedIdProfile $body, ?ProfilesRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [VerifiedIdProfile::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get a list of the verifiedIdProfile objects and their properties.
     * @param ProfilesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?ProfilesRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create a new verifiedIdProfile object.
     * @param VerifiedIdProfile $body The request body
     * @param ProfilesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(VerifiedIdProfile $body, ?ProfilesRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return ProfilesRequestBuilder
    */
    public function withUrl(string $rawUrl): ProfilesRequestBuilder {
        return new ProfilesRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
