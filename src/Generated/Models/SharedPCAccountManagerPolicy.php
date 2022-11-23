<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class SharedPCAccountManagerPolicy implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new sharedPCAccountManagerPolicy and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SharedPCAccountManagerPolicy
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SharedPCAccountManagerPolicy {
        return new SharedPCAccountManagerPolicy();
    }

    /**
     * Gets the accountDeletionPolicy property value. Possible values for when accounts are deleted on a shared PC.
     * @return SharedPCAccountDeletionPolicyType|null
    */
    public function getAccountDeletionPolicy(): ?SharedPCAccountDeletionPolicyType {
        return $this->getBackingStore()->get('accountDeletionPolicy');
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
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
     * Gets the cacheAccountsAboveDiskFreePercentage property value. Sets the percentage of available disk space a PC should have before it stops deleting cached shared PC accounts. Only applies when AccountDeletionPolicy is DiskSpaceThreshold or DiskSpaceThresholdOrInactiveThreshold. Valid values 0 to 100
     * @return int|null
    */
    public function getCacheAccountsAboveDiskFreePercentage(): ?int {
        return $this->getBackingStore()->get('cacheAccountsAboveDiskFreePercentage');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'accountDeletionPolicy' => fn(ParseNode $n) => $o->setAccountDeletionPolicy($n->getEnumValue(SharedPCAccountDeletionPolicyType::class)),
            'cacheAccountsAboveDiskFreePercentage' => fn(ParseNode $n) => $o->setCacheAccountsAboveDiskFreePercentage($n->getIntegerValue()),
            'inactiveThresholdDays' => fn(ParseNode $n) => $o->setInactiveThresholdDays($n->getIntegerValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'removeAccountsBelowDiskFreePercentage' => fn(ParseNode $n) => $o->setRemoveAccountsBelowDiskFreePercentage($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the inactiveThresholdDays property value. Specifies when the accounts will start being deleted when they have not been logged on during the specified period, given as number of days. Only applies when AccountDeletionPolicy is DiskSpaceThreshold or DiskSpaceThresholdOrInactiveThreshold.
     * @return int|null
    */
    public function getInactiveThresholdDays(): ?int {
        return $this->getBackingStore()->get('inactiveThresholdDays');
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Gets the removeAccountsBelowDiskFreePercentage property value. Sets the percentage of disk space remaining on a PC before cached accounts will be deleted to free disk space. Accounts that have been inactive the longest will be deleted first. Only applies when AccountDeletionPolicy is DiskSpaceThresholdOrInactiveThreshold. Valid values 0 to 100
     * @return int|null
    */
    public function getRemoveAccountsBelowDiskFreePercentage(): ?int {
        return $this->getBackingStore()->get('removeAccountsBelowDiskFreePercentage');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('accountDeletionPolicy', $this->getAccountDeletionPolicy());
        $writer->writeIntegerValue('cacheAccountsAboveDiskFreePercentage', $this->getCacheAccountsAboveDiskFreePercentage());
        $writer->writeIntegerValue('inactiveThresholdDays', $this->getInactiveThresholdDays());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeIntegerValue('removeAccountsBelowDiskFreePercentage', $this->getRemoveAccountsBelowDiskFreePercentage());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the accountDeletionPolicy property value. Possible values for when accounts are deleted on a shared PC.
     *  @param SharedPCAccountDeletionPolicyType|null $value Value to set for the accountDeletionPolicy property.
    */
    public function setAccountDeletionPolicy(?SharedPCAccountDeletionPolicyType $value): void {
        $this->getBackingStore()->set('accountDeletionPolicy', $value);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     *  @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the cacheAccountsAboveDiskFreePercentage property value. Sets the percentage of available disk space a PC should have before it stops deleting cached shared PC accounts. Only applies when AccountDeletionPolicy is DiskSpaceThreshold or DiskSpaceThresholdOrInactiveThreshold. Valid values 0 to 100
     *  @param int|null $value Value to set for the cacheAccountsAboveDiskFreePercentage property.
    */
    public function setCacheAccountsAboveDiskFreePercentage(?int $value): void {
        $this->getBackingStore()->set('cacheAccountsAboveDiskFreePercentage', $value);
    }

    /**
     * Sets the inactiveThresholdDays property value. Specifies when the accounts will start being deleted when they have not been logged on during the specified period, given as number of days. Only applies when AccountDeletionPolicy is DiskSpaceThreshold or DiskSpaceThresholdOrInactiveThreshold.
     *  @param int|null $value Value to set for the inactiveThresholdDays property.
    */
    public function setInactiveThresholdDays(?int $value): void {
        $this->getBackingStore()->set('inactiveThresholdDays', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the removeAccountsBelowDiskFreePercentage property value. Sets the percentage of disk space remaining on a PC before cached accounts will be deleted to free disk space. Accounts that have been inactive the longest will be deleted first. Only applies when AccountDeletionPolicy is DiskSpaceThresholdOrInactiveThreshold. Valid values 0 to 100
     *  @param int|null $value Value to set for the removeAccountsBelowDiskFreePercentage property.
    */
    public function setRemoveAccountsBelowDiskFreePercentage(?int $value): void {
        $this->getBackingStore()->set('removeAccountsBelowDiskFreePercentage', $value);
    }

}
