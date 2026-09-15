<?php

namespace Microsoft\Graph\Generated\Directory\TenantGovernance\GovernanceInvitations;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Directory\TenantGovernance\GovernanceInvitations\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\Directory\TenantGovernance\GovernanceInvitations\Item\GovernanceInvitationItemRequestBuilder;
use Microsoft\Graph\Generated\Models\GovernanceInvitation;
use Microsoft\Graph\Generated\Models\GovernanceInvitationCollectionResponse;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the governanceInvitations property of the microsoft.graph.tenantGovernance entity.
*/
class GovernanceInvitationsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the governanceInvitations property of the microsoft.graph.tenantGovernance entity.
     * @param string $governanceInvitationId The unique identifier of governanceInvitation
     * @return GovernanceInvitationItemRequestBuilder
    */
    public function byGovernanceInvitationId(string $governanceInvitationId): GovernanceInvitationItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['governanceInvitation%2Did'] = $governanceInvitationId;
        return new GovernanceInvitationItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new GovernanceInvitationsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/directory/tenantGovernance/governanceInvitations{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get governanceInvitations from directory
     * @param GovernanceInvitationsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<GovernanceInvitationCollectionResponse|null>
     * @throws Exception
    */
    public function get(?GovernanceInvitationsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [GovernanceInvitationCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to governanceInvitations for directory
     * @param GovernanceInvitation $body The request body
     * @param GovernanceInvitationsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<GovernanceInvitation|null>
     * @throws Exception
    */
    public function post(GovernanceInvitation $body, ?GovernanceInvitationsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [GovernanceInvitation::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get governanceInvitations from directory
     * @param GovernanceInvitationsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?GovernanceInvitationsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to governanceInvitations for directory
     * @param GovernanceInvitation $body The request body
     * @param GovernanceInvitationsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(GovernanceInvitation $body, ?GovernanceInvitationsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return GovernanceInvitationsRequestBuilder
    */
    public function withUrl(string $rawUrl): GovernanceInvitationsRequestBuilder {
        return new GovernanceInvitationsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
