<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AttackSimulationOperation extends LongRunningOperation implements Parsable 
{
    /**
     * Instantiates a new attackSimulationOperation and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AttackSimulationOperation
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AttackSimulationOperation {
        return new AttackSimulationOperation();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'percentageCompleted' => fn(ParseNode $n) => $o->setPercentageCompleted($n->getIntegerValue()),
            'tenantId' => fn(ParseNode $n) => $o->setTenantId($n->getStringValue()),
            'type' => fn(ParseNode $n) => $o->setType($n->getEnumValue(AttackSimulationOperationType::class)),
        ]);
    }

    /**
     * Gets the percentageCompleted property value. The percentageCompleted property
     * @return int|null
    */
    public function getPercentageCompleted(): ?int {
        $val = $this->getBackingStore()->get('percentageCompleted');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'percentageCompleted'");
    }

    /**
     * Gets the tenantId property value. The tenantId property
     * @return string|null
    */
    public function getTenantId(): ?string {
        $val = $this->getBackingStore()->get('tenantId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'tenantId'");
    }

    /**
     * Gets the type property value. The type property
     * @return AttackSimulationOperationType|null
    */
    public function getType(): ?AttackSimulationOperationType {
        $val = $this->getBackingStore()->get('type');
        if (is_null($val) || $val instanceof AttackSimulationOperationType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'type'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('percentageCompleted', $this->getPercentageCompleted());
        $writer->writeStringValue('tenantId', $this->getTenantId());
        $writer->writeEnumValue('type', $this->getType());
    }

    /**
     * Sets the percentageCompleted property value. The percentageCompleted property
     * @param int|null $value Value to set for the percentageCompleted property.
    */
    public function setPercentageCompleted(?int $value): void {
        $this->getBackingStore()->set('percentageCompleted', $value);
    }

    /**
     * Sets the tenantId property value. The tenantId property
     * @param string|null $value Value to set for the tenantId property.
    */
    public function setTenantId(?string $value): void {
        $this->getBackingStore()->set('tenantId', $value);
    }

    /**
     * Sets the type property value. The type property
     * @param AttackSimulationOperationType|null $value Value to set for the type property.
    */
    public function setType(?AttackSimulationOperationType $value): void {
        $this->getBackingStore()->set('type', $value);
    }

}
