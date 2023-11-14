<?php

namespace Microsoft\Graph\Generated\Policies\RoleManagementPolicies\Item\Rules;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\UnifiedRoleManagementPolicyRule;
use Microsoft\Graph\Generated\Models\UnifiedRoleManagementPolicyRuleCollectionResponse;
use Microsoft\Graph\Generated\Policies\RoleManagementPolicies\Item\Rules\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\Policies\RoleManagementPolicies\Item\Rules\Item\UnifiedRoleManagementPolicyRuleItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the rules property of the microsoft.graph.unifiedRoleManagementPolicy entity.
*/
class RulesRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the rules property of the microsoft.graph.unifiedRoleManagementPolicy entity.
     * @param string $unifiedRoleManagementPolicyRuleId The unique identifier of unifiedRoleManagementPolicyRule
     * @return UnifiedRoleManagementPolicyRuleItemRequestBuilder
    */
    public function byUnifiedRoleManagementPolicyRuleId(string $unifiedRoleManagementPolicyRuleId): UnifiedRoleManagementPolicyRuleItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['unifiedRoleManagementPolicyRule%2Did'] = $unifiedRoleManagementPolicyRuleId;
        return new UnifiedRoleManagementPolicyRuleItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new RulesRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/policies/roleManagementPolicies/{unifiedRoleManagementPolicy%2Did}/rules{?%24top,%24skip,%24search,%24filter,%24count,%24orderby,%24select,%24expand}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get the rules or settings defined for a role management policy. The rules are a collection of following types that are derived from the unifiedRoleManagementPolicyRule object: This API is available in the following national cloud deployments.
     * @param RulesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<UnifiedRoleManagementPolicyRuleCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/unifiedrolemanagementpolicy-list-rules?view=graph-rest-1.0 Find more info here
    */
    public function get(?RulesRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [UnifiedRoleManagementPolicyRuleCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to rules for policies
     * @param UnifiedRoleManagementPolicyRule $body The request body
     * @param RulesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<UnifiedRoleManagementPolicyRule|null>
     * @throws Exception
    */
    public function post(UnifiedRoleManagementPolicyRule $body, ?RulesRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [UnifiedRoleManagementPolicyRule::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get the rules or settings defined for a role management policy. The rules are a collection of following types that are derived from the unifiedRoleManagementPolicyRule object: This API is available in the following national cloud deployments.
     * @param RulesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?RulesRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to rules for policies
     * @param UnifiedRoleManagementPolicyRule $body The request body
     * @param RulesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(UnifiedRoleManagementPolicyRule $body, ?RulesRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return RulesRequestBuilder
    */
    public function withUrl(string $rawUrl): RulesRequestBuilder {
        return new RulesRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
