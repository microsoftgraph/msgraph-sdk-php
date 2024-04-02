<?php

namespace Microsoft\Graph\Generated\Models\Security;

use DateTime;
use Microsoft\Graph\Generated\Models\Entity;
use Microsoft\Graph\Generated\Models\IdentitySet;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class RetentionLabel extends Entity implements Parsable 
{
    /**
     * Instantiates a new RetentionLabel and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RetentionLabel
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RetentionLabel {
        return new RetentionLabel();
    }

    /**
     * Gets the actionAfterRetentionPeriod property value. The actionAfterRetentionPeriod property
     * @return ActionAfterRetentionPeriod|null
    */
    public function getActionAfterRetentionPeriod(): ?ActionAfterRetentionPeriod {
        $val = $this->getBackingStore()->get('actionAfterRetentionPeriod');
        if (is_null($val) || $val instanceof ActionAfterRetentionPeriod) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'actionAfterRetentionPeriod'");
    }

    /**
     * Gets the behaviorDuringRetentionPeriod property value. The behaviorDuringRetentionPeriod property
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
     * Gets the createdBy property value. The createdBy property
     * @return IdentitySet|null
    */
    public function getCreatedBy(): ?IdentitySet {
        $val = $this->getBackingStore()->get('createdBy');
        if (is_null($val) || $val instanceof IdentitySet) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'createdBy'");
    }

    /**
     * Gets the createdDateTime property value. The createdDateTime property
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('createdDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'createdDateTime'");
    }

    /**
     * Gets the defaultRecordBehavior property value. The defaultRecordBehavior property
     * @return DefaultRecordBehavior|null
    */
    public function getDefaultRecordBehavior(): ?DefaultRecordBehavior {
        $val = $this->getBackingStore()->get('defaultRecordBehavior');
        if (is_null($val) || $val instanceof DefaultRecordBehavior) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'defaultRecordBehavior'");
    }

    /**
     * Gets the descriptionForAdmins property value. The descriptionForAdmins property
     * @return string|null
    */
    public function getDescriptionForAdmins(): ?string {
        $val = $this->getBackingStore()->get('descriptionForAdmins');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'descriptionForAdmins'");
    }

    /**
     * Gets the descriptionForUsers property value. The descriptionForUsers property
     * @return string|null
    */
    public function getDescriptionForUsers(): ?string {
        $val = $this->getBackingStore()->get('descriptionForUsers');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'descriptionForUsers'");
    }

    /**
     * Gets the descriptors property value. The descriptors property
     * @return FilePlanDescriptor|null
    */
    public function getDescriptors(): ?FilePlanDescriptor {
        $val = $this->getBackingStore()->get('descriptors');
        if (is_null($val) || $val instanceof FilePlanDescriptor) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'descriptors'");
    }

    /**
     * Gets the displayName property value. The displayName property
     * @return string|null
    */
    public function getDisplayName(): ?string {
        $val = $this->getBackingStore()->get('displayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'displayName'");
    }

    /**
     * Gets the dispositionReviewStages property value. The dispositionReviewStages property
     * @return array<DispositionReviewStage>|null
    */
    public function getDispositionReviewStages(): ?array {
        $val = $this->getBackingStore()->get('dispositionReviewStages');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DispositionReviewStage::class);
            /** @var array<DispositionReviewStage>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'dispositionReviewStages'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'actionAfterRetentionPeriod' => fn(ParseNode $n) => $o->setActionAfterRetentionPeriod($n->getEnumValue(ActionAfterRetentionPeriod::class)),
            'behaviorDuringRetentionPeriod' => fn(ParseNode $n) => $o->setBehaviorDuringRetentionPeriod($n->getEnumValue(BehaviorDuringRetentionPeriod::class)),
            'createdBy' => fn(ParseNode $n) => $o->setCreatedBy($n->getObjectValue([IdentitySet::class, 'createFromDiscriminatorValue'])),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'defaultRecordBehavior' => fn(ParseNode $n) => $o->setDefaultRecordBehavior($n->getEnumValue(DefaultRecordBehavior::class)),
            'descriptionForAdmins' => fn(ParseNode $n) => $o->setDescriptionForAdmins($n->getStringValue()),
            'descriptionForUsers' => fn(ParseNode $n) => $o->setDescriptionForUsers($n->getStringValue()),
            'descriptors' => fn(ParseNode $n) => $o->setDescriptors($n->getObjectValue([FilePlanDescriptor::class, 'createFromDiscriminatorValue'])),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'dispositionReviewStages' => fn(ParseNode $n) => $o->setDispositionReviewStages($n->getCollectionOfObjectValues([DispositionReviewStage::class, 'createFromDiscriminatorValue'])),
            'isInUse' => fn(ParseNode $n) => $o->setIsInUse($n->getBooleanValue()),
            'labelToBeApplied' => fn(ParseNode $n) => $o->setLabelToBeApplied($n->getStringValue()),
            'lastModifiedBy' => fn(ParseNode $n) => $o->setLastModifiedBy($n->getObjectValue([IdentitySet::class, 'createFromDiscriminatorValue'])),
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
            'retentionDuration' => fn(ParseNode $n) => $o->setRetentionDuration($n->getObjectValue([RetentionDuration::class, 'createFromDiscriminatorValue'])),
            'retentionEventType' => fn(ParseNode $n) => $o->setRetentionEventType($n->getObjectValue([RetentionEventType::class, 'createFromDiscriminatorValue'])),
            'retentionTrigger' => fn(ParseNode $n) => $o->setRetentionTrigger($n->getEnumValue(RetentionTrigger::class)),
        ]);
    }

    /**
     * Gets the isInUse property value. The isInUse property
     * @return bool|null
    */
    public function getIsInUse(): ?bool {
        $val = $this->getBackingStore()->get('isInUse');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isInUse'");
    }

    /**
     * Gets the labelToBeApplied property value. The labelToBeApplied property
     * @return string|null
    */
    public function getLabelToBeApplied(): ?string {
        $val = $this->getBackingStore()->get('labelToBeApplied');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'labelToBeApplied'");
    }

    /**
     * Gets the lastModifiedBy property value. The lastModifiedBy property
     * @return IdentitySet|null
    */
    public function getLastModifiedBy(): ?IdentitySet {
        $val = $this->getBackingStore()->get('lastModifiedBy');
        if (is_null($val) || $val instanceof IdentitySet) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastModifiedBy'");
    }

    /**
     * Gets the lastModifiedDateTime property value. The lastModifiedDateTime property
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('lastModifiedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastModifiedDateTime'");
    }

    /**
     * Gets the retentionDuration property value. The retentionDuration property
     * @return RetentionDuration|null
    */
    public function getRetentionDuration(): ?RetentionDuration {
        $val = $this->getBackingStore()->get('retentionDuration');
        if (is_null($val) || $val instanceof RetentionDuration) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'retentionDuration'");
    }

    /**
     * Gets the retentionEventType property value. The retentionEventType property
     * @return RetentionEventType|null
    */
    public function getRetentionEventType(): ?RetentionEventType {
        $val = $this->getBackingStore()->get('retentionEventType');
        if (is_null($val) || $val instanceof RetentionEventType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'retentionEventType'");
    }

    /**
     * Gets the retentionTrigger property value. The retentionTrigger property
     * @return RetentionTrigger|null
    */
    public function getRetentionTrigger(): ?RetentionTrigger {
        $val = $this->getBackingStore()->get('retentionTrigger');
        if (is_null($val) || $val instanceof RetentionTrigger) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'retentionTrigger'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('actionAfterRetentionPeriod', $this->getActionAfterRetentionPeriod());
        $writer->writeEnumValue('behaviorDuringRetentionPeriod', $this->getBehaviorDuringRetentionPeriod());
        $writer->writeObjectValue('createdBy', $this->getCreatedBy());
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeEnumValue('defaultRecordBehavior', $this->getDefaultRecordBehavior());
        $writer->writeStringValue('descriptionForAdmins', $this->getDescriptionForAdmins());
        $writer->writeStringValue('descriptionForUsers', $this->getDescriptionForUsers());
        $writer->writeObjectValue('descriptors', $this->getDescriptors());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeCollectionOfObjectValues('dispositionReviewStages', $this->getDispositionReviewStages());
        $writer->writeBooleanValue('isInUse', $this->getIsInUse());
        $writer->writeStringValue('labelToBeApplied', $this->getLabelToBeApplied());
        $writer->writeObjectValue('lastModifiedBy', $this->getLastModifiedBy());
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->getLastModifiedDateTime());
        $writer->writeObjectValue('retentionDuration', $this->getRetentionDuration());
        $writer->writeObjectValue('retentionEventType', $this->getRetentionEventType());
        $writer->writeEnumValue('retentionTrigger', $this->getRetentionTrigger());
    }

    /**
     * Sets the actionAfterRetentionPeriod property value. The actionAfterRetentionPeriod property
     * @param ActionAfterRetentionPeriod|null $value Value to set for the actionAfterRetentionPeriod property.
    */
    public function setActionAfterRetentionPeriod(?ActionAfterRetentionPeriod $value): void {
        $this->getBackingStore()->set('actionAfterRetentionPeriod', $value);
    }

    /**
     * Sets the behaviorDuringRetentionPeriod property value. The behaviorDuringRetentionPeriod property
     * @param BehaviorDuringRetentionPeriod|null $value Value to set for the behaviorDuringRetentionPeriod property.
    */
    public function setBehaviorDuringRetentionPeriod(?BehaviorDuringRetentionPeriod $value): void {
        $this->getBackingStore()->set('behaviorDuringRetentionPeriod', $value);
    }

    /**
     * Sets the createdBy property value. The createdBy property
     * @param IdentitySet|null $value Value to set for the createdBy property.
    */
    public function setCreatedBy(?IdentitySet $value): void {
        $this->getBackingStore()->set('createdBy', $value);
    }

    /**
     * Sets the createdDateTime property value. The createdDateTime property
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the defaultRecordBehavior property value. The defaultRecordBehavior property
     * @param DefaultRecordBehavior|null $value Value to set for the defaultRecordBehavior property.
    */
    public function setDefaultRecordBehavior(?DefaultRecordBehavior $value): void {
        $this->getBackingStore()->set('defaultRecordBehavior', $value);
    }

    /**
     * Sets the descriptionForAdmins property value. The descriptionForAdmins property
     * @param string|null $value Value to set for the descriptionForAdmins property.
    */
    public function setDescriptionForAdmins(?string $value): void {
        $this->getBackingStore()->set('descriptionForAdmins', $value);
    }

    /**
     * Sets the descriptionForUsers property value. The descriptionForUsers property
     * @param string|null $value Value to set for the descriptionForUsers property.
    */
    public function setDescriptionForUsers(?string $value): void {
        $this->getBackingStore()->set('descriptionForUsers', $value);
    }

    /**
     * Sets the descriptors property value. The descriptors property
     * @param FilePlanDescriptor|null $value Value to set for the descriptors property.
    */
    public function setDescriptors(?FilePlanDescriptor $value): void {
        $this->getBackingStore()->set('descriptors', $value);
    }

    /**
     * Sets the displayName property value. The displayName property
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the dispositionReviewStages property value. The dispositionReviewStages property
     * @param array<DispositionReviewStage>|null $value Value to set for the dispositionReviewStages property.
    */
    public function setDispositionReviewStages(?array $value): void {
        $this->getBackingStore()->set('dispositionReviewStages', $value);
    }

    /**
     * Sets the isInUse property value. The isInUse property
     * @param bool|null $value Value to set for the isInUse property.
    */
    public function setIsInUse(?bool $value): void {
        $this->getBackingStore()->set('isInUse', $value);
    }

    /**
     * Sets the labelToBeApplied property value. The labelToBeApplied property
     * @param string|null $value Value to set for the labelToBeApplied property.
    */
    public function setLabelToBeApplied(?string $value): void {
        $this->getBackingStore()->set('labelToBeApplied', $value);
    }

    /**
     * Sets the lastModifiedBy property value. The lastModifiedBy property
     * @param IdentitySet|null $value Value to set for the lastModifiedBy property.
    */
    public function setLastModifiedBy(?IdentitySet $value): void {
        $this->getBackingStore()->set('lastModifiedBy', $value);
    }

    /**
     * Sets the lastModifiedDateTime property value. The lastModifiedDateTime property
     * @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastModifiedDateTime', $value);
    }

    /**
     * Sets the retentionDuration property value. The retentionDuration property
     * @param RetentionDuration|null $value Value to set for the retentionDuration property.
    */
    public function setRetentionDuration(?RetentionDuration $value): void {
        $this->getBackingStore()->set('retentionDuration', $value);
    }

    /**
     * Sets the retentionEventType property value. The retentionEventType property
     * @param RetentionEventType|null $value Value to set for the retentionEventType property.
    */
    public function setRetentionEventType(?RetentionEventType $value): void {
        $this->getBackingStore()->set('retentionEventType', $value);
    }

    /**
     * Sets the retentionTrigger property value. The retentionTrigger property
     * @param RetentionTrigger|null $value Value to set for the retentionTrigger property.
    */
    public function setRetentionTrigger(?RetentionTrigger $value): void {
        $this->getBackingStore()->set('retentionTrigger', $value);
    }

}
