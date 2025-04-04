<?php

namespace Microsoft\Graph\Generated\Invitations;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Invitations\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\Invitations\InvitedUser\InvitedUserRequestBuilder;
use Microsoft\Graph\Generated\Invitations\InvitedUserSponsors\InvitedUserSponsorsRequestBuilder;
use Microsoft\Graph\Generated\Models\Invitation;
use Microsoft\Graph\Generated\Models\InvitationCollectionResponse;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the collection of invitation entities.
*/
class InvitationsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the invitedUser property of the microsoft.graph.invitation entity.
    */
    public function invitedUser(): InvitedUserRequestBuilder {
        return new InvitedUserRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the invitedUserSponsors property of the microsoft.graph.invitation entity.
    */
    public function invitedUserSponsors(): InvitedUserSponsorsRequestBuilder {
        return new InvitedUserSponsorsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new InvitationsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/invitations{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get entities from invitations
     * @param InvitationsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<InvitationCollectionResponse|null>
     * @throws Exception
    */
    public function get(?InvitationsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [InvitationCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Use this API to create a new invitation or reset the redemption status for a guest user who already redeemed their invitation. The invitation adds the external user to the organization as part of B2B collaboration. B2B collaboration is supported in both Microsoft Entra External ID in workforce and external tenants. When creating a new invitation, you have several options available:
     * @param Invitation $body The request body
     * @param InvitationsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<Invitation|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/invitation-post?view=graph-rest-1.0 Find more info here
    */
    public function post(Invitation $body, ?InvitationsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [Invitation::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get entities from invitations
     * @param InvitationsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?InvitationsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Use this API to create a new invitation or reset the redemption status for a guest user who already redeemed their invitation. The invitation adds the external user to the organization as part of B2B collaboration. B2B collaboration is supported in both Microsoft Entra External ID in workforce and external tenants. When creating a new invitation, you have several options available:
     * @param Invitation $body The request body
     * @param InvitationsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(Invitation $body, ?InvitationsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return InvitationsRequestBuilder
    */
    public function withUrl(string $rawUrl): InvitationsRequestBuilder {
        return new InvitationsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
