<?php

namespace Microsoft\Graph\Generated;

use Microsoft\Graph\Generated\Admin\AdminRequestBuilder;
use Microsoft\Graph\Generated\AgreementAcceptances\AgreementAcceptancesRequestBuilder;
use Microsoft\Graph\Generated\AgreementAcceptances\Item\AgreementAcceptanceItemRequestBuilder;
use Microsoft\Graph\Generated\Agreements\AgreementsRequestBuilder;
use Microsoft\Graph\Generated\Agreements\Item\AgreementItemRequestBuilder;
use Microsoft\Graph\Generated\AppCatalogs\AppCatalogsRequestBuilder;
use Microsoft\Graph\Generated\Applications\ApplicationsRequestBuilder;
use Microsoft\Graph\Generated\Applications\Item\ApplicationItemRequestBuilder;
use Microsoft\Graph\Generated\ApplicationTemplates\ApplicationTemplatesRequestBuilder;
use Microsoft\Graph\Generated\ApplicationTemplates\Item\ApplicationTemplateItemRequestBuilder;
use Microsoft\Graph\Generated\AuditLogs\AuditLogsRequestBuilder;
use Microsoft\Graph\Generated\AuthenticationMethodConfigurations\AuthenticationMethodConfigurationsRequestBuilder;
use Microsoft\Graph\Generated\AuthenticationMethodConfigurations\Item\AuthenticationMethodConfigurationItemRequestBuilder;
use Microsoft\Graph\Generated\AuthenticationMethodsPolicy\AuthenticationMethodsPolicyRequestBuilder;
use Microsoft\Graph\Generated\Branding\BrandingRequestBuilder;
use Microsoft\Graph\Generated\CertificateBasedAuthConfiguration\CertificateBasedAuthConfigurationRequestBuilder;
use Microsoft\Graph\Generated\CertificateBasedAuthConfiguration\Item\CertificateBasedAuthConfigurationItemRequestBuilder;
use Microsoft\Graph\Generated\Chats\ChatsRequestBuilder;
use Microsoft\Graph\Generated\Chats\Item\ChatItemRequestBuilder;
use Microsoft\Graph\Generated\Communications\CommunicationsRequestBuilder;
use Microsoft\Graph\Generated\Compliance\ComplianceRequestBuilder;
use Microsoft\Graph\Generated\Connections\ConnectionsRequestBuilder;
use Microsoft\Graph\Generated\Connections\Item\ExternalConnectionItemRequestBuilder;
use Microsoft\Graph\Generated\Contacts\ContactsRequestBuilder;
use Microsoft\Graph\Generated\Contacts\Item\OrgContactItemRequestBuilder;
use Microsoft\Graph\Generated\Contracts\ContractsRequestBuilder;
use Microsoft\Graph\Generated\Contracts\Item\ContractItemRequestBuilder;
use Microsoft\Graph\Generated\DataPolicyOperations\DataPolicyOperationsRequestBuilder;
use Microsoft\Graph\Generated\DataPolicyOperations\Item\DataPolicyOperationItemRequestBuilder;
use Microsoft\Graph\Generated\DeviceAppManagement\DeviceAppManagementRequestBuilder;
use Microsoft\Graph\Generated\DeviceManagement\DeviceManagementRequestBuilder;
use Microsoft\Graph\Generated\Devices\DevicesRequestBuilder;
use Microsoft\Graph\Generated\Devices\Item\DeviceItemRequestBuilder;
use Microsoft\Graph\Generated\Directory\DirectoryRequestBuilder;
use Microsoft\Graph\Generated\DirectoryObjects\DirectoryObjectsRequestBuilder;
use Microsoft\Graph\Generated\DirectoryObjects\Item\DirectoryObjectItemRequestBuilder;
use Microsoft\Graph\Generated\DirectoryRoles\DirectoryRolesRequestBuilder;
use Microsoft\Graph\Generated\DirectoryRoles\Item\DirectoryRoleItemRequestBuilder;
use Microsoft\Graph\Generated\DirectoryRoleTemplates\DirectoryRoleTemplatesRequestBuilder;
use Microsoft\Graph\Generated\DirectoryRoleTemplates\Item\DirectoryRoleTemplateItemRequestBuilder;
use Microsoft\Graph\Generated\DomainDnsRecords\DomainDnsRecordsRequestBuilder;
use Microsoft\Graph\Generated\DomainDnsRecords\Item\DomainDnsRecordItemRequestBuilder;
use Microsoft\Graph\Generated\Domains\DomainsRequestBuilder;
use Microsoft\Graph\Generated\Domains\Item\DomainItemRequestBuilder;
use Microsoft\Graph\Generated\Drive\DriveRequestBuilder;
use Microsoft\Graph\Generated\Drives\DrivesRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\DriveItemRequestBuilder;
use Microsoft\Graph\Generated\Education\EducationRequestBuilder;
use Microsoft\Graph\Generated\EscapedPrint\PrintRequestBuilder;
use Microsoft\Graph\Generated\External\ExternalRequestBuilder;
use Microsoft\Graph\Generated\GroupLifecyclePolicies\GroupLifecyclePoliciesRequestBuilder;
use Microsoft\Graph\Generated\GroupLifecyclePolicies\Item\GroupLifecyclePolicyItemRequestBuilder;
use Microsoft\Graph\Generated\Groups\GroupsRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\GroupItemRequestBuilder;
use Microsoft\Graph\Generated\GroupSettings\GroupSettingsRequestBuilder;
use Microsoft\Graph\Generated\GroupSettings\Item\GroupSettingItemRequestBuilder;
use Microsoft\Graph\Generated\GroupSettingTemplates\GroupSettingTemplatesRequestBuilder;
use Microsoft\Graph\Generated\GroupSettingTemplates\Item\GroupSettingTemplateItemRequestBuilder;
use Microsoft\Graph\Generated\Identity\IdentityRequestBuilder;
use Microsoft\Graph\Generated\IdentityGovernance\IdentityGovernanceRequestBuilder;
use Microsoft\Graph\Generated\IdentityProtection\IdentityProtectionRequestBuilder;
use Microsoft\Graph\Generated\IdentityProviders\IdentityProvidersRequestBuilder;
use Microsoft\Graph\Generated\IdentityProviders\Item\IdentityProviderItemRequestBuilder;
use Microsoft\Graph\Generated\InformationProtection\InformationProtectionRequestBuilder;
use Microsoft\Graph\Generated\Invitations\InvitationsRequestBuilder;
use Microsoft\Graph\Generated\Invitations\Item\InvitationItemRequestBuilder;
use Microsoft\Graph\Generated\Localizations\Item\OrganizationalBrandingLocalizationItemRequestBuilder;
use Microsoft\Graph\Generated\Localizations\LocalizationsRequestBuilder;
use Microsoft\Graph\Generated\Me\MeRequestBuilder;
use Microsoft\Graph\Generated\Oauth2PermissionGrants\Item\OAuth2PermissionGrantItemRequestBuilder;
use Microsoft\Graph\Generated\Oauth2PermissionGrants\Oauth2PermissionGrantsRequestBuilder;
use Microsoft\Graph\Generated\Organization\Item\OrganizationItemRequestBuilder;
use Microsoft\Graph\Generated\Organization\OrganizationRequestBuilder;
use Microsoft\Graph\Generated\PermissionGrants\Item\ResourceSpecificPermissionGrantItemRequestBuilder;
use Microsoft\Graph\Generated\PermissionGrants\PermissionGrantsRequestBuilder;
use Microsoft\Graph\Generated\Places\Item\PlaceItemRequestBuilder;
use Microsoft\Graph\Generated\Places\PlacesRequestBuilder;
use Microsoft\Graph\Generated\Planner\PlannerRequestBuilder;
use Microsoft\Graph\Generated\Policies\PoliciesRequestBuilder;
use Microsoft\Graph\Generated\Privacy\PrivacyRequestBuilder;
use Microsoft\Graph\Generated\Reports\ReportsRequestBuilder;
use Microsoft\Graph\Generated\RoleManagement\RoleManagementRequestBuilder;
use Microsoft\Graph\Generated\SchemaExtensions\Item\SchemaExtensionItemRequestBuilder;
use Microsoft\Graph\Generated\SchemaExtensions\SchemaExtensionsRequestBuilder;
use Microsoft\Graph\Generated\ScopedRoleMemberships\Item\ScopedRoleMembershipItemRequestBuilder;
use Microsoft\Graph\Generated\ScopedRoleMemberships\ScopedRoleMembershipsRequestBuilder;
use Microsoft\Graph\Generated\Search\SearchRequestBuilder;
use Microsoft\Graph\Generated\Security\SecurityRequestBuilder;
use Microsoft\Graph\Generated\ServicePrincipals\Item\ServicePrincipalItemRequestBuilder;
use Microsoft\Graph\Generated\ServicePrincipals\ServicePrincipalsRequestBuilder;
use Microsoft\Graph\Generated\Shares\Item\SharedDriveItemItemRequestBuilder;
use Microsoft\Graph\Generated\Shares\SharesRequestBuilder;
use Microsoft\Graph\Generated\Sites\Item\SiteItemRequestBuilder;
use Microsoft\Graph\Generated\Sites\SitesRequestBuilder;
use Microsoft\Graph\Generated\Solutions\SolutionsRequestBuilder;
use Microsoft\Graph\Generated\SubscribedSkus\Item\SubscribedSkuItemRequestBuilder;
use Microsoft\Graph\Generated\SubscribedSkus\SubscribedSkusRequestBuilder;
use Microsoft\Graph\Generated\Subscriptions\Item\SubscriptionItemRequestBuilder;
use Microsoft\Graph\Generated\Subscriptions\SubscriptionsRequestBuilder;
use Microsoft\Graph\Generated\Teams\Item\TeamItemRequestBuilder;
use Microsoft\Graph\Generated\Teams\TeamsRequestBuilder;
use Microsoft\Graph\Generated\TeamsTemplates\Item\TeamsTemplateItemRequestBuilder;
use Microsoft\Graph\Generated\TeamsTemplates\TeamsTemplatesRequestBuilder;
use Microsoft\Graph\Generated\Teamwork\TeamworkRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\UserItemRequestBuilder;
use Microsoft\Graph\Generated\Users\UsersRequestBuilder;
use Microsoft\Graph\Generated\Workbooks\Item\DriveItemItemRequestBuilder;
use Microsoft\Graph\Generated\Workbooks\WorkbooksRequestBuilder;
use Microsoft\Kiota\Abstractions\ApiClientBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactory;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Serialization\Json\JsonParseNodeFactory;
use Microsoft\Kiota\Serialization\Json\JsonSerializationWriterFactory;
use Microsoft\Kiota\Serialization\Text\TextParseNodeFactory;
use Microsoft\Kiota\Serialization\Text\TextSerializationWriterFactory;

