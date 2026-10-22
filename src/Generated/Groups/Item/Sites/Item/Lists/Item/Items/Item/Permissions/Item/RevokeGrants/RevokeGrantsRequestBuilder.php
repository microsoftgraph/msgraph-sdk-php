<?php

namespace Microsoft\Graph\Generated\Groups\Item\Sites\Item\Lists\Item\Items\Item\Permissions\Item\RevokeGrants;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\Permission;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the revokeGrants method.
*/
class RevokeGrantsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new RevokeGrantsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/groups/{group%2Did}/sites/{site%2Did}/lists/{list%2Did}/items/{listItem%2Did}/permissions/{permission%2Did}/revokeGrants');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Revoke access to a listItem or driveItem granted via a sharing link by removing the specified driveRecipient entries from the link. Recipients who already redeemed the link and recipients who only received an invitation both lose access. Revoking a grant removes the recipient from this sharing link only; it doesn't remove any access the recipient has through a different sharing link, a direct grant, or membership in a group that has access.
     * @param RevokeGrantsPostRequestBody $body The request body
     * @param RevokeGrantsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<Permission|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/permission-revokegrants?view=graph-rest-1.0 Find more info here
    */
    public function post(RevokeGrantsPostRequestBody $body, ?RevokeGrantsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [Permission::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Revoke access to a listItem or driveItem granted via a sharing link by removing the specified driveRecipient entries from the link. Recipients who already redeemed the link and recipients who only received an invitation both lose access. Revoking a grant removes the recipient from this sharing link only; it doesn't remove any access the recipient has through a different sharing link, a direct grant, or membership in a group that has access.
     * @param RevokeGrantsPostRequestBody $body The request body
     * @param RevokeGrantsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(RevokeGrantsPostRequestBody $body, ?RevokeGrantsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return RevokeGrantsRequestBuilder
    */
    public function withUrl(string $rawUrl): RevokeGrantsRequestBuilder {
        return new RevokeGrantsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
