<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\Date;

class BookingsAvailabilityWindow extends BookingsAvailability implements Parsable 
{
    /**
     * Instantiates a new BookingsAvailabilityWindow and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.bookingsAvailabilityWindow');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return BookingsAvailabilityWindow
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): BookingsAvailabilityWindow {
        return new BookingsAvailabilityWindow();
    }

    /**
     * Gets the endDate property value. Allow customers to end date of availability window.
     * @return Date|null
    */
    public function getEndDate(): ?Date {
        $val = $this->getBackingStore()->get('endDate');
        if (is_null($val) || $val instanceof Date) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'endDate'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'endDate' => fn(ParseNode $n) => $o->setEndDate($n->getDateValue()),
            'startDate' => fn(ParseNode $n) => $o->setStartDate($n->getDateValue()),
        ]);
    }

    /**
     * Gets the startDate property value. Allow customers to start date of availability window.
     * @return Date|null
    */
    public function getStartDate(): ?Date {
        $val = $this->getBackingStore()->get('startDate');
        if (is_null($val) || $val instanceof Date) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'startDate'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateValue('endDate', $this->getEndDate());
        $writer->writeDateValue('startDate', $this->getStartDate());
    }

    /**
     * Sets the endDate property value. Allow customers to end date of availability window.
     * @param Date|null $value Value to set for the endDate property.
    */
    public function setEndDate(?Date $value): void {
        $this->getBackingStore()->set('endDate', $value);
    }

    /**
     * Sets the startDate property value. Allow customers to start date of availability window.
     * @param Date|null $value Value to set for the startDate property.
    */
    public function setStartDate(?Date $value): void {
        $this->getBackingStore()->set('startDate', $value);
    }

}
