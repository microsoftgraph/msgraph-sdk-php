<?php

namespace Microsoft\Graph\Generated\Users\Item\JoinedTeams\Item\PrimaryChannel\DoesUserHaveAccessuserIdUserIdTenantIdTenantIdUserPrinc_09968052;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the doesUserHaveAccess method. Original name: DoesUserHaveAccessuserIdUserIdTenantIdTenantIdUserPrincipalNameUserPrincipalNameRequestBuilder
*/
class DoesUserHaveAccessuserIdUserIdTenantIdTenantIdUserPrinc_40d13b0e extends BaseRequestBuilder 
{
    /**
     * Instantiates a new DoesUserHaveAccessuserIdUserIdTenantIdTenantIdUserPrinc_40d13b0e and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/users/{user%2Did}/joinedTeams/{team%2Did}/primaryChannel/doesUserHaveAccess(userId=\'@userId\',tenantId=\'@tenantId\',userPrincipalName=\'@userPrincipalName\'){?tenantId*,userId*,userPrincipalName*}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Determine whether a user has access to a channel.
     * @param DoesUserHaveAccessuserIdUserIdTenantIdTenantIdUserPrinc_427c3f6a|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<DoesUserHaveAccessuserIdUserIdTenantIdTenantIdUserPrinc_e0eb743a|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/channel-doesuserhaveaccess?view=graph-rest-1.0 Find more info here
    */
    public function get(?DoesUserHaveAccessuserIdUserIdTenantIdTenantIdUserPrinc_427c3f6a $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [DoesUserHaveAccessuserIdUserIdTenantIdTenantIdUserPrinc_e0eb743a::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Determine whether a user has access to a channel.
     * @param DoesUserHaveAccessuserIdUserIdTenantIdTenantIdUserPrinc_427c3f6a|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?DoesUserHaveAccessuserIdUserIdTenantIdTenantIdUserPrinc_427c3f6a $requestConfiguration = null): RequestInformation {
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
     * @return DoesUserHaveAccessuserIdUserIdTenantIdTenantIdUserPrinc_40d13b0e
    */
    public function withUrl(string $rawUrl): DoesUserHaveAccessuserIdUserIdTenantIdTenantIdUserPrinc_40d13b0e {
        return new DoesUserHaveAccessuserIdUserIdTenantIdTenantIdUserPrinc_40d13b0e($rawUrl, $this->requestAdapter);
    }

}
