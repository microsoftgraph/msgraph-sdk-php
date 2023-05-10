<?php

namespace Microsoft\Graph\Generated;

use Microsoft\Graph\Generated\Admin\AdminRequestBuilder;
use Microsoft\Graph\Generated\AgreementAcceptances\AgreementAcceptancesRequestBuilder;
use Microsoft\Graph\Generated\Agreements\AgreementsRequestBuilder;
use Microsoft\Graph\Generated\AppCatalogs\AppCatalogsRequestBuilder;
use Microsoft\Graph\Generated\Applications\ApplicationsRequestBuilder;
use Microsoft\Graph\Generated\ApplicationTemplates\ApplicationTemplatesRequestBuilder;
use Microsoft\Graph\Generated\AuditLogs\AuditLogsRequestBuilder;
use Microsoft\Graph\Generated\AuthenticationMethodConfigurations\AuthenticationMethodConfigurationsRequestBuilder;
use Microsoft\Graph\Generated\AuthenticationMethodsPolicy\AuthenticationMethodsPolicyRequestBuilder;
use Microsoft\Graph\Generated\Branding\BrandingRequestBuilder;
use Microsoft\Graph\Generated\CertificateBasedAuthConfiguration\CertificateBasedAuthConfigurationRequestBuilder;
use Microsoft\Graph\Generated\Chats\ChatsRequestBuilder;
use Microsoft\Graph\Generated\Communications\CommunicationsRequestBuilder;
use Microsoft\Graph\Generated\Compliance\ComplianceRequestBuilder;
use Microsoft\Graph\Generated\Connections\ConnectionsRequestBuilder;
use Microsoft\Graph\Generated\Contacts\ContactsRequestBuilder;
use Microsoft\Graph\Generated\Contracts\ContractsRequestBuilder;
use Microsoft\Graph\Generated\DataPolicyOperations\DataPolicyOperationsRequestBuilder;
use Microsoft\Graph\Generated\DeviceAppManagement\DeviceAppManagementRequestBuilder;
use Microsoft\Graph\Generated\DeviceManagement\DeviceManagementRequestBuilder;
use Microsoft\Graph\Generated\Devices\DevicesRequestBuilder;
use Microsoft\Graph\Generated\Directory\DirectoryRequestBuilder;
use Microsoft\Graph\Generated\DirectoryObjects\DirectoryObjectsRequestBuilder;
use Microsoft\Graph\Generated\DirectoryRoles\DirectoryRolesRequestBuilder;
use Microsoft\Graph\Generated\DirectoryRoleTemplates\DirectoryRoleTemplatesRequestBuilder;
use Microsoft\Graph\Generated\DomainDnsRecords\DomainDnsRecordsRequestBuilder;
use Microsoft\Graph\Generated\Domains\DomainsRequestBuilder;
use Microsoft\Graph\Generated\Drives\DrivesRequestBuilder;
use Microsoft\Graph\Generated\Education\EducationRequestBuilder;
use Microsoft\Graph\Generated\EmployeeExperience\EmployeeExperienceRequestBuilder;
use Microsoft\Graph\Generated\EscapedPrint\PrintRequestBuilder;
use Microsoft\Graph\Generated\External\ExternalRequestBuilder;
use Microsoft\Graph\Generated\GroupLifecyclePolicies\GroupLifecyclePoliciesRequestBuilder;
use Microsoft\Graph\Generated\Groups\GroupsRequestBuilder;
use Microsoft\Graph\Generated\GroupSettings\GroupSettingsRequestBuilder;
use Microsoft\Graph\Generated\GroupSettingTemplates\GroupSettingTemplatesRequestBuilder;
use Microsoft\Graph\Generated\Identity\IdentityRequestBuilder;
use Microsoft\Graph\Generated\IdentityGovernance\IdentityGovernanceRequestBuilder;
use Microsoft\Graph\Generated\IdentityProtection\IdentityProtectionRequestBuilder;
use Microsoft\Graph\Generated\IdentityProviders\IdentityProvidersRequestBuilder;
use Microsoft\Graph\Generated\InformationProtection\InformationProtectionRequestBuilder;
use Microsoft\Graph\Generated\Invitations\InvitationsRequestBuilder;
use Microsoft\Graph\Generated\Localizations\LocalizationsRequestBuilder;
use Microsoft\Graph\Generated\Oauth2PermissionGrants\Oauth2PermissionGrantsRequestBuilder;
use Microsoft\Graph\Generated\Organization\OrganizationRequestBuilder;
use Microsoft\Graph\Generated\PermissionGrants\PermissionGrantsRequestBuilder;
use Microsoft\Graph\Generated\Places\PlacesRequestBuilder;
use Microsoft\Graph\Generated\Planner\PlannerRequestBuilder;
use Microsoft\Graph\Generated\Policies\PoliciesRequestBuilder;
use Microsoft\Graph\Generated\Privacy\PrivacyRequestBuilder;
use Microsoft\Graph\Generated\Reports\ReportsRequestBuilder;
use Microsoft\Graph\Generated\RoleManagement\RoleManagementRequestBuilder;
use Microsoft\Graph\Generated\SchemaExtensions\SchemaExtensionsRequestBuilder;
use Microsoft\Graph\Generated\ScopedRoleMemberships\ScopedRoleMembershipsRequestBuilder;
use Microsoft\Graph\Generated\Search\SearchRequestBuilder;
use Microsoft\Graph\Generated\Security\SecurityRequestBuilder;
use Microsoft\Graph\Generated\ServicePrincipals\ServicePrincipalsRequestBuilder;
use Microsoft\Graph\Generated\Shares\SharesRequestBuilder;
use Microsoft\Graph\Generated\Sites\SitesRequestBuilder;
use Microsoft\Graph\Generated\Solutions\SolutionsRequestBuilder;
use Microsoft\Graph\Generated\SubscribedSkus\SubscribedSkusRequestBuilder;
use Microsoft\Graph\Generated\Subscriptions\SubscriptionsRequestBuilder;
use Microsoft\Graph\Generated\Teams\TeamsRequestBuilder;
use Microsoft\Graph\Generated\TeamsTemplates\TeamsTemplatesRequestBuilder;
use Microsoft\Graph\Generated\Teamwork\TeamworkRequestBuilder;
use Microsoft\Graph\Generated\TenantRelationships\TenantRelationshipsRequestBuilder;
use Microsoft\Graph\Generated\Users\UsersRequestBuilder;
use Microsoft\Kiota\Abstractions\ApiClientBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactory;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Serialization\Json\JsonParseNodeFactory;
use Microsoft\Kiota\Serialization\Json\JsonSerializationWriterFactory;
use Microsoft\Kiota\Serialization\Text\TextParseNodeFactory;
use Microsoft\Kiota\Serialization\Text\TextSerializationWriterFactory;

