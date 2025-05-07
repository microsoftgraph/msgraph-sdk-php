<?php

namespace Microsoft\Graph\Generated\Solutions\BackupRestore;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\BackupRestoreRoot;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Solutions\BackupRestore\DriveInclusionRules\DriveInclusionRulesRequestBuilder;
use Microsoft\Graph\Generated\Solutions\BackupRestore\DriveProtectionUnits\DriveProtectionUnitsRequestBuilder;
use Microsoft\Graph\Generated\Solutions\BackupRestore\DriveProtectionUnitsBulkAdditionJobs\DriveProtectionUnitsBulkAdditionJobsRequestBuilder;
use Microsoft\Graph\Generated\Solutions\BackupRestore\Enable\EnableRequestBuilder;
use Microsoft\Graph\Generated\Solutions\BackupRestore\ExchangeProtectionPolicies\ExchangeProtectionPoliciesRequestBuilder;
use Microsoft\Graph\Generated\Solutions\BackupRestore\ExchangeRestoreSessions\ExchangeRestoreSessionsRequestBuilder;
use Microsoft\Graph\Generated\Solutions\BackupRestore\MailboxInclusionRules\MailboxInclusionRulesRequestBuilder;
use Microsoft\Graph\Generated\Solutions\BackupRestore\MailboxProtectionUnits\MailboxProtectionUnitsRequestBuilder;
use Microsoft\Graph\Generated\Solutions\BackupRestore\MailboxProtectionUnitsBulkAdditionJobs\MailboxProtectionUnitsBulkAdditionJobsRequestBuilder;
use Microsoft\Graph\Generated\Solutions\BackupRestore\OneDriveForBusinessProtectionPolicies\OneDriveForBusinessProtectionPoliciesRequestBuilder;
use Microsoft\Graph\Generated\Solutions\BackupRestore\OneDriveForBusinessRestoreSessions\OneDriveForBusinessRestoreSessionsRequestBuilder;
use Microsoft\Graph\Generated\Solutions\BackupRestore\ProtectionPolicies\ProtectionPoliciesRequestBuilder;
use Microsoft\Graph\Generated\Solutions\BackupRestore\ProtectionUnits\ProtectionUnitsRequestBuilder;
use Microsoft\Graph\Generated\Solutions\BackupRestore\RestorePoints\RestorePointsRequestBuilder;
use Microsoft\Graph\Generated\Solutions\BackupRestore\RestoreSessions\RestoreSessionsRequestBuilder;
use Microsoft\Graph\Generated\Solutions\BackupRestore\ServiceApps\ServiceAppsRequestBuilder;
use Microsoft\Graph\Generated\Solutions\BackupRestore\SharePointProtectionPolicies\SharePointProtectionPoliciesRequestBuilder;
use Microsoft\Graph\Generated\Solutions\BackupRestore\SharePointRestoreSessions\SharePointRestoreSessionsRequestBuilder;
use Microsoft\Graph\Generated\Solutions\BackupRestore\SiteInclusionRules\SiteInclusionRulesRequestBuilder;
use Microsoft\Graph\Generated\Solutions\BackupRestore\SiteProtectionUnits\SiteProtectionUnitsRequestBuilder;
use Microsoft\Graph\Generated\Solutions\BackupRestore\SiteProtectionUnitsBulkAdditionJobs\SiteProtectionUnitsBulkAdditionJobsRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the backupRestore property of the microsoft.graph.solutionsRoot entity.
*/
class BackupRestoreRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to manage the driveInclusionRules property of the microsoft.graph.backupRestoreRoot entity.
    */
    public function driveInclusionRules(): DriveInclusionRulesRequestBuilder {
        return new DriveInclusionRulesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the driveProtectionUnits property of the microsoft.graph.backupRestoreRoot entity.
    */
    public function driveProtectionUnits(): DriveProtectionUnitsRequestBuilder {
        return new DriveProtectionUnitsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the driveProtectionUnitsBulkAdditionJobs property of the microsoft.graph.backupRestoreRoot entity.
    */
    public function driveProtectionUnitsBulkAdditionJobs(): DriveProtectionUnitsBulkAdditionJobsRequestBuilder {
        return new DriveProtectionUnitsBulkAdditionJobsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the enable method.
    */
    public function enable(): EnableRequestBuilder {
        return new EnableRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the exchangeProtectionPolicies property of the microsoft.graph.backupRestoreRoot entity.
    */
    public function exchangeProtectionPolicies(): ExchangeProtectionPoliciesRequestBuilder {
        return new ExchangeProtectionPoliciesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the exchangeRestoreSessions property of the microsoft.graph.backupRestoreRoot entity.
    */
    public function exchangeRestoreSessions(): ExchangeRestoreSessionsRequestBuilder {
        return new ExchangeRestoreSessionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the mailboxInclusionRules property of the microsoft.graph.backupRestoreRoot entity.
    */
    public function mailboxInclusionRules(): MailboxInclusionRulesRequestBuilder {
        return new MailboxInclusionRulesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the mailboxProtectionUnits property of the microsoft.graph.backupRestoreRoot entity.
    */
    public function mailboxProtectionUnits(): MailboxProtectionUnitsRequestBuilder {
        return new MailboxProtectionUnitsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the mailboxProtectionUnitsBulkAdditionJobs property of the microsoft.graph.backupRestoreRoot entity.
    */
    public function mailboxProtectionUnitsBulkAdditionJobs(): MailboxProtectionUnitsBulkAdditionJobsRequestBuilder {
        return new MailboxProtectionUnitsBulkAdditionJobsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the oneDriveForBusinessProtectionPolicies property of the microsoft.graph.backupRestoreRoot entity.
    */
    public function oneDriveForBusinessProtectionPolicies(): OneDriveForBusinessProtectionPoliciesRequestBuilder {
        return new OneDriveForBusinessProtectionPoliciesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the oneDriveForBusinessRestoreSessions property of the microsoft.graph.backupRestoreRoot entity.
    */
    public function oneDriveForBusinessRestoreSessions(): OneDriveForBusinessRestoreSessionsRequestBuilder {
        return new OneDriveForBusinessRestoreSessionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the protectionPolicies property of the microsoft.graph.backupRestoreRoot entity.
    */
    public function protectionPolicies(): ProtectionPoliciesRequestBuilder {
        return new ProtectionPoliciesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the protectionUnits property of the microsoft.graph.backupRestoreRoot entity.
    */
    public function protectionUnits(): ProtectionUnitsRequestBuilder {
        return new ProtectionUnitsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the restorePoints property of the microsoft.graph.backupRestoreRoot entity.
    */
    public function restorePoints(): RestorePointsRequestBuilder {
        return new RestorePointsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the restoreSessions property of the microsoft.graph.backupRestoreRoot entity.
    */
    public function restoreSessions(): RestoreSessionsRequestBuilder {
        return new RestoreSessionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the serviceApps property of the microsoft.graph.backupRestoreRoot entity.
    */
    public function serviceApps(): ServiceAppsRequestBuilder {
        return new ServiceAppsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the sharePointProtectionPolicies property of the microsoft.graph.backupRestoreRoot entity.
    */
    public function sharePointProtectionPolicies(): SharePointProtectionPoliciesRequestBuilder {
        return new SharePointProtectionPoliciesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the sharePointRestoreSessions property of the microsoft.graph.backupRestoreRoot entity.
    */
    public function sharePointRestoreSessions(): SharePointRestoreSessionsRequestBuilder {
        return new SharePointRestoreSessionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the siteInclusionRules property of the microsoft.graph.backupRestoreRoot entity.
    */
    public function siteInclusionRules(): SiteInclusionRulesRequestBuilder {
        return new SiteInclusionRulesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the siteProtectionUnits property of the microsoft.graph.backupRestoreRoot entity.
    */
    public function siteProtectionUnits(): SiteProtectionUnitsRequestBuilder {
        return new SiteProtectionUnitsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the siteProtectionUnitsBulkAdditionJobs property of the microsoft.graph.backupRestoreRoot entity.
    */
    public function siteProtectionUnitsBulkAdditionJobs(): SiteProtectionUnitsBulkAdditionJobsRequestBuilder {
        return new SiteProtectionUnitsBulkAdditionJobsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new BackupRestoreRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/solutions/backupRestore{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property backupRestore for solutions
     * @param BackupRestoreRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function delete(?BackupRestoreRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Get the serviceStatus of the Microsoft 365 Backup Storage service in a tenant.
     * @param BackupRestoreRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<BackupRestoreRoot|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/backuprestoreroot-get?view=graph-rest-1.0 Find more info here
    */
    public function get(?BackupRestoreRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [BackupRestoreRoot::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the navigation property backupRestore in solutions
     * @param BackupRestoreRoot $body The request body
     * @param BackupRestoreRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<BackupRestoreRoot|null>
     * @throws Exception
    */
    public function patch(BackupRestoreRoot $body, ?BackupRestoreRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [BackupRestoreRoot::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete navigation property backupRestore for solutions
     * @param BackupRestoreRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?BackupRestoreRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        return $requestInfo;
    }

    /**
     * Get the serviceStatus of the Microsoft 365 Backup Storage service in a tenant.
     * @param BackupRestoreRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?BackupRestoreRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update the navigation property backupRestore in solutions
     * @param BackupRestoreRoot $body The request body
     * @param BackupRestoreRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(BackupRestoreRoot $body, ?BackupRestoreRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return BackupRestoreRequestBuilder
    */
    public function withUrl(string $rawUrl): BackupRestoreRequestBuilder {
        return new BackupRestoreRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
