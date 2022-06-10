<?php

namespace Microsoft\Graph;

use Microsoft\Graph\Admin\AdminRequestBuilder;
use Microsoft\Graph\AgreementAcceptances\AgreementAcceptancesRequestBuilder;
use Microsoft\Graph\AgreementAcceptances\Item\AgreementAcceptanceItemRequestBuilder;
use Microsoft\Graph\Agreements\AgreementsRequestBuilder;
use Microsoft\Graph\Agreements\Item\AgreementItemRequestBuilder;
use Microsoft\Graph\AppCatalogs\AppCatalogsRequestBuilder;
use Microsoft\Graph\Applications\ApplicationsRequestBuilder;
use Microsoft\Graph\Applications\Item\ApplicationItemRequestBuilder;
use Microsoft\Graph\ApplicationTemplates\ApplicationTemplatesRequestBuilder;
use Microsoft\Graph\ApplicationTemplates\Item\ApplicationTemplateItemRequestBuilder;
use Microsoft\Graph\AuditLogs\AuditLogsRequestBuilder;
use Microsoft\Graph\AuthenticationMethodConfigurations\AuthenticationMethodConfigurationsRequestBuilder;
use Microsoft\Graph\AuthenticationMethodConfigurations\Item\AuthenticationMethodConfigurationItemRequestBuilder;
use Microsoft\Graph\AuthenticationMethodsPolicy\AuthenticationMethodsPolicyRequestBuilder;
use Microsoft\Graph\Branding\BrandingRequestBuilder;
use Microsoft\Graph\CertificateBasedAuthConfiguration\CertificateBasedAuthConfigurationRequestBuilder;
use Microsoft\Graph\CertificateBasedAuthConfiguration\Item\CertificateBasedAuthConfigurationItemRequestBuilder;
use Microsoft\Graph\Chats\ChatsRequestBuilder;
use Microsoft\Graph\Chats\Item\ChatItemRequestBuilder;
use Microsoft\Graph\Communications\CommunicationsRequestBuilder;
use Microsoft\Graph\Compliance\ComplianceRequestBuilder;
use Microsoft\Graph\Connections\ConnectionsRequestBuilder;
use Microsoft\Graph\Connections\Item\ExternalConnectionItemRequestBuilder;
use Microsoft\Graph\Contacts\ContactsRequestBuilder;
use Microsoft\Graph\Contacts\Item\OrgContactItemRequestBuilder;
use Microsoft\Graph\Contracts\ContractsRequestBuilder;
use Microsoft\Graph\Contracts\Item\ContractItemRequestBuilder;
use Microsoft\Graph\DataPolicyOperations\DataPolicyOperationsRequestBuilder;
use Microsoft\Graph\DataPolicyOperations\Item\DataPolicyOperationItemRequestBuilder;
use Microsoft\Graph\DeviceAppManagement\DeviceAppManagementRequestBuilder;
use Microsoft\Graph\DeviceManagement\DeviceManagementRequestBuilder;
use Microsoft\Graph\Devices\DevicesRequestBuilder;
use Microsoft\Graph\Devices\Item\DeviceItemRequestBuilder;
use Microsoft\Graph\Directory\DirectoryRequestBuilder;
use Microsoft\Graph\DirectoryObjects\DirectoryObjectsRequestBuilder;
use Microsoft\Graph\DirectoryObjects\Item\DirectoryObjectItemRequestBuilder;
use Microsoft\Graph\DirectoryRoles\DirectoryRolesRequestBuilder;
use Microsoft\Graph\DirectoryRoles\Item\DirectoryRoleItemRequestBuilder;
use Microsoft\Graph\DirectoryRoleTemplates\DirectoryRoleTemplatesRequestBuilder;
use Microsoft\Graph\DirectoryRoleTemplates\Item\DirectoryRoleTemplateItemRequestBuilder;
use Microsoft\Graph\DomainDnsRecords\DomainDnsRecordsRequestBuilder;
use Microsoft\Graph\DomainDnsRecords\Item\DomainDnsRecordItemRequestBuilder;
use Microsoft\Graph\Domains\DomainsRequestBuilder;
use Microsoft\Graph\Domains\Item\DomainItemRequestBuilder;
use Microsoft\Graph\Drive\DriveRequestBuilder;
use Microsoft\Graph\Drives\DrivesRequestBuilder;
use Microsoft\Graph\Drives\Item\DriveItemRequestBuilder;
use Microsoft\Graph\Education\EducationRequestBuilder;
use Microsoft\Graph\EscapedPrint\PrintRequestBuilder;
use Microsoft\Graph\External\ExternalRequestBuilder;
use Microsoft\Graph\GroupLifecyclePolicies\GroupLifecyclePoliciesRequestBuilder;
use Microsoft\Graph\GroupLifecyclePolicies\Item\GroupLifecyclePolicyItemRequestBuilder;
use Microsoft\Graph\Groups\GroupsRequestBuilder;
use Microsoft\Graph\Groups\Item\GroupItemRequestBuilder;
use Microsoft\Graph\GroupSettings\GroupSettingsRequestBuilder;
use Microsoft\Graph\GroupSettings\Item\GroupSettingItemRequestBuilder;
use Microsoft\Graph\GroupSettingTemplates\GroupSettingTemplatesRequestBuilder;
use Microsoft\Graph\GroupSettingTemplates\Item\GroupSettingTemplateItemRequestBuilder;
use Microsoft\Graph\Identity\IdentityRequestBuilder;
use Microsoft\Graph\IdentityGovernance\IdentityGovernanceRequestBuilder;
use Microsoft\Graph\IdentityProtection\IdentityProtectionRequestBuilder;
use Microsoft\Graph\IdentityProviders\IdentityProvidersRequestBuilder;
use Microsoft\Graph\IdentityProviders\Item\IdentityProviderItemRequestBuilder;
use Microsoft\Graph\InformationProtection\InformationProtectionRequestBuilder;
use Microsoft\Graph\Invitations\InvitationsRequestBuilder;
use Microsoft\Graph\Invitations\Item\InvitationItemRequestBuilder;
use Microsoft\Graph\Localizations\Item\OrganizationalBrandingLocalizationItemRequestBuilder;
use Microsoft\Graph\Localizations\LocalizationsRequestBuilder;
use Microsoft\Graph\Me\MeRequestBuilder;
use Microsoft\Graph\Oauth2PermissionGrants\Item\OAuth2PermissionGrantItemRequestBuilder;
use Microsoft\Graph\Oauth2PermissionGrants\Oauth2PermissionGrantsRequestBuilder;
use Microsoft\Graph\Organization\Item\OrganizationItemRequestBuilder;
use Microsoft\Graph\Organization\OrganizationRequestBuilder;
use Microsoft\Graph\PermissionGrants\Item\ResourceSpecificPermissionGrantItemRequestBuilder;
use Microsoft\Graph\PermissionGrants\PermissionGrantsRequestBuilder;
use Microsoft\Graph\Places\Item\PlaceItemRequestBuilder;
use Microsoft\Graph\Places\PlacesRequestBuilder;
use Microsoft\Graph\Planner\PlannerRequestBuilder;
use Microsoft\Graph\Policies\PoliciesRequestBuilder;
use Microsoft\Graph\Privacy\PrivacyRequestBuilder;
use Microsoft\Graph\Reports\ReportsRequestBuilder;
use Microsoft\Graph\RoleManagement\RoleManagementRequestBuilder;
use Microsoft\Graph\SchemaExtensions\Item\SchemaExtensionItemRequestBuilder;
use Microsoft\Graph\SchemaExtensions\SchemaExtensionsRequestBuilder;
use Microsoft\Graph\ScopedRoleMemberships\Item\ScopedRoleMembershipItemRequestBuilder;
use Microsoft\Graph\ScopedRoleMemberships\ScopedRoleMembershipsRequestBuilder;
use Microsoft\Graph\Search\SearchRequestBuilder;
use Microsoft\Graph\Security\SecurityRequestBuilder;
use Microsoft\Graph\ServicePrincipals\Item\ServicePrincipalItemRequestBuilder;
use Microsoft\Graph\ServicePrincipals\ServicePrincipalsRequestBuilder;
use Microsoft\Graph\Shares\Item\SharedDriveItemItemRequestBuilder;
use Microsoft\Graph\Shares\SharesRequestBuilder;
use Microsoft\Graph\Sites\Item\SiteItemRequestBuilder;
use Microsoft\Graph\Sites\SitesRequestBuilder;
use Microsoft\Graph\Solutions\SolutionsRequestBuilder;
use Microsoft\Graph\SubscribedSkus\Item\SubscribedSkuItemRequestBuilder;
use Microsoft\Graph\SubscribedSkus\SubscribedSkusRequestBuilder;
use Microsoft\Graph\Subscriptions\Item\SubscriptionItemRequestBuilder;
use Microsoft\Graph\Subscriptions\SubscriptionsRequestBuilder;
use Microsoft\Graph\Teams\Item\TeamItemRequestBuilder;
use Microsoft\Graph\Teams\TeamsRequestBuilder;
use Microsoft\Graph\TeamsTemplates\Item\TeamsTemplateItemRequestBuilder;
use Microsoft\Graph\TeamsTemplates\TeamsTemplatesRequestBuilder;
use Microsoft\Graph\Teamwork\TeamworkRequestBuilder;
use Microsoft\Graph\Users\Item\UserItemRequestBuilder;
use Microsoft\Graph\Users\UsersRequestBuilder;
use Microsoft\Graph\Workbooks\Item\DriveItemItemRequestBuilder;
use Microsoft\Graph\Workbooks\WorkbooksRequestBuilder;
use Microsoft\Kiota\Abstractions\ApiClientBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Serialization\Json\JsonParseNodeFactory;
use Microsoft\Kiota\Serialization\Json\JsonSerializationWriterFactory;
use Microsoft\Kiota\Serialization\Text\TextParseNodeFactory;
use Microsoft\Kiota\Serialization\Text\TextSerializationWriterFactory;

