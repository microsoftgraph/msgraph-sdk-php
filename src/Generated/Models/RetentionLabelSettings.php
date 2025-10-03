<?php

namespace Microsoft\\Graph\\Generated\Models;

use Microsoft\\Graph\\Generated\Models\Security\BehaviorDuringRetentionPeriod;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class RetentionLabelSettings implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new RetentionLabelSettings and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RetentionLabelSettings
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RetentionLabelSettings {
        return new RetentionLabelSettings();
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
     * Gets the behaviorDuringRetentionPeriod property value. Describes the item behavior during retention period. Possible values are: doNotRetain, retain, retainAsRecord, retainAsRegulatoryRecord, unknownFutureValue. Read-only.
     * @return BehaviorDuringRetentionPeriod|null
    */
    public function getBehaviorDuringRetentionPeriod(): ?BehaviorDuringRetentionPeriod {
        $val = $this->getBackingStore()->get('behaviorDuringRetentionPeriod');
        if (is_null($val) || $val instanceof BehaviorDuringRetentionPeriod) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'behaviorDuringRetentionPeriod'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'behaviorDuringRetentionPeriod' => fn(ParseNode $n) => $o->setBehaviorDuringRetentionPeriod($n->getEnumValue(BehaviorDuringRetentionPeriod::class)),
            'isContentUpdateAllowed' => fn(ParseNode $n) => $o->setIsContentUpdateAllowed($n->getBooleanValue()),
            'isDeleteAllowed' => fn(ParseNode $n) => $o->setIsDeleteAllowed($n->getBooleanValue()),
            'isLabelUpdateAllowed' => fn(ParseNode $n) => $o->setIsLabelUpdateAllowed($n->getBooleanValue()),
            'isMetadataUpdateAllowed' => fn(ParseNode $n) => $o->setIsMetadataUpdateAllowed($n->getBooleanValue()),
            'isRecordLocked' => fn(ParseNode $n) => $o->setIsRecordLocked($n->getBooleanValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ];
    }

    /**
     * Gets the isContentUpdateAllowed property value. Specifies whether updates to document content are allowed. Read-only.
     * @return bool|null
    */
    public function getIsContentUpdateAllowed(): ?bool {
        $val = $this->getBackingStore()->get('isContentUpdateAllowed');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isContentUpdateAllowed'");
    }

    /**
     * Gets the isDeleteAllowed property value. Specifies whether the document deletion is allowed. Read-only.
     * @return bool|null
    */
    public function getIsDeleteAllowed(): ?bool {
        $val = $this->getBackingStore()->get('isDeleteAllowed');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isDeleteAllowed'");
    }

    /**
     * Gets the isLabelUpdateAllowed property value. Specifies whether you're allowed to change the retention label on the document. Read-only.
     * @return bool|null
    */
    public function getIsLabelUpdateAllowed(): ?bool {
        $val = $this->getBackingStore()->get('isLabelUpdateAllowed');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isLabelUpdateAllowed'");
    }

    /**
     * Gets the isMetadataUpdateAllowed property value. Specifies whether updates to the item metadata (for example, the Title field) are blocked. Read-only.
     * @return bool|null
    */
    public function getIsMetadataUpdateAllowed(): ?bool {
        $val = $this->getBackingStore()->get('isMetadataUpdateAllowed');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isMetadataUpdateAllowed'");
    }

    /**
     * Gets the isRecordLocked property value. Specifies whether the item is locked. Read-write.
     * @return bool|null
    */
    public function getIsRecordLocked(): ?bool {
        $val = $this->getBackingStore()->get('isRecordLocked');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isRecordLocked'");
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
        $writer->writeEnumValue('behaviorDuringRetentionPeriod', $this->getBehaviorDuringRetentionPeriod());
        $writer->writeBooleanValue('isContentUpdateAllowed', $this->getIsContentUpdateAllowed());
        $writer->writeBooleanValue('isDeleteAllowed', $this->getIsDeleteAllowed());
        $writer->writeBooleanValue('isLabelUpdateAllowed', $this->getIsLabelUpdateAllowed());
        $writer->writeBooleanValue('isMetadataUpdateAllowed', $this->getIsMetadataUpdateAllowed());
        $writer->writeBooleanValue('isRecordLocked', $this->getIsRecordLocked());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
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
     * Sets the behaviorDuringRetentionPeriod property value. Describes the item behavior during retention period. Possible values are: doNotRetain, retain, retainAsRecord, retainAsRegulatoryRecord, unknownFutureValue. Read-only.
     * @param BehaviorDuringRetentionPeriod|null $value Value to set for the behaviorDuringRetentionPeriod property.
    */
    public function setBehaviorDuringRetentionPeriod(?BehaviorDuringRetentionPeriod $value): void {
        $this->getBackingStore()->set('behaviorDuringRetentionPeriod', $value);
    }

    /**
     * Sets the isContentUpdateAllowed property value. Specifies whether updates to document content are allowed. Read-only.
     * @param bool|null $value Value to set for the isContentUpdateAllowed property.
    */
    public function setIsContentUpdateAllowed(?bool $value): void {
        $this->getBackingStore()->set('isContentUpdateAllowed', $value);
    }

    /**
     * Sets the isDeleteAllowed property value. Specifies whether the document deletion is allowed. Read-only.
     * @param bool|null $value Value to set for the isDeleteAllowed property.
    */
    public function setIsDeleteAllowed(?bool $value): void {
        $this->getBackingStore()->set('isDeleteAllowed', $value);
    }

    /**
     * Sets the isLabelUpdateAllowed property value. Specifies whether you're allowed to change the retention label on the document. Read-only.
     * @param bool|null $value Value to set for the isLabelUpdateAllowed property.
    */
    public function setIsLabelUpdateAllowed(?bool $value): void {
        $this->getBackingStore()->set('isLabelUpdateAllowed', $value);
    }

    /**
     * Sets the isMetadataUpdateAllowed property value. Specifies whether updates to the item metadata (for example, the Title field) are blocked. Read-only.
     * @param bool|null $value Value to set for the isMetadataUpdateAllowed property.
    */
    public function setIsMetadataUpdateAllowed(?bool $value): void {
        $this->getBackingStore()->set('isMetadataUpdateAllowed', $value);
    }

    /**
     * Sets the isRecordLocked property value. Specifies whether the item is locked. Read-write.
     * @param bool|null $value Value to set for the isRecordLocked property.
    */
    public function setIsRecordLocked(?bool $value): void {
        $this->getBackingStore()->set('isRecordLocked', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
