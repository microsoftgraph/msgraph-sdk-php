<?php

namespace Microsoft\Graph\Generated\ServicePrincipals\Item\CheckMemberGroups;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the checkMemberGroups method.
*/
class CheckMemberGroupsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new CheckMemberGroupsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/servicePrincipals/{servicePrincipal%2Did}/checkMemberGroups');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Check for membership in a specified list of group IDs, and return from that list those groups (identified by IDs) of which the specified user, group, service principal, organizational contact, device, or directory object is a member. This function is transitive. You can check up to a maximum of 20 groups per request. This function supports all groups provisioned in Microsoft Entra ID. Because Microsoft 365 groups cannot contain other groups, membership in a Microsoft 365 group is always direct. This API is available in the following national cloud deployments.
     * @param CheckMemberGroupsPostRequestBody $body The request body
     * @param CheckMemberGroupsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<CheckMemberGroupsPostResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/directoryobject-checkmembergroups?view=graph-rest-1.0 Find more info here
    */
    public function post(CheckMemberGroupsPostRequestBody $body, ?CheckMemberGroupsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [CheckMemberGroupsPostResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Check for membership in a specified list of group IDs, and return from that list those groups (identified by IDs) of which the specified user, group, service principal, organizational contact, device, or directory object is a member. This function is transitive. You can check up to a maximum of 20 groups per request. This function supports all groups provisioned in Microsoft Entra ID. Because Microsoft 365 groups cannot contain other groups, membership in a Microsoft 365 group is always direct. This API is available in the following national cloud deployments.
     * @param CheckMemberGroupsPostRequestBody $body The request body
     * @param CheckMemberGroupsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(CheckMemberGroupsPostRequestBody $body, ?CheckMemberGroupsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return CheckMemberGroupsRequestBuilder
    */
    public function withUrl(string $rawUrl): CheckMemberGroupsRequestBuilder {
        return new CheckMemberGroupsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
