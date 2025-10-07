<?php

namespace Microsoft\\Graph\\Generated\TenantRelationships\MultiTenantOrganization\JoinRequest;

use Exception;
use Http\Promise\Promise;
use Microsoft\\Graph\\Generated\Models\MultiTenantOrganizationJoinRequestRecord;
use Microsoft\\Graph\\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the joinRequest property of the microsoft.graph.multiTenantOrganization entity.
*/
class JoinRequestRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new JoinRequestRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/tenantRelationships/multiTenantOrganization/joinRequest{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get the status of a tenant joining a multitenant organization.
     * @param JoinRequestRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<MultiTenantOrganizationJoinRequestRecord|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/multitenantorganizationjoinrequestrecord-get?view=graph-rest-1.0 Find more info here
    */
    public function get(?JoinRequestRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [MultiTenantOrganizationJoinRequestRecord::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Join a multitenant organization, after the owner of the multitenant organization has added your tenant to the multitenant organization as pending. Before a tenant added to a multitenant organization can participate in the multitenant organization, the administrator of the joining tenant must submit a join request. To allow for asynchronous processing, you must wait up to 2 hours before joining a multitenant organization is completed.
     * @param MultiTenantOrganizationJoinRequestRecord $body The request body
     * @param JoinRequestRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<MultiTenantOrganizationJoinRequestRecord|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/multitenantorganizationjoinrequestrecord-update?view=graph-rest-1.0 Find more info here
    */
    public function patch(MultiTenantOrganizationJoinRequestRecord $body, ?JoinRequestRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [MultiTenantOrganizationJoinRequestRecord::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get the status of a tenant joining a multitenant organization.
     * @param JoinRequestRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?JoinRequestRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Join a multitenant organization, after the owner of the multitenant organization has added your tenant to the multitenant organization as pending. Before a tenant added to a multitenant organization can participate in the multitenant organization, the administrator of the joining tenant must submit a join request. To allow for asynchronous processing, you must wait up to 2 hours before joining a multitenant organization is completed.
     * @param MultiTenantOrganizationJoinRequestRecord $body The request body
     * @param JoinRequestRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(MultiTenantOrganizationJoinRequestRecord $body, ?JoinRequestRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PATCH;
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
     * @return JoinRequestRequestBuilder
    */
    public function withUrl(string $rawUrl): JoinRequestRequestBuilder {
        return new JoinRequestRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
