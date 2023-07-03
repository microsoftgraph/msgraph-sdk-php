<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class WindowsInformationProtection extends ManagedAppPolicy implements Parsable 
{
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
        $val = $this->getBackingStore()->get('assignments');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, TargetedManagedAppPolicyAssignment::class);
            /** @var array<TargetedManagedAppPolicyAssignment>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'assignments'");
    }

    /**
     * Gets the azureRightsManagementServicesAllowed property value. Specifies whether to allow Azure RMS encryption for WIP
     * @return bool|null
    */
    public function getAzureRightsManagementServicesAllowed(): ?bool {
        $val = $this->getBackingStore()->get('azureRightsManagementServicesAllowed');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'azureRightsManagementServicesAllowed'");
    }

    /**
     * Gets the dataRecoveryCertificate property value. Specifies a recovery certificate that can be used for data recovery of encrypted files. This is the same as the data recovery agent(DRA) certificate for encrypting file system(EFS)
     * @return WindowsInformationProtectionDataRecoveryCertificate|null
    */
    public function getDataRecoveryCertificate(): ?WindowsInformationProtectionDataRecoveryCertificate {
        $val = $this->getBackingStore()->get('dataRecoveryCertificate');
        if (is_null($val) || $val instanceof WindowsInformationProtectionDataRecoveryCertificate) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'dataRecoveryCertificate'");
    }

    /**
     * Gets the enforcementLevel property value. Possible values for WIP Protection enforcement levels
     * @return WindowsInformationProtectionEnforcementLevel|null
    */
    public function getEnforcementLevel(): ?WindowsInformationProtectionEnforcementLevel {
        $val = $this->getBackingStore()->get('enforcementLevel');
        if (is_null($val) || $val instanceof WindowsInformationProtectionEnforcementLevel) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'enforcementLevel'");
    }

    /**
     * Gets the enterpriseDomain property value. Primary enterprise domain
     * @return string|null
    */
    public function getEnterpriseDomain(): ?string {
        $val = $this->getBackingStore()->get('enterpriseDomain');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'enterpriseDomain'");
    }

    /**
     * Gets the enterpriseInternalProxyServers property value. This is the comma-separated list of internal proxy servers. For example, '157.54.14.28, 157.54.11.118, 10.202.14.167, 157.53.14.163, 157.69.210.59'. These proxies have been configured by the admin to connect to specific resources on the Internet. They are considered to be enterprise network locations. The proxies are only leveraged in configuring the EnterpriseProxiedDomains policy to force traffic to the matched domains through these proxies
     * @return array<WindowsInformationProtectionResourceCollection>|null
    */
    public function getEnterpriseInternalProxyServers(): ?array {
        $val = $this->getBackingStore()->get('enterpriseInternalProxyServers');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, WindowsInformationProtectionResourceCollection::class);
            /** @var array<WindowsInformationProtectionResourceCollection>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'enterpriseInternalProxyServers'");
    }

    /**
     * Gets the enterpriseIPRanges property value. Sets the enterprise IP ranges that define the computers in the enterprise network. Data that comes from those computers will be considered part of the enterprise and protected. These locations will be considered a safe destination for enterprise data to be shared to
     * @return array<WindowsInformationProtectionIPRangeCollection>|null
    */
    public function getEnterpriseIPRanges(): ?array {
        $val = $this->getBackingStore()->get('enterpriseIPRanges');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, WindowsInformationProtectionIPRangeCollection::class);
            /** @var array<WindowsInformationProtectionIPRangeCollection>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'enterpriseIPRanges'");
    }

    /**
     * Gets the enterpriseIPRangesAreAuthoritative property value. Boolean value that tells the client to accept the configured list and not to use heuristics to attempt to find other subnets. Default is false
     * @return bool|null
    */
    public function getEnterpriseIPRangesAreAuthoritative(): ?bool {
        $val = $this->getBackingStore()->get('enterpriseIPRangesAreAuthoritative');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'enterpriseIPRangesAreAuthoritative'");
    }

    /**
     * Gets the enterpriseNetworkDomainNames property value. This is the list of domains that comprise the boundaries of the enterprise. Data from one of these domains that is sent to a device will be considered enterprise data and protected These locations will be considered a safe destination for enterprise data to be shared to
     * @return array<WindowsInformationProtectionResourceCollection>|null
    */
    public function getEnterpriseNetworkDomainNames(): ?array {
        $val = $this->getBackingStore()->get('enterpriseNetworkDomainNames');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, WindowsInformationProtectionResourceCollection::class);
            /** @var array<WindowsInformationProtectionResourceCollection>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'enterpriseNetworkDomainNames'");
    }

    /**
     * Gets the enterpriseProtectedDomainNames property value. List of enterprise domains to be protected
     * @return array<WindowsInformationProtectionResourceCollection>|null
    */
    public function getEnterpriseProtectedDomainNames(): ?array {
        $val = $this->getBackingStore()->get('enterpriseProtectedDomainNames');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, WindowsInformationProtectionResourceCollection::class);
            /** @var array<WindowsInformationProtectionResourceCollection>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'enterpriseProtectedDomainNames'");
    }

    /**
     * Gets the enterpriseProxiedDomains property value. Contains a list of Enterprise resource domains hosted in the cloud that need to be protected. Connections to these resources are considered enterprise data. If a proxy is paired with a cloud resource, traffic to the cloud resource will be routed through the enterprise network via the denoted proxy server (on Port 80). A proxy server used for this purpose must also be configured using the EnterpriseInternalProxyServers policy
     * @return array<WindowsInformationProtectionProxiedDomainCollection>|null
    */
    public function getEnterpriseProxiedDomains(): ?array {
        $val = $this->getBackingStore()->get('enterpriseProxiedDomains');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, WindowsInformationProtectionProxiedDomainCollection::class);
            /** @var array<WindowsInformationProtectionProxiedDomainCollection>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'enterpriseProxiedDomains'");
    }

    /**
     * Gets the enterpriseProxyServers property value. This is a list of proxy servers. Any server not on this list is considered non-enterprise
     * @return array<WindowsInformationProtectionResourceCollection>|null
    */
    public function getEnterpriseProxyServers(): ?array {
        $val = $this->getBackingStore()->get('enterpriseProxyServers');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, WindowsInformationProtectionResourceCollection::class);
            /** @var array<WindowsInformationProtectionResourceCollection>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'enterpriseProxyServers'");
    }

    /**
     * Gets the enterpriseProxyServersAreAuthoritative property value. Boolean value that tells the client to accept the configured list of proxies and not try to detect other work proxies. Default is false
     * @return bool|null
    */
    public function getEnterpriseProxyServersAreAuthoritative(): ?bool {
        $val = $this->getBackingStore()->get('enterpriseProxyServersAreAuthoritative');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'enterpriseProxyServersAreAuthoritative'");
    }

    /**
     * Gets the exemptAppLockerFiles property value. Another way to input exempt apps through xml files
     * @return array<WindowsInformationProtectionAppLockerFile>|null
    */
    public function getExemptAppLockerFiles(): ?array {
        $val = $this->getBackingStore()->get('exemptAppLockerFiles');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, WindowsInformationProtectionAppLockerFile::class);
            /** @var array<WindowsInformationProtectionAppLockerFile>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'exemptAppLockerFiles'");
    }

    /**
     * Gets the exemptApps property value. Exempt applications can also access enterprise data, but the data handled by those applications are not protected. This is because some critical enterprise applications may have compatibility problems with encrypted data.
     * @return array<WindowsInformationProtectionApp>|null
    */
    public function getExemptApps(): ?array {
        $val = $this->getBackingStore()->get('exemptApps');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, WindowsInformationProtectionApp::class);
            /** @var array<WindowsInformationProtectionApp>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'exemptApps'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
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
        $val = $this->getBackingStore()->get('iconsVisible');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'iconsVisible'");
    }

    /**
     * Gets the indexingEncryptedStoresOrItemsBlocked property value. This switch is for the Windows Search Indexer, to allow or disallow indexing of items
     * @return bool|null
    */
    public function getIndexingEncryptedStoresOrItemsBlocked(): ?bool {
        $val = $this->getBackingStore()->get('indexingEncryptedStoresOrItemsBlocked');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'indexingEncryptedStoresOrItemsBlocked'");
    }

    /**
     * Gets the isAssigned property value. Indicates if the policy is deployed to any inclusion groups or not.
     * @return bool|null
    */
    public function getIsAssigned(): ?bool {
        $val = $this->getBackingStore()->get('isAssigned');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isAssigned'");
    }

    /**
     * Gets the neutralDomainResources property value. List of domain names that can used for work or personal resource
     * @return array<WindowsInformationProtectionResourceCollection>|null
    */
    public function getNeutralDomainResources(): ?array {
        $val = $this->getBackingStore()->get('neutralDomainResources');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, WindowsInformationProtectionResourceCollection::class);
            /** @var array<WindowsInformationProtectionResourceCollection>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'neutralDomainResources'");
    }

    /**
     * Gets the protectedAppLockerFiles property value. Another way to input protected apps through xml files
     * @return array<WindowsInformationProtectionAppLockerFile>|null
    */
    public function getProtectedAppLockerFiles(): ?array {
        $val = $this->getBackingStore()->get('protectedAppLockerFiles');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, WindowsInformationProtectionAppLockerFile::class);
            /** @var array<WindowsInformationProtectionAppLockerFile>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'protectedAppLockerFiles'");
    }

    /**
     * Gets the protectedApps property value. Protected applications can access enterprise data and the data handled by those applications are protected with encryption
     * @return array<WindowsInformationProtectionApp>|null
    */
    public function getProtectedApps(): ?array {
        $val = $this->getBackingStore()->get('protectedApps');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, WindowsInformationProtectionApp::class);
            /** @var array<WindowsInformationProtectionApp>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'protectedApps'");
    }

    /**
     * Gets the protectionUnderLockConfigRequired property value. Specifies whether the protection under lock feature (also known as encrypt under pin) should be configured
     * @return bool|null
    */
    public function getProtectionUnderLockConfigRequired(): ?bool {
        $val = $this->getBackingStore()->get('protectionUnderLockConfigRequired');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'protectionUnderLockConfigRequired'");
    }

    /**
     * Gets the revokeOnUnenrollDisabled property value. This policy controls whether to revoke the WIP keys when a device unenrolls from the management service. If set to 1 (Don't revoke keys), the keys will not be revoked and the user will continue to have access to protected files after unenrollment. If the keys are not revoked, there will be no revoked file cleanup subsequently.
     * @return bool|null
    */
    public function getRevokeOnUnenrollDisabled(): ?bool {
        $val = $this->getBackingStore()->get('revokeOnUnenrollDisabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'revokeOnUnenrollDisabled'");
    }

    /**
     * Gets the rightsManagementServicesTemplateId property value. TemplateID GUID to use for RMS encryption. The RMS template allows the IT admin to configure the details about who has access to RMS-protected file and how long they have access
     * @return string|null
    */
    public function getRightsManagementServicesTemplateId(): ?string {
        $val = $this->getBackingStore()->get('rightsManagementServicesTemplateId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'rightsManagementServicesTemplateId'");
    }

    /**
     * Gets the smbAutoEncryptedFileExtensions property value. Specifies a list of file extensions, so that files with these extensions are encrypted when copying from an SMB share within the corporate boundary
     * @return array<WindowsInformationProtectionResourceCollection>|null
    */
    public function getSmbAutoEncryptedFileExtensions(): ?array {
        $val = $this->getBackingStore()->get('smbAutoEncryptedFileExtensions');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, WindowsInformationProtectionResourceCollection::class);
            /** @var array<WindowsInformationProtectionResourceCollection>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'smbAutoEncryptedFileExtensions'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('assignments', $this->getAssignments());
        $writer->writeBooleanValue('azureRightsManagementServicesAllowed', $this->getAzureRightsManagementServicesAllowed());
        $writer->writeObjectValue('dataRecoveryCertificate', $this->getDataRecoveryCertificate());
        $writer->writeEnumValue('enforcementLevel', $this->getEnforcementLevel());
        $writer->writeStringValue('enterpriseDomain', $this->getEnterpriseDomain());
        $writer->writeCollectionOfObjectValues('enterpriseInternalProxyServers', $this->getEnterpriseInternalProxyServers());
        $writer->writeCollectionOfObjectValues('enterpriseIPRanges', $this->getEnterpriseIPRanges());
        $writer->writeBooleanValue('enterpriseIPRangesAreAuthoritative', $this->getEnterpriseIPRangesAreAuthoritative());
        $writer->writeCollectionOfObjectValues('enterpriseNetworkDomainNames', $this->getEnterpriseNetworkDomainNames());
        $writer->writeCollectionOfObjectValues('enterpriseProtectedDomainNames', $this->getEnterpriseProtectedDomainNames());
        $writer->writeCollectionOfObjectValues('enterpriseProxiedDomains', $this->getEnterpriseProxiedDomains());
        $writer->writeCollectionOfObjectValues('enterpriseProxyServers', $this->getEnterpriseProxyServers());
        $writer->writeBooleanValue('enterpriseProxyServersAreAuthoritative', $this->getEnterpriseProxyServersAreAuthoritative());
        $writer->writeCollectionOfObjectValues('exemptAppLockerFiles', $this->getExemptAppLockerFiles());
        $writer->writeCollectionOfObjectValues('exemptApps', $this->getExemptApps());
        $writer->writeBooleanValue('iconsVisible', $this->getIconsVisible());
        $writer->writeBooleanValue('indexingEncryptedStoresOrItemsBlocked', $this->getIndexingEncryptedStoresOrItemsBlocked());
        $writer->writeBooleanValue('isAssigned', $this->getIsAssigned());
        $writer->writeCollectionOfObjectValues('neutralDomainResources', $this->getNeutralDomainResources());
        $writer->writeCollectionOfObjectValues('protectedAppLockerFiles', $this->getProtectedAppLockerFiles());
        $writer->writeCollectionOfObjectValues('protectedApps', $this->getProtectedApps());
        $writer->writeBooleanValue('protectionUnderLockConfigRequired', $this->getProtectionUnderLockConfigRequired());
        $writer->writeBooleanValue('revokeOnUnenrollDisabled', $this->getRevokeOnUnenrollDisabled());
        $writer->writeStringValue('rightsManagementServicesTemplateId', $this->getRightsManagementServicesTemplateId());
        $writer->writeCollectionOfObjectValues('smbAutoEncryptedFileExtensions', $this->getSmbAutoEncryptedFileExtensions());
    }

    /**
     * Sets the assignments property value. Navigation property to list of security groups targeted for policy.
     * @param array<TargetedManagedAppPolicyAssignment>|null $value Value to set for the assignments property.
    */
    public function setAssignments(?array $value): void {
        $this->getBackingStore()->set('assignments', $value);
    }

    /**
     * Sets the azureRightsManagementServicesAllowed property value. Specifies whether to allow Azure RMS encryption for WIP
     * @param bool|null $value Value to set for the azureRightsManagementServicesAllowed property.
    */
    public function setAzureRightsManagementServicesAllowed(?bool $value): void {
        $this->getBackingStore()->set('azureRightsManagementServicesAllowed', $value);
    }

    /**
     * Sets the dataRecoveryCertificate property value. Specifies a recovery certificate that can be used for data recovery of encrypted files. This is the same as the data recovery agent(DRA) certificate for encrypting file system(EFS)
     * @param WindowsInformationProtectionDataRecoveryCertificate|null $value Value to set for the dataRecoveryCertificate property.
    */
    public function setDataRecoveryCertificate(?WindowsInformationProtectionDataRecoveryCertificate $value): void {
        $this->getBackingStore()->set('dataRecoveryCertificate', $value);
    }

    /**
     * Sets the enforcementLevel property value. Possible values for WIP Protection enforcement levels
     * @param WindowsInformationProtectionEnforcementLevel|null $value Value to set for the enforcementLevel property.
    */
    public function setEnforcementLevel(?WindowsInformationProtectionEnforcementLevel $value): void {
        $this->getBackingStore()->set('enforcementLevel', $value);
    }

    /**
     * Sets the enterpriseDomain property value. Primary enterprise domain
     * @param string|null $value Value to set for the enterpriseDomain property.
    */
    public function setEnterpriseDomain(?string $value): void {
        $this->getBackingStore()->set('enterpriseDomain', $value);
    }

    /**
     * Sets the enterpriseInternalProxyServers property value. This is the comma-separated list of internal proxy servers. For example, '157.54.14.28, 157.54.11.118, 10.202.14.167, 157.53.14.163, 157.69.210.59'. These proxies have been configured by the admin to connect to specific resources on the Internet. They are considered to be enterprise network locations. The proxies are only leveraged in configuring the EnterpriseProxiedDomains policy to force traffic to the matched domains through these proxies
     * @param array<WindowsInformationProtectionResourceCollection>|null $value Value to set for the enterpriseInternalProxyServers property.
    */
    public function setEnterpriseInternalProxyServers(?array $value): void {
        $this->getBackingStore()->set('enterpriseInternalProxyServers', $value);
    }

    /**
     * Sets the enterpriseIPRanges property value. Sets the enterprise IP ranges that define the computers in the enterprise network. Data that comes from those computers will be considered part of the enterprise and protected. These locations will be considered a safe destination for enterprise data to be shared to
     * @param array<WindowsInformationProtectionIPRangeCollection>|null $value Value to set for the enterpriseIPRanges property.
    */
    public function setEnterpriseIPRanges(?array $value): void {
        $this->getBackingStore()->set('enterpriseIPRanges', $value);
    }

    /**
     * Sets the enterpriseIPRangesAreAuthoritative property value. Boolean value that tells the client to accept the configured list and not to use heuristics to attempt to find other subnets. Default is false
     * @param bool|null $value Value to set for the enterpriseIPRangesAreAuthoritative property.
    */
    public function setEnterpriseIPRangesAreAuthoritative(?bool $value): void {
        $this->getBackingStore()->set('enterpriseIPRangesAreAuthoritative', $value);
    }

    /**
     * Sets the enterpriseNetworkDomainNames property value. This is the list of domains that comprise the boundaries of the enterprise. Data from one of these domains that is sent to a device will be considered enterprise data and protected These locations will be considered a safe destination for enterprise data to be shared to
     * @param array<WindowsInformationProtectionResourceCollection>|null $value Value to set for the enterpriseNetworkDomainNames property.
    */
    public function setEnterpriseNetworkDomainNames(?array $value): void {
        $this->getBackingStore()->set('enterpriseNetworkDomainNames', $value);
    }

    /**
     * Sets the enterpriseProtectedDomainNames property value. List of enterprise domains to be protected
     * @param array<WindowsInformationProtectionResourceCollection>|null $value Value to set for the enterpriseProtectedDomainNames property.
    */
    public function setEnterpriseProtectedDomainNames(?array $value): void {
        $this->getBackingStore()->set('enterpriseProtectedDomainNames', $value);
    }

    /**
     * Sets the enterpriseProxiedDomains property value. Contains a list of Enterprise resource domains hosted in the cloud that need to be protected. Connections to these resources are considered enterprise data. If a proxy is paired with a cloud resource, traffic to the cloud resource will be routed through the enterprise network via the denoted proxy server (on Port 80). A proxy server used for this purpose must also be configured using the EnterpriseInternalProxyServers policy
     * @param array<WindowsInformationProtectionProxiedDomainCollection>|null $value Value to set for the enterpriseProxiedDomains property.
    */
    public function setEnterpriseProxiedDomains(?array $value): void {
        $this->getBackingStore()->set('enterpriseProxiedDomains', $value);
    }

    /**
     * Sets the enterpriseProxyServers property value. This is a list of proxy servers. Any server not on this list is considered non-enterprise
     * @param array<WindowsInformationProtectionResourceCollection>|null $value Value to set for the enterpriseProxyServers property.
    */
    public function setEnterpriseProxyServers(?array $value): void {
        $this->getBackingStore()->set('enterpriseProxyServers', $value);
    }

    /**
     * Sets the enterpriseProxyServersAreAuthoritative property value. Boolean value that tells the client to accept the configured list of proxies and not try to detect other work proxies. Default is false
     * @param bool|null $value Value to set for the enterpriseProxyServersAreAuthoritative property.
    */
    public function setEnterpriseProxyServersAreAuthoritative(?bool $value): void {
        $this->getBackingStore()->set('enterpriseProxyServersAreAuthoritative', $value);
    }

    /**
     * Sets the exemptAppLockerFiles property value. Another way to input exempt apps through xml files
     * @param array<WindowsInformationProtectionAppLockerFile>|null $value Value to set for the exemptAppLockerFiles property.
    */
    public function setExemptAppLockerFiles(?array $value): void {
        $this->getBackingStore()->set('exemptAppLockerFiles', $value);
    }

    /**
     * Sets the exemptApps property value. Exempt applications can also access enterprise data, but the data handled by those applications are not protected. This is because some critical enterprise applications may have compatibility problems with encrypted data.
     * @param array<WindowsInformationProtectionApp>|null $value Value to set for the exemptApps property.
    */
    public function setExemptApps(?array $value): void {
        $this->getBackingStore()->set('exemptApps', $value);
    }

    /**
     * Sets the iconsVisible property value. Determines whether overlays are added to icons for WIP protected files in Explorer and enterprise only app tiles in the Start menu. Starting in Windows 10, version 1703 this setting also configures the visibility of the WIP icon in the title bar of a WIP-protected app
     * @param bool|null $value Value to set for the iconsVisible property.
    */
    public function setIconsVisible(?bool $value): void {
        $this->getBackingStore()->set('iconsVisible', $value);
    }

    /**
     * Sets the indexingEncryptedStoresOrItemsBlocked property value. This switch is for the Windows Search Indexer, to allow or disallow indexing of items
     * @param bool|null $value Value to set for the indexingEncryptedStoresOrItemsBlocked property.
    */
    public function setIndexingEncryptedStoresOrItemsBlocked(?bool $value): void {
        $this->getBackingStore()->set('indexingEncryptedStoresOrItemsBlocked', $value);
    }

    /**
     * Sets the isAssigned property value. Indicates if the policy is deployed to any inclusion groups or not.
     * @param bool|null $value Value to set for the isAssigned property.
    */
    public function setIsAssigned(?bool $value): void {
        $this->getBackingStore()->set('isAssigned', $value);
    }

    /**
     * Sets the neutralDomainResources property value. List of domain names that can used for work or personal resource
     * @param array<WindowsInformationProtectionResourceCollection>|null $value Value to set for the neutralDomainResources property.
    */
    public function setNeutralDomainResources(?array $value): void {
        $this->getBackingStore()->set('neutralDomainResources', $value);
    }

    /**
     * Sets the protectedAppLockerFiles property value. Another way to input protected apps through xml files
     * @param array<WindowsInformationProtectionAppLockerFile>|null $value Value to set for the protectedAppLockerFiles property.
    */
    public function setProtectedAppLockerFiles(?array $value): void {
        $this->getBackingStore()->set('protectedAppLockerFiles', $value);
    }

    /**
     * Sets the protectedApps property value. Protected applications can access enterprise data and the data handled by those applications are protected with encryption
     * @param array<WindowsInformationProtectionApp>|null $value Value to set for the protectedApps property.
    */
    public function setProtectedApps(?array $value): void {
        $this->getBackingStore()->set('protectedApps', $value);
    }

    /**
     * Sets the protectionUnderLockConfigRequired property value. Specifies whether the protection under lock feature (also known as encrypt under pin) should be configured
     * @param bool|null $value Value to set for the protectionUnderLockConfigRequired property.
    */
    public function setProtectionUnderLockConfigRequired(?bool $value): void {
        $this->getBackingStore()->set('protectionUnderLockConfigRequired', $value);
    }

    /**
     * Sets the revokeOnUnenrollDisabled property value. This policy controls whether to revoke the WIP keys when a device unenrolls from the management service. If set to 1 (Don't revoke keys), the keys will not be revoked and the user will continue to have access to protected files after unenrollment. If the keys are not revoked, there will be no revoked file cleanup subsequently.
     * @param bool|null $value Value to set for the revokeOnUnenrollDisabled property.
    */
    public function setRevokeOnUnenrollDisabled(?bool $value): void {
        $this->getBackingStore()->set('revokeOnUnenrollDisabled', $value);
    }

    /**
     * Sets the rightsManagementServicesTemplateId property value. TemplateID GUID to use for RMS encryption. The RMS template allows the IT admin to configure the details about who has access to RMS-protected file and how long they have access
     * @param string|null $value Value to set for the rightsManagementServicesTemplateId property.
    */
    public function setRightsManagementServicesTemplateId(?string $value): void {
        $this->getBackingStore()->set('rightsManagementServicesTemplateId', $value);
    }

    /**
     * Sets the smbAutoEncryptedFileExtensions property value. Specifies a list of file extensions, so that files with these extensions are encrypted when copying from an SMB share within the corporate boundary
     * @param array<WindowsInformationProtectionResourceCollection>|null $value Value to set for the smbAutoEncryptedFileExtensions property.
    */
    public function setSmbAutoEncryptedFileExtensions(?array $value): void {
        $this->getBackingStore()->set('smbAutoEncryptedFileExtensions', $value);
    }

}