class BaseGraphClient 
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
     * Provides operations to manage the drive singleton.
    */
    public function drive(): DriveRequestBuilder {
        return new DriveRequestBuilder($this->pathParameters, $this->requestAdapter);
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
     * Provides operations to manage the user singleton.
    */
    public function me(): MeRequestBuilder {
        return new MeRequestBuilder($this->pathParameters, $this->requestAdapter);
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
     * @var array<string, mixed> $pathParameters Path parameters for the request
    */
    private array $pathParameters;
    
    /**
     * Provides operations to manage the collection of resourceSpecificPermissionGrant entities.
    */
    public function permissionGrants(): PermissionGrantsRequestBuilder {
        return new PermissionGrantsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the collection of place entities.
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
     * @var RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    private RequestAdapter $requestAdapter;
    
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
     * @var string $urlTemplate Url template to use to build the URL for the current request builder
    */
    private string $urlTemplate;
    
    /**
     * Provides operations to manage the collection of user entities.
    */
    public function users(): UsersRequestBuilder {
        return new UsersRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the collection of driveItem entities.
    */
    public function workbooks(): WorkbooksRequestBuilder {
        return new WorkbooksRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the collection of agreementAcceptance entities.
     * @param string $id Unique identifier of the item
     * @return AgreementAcceptanceItemRequestBuilder
    */
    public function agreementAcceptancesById(string $id): AgreementAcceptanceItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['agreementAcceptance%2Did'] = $id;
        return new AgreementAcceptanceItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the collection of agreement entities.
     * @param string $id Unique identifier of the item
     * @return AgreementItemRequestBuilder
    */
    public function agreementsById(string $id): AgreementItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['agreement%2Did'] = $id;
        return new AgreementItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the collection of application entities.
     * @param string $id Unique identifier of the item
     * @return ApplicationItemRequestBuilder
    */
    public function applicationsById(string $id): ApplicationItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['application%2Did'] = $id;
        return new ApplicationItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the collection of applicationTemplate entities.
     * @param string $id Unique identifier of the item
     * @return ApplicationTemplateItemRequestBuilder
    */
    public function applicationTemplatesById(string $id): ApplicationTemplateItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['applicationTemplate%2Did'] = $id;
        return new ApplicationTemplateItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the collection of authenticationMethodConfiguration entities.
     * @param string $id Unique identifier of the item
     * @return AuthenticationMethodConfigurationItemRequestBuilder
    */
    public function authenticationMethodConfigurationsById(string $id): AuthenticationMethodConfigurationItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['authenticationMethodConfiguration%2Did'] = $id;
        return new AuthenticationMethodConfigurationItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the collection of certificateBasedAuthConfiguration entities.
     * @param string $id Unique identifier of the item
     * @return CertificateBasedAuthConfigurationItemRequestBuilder
    */
    public function certificateBasedAuthConfigurationById(string $id): CertificateBasedAuthConfigurationItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['certificateBasedAuthConfiguration%2Did'] = $id;
        return new CertificateBasedAuthConfigurationItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the collection of chat entities.
     * @param string $id Unique identifier of the item
     * @return ChatItemRequestBuilder
    */
    public function chatsById(string $id): ChatItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['chat%2Did'] = $id;
        return new ChatItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the collection of externalConnection entities.
     * @param string $id Unique identifier of the item
     * @return ExternalConnectionItemRequestBuilder
    */
    public function connectionsById(string $id): ExternalConnectionItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['externalConnection%2Did'] = $id;
        return new ExternalConnectionItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new BaseGraphClient and sets the default values.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
     * @param BackingStoreFactory|null $backingStore The backing store to use for the models.
    */
    public function __construct(RequestAdapter $requestAdapter, ?BackingStoreFactory $backingStore = null) {
        $this->pathParameters = [];
        $this->urlTemplate = '{+baseurl}';
        $this->requestAdapter = $requestAdapter;
        ApiClientBuilder::registerDefaultSerializer(JsonSerializationWriterFactory::class);
        ApiClientBuilder::registerDefaultSerializer(TextSerializationWriterFactory::class);
        ApiClientBuilder::registerDefaultDeserializer(JsonParseNodeFactory::class);
        ApiClientBuilder::registerDefaultDeserializer(TextParseNodeFactory::class);
        if (empty($this->requestAdapter->getBaseUrl())) {
            $this->requestAdapter->setBaseUrl('https://graph.microsoft.com/v1.0');
        }
        $this->pathParameters['baseUrl'] = $this->requestAdapter->getBaseUrl();
        $this->requestAdapter->enableBackingStore($backingStore ?? BackingStoreFactorySingleton::getInstance());
    }

    /**
     * Provides operations to manage the collection of orgContact entities.
     * @param string $id Unique identifier of the item
     * @return OrgContactItemRequestBuilder
    */
    public function contactsById(string $id): OrgContactItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['orgContact%2Did'] = $id;
        return new OrgContactItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the collection of contract entities.
     * @param string $id Unique identifier of the item
     * @return ContractItemRequestBuilder
    */
    public function contractsById(string $id): ContractItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['contract%2Did'] = $id;
        return new ContractItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the collection of dataPolicyOperation entities.
     * @param string $id Unique identifier of the item
     * @return DataPolicyOperationItemRequestBuilder
    */
    public function dataPolicyOperationsById(string $id): DataPolicyOperationItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['dataPolicyOperation%2Did'] = $id;
        return new DataPolicyOperationItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the collection of device entities.
     * @param string $id Unique identifier of the item
     * @return DeviceItemRequestBuilder
    */
    public function devicesById(string $id): DeviceItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['device%2Did'] = $id;
        return new DeviceItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the collection of directoryObject entities.
     * @param string $id Unique identifier of the item
     * @return DirectoryObjectItemRequestBuilder
    */
    public function directoryObjectsById(string $id): DirectoryObjectItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['directoryObject%2Did'] = $id;
        return new DirectoryObjectItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the collection of directoryRole entities.
     * @param string $id Unique identifier of the item
     * @return DirectoryRoleItemRequestBuilder
    */
    public function directoryRolesById(string $id): DirectoryRoleItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['directoryRole%2Did'] = $id;
        return new DirectoryRoleItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the collection of directoryRoleTemplate entities.
     * @param string $id Unique identifier of the item
     * @return DirectoryRoleTemplateItemRequestBuilder
    */
    public function directoryRoleTemplatesById(string $id): DirectoryRoleTemplateItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['directoryRoleTemplate%2Did'] = $id;
        return new DirectoryRoleTemplateItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the collection of domainDnsRecord entities.
     * @param string $id Unique identifier of the item
     * @return DomainDnsRecordItemRequestBuilder
    */
    public function domainDnsRecordsById(string $id): DomainDnsRecordItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['domainDnsRecord%2Did'] = $id;
        return new DomainDnsRecordItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the collection of domain entities.
     * @param string $id Unique identifier of the item
     * @return DomainItemRequestBuilder
    */
    public function domainsById(string $id): DomainItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['domain%2Did'] = $id;
        return new DomainItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the collection of drive entities.
     * @param string $id Unique identifier of the item
     * @return DriveItemRequestBuilder
    */
    public function drivesById(string $id): DriveItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['drive%2Did'] = $id;
        return new DriveItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the collection of groupLifecyclePolicy entities.
     * @param string $id Unique identifier of the item
     * @return GroupLifecyclePolicyItemRequestBuilder
    */
    public function groupLifecyclePoliciesById(string $id): GroupLifecyclePolicyItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['groupLifecyclePolicy%2Did'] = $id;
        return new GroupLifecyclePolicyItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the collection of group entities.
     * @param string $id Unique identifier of the item
     * @return GroupItemRequestBuilder
    */
    public function groupsById(string $id): GroupItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['group%2Did'] = $id;
        return new GroupItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the collection of groupSetting entities.
     * @param string $id Unique identifier of the item
     * @return GroupSettingItemRequestBuilder
    */
    public function groupSettingsById(string $id): GroupSettingItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['groupSetting%2Did'] = $id;
        return new GroupSettingItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the collection of groupSettingTemplate entities.
     * @param string $id Unique identifier of the item
     * @return GroupSettingTemplateItemRequestBuilder
    */
    public function groupSettingTemplatesById(string $id): GroupSettingTemplateItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['groupSettingTemplate%2Did'] = $id;
        return new GroupSettingTemplateItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the collection of identityProvider entities.
     * @param string $id Unique identifier of the item
     * @return IdentityProviderItemRequestBuilder
    */
    public function identityProvidersById(string $id): IdentityProviderItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['identityProvider%2Did'] = $id;
        return new IdentityProviderItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the collection of invitation entities.
     * @param string $id Unique identifier of the item
     * @return InvitationItemRequestBuilder
    */
    public function invitationsById(string $id): InvitationItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['invitation%2Did'] = $id;
        return new InvitationItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the collection of organizationalBrandingLocalization entities.
     * @param string $id Unique identifier of the item
     * @return OrganizationalBrandingLocalizationItemRequestBuilder
    */
    public function localizationsById(string $id): OrganizationalBrandingLocalizationItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['organizationalBrandingLocalization%2Did'] = $id;
        return new OrganizationalBrandingLocalizationItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the collection of oAuth2PermissionGrant entities.
     * @param string $id Unique identifier of the item
     * @return OAuth2PermissionGrantItemRequestBuilder
    */
    public function oauth2PermissionGrantsById(string $id): OAuth2PermissionGrantItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['oAuth2PermissionGrant%2Did'] = $id;
        return new OAuth2PermissionGrantItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the collection of organization entities.
     * @param string $id Unique identifier of the item
     * @return OrganizationItemRequestBuilder
    */
    public function organizationById(string $id): OrganizationItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['organization%2Did'] = $id;
        return new OrganizationItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the collection of resourceSpecificPermissionGrant entities.
     * @param string $id Unique identifier of the item
     * @return ResourceSpecificPermissionGrantItemRequestBuilder
    */
    public function permissionGrantsById(string $id): ResourceSpecificPermissionGrantItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['resourceSpecificPermissionGrant%2Did'] = $id;
        return new ResourceSpecificPermissionGrantItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the collection of place entities.
     * @param string $id Unique identifier of the item
     * @return PlaceItemRequestBuilder
    */
    public function placesById(string $id): PlaceItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['place%2Did'] = $id;
        return new PlaceItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the collection of schemaExtension entities.
     * @param string $id Unique identifier of the item
     * @return SchemaExtensionItemRequestBuilder
    */
    public function schemaExtensionsById(string $id): SchemaExtensionItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['schemaExtension%2Did'] = $id;
        return new SchemaExtensionItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the collection of scopedRoleMembership entities.
     * @param string $id Unique identifier of the item
     * @return ScopedRoleMembershipItemRequestBuilder
    */
    public function scopedRoleMembershipsById(string $id): ScopedRoleMembershipItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['scopedRoleMembership%2Did'] = $id;
        return new ScopedRoleMembershipItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the collection of servicePrincipal entities.
     * @param string $id Unique identifier of the item
     * @return ServicePrincipalItemRequestBuilder
    */
    public function servicePrincipalsById(string $id): ServicePrincipalItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['servicePrincipal%2Did'] = $id;
        return new ServicePrincipalItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the collection of sharedDriveItem entities.
     * @param string $id Unique identifier of the item
     * @return SharedDriveItemItemRequestBuilder
    */
    public function sharesById(string $id): SharedDriveItemItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['sharedDriveItem%2Did'] = $id;
        return new SharedDriveItemItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the collection of site entities.
     * @param string $id Unique identifier of the item
     * @return SiteItemRequestBuilder
    */
    public function sitesById(string $id): SiteItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['site%2Did'] = $id;
        return new SiteItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the collection of subscribedSku entities.
     * @param string $id Unique identifier of the item
     * @return SubscribedSkuItemRequestBuilder
    */
    public function subscribedSkusById(string $id): SubscribedSkuItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['subscribedSku%2Did'] = $id;
        return new SubscribedSkuItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the collection of subscription entities.
     * @param string $id Unique identifier of the item
     * @return SubscriptionItemRequestBuilder
    */
    public function subscriptionsById(string $id): SubscriptionItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['subscription%2Did'] = $id;
        return new SubscriptionItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the collection of team entities.
     * @param string $id Unique identifier of the item
     * @return TeamItemRequestBuilder
    */
    public function teamsById(string $id): TeamItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['team%2Did'] = $id;
        return new TeamItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the collection of teamsTemplate entities.
     * @param string $id Unique identifier of the item
     * @return TeamsTemplateItemRequestBuilder
    */
    public function teamsTemplatesById(string $id): TeamsTemplateItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['teamsTemplate%2Did'] = $id;
        return new TeamsTemplateItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the collection of user entities.
     * @param string $id Unique identifier of the item
     * @return UserItemRequestBuilder
    */
    public function usersById(string $id): UserItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['user%2Did'] = $id;
        return new UserItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the collection of driveItem entities.
     * @param string $id Unique identifier of the item
     * @return DriveItemItemRequestBuilder
    */
    public function workbooksById(string $id): DriveItemItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['driveItem%2Did'] = $id;
        return new DriveItemItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

}
