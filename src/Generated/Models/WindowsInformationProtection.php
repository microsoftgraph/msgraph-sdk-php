<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WindowsInformationProtection extends ManagedAppPolicy implements Parsable 
{
    /**
     * @var array<TargetedManagedAppPolicyAssignment>|null $assignments Navigation property to list of security groups targeted for policy.
    */
    private ?array $assignments = null;
    
    /**
     * @var bool|null $azureRightsManagementServicesAllowed Specifies whether to allow Azure RMS encryption for WIP
    */
    private ?bool $azureRightsManagementServicesAllowed = null;
    
    /**
     * @var WindowsInformationProtectionDataRecoveryCertificate|null $dataRecoveryCertificate Specifies a recovery certificate that can be used for data recovery of encrypted files. This is the same as the data recovery agent(DRA) certificate for encrypting file system(EFS)
    */
    private ?WindowsInformationProtectionDataRecoveryCertificate $dataRecoveryCertificate = null;
    
    /**
     * @var WindowsInformationProtectionEnforcementLevel|null $enforcementLevel Possible values for WIP Protection enforcement levels
    */
    private ?WindowsInformationProtectionEnforcementLevel $enforcementLevel = null;
    
    /**
     * @var string|null $enterpriseDomain Primary enterprise domain
    */
    private ?string $enterpriseDomain = null;
    
    /**
     * @var array<WindowsInformationProtectionResourceCollection>|null $enterpriseInternalProxyServers This is the comma-separated list of internal proxy servers. For example, '157.54.14.28, 157.54.11.118, 10.202.14.167, 157.53.14.163, 157.69.210.59'. These proxies have been configured by the admin to connect to specific resources on the Internet. They are considered to be enterprise network locations. The proxies are only leveraged in configuring the EnterpriseProxiedDomains policy to force traffic to the matched domains through these proxies
    */
    private ?array $enterpriseInternalProxyServers = null;
    
    /**
     * @var array<WindowsInformationProtectionIPRangeCollection>|null $enterpriseIPRanges Sets the enterprise IP ranges that define the computers in the enterprise network. Data that comes from those computers will be considered part of the enterprise and protected. These locations will be considered a safe destination for enterprise data to be shared to
    */
    private ?array $enterpriseIPRanges = null;
    
    /**
     * @var bool|null $enterpriseIPRangesAreAuthoritative Boolean value that tells the client to accept the configured list and not to use heuristics to attempt to find other subnets. Default is false
    */
    private ?bool $enterpriseIPRangesAreAuthoritative = null;
    
    /**
     * @var array<WindowsInformationProtectionResourceCollection>|null $enterpriseNetworkDomainNames This is the list of domains that comprise the boundaries of the enterprise. Data from one of these domains that is sent to a device will be considered enterprise data and protected These locations will be considered a safe destination for enterprise data to be shared to
    */
    private ?array $enterpriseNetworkDomainNames = null;
    
    /**
     * @var array<WindowsInformationProtectionResourceCollection>|null $enterpriseProtectedDomainNames List of enterprise domains to be protected
    */
    private ?array $enterpriseProtectedDomainNames = null;
    
    /**
     * @var array<WindowsInformationProtectionProxiedDomainCollection>|null $enterpriseProxiedDomains Contains a list of Enterprise resource domains hosted in the cloud that need to be protected. Connections to these resources are considered enterprise data. If a proxy is paired with a cloud resource, traffic to the cloud resource will be routed through the enterprise network via the denoted proxy server (on Port 80). A proxy server used for this purpose must also be configured using the EnterpriseInternalProxyServers policy
    */
    private ?array $enterpriseProxiedDomains = null;
    
    /**
     * @var array<WindowsInformationProtectionResourceCollection>|null $enterpriseProxyServers This is a list of proxy servers. Any server not on this list is considered non-enterprise
    */
    private ?array $enterpriseProxyServers = null;
    
    /**
     * @var bool|null $enterpriseProxyServersAreAuthoritative Boolean value that tells the client to accept the configured list of proxies and not try to detect other work proxies. Default is false
    */
    private ?bool $enterpriseProxyServersAreAuthoritative = null;
    
    /**
     * @var array<WindowsInformationProtectionAppLockerFile>|null $exemptAppLockerFiles Another way to input exempt apps through xml files
    */
    private ?array $exemptAppLockerFiles = null;
    
    /**
     * @var array<WindowsInformationProtectionApp>|null $exemptApps Exempt applications can also access enterprise data, but the data handled by those applications are not protected. This is because some critical enterprise applications may have compatibility problems with encrypted data.
    */
    private ?array $exemptApps = null;
    
    /**
     * @var bool|null $iconsVisible Determines whether overlays are added to icons for WIP protected files in Explorer and enterprise only app tiles in the Start menu. Starting in Windows 10, version 1703 this setting also configures the visibility of the WIP icon in the title bar of a WIP-protected app
    */
    private ?bool $iconsVisible = null;
    
    /**
     * @var bool|null $indexingEncryptedStoresOrItemsBlocked This switch is for the Windows Search Indexer, to allow or disallow indexing of items
    */
    private ?bool $indexingEncryptedStoresOrItemsBlocked = null;
    
    /**
     * @var bool|null $isAssigned Indicates if the policy is deployed to any inclusion groups or not.
    */
    private ?bool $isAssigned = null;
    
    /**
     * @var array<WindowsInformationProtectionResourceCollection>|null $neutralDomainResources List of domain names that can used for work or personal resource
    */
    private ?array $neutralDomainResources = null;
    
    /**
     * @var array<WindowsInformationProtectionAppLockerFile>|null $protectedAppLockerFiles Another way to input protected apps through xml files
    */
    private ?array $protectedAppLockerFiles = null;
    
    /**
     * @var array<WindowsInformationProtectionApp>|null $protectedApps Protected applications can access enterprise data and the data handled by those applications are protected with encryption
    */
    private ?array $protectedApps = null;
    
    /**
     * @var bool|null $protectionUnderLockConfigRequired Specifies whether the protection under lock feature (also known as encrypt under pin) should be configured
    */
    private ?bool $protectionUnderLockConfigRequired = null;
    
    /**
     * @var bool|null $revokeOnUnenrollDisabled This policy controls whether to revoke the WIP keys when a device unenrolls from the management service. If set to 1 (Don't revoke keys), the keys will not be revoked and the user will continue to have access to protected files after unenrollment. If the keys are not revoked, there will be no revoked file cleanup subsequently.
    */
    private ?bool $revokeOnUnenrollDisabled = null;
    
    /**
     * @var string|null $rightsManagementServicesTemplateId TemplateID GUID to use for RMS encryption. The RMS template allows the IT admin to configure the details about who has access to RMS-protected file and how long they have access
    */
    private ?string $rightsManagementServicesTemplateId = null;
    
    /**
     * @var array<WindowsInformationProtectionResourceCollection>|null $smbAutoEncryptedFileExtensions Specifies a list of file extensions, so that files with these extensions are encrypted when copying from an SMB share within the corporate boundary
    */
    private ?array $smbAutoEncryptedFileExtensions = null;
    
    /**
     * Instantiates a new WindowsInformationProtection and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.windowsInformationProtection');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WindowsInformationProtection
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WindowsInformationProtection {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.mdmWindowsInformationProtectionPolicy': return new MdmWindowsInformationProtectionPolicy();
                case '#microsoft.graph.windowsInformationProtectionPolicy': return new WindowsInformationProtectionPolicy();
            }
        }
        return new WindowsInformationProtection();
    }

    /**
     * Gets the assignments property value. Navigation property to list of security groups targeted for policy.
     * @return array<TargetedManagedAppPolicyAssignment>|null
    */
    public function getAssignments(): ?array {
        return $this->assignments;
    }

    /**
     * Gets the azureRightsManagementServicesAllowed property value. Specifies whether to allow Azure RMS encryption for WIP
     * @return bool|null
    */
    public function getAzureRightsManagementServicesAllowed(): ?bool {
        return $this->azureRightsManagementServicesAllowed;
    }

    /**
     * Gets the dataRecoveryCertificate property value. Specifies a recovery certificate that can be used for data recovery of encrypted files. This is the same as the data recovery agent(DRA) certificate for encrypting file system(EFS)
     * @return WindowsInformationProtectionDataRecoveryCertificate|null
    */
    public function getDataRecoveryCertificate(): ?WindowsInformationProtectionDataRecoveryCertificate {
        return $this->dataRecoveryCertificate;
    }

    /**
     * Gets the enforcementLevel property value. Possible values for WIP Protection enforcement levels
     * @return WindowsInformationProtectionEnforcementLevel|null
    */
    public function getEnforcementLevel(): ?WindowsInformationProtectionEnforcementLevel {
        return $this->enforcementLevel;
    }

    /**
     * Gets the enterpriseDomain property value. Primary enterprise domain
     * @return string|null
    */
    public function getEnterpriseDomain(): ?string {
        return $this->enterpriseDomain;
    }

    /**
     * Gets the enterpriseInternalProxyServers property value. This is the comma-separated list of internal proxy servers. For example, '157.54.14.28, 157.54.11.118, 10.202.14.167, 157.53.14.163, 157.69.210.59'. These proxies have been configured by the admin to connect to specific resources on the Internet. They are considered to be enterprise network locations. The proxies are only leveraged in configuring the EnterpriseProxiedDomains policy to force traffic to the matched domains through these proxies
     * @return array<WindowsInformationProtectionResourceCollection>|null
    */
    public function getEnterpriseInternalProxyServers(): ?array {
        return $this->enterpriseInternalProxyServers;
    }

    /**
     * Gets the enterpriseIPRanges property value. Sets the enterprise IP ranges that define the computers in the enterprise network. Data that comes from those computers will be considered part of the enterprise and protected. These locations will be considered a safe destination for enterprise data to be shared to
     * @return array<WindowsInformationProtectionIPRangeCollection>|null
    */
    public function getEnterpriseIPRanges(): ?array {
        return $this->enterpriseIPRanges;
    }

    /**
     * Gets the enterpriseIPRangesAreAuthoritative property value. Boolean value that tells the client to accept the configured list and not to use heuristics to attempt to find other subnets. Default is false
     * @return bool|null
    */
    public function getEnterpriseIPRangesAreAuthoritative(): ?bool {
        return $this->enterpriseIPRangesAreAuthoritative;
    }

    /**
     * Gets the enterpriseNetworkDomainNames property value. This is the list of domains that comprise the boundaries of the enterprise. Data from one of these domains that is sent to a device will be considered enterprise data and protected These locations will be considered a safe destination for enterprise data to be shared to
     * @return array<WindowsInformationProtectionResourceCollection>|null
    */
    public function getEnterpriseNetworkDomainNames(): ?array {
        return $this->enterpriseNetworkDomainNames;
    }

    /**
     * Gets the enterpriseProtectedDomainNames property value. List of enterprise domains to be protected
     * @return array<WindowsInformationProtectionResourceCollection>|null
    */
    public function getEnterpriseProtectedDomainNames(): ?array {
        return $this->enterpriseProtectedDomainNames;
    }

    /**
     * Gets the enterpriseProxiedDomains property value. Contains a list of Enterprise resource domains hosted in the cloud that need to be protected. Connections to these resources are considered enterprise data. If a proxy is paired with a cloud resource, traffic to the cloud resource will be routed through the enterprise network via the denoted proxy server (on Port 80). A proxy server used for this purpose must also be configured using the EnterpriseInternalProxyServers policy
     * @return array<WindowsInformationProtectionProxiedDomainCollection>|null
    */
    public function getEnterpriseProxiedDomains(): ?array {
        return $this->enterpriseProxiedDomains;
    }

    /**
     * Gets the enterpriseProxyServers property value. This is a list of proxy servers. Any server not on this list is considered non-enterprise
     * @return array<WindowsInformationProtectionResourceCollection>|null
    */
    public function getEnterpriseProxyServers(): ?array {
        return $this->enterpriseProxyServers;
    }

    /**
     * Gets the enterpriseProxyServersAreAuthoritative property value. Boolean value that tells the client to accept the configured list of proxies and not try to detect other work proxies. Default is false
     * @return bool|null
    */
    public function getEnterpriseProxyServersAreAuthoritative(): ?bool {
        return $this->enterpriseProxyServersAreAuthoritative;
    }

    /**
     * Gets the exemptAppLockerFiles property value. Another way to input exempt apps through xml files
     * @return array<WindowsInformationProtectionAppLockerFile>|null
    */
    public function getExemptAppLockerFiles(): ?array {
        return $this->exemptAppLockerFiles;
    }

    /**
     * Gets the exemptApps property value. Exempt applications can also access enterprise data, but the data handled by those applications are not protected. This is because some critical enterprise applications may have compatibility problems with encrypted data.
     * @return array<WindowsInformationProtectionApp>|null
    */
    public function getExemptApps(): ?array {
        return $this->exemptApps;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'assignments' => fn(ParseNode $n) => $o->setAssignments($n->getCollectionOfObjectValues([TargetedManagedAppPolicyAssignment::class, 'createFromDiscriminatorValue'])),
            'azureRightsManagementServicesAllowed' => fn(ParseNode $n) => $o->setAzureRightsManagementServicesAllowed($n->getBooleanValue()),
            'dataRecoveryCertificate' => fn(ParseNode $n) => $o->setDataRecoveryCertificate($n->getObjectValue([WindowsInformationProtectionDataRecoveryCertificate::class, 'createFromDiscriminatorValue'])),
            'enforcementLevel' => fn(ParseNode $n) => $o->setEnforcementLevel($n->getEnumValue(WindowsInformationProtectionEnforcementLevel::class)),
            'enterpriseDomain' => fn(ParseNode $n) => $o->setEnterpriseDomain($n->getStringValue()),
            'enterpriseInternalProxyServers' => fn(ParseNode $n) => $o->setEnterpriseInternalProxyServers($n->getCollectionOfObjectValues([WindowsInformationProtectionResourceCollection::class, 'createFromDiscriminatorValue'])),
            'enterpriseIPRanges' => fn(ParseNode $n) => $o->setEnterpriseIPRanges($n->getCollectionOfObjectValues([WindowsInformationProtectionIPRangeCollection::class, 'createFromDiscriminatorValue'])),
            'enterpriseIPRangesAreAuthoritative' => fn(ParseNode $n) => $o->setEnterpriseIPRangesAreAuthoritative($n->getBooleanValue()),
            'enterpriseNetworkDomainNames' => fn(ParseNode $n) => $o->setEnterpriseNetworkDomainNames($n->getCollectionOfObjectValues([WindowsInformationProtectionResourceCollection::class, 'createFromDiscriminatorValue'])),
            'enterpriseProtectedDomainNames' => fn(ParseNode $n) => $o->setEnterpriseProtectedDomainNames($n->getCollectionOfObjectValues([WindowsInformationProtectionResourceCollection::class, 'createFromDiscriminatorValue'])),
            'enterpriseProxiedDomains' => fn(ParseNode $n) => $o->setEnterpriseProxiedDomains($n->getCollectionOfObjectValues([WindowsInformationProtectionProxiedDomainCollection::class, 'createFromDiscriminatorValue'])),
            'enterpriseProxyServers' => fn(ParseNode $n) => $o->setEnterpriseProxyServers($n->getCollectionOfObjectValues([WindowsInformationProtectionResourceCollection::class, 'createFromDiscriminatorValue'])),
            'enterpriseProxyServersAreAuthoritative' => fn(ParseNode $n) => $o->setEnterpriseProxyServersAreAuthoritative($n->getBooleanValue()),
            'exemptAppLockerFiles' => fn(ParseNode $n) => $o->setExemptAppLockerFiles($n->getCollectionOfObjectValues([WindowsInformationProtectionAppLockerFile::class, 'createFromDiscriminatorValue'])),
            'exemptApps' => fn(ParseNode $n) => $o->setExemptApps($n->getCollectionOfObjectValues([WindowsInformationProtectionApp::class, 'createFromDiscriminatorValue'])),
            'iconsVisible' => fn(ParseNode $n) => $o->setIconsVisible($n->getBooleanValue()),
            'indexingEncryptedStoresOrItemsBlocked' => fn(ParseNode $n) => $o->setIndexingEncryptedStoresOrItemsBlocked($n->getBooleanValue()),
            'isAssigned' => fn(ParseNode $n) => $o->setIsAssigned($n->getBooleanValue()),
            'neutralDomainResources' => fn(ParseNode $n) => $o->setNeutralDomainResources($n->getCollectionOfObjectValues([WindowsInformationProtectionResourceCollection::class, 'createFromDiscriminatorValue'])),
            'protectedAppLockerFiles' => fn(ParseNode $n) => $o->setProtectedAppLockerFiles($n->getCollectionOfObjectValues([WindowsInformationProtectionAppLockerFile::class, 'createFromDiscriminatorValue'])),
            'protectedApps' => fn(ParseNode $n) => $o->setProtectedApps($n->getCollectionOfObjectValues([WindowsInformationProtectionApp::class, 'createFromDiscriminatorValue'])),
            'protectionUnderLockConfigRequired' => fn(ParseNode $n) => $o->setProtectionUnderLockConfigRequired($n->getBooleanValue()),
            'revokeOnUnenrollDisabled' => fn(ParseNode $n) => $o->setRevokeOnUnenrollDisabled($n->getBooleanValue()),
            'rightsManagementServicesTemplateId' => fn(ParseNode $n) => $o->setRightsManagementServicesTemplateId($n->getStringValue()),
            'smbAutoEncryptedFileExtensions' => fn(ParseNode $n) => $o->setSmbAutoEncryptedFileExtensions($n->getCollectionOfObjectValues([WindowsInformationProtectionResourceCollection::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the iconsVisible property value. Determines whether overlays are added to icons for WIP protected files in Explorer and enterprise only app tiles in the Start menu. Starting in Windows 10, version 1703 this setting also configures the visibility of the WIP icon in the title bar of a WIP-protected app
     * @return bool|null
    */
    public function getIconsVisible(): ?bool {
        return $this->iconsVisible;
    }

    /**
     * Gets the indexingEncryptedStoresOrItemsBlocked property value. This switch is for the Windows Search Indexer, to allow or disallow indexing of items
     * @return bool|null
    */
    public function getIndexingEncryptedStoresOrItemsBlocked(): ?bool {
        return $this->indexingEncryptedStoresOrItemsBlocked;
    }

    /**
     * Gets the isAssigned property value. Indicates if the policy is deployed to any inclusion groups or not.
     * @return bool|null
    */
    public function getIsAssigned(): ?bool {
        return $this->isAssigned;
    }

    /**
     * Gets the neutralDomainResources property value. List of domain names that can used for work or personal resource
     * @return array<WindowsInformationProtectionResourceCollection>|null
    */
    public function getNeutralDomainResources(): ?array {
        return $this->neutralDomainResources;
    }

    /**
     * Gets the protectedAppLockerFiles property value. Another way to input protected apps through xml files
     * @return array<WindowsInformationProtectionAppLockerFile>|null
    */
    public function getProtectedAppLockerFiles(): ?array {
        return $this->protectedAppLockerFiles;
    }

    /**
     * Gets the protectedApps property value. Protected applications can access enterprise data and the data handled by those applications are protected with encryption
     * @return array<WindowsInformationProtectionApp>|null
    */
    public function getProtectedApps(): ?array {
        return $this->protectedApps;
    }

    /**
     * Gets the protectionUnderLockConfigRequired property value. Specifies whether the protection under lock feature (also known as encrypt under pin) should be configured
     * @return bool|null
    */
    public function getProtectionUnderLockConfigRequired(): ?bool {
        return $this->protectionUnderLockConfigRequired;
    }

    /**
     * Gets the revokeOnUnenrollDisabled property value. This policy controls whether to revoke the WIP keys when a device unenrolls from the management service. If set to 1 (Don't revoke keys), the keys will not be revoked and the user will continue to have access to protected files after unenrollment. If the keys are not revoked, there will be no revoked file cleanup subsequently.
     * @return bool|null
    */
    public function getRevokeOnUnenrollDisabled(): ?bool {
        return $this->revokeOnUnenrollDisabled;
    }

    /**
     * Gets the rightsManagementServicesTemplateId property value. TemplateID GUID to use for RMS encryption. The RMS template allows the IT admin to configure the details about who has access to RMS-protected file and how long they have access
     * @return string|null
    */
    public function getRightsManagementServicesTemplateId(): ?string {
        return $this->rightsManagementServicesTemplateId;
    }

    /**
     * Gets the smbAutoEncryptedFileExtensions property value. Specifies a list of file extensions, so that files with these extensions are encrypted when copying from an SMB share within the corporate boundary
     * @return array<WindowsInformationProtectionResourceCollection>|null
    */
    public function getSmbAutoEncryptedFileExtensions(): ?array {
        return $this->smbAutoEncryptedFileExtensions;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('assignments', $this->assignments);
        $writer->writeBooleanValue('azureRightsManagementServicesAllowed', $this->azureRightsManagementServicesAllowed);
        $writer->writeObjectValue('dataRecoveryCertificate', $this->dataRecoveryCertificate);
        $writer->writeEnumValue('enforcementLevel', $this->enforcementLevel);
        $writer->writeStringValue('enterpriseDomain', $this->enterpriseDomain);
        $writer->writeCollectionOfObjectValues('enterpriseInternalProxyServers', $this->enterpriseInternalProxyServers);
        $writer->writeCollectionOfObjectValues('enterpriseIPRanges', $this->enterpriseIPRanges);
        $writer->writeBooleanValue('enterpriseIPRangesAreAuthoritative', $this->enterpriseIPRangesAreAuthoritative);
        $writer->writeCollectionOfObjectValues('enterpriseNetworkDomainNames', $this->enterpriseNetworkDomainNames);
        $writer->writeCollectionOfObjectValues('enterpriseProtectedDomainNames', $this->enterpriseProtectedDomainNames);
        $writer->writeCollectionOfObjectValues('enterpriseProxiedDomains', $this->enterpriseProxiedDomains);
        $writer->writeCollectionOfObjectValues('enterpriseProxyServers', $this->enterpriseProxyServers);
        $writer->writeBooleanValue('enterpriseProxyServersAreAuthoritative', $this->enterpriseProxyServersAreAuthoritative);
        $writer->writeCollectionOfObjectValues('exemptAppLockerFiles', $this->exemptAppLockerFiles);
        $writer->writeCollectionOfObjectValues('exemptApps', $this->exemptApps);
        $writer->writeBooleanValue('iconsVisible', $this->iconsVisible);
        $writer->writeBooleanValue('indexingEncryptedStoresOrItemsBlocked', $this->indexingEncryptedStoresOrItemsBlocked);
        $writer->writeBooleanValue('isAssigned', $this->isAssigned);
        $writer->writeCollectionOfObjectValues('neutralDomainResources', $this->neutralDomainResources);
        $writer->writeCollectionOfObjectValues('protectedAppLockerFiles', $this->protectedAppLockerFiles);
        $writer->writeCollectionOfObjectValues('protectedApps', $this->protectedApps);
        $writer->writeBooleanValue('protectionUnderLockConfigRequired', $this->protectionUnderLockConfigRequired);
        $writer->writeBooleanValue('revokeOnUnenrollDisabled', $this->revokeOnUnenrollDisabled);
        $writer->writeStringValue('rightsManagementServicesTemplateId', $this->rightsManagementServicesTemplateId);
        $writer->writeCollectionOfObjectValues('smbAutoEncryptedFileExtensions', $this->smbAutoEncryptedFileExtensions);
    }

    /**
     * Sets the assignments property value. Navigation property to list of security groups targeted for policy.
     *  @param array<TargetedManagedAppPolicyAssignment>|null $value Value to set for the assignments property.
    */
    public function setAssignments(?array $value ): void {
        $this->assignments = $value;
    }

    /**
     * Sets the azureRightsManagementServicesAllowed property value. Specifies whether to allow Azure RMS encryption for WIP
     *  @param bool|null $value Value to set for the azureRightsManagementServicesAllowed property.
    */
    public function setAzureRightsManagementServicesAllowed(?bool $value ): void {
        $this->azureRightsManagementServicesAllowed = $value;
    }

    /**
     * Sets the dataRecoveryCertificate property value. Specifies a recovery certificate that can be used for data recovery of encrypted files. This is the same as the data recovery agent(DRA) certificate for encrypting file system(EFS)
     *  @param WindowsInformationProtectionDataRecoveryCertificate|null $value Value to set for the dataRecoveryCertificate property.
    */
    public function setDataRecoveryCertificate(?WindowsInformationProtectionDataRecoveryCertificate $value ): void {
        $this->dataRecoveryCertificate = $value;
    }

    /**
     * Sets the enforcementLevel property value. Possible values for WIP Protection enforcement levels
     *  @param WindowsInformationProtectionEnforcementLevel|null $value Value to set for the enforcementLevel property.
    */
    public function setEnforcementLevel(?WindowsInformationProtectionEnforcementLevel $value ): void {
        $this->enforcementLevel = $value;
    }

    /**
     * Sets the enterpriseDomain property value. Primary enterprise domain
     *  @param string|null $value Value to set for the enterpriseDomain property.
    */
    public function setEnterpriseDomain(?string $value ): void {
        $this->enterpriseDomain = $value;
    }

    /**
     * Sets the enterpriseInternalProxyServers property value. This is the comma-separated list of internal proxy servers. For example, '157.54.14.28, 157.54.11.118, 10.202.14.167, 157.53.14.163, 157.69.210.59'. These proxies have been configured by the admin to connect to specific resources on the Internet. They are considered to be enterprise network locations. The proxies are only leveraged in configuring the EnterpriseProxiedDomains policy to force traffic to the matched domains through these proxies
     *  @param array<WindowsInformationProtectionResourceCollection>|null $value Value to set for the enterpriseInternalProxyServers property.
    */
    public function setEnterpriseInternalProxyServers(?array $value ): void {
        $this->enterpriseInternalProxyServers = $value;
    }

    /**
     * Sets the enterpriseIPRanges property value. Sets the enterprise IP ranges that define the computers in the enterprise network. Data that comes from those computers will be considered part of the enterprise and protected. These locations will be considered a safe destination for enterprise data to be shared to
     *  @param array<WindowsInformationProtectionIPRangeCollection>|null $value Value to set for the enterpriseIPRanges property.
    */
    public function setEnterpriseIPRanges(?array $value ): void {
        $this->enterpriseIPRanges = $value;
    }

    /**
     * Sets the enterpriseIPRangesAreAuthoritative property value. Boolean value that tells the client to accept the configured list and not to use heuristics to attempt to find other subnets. Default is false
     *  @param bool|null $value Value to set for the enterpriseIPRangesAreAuthoritative property.
    */
    public function setEnterpriseIPRangesAreAuthoritative(?bool $value ): void {
        $this->enterpriseIPRangesAreAuthoritative = $value;
    }

    /**
     * Sets the enterpriseNetworkDomainNames property value. This is the list of domains that comprise the boundaries of the enterprise. Data from one of these domains that is sent to a device will be considered enterprise data and protected These locations will be considered a safe destination for enterprise data to be shared to
     *  @param array<WindowsInformationProtectionResourceCollection>|null $value Value to set for the enterpriseNetworkDomainNames property.
    */
    public function setEnterpriseNetworkDomainNames(?array $value ): void {
        $this->enterpriseNetworkDomainNames = $value;
    }

    /**
     * Sets the enterpriseProtectedDomainNames property value. List of enterprise domains to be protected
     *  @param array<WindowsInformationProtectionResourceCollection>|null $value Value to set for the enterpriseProtectedDomainNames property.
    */
    public function setEnterpriseProtectedDomainNames(?array $value ): void {
        $this->enterpriseProtectedDomainNames = $value;
    }

    /**
     * Sets the enterpriseProxiedDomains property value. Contains a list of Enterprise resource domains hosted in the cloud that need to be protected. Connections to these resources are considered enterprise data. If a proxy is paired with a cloud resource, traffic to the cloud resource will be routed through the enterprise network via the denoted proxy server (on Port 80). A proxy server used for this purpose must also be configured using the EnterpriseInternalProxyServers policy
     *  @param array<WindowsInformationProtectionProxiedDomainCollection>|null $value Value to set for the enterpriseProxiedDomains property.
    */
    public function setEnterpriseProxiedDomains(?array $value ): void {
        $this->enterpriseProxiedDomains = $value;
    }

    /**
     * Sets the enterpriseProxyServers property value. This is a list of proxy servers. Any server not on this list is considered non-enterprise
     *  @param array<WindowsInformationProtectionResourceCollection>|null $value Value to set for the enterpriseProxyServers property.
    */
    public function setEnterpriseProxyServers(?array $value ): void {
        $this->enterpriseProxyServers = $value;
    }

    /**
     * Sets the enterpriseProxyServersAreAuthoritative property value. Boolean value that tells the client to accept the configured list of proxies and not try to detect other work proxies. Default is false
     *  @param bool|null $value Value to set for the enterpriseProxyServersAreAuthoritative property.
    */
    public function setEnterpriseProxyServersAreAuthoritative(?bool $value ): void {
        $this->enterpriseProxyServersAreAuthoritative = $value;
    }

    /**
     * Sets the exemptAppLockerFiles property value. Another way to input exempt apps through xml files
     *  @param array<WindowsInformationProtectionAppLockerFile>|null $value Value to set for the exemptAppLockerFiles property.
    */
    public function setExemptAppLockerFiles(?array $value ): void {
        $this->exemptAppLockerFiles = $value;
    }

    /**
     * Sets the exemptApps property value. Exempt applications can also access enterprise data, but the data handled by those applications are not protected. This is because some critical enterprise applications may have compatibility problems with encrypted data.
     *  @param array<WindowsInformationProtectionApp>|null $value Value to set for the exemptApps property.
    */
    public function setExemptApps(?array $value ): void {
        $this->exemptApps = $value;
    }

    /**
     * Sets the iconsVisible property value. Determines whether overlays are added to icons for WIP protected files in Explorer and enterprise only app tiles in the Start menu. Starting in Windows 10, version 1703 this setting also configures the visibility of the WIP icon in the title bar of a WIP-protected app
     *  @param bool|null $value Value to set for the iconsVisible property.
    */
    public function setIconsVisible(?bool $value ): void {
        $this->iconsVisible = $value;
    }

    /**
     * Sets the indexingEncryptedStoresOrItemsBlocked property value. This switch is for the Windows Search Indexer, to allow or disallow indexing of items
     *  @param bool|null $value Value to set for the indexingEncryptedStoresOrItemsBlocked property.
    */
    public function setIndexingEncryptedStoresOrItemsBlocked(?bool $value ): void {
        $this->indexingEncryptedStoresOrItemsBlocked = $value;
    }

    /**
     * Sets the isAssigned property value. Indicates if the policy is deployed to any inclusion groups or not.
     *  @param bool|null $value Value to set for the isAssigned property.
    */
    public function setIsAssigned(?bool $value ): void {
        $this->isAssigned = $value;
    }

    /**
     * Sets the neutralDomainResources property value. List of domain names that can used for work or personal resource
     *  @param array<WindowsInformationProtectionResourceCollection>|null $value Value to set for the neutralDomainResources property.
    */
    public function setNeutralDomainResources(?array $value ): void {
        $this->neutralDomainResources = $value;
    }

    /**
     * Sets the protectedAppLockerFiles property value. Another way to input protected apps through xml files
     *  @param array<WindowsInformationProtectionAppLockerFile>|null $value Value to set for the protectedAppLockerFiles property.
    */
    public function setProtectedAppLockerFiles(?array $value ): void {
        $this->protectedAppLockerFiles = $value;
    }

    /**
     * Sets the protectedApps property value. Protected applications can access enterprise data and the data handled by those applications are protected with encryption
     *  @param array<WindowsInformationProtectionApp>|null $value Value to set for the protectedApps property.
    */
    public function setProtectedApps(?array $value ): void {
        $this->protectedApps = $value;
    }

    /**
     * Sets the protectionUnderLockConfigRequired property value. Specifies whether the protection under lock feature (also known as encrypt under pin) should be configured
     *  @param bool|null $value Value to set for the protectionUnderLockConfigRequired property.
    */
    public function setProtectionUnderLockConfigRequired(?bool $value ): void {
        $this->protectionUnderLockConfigRequired = $value;
    }

    /**
     * Sets the revokeOnUnenrollDisabled property value. This policy controls whether to revoke the WIP keys when a device unenrolls from the management service. If set to 1 (Don't revoke keys), the keys will not be revoked and the user will continue to have access to protected files after unenrollment. If the keys are not revoked, there will be no revoked file cleanup subsequently.
     *  @param bool|null $value Value to set for the revokeOnUnenrollDisabled property.
    */
    public function setRevokeOnUnenrollDisabled(?bool $value ): void {
        $this->revokeOnUnenrollDisabled = $value;
    }

    /**
     * Sets the rightsManagementServicesTemplateId property value. TemplateID GUID to use for RMS encryption. The RMS template allows the IT admin to configure the details about who has access to RMS-protected file and how long they have access
     *  @param string|null $value Value to set for the rightsManagementServicesTemplateId property.
    */
    public function setRightsManagementServicesTemplateId(?string $value ): void {
        $this->rightsManagementServicesTemplateId = $value;
    }

    /**
     * Sets the smbAutoEncryptedFileExtensions property value. Specifies a list of file extensions, so that files with these extensions are encrypted when copying from an SMB share within the corporate boundary
     *  @param array<WindowsInformationProtectionResourceCollection>|null $value Value to set for the smbAutoEncryptedFileExtensions property.
    */
    public function setSmbAutoEncryptedFileExtensions(?array $value ): void {
        $this->smbAutoEncryptedFileExtensions = $value;
    }

}
