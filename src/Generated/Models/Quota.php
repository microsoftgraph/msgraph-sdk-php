<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class Quota implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new Quota and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Quota
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Quota {
        return new Quota();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
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
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the deleted property value. Total space consumed by files in the recycle bin, in bytes. Read-only.
     * @return int|null
    */
    public function getDeleted(): ?int {
        $val = $this->getBackingStore()->get('deleted');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deleted'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'deleted' => fn(ParseNode $n) => $o->setDeleted($n->getIntegerValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'remaining' => fn(ParseNode $n) => $o->setRemaining($n->getIntegerValue()),
            'state' => fn(ParseNode $n) => $o->setState($n->getStringValue()),
            'storagePlanInformation' => fn(ParseNode $n) => $o->setStoragePlanInformation($n->getObjectValue([StoragePlanInformation::class, 'createFromDiscriminatorValue'])),
            'total' => fn(ParseNode $n) => $o->setTotal($n->getIntegerValue()),
            'used' => fn(ParseNode $n) => $o->setUsed($n->getIntegerValue()),
        ];
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
     * Gets the remaining property value. Total space remaining before reaching the quota limit, in bytes. Read-only.
     * @return int|null
    */
    public function getRemaining(): ?int {
        $val = $this->getBackingStore()->get('remaining');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'remaining'");
    }

    /**
     * Gets the state property value. Enumeration value that indicates the state of the storage space. Read-only.
     * @return string|null
    */
    public function getState(): ?string {
        $val = $this->getBackingStore()->get('state');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'state'");
    }

    /**
     * Gets the storagePlanInformation property value. Information about the drive's storage quota plans. Only in Personal OneDrive.
     * @return StoragePlanInformation|null
    */
    public function getStoragePlanInformation(): ?StoragePlanInformation {
        $val = $this->getBackingStore()->get('storagePlanInformation');
        if (is_null($val) || $val instanceof StoragePlanInformation) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'storagePlanInformation'");
    }

    /**
     * Gets the total property value. Total allowed storage space, in bytes. Read-only.
     * @return int|null
    */
    public function getTotal(): ?int {
        $val = $this->getBackingStore()->get('total');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'total'");
    }

    /**
     * Gets the used property value. Total space used, in bytes. Read-only.
     * @return int|null
    */
    public function getUsed(): ?int {
        $val = $this->getBackingStore()->get('used');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'used'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('deleted', $this->getDeleted());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeIntegerValue('remaining', $this->getRemaining());
        $writer->writeStringValue('state', $this->getState());
        $writer->writeObjectValue('storagePlanInformation', $this->getStoragePlanInformation());
        $writer->writeIntegerValue('total', $this->getTotal());
        $writer->writeIntegerValue('used', $this->getUsed());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the deleted property value. Total space consumed by files in the recycle bin, in bytes. Read-only.
     * @param int|null $value Value to set for the deleted property.
    */
    public function setDeleted(?int $value): void {
        $this->getBackingStore()->set('deleted', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the remaining property value. Total space remaining before reaching the quota limit, in bytes. Read-only.
     * @param int|null $value Value to set for the remaining property.
    */
    public function setRemaining(?int $value): void {
        $this->getBackingStore()->set('remaining', $value);
    }

    /**
     * Sets the state property value. Enumeration value that indicates the state of the storage space. Read-only.
     * @param string|null $value Value to set for the state property.
    */
    public function setState(?string $value): void {
        $this->getBackingStore()->set('state', $value);
    }

    /**
     * Sets the storagePlanInformation property value. Information about the drive's storage quota plans. Only in Personal OneDrive.
     * @param StoragePlanInformation|null $value Value to set for the storagePlanInformation property.
    */
    public function setStoragePlanInformation(?StoragePlanInformation $value): void {
        $this->getBackingStore()->set('storagePlanInformation', $value);
    }

    /**
     * Sets the total property value. Total allowed storage space, in bytes. Read-only.
     * @param int|null $value Value to set for the total property.
    */
    public function setTotal(?int $value): void {
        $this->getBackingStore()->set('total', $value);
    }

    /**
     * Sets the used property value. Total space used, in bytes. Read-only.
     * @param int|null $value Value to set for the used property.
    */
    public function setUsed(?int $value): void {
        $this->getBackingStore()->set('used', $value);
    }

}
