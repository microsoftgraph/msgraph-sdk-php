<?php

namespace Microsoft\Graph\Generated\Solutions\BackupRestore\OneDriveForBusinessProtectionPolicies\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\OneDriveForBusinessProtectionPolicy;
use Microsoft\Graph\Generated\Solutions\BackupRestore\OneDriveForBusinessProtectionPolicies\Item\DriveInclusionRules\DriveInclusionRulesRequestBuilder;
use Microsoft\Graph\Generated\Solutions\BackupRestore\OneDriveForBusinessProtectionPolicies\Item\DriveProtectionUnits\DriveProtectionUnitsRequestBuilder;
use Microsoft\Graph\Generated\Solutions\BackupRestore\OneDriveForBusinessProtectionPolicies\Item\DriveProtectionUnitsBulkAdditionJobs\DriveProtectionUnitsBulkAdditionJobsRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the oneDriveForBusinessProtectionPolicies property of the microsoft.graph.backupRestoreRoot entity.
*/
class OneDriveForBusinessProtectionPolicyItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to manage the driveInclusionRules property of the microsoft.graph.oneDriveForBusinessProtectionPolicy entity.
    */
    public function driveInclusionRules(): DriveInclusionRulesRequestBuilder {
        return new DriveInclusionRulesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the driveProtectionUnits property of the microsoft.graph.oneDriveForBusinessProtectionPolicy entity.
    */
    public function driveProtectionUnits(): DriveProtectionUnitsRequestBuilder {
        return new DriveProtectionUnitsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the driveProtectionUnitsBulkAdditionJobs property of the microsoft.graph.oneDriveForBusinessProtectionPolicy entity.
    */
    public function driveProtectionUnitsBulkAdditionJobs(): DriveProtectionUnitsBulkAdditionJobsRequestBuilder {
        return new DriveProtectionUnitsBulkAdditionJobsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new OneDriveForBusinessProtectionPolicyItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/solutions/backupRestore/oneDriveForBusinessProtectionPolicies/{oneDriveForBusinessProtectionPolicy%2Did}{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property oneDriveForBusinessProtectionPolicies for solutions
     * @param OneDriveForBusinessProtectionPolicyItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function delete(?OneDriveForBusinessProtectionPolicyItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * The list of OneDrive for Business protection policies in the tenant.
     * @param OneDriveForBusinessProtectionPolicyItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<OneDriveForBusinessProtectionPolicy|null>
     * @throws Exception
    */
    public function get(?OneDriveForBusinessProtectionPolicyItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [OneDriveForBusinessProtectionPolicy::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the protection policy for the OneDrive service in Microsoft 365. This method adds a driveProtectionUnit to or removes it from a oneDriveForBusinessProtectionPolicy object.
     * @param OneDriveForBusinessProtectionPolicy $body The request body
     * @param OneDriveForBusinessProtectionPolicyItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<OneDriveForBusinessProtectionPolicy|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/onedriveforbusinessprotectionpolicy-update?view=graph-rest-1.0 Find more info here
    */
    public function patch(OneDriveForBusinessProtectionPolicy $body, ?OneDriveForBusinessProtectionPolicyItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [OneDriveForBusinessProtectionPolicy::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete navigation property oneDriveForBusinessProtectionPolicies for solutions
     * @param OneDriveForBusinessProtectionPolicyItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?OneDriveForBusinessProtectionPolicyItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * The list of OneDrive for Business protection policies in the tenant.
     * @param OneDriveForBusinessProtectionPolicyItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?OneDriveForBusinessProtectionPolicyItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update the protection policy for the OneDrive service in Microsoft 365. This method adds a driveProtectionUnit to or removes it from a oneDriveForBusinessProtectionPolicy object.
     * @param OneDriveForBusinessProtectionPolicy $body The request body
     * @param OneDriveForBusinessProtectionPolicyItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(OneDriveForBusinessProtectionPolicy $body, ?OneDriveForBusinessProtectionPolicyItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return OneDriveForBusinessProtectionPolicyItemRequestBuilder
    */
    public function withUrl(string $rawUrl): OneDriveForBusinessProtectionPolicyItemRequestBuilder {
        return new OneDriveForBusinessProtectionPolicyItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
