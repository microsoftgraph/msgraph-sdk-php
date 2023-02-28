<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class OnPremisesDirectorySynchronizationFeature implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new onPremisesDirectorySynchronizationFeature and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OnPremisesDirectorySynchronizationFeature
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): OnPremisesDirectorySynchronizationFeature {
        return new OnPremisesDirectorySynchronizationFeature();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->getBackingStore()->get('additionalData');
    }

    /**
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the blockCloudObjectTakeoverThroughHardMatchEnabled property value. Used to block cloud object takeover via source anchor hard match if enabled.
     * @return bool|null
    */
    public function getBlockCloudObjectTakeoverThroughHardMatchEnabled(): ?bool {
        return $this->getBackingStore()->get('blockCloudObjectTakeoverThroughHardMatchEnabled');
    }

    /**
     * Gets the blockSoftMatchEnabled property value. Use to block soft match for all objects if enabled for the  tenant. Customers are encouraged to enable this feature and keep it enabled until soft matching is required again for their tenancy. This flag should be enabled again after any soft matching has been completed and is no longer needed.
     * @return bool|null
    */
    public function getBlockSoftMatchEnabled(): ?bool {
        return $this->getBackingStore()->get('blockSoftMatchEnabled');
    }

    /**
     * Gets the bypassDirSyncOverridesEnabled property value. When true, persists the values of Mobile and OtherMobile in on-premises AD during sync cycles instead of values of MobilePhone or AlternateMobilePhones in Azure AD.
     * @return bool|null
    */
    public function getBypassDirSyncOverridesEnabled(): ?bool {
        return $this->getBackingStore()->get('bypassDirSyncOverridesEnabled');
    }

    /**
     * Gets the cloudPasswordPolicyForPasswordSyncedUsersEnabled property value. Used to indicate that cloud password policy applies to users whose passwords are synchronized from on-premises.
     * @return bool|null
    */
    public function getCloudPasswordPolicyForPasswordSyncedUsersEnabled(): ?bool {
        return $this->getBackingStore()->get('cloudPasswordPolicyForPasswordSyncedUsersEnabled');
    }

    /**
     * Gets the concurrentCredentialUpdateEnabled property value. Used to enable concurrent user credentials update in OrgId.
     * @return bool|null
    */
    public function getConcurrentCredentialUpdateEnabled(): ?bool {
        return $this->getBackingStore()->get('concurrentCredentialUpdateEnabled');
    }

    /**
     * Gets the concurrentOrgIdProvisioningEnabled property value. Used to enable concurrent user creation in OrgId.
     * @return bool|null
    */
    public function getConcurrentOrgIdProvisioningEnabled(): ?bool {
        return $this->getBackingStore()->get('concurrentOrgIdProvisioningEnabled');
    }

    /**
     * Gets the deviceWritebackEnabled property value. Used to indicate that device write-back is enabled.
     * @return bool|null
    */
    public function getDeviceWritebackEnabled(): ?bool {
        return $this->getBackingStore()->get('deviceWritebackEnabled');
    }

    /**
     * Gets the directoryExtensionsEnabled property value. Used to indicate that directory extensions are being synced from on-premises AD to Azure AD.
     * @return bool|null
    */
    public function getDirectoryExtensionsEnabled(): ?bool {
        return $this->getBackingStore()->get('directoryExtensionsEnabled');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'blockCloudObjectTakeoverThroughHardMatchEnabled' => fn(ParseNode $n) => $o->setBlockCloudObjectTakeoverThroughHardMatchEnabled($n->getBooleanValue()),
            'blockSoftMatchEnabled' => fn(ParseNode $n) => $o->setBlockSoftMatchEnabled($n->getBooleanValue()),
            'bypassDirSyncOverridesEnabled' => fn(ParseNode $n) => $o->setBypassDirSyncOverridesEnabled($n->getBooleanValue()),
            'cloudPasswordPolicyForPasswordSyncedUsersEnabled' => fn(ParseNode $n) => $o->setCloudPasswordPolicyForPasswordSyncedUsersEnabled($n->getBooleanValue()),
            'concurrentCredentialUpdateEnabled' => fn(ParseNode $n) => $o->setConcurrentCredentialUpdateEnabled($n->getBooleanValue()),
            'concurrentOrgIdProvisioningEnabled' => fn(ParseNode $n) => $o->setConcurrentOrgIdProvisioningEnabled($n->getBooleanValue()),
            'deviceWritebackEnabled' => fn(ParseNode $n) => $o->setDeviceWritebackEnabled($n->getBooleanValue()),
            'directoryExtensionsEnabled' => fn(ParseNode $n) => $o->setDirectoryExtensionsEnabled($n->getBooleanValue()),
            'fopeConflictResolutionEnabled' => fn(ParseNode $n) => $o->setFopeConflictResolutionEnabled($n->getBooleanValue()),
            'groupWriteBackEnabled' => fn(ParseNode $n) => $o->setGroupWriteBackEnabled($n->getBooleanValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'passwordSyncEnabled' => fn(ParseNode $n) => $o->setPasswordSyncEnabled($n->getBooleanValue()),
            'passwordWritebackEnabled' => fn(ParseNode $n) => $o->setPasswordWritebackEnabled($n->getBooleanValue()),
            'quarantineUponProxyAddressesConflictEnabled' => fn(ParseNode $n) => $o->setQuarantineUponProxyAddressesConflictEnabled($n->getBooleanValue()),
            'quarantineUponUpnConflictEnabled' => fn(ParseNode $n) => $o->setQuarantineUponUpnConflictEnabled($n->getBooleanValue()),
            'softMatchOnUpnEnabled' => fn(ParseNode $n) => $o->setSoftMatchOnUpnEnabled($n->getBooleanValue()),
            'synchronizeUpnForManagedUsersEnabled' => fn(ParseNode $n) => $o->setSynchronizeUpnForManagedUsersEnabled($n->getBooleanValue()),
            'unifiedGroupWritebackEnabled' => fn(ParseNode $n) => $o->setUnifiedGroupWritebackEnabled($n->getBooleanValue()),
            'userForcePasswordChangeOnLogonEnabled' => fn(ParseNode $n) => $o->setUserForcePasswordChangeOnLogonEnabled($n->getBooleanValue()),
            'userWritebackEnabled' => fn(ParseNode $n) => $o->setUserWritebackEnabled($n->getBooleanValue()),
        ];
    }

    /**
     * Gets the fopeConflictResolutionEnabled property value. Used to indicate that for a Microsoft Forefront Online Protection for Exchange (FOPE) migrated tenant, the conflicting proxy address should be migrated over.
     * @return bool|null
    */
    public function getFopeConflictResolutionEnabled(): ?bool {
        return $this->getBackingStore()->get('fopeConflictResolutionEnabled');
    }

    /**
     * Gets the groupWriteBackEnabled property value. Used to enable object-level group writeback feature for additional group types.
     * @return bool|null
    */
    public function getGroupWriteBackEnabled(): ?bool {
        return $this->getBackingStore()->get('groupWriteBackEnabled');
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Gets the passwordSyncEnabled property value. Used to indicate on-premise password synchronization is enabled.
     * @return bool|null
    */
    public function getPasswordSyncEnabled(): ?bool {
        return $this->getBackingStore()->get('passwordSyncEnabled');
    }

    /**
     * Gets the passwordWritebackEnabled property value. Used to indicate that writeback of password resets from Azure AD to on-premises AD is enabled.
     * @return bool|null
    */
    public function getPasswordWritebackEnabled(): ?bool {
        return $this->getBackingStore()->get('passwordWritebackEnabled');
    }

    /**
     * Gets the quarantineUponProxyAddressesConflictEnabled property value. Used to indicate that we should quarantine objects with conflicting proxy address.
     * @return bool|null
    */
    public function getQuarantineUponProxyAddressesConflictEnabled(): ?bool {
        return $this->getBackingStore()->get('quarantineUponProxyAddressesConflictEnabled');
    }

    /**
     * Gets the quarantineUponUpnConflictEnabled property value. Used to indicate that we should quarantine objects conflicting with duplicate userPrincipalName.
     * @return bool|null
    */
    public function getQuarantineUponUpnConflictEnabled(): ?bool {
        return $this->getBackingStore()->get('quarantineUponUpnConflictEnabled');
    }

    /**
     * Gets the softMatchOnUpnEnabled property value. Used to indicate that we should soft match objects based on userPrincipalName.
     * @return bool|null
    */
    public function getSoftMatchOnUpnEnabled(): ?bool {
        return $this->getBackingStore()->get('softMatchOnUpnEnabled');
    }

    /**
     * Gets the synchronizeUpnForManagedUsersEnabled property value. Used to indicate that we should synchronize userPrincipalName objects for managed users with licenses.
     * @return bool|null
    */
    public function getSynchronizeUpnForManagedUsersEnabled(): ?bool {
        return $this->getBackingStore()->get('synchronizeUpnForManagedUsersEnabled');
    }

    /**
     * Gets the unifiedGroupWritebackEnabled property value. Used to indicate that Microsoft 365 Group write-back is enabled.
     * @return bool|null
    */
    public function getUnifiedGroupWritebackEnabled(): ?bool {
        return $this->getBackingStore()->get('unifiedGroupWritebackEnabled');
    }

    /**
     * Gets the userForcePasswordChangeOnLogonEnabled property value. Used to indicate that feature to force password change for a user on logon is enabled while synchronizing on-premise credentials.
     * @return bool|null
    */
    public function getUserForcePasswordChangeOnLogonEnabled(): ?bool {
        return $this->getBackingStore()->get('userForcePasswordChangeOnLogonEnabled');
    }

    /**
     * Gets the userWritebackEnabled property value. Used to indicate that user writeback is enabled.
     * @return bool|null
    */
    public function getUserWritebackEnabled(): ?bool {
        return $this->getBackingStore()->get('userWritebackEnabled');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('blockCloudObjectTakeoverThroughHardMatchEnabled', $this->getBlockCloudObjectTakeoverThroughHardMatchEnabled());
        $writer->writeBooleanValue('blockSoftMatchEnabled', $this->getBlockSoftMatchEnabled());
        $writer->writeBooleanValue('bypassDirSyncOverridesEnabled', $this->getBypassDirSyncOverridesEnabled());
        $writer->writeBooleanValue('cloudPasswordPolicyForPasswordSyncedUsersEnabled', $this->getCloudPasswordPolicyForPasswordSyncedUsersEnabled());
        $writer->writeBooleanValue('concurrentCredentialUpdateEnabled', $this->getConcurrentCredentialUpdateEnabled());
        $writer->writeBooleanValue('concurrentOrgIdProvisioningEnabled', $this->getConcurrentOrgIdProvisioningEnabled());
        $writer->writeBooleanValue('deviceWritebackEnabled', $this->getDeviceWritebackEnabled());
        $writer->writeBooleanValue('directoryExtensionsEnabled', $this->getDirectoryExtensionsEnabled());
        $writer->writeBooleanValue('fopeConflictResolutionEnabled', $this->getFopeConflictResolutionEnabled());
        $writer->writeBooleanValue('groupWriteBackEnabled', $this->getGroupWriteBackEnabled());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeBooleanValue('passwordSyncEnabled', $this->getPasswordSyncEnabled());
        $writer->writeBooleanValue('passwordWritebackEnabled', $this->getPasswordWritebackEnabled());
        $writer->writeBooleanValue('quarantineUponProxyAddressesConflictEnabled', $this->getQuarantineUponProxyAddressesConflictEnabled());
        $writer->writeBooleanValue('quarantineUponUpnConflictEnabled', $this->getQuarantineUponUpnConflictEnabled());
        $writer->writeBooleanValue('softMatchOnUpnEnabled', $this->getSoftMatchOnUpnEnabled());
        $writer->writeBooleanValue('synchronizeUpnForManagedUsersEnabled', $this->getSynchronizeUpnForManagedUsersEnabled());
        $writer->writeBooleanValue('unifiedGroupWritebackEnabled', $this->getUnifiedGroupWritebackEnabled());
        $writer->writeBooleanValue('userForcePasswordChangeOnLogonEnabled', $this->getUserForcePasswordChangeOnLogonEnabled());
        $writer->writeBooleanValue('userWritebackEnabled', $this->getUserWritebackEnabled());
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
     * Sets the blockCloudObjectTakeoverThroughHardMatchEnabled property value. Used to block cloud object takeover via source anchor hard match if enabled.
     * @param bool|null $value Value to set for the blockCloudObjectTakeoverThroughHardMatchEnabled property.
    */
    public function setBlockCloudObjectTakeoverThroughHardMatchEnabled(?bool $value): void {
        $this->getBackingStore()->set('blockCloudObjectTakeoverThroughHardMatchEnabled', $value);
    }

    /**
     * Sets the blockSoftMatchEnabled property value. Use to block soft match for all objects if enabled for the  tenant. Customers are encouraged to enable this feature and keep it enabled until soft matching is required again for their tenancy. This flag should be enabled again after any soft matching has been completed and is no longer needed.
     * @param bool|null $value Value to set for the blockSoftMatchEnabled property.
    */
    public function setBlockSoftMatchEnabled(?bool $value): void {
        $this->getBackingStore()->set('blockSoftMatchEnabled', $value);
    }

    /**
     * Sets the bypassDirSyncOverridesEnabled property value. When true, persists the values of Mobile and OtherMobile in on-premises AD during sync cycles instead of values of MobilePhone or AlternateMobilePhones in Azure AD.
     * @param bool|null $value Value to set for the bypassDirSyncOverridesEnabled property.
    */
    public function setBypassDirSyncOverridesEnabled(?bool $value): void {
        $this->getBackingStore()->set('bypassDirSyncOverridesEnabled', $value);
    }

    /**
     * Sets the cloudPasswordPolicyForPasswordSyncedUsersEnabled property value. Used to indicate that cloud password policy applies to users whose passwords are synchronized from on-premises.
     * @param bool|null $value Value to set for the cloudPasswordPolicyForPasswordSyncedUsersEnabled property.
    */
    public function setCloudPasswordPolicyForPasswordSyncedUsersEnabled(?bool $value): void {
        $this->getBackingStore()->set('cloudPasswordPolicyForPasswordSyncedUsersEnabled', $value);
    }

    /**
     * Sets the concurrentCredentialUpdateEnabled property value. Used to enable concurrent user credentials update in OrgId.
     * @param bool|null $value Value to set for the concurrentCredentialUpdateEnabled property.
    */
    public function setConcurrentCredentialUpdateEnabled(?bool $value): void {
        $this->getBackingStore()->set('concurrentCredentialUpdateEnabled', $value);
    }

    /**
     * Sets the concurrentOrgIdProvisioningEnabled property value. Used to enable concurrent user creation in OrgId.
     * @param bool|null $value Value to set for the concurrentOrgIdProvisioningEnabled property.
    */
    public function setConcurrentOrgIdProvisioningEnabled(?bool $value): void {
        $this->getBackingStore()->set('concurrentOrgIdProvisioningEnabled', $value);
    }

    /**
     * Sets the deviceWritebackEnabled property value. Used to indicate that device write-back is enabled.
     * @param bool|null $value Value to set for the deviceWritebackEnabled property.
    */
    public function setDeviceWritebackEnabled(?bool $value): void {
        $this->getBackingStore()->set('deviceWritebackEnabled', $value);
    }

    /**
     * Sets the directoryExtensionsEnabled property value. Used to indicate that directory extensions are being synced from on-premises AD to Azure AD.
     * @param bool|null $value Value to set for the directoryExtensionsEnabled property.
    */
    public function setDirectoryExtensionsEnabled(?bool $value): void {
        $this->getBackingStore()->set('directoryExtensionsEnabled', $value);
    }

    /**
     * Sets the fopeConflictResolutionEnabled property value. Used to indicate that for a Microsoft Forefront Online Protection for Exchange (FOPE) migrated tenant, the conflicting proxy address should be migrated over.
     * @param bool|null $value Value to set for the fopeConflictResolutionEnabled property.
    */
    public function setFopeConflictResolutionEnabled(?bool $value): void {
        $this->getBackingStore()->set('fopeConflictResolutionEnabled', $value);
    }

    /**
     * Sets the groupWriteBackEnabled property value. Used to enable object-level group writeback feature for additional group types.
     * @param bool|null $value Value to set for the groupWriteBackEnabled property.
    */
    public function setGroupWriteBackEnabled(?bool $value): void {
        $this->getBackingStore()->set('groupWriteBackEnabled', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the passwordSyncEnabled property value. Used to indicate on-premise password synchronization is enabled.
     * @param bool|null $value Value to set for the passwordSyncEnabled property.
    */
    public function setPasswordSyncEnabled(?bool $value): void {
        $this->getBackingStore()->set('passwordSyncEnabled', $value);
    }

    /**
     * Sets the passwordWritebackEnabled property value. Used to indicate that writeback of password resets from Azure AD to on-premises AD is enabled.
     * @param bool|null $value Value to set for the passwordWritebackEnabled property.
    */
    public function setPasswordWritebackEnabled(?bool $value): void {
        $this->getBackingStore()->set('passwordWritebackEnabled', $value);
    }

    /**
     * Sets the quarantineUponProxyAddressesConflictEnabled property value. Used to indicate that we should quarantine objects with conflicting proxy address.
     * @param bool|null $value Value to set for the quarantineUponProxyAddressesConflictEnabled property.
    */
    public function setQuarantineUponProxyAddressesConflictEnabled(?bool $value): void {
        $this->getBackingStore()->set('quarantineUponProxyAddressesConflictEnabled', $value);
    }

    /**
     * Sets the quarantineUponUpnConflictEnabled property value. Used to indicate that we should quarantine objects conflicting with duplicate userPrincipalName.
     * @param bool|null $value Value to set for the quarantineUponUpnConflictEnabled property.
    */
    public function setQuarantineUponUpnConflictEnabled(?bool $value): void {
        $this->getBackingStore()->set('quarantineUponUpnConflictEnabled', $value);
    }

    /**
     * Sets the softMatchOnUpnEnabled property value. Used to indicate that we should soft match objects based on userPrincipalName.
     * @param bool|null $value Value to set for the softMatchOnUpnEnabled property.
    */
    public function setSoftMatchOnUpnEnabled(?bool $value): void {
        $this->getBackingStore()->set('softMatchOnUpnEnabled', $value);
    }

    /**
     * Sets the synchronizeUpnForManagedUsersEnabled property value. Used to indicate that we should synchronize userPrincipalName objects for managed users with licenses.
     * @param bool|null $value Value to set for the synchronizeUpnForManagedUsersEnabled property.
    */
    public function setSynchronizeUpnForManagedUsersEnabled(?bool $value): void {
        $this->getBackingStore()->set('synchronizeUpnForManagedUsersEnabled', $value);
    }

    /**
     * Sets the unifiedGroupWritebackEnabled property value. Used to indicate that Microsoft 365 Group write-back is enabled.
     * @param bool|null $value Value to set for the unifiedGroupWritebackEnabled property.
    */
    public function setUnifiedGroupWritebackEnabled(?bool $value): void {
        $this->getBackingStore()->set('unifiedGroupWritebackEnabled', $value);
    }

    /**
     * Sets the userForcePasswordChangeOnLogonEnabled property value. Used to indicate that feature to force password change for a user on logon is enabled while synchronizing on-premise credentials.
     * @param bool|null $value Value to set for the userForcePasswordChangeOnLogonEnabled property.
    */
    public function setUserForcePasswordChangeOnLogonEnabled(?bool $value): void {
        $this->getBackingStore()->set('userForcePasswordChangeOnLogonEnabled', $value);
    }

    /**
     * Sets the userWritebackEnabled property value. Used to indicate that user writeback is enabled.
     * @param bool|null $value Value to set for the userWritebackEnabled property.
    */
    public function setUserWritebackEnabled(?bool $value): void {
        $this->getBackingStore()->set('userWritebackEnabled', $value);
    }

}
