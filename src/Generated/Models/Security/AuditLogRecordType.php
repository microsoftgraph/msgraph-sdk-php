<?php

namespace Microsoft\Graph\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Enum;

class AuditLogRecordType extends Enum {
    public const EXCHANGE_ADMIN = "ExchangeAdmin";
    public const EXCHANGE_ITEM = "ExchangeItem";
    public const EXCHANGE_ITEM_GROUP = "ExchangeItemGroup";
    public const SHARE_POINT = "SharePoint";
    public const SYNTHETIC_PROBE = "SyntheticProbe";
    public const SHARE_POINT_FILE_OPERATION = "SharePointFileOperation";
    public const ONE_DRIVE = "OneDrive";
    public const AZURE_ACTIVE_DIRECTORY = "AzureActiveDirectory";
    public const AZURE_ACTIVE_DIRECTORY_ACCOUNT_LOGON = "AzureActiveDirectoryAccountLogon";
    public const DATA_CENTER_SECURITY_CMDLET = "DataCenterSecurityCmdlet";
    public const COMPLIANCE_D_L_P_SHARE_POINT = "ComplianceDLPSharePoint";
    public const SWAY = "Sway";
    public const COMPLIANCE_D_L_P_EXCHANGE = "ComplianceDLPExchange";
    public const SHARE_POINT_SHARING_OPERATION = "SharePointSharingOperation";
    public const AZURE_ACTIVE_DIRECTORY_STS_LOGON = "AzureActiveDirectoryStsLogon";
    public const SKYPE_FOR_BUSINESS_P_S_T_N_USAGE = "SkypeForBusinessPSTNUsage";
    public const SKYPE_FOR_BUSINESS_USERS_BLOCKED = "SkypeForBusinessUsersBlocked";
    public const SECURITY_COMPLIANCE_CENTER_E_O_P_CMDLET = "SecurityComplianceCenterEOPCmdlet";
    public const EXCHANGE_AGGREGATED_OPERATION = "ExchangeAggregatedOperation";
    public const POWER_B_I_AUDIT = "PowerBIAudit";
    public const C_R_M = "CRM";
    public const YAMMER = "Yammer";
    public const SKYPE_FOR_BUSINESS_CMDLETS = "SkypeForBusinessCmdlets";
    public const DISCOVERY = "Discovery";
    public const MICROSOFT_TEAMS = "MicrosoftTeams";
    public const THREAT_INTELLIGENCE = "ThreatIntelligence";
    public const MAIL_SUBMISSION = "MailSubmission";
    public const MICROSOFT_FLOW = "MicrosoftFlow";
    public const AE_D = "AeD";
    public const MICROSOFT_STREAM = "MicrosoftStream";
    public const COMPLIANCE_D_L_P_SHARE_POINT_CLASSIFICATION = "ComplianceDLPSharePointClassification";
    public const THREAT_FINDER = "ThreatFinder";
    public const PROJECT = "Project";
    public const SHARE_POINT_LIST_OPERATION = "SharePointListOperation";
    public const SHARE_POINT_COMMENT_OPERATION = "SharePointCommentOperation";
    public const DATA_GOVERNANCE = "DataGovernance";
    public const KAIZALA = "Kaizala";
    public const SECURITY_COMPLIANCE_ALERTS = "SecurityComplianceAlerts";
    public const THREAT_INTELLIGENCE_URL = "ThreatIntelligenceUrl";
    public const SECURITY_COMPLIANCE_INSIGHTS = "SecurityComplianceInsights";
    public const M_I_P_LABEL = "MIPLabel";
    public const WORKPLACE_ANALYTICS = "WorkplaceAnalytics";
    public const POWER_APPS_APP = "PowerAppsApp";
    public const POWER_APPS_PLAN = "PowerAppsPlan";
    public const THREAT_INTELLIGENCE_ATP_CONTENT = "ThreatIntelligenceAtpContent";
    public const LABEL_CONTENT_EXPLORER = "LabelContentExplorer";
    public const TEAMS_HEALTHCARE = "TeamsHealthcare";
    public const EXCHANGE_ITEM_AGGREGATED = "ExchangeItemAggregated";
    public const HYGIENE_EVENT = "HygieneEvent";
    public const DATA_INSIGHTS_REST_API_AUDIT = "DataInsightsRestApiAudit";
    public const INFORMATION_BARRIER_POLICY_APPLICATION = "InformationBarrierPolicyApplication";
    public const SHARE_POINT_LIST_ITEM_OPERATION = "SharePointListItemOperation";
    public const SHARE_POINT_CONTENT_TYPE_OPERATION = "SharePointContentTypeOperation";
    public const SHARE_POINT_FIELD_OPERATION = "SharePointFieldOperation";
    public const MICROSOFT_TEAMS_ADMIN = "MicrosoftTeamsAdmin";
    public const H_R_SIGNAL = "HRSignal";
    public const MICROSOFT_TEAMS_DEVICE = "MicrosoftTeamsDevice";
    public const MICROSOFT_TEAMS_ANALYTICS = "MicrosoftTeamsAnalytics";
    public const INFORMATION_WORKER_PROTECTION = "InformationWorkerProtection";
    public const CAMPAIGN = "Campaign";
    public const D_L_P_ENDPOINT = "DLPEndpoint";
    public const AIR_INVESTIGATION = "AirInvestigation";
    public const QUARANTINE = "Quarantine";
    public const MICROSOFT_FORMS = "MicrosoftForms";
    public const APPLICATION_AUDIT = "ApplicationAudit";
    public const COMPLIANCE_SUPERVISION_EXCHANGE = "ComplianceSupervisionExchange";
    public const CUSTOMER_KEY_SERVICE_ENCRYPTION = "CustomerKeyServiceEncryption";
    public const OFFICE_NATIVE = "OfficeNative";
    public const MIP_AUTO_LABEL_SHARE_POINT_ITEM = "MipAutoLabelSharePointItem";
    public const MIP_AUTO_LABEL_SHARE_POINT_POLICY_LOCATION = "MipAutoLabelSharePointPolicyLocation";
    public const MICROSOFT_TEAMS_SHIFTS = "MicrosoftTeamsShifts";
    public const SECURE_SCORE = "SecureScore";
    public const MIP_AUTO_LABEL_EXCHANGE_ITEM = "MipAutoLabelExchangeItem";
    public const CORTANA_BRIEFING = "CortanaBriefing";
    public const SEARCH = "Search";
    public const W_D_A_T_P_ALERTS = "WDATPAlerts";
    public const POWER_PLATFORM_ADMIN_DLP = "PowerPlatformAdminDlp";
    public const POWER_PLATFORM_ADMIN_ENVIRONMENT = "PowerPlatformAdminEnvironment";
    public const M_D_A_T_P_AUDIT = "MDATPAudit";
    public const SENSITIVITY_LABEL_POLICY_MATCH = "SensitivityLabelPolicyMatch";
    public const SENSITIVITY_LABEL_ACTION = "SensitivityLabelAction";
    public const SENSITIVITY_LABELED_FILE_ACTION = "SensitivityLabeledFileAction";
    public const ATTACK_SIM = "AttackSim";
    public const AIR_MANUAL_INVESTIGATION = "AirManualInvestigation";
    public const SECURITY_COMPLIANCE_R_B_A_C = "SecurityComplianceRBAC";
    public const USER_TRAINING = "UserTraining";
    public const AIR_ADMIN_ACTION_INVESTIGATION = "AirAdminActionInvestigation";
    public const M_S_T_I_C = "MSTIC";
    public const PHYSICAL_BADGING_SIGNAL = "PhysicalBadgingSignal";
    public const TEAMS_EASY_APPROVALS = "TeamsEasyApprovals";
    public const AIP_DISCOVER = "AipDiscover";
    public const AIP_SENSITIVITY_LABEL_ACTION = "AipSensitivityLabelAction";
    public const AIP_PROTECTION_ACTION = "AipProtectionAction";
    public const AIP_FILE_DELETED = "AipFileDeleted";
    public const AIP_HEART_BEAT = "AipHeartBeat";
    public const M_C_A_S_ALERTS = "MCASAlerts";
    public const ON_PREMISES_FILE_SHARE_SCANNER_DLP = "OnPremisesFileShareScannerDlp";
    public const ON_PREMISES_SHARE_POINT_SCANNER_DLP = "OnPremisesSharePointScannerDlp";
    public const EXCHANGE_SEARCH = "ExchangeSearch";
    public const SHARE_POINT_SEARCH = "SharePointSearch";
    public const PRIVACY_DATA_MINIMIZATION = "PrivacyDataMinimization";
    public const LABEL_ANALYTICS_AGGREGATE = "LabelAnalyticsAggregate";
    public const MY_ANALYTICS_SETTINGS = "MyAnalyticsSettings";
    public const SECURITY_COMPLIANCE_USER_CHANGE = "SecurityComplianceUserChange";
    public const COMPLIANCE_D_L_P_EXCHANGE_CLASSIFICATION = "ComplianceDLPExchangeClassification";
    public const COMPLIANCE_D_L_P_ENDPOINT = "ComplianceDLPEndpoint";
    public const MIP_EXACT_DATA_MATCH = "MipExactDataMatch";
    public const M_S_D_E_RESPONSE_ACTIONS = "MSDEResponseActions";
    public const M_S_D_E_GENERAL_SETTINGS = "MSDEGeneralSettings";
    public const M_S_D_E_INDICATORS_SETTINGS = "MSDEIndicatorsSettings";
    public const M_S365_D_CUSTOM_DETECTION = "MS365DCustomDetection";
    public const M_S_D_E_ROLES_SETTINGS = "MSDERolesSettings";
    public const M_A_P_G_ALERTS = "MAPGAlerts";
    public const M_A_P_G_POLICY = "MAPGPolicy";
    public const M_A_P_G_REMEDIATION = "MAPGRemediation";
    public const PRIVACY_REMEDIATION_ACTION = "PrivacyRemediationAction";
    public const PRIVACY_DIGEST_EMAIL = "PrivacyDigestEmail";
    public const MIP_AUTO_LABEL_SIMULATION_PROGRESS = "MipAutoLabelSimulationProgress";
    public const MIP_AUTO_LABEL_SIMULATION_COMPLETION = "MipAutoLabelSimulationCompletion";
    public const MIP_AUTO_LABEL_PROGRESS_FEEDBACK = "MipAutoLabelProgressFeedback";
    public const DLP_SENSITIVE_INFORMATION_TYPE = "DlpSensitiveInformationType";
    public const MIP_AUTO_LABEL_SIMULATION_STATISTICS = "MipAutoLabelSimulationStatistics";
    public const LARGE_CONTENT_METADATA = "LargeContentMetadata";
    public const MICROSOFT365_GROUP = "Microsoft365Group";
    public const C_D_P_ML_INFERENCING_RESULT = "CDPMlInferencingResult";
    public const FILTERING_MAIL_METADATA = "FilteringMailMetadata";
    public const C_D_P_CLASSIFICATION_MAIL_ITEM = "CDPClassificationMailItem";
    public const C_D_P_CLASSIFICATION_DOCUMENT = "CDPClassificationDocument";
    public const OFFICE_SCRIPTS_RUN_ACTION = "OfficeScriptsRunAction";
    public const FILTERING_POST_MAIL_DELIVERY_ACTION = "FilteringPostMailDeliveryAction";
    public const C_D_P_UNIFIED_FEEDBACK = "CDPUnifiedFeedback";
    public const TENANT_ALLOW_BLOCK_LIST = "TenantAllowBlockList";
    public const CONSUMPTION_RESOURCE = "ConsumptionResource";
    public const HEALTHCARE_SIGNAL = "HealthcareSignal";
    public const DLP_IMPORT_RESULT = "DlpImportResult";
    public const C_D_P_COMPLIANCE_POLICY_EXECUTION = "CDPCompliancePolicyExecution";
    public const MULTI_STAGE_DISPOSITION = "MultiStageDisposition";
    public const PRIVACY_DATA_MATCH = "PrivacyDataMatch";
    public const FILTERING_DOC_METADATA = "FilteringDocMetadata";
    public const FILTERING_EMAIL_FEATURES = "FilteringEmailFeatures";
    public const POWER_B_I_DLP = "PowerBIDlp";
    public const FILTERING_URL_INFO = "FilteringUrlInfo";
    public const FILTERING_ATTACHMENT_INFO = "FilteringAttachmentInfo";
    public const CORE_REPORTING_SETTINGS = "CoreReportingSettings";
    public const COMPLIANCE_CONNECTOR = "ComplianceConnector";
    public const POWER_PLATFORM_LOCKBOX_RESOURCE_ACCESS_REQUEST = "PowerPlatformLockboxResourceAccessRequest";
    public const POWER_PLATFORM_LOCKBOX_RESOURCE_COMMAND = "PowerPlatformLockboxResourceCommand";
    public const C_D_P_PREDICTIVE_CODING_LABEL = "CDPPredictiveCodingLabel";
    public const C_D_P_COMPLIANCE_POLICY_USER_FEEDBACK = "CDPCompliancePolicyUserFeedback";
    public const WEBPAGE_ACTIVITY_ENDPOINT = "WebpageActivityEndpoint";
    public const O_M_E_PORTAL = "OMEPortal";
    public const C_M_IMPROVEMENT_ACTION_CHANGE = "CMImprovementActionChange";
    public const FILTERING_URL_CLICK = "FilteringUrlClick";
    public const MIP_LABEL_ANALYTICS_AUDIT_RECORD = "MipLabelAnalyticsAuditRecord";
    public const FILTERING_ENTITY_EVENT = "FilteringEntityEvent";
    public const FILTERING_RULE_HITS = "FilteringRuleHits";
    public const FILTERING_MAIL_SUBMISSION = "FilteringMailSubmission";
    public const LABEL_EXPLORER = "LabelExplorer";
    public const MICROSOFT_MANAGED_SERVICE_PLATFORM = "MicrosoftManagedServicePlatform";
    public const POWER_PLATFORM_SERVICE_ACTIVITY = "PowerPlatformServiceActivity";
    public const SCORE_PLATFORM_GENERIC_AUDIT_RECORD = "ScorePlatformGenericAuditRecord";
    public const FILTERING_TIME_TRAVEL_DOC_METADATA = "FilteringTimeTravelDocMetadata";
    public const ALERT = "Alert";
    public const ALERT_STATUS = "AlertStatus";
    public const ALERT_INCIDENT = "AlertIncident";
    public const INCIDENT_STATUS = "IncidentStatus";
    public const CASE = "Case";
    public const CASE_INVESTIGATION = "CaseInvestigation";
    public const RECORDS_MANAGEMENT = "RecordsManagement";
    public const PRIVACY_REMEDIATION = "PrivacyRemediation";
    public const DATA_SHARE_OPERATION = "DataShareOperation";
    public const CDP_DLP_SENSITIVE = "CdpDlpSensitive";
    public const E_H_R_CONNECTOR = "EHRConnector";
    public const FILTERING_MAIL_GRADING_RESULT = "FilteringMailGradingResult";
    public const PUBLIC_FOLDER = "PublicFolder";
    public const PRIVACY_TENANT_AUDIT_HISTORY_RECORD = "PrivacyTenantAuditHistoryRecord";
    public const AIP_SCANNER_DISCOVER_EVENT = "AipScannerDiscoverEvent";
    public const EDU_DATA_LAKE_DOWNLOAD_OPERATION = "EduDataLakeDownloadOperation";
    public const M365_COMPLIANCE_CONNECTOR = "M365ComplianceConnector";
    public const MICROSOFT_GRAPH_DATA_CONNECT_OPERATION = "MicrosoftGraphDataConnectOperation";
    public const MICROSOFT_PURVIEW = "MicrosoftPurview";
    public const FILTERING_EMAIL_CONTENT_FEATURES = "FilteringEmailContentFeatures";
    public const POWER_PAGES_SITE = "PowerPagesSite";
    public const POWER_APPS_RESOURCE = "PowerAppsResource";
    public const PLANNER_PLAN = "PlannerPlan";
    public const PLANNER_COPY_PLAN = "PlannerCopyPlan";
    public const PLANNER_TASK = "PlannerTask";
    public const PLANNER_ROSTER = "PlannerRoster";
    public const PLANNER_PLAN_LIST = "PlannerPlanList";
    public const PLANNER_TASK_LIST = "PlannerTaskList";
    public const PLANNER_TENANT_SETTINGS = "PlannerTenantSettings";
    public const PROJECT_FOR_THE_WEB_PROJECT = "ProjectForTheWebProject";
    public const PROJECT_FOR_THE_WEB_TASK = "ProjectForTheWebTask";
    public const PROJECT_FOR_THE_WEB_ROADMAP = "ProjectForTheWebRoadmap";
    public const PROJECT_FOR_THE_WEB_ROADMAP_ITEM = "ProjectForTheWebRoadmapItem";
    public const PROJECT_FOR_THE_WEB_PROJECT_SETTINGS = "ProjectForTheWebProjectSettings";
    public const PROJECT_FOR_THE_WEB_ROADMAP_SETTINGS = "ProjectForTheWebRoadmapSettings";
    public const QUARANTINE_METADATA = "QuarantineMetadata";
    public const MICROSOFT_TODO_AUDIT = "MicrosoftTodoAudit";
    public const TIME_TRAVEL_FILTERING_DOC_METADATA = "TimeTravelFilteringDocMetadata";
    public const TEAMS_QUARANTINE_METADATA = "TeamsQuarantineMetadata";
    public const SHARE_POINT_APP_PERMISSION_OPERATION = "SharePointAppPermissionOperation";
    public const MICROSOFT_TEAMS_SENSITIVITY_LABEL_ACTION = "MicrosoftTeamsSensitivityLabelAction";
    public const FILTERING_TEAMS_METADATA = "FilteringTeamsMetadata";
    public const FILTERING_TEAMS_URL_INFO = "FilteringTeamsUrlInfo";
    public const FILTERING_TEAMS_POST_DELIVERY_ACTION = "FilteringTeamsPostDeliveryAction";
    public const M_D_C_ASSESSMENTS = "MDCAssessments";
    public const M_D_C_REGULATORY_COMPLIANCE_STANDARDS = "MDCRegulatoryComplianceStandards";
    public const M_D_C_REGULATORY_COMPLIANCE_CONTROLS = "MDCRegulatoryComplianceControls";
    public const M_D_C_REGULATORY_COMPLIANCE_ASSESSMENTS = "MDCRegulatoryComplianceAssessments";
    public const M_D_C_SECURITY_CONNECTORS = "MDCSecurityConnectors";
    public const M_D_A_DATA_SECURITY_SIGNAL = "MDADataSecuritySignal";
    public const VIVA_GOALS = "VivaGoals";
    public const FILTERING_RUNTIME_INFO = "FilteringRuntimeInfo";
    public const ATTACK_SIM_ADMIN = "AttackSimAdmin";
    public const MICROSOFT_GRAPH_DATA_CONNECT_CONSENT = "MicrosoftGraphDataConnectConsent";
    public const FILTERING_ATP_DETONATION_INFO = "FilteringAtpDetonationInfo";
    public const PRIVACY_PORTAL = "PrivacyPortal";
    public const MANAGED_TENANTS = "ManagedTenants";
    public const UNIFIED_SIMULATION_MATCHED_ITEM = "UnifiedSimulationMatchedItem";
    public const UNIFIED_SIMULATION_SUMMARY = "UnifiedSimulationSummary";
    public const UPDATE_QUARANTINE_METADATA = "UpdateQuarantineMetadata";
    public const M_S365_D_SUPPRESSION_RULE = "MS365DSuppressionRule";
    public const PURVIEW_DATA_MAP_OPERATION = "PurviewDataMapOperation";
    public const FILTERING_URL_POST_CLICK_ACTION = "FilteringUrlPostClickAction";
    public const IRM_USER_DEFINED_DETECTION_SIGNAL = "IrmUserDefinedDetectionSignal";
    public const TEAMS_UPDATES = "TeamsUpdates";
    public const PLANNER_ROSTER_SENSITIVITY_LABEL = "PlannerRosterSensitivityLabel";
    public const M_S365_D_INCIDENT = "MS365DIncident";
    public const FILTERING_DELISTING_METADATA = "FilteringDelistingMetadata";
    public const COMPLIANCE_D_L_P_SHARE_POINT_CLASSIFICATION_EXTENDED = "ComplianceDLPSharePointClassificationExtended";
    public const MICROSOFT_DEFENDER_FOR_IDENTITY_AUDIT = "MicrosoftDefenderForIdentityAudit";
    public const SUPERVISORY_REVIEW_DAY_X_INSIGHT = "SupervisoryReviewDayXInsight";
    public const DEFENDER_EXPERTSFOR_X_D_R_ADMIN = "DefenderExpertsforXDRAdmin";
    public const C_D_P_EDGE_BLOCKED_MESSAGE = "CDPEdgeBlockedMessage";
    public const HOSTED_RPA = "HostedRpa";
    public const CDP_CONTENT_EXPLORER_AGGREGATE_RECORD = "CdpContentExplorerAggregateRecord";
    public const C_D_P_HYGIENE_ATTACHMENT_INFO = "CDPHygieneAttachmentInfo";
    public const C_D_P_HYGIENE_SUMMARY = "CDPHygieneSummary";
    public const C_D_P_POST_MAIL_DELIVERY_ACTION = "CDPPostMailDeliveryAction";
    public const C_D_P_EMAIL_FEATURES = "CDPEmailFeatures";
    public const C_D_P_HYGIENE_URL_INFO = "CDPHygieneUrlInfo";
    public const C_D_P_URL_CLICK = "CDPUrlClick";
    public const C_D_P_PACKAGE_MANAGER_HYGIENE_EVENT = "CDPPackageManagerHygieneEvent";
    public const FILTERING_DOC_SCAN = "FilteringDocScan";
    public const TIME_TRAVEL_FILTERING_DOC_SCAN = "TimeTravelFilteringDocScan";
    public const M_A_P_G_ONBOARD = "MAPGOnboard";
    public const VFAM_CREATE_POLICY = "VfamCreatePolicy";
    public const VFAM_UPDATE_POLICY = "VfamUpdatePolicy";
    public const VFAM_DELETE_POLICY = "VfamDeletePolicy";
    public const M365_D_A_A_D = "M365DAAD";
    public const CDP_COLD_CRAWL_STATUS = "CdpColdCrawlStatus";
    public const POWER_PLATFORM_ADMINISTRATOR_ACTIVITY = "PowerPlatformAdministratorActivity";
    public const WINDOWS365_CUSTOMER_LOCKBOX = "Windows365CustomerLockbox";
    public const CDP_RESOURCE_SCOPE_CHANGE_EVENT = "CdpResourceScopeChangeEvent";
    public const COMPLIANCE_C_C_EXCHANGE_EXECUTION_RESULT = "ComplianceCCExchangeExecutionResult";
    public const CDP_OCR_COST_ESTIMATOR_RECORD = "CdpOcrCostEstimatorRecord";
    public const COPILOT_INTERACTION = "CopilotInteraction";
    public const CDP_OCR_BILLING_RECORD = "CdpOcrBillingRecord";
    public const COMPLIANCE_D_L_P_APPLICATIONS = "ComplianceDLPApplications";
    public const U_A_M_OPERATION = "UAMOperation";
    public const VIVA_LEARNING = "VivaLearning";
    public const VIVA_LEARNING_ADMIN = "VivaLearningAdmin";
    public const PURVIEW_POLICY_OPERATION = "PurviewPolicyOperation";
    public const PURVIEW_METADATA_POLICY_OPERATION = "PurviewMetadataPolicyOperation";
    public const PEOPLE_ADMIN_SETTINGS = "PeopleAdminSettings";
    public const CDP_COMPLIANCE_D_L_P_EXCHANGE_CLASSIFICATION = "CdpComplianceDLPExchangeClassification";
    public const CDP_COMPLIANCE_D_L_P_SHARE_POINT_CLASSIFICATION = "CdpComplianceDLPSharePointClassification";
    public const FILTERING_BULK_SENDER_INSIGHT_DATA = "FilteringBulkSenderInsightData";
    public const FILTERING_BULK_THRESHOLD_INSIGHT_DATA = "FilteringBulkThresholdInsightData";
    public const PRIVACY_OPEN_ACCESS = "PrivacyOpenAccess";
    public const O_W_A_AUTH = "OWAAuth";
    public const COMPLIANCE_D_L_P_APPLICATIONS_CLASSIFICATION = "ComplianceDLPApplicationsClassification";
    public const SHARE_POINT_E_SIGNATURE = "SharePointESignature";
    public const DYNAMICS365_BUSINESS_CENTRAL = "Dynamics365BusinessCentral";
    public const MESH_WORLDS = "MeshWorlds";
    public const VIVA_PULSE_RESPONSE = "VivaPulseResponse";
    public const VIVA_PULSE_ORGANIZER = "VivaPulseOrganizer";
    public const VIVA_PULSE_ADMIN = "VivaPulseAdmin";
    public const VIVA_PULSE_REPORT = "VivaPulseReport";
    public const A_I_APP_INTERACTION = "AIAppInteraction";
    public const COMPLIANCE_D_L_M_EXCHANGE = "ComplianceDLMExchange";
    public const COMPLIANCE_D_L_M_SHARE_POINT = "ComplianceDLMSharePoint";
    public const PROJECT_FOR_THE_WEB_ASSIGNED_TO_ME_SETTINGS = "ProjectForTheWebAssignedToMeSettings";
    public const C_P_S_OPERATION = "CPSOperation";
    public const COMPLIANCE_D_L_P_EXCHANGE_DISCOVERY = "ComplianceDLPExchangeDiscovery";
    public const PURVIEW_M_C_RECOMMENDATION = "PurviewMCRecommendation";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
