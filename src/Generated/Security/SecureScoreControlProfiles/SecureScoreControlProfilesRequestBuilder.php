<?php

namespace Microsoft\Graph\Generated\Security\SecureScoreControlProfiles;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\SecureScoreControlProfile;
use Microsoft\Graph\Generated\Models\SecureScoreControlProfileCollectionResponse;
use Microsoft\Graph\Generated\Security\SecureScoreControlProfiles\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\Security\SecureScoreControlProfiles\Item\SecureScoreControlProfileItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the secureScoreControlProfiles property of the microsoft.graph.security entity.
*/
class SecureScoreControlProfilesRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the secureScoreControlProfiles property of the microsoft.graph.security entity.
     * @param string $secureScoreControlProfileId The unique identifier of secureScoreControlProfile
     * @return SecureScoreControlProfileItemRequestBuilder
    */
    public function bySecureScoreControlProfileId(string $secureScoreControlProfileId): SecureScoreControlProfileItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['secureScoreControlProfile%2Did'] = $secureScoreControlProfileId;
        return new SecureScoreControlProfileItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new SecureScoreControlProfilesRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/security/secureScoreControlProfiles{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Retrieve the properties and relationships of a secureScoreControlProfiles object.
     * @param SecureScoreControlProfilesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<SecureScoreControlProfileCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/security-list-securescorecontrolprofiles?view=graph-rest-1.0 Find more info here
    */
    public function get(?SecureScoreControlProfilesRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [SecureScoreControlProfileCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to secureScoreControlProfiles for security
     * @param SecureScoreControlProfile $body The request body
     * @param SecureScoreControlProfilesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<SecureScoreControlProfile|null>
     * @throws Exception
    */
    public function post(SecureScoreControlProfile $body, ?SecureScoreControlProfilesRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [SecureScoreControlProfile::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Retrieve the properties and relationships of a secureScoreControlProfiles object.
     * @param SecureScoreControlProfilesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?SecureScoreControlProfilesRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to secureScoreControlProfiles for security
     * @param SecureScoreControlProfile $body The request body
     * @param SecureScoreControlProfilesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(SecureScoreControlProfile $body, ?SecureScoreControlProfilesRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return SecureScoreControlProfilesRequestBuilder
    */
    public function withUrl(string $rawUrl): SecureScoreControlProfilesRequestBuilder {
        return new SecureScoreControlProfilesRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