class BaseGraphClient 
{
    /**
     * The admin property
    */
    public function admin(): AdminRequestBuilder {
        return new AdminRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The agreementAcceptances property
    */
    public function agreementAcceptances(): AgreementAcceptancesRequestBuilder {
        return new AgreementAcceptancesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The agreements property
    */
    public function agreements(): AgreementsRequestBuilder {
        return new AgreementsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The appCatalogs property
    */
    public function appCatalogs(): AppCatalogsRequestBuilder {
        return new AppCatalogsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The applications property
    */
    public function applications(): ApplicationsRequestBuilder {
        return new ApplicationsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The applicationTemplates property
    */
    public function applicationTemplates(): ApplicationTemplatesRequestBuilder {
        return new ApplicationTemplatesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The auditLogs property
    */
    public function auditLogs(): AuditLogsRequestBuilder {
        return new AuditLogsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The authenticationMethodConfigurations property
    */
    public function authenticationMethodConfigurations(): AuthenticationMethodConfigurationsRequestBuilder {
        return new AuthenticationMethodConfigurationsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The authenticationMethodsPolicy property
    */
    public function authenticationMethodsPolicy(): AuthenticationMethodsPolicyRequestBuilder {
        return new AuthenticationMethodsPolicyRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The branding property
    */
    public function branding(): BrandingRequestBuilder {
        return new BrandingRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The certificateBasedAuthConfiguration property
    */
    public function certificateBasedAuthConfiguration(): CertificateBasedAuthConfigurationRequestBuilder {
        return new CertificateBasedAuthConfigurationRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The chats property
    */
    public function chats(): ChatsRequestBuilder {
        return new ChatsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The communications property
    */
    public function communications(): CommunicationsRequestBuilder {
        return new CommunicationsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The compliance property
    */
    public function compliance(): ComplianceRequestBuilder {
        return new ComplianceRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The connections property
    */
    public function connections(): ConnectionsRequestBuilder {
        return new ConnectionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The contacts property
    */
    public function contacts(): ContactsRequestBuilder {
        return new ContactsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The contracts property
    */
    public function contracts(): ContractsRequestBuilder {
        return new ContractsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The dataPolicyOperations property
    */
    public function dataPolicyOperations(): DataPolicyOperationsRequestBuilder {
        return new DataPolicyOperationsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The deviceAppManagement property
    */
    public function deviceAppManagement(): DeviceAppManagementRequestBuilder {
        return new DeviceAppManagementRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The deviceManagement property
    */
    public function deviceManagement(): DeviceManagementRequestBuilder {
        return new DeviceManagementRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The devices property
    */
    public function devices(): DevicesRequestBuilder {
        return new DevicesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The directory property
    */
    public function directory(): DirectoryRequestBuilder {
        return new DirectoryRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The directoryObjects property
    */
    public function directoryObjects(): DirectoryObjectsRequestBuilder {
        return new DirectoryObjectsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The directoryRoles property
    */
    public function directoryRoles(): DirectoryRolesRequestBuilder {
        return new DirectoryRolesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The directoryRoleTemplates property
    */
    public function directoryRoleTemplates(): DirectoryRoleTemplatesRequestBuilder {
        return new DirectoryRoleTemplatesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The domainDnsRecords property
    */
    public function domainDnsRecords(): DomainDnsRecordsRequestBuilder {
        return new DomainDnsRecordsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The domains property
    */
    public function domains(): DomainsRequestBuilder {
        return new DomainsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The drive property
    */
    public function drive(): DriveRequestBuilder {
        return new DriveRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The drives property
    */
    public function drives(): DrivesRequestBuilder {
        return new DrivesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The education property
    */
    public function education(): EducationRequestBuilder {
        return new EducationRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The print property
    */
    public function escapedPrint(): PrintRequestBuilder {
        return new PrintRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The external property
    */
    public function external(): ExternalRequestBuilder {
        return new ExternalRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The groupLifecyclePolicies property
    */
    public function groupLifecyclePolicies(): GroupLifecyclePoliciesRequestBuilder {
        return new GroupLifecyclePoliciesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The groups property
    */
    public function groups(): GroupsRequestBuilder {
        return new GroupsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The groupSettings property
    */
    public function groupSettings(): GroupSettingsRequestBuilder {
        return new GroupSettingsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The groupSettingTemplates property
    */
    public function groupSettingTemplates(): GroupSettingTemplatesRequestBuilder {
        return new GroupSettingTemplatesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The identity property
    */
    public function identity(): IdentityRequestBuilder {
        return new IdentityRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The identityGovernance property
    */
    public function identityGovernance(): IdentityGovernanceRequestBuilder {
        return new IdentityGovernanceRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The identityProtection property
    */
    public function identityProtection(): IdentityProtectionRequestBuilder {
        return new IdentityProtectionRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The identityProviders property
    */
    public function identityProviders(): IdentityProvidersRequestBuilder {
        return new IdentityProvidersRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The informationProtection property
    */
    public function informationProtection(): InformationProtectionRequestBuilder {
        return new InformationProtectionRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The invitations property
    */
    public function invitations(): InvitationsRequestBuilder {
        return new InvitationsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The localizations property
    */
    public function localizations(): LocalizationsRequestBuilder {
        return new LocalizationsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The me property
    */
    public function me(): MeRequestBuilder {
        return new MeRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The oauth2PermissionGrants property
    */
    public function oauth2PermissionGrants(): Oauth2PermissionGrantsRequestBuilder {
        return new Oauth2PermissionGrantsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The organization property
    */
    public function organization(): OrganizationRequestBuilder {
        return new OrganizationRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var array<string, mixed> $pathParameters Path parameters for the request
    */
    private array $pathParameters;
    
    /**
     * The permissionGrants property
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
     * The planner property
    */
    public function planner(): PlannerRequestBuilder {
        return new PlannerRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The policies property
    */
    public function policies(): PoliciesRequestBuilder {
        return new PoliciesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The privacy property
    */
    public function privacy(): PrivacyRequestBuilder {
        return new PrivacyRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The reports property
    */
    public function reports(): ReportsRequestBuilder {
        return new ReportsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    private RequestAdapter $requestAdapter;
    
    /**
     * The roleManagement property
    */
    public function roleManagement(): RoleManagementRequestBuilder {
        return new RoleManagementRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The schemaExtensions property
    */
    public function schemaExtensions(): SchemaExtensionsRequestBuilder {
        return new SchemaExtensionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The scopedRoleMemberships property
    */
    public function scopedRoleMemberships(): ScopedRoleMembershipsRequestBuilder {
        return new ScopedRoleMembershipsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The search property
    */
    public function search(): SearchRequestBuilder {
        return new SearchRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The security property
    */
    public function security(): SecurityRequestBuilder {
        return new SecurityRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The servicePrincipals property
    */
    public function servicePrincipals(): ServicePrincipalsRequestBuilder {
        return new ServicePrincipalsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The shares property
    */
    public function shares(): SharesRequestBuilder {
        return new SharesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The sites property
    */
    public function sites(): SitesRequestBuilder {
        return new SitesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The solutions property
    */
    public function solutions(): SolutionsRequestBuilder {
        return new SolutionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The subscribedSkus property
    */
    public function subscribedSkus(): SubscribedSkusRequestBuilder {
        return new SubscribedSkusRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The subscriptions property
    */
    public function subscriptions(): SubscriptionsRequestBuilder {
        return new SubscriptionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The teams property
    */
    public function teams(): TeamsRequestBuilder {
        return new TeamsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The teamsTemplates property
    */
    public function teamsTemplates(): TeamsTemplatesRequestBuilder {
        return new TeamsTemplatesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The teamwork property
    */
    public function teamwork(): TeamworkRequestBuilder {
        return new TeamworkRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var string $urlTemplate Url template to use to build the URL for the current request builder
    */
    private string $urlTemplate;
    
    /**
     * The users property
    */
    public function users(): UsersRequestBuilder {
        return new UsersRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The workbooks property
    */
    public function workbooks(): WorkbooksRequestBuilder {
        return new WorkbooksRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Gets an item from the Microsoft\Graph.agreementAcceptances.item collection
     * @param string $id Unique identifier of the item
     * @return AgreementAcceptanceItemRequestBuilder
    */
    public function agreementAcceptancesById(string $id): AgreementAcceptanceItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['agreementAcceptance%2Did'] = $id;
        return new AgreementAcceptanceItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph.agreements.item collection
     * @param string $id Unique identifier of the item
     * @return AgreementItemRequestBuilder
    */
    public function agreementsById(string $id): AgreementItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['agreement%2Did'] = $id;
        return new AgreementItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph.applications.item collection
     * @param string $id Unique identifier of the item
     * @return ApplicationItemRequestBuilder
    */
    public function applicationsById(string $id): ApplicationItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['application%2Did'] = $id;
        return new ApplicationItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph.applicationTemplates.item collection
     * @param string $id Unique identifier of the item
     * @return ApplicationTemplateItemRequestBuilder
    */
    public function applicationTemplatesById(string $id): ApplicationTemplateItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['applicationTemplate%2Did'] = $id;
        return new ApplicationTemplateItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph.authenticationMethodConfigurations.item collection
     * @param string $id Unique identifier of the item
     * @return AuthenticationMethodConfigurationItemRequestBuilder
    */
    public function authenticationMethodConfigurationsById(string $id): AuthenticationMethodConfigurationItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['authenticationMethodConfiguration%2Did'] = $id;
        return new AuthenticationMethodConfigurationItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph.certificateBasedAuthConfiguration.item collection
     * @param string $id Unique identifier of the item
     * @return CertificateBasedAuthConfigurationItemRequestBuilder
    */
    public function certificateBasedAuthConfigurationById(string $id): CertificateBasedAuthConfigurationItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['certificateBasedAuthConfiguration%2Did'] = $id;
        return new CertificateBasedAuthConfigurationItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph.chats.item collection
     * @param string $id Unique identifier of the item
     * @return ChatItemRequestBuilder
    */
    public function chatsById(string $id): ChatItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['chat%2Did'] = $id;
        return new ChatItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph.connections.item collection
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
    */
    public function __construct(RequestAdapter $requestAdapter) {
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
    }

    /**
     * Gets an item from the Microsoft\Graph.contacts.item collection
     * @param string $id Unique identifier of the item
     * @return OrgContactItemRequestBuilder
    */
    public function contactsById(string $id): OrgContactItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['orgContact%2Did'] = $id;
        return new OrgContactItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph.contracts.item collection
     * @param string $id Unique identifier of the item
     * @return ContractItemRequestBuilder
    */
    public function contractsById(string $id): ContractItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['contract%2Did'] = $id;
        return new ContractItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph.dataPolicyOperations.item collection
     * @param string $id Unique identifier of the item
     * @return DataPolicyOperationItemRequestBuilder
    */
    public function dataPolicyOperationsById(string $id): DataPolicyOperationItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['dataPolicyOperation%2Did'] = $id;
        return new DataPolicyOperationItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph.devices.item collection
     * @param string $id Unique identifier of the item
     * @return DeviceItemRequestBuilder
    */
    public function devicesById(string $id): DeviceItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['device%2Did'] = $id;
        return new DeviceItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph.directoryObjects.item collection
     * @param string $id Unique identifier of the item
     * @return DirectoryObjectItemRequestBuilder
    */
    public function directoryObjectsById(string $id): DirectoryObjectItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['directoryObject%2Did'] = $id;
        return new DirectoryObjectItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph.directoryRoles.item collection
     * @param string $id Unique identifier of the item
     * @return DirectoryRoleItemRequestBuilder
    */
    public function directoryRolesById(string $id): DirectoryRoleItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['directoryRole%2Did'] = $id;
        return new DirectoryRoleItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph.directoryRoleTemplates.item collection
     * @param string $id Unique identifier of the item
     * @return DirectoryRoleTemplateItemRequestBuilder
    */
    public function directoryRoleTemplatesById(string $id): DirectoryRoleTemplateItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['directoryRoleTemplate%2Did'] = $id;
        return new DirectoryRoleTemplateItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph.domainDnsRecords.item collection
     * @param string $id Unique identifier of the item
     * @return DomainDnsRecordItemRequestBuilder
    */
    public function domainDnsRecordsById(string $id): DomainDnsRecordItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['domainDnsRecord%2Did'] = $id;
        return new DomainDnsRecordItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph.domains.item collection
     * @param string $id Unique identifier of the item
     * @return DomainItemRequestBuilder
    */
    public function domainsById(string $id): DomainItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['domain%2Did'] = $id;
        return new DomainItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph.drives.item collection
     * @param string $id Unique identifier of the item
     * @return DriveItemRequestBuilder
    */
    public function drivesById(string $id): DriveItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['drive%2Did'] = $id;
        return new DriveItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph.groupLifecyclePolicies.item collection
     * @param string $id Unique identifier of the item
     * @return GroupLifecyclePolicyItemRequestBuilder
    */
    public function groupLifecyclePoliciesById(string $id): GroupLifecyclePolicyItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['groupLifecyclePolicy%2Did'] = $id;
        return new GroupLifecyclePolicyItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph.groups.item collection
     * @param string $id Unique identifier of the item
     * @return GroupItemRequestBuilder
    */
    public function groupsById(string $id): GroupItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['group%2Did'] = $id;
        return new GroupItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph.groupSettings.item collection
     * @param string $id Unique identifier of the item
     * @return GroupSettingItemRequestBuilder
    */
    public function groupSettingsById(string $id): GroupSettingItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['groupSetting%2Did'] = $id;
        return new GroupSettingItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph.groupSettingTemplates.item collection
     * @param string $id Unique identifier of the item
     * @return GroupSettingTemplateItemRequestBuilder
    */
    public function groupSettingTemplatesById(string $id): GroupSettingTemplateItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['groupSettingTemplate%2Did'] = $id;
        return new GroupSettingTemplateItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph.identityProviders.item collection
     * @param string $id Unique identifier of the item
     * @return IdentityProviderItemRequestBuilder
    */
    public function identityProvidersById(string $id): IdentityProviderItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['identityProvider%2Did'] = $id;
        return new IdentityProviderItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph.invitations.item collection
     * @param string $id Unique identifier of the item
     * @return InvitationItemRequestBuilder
    */
    public function invitationsById(string $id): InvitationItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['invitation%2Did'] = $id;
        return new InvitationItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph.localizations.item collection
     * @param string $id Unique identifier of the item
     * @return OrganizationalBrandingLocalizationItemRequestBuilder
    */
    public function localizationsById(string $id): OrganizationalBrandingLocalizationItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['organizationalBrandingLocalization%2Did'] = $id;
        return new OrganizationalBrandingLocalizationItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph.oauth2PermissionGrants.item collection
     * @param string $id Unique identifier of the item
     * @return OAuth2PermissionGrantItemRequestBuilder
    */
    public function oauth2PermissionGrantsById(string $id): OAuth2PermissionGrantItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['oAuth2PermissionGrant%2Did'] = $id;
        return new OAuth2PermissionGrantItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph.organization.item collection
     * @param string $id Unique identifier of the item
     * @return OrganizationItemRequestBuilder
    */
    public function organizationById(string $id): OrganizationItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['organization%2Did'] = $id;
        return new OrganizationItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph.permissionGrants.item collection
     * @param string $id Unique identifier of the item
     * @return ResourceSpecificPermissionGrantItemRequestBuilder
    */
    public function permissionGrantsById(string $id): ResourceSpecificPermissionGrantItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['resourceSpecificPermissionGrant%2Did'] = $id;
        return new ResourceSpecificPermissionGrantItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph.places.item collection
     * @param string $id Unique identifier of the item
     * @return PlaceItemRequestBuilder
    */
    public function placesById(string $id): PlaceItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['place%2Did'] = $id;
        return new PlaceItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph.schemaExtensions.item collection
     * @param string $id Unique identifier of the item
     * @return SchemaExtensionItemRequestBuilder
    */
    public function schemaExtensionsById(string $id): SchemaExtensionItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['schemaExtension%2Did'] = $id;
        return new SchemaExtensionItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph.scopedRoleMemberships.item collection
     * @param string $id Unique identifier of the item
     * @return ScopedRoleMembershipItemRequestBuilder
    */
    public function scopedRoleMembershipsById(string $id): ScopedRoleMembershipItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['scopedRoleMembership%2Did'] = $id;
        return new ScopedRoleMembershipItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph.servicePrincipals.item collection
     * @param string $id Unique identifier of the item
     * @return ServicePrincipalItemRequestBuilder
    */
    public function servicePrincipalsById(string $id): ServicePrincipalItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['servicePrincipal%2Did'] = $id;
        return new ServicePrincipalItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph.shares.item collection
     * @param string $id Unique identifier of the item
     * @return SharedDriveItemItemRequestBuilder
    */
    public function sharesById(string $id): SharedDriveItemItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['sharedDriveItem%2Did'] = $id;
        return new SharedDriveItemItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph.sites.item collection
     * @param string $id Unique identifier of the item
     * @return SiteItemRequestBuilder
    */
    public function sitesById(string $id): SiteItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['site%2Did'] = $id;
        return new SiteItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph.subscribedSkus.item collection
     * @param string $id Unique identifier of the item
     * @return SubscribedSkuItemRequestBuilder
    */
    public function subscribedSkusById(string $id): SubscribedSkuItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['subscribedSku%2Did'] = $id;
        return new SubscribedSkuItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph.subscriptions.item collection
     * @param string $id Unique identifier of the item
     * @return SubscriptionItemRequestBuilder
    */
    public function subscriptionsById(string $id): SubscriptionItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['subscription%2Did'] = $id;
        return new SubscriptionItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph.teams.item collection
     * @param string $id Unique identifier of the item
     * @return TeamItemRequestBuilder
    */
    public function teamsById(string $id): TeamItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['team%2Did'] = $id;
        return new TeamItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph.teamsTemplates.item collection
     * @param string $id Unique identifier of the item
     * @return TeamsTemplateItemRequestBuilder
    */
    public function teamsTemplatesById(string $id): TeamsTemplateItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['teamsTemplate%2Did'] = $id;
        return new TeamsTemplateItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph.users.item collection
     * @param string $id Unique identifier of the item
     * @return UserItemRequestBuilder
    */
    public function usersById(string $id): UserItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['user%2Did'] = $id;
        return new UserItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph.workbooks.item collection
     * @param string $id Unique identifier of the item
     * @return DriveItemItemRequestBuilder
    */
    public function workbooksById(string $id): DriveItemItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['driveItem%2Did'] = $id;
        return new DriveItemItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

}
