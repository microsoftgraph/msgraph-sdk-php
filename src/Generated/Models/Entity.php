<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Graph\Generated\Models\CallRecords\CallRecord;
use Microsoft\Graph\Generated\Models\CallRecords\Segment;
use Microsoft\Graph\Generated\Models\CallRecords\Session;
use Microsoft\Graph\Generated\Models\ExternalConnectors\ConnectionOperation;
use Microsoft\Graph\Generated\Models\ExternalConnectors\ExternalActivity;
use Microsoft\Graph\Generated\Models\ExternalConnectors\ExternalActivityResult;
use Microsoft\Graph\Generated\Models\ExternalConnectors\ExternalConnection;
use Microsoft\Graph\Generated\Models\ExternalConnectors\ExternalGroup;
use Microsoft\Graph\Generated\Models\ExternalConnectors\ExternalItem;
use Microsoft\Graph\Generated\Models\ExternalConnectors\Identity;
use Microsoft\Graph\Generated\Models\ExternalConnectors\Schema;
use Microsoft\Graph\Generated\Models\IdentityGovernance\CustomTaskExtension;
use Microsoft\Graph\Generated\Models\IdentityGovernance\LifecycleManagementSettings;
use Microsoft\Graph\Generated\Models\IdentityGovernance\LifecycleWorkflowsContainer;
use Microsoft\Graph\Generated\Models\IdentityGovernance\Run;
use Microsoft\Graph\Generated\Models\IdentityGovernance\Task;
use Microsoft\Graph\Generated\Models\IdentityGovernance\TaskDefinition;
use Microsoft\Graph\Generated\Models\IdentityGovernance\TaskProcessingResult;
use Microsoft\Graph\Generated\Models\IdentityGovernance\TaskReport;
use Microsoft\Graph\Generated\Models\IdentityGovernance\UserProcessingResult;
use Microsoft\Graph\Generated\Models\IdentityGovernance\WorkflowTemplate;
use Microsoft\Graph\Generated\Models\Security\Alert;
use Microsoft\Graph\Generated\Models\Security\Article;
use Microsoft\Graph\Generated\Models\Security\ArticleIndicator;
use Microsoft\Graph\Generated\Models\Security\Artifact;
use Microsoft\Graph\Generated\Models\Security\CaseOperation;
use Microsoft\Graph\Generated\Models\Security\CasesRoot;
use Microsoft\Graph\Generated\Models\Security\DataSet;
use Microsoft\Graph\Generated\Models\Security\DataSource;
use Microsoft\Graph\Generated\Models\Security\DataSourceContainer;
use Microsoft\Graph\Generated\Models\Security\EdiscoveryAddToReviewSetOperation;
use Microsoft\Graph\Generated\Models\Security\EdiscoveryCase;
use Microsoft\Graph\Generated\Models\Security\EdiscoveryCaseSettings;
use Microsoft\Graph\Generated\Models\Security\EdiscoveryCustodian;
use Microsoft\Graph\Generated\Models\Security\EdiscoveryEstimateOperation;
use Microsoft\Graph\Generated\Models\Security\EdiscoveryExportOperation;
use Microsoft\Graph\Generated\Models\Security\EdiscoveryHoldOperation;
use Microsoft\Graph\Generated\Models\Security\EdiscoveryIndexOperation;
use Microsoft\Graph\Generated\Models\Security\EdiscoveryNoncustodialDataSource;
use Microsoft\Graph\Generated\Models\Security\EdiscoveryPurgeDataOperation;
use Microsoft\Graph\Generated\Models\Security\EdiscoveryReviewSet;
use Microsoft\Graph\Generated\Models\Security\EdiscoveryReviewSetQuery;
use Microsoft\Graph\Generated\Models\Security\EdiscoveryReviewTag;
use Microsoft\Graph\Generated\Models\Security\EdiscoverySearch;
use Microsoft\Graph\Generated\Models\Security\EdiscoveryTagOperation;
use Microsoft\Graph\Generated\Models\Security\EscapedCase;
use Microsoft\Graph\Generated\Models\Security\Host;
use Microsoft\Graph\Generated\Models\Security\HostComponent;
use Microsoft\Graph\Generated\Models\Security\HostCookie;
use Microsoft\Graph\Generated\Models\Security\Hostname;
use Microsoft\Graph\Generated\Models\Security\HostReputation;
use Microsoft\Graph\Generated\Models\Security\HostTracker;
use Microsoft\Graph\Generated\Models\Security\Incident;
use Microsoft\Graph\Generated\Models\Security\Indicator;
use Microsoft\Graph\Generated\Models\Security\IntelligenceProfile;
use Microsoft\Graph\Generated\Models\Security\IntelligenceProfileIndicator;
use Microsoft\Graph\Generated\Models\Security\IpAddress;
use Microsoft\Graph\Generated\Models\Security\PassiveDnsRecord;
use Microsoft\Graph\Generated\Models\Security\RetentionEvent;
use Microsoft\Graph\Generated\Models\Security\RetentionEventType;
use Microsoft\Graph\Generated\Models\Security\Search;
use Microsoft\Graph\Generated\Models\Security\Security;
use Microsoft\Graph\Generated\Models\Security\SiteSource;
use Microsoft\Graph\Generated\Models\Security\Tag;
use Microsoft\Graph\Generated\Models\Security\ThreatIntelligence;
use Microsoft\Graph\Generated\Models\Security\TriggersRoot;
use Microsoft\Graph\Generated\Models\Security\TriggerTypesRoot;
use Microsoft\Graph\Generated\Models\Security\UnclassifiedArtifact;
use Microsoft\Graph\Generated\Models\Security\UnifiedGroupSource;
use Microsoft\Graph\Generated\Models\Security\UserSource;
use Microsoft\Graph\Generated\Models\Security\Vulnerability;
use Microsoft\Graph\Generated\Models\Security\VulnerabilityComponent;
use Microsoft\Graph\Generated\Models\TermStore\Group;
use Microsoft\Graph\Generated\Models\TermStore\Relation;
use Microsoft\Graph\Generated\Models\TermStore\Set;
use Microsoft\Graph\Generated\Models\TermStore\Store;
use Microsoft\Graph\Generated\Models\TermStore\Term;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class Entity implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new entity and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Entity
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Entity {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.aadUserConversationMember': return new AadUserConversationMember();
                case '#microsoft.graph.accessPackage': return new AccessPackage();
                case '#microsoft.graph.accessPackageAssignment': return new AccessPackageAssignment();
                case '#microsoft.graph.accessPackageAssignmentPolicy': return new AccessPackageAssignmentPolicy();
                case '#microsoft.graph.accessPackageAssignmentRequest': return new AccessPackageAssignmentRequest();
                case '#microsoft.graph.accessPackageAssignmentRequestWorkflowExtension': return new AccessPackageAssignmentRequestWorkflowExtension();
                case '#microsoft.graph.accessPackageAssignmentWorkflowExtension': return new AccessPackageAssignmentWorkflowExtension();
                case '#microsoft.graph.accessPackageCatalog': return new AccessPackageCatalog();
                case '#microsoft.graph.accessPackageMultipleChoiceQuestion': return new AccessPackageMultipleChoiceQuestion();
                case '#microsoft.graph.accessPackageQuestion': return new AccessPackageQuestion();
                case '#microsoft.graph.accessPackageResource': return new AccessPackageResource();
                case '#microsoft.graph.accessPackageResourceEnvironment': return new AccessPackageResourceEnvironment();
                case '#microsoft.graph.accessPackageResourceRequest': return new AccessPackageResourceRequest();
                case '#microsoft.graph.accessPackageResourceRole': return new AccessPackageResourceRole();
                case '#microsoft.graph.accessPackageResourceRoleScope': return new AccessPackageResourceRoleScope();
                case '#microsoft.graph.accessPackageResourceScope': return new AccessPackageResourceScope();
                case '#microsoft.graph.accessPackageSubject': return new AccessPackageSubject();
                case '#microsoft.graph.accessPackageTextInputQuestion': return new AccessPackageTextInputQuestion();
                case '#microsoft.graph.accessReviewHistoryDefinition': return new AccessReviewHistoryDefinition();
                case '#microsoft.graph.accessReviewHistoryInstance': return new AccessReviewHistoryInstance();
                case '#microsoft.graph.accessReviewInstance': return new AccessReviewInstance();
                case '#microsoft.graph.accessReviewInstanceDecisionItem': return new AccessReviewInstanceDecisionItem();
                case '#microsoft.graph.accessReviewReviewer': return new AccessReviewReviewer();
                case '#microsoft.graph.accessReviewScheduleDefinition': return new AccessReviewScheduleDefinition();
                case '#microsoft.graph.accessReviewSet': return new AccessReviewSet();
                case '#microsoft.graph.accessReviewStage': return new AccessReviewStage();
                case '#microsoft.graph.activityBasedTimeoutPolicy': return new ActivityBasedTimeoutPolicy();
                case '#microsoft.graph.activityHistoryItem': return new ActivityHistoryItem();
                case '#microsoft.graph.addLargeGalleryViewOperation': return new AddLargeGalleryViewOperation();
                case '#microsoft.graph.adminConsentRequestPolicy': return new AdminConsentRequestPolicy();
                case '#microsoft.graph.administrativeUnit': return new AdministrativeUnit();
                case '#microsoft.graph.agreement': return new Agreement();
                case '#microsoft.graph.agreementAcceptance': return new AgreementAcceptance();
                case '#microsoft.graph.agreementFile': return new AgreementFile();
                case '#microsoft.graph.agreementFileLocalization': return new AgreementFileLocalization();
                case '#microsoft.graph.agreementFileProperties': return new AgreementFileProperties();
                case '#microsoft.graph.agreementFileVersion': return new AgreementFileVersion();
                case '#microsoft.graph.alert': return new Alert();
                case '#microsoft.graph.allowedValue': return new AllowedValue();
                case '#microsoft.graph.androidCompliancePolicy': return new AndroidCompliancePolicy();
                case '#microsoft.graph.androidCustomConfiguration': return new AndroidCustomConfiguration();
                case '#microsoft.graph.androidGeneralDeviceConfiguration': return new AndroidGeneralDeviceConfiguration();
                case '#microsoft.graph.androidLobApp': return new AndroidLobApp();
                case '#microsoft.graph.androidManagedAppProtection': return new AndroidManagedAppProtection();
                case '#microsoft.graph.androidManagedAppRegistration': return new AndroidManagedAppRegistration();
                case '#microsoft.graph.androidStoreApp': return new AndroidStoreApp();
                case '#microsoft.graph.androidWorkProfileCompliancePolicy': return new AndroidWorkProfileCompliancePolicy();
                case '#microsoft.graph.androidWorkProfileCustomConfiguration': return new AndroidWorkProfileCustomConfiguration();
                case '#microsoft.graph.androidWorkProfileGeneralDeviceConfiguration': return new AndroidWorkProfileGeneralDeviceConfiguration();
                case '#microsoft.graph.anonymousGuestConversationMember': return new AnonymousGuestConversationMember();
                case '#microsoft.graph.appCatalogs': return new AppCatalogs();
                case '#microsoft.graph.appConsentApprovalRoute': return new AppConsentApprovalRoute();
                case '#microsoft.graph.appConsentRequest': return new AppConsentRequest();
                case '#microsoft.graph.appleDeviceFeaturesConfigurationBase': return new AppleDeviceFeaturesConfigurationBase();
                case '#microsoft.graph.appleManagedIdentityProvider': return new AppleManagedIdentityProvider();
                case '#microsoft.graph.applePushNotificationCertificate': return new ApplePushNotificationCertificate();
                case '#microsoft.graph.application': return new Application();
                case '#microsoft.graph.applicationTemplate': return new ApplicationTemplate();
                case '#microsoft.graph.appLogCollectionRequest': return new AppLogCollectionRequest();
                case '#microsoft.graph.appManagementPolicy': return new AppManagementPolicy();
                case '#microsoft.graph.appRoleAssignment': return new AppRoleAssignment();
                case '#microsoft.graph.approval': return new Approval();
                case '#microsoft.graph.approvalStage': return new ApprovalStage();
                case '#microsoft.graph.appScope': return new AppScope();
                case '#microsoft.graph.associatedTeamInfo': return new AssociatedTeamInfo();
                case '#microsoft.graph.attachment': return new Attachment();
                case '#microsoft.graph.attachmentBase': return new AttachmentBase();
                case '#microsoft.graph.attachmentSession': return new AttachmentSession();
                case '#microsoft.graph.attackSimulationRoot': return new AttackSimulationRoot();
                case '#microsoft.graph.attendanceRecord': return new AttendanceRecord();
                case '#microsoft.graph.attributeMappingFunctionSchema': return new AttributeMappingFunctionSchema();
                case '#microsoft.graph.attributeSet': return new AttributeSet();
                case '#microsoft.graph.audioRoutingGroup': return new AudioRoutingGroup();
                case '#microsoft.graph.auditEvent': return new AuditEvent();
                case '#microsoft.graph.auditLogRoot': return new AuditLogRoot();
                case '#microsoft.graph.authentication': return new Authentication();
                case '#microsoft.graph.authenticationCombinationConfiguration': return new AuthenticationCombinationConfiguration();
                case '#microsoft.graph.authenticationContextClassReference': return new AuthenticationContextClassReference();
                case '#microsoft.graph.authenticationFlowsPolicy': return new AuthenticationFlowsPolicy();
                case '#microsoft.graph.authenticationMethod': return new AuthenticationMethod();
                case '#microsoft.graph.authenticationMethodConfiguration': return new AuthenticationMethodConfiguration();
                case '#microsoft.graph.authenticationMethodModeDetail': return new AuthenticationMethodModeDetail();
                case '#microsoft.graph.authenticationMethodsPolicy': return new AuthenticationMethodsPolicy();
                case '#microsoft.graph.authenticationMethodsRoot': return new AuthenticationMethodsRoot();
                case '#microsoft.graph.authenticationMethodTarget': return new AuthenticationMethodTarget();
                case '#microsoft.graph.authenticationStrengthPolicy': return new AuthenticationStrengthPolicy();
                case '#microsoft.graph.authenticationStrengthRoot': return new AuthenticationStrengthRoot();
                case '#microsoft.graph.authoredNote': return new AuthoredNote();
                case '#microsoft.graph.authorizationPolicy': return new AuthorizationPolicy();
                case '#microsoft.graph.azureCommunicationServicesUserConversationMember': return new AzureCommunicationServicesUserConversationMember();
                case '#microsoft.graph.b2xIdentityUserFlow': return new B2xIdentityUserFlow();
                case '#microsoft.graph.baseItem': return new BaseItem();
                case '#microsoft.graph.baseItemVersion': return new BaseItemVersion();
                case '#microsoft.graph.bitlocker': return new Bitlocker();
                case '#microsoft.graph.bitlockerRecoveryKey': return new BitlockerRecoveryKey();
                case '#microsoft.graph.bookingAppointment': return new BookingAppointment();
                case '#microsoft.graph.bookingBusiness': return new BookingBusiness();
                case '#microsoft.graph.bookingCurrency': return new BookingCurrency();
                case '#microsoft.graph.bookingCustomer': return new BookingCustomer();
                case '#microsoft.graph.bookingCustomerBase': return new BookingCustomerBase();
                case '#microsoft.graph.bookingCustomQuestion': return new BookingCustomQuestion();
                case '#microsoft.graph.bookingService': return new BookingService();
                case '#microsoft.graph.bookingStaffMember': return new BookingStaffMember();
                case '#microsoft.graph.bookingStaffMemberBase': return new BookingStaffMemberBase();
                case '#microsoft.graph.browserSharedCookie': return new BrowserSharedCookie();
                case '#microsoft.graph.browserSite': return new BrowserSite();
                case '#microsoft.graph.browserSiteList': return new BrowserSiteList();
                case '#microsoft.graph.builtInIdentityProvider': return new BuiltInIdentityProvider();
                case '#microsoft.graph.calendar': return new Calendar();
                case '#microsoft.graph.calendarGroup': return new CalendarGroup();
                case '#microsoft.graph.calendarPermission': return new CalendarPermission();
                case '#microsoft.graph.calendarSharingMessage': return new CalendarSharingMessage();
                case '#microsoft.graph.call': return new Call();
                case '#microsoft.graph.callRecords.callRecord': return new CallRecord();
                case '#microsoft.graph.callRecords.segment': return new Segment();
                case '#microsoft.graph.callRecords.session': return new Session();
                case '#microsoft.graph.cancelMediaProcessingOperation': return new CancelMediaProcessingOperation();
                case '#microsoft.graph.certificateBasedAuthConfiguration': return new CertificateBasedAuthConfiguration();
                case '#microsoft.graph.changeTrackedEntity': return new ChangeTrackedEntity();
                case '#microsoft.graph.channel': return new Channel();
                case '#microsoft.graph.chat': return new Chat();
                case '#microsoft.graph.chatMessage': return new ChatMessage();
                case '#microsoft.graph.chatMessageHostedContent': return new ChatMessageHostedContent();
                case '#microsoft.graph.chatMessageInfo': return new ChatMessageInfo();
                case '#microsoft.graph.checklistItem': return new ChecklistItem();
                case '#microsoft.graph.claimsMappingPolicy': return new ClaimsMappingPolicy();
                case '#microsoft.graph.columnDefinition': return new ColumnDefinition();
                case '#microsoft.graph.columnLink': return new ColumnLink();
                case '#microsoft.graph.commsOperation': return new CommsOperation();
                case '#microsoft.graph.complianceManagementPartner': return new ComplianceManagementPartner();
                case '#microsoft.graph.conditionalAccessPolicy': return new ConditionalAccessPolicy();
                case '#microsoft.graph.conditionalAccessRoot': return new ConditionalAccessRoot();
                case '#microsoft.graph.conditionalAccessTemplate': return new ConditionalAccessTemplate();
                case '#microsoft.graph.connectedOrganization': return new ConnectedOrganization();
                case '#microsoft.graph.contact': return new Contact();
                case '#microsoft.graph.contactFolder': return new ContactFolder();
                case '#microsoft.graph.contentSharingSession': return new ContentSharingSession();
                case '#microsoft.graph.contentType': return new ContentType();
                case '#microsoft.graph.contract': return new Contract();
                case '#microsoft.graph.conversation': return new Conversation();
                case '#microsoft.graph.conversationMember': return new ConversationMember();
                case '#microsoft.graph.conversationThread': return new ConversationThread();
                case '#microsoft.graph.countryNamedLocation': return new CountryNamedLocation();
                case '#microsoft.graph.crossTenantAccessPolicy': return new CrossTenantAccessPolicy();
                case '#microsoft.graph.crossTenantAccessPolicyConfigurationDefault': return new CrossTenantAccessPolicyConfigurationDefault();
                case '#microsoft.graph.customCalloutExtension': return new CustomCalloutExtension();
                case '#microsoft.graph.customExtensionStageSetting': return new CustomExtensionStageSetting();
                case '#microsoft.graph.customSecurityAttributeDefinition': return new CustomSecurityAttributeDefinition();
                case '#microsoft.graph.dataPolicyOperation': return new DataPolicyOperation();
                case '#microsoft.graph.defaultManagedAppProtection': return new DefaultManagedAppProtection();
                case '#microsoft.graph.delegatedAdminAccessAssignment': return new DelegatedAdminAccessAssignment();
                case '#microsoft.graph.delegatedAdminCustomer': return new DelegatedAdminCustomer();
                case '#microsoft.graph.delegatedAdminRelationship': return new DelegatedAdminRelationship();
                case '#microsoft.graph.delegatedAdminRelationshipOperation': return new DelegatedAdminRelationshipOperation();
                case '#microsoft.graph.delegatedAdminRelationshipRequest': return new DelegatedAdminRelationshipRequest();
                case '#microsoft.graph.delegatedAdminServiceManagementDetail': return new DelegatedAdminServiceManagementDetail();
                case '#microsoft.graph.delegatedPermissionClassification': return new DelegatedPermissionClassification();
                case '#microsoft.graph.deletedItemContainer': return new DeletedItemContainer();
                case '#microsoft.graph.deletedTeam': return new DeletedTeam();
                case '#microsoft.graph.detectedApp': return new DetectedApp();
                case '#microsoft.graph.device': return new Device();
                case '#microsoft.graph.deviceAndAppManagementRoleAssignment': return new DeviceAndAppManagementRoleAssignment();
                case '#microsoft.graph.deviceAndAppManagementRoleDefinition': return new DeviceAndAppManagementRoleDefinition();
                case '#microsoft.graph.deviceAppManagement': return new DeviceAppManagement();
                case '#microsoft.graph.deviceCategory': return new DeviceCategory();
                case '#microsoft.graph.deviceComplianceActionItem': return new DeviceComplianceActionItem();
                case '#microsoft.graph.deviceComplianceDeviceOverview': return new DeviceComplianceDeviceOverview();
                case '#microsoft.graph.deviceComplianceDeviceStatus': return new DeviceComplianceDeviceStatus();
                case '#microsoft.graph.deviceCompliancePolicy': return new DeviceCompliancePolicy();
                case '#microsoft.graph.deviceCompliancePolicyAssignment': return new DeviceCompliancePolicyAssignment();
                case '#microsoft.graph.deviceCompliancePolicyDeviceStateSummary': return new DeviceCompliancePolicyDeviceStateSummary();
                case '#microsoft.graph.deviceCompliancePolicySettingStateSummary': return new DeviceCompliancePolicySettingStateSummary();
                case '#microsoft.graph.deviceCompliancePolicyState': return new DeviceCompliancePolicyState();
                case '#microsoft.graph.deviceComplianceScheduledActionForRule': return new DeviceComplianceScheduledActionForRule();
                case '#microsoft.graph.deviceComplianceSettingState': return new DeviceComplianceSettingState();
                case '#microsoft.graph.deviceComplianceUserOverview': return new DeviceComplianceUserOverview();
                case '#microsoft.graph.deviceComplianceUserStatus': return new DeviceComplianceUserStatus();
                case '#microsoft.graph.deviceConfiguration': return new DeviceConfiguration();
                case '#microsoft.graph.deviceConfigurationAssignment': return new DeviceConfigurationAssignment();
                case '#microsoft.graph.deviceConfigurationDeviceOverview': return new DeviceConfigurationDeviceOverview();
                case '#microsoft.graph.deviceConfigurationDeviceStateSummary': return new DeviceConfigurationDeviceStateSummary();
                case '#microsoft.graph.deviceConfigurationDeviceStatus': return new DeviceConfigurationDeviceStatus();
                case '#microsoft.graph.deviceConfigurationState': return new DeviceConfigurationState();
                case '#microsoft.graph.deviceConfigurationUserOverview': return new DeviceConfigurationUserOverview();
                case '#microsoft.graph.deviceConfigurationUserStatus': return new DeviceConfigurationUserStatus();
                case '#microsoft.graph.deviceEnrollmentConfiguration': return new DeviceEnrollmentConfiguration();
                case '#microsoft.graph.deviceEnrollmentLimitConfiguration': return new DeviceEnrollmentLimitConfiguration();
                case '#microsoft.graph.deviceEnrollmentPlatformRestrictionsConfiguration': return new DeviceEnrollmentPlatformRestrictionsConfiguration();
                case '#microsoft.graph.deviceEnrollmentWindowsHelloForBusinessConfiguration': return new DeviceEnrollmentWindowsHelloForBusinessConfiguration();
                case '#microsoft.graph.deviceInstallState': return new DeviceInstallState();
                case '#microsoft.graph.deviceLogCollectionResponse': return new DeviceLogCollectionResponse();
                case '#microsoft.graph.deviceManagement': return new DeviceManagement();
                case '#microsoft.graph.deviceManagementExchangeConnector': return new DeviceManagementExchangeConnector();
                case '#microsoft.graph.deviceManagementExportJob': return new DeviceManagementExportJob();
                case '#microsoft.graph.deviceManagementPartner': return new DeviceManagementPartner();
                case '#microsoft.graph.deviceManagementReports': return new DeviceManagementReports();
                case '#microsoft.graph.deviceManagementTroubleshootingEvent': return new DeviceManagementTroubleshootingEvent();
                case '#microsoft.graph.directory': return new Directory();
                case '#microsoft.graph.directoryAudit': return new DirectoryAudit();
                case '#microsoft.graph.directoryDefinition': return new DirectoryDefinition();
                case '#microsoft.graph.directoryObject': return new DirectoryObject();
                case '#microsoft.graph.directoryObjectPartnerReference': return new DirectoryObjectPartnerReference();
                case '#microsoft.graph.directoryRole': return new DirectoryRole();
                case '#microsoft.graph.directoryRoleTemplate': return new DirectoryRoleTemplate();
                case '#microsoft.graph.documentSetVersion': return new DocumentSetVersion();
                case '#microsoft.graph.domain': return new Domain();
                case '#microsoft.graph.domainDnsCnameRecord': return new DomainDnsCnameRecord();
                case '#microsoft.graph.domainDnsMxRecord': return new DomainDnsMxRecord();
                case '#microsoft.graph.domainDnsRecord': return new DomainDnsRecord();
                case '#microsoft.graph.domainDnsSrvRecord': return new DomainDnsSrvRecord();
                case '#microsoft.graph.domainDnsTxtRecord': return new DomainDnsTxtRecord();
                case '#microsoft.graph.domainDnsUnavailableRecord': return new DomainDnsUnavailableRecord();
                case '#microsoft.graph.drive': return new Drive();
                case '#microsoft.graph.driveItem': return new DriveItem();
                case '#microsoft.graph.driveItemVersion': return new DriveItemVersion();
                case '#microsoft.graph.eBookInstallSummary': return new EBookInstallSummary();
                case '#microsoft.graph.edge': return new Edge();
                case '#microsoft.graph.editionUpgradeConfiguration': return new EditionUpgradeConfiguration();
                case '#microsoft.graph.educationAssignment': return new EducationAssignment();
                case '#microsoft.graph.educationAssignmentDefaults': return new EducationAssignmentDefaults();
                case '#microsoft.graph.educationAssignmentResource': return new EducationAssignmentResource();
                case '#microsoft.graph.educationAssignmentSettings': return new EducationAssignmentSettings();
                case '#microsoft.graph.educationCategory': return new EducationCategory();
                case '#microsoft.graph.educationClass': return new EducationClass();
                case '#microsoft.graph.educationFeedbackOutcome': return new EducationFeedbackOutcome();
                case '#microsoft.graph.educationFeedbackResourceOutcome': return new EducationFeedbackResourceOutcome();
                case '#microsoft.graph.educationOrganization': return new EducationOrganization();
                case '#microsoft.graph.educationOutcome': return new EducationOutcome();
                case '#microsoft.graph.educationPointsOutcome': return new EducationPointsOutcome();
                case '#microsoft.graph.educationRubric': return new EducationRubric();
                case '#microsoft.graph.educationRubricOutcome': return new EducationRubricOutcome();
                case '#microsoft.graph.educationSchool': return new EducationSchool();
                case '#microsoft.graph.educationSubmission': return new EducationSubmission();
                case '#microsoft.graph.educationSubmissionResource': return new EducationSubmissionResource();
                case '#microsoft.graph.educationUser': return new EducationUser();
                case '#microsoft.graph.emailAuthenticationMethod': return new EmailAuthenticationMethod();
                case '#microsoft.graph.emailAuthenticationMethodConfiguration': return new EmailAuthenticationMethodConfiguration();
                case '#microsoft.graph.emailFileAssessmentRequest': return new EmailFileAssessmentRequest();
                case '#microsoft.graph.employeeExperienceUser': return new EmployeeExperienceUser();
                case '#microsoft.graph.endpoint': return new Endpoint();
                case '#microsoft.graph.enrollmentConfigurationAssignment': return new EnrollmentConfigurationAssignment();
                case '#microsoft.graph.enrollmentTroubleshootingEvent': return new EnrollmentTroubleshootingEvent();
                case '#microsoft.graph.enterpriseCodeSigningCertificate': return new EnterpriseCodeSigningCertificate();
                case '#microsoft.graph.entitlementManagement': return new EntitlementManagement();
                case '#microsoft.graph.entitlementManagementSettings': return new EntitlementManagementSettings();
                case '#microsoft.graph.event': return new Event();
                case '#microsoft.graph.eventMessage': return new EventMessage();
                case '#microsoft.graph.eventMessageRequest': return new EventMessageRequest();
                case '#microsoft.graph.eventMessageResponse': return new EventMessageResponse();
                case '#microsoft.graph.extension': return new Extension();
                case '#microsoft.graph.extensionProperty': return new ExtensionProperty();
                case '#microsoft.graph.externalConnectors.connectionOperation': return new ConnectionOperation();
                case '#microsoft.graph.externalConnectors.externalActivity': return new ExternalActivity();
                case '#microsoft.graph.externalConnectors.externalActivityResult': return new ExternalActivityResult();
                case '#microsoft.graph.externalConnectors.externalConnection': return new ExternalConnection();
                case '#microsoft.graph.externalConnectors.externalGroup': return new ExternalGroup();
                case '#microsoft.graph.externalConnectors.externalItem': return new ExternalItem();
                case '#microsoft.graph.externalConnectors.identity': return new Identity();
                case '#microsoft.graph.externalConnectors.schema': return new Schema();
                case '#microsoft.graph.externalDomainName': return new ExternalDomainName();
                case '#microsoft.graph.featureRolloutPolicy': return new FeatureRolloutPolicy();
                case '#microsoft.graph.federatedIdentityCredential': return new FederatedIdentityCredential();
                case '#microsoft.graph.fido2AuthenticationMethod': return new Fido2AuthenticationMethod();
                case '#microsoft.graph.fido2AuthenticationMethodConfiguration': return new Fido2AuthenticationMethodConfiguration();
                case '#microsoft.graph.fido2CombinationConfiguration': return new Fido2CombinationConfiguration();
                case '#microsoft.graph.fieldValueSet': return new FieldValueSet();
                case '#microsoft.graph.fileAssessmentRequest': return new FileAssessmentRequest();
                case '#microsoft.graph.fileAttachment': return new FileAttachment();
                case '#microsoft.graph.filterOperatorSchema': return new FilterOperatorSchema();
                case '#microsoft.graph.governanceInsight': return new GovernanceInsight();
                case '#microsoft.graph.group': return new Group();
                case '#microsoft.graph.groupLifecyclePolicy': return new GroupLifecyclePolicy();
                case '#microsoft.graph.groupSetting': return new GroupSetting();
                case '#microsoft.graph.groupSettingTemplate': return new GroupSettingTemplate();
                case '#microsoft.graph.homeRealmDiscoveryPolicy': return new HomeRealmDiscoveryPolicy();
                case '#microsoft.graph.identityApiConnector': return new IdentityApiConnector();
                case '#microsoft.graph.identityBuiltInUserFlowAttribute': return new IdentityBuiltInUserFlowAttribute();
                case '#microsoft.graph.identityContainer': return new IdentityContainer();
                case '#microsoft.graph.identityCustomUserFlowAttribute': return new IdentityCustomUserFlowAttribute();
                case '#microsoft.graph.identityGovernance.customTaskExtension': return new CustomTaskExtension();
                case '#microsoft.graph.identityGovernance.lifecycleManagementSettings': return new LifecycleManagementSettings();
                case '#microsoft.graph.identityGovernance.lifecycleWorkflowsContainer': return new LifecycleWorkflowsContainer();
                case '#microsoft.graph.identityGovernance.run': return new Run();
                case '#microsoft.graph.identityGovernance.task': return new Task();
                case '#microsoft.graph.identityGovernance.taskDefinition': return new TaskDefinition();
                case '#microsoft.graph.identityGovernance.taskProcessingResult': return new TaskProcessingResult();
                case '#microsoft.graph.identityGovernance.taskReport': return new TaskReport();
                case '#microsoft.graph.identityGovernance.userProcessingResult': return new UserProcessingResult();
                case '#microsoft.graph.identityGovernance.workflowTemplate': return new WorkflowTemplate();
                case '#microsoft.graph.identityProvider': return new IdentityProvider();
                case '#microsoft.graph.identityProviderBase': return new IdentityProviderBase();
                case '#microsoft.graph.identitySecurityDefaultsEnforcementPolicy': return new IdentitySecurityDefaultsEnforcementPolicy();
                case '#microsoft.graph.identityUserFlow': return new IdentityUserFlow();
                case '#microsoft.graph.identityUserFlowAttribute': return new IdentityUserFlowAttribute();
                case '#microsoft.graph.identityUserFlowAttributeAssignment': return new IdentityUserFlowAttributeAssignment();
                case '#microsoft.graph.importedWindowsAutopilotDeviceIdentity': return new ImportedWindowsAutopilotDeviceIdentity();
                case '#microsoft.graph.importedWindowsAutopilotDeviceIdentityUpload': return new ImportedWindowsAutopilotDeviceIdentityUpload();
                case '#microsoft.graph.inferenceClassification': return new InferenceClassification();
                case '#microsoft.graph.inferenceClassificationOverride': return new InferenceClassificationOverride();
                case '#microsoft.graph.internalDomainFederation': return new InternalDomainFederation();
                case '#microsoft.graph.internetExplorerMode': return new InternetExplorerMode();
                case '#microsoft.graph.invitation': return new Invitation();
                case '#microsoft.graph.inviteParticipantsOperation': return new InviteParticipantsOperation();
                case '#microsoft.graph.iosCertificateProfile': return new IosCertificateProfile();
                case '#microsoft.graph.iosCompliancePolicy': return new IosCompliancePolicy();
                case '#microsoft.graph.iosCustomConfiguration': return new IosCustomConfiguration();
                case '#microsoft.graph.iosDeviceFeaturesConfiguration': return new IosDeviceFeaturesConfiguration();
                case '#microsoft.graph.iosGeneralDeviceConfiguration': return new IosGeneralDeviceConfiguration();
                case '#microsoft.graph.iosiPadOSWebClip': return new IosiPadOSWebClip();
                case '#microsoft.graph.iosLobApp': return new IosLobApp();
                case '#microsoft.graph.iosLobAppProvisioningConfigurationAssignment': return new IosLobAppProvisioningConfigurationAssignment();
                case '#microsoft.graph.iosManagedAppProtection': return new IosManagedAppProtection();
                case '#microsoft.graph.iosManagedAppRegistration': return new IosManagedAppRegistration();
                case '#microsoft.graph.iosMobileAppConfiguration': return new IosMobileAppConfiguration();
                case '#microsoft.graph.iosStoreApp': return new IosStoreApp();
                case '#microsoft.graph.iosUpdateConfiguration': return new IosUpdateConfiguration();
                case '#microsoft.graph.iosUpdateDeviceStatus': return new IosUpdateDeviceStatus();
                case '#microsoft.graph.iosVppApp': return new IosVppApp();
                case '#microsoft.graph.iosVppEBook': return new IosVppEBook();
                case '#microsoft.graph.iosVppEBookAssignment': return new IosVppEBookAssignment();
                case '#microsoft.graph.ipNamedLocation': return new IpNamedLocation();
                case '#microsoft.graph.itemActivity': return new ItemActivity();
                case '#microsoft.graph.itemActivityStat': return new ItemActivityStat();
                case '#microsoft.graph.itemAnalytics': return new ItemAnalytics();
                case '#microsoft.graph.itemAttachment': return new ItemAttachment();
                case '#microsoft.graph.learningAssignment': return new LearningAssignment();
                case '#microsoft.graph.learningContent': return new LearningContent();
                case '#microsoft.graph.learningCourseActivity': return new LearningCourseActivity();
                case '#microsoft.graph.learningProvider': return new LearningProvider();
                case '#microsoft.graph.learningSelfInitiatedCourse': return new LearningSelfInitiatedCourse();
                case '#microsoft.graph.licenseDetails': return new LicenseDetails();
                case '#microsoft.graph.linkedResource': return new LinkedResource();
                case '#microsoft.graph.list': return new EscapedList();
                case '#microsoft.graph.listItem': return new ListItem();
                case '#microsoft.graph.listItemVersion': return new ListItemVersion();
                case '#microsoft.graph.localizedNotificationMessage': return new LocalizedNotificationMessage();
                case '#microsoft.graph.longRunningOperation': return new LongRunningOperation();
                case '#microsoft.graph.macOSCompliancePolicy': return new MacOSCompliancePolicy();
                case '#microsoft.graph.macOSCustomConfiguration': return new MacOSCustomConfiguration();
                case '#microsoft.graph.macOSDeviceFeaturesConfiguration': return new MacOSDeviceFeaturesConfiguration();
                case '#microsoft.graph.macOSGeneralDeviceConfiguration': return new MacOSGeneralDeviceConfiguration();
                case '#microsoft.graph.macOSLobApp': return new MacOSLobApp();
                case '#microsoft.graph.macOSMicrosoftDefenderApp': return new MacOSMicrosoftDefenderApp();
                case '#microsoft.graph.macOSMicrosoftEdgeApp': return new MacOSMicrosoftEdgeApp();
                case '#microsoft.graph.macOSOfficeSuiteApp': return new MacOSOfficeSuiteApp();
                case '#microsoft.graph.mailAssessmentRequest': return new MailAssessmentRequest();
                case '#microsoft.graph.mailFolder': return new MailFolder();
                case '#microsoft.graph.mailSearchFolder': return new MailSearchFolder();
                case '#microsoft.graph.malwareStateForWindowsDevice': return new MalwareStateForWindowsDevice();
                case '#microsoft.graph.managedAndroidLobApp': return new ManagedAndroidLobApp();
                case '#microsoft.graph.managedAndroidStoreApp': return new ManagedAndroidStoreApp();
                case '#microsoft.graph.managedApp': return new ManagedApp();
                case '#microsoft.graph.managedAppConfiguration': return new ManagedAppConfiguration();
                case '#microsoft.graph.managedAppOperation': return new ManagedAppOperation();
                case '#microsoft.graph.managedAppPolicy': return new ManagedAppPolicy();
                case '#microsoft.graph.managedAppPolicyDeploymentSummary': return new ManagedAppPolicyDeploymentSummary();
                case '#microsoft.graph.managedAppProtection': return new ManagedAppProtection();
                case '#microsoft.graph.managedAppRegistration': return new ManagedAppRegistration();
                case '#microsoft.graph.managedAppStatus': return new ManagedAppStatus();
                case '#microsoft.graph.managedAppStatusRaw': return new ManagedAppStatusRaw();
                case '#microsoft.graph.managedDevice': return new ManagedDevice();
                case '#microsoft.graph.managedDeviceMobileAppConfiguration': return new ManagedDeviceMobileAppConfiguration();
                case '#microsoft.graph.managedDeviceMobileAppConfigurationAssignment': return new ManagedDeviceMobileAppConfigurationAssignment();
                case '#microsoft.graph.managedDeviceMobileAppConfigurationDeviceStatus': return new ManagedDeviceMobileAppConfigurationDeviceStatus();
                case '#microsoft.graph.managedDeviceMobileAppConfigurationDeviceSummary': return new ManagedDeviceMobileAppConfigurationDeviceSummary();
                case '#microsoft.graph.managedDeviceMobileAppConfigurationUserStatus': return new ManagedDeviceMobileAppConfigurationUserStatus();
                case '#microsoft.graph.managedDeviceMobileAppConfigurationUserSummary': return new ManagedDeviceMobileAppConfigurationUserSummary();
                case '#microsoft.graph.managedDeviceOverview': return new ManagedDeviceOverview();
                case '#microsoft.graph.managedEBook': return new ManagedEBook();
                case '#microsoft.graph.managedEBookAssignment': return new ManagedEBookAssignment();
                case '#microsoft.graph.managedIOSLobApp': return new ManagedIOSLobApp();
                case '#microsoft.graph.managedIOSStoreApp': return new ManagedIOSStoreApp();
                case '#microsoft.graph.managedMobileApp': return new ManagedMobileApp();
                case '#microsoft.graph.managedMobileLobApp': return new ManagedMobileLobApp();
                case '#microsoft.graph.mdmWindowsInformationProtectionPolicy': return new MdmWindowsInformationProtectionPolicy();
                case '#microsoft.graph.meetingAttendanceReport': return new MeetingAttendanceReport();
                case '#microsoft.graph.membershipOutlierInsight': return new MembershipOutlierInsight();
                case '#microsoft.graph.message': return new Message();
                case '#microsoft.graph.messageRule': return new MessageRule();
                case '#microsoft.graph.microsoftAccountUserConversationMember': return new MicrosoftAccountUserConversationMember();
                case '#microsoft.graph.microsoftAuthenticatorAuthenticationMethod': return new MicrosoftAuthenticatorAuthenticationMethod();
                case '#microsoft.graph.microsoftAuthenticatorAuthenticationMethodConfiguration': return new MicrosoftAuthenticatorAuthenticationMethodConfiguration();
                case '#microsoft.graph.microsoftAuthenticatorAuthenticationMethodTarget': return new MicrosoftAuthenticatorAuthenticationMethodTarget();
                case '#microsoft.graph.microsoftStoreForBusinessApp': return new MicrosoftStoreForBusinessApp();
                case '#microsoft.graph.mobileApp': return new MobileApp();
                case '#microsoft.graph.mobileAppAssignment': return new MobileAppAssignment();
                case '#microsoft.graph.mobileAppCategory': return new MobileAppCategory();
                case '#microsoft.graph.mobileAppContent': return new MobileAppContent();
                case '#microsoft.graph.mobileAppContentFile': return new MobileAppContentFile();
                case '#microsoft.graph.mobileAppTroubleshootingEvent': return new MobileAppTroubleshootingEvent();
                case '#microsoft.graph.mobileContainedApp': return new MobileContainedApp();
                case '#microsoft.graph.mobileLobApp': return new MobileLobApp();
                case '#microsoft.graph.mobileThreatDefenseConnector': return new MobileThreatDefenseConnector();
                case '#microsoft.graph.multiValueLegacyExtendedProperty': return new MultiValueLegacyExtendedProperty();
                case '#microsoft.graph.muteParticipantOperation': return new MuteParticipantOperation();
                case '#microsoft.graph.namedLocation': return new NamedLocation();
                case '#microsoft.graph.notebook': return new Notebook();
                case '#microsoft.graph.notificationMessageTemplate': return new NotificationMessageTemplate();
                case '#microsoft.graph.oAuth2PermissionGrant': return new OAuth2PermissionGrant();
                case '#microsoft.graph.offerShiftRequest': return new OfferShiftRequest();
                case '#microsoft.graph.officeGraphInsights': return new OfficeGraphInsights();
                case '#microsoft.graph.onenote': return new Onenote();
                case '#microsoft.graph.onenoteEntityBaseModel': return new OnenoteEntityBaseModel();
                case '#microsoft.graph.onenoteEntityHierarchyModel': return new OnenoteEntityHierarchyModel();
                case '#microsoft.graph.onenoteEntitySchemaObjectModel': return new OnenoteEntitySchemaObjectModel();
                case '#microsoft.graph.onenoteOperation': return new OnenoteOperation();
                case '#microsoft.graph.onenotePage': return new OnenotePage();
                case '#microsoft.graph.onenoteResource': return new OnenoteResource();
                case '#microsoft.graph.onenoteSection': return new OnenoteSection();
                case '#microsoft.graph.onlineMeeting': return new OnlineMeeting();
                case '#microsoft.graph.onPremisesConditionalAccessSettings': return new OnPremisesConditionalAccessSettings();
                case '#microsoft.graph.onPremisesDirectorySynchronization': return new OnPremisesDirectorySynchronization();
                case '#microsoft.graph.openShift': return new OpenShift();
                case '#microsoft.graph.openShiftChangeRequest': return new OpenShiftChangeRequest();
                case '#microsoft.graph.openTypeExtension': return new OpenTypeExtension();
                case '#microsoft.graph.operation': return new Operation();
                case '#microsoft.graph.organization': return new Organization();
                case '#microsoft.graph.organizationalBranding': return new OrganizationalBranding();
                case '#microsoft.graph.organizationalBrandingLocalization': return new OrganizationalBrandingLocalization();
                case '#microsoft.graph.organizationalBrandingProperties': return new OrganizationalBrandingProperties();
                case '#microsoft.graph.orgContact': return new OrgContact();
                case '#microsoft.graph.outlookCategory': return new OutlookCategory();
                case '#microsoft.graph.outlookItem': return new OutlookItem();
                case '#microsoft.graph.outlookUser': return new OutlookUser();
                case '#microsoft.graph.participant': return new Participant();
                case '#microsoft.graph.participantJoiningNotification': return new ParticipantJoiningNotification();
                case '#microsoft.graph.participantLeftNotification': return new ParticipantLeftNotification();
                case '#microsoft.graph.passwordAuthenticationMethod': return new PasswordAuthenticationMethod();
                case '#microsoft.graph.permission': return new Permission();
                case '#microsoft.graph.permissionGrantConditionSet': return new PermissionGrantConditionSet();
                case '#microsoft.graph.permissionGrantPolicy': return new PermissionGrantPolicy();
                case '#microsoft.graph.person': return new Person();
                case '#microsoft.graph.phoneAuthenticationMethod': return new PhoneAuthenticationMethod();
                case '#microsoft.graph.pinnedChatMessageInfo': return new PinnedChatMessageInfo();
                case '#microsoft.graph.place': return new Place();
                case '#microsoft.graph.planner': return new Planner();
                case '#microsoft.graph.plannerAssignedToTaskBoardTaskFormat': return new PlannerAssignedToTaskBoardTaskFormat();
                case '#microsoft.graph.plannerBucket': return new PlannerBucket();
                case '#microsoft.graph.plannerBucketTaskBoardTaskFormat': return new PlannerBucketTaskBoardTaskFormat();
                case '#microsoft.graph.plannerGroup': return new PlannerGroup();
                case '#microsoft.graph.plannerPlan': return new PlannerPlan();
                case '#microsoft.graph.plannerPlanDetails': return new PlannerPlanDetails();
                case '#microsoft.graph.plannerProgressTaskBoardTaskFormat': return new PlannerProgressTaskBoardTaskFormat();
                case '#microsoft.graph.plannerTask': return new PlannerTask();
                case '#microsoft.graph.plannerTaskDetails': return new PlannerTaskDetails();
                case '#microsoft.graph.plannerUser': return new PlannerUser();
                case '#microsoft.graph.playPromptOperation': return new PlayPromptOperation();
                case '#microsoft.graph.policyBase': return new PolicyBase();
                case '#microsoft.graph.policyRoot': return new PolicyRoot();
                case '#microsoft.graph.post': return new Post();
                case '#microsoft.graph.presence': return new Presence();
                case '#microsoft.graph.printConnector': return new PrintConnector();
                case '#microsoft.graph.printDocument': return new PrintDocument();
                case '#microsoft.graph.printer': return new Printer();
                case '#microsoft.graph.printerBase': return new PrinterBase();
                case '#microsoft.graph.printerCreateOperation': return new PrinterCreateOperation();
                case '#microsoft.graph.printerShare': return new PrinterShare();
                case '#microsoft.graph.printJob': return new PrintJob();
                case '#microsoft.graph.printOperation': return new PrintOperation();
                case '#microsoft.graph.printService': return new PrintService();
                case '#microsoft.graph.printServiceEndpoint': return new PrintServiceEndpoint();
                case '#microsoft.graph.printTask': return new PrintTask();
                case '#microsoft.graph.printTaskDefinition': return new PrintTaskDefinition();
                case '#microsoft.graph.printTaskTrigger': return new PrintTaskTrigger();
                case '#microsoft.graph.printUsage': return new PrintUsage();
                case '#microsoft.graph.printUsageByPrinter': return new PrintUsageByPrinter();
                case '#microsoft.graph.printUsageByUser': return new PrintUsageByUser();
                case '#microsoft.graph.profilePhoto': return new ProfilePhoto();
                case '#microsoft.graph.provisioningObjectSummary': return new ProvisioningObjectSummary();
                case '#microsoft.graph.rbacApplication': return new RbacApplication();
                case '#microsoft.graph.recordOperation': return new RecordOperation();
                case '#microsoft.graph.referenceAttachment': return new ReferenceAttachment();
                case '#microsoft.graph.remoteAssistancePartner': return new RemoteAssistancePartner();
                case '#microsoft.graph.request': return new Request();
                case '#microsoft.graph.resourceOperation': return new ResourceOperation();
                case '#microsoft.graph.resourceSpecificPermissionGrant': return new ResourceSpecificPermissionGrant();
                case '#microsoft.graph.richLongRunningOperation': return new RichLongRunningOperation();
                case '#microsoft.graph.riskDetection': return new RiskDetection();
                case '#microsoft.graph.riskyServicePrincipal': return new RiskyServicePrincipal();
                case '#microsoft.graph.riskyServicePrincipalHistoryItem': return new RiskyServicePrincipalHistoryItem();
                case '#microsoft.graph.riskyUser': return new RiskyUser();
                case '#microsoft.graph.riskyUserHistoryItem': return new RiskyUserHistoryItem();
                case '#microsoft.graph.roleAssignment': return new RoleAssignment();
                case '#microsoft.graph.roleDefinition': return new RoleDefinition();
                case '#microsoft.graph.room': return new Room();
                case '#microsoft.graph.roomList': return new RoomList();
                case '#microsoft.graph.samlOrWsFedExternalDomainFederation': return new SamlOrWsFedExternalDomainFederation();
                case '#microsoft.graph.samlOrWsFedProvider': return new SamlOrWsFedProvider();
                case '#microsoft.graph.schedule': return new Schedule();
                case '#microsoft.graph.scheduleChangeRequest': return new ScheduleChangeRequest();
                case '#microsoft.graph.schedulingGroup': return new SchedulingGroup();
                case '#microsoft.graph.schemaExtension': return new SchemaExtension();
                case '#microsoft.graph.scopedRoleMembership': return new ScopedRoleMembership();
                case '#microsoft.graph.searchEntity': return new SearchEntity();
                case '#microsoft.graph.sectionGroup': return new SectionGroup();
                case '#microsoft.graph.secureScore': return new SecureScore();
                case '#microsoft.graph.secureScoreControlProfile': return new SecureScoreControlProfile();
                case '#microsoft.graph.security': return new Security();
                case '#microsoft.graph.security.alert': return new Alert();
                case '#microsoft.graph.security.article': return new Article();
                case '#microsoft.graph.security.articleIndicator': return new ArticleIndicator();
                case '#microsoft.graph.security.artifact': return new Artifact();
                case '#microsoft.graph.security.case': return new EscapedCase();
                case '#microsoft.graph.security.caseOperation': return new CaseOperation();
                case '#microsoft.graph.security.casesRoot': return new CasesRoot();
                case '#microsoft.graph.security.dataSet': return new DataSet();
                case '#microsoft.graph.security.dataSource': return new DataSource();
                case '#microsoft.graph.security.dataSourceContainer': return new DataSourceContainer();
                case '#microsoft.graph.security.ediscoveryAddToReviewSetOperation': return new EdiscoveryAddToReviewSetOperation();
                case '#microsoft.graph.security.ediscoveryCase': return new EdiscoveryCase();
                case '#microsoft.graph.security.ediscoveryCaseSettings': return new EdiscoveryCaseSettings();
                case '#microsoft.graph.security.ediscoveryCustodian': return new EdiscoveryCustodian();
                case '#microsoft.graph.security.ediscoveryEstimateOperation': return new EdiscoveryEstimateOperation();
                case '#microsoft.graph.security.ediscoveryExportOperation': return new EdiscoveryExportOperation();
                case '#microsoft.graph.security.ediscoveryHoldOperation': return new EdiscoveryHoldOperation();
                case '#microsoft.graph.security.ediscoveryIndexOperation': return new EdiscoveryIndexOperation();
                case '#microsoft.graph.security.ediscoveryNoncustodialDataSource': return new EdiscoveryNoncustodialDataSource();
                case '#microsoft.graph.security.ediscoveryPurgeDataOperation': return new EdiscoveryPurgeDataOperation();
                case '#microsoft.graph.security.ediscoveryReviewSet': return new EdiscoveryReviewSet();
                case '#microsoft.graph.security.ediscoveryReviewSetQuery': return new EdiscoveryReviewSetQuery();
                case '#microsoft.graph.security.ediscoveryReviewTag': return new EdiscoveryReviewTag();
                case '#microsoft.graph.security.ediscoverySearch': return new EdiscoverySearch();
                case '#microsoft.graph.security.ediscoveryTagOperation': return new EdiscoveryTagOperation();
                case '#microsoft.graph.security.host': return new Host();
                case '#microsoft.graph.security.hostComponent': return new HostComponent();
                case '#microsoft.graph.security.hostCookie': return new HostCookie();
                case '#microsoft.graph.security.hostname': return new Hostname();
                case '#microsoft.graph.security.hostReputation': return new HostReputation();
                case '#microsoft.graph.security.hostTracker': return new HostTracker();
                case '#microsoft.graph.security.incident': return new Incident();
                case '#microsoft.graph.security.indicator': return new Indicator();
                case '#microsoft.graph.security.intelligenceProfile': return new IntelligenceProfile();
                case '#microsoft.graph.security.intelligenceProfileIndicator': return new IntelligenceProfileIndicator();
                case '#microsoft.graph.security.ipAddress': return new IpAddress();
                case '#microsoft.graph.security.passiveDnsRecord': return new PassiveDnsRecord();
                case '#microsoft.graph.security.retentionEvent': return new RetentionEvent();
                case '#microsoft.graph.security.retentionEventType': return new RetentionEventType();
                case '#microsoft.graph.security.search': return new Search();
                case '#microsoft.graph.security.siteSource': return new SiteSource();
                case '#microsoft.graph.security.tag': return new Tag();
                case '#microsoft.graph.security.threatIntelligence': return new ThreatIntelligence();
                case '#microsoft.graph.security.triggersRoot': return new TriggersRoot();
                case '#microsoft.graph.security.triggerTypesRoot': return new TriggerTypesRoot();
                case '#microsoft.graph.security.unclassifiedArtifact': return new UnclassifiedArtifact();
                case '#microsoft.graph.security.unifiedGroupSource': return new UnifiedGroupSource();
                case '#microsoft.graph.security.userSource': return new UserSource();
                case '#microsoft.graph.security.vulnerability': return new Vulnerability();
                case '#microsoft.graph.security.vulnerabilityComponent': return new VulnerabilityComponent();
                case '#microsoft.graph.securityReportsRoot': return new SecurityReportsRoot();
                case '#microsoft.graph.serviceAnnouncement': return new ServiceAnnouncement();
                case '#microsoft.graph.serviceAnnouncementAttachment': return new ServiceAnnouncementAttachment();
                case '#microsoft.graph.serviceAnnouncementBase': return new ServiceAnnouncementBase();
                case '#microsoft.graph.serviceHealth': return new ServiceHealth();
                case '#microsoft.graph.serviceHealthIssue': return new ServiceHealthIssue();
                case '#microsoft.graph.servicePrincipal': return new ServicePrincipal();
                case '#microsoft.graph.servicePrincipalRiskDetection': return new ServicePrincipalRiskDetection();
                case '#microsoft.graph.serviceUpdateMessage': return new ServiceUpdateMessage();
                case '#microsoft.graph.settingStateDeviceSummary': return new SettingStateDeviceSummary();
                case '#microsoft.graph.sharedDriveItem': return new SharedDriveItem();
                case '#microsoft.graph.sharedInsight': return new SharedInsight();
                case '#microsoft.graph.sharedPCConfiguration': return new SharedPCConfiguration();
                case '#microsoft.graph.sharedWithChannelTeamInfo': return new SharedWithChannelTeamInfo();
                case '#microsoft.graph.sharepoint': return new Sharepoint();
                case '#microsoft.graph.sharepointSettings': return new SharepointSettings();
                case '#microsoft.graph.shift': return new Shift();
                case '#microsoft.graph.shiftPreferences': return new ShiftPreferences();
                case '#microsoft.graph.signIn': return new SignIn();
                case '#microsoft.graph.simulation': return new Simulation();
                case '#microsoft.graph.simulationAutomation': return new SimulationAutomation();
                case '#microsoft.graph.simulationAutomationRun': return new SimulationAutomationRun();
                case '#microsoft.graph.singleValueLegacyExtendedProperty': return new SingleValueLegacyExtendedProperty();
                case '#microsoft.graph.site': return new Site();
                case '#microsoft.graph.skypeForBusinessUserConversationMember': return new SkypeForBusinessUserConversationMember();
                case '#microsoft.graph.skypeUserConversationMember': return new SkypeUserConversationMember();
                case '#microsoft.graph.smsAuthenticationMethodConfiguration': return new SmsAuthenticationMethodConfiguration();
                case '#microsoft.graph.smsAuthenticationMethodTarget': return new SmsAuthenticationMethodTarget();
                case '#microsoft.graph.socialIdentityProvider': return new SocialIdentityProvider();
                case '#microsoft.graph.softwareOathAuthenticationMethod': return new SoftwareOathAuthenticationMethod();
                case '#microsoft.graph.softwareOathAuthenticationMethodConfiguration': return new SoftwareOathAuthenticationMethodConfiguration();
                case '#microsoft.graph.softwareUpdateStatusSummary': return new SoftwareUpdateStatusSummary();
                case '#microsoft.graph.startHoldMusicOperation': return new StartHoldMusicOperation();
                case '#microsoft.graph.stopHoldMusicOperation': return new StopHoldMusicOperation();
                case '#microsoft.graph.stsPolicy': return new StsPolicy();
                case '#microsoft.graph.subjectRightsRequest': return new SubjectRightsRequest();
                case '#microsoft.graph.subscribedSku': return new SubscribedSku();
                case '#microsoft.graph.subscribeToToneOperation': return new SubscribeToToneOperation();
                case '#microsoft.graph.subscription': return new Subscription();
                case '#microsoft.graph.swapShiftsChangeRequest': return new SwapShiftsChangeRequest();
                case '#microsoft.graph.synchronization': return new Synchronization();
                case '#microsoft.graph.synchronizationJob': return new SynchronizationJob();
                case '#microsoft.graph.synchronizationSchema': return new SynchronizationSchema();
                case '#microsoft.graph.synchronizationTemplate': return new SynchronizationTemplate();
                case '#microsoft.graph.targetedManagedAppConfiguration': return new TargetedManagedAppConfiguration();
                case '#microsoft.graph.targetedManagedAppPolicyAssignment': return new TargetedManagedAppPolicyAssignment();
                case '#microsoft.graph.targetedManagedAppProtection': return new TargetedManagedAppProtection();
                case '#microsoft.graph.taskFileAttachment': return new TaskFileAttachment();
                case '#microsoft.graph.team': return new Team();
                case '#microsoft.graph.teamInfo': return new TeamInfo();
                case '#microsoft.graph.teamsApp': return new TeamsApp();
                case '#microsoft.graph.teamsAppDefinition': return new TeamsAppDefinition();
                case '#microsoft.graph.teamsAppInstallation': return new TeamsAppInstallation();
                case '#microsoft.graph.teamsAsyncOperation': return new TeamsAsyncOperation();
                case '#microsoft.graph.teamsTab': return new TeamsTab();
                case '#microsoft.graph.teamsTemplate': return new TeamsTemplate();
                case '#microsoft.graph.teamwork': return new Teamwork();
                case '#microsoft.graph.teamworkBot': return new TeamworkBot();
                case '#microsoft.graph.teamworkHostedContent': return new TeamworkHostedContent();
                case '#microsoft.graph.teamworkTag': return new TeamworkTag();
                case '#microsoft.graph.teamworkTagMember': return new TeamworkTagMember();
                case '#microsoft.graph.telecomExpenseManagementPartner': return new TelecomExpenseManagementPartner();
                case '#microsoft.graph.temporaryAccessPassAuthenticationMethod': return new TemporaryAccessPassAuthenticationMethod();
                case '#microsoft.graph.temporaryAccessPassAuthenticationMethodConfiguration': return new TemporaryAccessPassAuthenticationMethodConfiguration();
                case '#microsoft.graph.tenantAppManagementPolicy': return new TenantAppManagementPolicy();
                case '#microsoft.graph.termsAndConditions': return new TermsAndConditions();
                case '#microsoft.graph.termsAndConditionsAcceptanceStatus': return new TermsAndConditionsAcceptanceStatus();
                case '#microsoft.graph.termsAndConditionsAssignment': return new TermsAndConditionsAssignment();
                case '#microsoft.graph.termsOfUseContainer': return new TermsOfUseContainer();
                case '#microsoft.graph.termStore.group': return new Group();
                case '#microsoft.graph.termStore.relation': return new Relation();
                case '#microsoft.graph.termStore.set': return new Set();
                case '#microsoft.graph.termStore.store': return new Store();
                case '#microsoft.graph.termStore.term': return new Term();
                case '#microsoft.graph.threatAssessmentRequest': return new ThreatAssessmentRequest();
                case '#microsoft.graph.threatAssessmentResult': return new ThreatAssessmentResult();
                case '#microsoft.graph.thumbnailSet': return new ThumbnailSet();
                case '#microsoft.graph.timeOff': return new TimeOff();
                case '#microsoft.graph.timeOffReason': return new TimeOffReason();
                case '#microsoft.graph.timeOffRequest': return new TimeOffRequest();
                case '#microsoft.graph.todo': return new Todo();
                case '#microsoft.graph.todoTask': return new TodoTask();
                case '#microsoft.graph.todoTaskList': return new TodoTaskList();
                case '#microsoft.graph.tokenIssuancePolicy': return new TokenIssuancePolicy();
                case '#microsoft.graph.tokenLifetimePolicy': return new TokenLifetimePolicy();
                case '#microsoft.graph.trending': return new Trending();
                case '#microsoft.graph.unifiedRbacResourceAction': return new UnifiedRbacResourceAction();
                case '#microsoft.graph.unifiedRbacResourceNamespace': return new UnifiedRbacResourceNamespace();
                case '#microsoft.graph.unifiedRoleAssignment': return new UnifiedRoleAssignment();
                case '#microsoft.graph.unifiedRoleAssignmentSchedule': return new UnifiedRoleAssignmentSchedule();
                case '#microsoft.graph.unifiedRoleAssignmentScheduleInstance': return new UnifiedRoleAssignmentScheduleInstance();
                case '#microsoft.graph.unifiedRoleAssignmentScheduleRequest': return new UnifiedRoleAssignmentScheduleRequest();
                case '#microsoft.graph.unifiedRoleDefinition': return new UnifiedRoleDefinition();
                case '#microsoft.graph.unifiedRoleEligibilitySchedule': return new UnifiedRoleEligibilitySchedule();
                case '#microsoft.graph.unifiedRoleEligibilityScheduleInstance': return new UnifiedRoleEligibilityScheduleInstance();
                case '#microsoft.graph.unifiedRoleEligibilityScheduleRequest': return new UnifiedRoleEligibilityScheduleRequest();
                case '#microsoft.graph.unifiedRoleManagementPolicy': return new UnifiedRoleManagementPolicy();
                case '#microsoft.graph.unifiedRoleManagementPolicyApprovalRule': return new UnifiedRoleManagementPolicyApprovalRule();
                case '#microsoft.graph.unifiedRoleManagementPolicyAssignment': return new UnifiedRoleManagementPolicyAssignment();
                case '#microsoft.graph.unifiedRoleManagementPolicyAuthenticationContextRule': return new UnifiedRoleManagementPolicyAuthenticationContextRule();
                case '#microsoft.graph.unifiedRoleManagementPolicyEnablementRule': return new UnifiedRoleManagementPolicyEnablementRule();
                case '#microsoft.graph.unifiedRoleManagementPolicyExpirationRule': return new UnifiedRoleManagementPolicyExpirationRule();
                case '#microsoft.graph.unifiedRoleManagementPolicyNotificationRule': return new UnifiedRoleManagementPolicyNotificationRule();
                case '#microsoft.graph.unifiedRoleManagementPolicyRule': return new UnifiedRoleManagementPolicyRule();
                case '#microsoft.graph.unifiedRoleScheduleBase': return new UnifiedRoleScheduleBase();
                case '#microsoft.graph.unifiedRoleScheduleInstanceBase': return new UnifiedRoleScheduleInstanceBase();
                case '#microsoft.graph.unmuteParticipantOperation': return new UnmuteParticipantOperation();
                case '#microsoft.graph.updateRecordingStatusOperation': return new UpdateRecordingStatusOperation();
                case '#microsoft.graph.urlAssessmentRequest': return new UrlAssessmentRequest();
                case '#microsoft.graph.usedInsight': return new UsedInsight();
                case '#microsoft.graph.user': return new User();
                case '#microsoft.graph.userActivity': return new UserActivity();
                case '#microsoft.graph.userConsentRequest': return new UserConsentRequest();
                case '#microsoft.graph.userExperienceAnalyticsAppHealthApplicationPerformance': return new UserExperienceAnalyticsAppHealthApplicationPerformance();
                case '#microsoft.graph.userExperienceAnalyticsAppHealthAppPerformanceByAppVersionDetails': return new UserExperienceAnalyticsAppHealthAppPerformanceByAppVersionDetails();
                case '#microsoft.graph.userExperienceAnalyticsAppHealthAppPerformanceByAppVersionDeviceId': return new UserExperienceAnalyticsAppHealthAppPerformanceByAppVersionDeviceId();
                case '#microsoft.graph.userExperienceAnalyticsAppHealthAppPerformanceByOSVersion': return new UserExperienceAnalyticsAppHealthAppPerformanceByOSVersion();
                case '#microsoft.graph.userExperienceAnalyticsAppHealthDeviceModelPerformance': return new UserExperienceAnalyticsAppHealthDeviceModelPerformance();
                case '#microsoft.graph.userExperienceAnalyticsAppHealthDevicePerformance': return new UserExperienceAnalyticsAppHealthDevicePerformance();
                case '#microsoft.graph.userExperienceAnalyticsAppHealthDevicePerformanceDetails': return new UserExperienceAnalyticsAppHealthDevicePerformanceDetails();
                case '#microsoft.graph.userExperienceAnalyticsAppHealthOSVersionPerformance': return new UserExperienceAnalyticsAppHealthOSVersionPerformance();
                case '#microsoft.graph.userExperienceAnalyticsBaseline': return new UserExperienceAnalyticsBaseline();
                case '#microsoft.graph.userExperienceAnalyticsCategory': return new UserExperienceAnalyticsCategory();
                case '#microsoft.graph.userExperienceAnalyticsDevicePerformance': return new UserExperienceAnalyticsDevicePerformance();
                case '#microsoft.graph.userExperienceAnalyticsDeviceScores': return new UserExperienceAnalyticsDeviceScores();
                case '#microsoft.graph.userExperienceAnalyticsDeviceStartupHistory': return new UserExperienceAnalyticsDeviceStartupHistory();
                case '#microsoft.graph.userExperienceAnalyticsDeviceStartupProcess': return new UserExperienceAnalyticsDeviceStartupProcess();
                case '#microsoft.graph.userExperienceAnalyticsMetric': return new UserExperienceAnalyticsMetric();
                case '#microsoft.graph.userExperienceAnalyticsMetricHistory': return new UserExperienceAnalyticsMetricHistory();
                case '#microsoft.graph.userExperienceAnalyticsModelScores': return new UserExperienceAnalyticsModelScores();
                case '#microsoft.graph.userExperienceAnalyticsOverview': return new UserExperienceAnalyticsOverview();
                case '#microsoft.graph.userExperienceAnalyticsScoreHistory': return new UserExperienceAnalyticsScoreHistory();
                case '#microsoft.graph.userExperienceAnalyticsWorkFromAnywhereDevice': return new UserExperienceAnalyticsWorkFromAnywhereDevice();
                case '#microsoft.graph.userExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric': return new UserExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric();
                case '#microsoft.graph.userExperienceAnalyticsWorkFromAnywhereMetric': return new UserExperienceAnalyticsWorkFromAnywhereMetric();
                case '#microsoft.graph.userExperienceAnalyticsWorkFromAnywhereModelPerformance': return new UserExperienceAnalyticsWorkFromAnywhereModelPerformance();
                case '#microsoft.graph.userFlowLanguageConfiguration': return new UserFlowLanguageConfiguration();
                case '#microsoft.graph.userFlowLanguagePage': return new UserFlowLanguagePage();
                case '#microsoft.graph.userInstallStateSummary': return new UserInstallStateSummary();
                case '#microsoft.graph.userRegistrationDetails': return new UserRegistrationDetails();
                case '#microsoft.graph.userScopeTeamsAppInstallation': return new UserScopeTeamsAppInstallation();
                case '#microsoft.graph.userSettings': return new UserSettings();
                case '#microsoft.graph.userSignInInsight': return new UserSignInInsight();
                case '#microsoft.graph.userTeamwork': return new UserTeamwork();
                case '#microsoft.graph.voiceAuthenticationMethodConfiguration': return new VoiceAuthenticationMethodConfiguration();
                case '#microsoft.graph.vppToken': return new VppToken();
                case '#microsoft.graph.webApp': return new WebApp();
                case '#microsoft.graph.win32LobApp': return new Win32LobApp();
                case '#microsoft.graph.windows10CompliancePolicy': return new Windows10CompliancePolicy();
                case '#microsoft.graph.windows10CustomConfiguration': return new Windows10CustomConfiguration();
                case '#microsoft.graph.windows10EndpointProtectionConfiguration': return new Windows10EndpointProtectionConfiguration();
                case '#microsoft.graph.windows10EnterpriseModernAppManagementConfiguration': return new Windows10EnterpriseModernAppManagementConfiguration();
                case '#microsoft.graph.windows10GeneralConfiguration': return new Windows10GeneralConfiguration();
                case '#microsoft.graph.windows10MobileCompliancePolicy': return new Windows10MobileCompliancePolicy();
                case '#microsoft.graph.windows10SecureAssessmentConfiguration': return new Windows10SecureAssessmentConfiguration();
                case '#microsoft.graph.windows10TeamGeneralConfiguration': return new Windows10TeamGeneralConfiguration();
                case '#microsoft.graph.windows81CompliancePolicy': return new Windows81CompliancePolicy();
                case '#microsoft.graph.windows81GeneralConfiguration': return new Windows81GeneralConfiguration();
                case '#microsoft.graph.windowsAppX': return new WindowsAppX();
                case '#microsoft.graph.windowsAutopilotDeviceIdentity': return new WindowsAutopilotDeviceIdentity();
                case '#microsoft.graph.windowsDefenderAdvancedThreatProtectionConfiguration': return new WindowsDefenderAdvancedThreatProtectionConfiguration();
                case '#microsoft.graph.windowsDeviceMalwareState': return new WindowsDeviceMalwareState();
                case '#microsoft.graph.windowsHelloForBusinessAuthenticationMethod': return new WindowsHelloForBusinessAuthenticationMethod();
                case '#microsoft.graph.windowsInformationProtection': return new WindowsInformationProtection();
                case '#microsoft.graph.windowsInformationProtectionAppLearningSummary': return new WindowsInformationProtectionAppLearningSummary();
                case '#microsoft.graph.windowsInformationProtectionAppLockerFile': return new WindowsInformationProtectionAppLockerFile();
                case '#microsoft.graph.windowsInformationProtectionNetworkLearningSummary': return new WindowsInformationProtectionNetworkLearningSummary();
                case '#microsoft.graph.windowsInformationProtectionPolicy': return new WindowsInformationProtectionPolicy();
                case '#microsoft.graph.windowsMalwareInformation': return new WindowsMalwareInformation();
                case '#microsoft.graph.windowsMicrosoftEdgeApp': return new WindowsMicrosoftEdgeApp();
                case '#microsoft.graph.windowsMobileMSI': return new WindowsMobileMSI();
                case '#microsoft.graph.windowsPhone81CompliancePolicy': return new WindowsPhone81CompliancePolicy();
                case '#microsoft.graph.windowsPhone81CustomConfiguration': return new WindowsPhone81CustomConfiguration();
                case '#microsoft.graph.windowsPhone81GeneralConfiguration': return new WindowsPhone81GeneralConfiguration();
                case '#microsoft.graph.windowsProtectionState': return new WindowsProtectionState();
                case '#microsoft.graph.windowsUniversalAppX': return new WindowsUniversalAppX();
                case '#microsoft.graph.windowsUniversalAppXContainedApp': return new WindowsUniversalAppXContainedApp();
                case '#microsoft.graph.windowsUpdateForBusinessConfiguration': return new WindowsUpdateForBusinessConfiguration();
                case '#microsoft.graph.windowsWebApp': return new WindowsWebApp();
                case '#microsoft.graph.workbook': return new Workbook();
                case '#microsoft.graph.workbookApplication': return new WorkbookApplication();
                case '#microsoft.graph.workbookChart': return new WorkbookChart();
                case '#microsoft.graph.workbookChartAreaFormat': return new WorkbookChartAreaFormat();
                case '#microsoft.graph.workbookChartAxes': return new WorkbookChartAxes();
                case '#microsoft.graph.workbookChartAxis': return new WorkbookChartAxis();
                case '#microsoft.graph.workbookChartAxisFormat': return new WorkbookChartAxisFormat();
                case '#microsoft.graph.workbookChartAxisTitle': return new WorkbookChartAxisTitle();
                case '#microsoft.graph.workbookChartAxisTitleFormat': return new WorkbookChartAxisTitleFormat();
                case '#microsoft.graph.workbookChartDataLabelFormat': return new WorkbookChartDataLabelFormat();
                case '#microsoft.graph.workbookChartDataLabels': return new WorkbookChartDataLabels();
                case '#microsoft.graph.workbookChartFill': return new WorkbookChartFill();
                case '#microsoft.graph.workbookChartFont': return new WorkbookChartFont();
                case '#microsoft.graph.workbookChartGridlines': return new WorkbookChartGridlines();
                case '#microsoft.graph.workbookChartGridlinesFormat': return new WorkbookChartGridlinesFormat();
                case '#microsoft.graph.workbookChartLegend': return new WorkbookChartLegend();
                case '#microsoft.graph.workbookChartLegendFormat': return new WorkbookChartLegendFormat();
                case '#microsoft.graph.workbookChartLineFormat': return new WorkbookChartLineFormat();
                case '#microsoft.graph.workbookChartPoint': return new WorkbookChartPoint();
                case '#microsoft.graph.workbookChartPointFormat': return new WorkbookChartPointFormat();
                case '#microsoft.graph.workbookChartSeries': return new WorkbookChartSeries();
                case '#microsoft.graph.workbookChartSeriesFormat': return new WorkbookChartSeriesFormat();
                case '#microsoft.graph.workbookChartTitle': return new WorkbookChartTitle();
                case '#microsoft.graph.workbookChartTitleFormat': return new WorkbookChartTitleFormat();
                case '#microsoft.graph.workbookComment': return new WorkbookComment();
                case '#microsoft.graph.workbookCommentReply': return new WorkbookCommentReply();
                case '#microsoft.graph.workbookFilter': return new WorkbookFilter();
                case '#microsoft.graph.workbookFormatProtection': return new WorkbookFormatProtection();
                case '#microsoft.graph.workbookFunctionResult': return new WorkbookFunctionResult();
                case '#microsoft.graph.workbookFunctions': return new WorkbookFunctions();
                case '#microsoft.graph.workbookNamedItem': return new WorkbookNamedItem();
                case '#microsoft.graph.workbookOperation': return new WorkbookOperation();
                case '#microsoft.graph.workbookPivotTable': return new WorkbookPivotTable();
                case '#microsoft.graph.workbookRange': return new WorkbookRange();
                case '#microsoft.graph.workbookRangeBorder': return new WorkbookRangeBorder();
                case '#microsoft.graph.workbookRangeFill': return new WorkbookRangeFill();
                case '#microsoft.graph.workbookRangeFont': return new WorkbookRangeFont();
                case '#microsoft.graph.workbookRangeFormat': return new WorkbookRangeFormat();
                case '#microsoft.graph.workbookRangeSort': return new WorkbookRangeSort();
                case '#microsoft.graph.workbookRangeView': return new WorkbookRangeView();
                case '#microsoft.graph.workbookTable': return new WorkbookTable();
                case '#microsoft.graph.workbookTableColumn': return new WorkbookTableColumn();
                case '#microsoft.graph.workbookTableRow': return new WorkbookTableRow();
                case '#microsoft.graph.workbookTableSort': return new WorkbookTableSort();
                case '#microsoft.graph.workbookWorksheet': return new WorkbookWorksheet();
                case '#microsoft.graph.workbookWorksheetProtection': return new WorkbookWorksheetProtection();
                case '#microsoft.graph.workforceIntegration': return new WorkforceIntegration();
                case '#microsoft.graph.x509CertificateAuthenticationMethodConfiguration': return new X509CertificateAuthenticationMethodConfiguration();
            }
        }
        return new Entity();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
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
     * Gets the backingStore property value. Stores model information.
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
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ];
    }

    /**
     * Gets the id property value. The unique idenfier for an entity. Read-only.
     * @return string|null
    */
    public function getId(): ?string {
        $val = $this->getBackingStore()->get('id');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'id'");
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
        $writer->writeStringValue('id', $this->getId());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the id property value. The unique idenfier for an entity. Read-only.
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->getBackingStore()->set('id', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
