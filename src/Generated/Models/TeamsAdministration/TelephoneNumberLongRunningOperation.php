<?php

namespace Microsoft\Graph\Generated\Models\TeamsAdministration;

use Microsoft\Graph\Generated\Models\Entity;
use Microsoft\Graph\Generated\Models\LongRunningOperationStatus;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class TelephoneNumberLongRunningOperation extends Entity implements Parsable 
{
    /**
     * Instantiates a new TelephoneNumberLongRunningOperation and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TelephoneNumberLongRunningOperation
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TelephoneNumberLongRunningOperation {
        return new TelephoneNumberLongRunningOperation();
    }

    /**
     * Gets the createdDateTime property value. Date and time when the asynchronous operation was created.
     * @return string|null
    */
    public function getCreatedDateTime(): ?string {
        $val = $this->getBackingStore()->get('createdDateTime');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'createdDateTime'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getStringValue()),
            'numbers' => fn(ParseNode $n) => $o->setNumbers($n->getCollectionOfObjectValues([TelephoneNumberLongRunningOperationDetails::class, 'createFromDiscriminatorValue'])),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(LongRunningOperationStatus::class)),
        ]);
    }

    /**
     * Gets the numbers property value. Asynchronous operation details.
     * @return array<TelephoneNumberLongRunningOperationDetails>|null
    */
    public function getNumbers(): ?array {
        $val = $this->getBackingStore()->get('numbers');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, TelephoneNumberLongRunningOperationDetails::class);
            /** @var array<TelephoneNumberLongRunningOperationDetails>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'numbers'");
    }

    /**
     * Gets the status property value. The status property
     * @return LongRunningOperationStatus|null
    */
    public function getStatus(): ?LongRunningOperationStatus {
        $val = $this->getBackingStore()->get('status');
        if (is_null($val) || $val instanceof LongRunningOperationStatus) {
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
        $writer->writeStringValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeCollectionOfObjectValues('numbers', $this->getNumbers());
        $writer->writeEnumValue('status', $this->getStatus());
    }

    /**
     * Sets the createdDateTime property value. Date and time when the asynchronous operation was created.
     * @param string|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?string $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the numbers property value. Asynchronous operation details.
     * @param array<TelephoneNumberLongRunningOperationDetails>|null $value Value to set for the numbers property.
    */
    public function setNumbers(?array $value): void {
        $this->getBackingStore()->set('numbers', $value);
    }

    /**
     * Sets the status property value. The status property
     * @param LongRunningOperationStatus|null $value Value to set for the status property.
    */
    public function setStatus(?LongRunningOperationStatus $value): void {
        $this->getBackingStore()->set('status', $value);
    }

}
