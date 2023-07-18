<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class RichLongRunningOperation extends LongRunningOperation implements Parsable 
{
    /**
     * Instantiates a new richLongRunningOperation and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RichLongRunningOperation
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RichLongRunningOperation {
        return new RichLongRunningOperation();
    }

    /**
     * Gets the error property value. Error that caused the operation to fail.
     * @return PublicError|null
    */
    public function getError(): ?PublicError {
        $val = $this->getBackingStore()->get('error');
        if (is_null($val) || $val instanceof PublicError) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'error'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'error' => fn(ParseNode $n) => $o->setError($n->getObjectValue([PublicError::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'percentageComplete' => fn(ParseNode $n) => $o->setPercentageComplete($n->getIntegerValue()),
            'resourceId' => fn(ParseNode $n) => $o->setResourceId($n->getStringValue()),
            'type' => fn(ParseNode $n) => $o->setType($n->getStringValue()),
        ]);
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
     * Gets the percentageComplete property value. A value between 0 and 100 that indicates the progress of the operation.
     * @return int|null
    */
    public function getPercentageComplete(): ?int {
        $val = $this->getBackingStore()->get('percentageComplete');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'percentageComplete'");
    }

    /**
     * Gets the resourceId property value. The unique identifier for the result.
     * @return string|null
    */
    public function getResourceId(): ?string {
        $val = $this->getBackingStore()->get('resourceId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'resourceId'");
    }

    /**
     * Gets the type property value. The type of the operation.
     * @return string|null
    */
    public function getType(): ?string {
        $val = $this->getBackingStore()->get('type');
        if (is_null($val) || is_string($val)) {
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
        $writer->writeObjectValue('error', $this->getError());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeIntegerValue('percentageComplete', $this->getPercentageComplete());
        $writer->writeStringValue('resourceId', $this->getResourceId());
        $writer->writeStringValue('type', $this->getType());
    }

    /**
     * Sets the error property value. Error that caused the operation to fail.
     * @param PublicError|null $value Value to set for the error property.
    */
    public function setError(?PublicError $value): void {
        $this->getBackingStore()->set('error', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the percentageComplete property value. A value between 0 and 100 that indicates the progress of the operation.
     * @param int|null $value Value to set for the percentageComplete property.
    */
    public function setPercentageComplete(?int $value): void {
        $this->getBackingStore()->set('percentageComplete', $value);
    }

    /**
     * Sets the resourceId property value. The unique identifier for the result.
     * @param string|null $value Value to set for the resourceId property.
    */
    public function setResourceId(?string $value): void {
        $this->getBackingStore()->set('resourceId', $value);
    }

    /**
     * Sets the type property value. The type of the operation.
     * @param string|null $value Value to set for the type property.
    */
    public function setType(?string $value): void {
        $this->getBackingStore()->set('type', $value);
    }

}