/**
 * The main entry point of the SDK, exposes the configuration and the fluent API.
*/
class BaseGraphClient extends BaseRequestBuilder 
{
    /**
     * Provides operations to manage the admin singleton.
    */
    public function admin(): AdminRequestBuilder {
        return new AdminRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the collection of agreementAcceptance entities.
    */
    public function agreementAcceptances(): AgreementAcceptancesRequestBuilder {
        return new AgreementAcceptancesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the collection of agreement entities.
    */
    public function agreements(): AgreementsRequestBuilder {
        return new AgreementsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the appCatalogs singleton.
    */
    public function appCatalogs(): AppCatalogsRequestBuilder {
        return new AppCatalogsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the collection of application entities.
    */
    public function applications(): ApplicationsRequestBuilder {
        return new ApplicationsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the collection of applicationTemplate entities.
    */
    public function applicationTemplates(): ApplicationTemplatesRequestBuilder {
        return new ApplicationTemplatesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the auditLogRoot singleton.
    */
    public function auditLogs(): AuditLogsRequestBuilder {
        return new AuditLogsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the collection of authenticationMethodConfiguration entities.
    */
    public function authenticationMethodConfigurations(): AuthenticationMethodConfigurationsRequestBuilder {
        return new AuthenticationMethodConfigurationsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the authenticationMethodsPolicy singleton.
    */
    public function authenticationMethodsPolicy(): AuthenticationMethodsPolicyRequestBuilder {
        return new AuthenticationMethodsPolicyRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the organizationalBranding singleton.
    */
    public function branding(): BrandingRequestBuilder {
        return new BrandingRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the collection of certificateBasedAuthConfiguration entities.
    */
    public function certificateBasedAuthConfiguration(): CertificateBasedAuthConfigurationRequestBuilder {
        return new CertificateBasedAuthConfigurationRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the collection of chat entities.
    */
    public function chats(): ChatsRequestBuilder {
        return new ChatsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the cloudCommunications singleton.
    */
    public function communications(): CommunicationsRequestBuilder {
        return new CommunicationsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the compliance singleton.
    */
    public function compliance(): ComplianceRequestBuilder {
        return new ComplianceRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the collection of externalConnection entities.
    */
    public function connections(): ConnectionsRequestBuilder {
        return new ConnectionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the collection of orgContact entities.
    */
    public function contacts(): ContactsRequestBuilder {
        return new ContactsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the collection of contract entities.
    */
    public function contracts(): ContractsRequestBuilder {
        return new ContractsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the collection of dataPolicyOperation entities.
    */
    public function dataPolicyOperations(): DataPolicyOperationsRequestBuilder {
        return new DataPolicyOperationsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the deviceAppManagement singleton.
    */
    public function deviceAppManagement(): DeviceAppManagementRequestBuilder {
        return new DeviceAppManagementRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the deviceManagement singleton.
    */
    public function deviceManagement(): DeviceManagementRequestBuilder {
        return new DeviceManagementRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the collection of device entities.
    */
    public function devices(): DevicesRequestBuilder {
        return new DevicesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the directory singleton.
    */
    public function directory(): DirectoryRequestBuilder {
        return new DirectoryRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the collection of directoryObject entities.
    */
    public function directoryObjects(): DirectoryObjectsRequestBuilder {
        return new DirectoryObjectsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the collection of directoryRole entities.
    */
    public function directoryRoles(): DirectoryRolesRequestBuilder {
        return new DirectoryRolesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the collection of directoryRoleTemplate entities.
    */
    public function directoryRoleTemplates(): DirectoryRoleTemplatesRequestBuilder {
        return new DirectoryRoleTemplatesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the collection of domainDnsRecord entities.
    */
    public function domainDnsRecords(): DomainDnsRecordsRequestBuilder {
        return new DomainDnsRecordsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the collection of domain entities.
    */
    public function domains(): DomainsRequestBuilder {
        return new DomainsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the collection of drive entities.
    */
    public function drives(): DrivesRequestBuilder {
        return new DrivesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the educationRoot singleton.
    */
    public function education(): EducationRequestBuilder {
        return new EducationRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the employeeExperience singleton.
    */
    public function employeeExperience(): EmployeeExperienceRequestBuilder {
        return new EmployeeExperienceRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the print singleton.
    */
    public function escapedPrint(): PrintRequestBuilder {
        return new PrintRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the external singleton.
    */
    public function external(): ExternalRequestBuilder {
        return new ExternalRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the collection of groupLifecyclePolicy entities.
    */
    public function groupLifecyclePolicies(): GroupLifecyclePoliciesRequestBuilder {
        return new GroupLifecyclePoliciesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the collection of group entities.
    */
    public function groups(): GroupsRequestBuilder {
        return new GroupsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the collection of groupSetting entities.
    */
    public function groupSettings(): GroupSettingsRequestBuilder {
        return new GroupSettingsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the collection of groupSettingTemplate entities.
    */
    public function groupSettingTemplates(): GroupSettingTemplatesRequestBuilder {
        return new GroupSettingTemplatesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the identityContainer singleton.
    */
    public function identity(): IdentityRequestBuilder {
        return new IdentityRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the identityGovernance singleton.
    */
    public function identityGovernance(): IdentityGovernanceRequestBuilder {
        return new IdentityGovernanceRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the identityProtectionRoot singleton.
    */
    public function identityProtection(): IdentityProtectionRequestBuilder {
        return new IdentityProtectionRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the collection of identityProvider entities.
    */
    public function identityProviders(): IdentityProvidersRequestBuilder {
        return new IdentityProvidersRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the informationProtection singleton.
    */
    public function informationProtection(): InformationProtectionRequestBuilder {
        return new InformationProtectionRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the collection of invitation entities.
    */
    public function invitations(): InvitationsRequestBuilder {
        return new InvitationsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the collection of organizationalBrandingLocalization entities.
    */
    public function localizations(): LocalizationsRequestBuilder {
        return new LocalizationsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the collection of oAuth2PermissionGrant entities.
    */
    public function oauth2PermissionGrants(): Oauth2PermissionGrantsRequestBuilder {
        return new Oauth2PermissionGrantsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the collection of organization entities.
    */
    public function organization(): OrganizationRequestBuilder {
        return new OrganizationRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the collection of resourceSpecificPermissionGrant entities.
    */
    public function permissionGrants(): PermissionGrantsRequestBuilder {
        return new PermissionGrantsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The places property
    */
    public function places(): PlacesRequestBuilder {
        return new PlacesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the planner singleton.
    */
    public function planner(): PlannerRequestBuilder {
        return new PlannerRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the policyRoot singleton.
    */
    public function policies(): PoliciesRequestBuilder {
        return new PoliciesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the privacy singleton.
    */
    public function privacy(): PrivacyRequestBuilder {
        return new PrivacyRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the reportRoot singleton.
    */
    public function reports(): ReportsRequestBuilder {
        return new ReportsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the roleManagement singleton.
    */
    public function roleManagement(): RoleManagementRequestBuilder {
        return new RoleManagementRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the collection of schemaExtension entities.
    */
    public function schemaExtensions(): SchemaExtensionsRequestBuilder {
        return new SchemaExtensionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the collection of scopedRoleMembership entities.
    */
    public function scopedRoleMemberships(): ScopedRoleMembershipsRequestBuilder {
        return new ScopedRoleMembershipsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the searchEntity singleton.
    */
    public function search(): SearchRequestBuilder {
        return new SearchRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the security singleton.
    */
    public function security(): SecurityRequestBuilder {
        return new SecurityRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the collection of servicePrincipal entities.
    */
    public function servicePrincipals(): ServicePrincipalsRequestBuilder {
        return new ServicePrincipalsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the collection of sharedDriveItem entities.
    */
    public function shares(): SharesRequestBuilder {
        return new SharesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the collection of site entities.
    */
    public function sites(): SitesRequestBuilder {
        return new SitesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the solutionsRoot singleton.
    */
    public function solutions(): SolutionsRequestBuilder {
        return new SolutionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the collection of subscribedSku entities.
    */
    public function subscribedSkus(): SubscribedSkusRequestBuilder {
        return new SubscribedSkusRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the collection of subscription entities.
    */
    public function subscriptions(): SubscriptionsRequestBuilder {
        return new SubscriptionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the collection of team entities.
    */
    public function teams(): TeamsRequestBuilder {
        return new TeamsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the collection of teamsTemplate entities.
    */
    public function teamsTemplates(): TeamsTemplatesRequestBuilder {
        return new TeamsTemplatesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the teamwork singleton.
    */
    public function teamwork(): TeamworkRequestBuilder {
        return new TeamworkRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the tenantRelationship singleton.
    */
    public function tenantRelationships(): TenantRelationshipsRequestBuilder {
        return new TenantRelationshipsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the collection of user entities.
    */
    public function users(): UsersRequestBuilder {
        return new UsersRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new BaseGraphClient and sets the default values.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
     * @param BackingStoreFactory|null $backingStore The backing store to use for the models.
    */
    public function __construct(RequestAdapter $requestAdapter, ?BackingStoreFactory $backingStore = null) {
        parent::__construct($requestAdapter, [], '{+baseurl}');
        ApiClientBuilder::registerDefaultSerializer(JsonSerializationWriterFactory::class);
        ApiClientBuilder::registerDefaultSerializer(TextSerializationWriterFactory::class);
        ApiClientBuilder::registerDefaultDeserializer(JsonParseNodeFactory::class);
        ApiClientBuilder::registerDefaultDeserializer(TextParseNodeFactory::class);
        if (empty($this->requestAdapter->getBaseUrl())) {
            $this->requestAdapter->setBaseUrl('https://graph.microsoft.com/v1.0');
        }
        $this->pathParameters['baseurl'] = $this->requestAdapter->getBaseUrl();
        $this->requestAdapter->enableBackingStore($backingStore ?? BackingStoreFactorySingleton::getInstance());
    }

}
