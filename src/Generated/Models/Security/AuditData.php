<?php

namespace Microsoft\Graph\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

/**
 * Abstract base type for audit event data.
*/
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
                case '#microsoft.graph.security.a365AiExecuteTool': return new A365AiExecuteTool();
                case '#microsoft.graph.security.a365AiInferenceCall': return new A365AiInferenceCall();
                case '#microsoft.graph.security.a365AiInvokeAgent': return new A365AiInvokeAgent();
                case '#microsoft.graph.security.a365AiRunSummary': return new A365AiRunSummary();
                case '#microsoft.graph.security.a365SpanOutputs': return new A365SpanOutputs();
                case '#microsoft.graph.security.aadRiskDetectionAuditRecord': return new AadRiskDetectionAuditRecord();
                case '#microsoft.graph.security.aedAuditRecord': return new AedAuditRecord();
                case '#microsoft.graph.security.agentAdminActivityRecord': return new AgentAdminActivityRecord();
                case '#microsoft.graph.security.agentSettingAdminActivity': return new AgentSettingAdminActivity();
                case '#microsoft.graph.security.aiAppInteractionAuditRecord': return new AiAppInteractionAuditRecord();
                case '#microsoft.graph.security.aiExecuteToolAuditRecord': return new AiExecuteToolAuditRecord();
                case '#microsoft.graph.security.aiInteractionsChangeNotificationAuditRecord': return new AiInteractionsChangeNotificationAuditRecord();
                case '#microsoft.graph.security.aiInteractionsExportAuditRecord': return new AiInteractionsExportAuditRecord();
                case '#microsoft.graph.security.aiInteractionsSubscriptionAuditRecord': return new AiInteractionsSubscriptionAuditRecord();
                case '#microsoft.graph.security.aiInvokeAgentAuditRecord': return new AiInvokeAgentAuditRecord();
                case '#microsoft.graph.security.aipDiscover': return new AipDiscover();
                case '#microsoft.graph.security.aipFileDeleted': return new AipFileDeleted();
                case '#microsoft.graph.security.aipHeartBeat': return new AipHeartBeat();
                case '#microsoft.graph.security.aipProtectionActionLogRequest': return new AipProtectionActionLogRequest();
                case '#microsoft.graph.security.aipScannerDiscoverEvent': return new AipScannerDiscoverEvent();
                case '#microsoft.graph.security.aipSensitivityLabelActionLogRequest': return new AipSensitivityLabelActionLogRequest();
                case '#microsoft.graph.security.airAdminActionInvestigationData': return new AirAdminActionInvestigationData();
                case '#microsoft.graph.security.airInvestigationData': return new AirInvestigationData();
                case '#microsoft.graph.security.airManualInvestigationData': return new AirManualInvestigationData();
                case '#microsoft.graph.security.aISpanOutputsAuditRecord': return new AISpanOutputsAuditRecord();
                case '#microsoft.graph.security.alertSubmissionAuditRecord': return new AlertSubmissionAuditRecord();
                case '#microsoft.graph.security.alertSubmissionResultDetailAuditRecord': return new AlertSubmissionResultDetailAuditRecord();
                case '#microsoft.graph.security.attackSimAdminAuditRecord': return new AttackSimAdminAuditRecord();
                case '#microsoft.graph.security.attackSimAuditRecord': return new AttackSimAuditRecord();
                case '#microsoft.graph.security.auditConfigAuditRecord': return new AuditConfigAuditRecord();
                case '#microsoft.graph.security.auditSearchAuditRecord': return new AuditSearchAuditRecord();
                case '#microsoft.graph.security.azfwApplicationRuleAggregationEventRecord': return new AzfwApplicationRuleAggregationEventRecord();
                case '#microsoft.graph.security.azfwDnsQueryEventRecord': return new AzfwDnsQueryEventRecord();
                case '#microsoft.graph.security.azfwNetworkRuleEventRecord': return new AzfwNetworkRuleEventRecord();
                case '#microsoft.graph.security.azureActiveDirectoryAccountLogonAuditRecord': return new AzureActiveDirectoryAccountLogonAuditRecord();
                case '#microsoft.graph.security.azureActiveDirectoryAuditRecord': return new AzureActiveDirectoryAuditRecord();
                case '#microsoft.graph.security.azureActiveDirectoryStsLogonAuditRecord': return new AzureActiveDirectoryStsLogonAuditRecord();
                case '#microsoft.graph.security.azureAISearchAuditRecord': return new AzureAISearchAuditRecord();
                case '#microsoft.graph.security.campaignAuditRecord': return new CampaignAuditRecord();
                case '#microsoft.graph.security.ccraiPolicyViolationRecord': return new CcraiPolicyViolationRecord();
                case '#microsoft.graph.security.cdpClassifierHealthRecord': return new CdpClassifierHealthRecord();
                case '#microsoft.graph.security.cdpColdCrawlStatusRecord': return new CdpColdCrawlStatusRecord();
                case '#microsoft.graph.security.cdpConsumptionResourceRecord': return new CdpConsumptionResourceRecord();
                case '#microsoft.graph.security.cdpContentExplorerAggregateRecord': return new CdpContentExplorerAggregateRecord();
                case '#microsoft.graph.security.cdpdlmaiInteractionInsightsRecord': return new CdpdlmaiInteractionInsightsRecord();
                case '#microsoft.graph.security.cdpDlpSensitiveEndpointAuditRecord': return new CdpDlpSensitiveEndpointAuditRecord();
                case '#microsoft.graph.security.cdpLogRecord': return new CdpLogRecord();
                case '#microsoft.graph.security.cdpOcrBillingRecord': return new CdpOcrBillingRecord();
                case '#microsoft.graph.security.cdpResourceScopeChangeEventRecord': return new CdpResourceScopeChangeEventRecord();
                case '#microsoft.graph.security.cloudUpdateDeviceConfigAuditRecord': return new CloudUpdateDeviceConfigAuditRecord();
                case '#microsoft.graph.security.cloudUpdateProfileConfigAuditRecord': return new CloudUpdateProfileConfigAuditRecord();
                case '#microsoft.graph.security.cloudUpdateTenantConfigAuditRecord': return new CloudUpdateTenantConfigAuditRecord();
                case '#microsoft.graph.security.complianceConnectorAuditRecord': return new ComplianceConnectorAuditRecord();
                case '#microsoft.graph.security.complianceDLMExchangeAuditRecord': return new ComplianceDLMExchangeAuditRecord();
                case '#microsoft.graph.security.complianceDLMSharePointAuditRecord': return new ComplianceDLMSharePointAuditRecord();
                case '#microsoft.graph.security.complianceDLPApplicationsAuditRecord': return new ComplianceDLPApplicationsAuditRecord();
                case '#microsoft.graph.security.complianceDLPApplicationsClassificationAuditRecord': return new ComplianceDLPApplicationsClassificationAuditRecord();
                case '#microsoft.graph.security.complianceDLPEndpointAuditRecord': return new ComplianceDLPEndpointAuditRecord();
                case '#microsoft.graph.security.complianceDLPEndpointDiscoveryAuditRecord': return new ComplianceDLPEndpointDiscoveryAuditRecord();
                case '#microsoft.graph.security.complianceDLPEnforcementAuditRecord': return new ComplianceDLPEnforcementAuditRecord();
                case '#microsoft.graph.security.complianceDLPExchangeAuditRecord': return new ComplianceDLPExchangeAuditRecord();
                case '#microsoft.graph.security.complianceDLPExchangeClassificationAuditRecord': return new ComplianceDLPExchangeClassificationAuditRecord();
                case '#microsoft.graph.security.complianceDLPExchangeClassificationCdpRecord': return new ComplianceDLPExchangeClassificationCdpRecord();
                case '#microsoft.graph.security.complianceDLPExchangeDiscoveryAuditRecord': return new ComplianceDLPExchangeDiscoveryAuditRecord();
                case '#microsoft.graph.security.complianceDLPSharePointAuditRecord': return new ComplianceDLPSharePointAuditRecord();
                case '#microsoft.graph.security.complianceDLPSharePointClassificationAuditRecord': return new ComplianceDLPSharePointClassificationAuditRecord();
                case '#microsoft.graph.security.complianceDLPSharePointClassificationCdpRecord': return new ComplianceDLPSharePointClassificationCdpRecord();
                case '#microsoft.graph.security.complianceDLPSharePointClassificationExtendedAuditRecord': return new ComplianceDLPSharePointClassificationExtendedAuditRecord();
                case '#microsoft.graph.security.complianceExchangeOcrAuditRecord': return new ComplianceExchangeOcrAuditRecord();
                case '#microsoft.graph.security.complianceManagerActionRecord': return new ComplianceManagerActionRecord();
                case '#microsoft.graph.security.compliancePolicyGradingSharePointAuditRecord': return new CompliancePolicyGradingSharePointAuditRecord();
                case '#microsoft.graph.security.complianceSettingsChangeAuditRecord': return new ComplianceSettingsChangeAuditRecord();
                case '#microsoft.graph.security.complianceSitGradingSharePointAuditRecord': return new ComplianceSitGradingSharePointAuditRecord();
                case '#microsoft.graph.security.complianceSupervisionExchangeAuditRecord': return new ComplianceSupervisionExchangeAuditRecord();
                case '#microsoft.graph.security.connectedAIAppInteractionAuditRecord': return new ConnectedAIAppInteractionAuditRecord();
                case '#microsoft.graph.security.consumptionResourceAuditRecord': return new ConsumptionResourceAuditRecord();
                case '#microsoft.graph.security.contentStoreMetadataRecord': return new ContentStoreMetadataRecord();
                case '#microsoft.graph.security.copilotAgentManagementAuditRecord': return new CopilotAgentManagementAuditRecord();
                case '#microsoft.graph.security.copilotForSecurityLoggingAuditRecord': return new CopilotForSecurityLoggingAuditRecord();
                case '#microsoft.graph.security.copilotForSecurityTriggerAuditRecord': return new CopilotForSecurityTriggerAuditRecord();
                case '#microsoft.graph.security.copilotInteractionAuditRecord': return new CopilotInteractionAuditRecord();
                case '#microsoft.graph.security.copilotPluginSettingAuditRecord': return new CopilotPluginSettingAuditRecord();
                case '#microsoft.graph.security.copilotPromptBookSettingAuditRecord': return new CopilotPromptBookSettingAuditRecord();
                case '#microsoft.graph.security.copilotSessionSharingAuditRecord': return new CopilotSessionSharingAuditRecord();
                case '#microsoft.graph.security.copilotSettingAuditRecord': return new CopilotSettingAuditRecord();
                case '#microsoft.graph.security.copilotWorkspaceSettingAuditRecord': return new CopilotWorkspaceSettingAuditRecord();
                case '#microsoft.graph.security.coreReportingSettingsAuditRecord': return new CoreReportingSettingsAuditRecord();
                case '#microsoft.graph.security.cortanaBriefingAuditRecord': return new CortanaBriefingAuditRecord();
                case '#microsoft.graph.security.criticalAssetManagementClassificationRecord': return new CriticalAssetManagementClassificationRecord();
                case '#microsoft.graph.security.crmEntityOperationAuditRecord': return new CrmEntityOperationAuditRecord();
                case '#microsoft.graph.security.crossTenantAccessPolicyAuditRecord': return new CrossTenantAccessPolicyAuditRecord();
                case '#microsoft.graph.security.customerKeyServiceEncryptionAuditRecord': return new CustomerKeyServiceEncryptionAuditRecord();
                case '#microsoft.graph.security.dataCenterSecurityCmdletAuditRecord': return new DataCenterSecurityCmdletAuditRecord();
                case '#microsoft.graph.security.dataGovernanceAuditRecord': return new DataGovernanceAuditRecord();
                case '#microsoft.graph.security.dataInsightsRestApiAuditRecord': return new DataInsightsRestApiAuditRecord();
                case '#microsoft.graph.security.dataLakeExportOperationAuditRecord': return new DataLakeExportOperationAuditRecord();
                case '#microsoft.graph.security.dataSecurityInvestigationAuditRecord': return new DataSecurityInvestigationAuditRecord();
                case '#microsoft.graph.security.dataShareOperationAuditRecord': return new DataShareOperationAuditRecord();
                case '#microsoft.graph.security.defaultAuditData': return new DefaultAuditData();
                case '#microsoft.graph.security.defenderCaseManagementAuditRecord': return new DefenderCaseManagementAuditRecord();
                case '#microsoft.graph.security.defenderPreviewFeaturesRecord': return new DefenderPreviewFeaturesRecord();
                case '#microsoft.graph.security.defenderSecurityForAIConfigurationAuditRecord': return new DefenderSecurityForAIConfigurationAuditRecord();
                case '#microsoft.graph.security.deployFeatureActivityRecord': return new DeployFeatureActivityRecord();
                case '#microsoft.graph.security.deviceDiscoverySettingsAuthenticatedScansRecord': return new DeviceDiscoverySettingsAuthenticatedScansRecord();
                case '#microsoft.graph.security.deviceDiscoverySettingsExclusionRecord': return new DeviceDiscoverySettingsExclusionRecord();
                case '#microsoft.graph.security.deviceDiscoverySettingsRecord': return new DeviceDiscoverySettingsRecord();
                case '#microsoft.graph.security.discoveryAuditRecord': return new DiscoveryAuditRecord();
                case '#microsoft.graph.security.dlpEndpointAuditRecord': return new DlpEndpointAuditRecord();
                case '#microsoft.graph.security.dlpImportResultAuditRecord': return new DlpImportResultAuditRecord();
                case '#microsoft.graph.security.dlpSensitiveInformationTypeRulePackageCmdletRecord': return new DlpSensitiveInformationTypeRulePackageCmdletRecord();
                case '#microsoft.graph.security.dragonCopilotAccessRecord': return new DragonCopilotAccessRecord();
                case '#microsoft.graph.security.dragonCopilotAdminRecord': return new DragonCopilotAdminRecord();
                case '#microsoft.graph.security.dragonCopilotClinicalDataRecord': return new DragonCopilotClinicalDataRecord();
                case '#microsoft.graph.security.dragonCopilotSessionRecord': return new DragonCopilotSessionRecord();
                case '#microsoft.graph.security.dynamics365BusinessCentralAuditRecord': return new Dynamics365BusinessCentralAuditRecord();
                case '#microsoft.graph.security.ehrConnectorAuditBaseRecord': return new EhrConnectorAuditBaseRecord();
                case '#microsoft.graph.security.eopSubmissionFeedEntityAuditRecord': return new EopSubmissionFeedEntityAuditRecord();
                case '#microsoft.graph.security.exchangeAdminAuditRecord': return new ExchangeAdminAuditRecord();
                case '#microsoft.graph.security.exchangeAggregatedMailboxAuditRecord': return new ExchangeAggregatedMailboxAuditRecord();
                case '#microsoft.graph.security.exchangeAggregatedOperationRecord': return new ExchangeAggregatedOperationRecord();
                case '#microsoft.graph.security.exchangeMailboxAuditGroupRecord': return new ExchangeMailboxAuditGroupRecord();
                case '#microsoft.graph.security.exchangeMailboxAuditRecord': return new ExchangeMailboxAuditRecord();
                case '#microsoft.graph.security.fabricAuditRecord': return new FabricAuditRecord();
                case '#microsoft.graph.security.fabricPolicyRecord': return new FabricPolicyRecord();
                case '#microsoft.graph.security.healthcareSignalRecord': return new HealthcareSignalRecord();
                case '#microsoft.graph.security.hostedRpaAuditRecord': return new HostedRpaAuditRecord();
                case '#microsoft.graph.security.hrSignalAuditRecord': return new HrSignalAuditRecord();
                case '#microsoft.graph.security.hygieneEventRecord': return new HygieneEventRecord();
                case '#microsoft.graph.security.informationBarrierPolicyApplicationAuditRecord': return new InformationBarrierPolicyApplicationAuditRecord();
                case '#microsoft.graph.security.informationWorkerProtectionAuditRecord': return new InformationWorkerProtectionAuditRecord();
                case '#microsoft.graph.security.insiderRiskScopedUserInsightsRecord': return new InsiderRiskScopedUserInsightsRecord();
                case '#microsoft.graph.security.insiderRiskScopedUsersRecord': return new InsiderRiskScopedUsersRecord();
                case '#microsoft.graph.security.integratedAppsAppAdminActivityAuditRecord': return new IntegratedAppsAppAdminActivityAuditRecord();
                case '#microsoft.graph.security.integratedAppsAppSettingsAdminActivityAuditRecord': return new IntegratedAppsAppSettingsAdminActivityAuditRecord();
                case '#microsoft.graph.security.irmActivityAuditTrailRecord': return new IrmActivityAuditTrailRecord();
                case '#microsoft.graph.security.irmUserDefinedDetectionRecord': return new IrmUserDefinedDetectionRecord();
                case '#microsoft.graph.security.kaizalaAuditRecord': return new KaizalaAuditRecord();
                case '#microsoft.graph.security.labelAnalyticsAggregateAuditRecord': return new LabelAnalyticsAggregateAuditRecord();
                case '#microsoft.graph.security.labelContentExplorerAuditRecord': return new LabelContentExplorerAuditRecord();
                case '#microsoft.graph.security.largeContentMetadataAuditRecord': return new LargeContentMetadataAuditRecord();
                case '#microsoft.graph.security.m365ComplianceConnectorAuditRecord': return new M365ComplianceConnectorAuditRecord();
                case '#microsoft.graph.security.m365daadAuditRecord': return new M365daadAuditRecord();
                case '#microsoft.graph.security.m365odspAssetMetadataRecord': return new M365odspAssetMetadataRecord();
                case '#microsoft.graph.security.m365SearchSectionsRecord': return new M365SearchSectionsRecord();
                case '#microsoft.graph.security.mailSubmissionData': return new MailSubmissionData();
                case '#microsoft.graph.security.managedServicesAuditRecord': return new ManagedServicesAuditRecord();
                case '#microsoft.graph.security.managedTenantsAuditRecord': return new ManagedTenantsAuditRecord();
                case '#microsoft.graph.security.mapgAlertsAuditRecord': return new MapgAlertsAuditRecord();
                case '#microsoft.graph.security.mapgOnboardAuditRecord': return new MapgOnboardAuditRecord();
                case '#microsoft.graph.security.mapgPolicyAuditRecord': return new MapgPolicyAuditRecord();
                case '#microsoft.graph.security.mapgRemediationAuditRecord': return new MapgRemediationAuditRecord();
                case '#microsoft.graph.security.mcasAlertsAuditRecord': return new McasAlertsAuditRecord();
                case '#microsoft.graph.security.mdaAuditRecord': return new MdaAuditRecord();
                case '#microsoft.graph.security.mdaDataSecuritySignalRecord': return new MdaDataSecuritySignalRecord();
                case '#microsoft.graph.security.mDASHAuditRecord': return new MDASHAuditRecord();
                case '#microsoft.graph.security.mdatpAuditRecord': return new MdatpAuditRecord();
                case '#microsoft.graph.security.mdcEventsRecord': return new MdcEventsRecord();
                case '#microsoft.graph.security.mdiAuditRecord': return new MdiAuditRecord();
                case '#microsoft.graph.security.meshWorldsAuditRecord': return new MeshWorldsAuditRecord();
                case '#microsoft.graph.security.microsoft365BackupBackupItemAuditRecord': return new Microsoft365BackupBackupItemAuditRecord();
                case '#microsoft.graph.security.microsoft365BackupBackupPolicyAuditRecord': return new Microsoft365BackupBackupPolicyAuditRecord();
                case '#microsoft.graph.security.microsoft365BackupGranularBrowseTaskAuditRecord': return new Microsoft365BackupGranularBrowseTaskAuditRecord();
                case '#microsoft.graph.security.microsoft365BackupRestoreItemAuditRecord': return new Microsoft365BackupRestoreItemAuditRecord();
                case '#microsoft.graph.security.microsoft365BackupRestoreTaskAuditRecord': return new Microsoft365BackupRestoreTaskAuditRecord();
                case '#microsoft.graph.security.microsoft365CopilotScheduledPromptAuditRecord': return new Microsoft365CopilotScheduledPromptAuditRecord();
                case '#microsoft.graph.security.microsoftDefenderExpertsXDRAuditRecord': return new MicrosoftDefenderExpertsXDRAuditRecord();
                case '#microsoft.graph.security.microsoftFlowAuditRecord': return new MicrosoftFlowAuditRecord();
                case '#microsoft.graph.security.microsoftFormsAuditRecord': return new MicrosoftFormsAuditRecord();
                case '#microsoft.graph.security.microsoftGraphDataConnectConsent': return new MicrosoftGraphDataConnectConsent();
                case '#microsoft.graph.security.microsoftGraphDataConnectOperation': return new MicrosoftGraphDataConnectOperation();
                case '#microsoft.graph.security.microsoftPurviewDataCatalogOperationRecord': return new MicrosoftPurviewDataCatalogOperationRecord();
                case '#microsoft.graph.security.microsoftPurviewDataMapOperationRecord': return new MicrosoftPurviewDataMapOperationRecord();
                case '#microsoft.graph.security.microsoftPurviewMetadataPolicyOperationRecord': return new MicrosoftPurviewMetadataPolicyOperationRecord();
                case '#microsoft.graph.security.microsoftPurviewPolicyOperationRecord': return new MicrosoftPurviewPolicyOperationRecord();
                case '#microsoft.graph.security.microsoftPurviewPrivacyAuditEvent': return new MicrosoftPurviewPrivacyAuditEvent();
                case '#microsoft.graph.security.microsoftPurviewUnifiedCatalogOperationRecord': return new MicrosoftPurviewUnifiedCatalogOperationRecord();
                case '#microsoft.graph.security.microsoftStreamAuditRecord': return new MicrosoftStreamAuditRecord();
                case '#microsoft.graph.security.microsoftTeamsAdminAuditRecord': return new MicrosoftTeamsAdminAuditRecord();
                case '#microsoft.graph.security.microsoftTeamsAnalyticsAuditRecord': return new MicrosoftTeamsAnalyticsAuditRecord();
                case '#microsoft.graph.security.microsoftTeamsAuditRecord': return new MicrosoftTeamsAuditRecord();
                case '#microsoft.graph.security.microsoftTeamsDeviceAuditRecord': return new MicrosoftTeamsDeviceAuditRecord();
                case '#microsoft.graph.security.microsoftTeamsRetentionLabelActionAuditRecord': return new MicrosoftTeamsRetentionLabelActionAuditRecord();
                case '#microsoft.graph.security.microsoftTeamsSensitivityLabelActionAuditRecord': return new MicrosoftTeamsSensitivityLabelActionAuditRecord();
                case '#microsoft.graph.security.microsoftTeamsShiftsAuditRecord': return new MicrosoftTeamsShiftsAuditRecord();
                case '#microsoft.graph.security.microsoftTeamsUserConcernAuditRecord': return new MicrosoftTeamsUserConcernAuditRecord();
                case '#microsoft.graph.security.mipAutoLabelExchangeItemAuditRecord': return new MipAutoLabelExchangeItemAuditRecord();
                case '#microsoft.graph.security.mipAutoLabelProgressFeedbackAuditRecord': return new MipAutoLabelProgressFeedbackAuditRecord();
                case '#microsoft.graph.security.mipAutoLabelSharePointItemAuditRecord': return new MipAutoLabelSharePointItemAuditRecord();
                case '#microsoft.graph.security.mipAutoLabelSharePointPolicyLocationAuditRecord': return new MipAutoLabelSharePointPolicyLocationAuditRecord();
                case '#microsoft.graph.security.mipAutoLabelSimulationSharePointCompletionRecord': return new MipAutoLabelSimulationSharePointCompletionRecord();
                case '#microsoft.graph.security.mipAutoLabelSimulationSharePointProgressRecord': return new MipAutoLabelSimulationSharePointProgressRecord();
                case '#microsoft.graph.security.mipAutoLabelSimulationStatisticsRecord': return new MipAutoLabelSimulationStatisticsRecord();
                case '#microsoft.graph.security.mipExactDataMatchAuditRecord': return new MipExactDataMatchAuditRecord();
                case '#microsoft.graph.security.mipLabelAnalyticsAuditRecord': return new MipLabelAnalyticsAuditRecord();
                case '#microsoft.graph.security.mipLabelAuditRecord': return new MipLabelAuditRecord();
                case '#microsoft.graph.security.mosAgentInfoRecord': return new MosAgentInfoRecord();
                case '#microsoft.graph.security.mosAgentInfoRecordV2': return new MosAgentInfoRecordV2();
                case '#microsoft.graph.security.ms365dCustomDetectionAuditRecord': return new Ms365dCustomDetectionAuditRecord();
                case '#microsoft.graph.security.ms365dIncidentAuditRecord': return new Ms365dIncidentAuditRecord();
                case '#microsoft.graph.security.ms365dSuppressionRuleAuditRecord': return new Ms365dSuppressionRuleAuditRecord();
                case '#microsoft.graph.security.msdeCustomCollectionAuditRecord': return new MsdeCustomCollectionAuditRecord();
                case '#microsoft.graph.security.msdeGeneralSettingsAuditRecord': return new MsdeGeneralSettingsAuditRecord();
                case '#microsoft.graph.security.msdeIndicatorsSettingsAuditRecord': return new MsdeIndicatorsSettingsAuditRecord();
                case '#microsoft.graph.security.msdeResponseActionsAuditRecord': return new MsdeResponseActionsAuditRecord();
                case '#microsoft.graph.security.msdeRolesSettingsAuditRecord': return new MsdeRolesSettingsAuditRecord();
                case '#microsoft.graph.security.mspVectorSearchContentMetadataAuditRecord': return new MspVectorSearchContentMetadataAuditRecord();
                case '#microsoft.graph.security.msticNationStateNotificationRecord': return new MsticNationStateNotificationRecord();
                case '#microsoft.graph.security.multiStageDispositionAuditRecord': return new MultiStageDispositionAuditRecord();
                case '#microsoft.graph.security.myAnalyticsSettingsAuditRecord': return new MyAnalyticsSettingsAuditRecord();
                case '#microsoft.graph.security.noisyAlertPolicyAuditRecord': return new NoisyAlertPolicyAuditRecord();
                case '#microsoft.graph.security.officeNativeAuditRecord': return new OfficeNativeAuditRecord();
                case '#microsoft.graph.security.omePortalAuditRecord': return new OmePortalAuditRecord();
                case '#microsoft.graph.security.onDemandSharePointClassificationAuditRecord': return new OnDemandSharePointClassificationAuditRecord();
                case '#microsoft.graph.security.oneDriveAuditRecord': return new OneDriveAuditRecord();
                case '#microsoft.graph.security.onPremisesFileShareScannerDLPAuditRecord': return new OnPremisesFileShareScannerDLPAuditRecord();
                case '#microsoft.graph.security.onPremisesSharePointScannerDLPAuditRecord': return new OnPremisesSharePointScannerDLPAuditRecord();
                case '#microsoft.graph.security.organizationalDataInM365AuditRecord': return new OrganizationalDataInM365AuditRecord();
                case '#microsoft.graph.security.outlookCopilotAutomationAuditRecord': return new OutlookCopilotAutomationAuditRecord();
                case '#microsoft.graph.security.owaGetAccessTokenForResourceAuditRecord': return new OwaGetAccessTokenForResourceAuditRecord();
                case '#microsoft.graph.security.p4aiAssessmentCategoryRecord': return new P4aiAssessmentCategoryRecord();
                case '#microsoft.graph.security.p4aiAssessmentFabricScannerRecord': return new P4aiAssessmentFabricScannerRecord();
                case '#microsoft.graph.security.p4aiAssessmentLocationResultRecord': return new P4aiAssessmentLocationResultRecord();
                case '#microsoft.graph.security.p4aiAssessmentRecord': return new P4aiAssessmentRecord();
                case '#microsoft.graph.security.p4AIRiskScoreRecord': return new P4AIRiskScoreRecord();
                case '#microsoft.graph.security.peopleAdminSettingsAuditRecord': return new PeopleAdminSettingsAuditRecord();
                case '#microsoft.graph.security.physicalBadgingSignalAuditRecord': return new PhysicalBadgingSignalAuditRecord();
                case '#microsoft.graph.security.placesDirectoryAuditRecord': return new PlacesDirectoryAuditRecord();
                case '#microsoft.graph.security.plannerChatMessageAuditRecord': return new PlannerChatMessageAuditRecord();
                case '#microsoft.graph.security.plannerChatMessageListAuditRecord': return new PlannerChatMessageListAuditRecord();
                case '#microsoft.graph.security.plannerCopyPlanAuditRecord': return new PlannerCopyPlanAuditRecord();
                case '#microsoft.graph.security.plannerGoalAuditRecord': return new PlannerGoalAuditRecord();
                case '#microsoft.graph.security.plannerGoalListAuditRecord': return new PlannerGoalListAuditRecord();
                case '#microsoft.graph.security.plannerPlanAuditRecord': return new PlannerPlanAuditRecord();
                case '#microsoft.graph.security.plannerPlanListAuditRecord': return new PlannerPlanListAuditRecord();
                case '#microsoft.graph.security.plannerPlanSensitivityLabelAuditRecord': return new PlannerPlanSensitivityLabelAuditRecord();
                case '#microsoft.graph.security.plannerRosterAuditRecord': return new PlannerRosterAuditRecord();
                case '#microsoft.graph.security.plannerRosterSensitivityLabelAuditRecord': return new PlannerRosterSensitivityLabelAuditRecord();
                case '#microsoft.graph.security.plannerTaskAuditRecord': return new PlannerTaskAuditRecord();
                case '#microsoft.graph.security.plannerTaskListAuditRecord': return new PlannerTaskListAuditRecord();
                case '#microsoft.graph.security.plannerTenantSettingsAuditRecord': return new PlannerTenantSettingsAuditRecord();
                case '#microsoft.graph.security.policyConfigChangeAuditRecord': return new PolicyConfigChangeAuditRecord();
                case '#microsoft.graph.security.powerAppsAuditAppRecord': return new PowerAppsAuditAppRecord();
                case '#microsoft.graph.security.powerAppsAuditPlanRecord': return new PowerAppsAuditPlanRecord();
                case '#microsoft.graph.security.powerAppsAuditResourceRecord': return new PowerAppsAuditResourceRecord();
                case '#microsoft.graph.security.powerBIAuditRecord': return new PowerBIAuditRecord();
                case '#microsoft.graph.security.powerBIDlpAuditRecord': return new PowerBIDlpAuditRecord();
                case '#microsoft.graph.security.powerPagesSiteAuditRecord': return new PowerPagesSiteAuditRecord();
                case '#microsoft.graph.security.powerPlatformAdminDlpAuditRecord': return new PowerPlatformAdminDlpAuditRecord();
                case '#microsoft.graph.security.powerPlatformAdminEnvironmentAuditRecord': return new PowerPlatformAdminEnvironmentAuditRecord();
                case '#microsoft.graph.security.powerPlatformAdministratorActivityRecord': return new PowerPlatformAdministratorActivityRecord();
                case '#microsoft.graph.security.powerPlatformLockboxResourceAccessRequestAuditRecord': return new PowerPlatformLockboxResourceAccessRequestAuditRecord();
                case '#microsoft.graph.security.powerPlatformLockboxResourceCommandAuditRecord': return new PowerPlatformLockboxResourceCommandAuditRecord();
                case '#microsoft.graph.security.powerPlatformServiceActivityAuditRecord': return new PowerPlatformServiceActivityAuditRecord();
                case '#microsoft.graph.security.powerPlatformTenantIsolationRecord': return new PowerPlatformTenantIsolationRecord();
                case '#microsoft.graph.security.privacyDataMatchAuditRecord': return new PrivacyDataMatchAuditRecord();
                case '#microsoft.graph.security.privacyDataMinimizationRecord': return new PrivacyDataMinimizationRecord();
                case '#microsoft.graph.security.privacyDigestEmailRecord': return new PrivacyDigestEmailRecord();
                case '#microsoft.graph.security.privacyOpenAccessAuditRecord': return new PrivacyOpenAccessAuditRecord();
                case '#microsoft.graph.security.privacyPortalAuditRecord': return new PrivacyPortalAuditRecord();
                case '#microsoft.graph.security.privacyRemediationActionRecord': return new PrivacyRemediationActionRecord();
                case '#microsoft.graph.security.privacyRemediationRecord': return new PrivacyRemediationRecord();
                case '#microsoft.graph.security.privaPrivacyAssessmentOperationRecord': return new PrivaPrivacyAssessmentOperationRecord();
                case '#microsoft.graph.security.privaPrivacyConsentOperationRecord': return new PrivaPrivacyConsentOperationRecord();
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
                case '#microsoft.graph.security.purviewMCRecommendationRecord': return new PurviewMCRecommendationRecord();
                case '#microsoft.graph.security.purviewPostureAgentAuditRecord': return new PurviewPostureAgentAuditRecord();
                case '#microsoft.graph.security.quarantineAuditRecord': return new QuarantineAuditRecord();
                case '#microsoft.graph.security.recordsManagementAuditRecord': return new RecordsManagementAuditRecord();
                case '#microsoft.graph.security.reportSubmission': return new ReportSubmission();
                case '#microsoft.graph.security.reportSubmissionResultDetail': return new ReportSubmissionResultDetail();
                case '#microsoft.graph.security.restrictedModeAuditRecord': return new RestrictedModeAuditRecord();
                case '#microsoft.graph.security.retentionPolicyAuditRecord': return new RetentionPolicyAuditRecord();
                case '#microsoft.graph.security.rtiOperationsAgentAuditRecord': return new RtiOperationsAgentAuditRecord();
                case '#microsoft.graph.security.sbpConfigurationEventRecord': return new SbpConfigurationEventRecord();
                case '#microsoft.graph.security.sbpUsageEventRecord': return new SbpUsageEventRecord();
                case '#microsoft.graph.security.scoreEvidence': return new ScoreEvidence();
                case '#microsoft.graph.security.scorePlatformGenericAuditRecord': return new ScorePlatformGenericAuditRecord();
                case '#microsoft.graph.security.scriptRunAuditRecord': return new ScriptRunAuditRecord();
                case '#microsoft.graph.security.searchAuditRecord': return new SearchAuditRecord();
                case '#microsoft.graph.security.securityComplianceAlertRecord': return new SecurityComplianceAlertRecord();
                case '#microsoft.graph.security.securityComplianceCenterEOPCmdletAuditRecord': return new SecurityComplianceCenterEOPCmdletAuditRecord();
                case '#microsoft.graph.security.securityComplianceInsightsAuditRecord': return new SecurityComplianceInsightsAuditRecord();
                case '#microsoft.graph.security.securityComplianceRBACAuditRecord': return new SecurityComplianceRBACAuditRecord();
                case '#microsoft.graph.security.securityComplianceUserChangeAuditRecord': return new SecurityComplianceUserChangeAuditRecord();
                case '#microsoft.graph.security.securityCopilotIdentityManagementAuditRecord': return new SecurityCopilotIdentityManagementAuditRecord();
                case '#microsoft.graph.security.securityDevelopmentLifecycleAILogAuditRecord': return new SecurityDevelopmentLifecycleAILogAuditRecord();
                case '#microsoft.graph.security.sensitiveInfoRemediationAgentDataRecord': return new SensitiveInfoRemediationAgentDataRecord();
                case '#microsoft.graph.security.sensitivityLabelActionAuditRecord': return new SensitivityLabelActionAuditRecord();
                case '#microsoft.graph.security.sensitivityLabeledFileActionAuditRecord': return new SensitivityLabeledFileActionAuditRecord();
                case '#microsoft.graph.security.sensitivityLabelPolicyMatchAuditRecord': return new SensitivityLabelPolicyMatchAuditRecord();
                case '#microsoft.graph.security.sentinelAIToolAuditRecord': return new SentinelAIToolAuditRecord();
                case '#microsoft.graph.security.sentinelGraphAuditRecord': return new SentinelGraphAuditRecord();
                case '#microsoft.graph.security.sentinelJobAuditRecord': return new SentinelJobAuditRecord();
                case '#microsoft.graph.security.sentinelKQLOnLakeAuditRecord': return new SentinelKQLOnLakeAuditRecord();
                case '#microsoft.graph.security.sentinelLakeDataOnboardingAuditRecord': return new SentinelLakeDataOnboardingAuditRecord();
                case '#microsoft.graph.security.sentinelLakeEncryptionAuditRecord': return new SentinelLakeEncryptionAuditRecord();
                case '#microsoft.graph.security.sentinelLakeOnboardingAuditRecord': return new SentinelLakeOnboardingAuditRecord();
                case '#microsoft.graph.security.sentinelNotebookOnLakeAuditRecord': return new SentinelNotebookOnLakeAuditRecord();
                case '#microsoft.graph.security.sentinelPackageAuditRecord': return new SentinelPackageAuditRecord();
                case '#microsoft.graph.security.sharePointAppPermissionOperationAuditRecord': return new SharePointAppPermissionOperationAuditRecord();
                case '#microsoft.graph.security.sharePointAuditRecord': return new SharePointAuditRecord();
                case '#microsoft.graph.security.sharePointCommentOperationAuditRecord': return new SharePointCommentOperationAuditRecord();
                case '#microsoft.graph.security.sharePointContentSecurityPolicyAuditRecord': return new SharePointContentSecurityPolicyAuditRecord();
                case '#microsoft.graph.security.sharePointContentTypeOperationAuditRecord': return new SharePointContentTypeOperationAuditRecord();
                case '#microsoft.graph.security.sharePointESignatureAuditRecord': return new SharePointESignatureAuditRecord();
                case '#microsoft.graph.security.sharePointFieldOperationAuditRecord': return new SharePointFieldOperationAuditRecord();
                case '#microsoft.graph.security.sharePointFileOperationAuditRecord': return new SharePointFileOperationAuditRecord();
                case '#microsoft.graph.security.sharePointListItemOperationAuditRecord': return new SharePointListItemOperationAuditRecord();
                case '#microsoft.graph.security.sharePointListOperationAuditRecord': return new SharePointListOperationAuditRecord();
                case '#microsoft.graph.security.sharePointSharingOperationAuditRecord': return new SharePointSharingOperationAuditRecord();
                case '#microsoft.graph.security.skypeForBusinessCmdletsAuditRecord': return new SkypeForBusinessCmdletsAuditRecord();
                case '#microsoft.graph.security.skypeForBusinessPSTNUsageAuditRecord': return new SkypeForBusinessPSTNUsageAuditRecord();
                case '#microsoft.graph.security.skypeForBusinessUsersBlockedAuditRecord': return new SkypeForBusinessUsersBlockedAuditRecord();
                case '#microsoft.graph.security.sonarDetonationContentMetadata': return new SonarDetonationContentMetadata();
                case '#microsoft.graph.security.sonarDetonationEntityAuditRecord': return new SonarDetonationEntityAuditRecord();
                case '#microsoft.graph.security.sonarFileDetonationEntityAuditRecord': return new SonarFileDetonationEntityAuditRecord();
                case '#microsoft.graph.security.sonarSubmissionEntityAuditRecord': return new SonarSubmissionEntityAuditRecord();
                case '#microsoft.graph.security.sonarUrlDetonationEntityAuditRecord': return new SonarUrlDetonationEntityAuditRecord();
                case '#microsoft.graph.security.sparkCoreCustomLivePoolRecord': return new SparkCoreCustomLivePoolRecord();
                case '#microsoft.graph.security.submissionEntityAuditRecord': return new SubmissionEntityAuditRecord();
                case '#microsoft.graph.security.supervisoryReviewDayXInsightsAuditRecord': return new SupervisoryReviewDayXInsightsAuditRecord();
                case '#microsoft.graph.security.syntheticProbeAuditRecord': return new SyntheticProbeAuditRecord();
                case '#microsoft.graph.security.teamCopilotInteractionAuditRecord': return new TeamCopilotInteractionAuditRecord();
                case '#microsoft.graph.security.teamsEasyApprovalsAuditRecord': return new TeamsEasyApprovalsAuditRecord();
                case '#microsoft.graph.security.teamsEvalDataHubAdminOperationAuditRecord': return new TeamsEvalDataHubAdminOperationAuditRecord();
                case '#microsoft.graph.security.teamsEvalDataHubDataAccessAuditRecord': return new TeamsEvalDataHubDataAccessAuditRecord();
                case '#microsoft.graph.security.teamsEvalDataHubPermissionChangeAuditRecord': return new TeamsEvalDataHubPermissionChangeAuditRecord();
                case '#microsoft.graph.security.teamsHealthcareAuditRecord': return new TeamsHealthcareAuditRecord();
                case '#microsoft.graph.security.teamsUpdatesAuditRecord': return new TeamsUpdatesAuditRecord();
                case '#microsoft.graph.security.tenantAllowBlockListAuditRecord': return new TenantAllowBlockListAuditRecord();
                case '#microsoft.graph.security.threatFinderAuditRecord': return new ThreatFinderAuditRecord();
                case '#microsoft.graph.security.threatIntelligenceAtpContentData': return new ThreatIntelligenceAtpContentData();
                case '#microsoft.graph.security.threatIntelligenceExportAuditRecord': return new ThreatIntelligenceExportAuditRecord();
                case '#microsoft.graph.security.threatIntelligenceMailData': return new ThreatIntelligenceMailData();
                case '#microsoft.graph.security.threatIntelligenceObjectAuditRecord': return new ThreatIntelligenceObjectAuditRecord();
                case '#microsoft.graph.security.threatIntelligenceUrlClickData': return new ThreatIntelligenceUrlClickData();
                case '#microsoft.graph.security.todoAuditRecord': return new TodoAuditRecord();
                case '#microsoft.graph.security.trainableClassifierAuditRecord': return new TrainableClassifierAuditRecord();
                case '#microsoft.graph.security.uamOperationAuditRecord': return new UamOperationAuditRecord();
                case '#microsoft.graph.security.unifiedGroupAuditRecord': return new UnifiedGroupAuditRecord();
                case '#microsoft.graph.security.unifiedSimulationMatchedItemAuditRecord': return new UnifiedSimulationMatchedItemAuditRecord();
                case '#microsoft.graph.security.unifiedSimulationSummaryAuditRecord': return new UnifiedSimulationSummaryAuditRecord();
                case '#microsoft.graph.security.universalPrintManagementAuditRecord': return new UniversalPrintManagementAuditRecord();
                case '#microsoft.graph.security.universalPrintPrintJobAuditRecord': return new UniversalPrintPrintJobAuditRecord();
                case '#microsoft.graph.security.urbacAssignmentAuditRecord': return new UrbacAssignmentAuditRecord();
                case '#microsoft.graph.security.urbacEnableStateAuditRecord': return new UrbacEnableStateAuditRecord();
                case '#microsoft.graph.security.urbacRoleAuditRecord': return new UrbacRoleAuditRecord();
                case '#microsoft.graph.security.userTrainingAuditRecord': return new UserTrainingAuditRecord();
                case '#microsoft.graph.security.usxWorkspaceOnboardingAuditRecord': return new UsxWorkspaceOnboardingAuditRecord();
                case '#microsoft.graph.security.vfamCreatePolicyAuditRecord': return new VfamCreatePolicyAuditRecord();
                case '#microsoft.graph.security.vfamDeletePolicyAuditRecord': return new VfamDeletePolicyAuditRecord();
                case '#microsoft.graph.security.vfamUpdatePolicyAuditRecord': return new VfamUpdatePolicyAuditRecord();
                case '#microsoft.graph.security.vivaAmplifyAuditRecord': return new VivaAmplifyAuditRecord();
                case '#microsoft.graph.security.vivaEngageEventsAuditRecord': return new VivaEngageEventsAuditRecord();
                case '#microsoft.graph.security.vivaEngageNetworkAssociationAuditRecord': return new VivaEngageNetworkAssociationAuditRecord();
                case '#microsoft.graph.security.vivaEngageSegmentAuditRecord': return new VivaEngageSegmentAuditRecord();
                case '#microsoft.graph.security.vivaGlintAdvancedConfigurationAuditRecord': return new VivaGlintAdvancedConfigurationAuditRecord();
                case '#microsoft.graph.security.vivaGlintAgenticCampaignAuditRecord': return new VivaGlintAgenticCampaignAuditRecord();
                case '#microsoft.graph.security.vivaGlintFeedbackProgramAuditRecord': return new VivaGlintFeedbackProgramAuditRecord();
                case '#microsoft.graph.security.vivaGlintOrganizationalDataAuditRecord': return new VivaGlintOrganizationalDataAuditRecord();
                case '#microsoft.graph.security.vivaGlintPulseProgramAuditRecord': return new VivaGlintPulseProgramAuditRecord();
                case '#microsoft.graph.security.vivaGlintPulseProgramRespondentRateAuditRecord': return new VivaGlintPulseProgramRespondentRateAuditRecord();
                case '#microsoft.graph.security.vivaGlintQuestionAuditRecord': return new VivaGlintQuestionAuditRecord();
                case '#microsoft.graph.security.vivaGlintRoleAuditRecord': return new VivaGlintRoleAuditRecord();
                case '#microsoft.graph.security.vivaGlintRubiconAuditRecord': return new VivaGlintRubiconAuditRecord();
                case '#microsoft.graph.security.vivaGlintSupportAccessAuditRecord': return new VivaGlintSupportAccessAuditRecord();
                case '#microsoft.graph.security.vivaGlintSystemAuditRecord': return new VivaGlintSystemAuditRecord();
                case '#microsoft.graph.security.vivaGlintUserAuditRecord': return new VivaGlintUserAuditRecord();
                case '#microsoft.graph.security.vivaGlintUserGroupAuditRecord': return new VivaGlintUserGroupAuditRecord();
                case '#microsoft.graph.security.vivaGoalsAuditRecord': return new VivaGoalsAuditRecord();
                case '#microsoft.graph.security.vivaLearningAdminAuditRecord': return new VivaLearningAdminAuditRecord();
                case '#microsoft.graph.security.vivaLearningAuditRecord': return new VivaLearningAuditRecord();
                case '#microsoft.graph.security.vivaPulseAdminAuditRecord': return new VivaPulseAdminAuditRecord();
                case '#microsoft.graph.security.vivaPulseOrganizerAuditRecord': return new VivaPulseOrganizerAuditRecord();
                case '#microsoft.graph.security.vivaPulseReportAuditRecord': return new VivaPulseReportAuditRecord();
                case '#microsoft.graph.security.vivaPulseResponseAuditRecord': return new VivaPulseResponseAuditRecord();
                case '#microsoft.graph.security.wdatpAlertsAuditRecord': return new WdatpAlertsAuditRecord();
                case '#microsoft.graph.security.webContentFilteringAuditRecord': return new WebContentFilteringAuditRecord();
                case '#microsoft.graph.security.windows365CustomerLockboxAuditRecord': return new Windows365CustomerLockboxAuditRecord();
                case '#microsoft.graph.security.workplaceAnalyticsAuditRecord': return new WorkplaceAnalyticsAuditRecord();
                case '#microsoft.graph.security.yammerAuditRecord': return new YammerAuditRecord();
                case '#microsoft.graph.security.yammerUserHidingAuditRecord': return new YammerUserHidingAuditRecord();
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
     * Gets the dynamicProperties property value. The dynamicProperties property
     * @return AuditRecordTypeDictionary|null
    */
    public function getDynamicProperties(): ?AuditRecordTypeDictionary {
        $val = $this->getBackingStore()->get('dynamicProperties');
        if (is_null($val) || $val instanceof AuditRecordTypeDictionary) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'dynamicProperties'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'dynamicProperties' => fn(ParseNode $n) => $o->setDynamicProperties($n->getObjectValue([AuditRecordTypeDictionary::class, 'createFromDiscriminatorValue'])),
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
        $writer->writeObjectValue('dynamicProperties', $this->getDynamicProperties());
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
     * Sets the dynamicProperties property value. The dynamicProperties property
     * @param AuditRecordTypeDictionary|null $value Value to set for the dynamicProperties property.
    */
    public function setDynamicProperties(?AuditRecordTypeDictionary $value): void {
        $this->getBackingStore()->set('dynamicProperties', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
