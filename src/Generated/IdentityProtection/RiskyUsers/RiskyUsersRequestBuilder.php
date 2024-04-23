<?php

namespace Microsoft\Graph\Generated\IdentityProtection\RiskyUsers;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\IdentityProtection\RiskyUsers\ConfirmCompromised\ConfirmCompromisedRequestBuilder;
use Microsoft\Graph\Generated\IdentityProtection\RiskyUsers\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\IdentityProtection\RiskyUsers\Dismiss\DismissRequestBuilder;
use Microsoft\Graph\Generated\IdentityProtection\RiskyUsers\Item\RiskyUserItemRequestBuilder;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\RiskyUser;
use Microsoft\Graph\Generated\Models\RiskyUserCollectionResponse;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the riskyUsers property of the microsoft.graph.identityProtectionRoot entity.
*/
class RiskyUsersRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to call the confirmCompromised method.
    */
    public function confirmCompromised(): ConfirmCompromisedRequestBuilder {
        return new ConfirmCompromisedRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the dismiss method.
    */
    public function dismiss(): DismissRequestBuilder {
        return new DismissRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the riskyUsers property of the microsoft.graph.identityProtectionRoot entity.
     * @param string $riskyUserId The unique identifier of riskyUser
     * @return RiskyUserItemRequestBuilder
    */
    public function byRiskyUserId(string $riskyUserId): RiskyUserItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['riskyUser%2Did'] = $riskyUserId;
        return new RiskyUserItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new RiskyUsersRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/identityProtection/riskyUsers{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Users that are flagged as at-risk by Microsoft Entra ID Protection.
     * @param RiskyUsersRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<RiskyUserCollectionResponse|null>
     * @throws Exception
    */
    public function get(?RiskyUsersRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [RiskyUserCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to riskyUsers for identityProtection
     * @param RiskyUser $body The request body
     * @param RiskyUsersRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<RiskyUser|null>
     * @throws Exception
    */
    public function post(RiskyUser $body, ?RiskyUsersRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [RiskyUser::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Users that are flagged as at-risk by Microsoft Entra ID Protection.
     * @param RiskyUsersRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?RiskyUsersRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to riskyUsers for identityProtection
     * @param RiskyUser $body The request body
     * @param RiskyUsersRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(RiskyUser $body, ?RiskyUsersRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return RiskyUsersRequestBuilder
    */
    public function withUrl(string $rawUrl): RiskyUsersRequestBuilder {
        return new RiskyUsersRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
