<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

/**
 * BitLocker Removable Drive Policies.
*/
class BitLockerRemovableDrivePolicy implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new bitLockerRemovableDrivePolicy and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return BitLockerRemovableDrivePolicy
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): BitLockerRemovableDrivePolicy {
        return new BitLockerRemovableDrivePolicy();
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
     * Gets the blockCrossOrganizationWriteAccess property value. This policy setting determines whether BitLocker protection is required for removable data drives to be writable on a computer.
     * @return bool|null
    */
    public function getBlockCrossOrganizationWriteAccess(): ?bool {
        return $this->getBackingStore()->get('blockCrossOrganizationWriteAccess');
    }

    /**
     * Gets the encryptionMethod property value. Select the encryption method for removable  drives. Possible values are: aesCbc128, aesCbc256, xtsAes128, xtsAes256.
     * @return BitLockerEncryptionMethod|null
    */
    public function getEncryptionMethod(): ?BitLockerEncryptionMethod {
        return $this->getBackingStore()->get('encryptionMethod');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'blockCrossOrganizationWriteAccess' => fn(ParseNode $n) => $o->setBlockCrossOrganizationWriteAccess($n->getBooleanValue()),
            'encryptionMethod' => fn(ParseNode $n) => $o->setEncryptionMethod($n->getEnumValue(BitLockerEncryptionMethod::class)),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'requireEncryptionForWriteAccess' => fn(ParseNode $n) => $o->setRequireEncryptionForWriteAccess($n->getBooleanValue()),
        ];
    }

    /**
     * Gets the @odata.type property value. 
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Gets the requireEncryptionForWriteAccess property value. Indicates whether to block write access to devices configured in another organization.  If requireEncryptionForWriteAccess is false, this value does not affect.
     * @return bool|null
    */
    public function getRequireEncryptionForWriteAccess(): ?bool {
        return $this->getBackingStore()->get('requireEncryptionForWriteAccess');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('blockCrossOrganizationWriteAccess', $this->getBlockCrossOrganizationWriteAccess());
        $writer->writeEnumValue('encryptionMethod', $this->getEncryptionMethod());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeBooleanValue('requireEncryptionForWriteAccess', $this->getRequireEncryptionForWriteAccess());
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
     * Sets the blockCrossOrganizationWriteAccess property value. This policy setting determines whether BitLocker protection is required for removable data drives to be writable on a computer.
     * @param bool|null $value Value to set for the blockCrossOrganizationWriteAccess property.
    */
    public function setBlockCrossOrganizationWriteAccess(?bool $value): void {
        $this->getBackingStore()->set('blockCrossOrganizationWriteAccess', $value);
    }

    /**
     * Sets the encryptionMethod property value. Select the encryption method for removable  drives. Possible values are: aesCbc128, aesCbc256, xtsAes128, xtsAes256.
     * @param BitLockerEncryptionMethod|null $value Value to set for the encryptionMethod property.
    */
    public function setEncryptionMethod(?BitLockerEncryptionMethod $value): void {
        $this->getBackingStore()->set('encryptionMethod', $value);
    }

    /**
     * Sets the @odata.type property value. 
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the requireEncryptionForWriteAccess property value. Indicates whether to block write access to devices configured in another organization.  If requireEncryptionForWriteAccess is false, this value does not affect.
     * @param bool|null $value Value to set for the requireEncryptionForWriteAccess property.
    */
    public function setRequireEncryptionForWriteAccess(?bool $value): void {
        $this->getBackingStore()->set('requireEncryptionForWriteAccess', $value);
    }

}
