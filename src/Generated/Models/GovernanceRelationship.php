<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class GovernanceRelationship extends Entity implements Parsable 
{
    /**
     * Instantiates a new GovernanceRelationship and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return GovernanceRelationship
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): GovernanceRelationship {
        return new GovernanceRelationship();
    }

    /**
     * Gets the createdType property value. The createdType property
     * @return RelationshipCreationType|null
    */
    public function getCreatedType(): ?RelationshipCreationType {
        $val = $this->getBackingStore()->get('createdType');
        if (is_null($val) || $val instanceof RelationshipCreationType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'createdType'");
    }

    /**
     * Gets the creationDateTime property value. The creationDateTime property
     * @return DateTime|null
    */
    public function getCreationDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('creationDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'creationDateTime'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'createdType' => fn(ParseNode $n) => $o->setCreatedType($n->getEnumValue(RelationshipCreationType::class)),
            'creationDateTime' => fn(ParseNode $n) => $o->setCreationDateTime($n->getDateTimeValue()),
            'governedTenantId' => fn(ParseNode $n) => $o->setGovernedTenantId($n->getStringValue()),
            'governedTenantName' => fn(ParseNode $n) => $o->setGovernedTenantName($n->getStringValue()),
            'governingTenantId' => fn(ParseNode $n) => $o->setGoverningTenantId($n->getStringValue()),
            'governingTenantName' => fn(ParseNode $n) => $o->setGoverningTenantName($n->getStringValue()),
            'policySnapshot' => fn(ParseNode $n) => $o->setPolicySnapshot($n->getObjectValue([RelationshipPolicy::class, 'createFromDiscriminatorValue'])),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(RelationshipStatus::class)),
        ]);
    }

    /**
     * Gets the governedTenantId property value. The governedTenantId property
     * @return string|null
    */
    public function getGovernedTenantId(): ?string {
        $val = $this->getBackingStore()->get('governedTenantId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'governedTenantId'");
    }

    /**
     * Gets the governedTenantName property value. The governedTenantName property
     * @return string|null
    */
    public function getGovernedTenantName(): ?string {
        $val = $this->getBackingStore()->get('governedTenantName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'governedTenantName'");
    }

    /**
     * Gets the governingTenantId property value. The governingTenantId property
     * @return string|null
    */
    public function getGoverningTenantId(): ?string {
        $val = $this->getBackingStore()->get('governingTenantId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'governingTenantId'");
    }

    /**
     * Gets the governingTenantName property value. The governingTenantName property
     * @return string|null
    */
    public function getGoverningTenantName(): ?string {
        $val = $this->getBackingStore()->get('governingTenantName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'governingTenantName'");
    }

    /**
     * Gets the policySnapshot property value. The policySnapshot property
     * @return RelationshipPolicy|null
    */
    public function getPolicySnapshot(): ?RelationshipPolicy {
        $val = $this->getBackingStore()->get('policySnapshot');
        if (is_null($val) || $val instanceof RelationshipPolicy) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'policySnapshot'");
    }

    /**
     * Gets the status property value. The status property
     * @return RelationshipStatus|null
    */
    public function getStatus(): ?RelationshipStatus {
        $val = $this->getBackingStore()->get('status');
        if (is_null($val) || $val instanceof RelationshipStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'status'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('createdType', $this->getCreatedType());
        $writer->writeDateTimeValue('creationDateTime', $this->getCreationDateTime());
        $writer->writeStringValue('governedTenantId', $this->getGovernedTenantId());
        $writer->writeStringValue('governedTenantName', $this->getGovernedTenantName());
        $writer->writeStringValue('governingTenantId', $this->getGoverningTenantId());
        $writer->writeStringValue('governingTenantName', $this->getGoverningTenantName());
        $writer->writeObjectValue('policySnapshot', $this->getPolicySnapshot());
        $writer->writeEnumValue('status', $this->getStatus());
    }

    /**
     * Sets the createdType property value. The createdType property
     * @param RelationshipCreationType|null $value Value to set for the createdType property.
    */
    public function setCreatedType(?RelationshipCreationType $value): void {
        $this->getBackingStore()->set('createdType', $value);
    }

    /**
     * Sets the creationDateTime property value. The creationDateTime property
     * @param DateTime|null $value Value to set for the creationDateTime property.
    */
    public function setCreationDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('creationDateTime', $value);
    }

    /**
     * Sets the governedTenantId property value. The governedTenantId property
     * @param string|null $value Value to set for the governedTenantId property.
    */
    public function setGovernedTenantId(?string $value): void {
        $this->getBackingStore()->set('governedTenantId', $value);
    }

    /**
     * Sets the governedTenantName property value. The governedTenantName property
     * @param string|null $value Value to set for the governedTenantName property.
    */
    public function setGovernedTenantName(?string $value): void {
        $this->getBackingStore()->set('governedTenantName', $value);
    }

    /**
     * Sets the governingTenantId property value. The governingTenantId property
     * @param string|null $value Value to set for the governingTenantId property.
    */
    public function setGoverningTenantId(?string $value): void {
        $this->getBackingStore()->set('governingTenantId', $value);
    }

    /**
     * Sets the governingTenantName property value. The governingTenantName property
     * @param string|null $value Value to set for the governingTenantName property.
    */
    public function setGoverningTenantName(?string $value): void {
        $this->getBackingStore()->set('governingTenantName', $value);
    }

    /**
     * Sets the policySnapshot property value. The policySnapshot property
     * @param RelationshipPolicy|null $value Value to set for the policySnapshot property.
    */
    public function setPolicySnapshot(?RelationshipPolicy $value): void {
        $this->getBackingStore()->set('policySnapshot', $value);
    }

    /**
     * Sets the status property value. The status property
     * @param RelationshipStatus|null $value Value to set for the status property.
    */
    public function setStatus(?RelationshipStatus $value): void {
        $this->getBackingStore()->set('status', $value);
    }

}
