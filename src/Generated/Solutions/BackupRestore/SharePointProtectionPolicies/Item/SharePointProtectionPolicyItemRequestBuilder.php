<?php

namespace Microsoft\Graph\Generated\Solutions\BackupRestore\SharePointProtectionPolicies\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\SharePointProtectionPolicy;
use Microsoft\Graph\Generated\Solutions\BackupRestore\SharePointProtectionPolicies\Item\SiteInclusionRules\SiteInclusionRulesRequestBuilder;
use Microsoft\Graph\Generated\Solutions\BackupRestore\SharePointProtectionPolicies\Item\SiteProtectionUnits\SiteProtectionUnitsRequestBuilder;
use Microsoft\Graph\Generated\Solutions\BackupRestore\SharePointProtectionPolicies\Item\SiteProtectionUnitsBulkAdditionJobs\SiteProtectionUnitsBulkAdditionJobsRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the sharePointProtectionPolicies property of the microsoft.graph.backupRestoreRoot entity.
*/
class SharePointProtectionPolicyItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to manage the siteInclusionRules property of the microsoft.graph.sharePointProtectionPolicy entity.
    */
    public function siteInclusionRules(): SiteInclusionRulesRequestBuilder {
        return new SiteInclusionRulesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the siteProtectionUnits property of the microsoft.graph.sharePointProtectionPolicy entity.
    */
    public function siteProtectionUnits(): SiteProtectionUnitsRequestBuilder {
        return new SiteProtectionUnitsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the siteProtectionUnitsBulkAdditionJobs property of the microsoft.graph.sharePointProtectionPolicy entity.
    */
    public function siteProtectionUnitsBulkAdditionJobs(): SiteProtectionUnitsBulkAdditionJobsRequestBuilder {
        return new SiteProtectionUnitsBulkAdditionJobsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new SharePointProtectionPolicyItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/solutions/backupRestore/sharePointProtectionPolicies/{sharePointProtectionPolicy%2Did}{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property sharePointProtectionPolicies for solutions
     * @param SharePointProtectionPolicyItemRequestBuilderDeleteReque_91c0af0d|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function delete(?SharePointProtectionPolicyItemRequestBuilderDeleteReque_91c0af0d $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * The list of SharePoint protection policies in the tenant.
     * @param SharePointProtectionPolicyItemRequestBuilderGetRequestC_1ddc7617|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<SharePointProtectionPolicy|null>
     * @throws Exception
    */
    public function get(?SharePointProtectionPolicyItemRequestBuilderGetRequestC_1ddc7617 $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [SharePointProtectionPolicy::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update a SharePoint protection policy. This method adds a siteprotectionunit to or removes it from the protection policy.
     * @param SharePointProtectionPolicy $body The request body
     * @param SharePointProtectionPolicyItemRequestBuilderPatchReques_3a0e92c6|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<SharePointProtectionPolicy|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/sharepointprotectionpolicy-update?view=graph-rest-1.0 Find more info here
    */
    public function patch(SharePointProtectionPolicy $body, ?SharePointProtectionPolicyItemRequestBuilderPatchReques_3a0e92c6 $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [SharePointProtectionPolicy::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete navigation property sharePointProtectionPolicies for solutions
     * @param SharePointProtectionPolicyItemRequestBuilderDeleteReque_91c0af0d|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?SharePointProtectionPolicyItemRequestBuilderDeleteReque_91c0af0d $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        return $requestInfo;
    }

    /**
     * The list of SharePoint protection policies in the tenant.
     * @param SharePointProtectionPolicyItemRequestBuilderGetRequestC_1ddc7617|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?SharePointProtectionPolicyItemRequestBuilderGetRequestC_1ddc7617 $requestConfiguration = null): RequestInformation {
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
     * Update a SharePoint protection policy. This method adds a siteprotectionunit to or removes it from the protection policy.
     * @param SharePointProtectionPolicy $body The request body
     * @param SharePointProtectionPolicyItemRequestBuilderPatchReques_3a0e92c6|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(SharePointProtectionPolicy $body, ?SharePointProtectionPolicyItemRequestBuilderPatchReques_3a0e92c6 $requestConfiguration = null): RequestInformation {
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
     * @return SharePointProtectionPolicyItemRequestBuilder
    */
    public function withUrl(string $rawUrl): SharePointProtectionPolicyItemRequestBuilder {
        return new SharePointProtectionPolicyItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
