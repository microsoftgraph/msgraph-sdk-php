<?php

namespace Microsoft\Graph\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class AuditData implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new AuditData and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AuditData
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AuditData {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.security.aadRiskDetectionAuditRecord': return new AadRiskDetectionAuditRecord();
                case '#microsoft.graph.security.aedAuditRecord': return new AedAuditRecord();
                case '#microsoft.graph.security.aiAppInteractionAuditRecord': return new AiAppInteractionAuditRecord();
                case '#microsoft.graph.security.aipFileDeleted': return new AipFileDeleted();
                case '#microsoft.graph.security.aipHeartBeat': return new AipHeartBeat();
                case '#microsoft.graph.security.aipProtectionActionLogRequest': return new AipProtectionActionLogRequest();
                case '#microsoft.graph.security.aipScannerDiscoverEvent': return new AipScannerDiscoverEvent();
                case '#microsoft.graph.security.aipSensitivityLabelActionLogRequest': return new AipSensitivityLabelActionLogRequest();
                case '#microsoft.graph.security.airAdminActionInvestigationData': return new AirAdminActionInvestigationData();
                case '#microsoft.graph.security.airInvestigationData': return new AirInvestigationData();
                case '#microsoft.graph.security.airManualInvestigationData': return new AirManualInvestigationData();
                case '#microsoft.graph.security.attackSimAdminAuditRecord': return new AttackSimAdminAuditRecord();
                case '#microsoft.graph.security.auditSearchAuditRecord': return new AuditSearchAuditRecord();
                case '#microsoft.graph.security.azureActiveDirectoryAccountLogonAuditRecord': return new AzureActiveDirectoryAccountLogonAuditRecord();
                case '#microsoft.graph.security.azureActiveDirectoryAuditRecord': return new AzureActiveDirectoryAuditRecord();
                case '#microsoft.graph.security.azureActiveDirectoryBaseAuditRecord': return new AzureActiveDirectoryBaseAuditRecord();
                case '#microsoft.graph.security.azureActiveDirectoryStsLogonAuditRecord': return new AzureActiveDirectoryStsLogonAuditRecord();
                case '#microsoft.graph.security.campaignAuditRecord': return new CampaignAuditRecord();
                case '#microsoft.graph.security.caseAuditRecord': return new CaseAuditRecord();
                case '#microsoft.graph.security.caseInvestigation': return new CaseInvestigation();
                case '#microsoft.graph.security.cdpColdCrawlStatusRecord': return new CdpColdCrawlStatusRecord();
                case '#microsoft.graph.security.cdpContentExplorerAggregateRecord': return new CdpContentExplorerAggregateRecord();
                case '#microsoft.graph.security.cdpDlpSensitiveAuditRecord': return new CdpDlpSensitiveAuditRecord();
                case '#microsoft.graph.security.cdpDlpSensitiveEndpointAuditRecord': return new CdpDlpSensitiveEndpointAuditRecord();
                case '#microsoft.graph.security.cdpLogRecord': return new CdpLogRecord();
                case '#microsoft.graph.security.cdpOcrBillingRecord': return new CdpOcrBillingRecord();
                case '#microsoft.graph.security.cdpResourceScopeChangeEventRecord': return new CdpResourceScopeChangeEventRecord();
                case '#microsoft.graph.security.cernerSMSLinkRecord': return new CernerSMSLinkRecord();
                case '#microsoft.graph.security.cernerSMSSettingsUpdateRecord': return new CernerSMSSettingsUpdateRecord();
                case '#microsoft.graph.security.cernerSMSUnlinkRecord': return new CernerSMSUnlinkRecord();
                case '#microsoft.graph.security.complianceConnectorAuditRecord': return new ComplianceConnectorAuditRecord();
                case '#microsoft.graph.security.complianceDLMExchangeAuditRecord': return new ComplianceDLMExchangeAuditRecord();
                case '#microsoft.graph.security.complianceDLMSharePointAuditRecord': return new ComplianceDLMSharePointAuditRecord();
                case '#microsoft.graph.security.complianceDlpApplicationsAuditRecord': return new ComplianceDlpApplicationsAuditRecord();
                case '#microsoft.graph.security.complianceDlpApplicationsClassificationAuditRecord': return new ComplianceDlpApplicationsClassificationAuditRecord();
                case '#microsoft.graph.security.complianceDlpBaseAuditRecord': return new ComplianceDlpBaseAuditRecord();
                case '#microsoft.graph.security.complianceDlpClassificationBaseAuditRecord': return new ComplianceDlpClassificationBaseAuditRecord();
                case '#microsoft.graph.security.complianceDlpClassificationBaseCdpRecord': return new ComplianceDlpClassificationBaseCdpRecord();
                case '#microsoft.graph.security.complianceDlpEndpointAuditRecord': return new ComplianceDlpEndpointAuditRecord();
                case '#microsoft.graph.security.complianceDlpEndpointDiscoveryAuditRecord': return new ComplianceDlpEndpointDiscoveryAuditRecord();
                case '#microsoft.graph.security.complianceDlpExchangeAuditRecord': return new ComplianceDlpExchangeAuditRecord();
                case '#microsoft.graph.security.complianceDlpExchangeClassificationAuditRecord': return new ComplianceDlpExchangeClassificationAuditRecord();
                case '#microsoft.graph.security.complianceDlpExchangeClassificationCdpRecord': return new ComplianceDlpExchangeClassificationCdpRecord();
                case '#microsoft.graph.security.complianceDlpExchangeDiscoveryAuditRecord': return new ComplianceDlpExchangeDiscoveryAuditRecord();
                case '#microsoft.graph.security.complianceDlpSharePointAuditRecord': return new ComplianceDlpSharePointAuditRecord();
                case '#microsoft.graph.security.complianceDlpSharePointClassificationAuditRecord': return new ComplianceDlpSharePointClassificationAuditRecord();
                case '#microsoft.graph.security.complianceDlpSharePointClassificationExtendedAuditRecord': return new ComplianceDlpSharePointClassificationExtendedAuditRecord();
                case '#microsoft.graph.security.complianceManagerActionRecord': return new ComplianceManagerActionRecord();
                case '#microsoft.graph.security.complianceSupervisionBaseAuditRecord': return new ComplianceSupervisionBaseAuditRecord();
                case '#microsoft.graph.security.complianceSupervisionExchangeAuditRecord': return new ComplianceSupervisionExchangeAuditRecord();
                case '#microsoft.graph.security.consumptionResourceAuditRecord': return new ConsumptionResourceAuditRecord();
                case '#microsoft.graph.security.copilotInteractionAuditRecord': return new CopilotInteractionAuditRecord();
                case '#microsoft.graph.security.coreReportingSettingsAuditRecord': return new CoreReportingSettingsAuditRecord();
                case '#microsoft.graph.security.cortanaBriefingAuditRecord': return new CortanaBriefingAuditRecord();
                case '#microsoft.graph.security.cpsCommonPolicyAuditRecord': return new CpsCommonPolicyAuditRecord();
                case '#microsoft.graph.security.cpsPolicyConfigAuditRecord': return new CpsPolicyConfigAuditRecord();
                case '#microsoft.graph.security.crmBaseAuditRecord': return new CrmBaseAuditRecord();
                case '#microsoft.graph.security.crmEntityOperationAuditRecord': return new CrmEntityOperationAuditRecord();
                case '#microsoft.graph.security.customerKeyServiceEncryptionAuditRecord': return new CustomerKeyServiceEncryptionAuditRecord();
                case '#microsoft.graph.security.dataCenterSecurityBaseAuditRecord': return new DataCenterSecurityBaseAuditRecord();
                case '#microsoft.graph.security.dataCenterSecurityCmdletAuditRecord': return new DataCenterSecurityCmdletAuditRecord();
                case '#microsoft.graph.security.dataGovernanceAuditRecord': return new DataGovernanceAuditRecord();
                case '#microsoft.graph.security.dataInsightsRestApiAuditRecord': return new DataInsightsRestApiAuditRecord();
                case '#microsoft.graph.security.dataLakeExportOperationAuditRecord': return new DataLakeExportOperationAuditRecord();
                case '#microsoft.graph.security.dataShareOperationAuditRecord': return new DataShareOperationAuditRecord();
                case '#microsoft.graph.security.defaultAuditData': return new DefaultAuditData();
                case '#microsoft.graph.security.defenderSecurityAlertBaseRecord': return new DefenderSecurityAlertBaseRecord();
                case '#microsoft.graph.security.deleteCertificateRecord': return new DeleteCertificateRecord();
                case '#microsoft.graph.security.disableConsentRecord': return new DisableConsentRecord();
                case '#microsoft.graph.security.discoveryAuditRecord': return new DiscoveryAuditRecord();
                case '#microsoft.graph.security.dlpEndpointAuditRecord': return new DlpEndpointAuditRecord();
                case '#microsoft.graph.security.dlpSensitiveInformationTypeCmdletRecord': return new DlpSensitiveInformationTypeCmdletRecord();
                case '#microsoft.graph.security.dlpSensitiveInformationTypeRulePackageCmdletRecord': return new DlpSensitiveInformationTypeRulePackageCmdletRecord();
                case '#microsoft.graph.security.downloadCertificateRecord': return new DownloadCertificateRecord();
                case '#microsoft.graph.security.dynamics365BusinessCentralAuditRecord': return new Dynamics365BusinessCentralAuditRecord();
                case '#microsoft.graph.security.enableConsentRecord': return new EnableConsentRecord();
                case '#microsoft.graph.security.epicSMSLinkRecord': return new EpicSMSLinkRecord();
                case '#microsoft.graph.security.epicSMSSettingsUpdateRecord': return new EpicSMSSettingsUpdateRecord();
                case '#microsoft.graph.security.epicSMSUnlinkRecord': return new EpicSMSUnlinkRecord();
                case '#microsoft.graph.security.exchangeAdminAuditRecord': return new ExchangeAdminAuditRecord();
                case '#microsoft.graph.security.exchangeAggregatedMailboxAuditRecord': return new ExchangeAggregatedMailboxAuditRecord();
                case '#microsoft.graph.security.exchangeAggregatedOperationRecord': return new ExchangeAggregatedOperationRecord();
                case '#microsoft.graph.security.exchangeMailboxAuditBaseRecord': return new ExchangeMailboxAuditBaseRecord();
                case '#microsoft.graph.security.exchangeMailboxAuditGroupRecord': return new ExchangeMailboxAuditGroupRecord();
                case '#microsoft.graph.security.exchangeMailboxAuditRecord': return new ExchangeMailboxAuditRecord();
                case '#microsoft.graph.security.fhirBaseUrlAddRecord': return new FhirBaseUrlAddRecord();
                case '#microsoft.graph.security.fhirBaseUrlApproveRecord': return new FhirBaseUrlApproveRecord();
                case '#microsoft.graph.security.fhirBaseUrlDeleteRecord': return new FhirBaseUrlDeleteRecord();
                case '#microsoft.graph.security.fhirBaseUrlUpdateRecord': return new FhirBaseUrlUpdateRecord();
                case '#microsoft.graph.security.healthcareSignalRecord': return new HealthcareSignalRecord();
                case '#microsoft.graph.security.hostedRpaAuditRecord': return new HostedRpaAuditRecord();
                case '#microsoft.graph.security.hrSignalAuditRecord': return new HrSignalAuditRecord();
                case '#microsoft.graph.security.hygieneEventRecord': return new HygieneEventRecord();
                case '#microsoft.graph.security.informationBarrierPolicyApplicationAuditRecord': return new InformationBarrierPolicyApplicationAuditRecord();
                case '#microsoft.graph.security.informationWorkerProtectionAuditRecord': return new InformationWorkerProtectionAuditRecord();
                case '#microsoft.graph.security.insiderRiskScopedUserInsightsRecord': return new InsiderRiskScopedUserInsightsRecord();
                case '#microsoft.graph.security.insiderRiskScopedUsersRecord': return new InsiderRiskScopedUsersRecord();
                case '#microsoft.graph.security.irmSecurityAlertRecord': return new IrmSecurityAlertRecord();
                case '#microsoft.graph.security.irmUserDefinedDetectionRecord': return new IrmUserDefinedDetectionRecord();
                case '#microsoft.graph.security.kaizalaAuditRecord': return new KaizalaAuditRecord();
                case '#microsoft.graph.security.labelAnalyticsAggregateAuditRecord': return new LabelAnalyticsAggregateAuditRecord();
                case '#microsoft.graph.security.labelContentExplorerAuditRecord': return new LabelContentExplorerAuditRecord();
                case '#microsoft.graph.security.largeContentMetadataAuditRecord': return new LargeContentMetadataAuditRecord();
                case '#microsoft.graph.security.m365ComplianceConnectorAuditRecord': return new M365ComplianceConnectorAuditRecord();
                case '#microsoft.graph.security.m365DAADAuditRecord': return new M365DAADAuditRecord();
                case '#microsoft.graph.security.mailSubmissionData': return new MailSubmissionData();
                case '#microsoft.graph.security.managedServicesAuditRecord': return new ManagedServicesAuditRecord();
                case '#microsoft.graph.security.managedTenantsAuditRecord': return new ManagedTenantsAuditRecord();
                case '#microsoft.graph.security.mapgAlertsAuditRecord': return new MapgAlertsAuditRecord();
                case '#microsoft.graph.security.mapgOnboardAuditRecord': return new MapgOnboardAuditRecord();
                case '#microsoft.graph.security.mapgPolicyAuditRecord': return new MapgPolicyAuditRecord();
                case '#microsoft.graph.security.mcasAlertsAuditRecord': return new McasAlertsAuditRecord();
                case '#microsoft.graph.security.mdaDataSecuritySignalRecord': return new MdaDataSecuritySignalRecord();
                case '#microsoft.graph.security.mdatpAuditRecord': return new MdatpAuditRecord();
                case '#microsoft.graph.security.mdcEventsRecord': return new MdcEventsRecord();
                case '#microsoft.graph.security.mdiAuditRecord': return new MdiAuditRecord();
                case '#microsoft.graph.security.meshWorldsAuditRecord': return new MeshWorldsAuditRecord();
                case '#microsoft.graph.security.microsoft365BackupBackupItemAuditRecord': return new Microsoft365BackupBackupItemAuditRecord();
                case '#microsoft.graph.security.microsoft365BackupBackupPolicyAuditRecord': return new Microsoft365BackupBackupPolicyAuditRecord();
                case '#microsoft.graph.security.microsoft365BackupRestoreItemAuditRecord': return new Microsoft365BackupRestoreItemAuditRecord();
                case '#microsoft.graph.security.microsoft365BackupRestoreTaskAuditRecord': return new Microsoft365BackupRestoreTaskAuditRecord();
                case '#microsoft.graph.security.microsoftDefenderExpertsBaseAuditRecord': return new MicrosoftDefenderExpertsBaseAuditRecord();
                case '#microsoft.graph.security.microsoftDefenderExpertsXDRAuditRecord': return new MicrosoftDefenderExpertsXDRAuditRecord();
                case '#microsoft.graph.security.microsoftFlowAuditRecord': return new MicrosoftFlowAuditRecord();
                case '#microsoft.graph.security.microsoftFormsAuditRecord': return new MicrosoftFormsAuditRecord();
                case '#microsoft.graph.security.microsoftGraphDataConnectConsent': return new MicrosoftGraphDataConnectConsent();
                case '#microsoft.graph.security.microsoftGraphDataConnectOperation': return new MicrosoftGraphDataConnectOperation();
                case '#microsoft.graph.security.microsoftPurviewDataMapOperationRecord': return new MicrosoftPurviewDataMapOperationRecord();
                case '#microsoft.graph.security.microsoftPurviewMetadataPolicyOperationRecord': return new MicrosoftPurviewMetadataPolicyOperationRecord();
                case '#microsoft.graph.security.microsoftPurviewPolicyOperationRecord': return new MicrosoftPurviewPolicyOperationRecord();
                case '#microsoft.graph.security.microsoftPurviewPrivacyAuditEvent': return new MicrosoftPurviewPrivacyAuditEvent();
                case '#microsoft.graph.security.microsoftStreamAuditRecord': return new MicrosoftStreamAuditRecord();
                case '#microsoft.graph.security.microsoftTeamsAdminAuditRecord': return new MicrosoftTeamsAdminAuditRecord();
                case '#microsoft.graph.security.microsoftTeamsAnalyticsAuditRecord': return new MicrosoftTeamsAnalyticsAuditRecord();
                case '#microsoft.graph.security.microsoftTeamsAuditRecord': return new MicrosoftTeamsAuditRecord();
                case '#microsoft.graph.security.microsoftTeamsDeviceAuditRecord': return new MicrosoftTeamsDeviceAuditRecord();
                case '#microsoft.graph.security.microsoftTeamsRetentionLabelActionAuditRecord': return new MicrosoftTeamsRetentionLabelActionAuditRecord();
                case '#microsoft.graph.security.microsoftTeamsSensitivityLabelActionAuditRecord': return new MicrosoftTeamsSensitivityLabelActionAuditRecord();
                case '#microsoft.graph.security.microsoftTeamsShiftsAuditRecord': return new MicrosoftTeamsShiftsAuditRecord();
                case '#microsoft.graph.security.mipAutoLabelExchangeItemAuditRecord': return new MipAutoLabelExchangeItemAuditRecord();
                case '#microsoft.graph.security.mipAutoLabelItemAuditRecord': return new MipAutoLabelItemAuditRecord();
                case '#microsoft.graph.security.mipAutoLabelPolicyAuditRecord': return new MipAutoLabelPolicyAuditRecord();
                case '#microsoft.graph.security.mipAutoLabelProgressFeedbackAuditRecord': return new MipAutoLabelProgressFeedbackAuditRecord();
                case '#microsoft.graph.security.mipAutoLabelSharePointItemAuditRecord': return new MipAutoLabelSharePointItemAuditRecord();
                case '#microsoft.graph.security.mipAutoLabelSharePointPolicyLocationAuditRecord': return new MipAutoLabelSharePointPolicyLocationAuditRecord();
                case '#microsoft.graph.security.mipAutoLabelSimulationSharePointCompletionRecord': return new MipAutoLabelSimulationSharePointCompletionRecord();
                case '#microsoft.graph.security.mipAutoLabelSimulationSharePointProgressRecord': return new MipAutoLabelSimulationSharePointProgressRecord();
                case '#microsoft.graph.security.mipAutoLabelSimulationStatisticsRecord': return new MipAutoLabelSimulationStatisticsRecord();
                case '#microsoft.graph.security.mipAutoLabelSimulationStatusRecord': return new MipAutoLabelSimulationStatusRecord();
                case '#microsoft.graph.security.mipExactDataMatchAuditRecord': return new MipExactDataMatchAuditRecord();
                case '#microsoft.graph.security.mipLabelAnalyticsAuditRecord': return new MipLabelAnalyticsAuditRecord();
                case '#microsoft.graph.security.mipLabelAuditRecord': return new MipLabelAuditRecord();
                case '#microsoft.graph.security.mS365DCustomDetectionAuditRecord': return new MS365DCustomDetectionAuditRecord();
                case '#microsoft.graph.security.mS365DIncidentAuditRecord': return new MS365DIncidentAuditRecord();
                case '#microsoft.graph.security.mS365DSuppressionRuleAuditRecord': return new MS365DSuppressionRuleAuditRecord();
                case '#microsoft.graph.security.msdeGeneralSettingsAuditRecord': return new MsdeGeneralSettingsAuditRecord();
                case '#microsoft.graph.security.msdeIndicatorsSettingsAuditRecord': return new MsdeIndicatorsSettingsAuditRecord();
                case '#microsoft.graph.security.msdeResponseActionsAuditRecord': return new MsdeResponseActionsAuditRecord();
                case '#microsoft.graph.security.msdeRolesSettingsAuditRecord': return new MsdeRolesSettingsAuditRecord();
                case '#microsoft.graph.security.msticNationStateNotificationRecord': return new MsticNationStateNotificationRecord();
                case '#microsoft.graph.security.multiStageDispositionAuditRecord': return new MultiStageDispositionAuditRecord();
                case '#microsoft.graph.security.myAnalyticsSettingsAuditRecord': return new MyAnalyticsSettingsAuditRecord();
                case '#microsoft.graph.security.officeNativeAuditRecord': return new OfficeNativeAuditRecord();
                case '#microsoft.graph.security.omePortalAuditRecord': return new OmePortalAuditRecord();
                case '#microsoft.graph.security.oneDriveAuditRecord': return new OneDriveAuditRecord();
                case '#microsoft.graph.security.onPremisesFileShareScannerDlpAuditRecord': return new OnPremisesFileShareScannerDlpAuditRecord();
                case '#microsoft.graph.security.onPremisesScannerDlpAuditRecord': return new OnPremisesScannerDlpAuditRecord();
                case '#microsoft.graph.security.onPremisesSharePointScannerDlpAuditRecord': return new OnPremisesSharePointScannerDlpAuditRecord();
                case '#microsoft.graph.security.owaGetAccessTokenForResourceAuditRecord': return new OwaGetAccessTokenForResourceAuditRecord();
                case '#microsoft.graph.security.peopleAdminSettingsAuditRecord': return new PeopleAdminSettingsAuditRecord();
                case '#microsoft.graph.security.physicalBadgingSignalAuditRecord': return new PhysicalBadgingSignalAuditRecord();
                case '#microsoft.graph.security.plannerCopyPlanAuditRecord': return new PlannerCopyPlanAuditRecord();
                case '#microsoft.graph.security.plannerPlanAuditRecord': return new PlannerPlanAuditRecord();
                case '#microsoft.graph.security.plannerPlanListAuditRecord': return new PlannerPlanListAuditRecord();
                case '#microsoft.graph.security.plannerRosterAuditRecord': return new PlannerRosterAuditRecord();
                case '#microsoft.graph.security.plannerRosterSensitivityLabelAuditRecord': return new PlannerRosterSensitivityLabelAuditRecord();
                case '#microsoft.graph.security.plannerTaskAuditRecord': return new PlannerTaskAuditRecord();
                case '#microsoft.graph.security.plannerTaskListAuditRecord': return new PlannerTaskListAuditRecord();
                case '#microsoft.graph.security.plannerTenantSettingsAuditRecord': return new PlannerTenantSettingsAuditRecord();
                case '#microsoft.graph.security.powerAppsAuditAppRecord': return new PowerAppsAuditAppRecord();
                case '#microsoft.graph.security.powerAppsAuditPlanRecord': return new PowerAppsAuditPlanRecord();
                case '#microsoft.graph.security.powerAppsAuditResourceRecord': return new PowerAppsAuditResourceRecord();
                case '#microsoft.graph.security.powerBiAuditRecord': return new PowerBiAuditRecord();
                case '#microsoft.graph.security.powerBiDlpAuditRecord': return new PowerBiDlpAuditRecord();
                case '#microsoft.graph.security.powerPagesSiteAuditRecord': return new PowerPagesSiteAuditRecord();
                case '#microsoft.graph.security.powerPlatformAdminDlpAuditRecord': return new PowerPlatformAdminDlpAuditRecord();
                case '#microsoft.graph.security.powerPlatformAdminEnvironmentAuditRecord': return new PowerPlatformAdminEnvironmentAuditRecord();
                case '#microsoft.graph.security.powerPlatformAdministratorActivityRecord': return new PowerPlatformAdministratorActivityRecord();
                case '#microsoft.graph.security.powerPlatformLockboxResourceAccessRequestAuditRecord': return new PowerPlatformLockboxResourceAccessRequestAuditRecord();
                case '#microsoft.graph.security.powerPlatformLockboxResourceCommandAuditRecord': return new PowerPlatformLockboxResourceCommandAuditRecord();
                case '#microsoft.graph.security.powerPlatformServiceActivityAuditRecord': return new PowerPlatformServiceActivityAuditRecord();
                case '#microsoft.graph.security.privacyDataMatchAuditRecord': return new PrivacyDataMatchAuditRecord();
                case '#microsoft.graph.security.privacyDataMinimizationRecord': return new PrivacyDataMinimizationRecord();
                case '#microsoft.graph.security.privacyDigestEmailRecord': return new PrivacyDigestEmailRecord();
                case '#microsoft.graph.security.privacyOpenAccessAuditRecord': return new PrivacyOpenAccessAuditRecord();
                case '#microsoft.graph.security.privacyPortalAuditRecord': return new PrivacyPortalAuditRecord();
                case '#microsoft.graph.security.privacyRemediationActionRecord': return new PrivacyRemediationActionRecord();
                case '#microsoft.graph.security.privacyRemediationRecord': return new PrivacyRemediationRecord();
                case '#microsoft.graph.security.privacyTenantAuditHistoryRecord': return new PrivacyTenantAuditHistoryRecord();
                case '#microsoft.graph.security.projectAuditRecord': return new ProjectAuditRecord();
                case '#microsoft.graph.security.projectForTheWebAssignedToMeSettingsAuditRecord': return new ProjectForTheWebAssignedToMeSettingsAuditRecord();
                case '#microsoft.graph.security.projectForTheWebProjectAuditRecord': return new ProjectForTheWebProjectAuditRecord();
                case '#microsoft.graph.security.projectForTheWebProjectSettingsAuditRecord': return new ProjectForTheWebProjectSettingsAuditRecord();
                case '#microsoft.graph.security.projectForTheWebRoadmapAuditRecord': return new ProjectForTheWebRoadmapAuditRecord();
                case '#microsoft.graph.security.projectForTheWebRoadmapItemAuditRecord': return new ProjectForTheWebRoadmapItemAuditRecord();
                case '#microsoft.graph.security.projectForTheWebRoadmapSettingsAuditRecord': return new ProjectForTheWebRoadmapSettingsAuditRecord();
                case '#microsoft.graph.security.projectForTheWebTaskAuditRecord': return new ProjectForTheWebTaskAuditRecord();
                case '#microsoft.graph.security.publicFolderAuditRecord': return new PublicFolderAuditRecord();
                case '#microsoft.graph.security.purviewInsiderRiskAlertsRecord': return new PurviewInsiderRiskAlertsRecord();
                case '#microsoft.graph.security.purviewInsiderRiskCasesRecord': return new PurviewInsiderRiskCasesRecord();
                case '#microsoft.graph.security.quarantineAuditRecord': return new QuarantineAuditRecord();
                case '#microsoft.graph.security.recordsManagementAuditRecord': return new RecordsManagementAuditRecord();
                case '#microsoft.graph.security.retentionPolicyAuditRecord': return new RetentionPolicyAuditRecord();
                case '#microsoft.graph.security.scoreEvidence': return new ScoreEvidence();
                case '#microsoft.graph.security.scorePlatformGenericAuditRecord': return new ScorePlatformGenericAuditRecord();
                case '#microsoft.graph.security.scriptRunAuditRecord': return new ScriptRunAuditRecord();
                case '#microsoft.graph.security.searchAuditRecord': return new SearchAuditRecord();
                case '#microsoft.graph.security.securityComplianceAlertRecord': return new SecurityComplianceAlertRecord();
                case '#microsoft.graph.security.securityComplianceCenterEOPCmdletAuditRecord': return new SecurityComplianceCenterEOPCmdletAuditRecord();
                case '#microsoft.graph.security.securityComplianceInsightsAuditRecord': return new SecurityComplianceInsightsAuditRecord();
                case '#microsoft.graph.security.securityComplianceRBACAuditRecord': return new SecurityComplianceRBACAuditRecord();
                case '#microsoft.graph.security.securityComplianceUserChangeAuditRecord': return new SecurityComplianceUserChangeAuditRecord();
                case '#microsoft.graph.security.sharePointAppPermissionOperationAuditRecord': return new SharePointAppPermissionOperationAuditRecord();
                case '#microsoft.graph.security.sharePointAuditRecord': return new SharePointAuditRecord();
                case '#microsoft.graph.security.sharePointCommentOperationAuditRecord': return new SharePointCommentOperationAuditRecord();
                case '#microsoft.graph.security.sharePointContentTypeOperationAuditRecord': return new SharePointContentTypeOperationAuditRecord();
                case '#microsoft.graph.security.sharePointESignatureAuditRecord': return new SharePointESignatureAuditRecord();
                case '#microsoft.graph.security.sharePointFieldOperationAuditRecord': return new SharePointFieldOperationAuditRecord();
                case '#microsoft.graph.security.sharePointFileOperationAuditRecord': return new SharePointFileOperationAuditRecord();
                case '#microsoft.graph.security.sharePointListOperationAuditRecord': return new SharePointListOperationAuditRecord();
                case '#microsoft.graph.security.sharePointSharingOperationAuditRecord': return new SharePointSharingOperationAuditRecord();
                case '#microsoft.graph.security.skypeForBusinessBaseAuditRecord': return new SkypeForBusinessBaseAuditRecord();
                case '#microsoft.graph.security.skypeForBusinessCmdletsAuditRecord': return new SkypeForBusinessCmdletsAuditRecord();
                case '#microsoft.graph.security.skypeForBusinessPSTNUsageAuditRecord': return new SkypeForBusinessPSTNUsageAuditRecord();
                case '#microsoft.graph.security.skypeForBusinessUsersBlockedAuditRecord': return new SkypeForBusinessUsersBlockedAuditRecord();
                case '#microsoft.graph.security.smsCreatePhoneNumberRecord': return new SmsCreatePhoneNumberRecord();
                case '#microsoft.graph.security.smsDeletePhoneNumberRecord': return new SmsDeletePhoneNumberRecord();
                case '#microsoft.graph.security.supervisoryReviewDayXInsightsAuditRecord': return new SupervisoryReviewDayXInsightsAuditRecord();
                case '#microsoft.graph.security.syntheticProbeAuditRecord': return new SyntheticProbeAuditRecord();
                case '#microsoft.graph.security.teamsEasyApprovalsAuditRecord': return new TeamsEasyApprovalsAuditRecord();
                case '#microsoft.graph.security.teamsHealthcareAuditRecord': return new TeamsHealthcareAuditRecord();
                case '#microsoft.graph.security.teamsUpdatesAuditRecord': return new TeamsUpdatesAuditRecord();
                case '#microsoft.graph.security.tenantAllowBlockListAuditRecord': return new TenantAllowBlockListAuditRecord();
                case '#microsoft.graph.security.threatFinderAuditRecord': return new ThreatFinderAuditRecord();
                case '#microsoft.graph.security.threatIntelligenceAtpContentData': return new ThreatIntelligenceAtpContentData();
                case '#microsoft.graph.security.threatIntelligenceMailData': return new ThreatIntelligenceMailData();
                case '#microsoft.graph.security.threatIntelligenceUrlClickData': return new ThreatIntelligenceUrlClickData();
                case '#microsoft.graph.security.todoAuditRecord': return new TodoAuditRecord();
                case '#microsoft.graph.security.uamOperationAuditRecord': return new UamOperationAuditRecord();
                case '#microsoft.graph.security.unifiedGroupAuditRecord': return new UnifiedGroupAuditRecord();
                case '#microsoft.graph.security.unifiedSimulationMatchedItemAuditRecord': return new UnifiedSimulationMatchedItemAuditRecord();
                case '#microsoft.graph.security.unifiedSimulationSummaryAuditRecord': return new UnifiedSimulationSummaryAuditRecord();
                case '#microsoft.graph.security.uploadCertificateRecord': return new UploadCertificateRecord();
                case '#microsoft.graph.security.urbacAssignmentAuditRecord': return new UrbacAssignmentAuditRecord();
                case '#microsoft.graph.security.urbacEnableStateAuditRecord': return new UrbacEnableStateAuditRecord();
                case '#microsoft.graph.security.urbacRoleAuditRecord': return new UrbacRoleAuditRecord();
                case '#microsoft.graph.security.userTrainingAuditRecord': return new UserTrainingAuditRecord();
                case '#microsoft.graph.security.vfamBasePolicyAuditRecord': return new VfamBasePolicyAuditRecord();
                case '#microsoft.graph.security.vfamCreatePolicyAuditRecord': return new VfamCreatePolicyAuditRecord();
                case '#microsoft.graph.security.vfamDeletePolicyAuditRecord': return new VfamDeletePolicyAuditRecord();
                case '#microsoft.graph.security.vfamUpdatePolicyAuditRecord': return new VfamUpdatePolicyAuditRecord();
                case '#microsoft.graph.security.vivaGoalsAuditRecord': return new VivaGoalsAuditRecord();
                case '#microsoft.graph.security.vivaLearningAdminAuditRecord': return new VivaLearningAdminAuditRecord();
                case '#microsoft.graph.security.vivaLearningAuditRecord': return new VivaLearningAuditRecord();
                case '#microsoft.graph.security.vivaPulseAdminAuditRecord': return new VivaPulseAdminAuditRecord();
                case '#microsoft.graph.security.vivaPulseOrganizerAuditRecord': return new VivaPulseOrganizerAuditRecord();
                case '#microsoft.graph.security.vivaPulseReportAuditRecord': return new VivaPulseReportAuditRecord();
                case '#microsoft.graph.security.vivaPulseResponseAuditRecord': return new VivaPulseResponseAuditRecord();
                case '#microsoft.graph.security.wdatpAlertsAuditRecord': return new WdatpAlertsAuditRecord();
                case '#microsoft.graph.security.windows365CustomerLockboxAuditRecord': return new Windows365CustomerLockboxAuditRecord();
                case '#microsoft.graph.security.workplaceAnalyticsAuditRecord': return new WorkplaceAnalyticsAuditRecord();
                case '#microsoft.graph.security.yammerAuditRecord': return new YammerAuditRecord();
            }
        }
        return new AuditData();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        $val = $this->getBackingStore()->get('additionalData');
        if (is_null($val) || is_array($val)) {
            /** @var array<string, mixed>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'additionalData'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ];
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        $val = $this->getBackingStore()->get('odataType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'odataType'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
