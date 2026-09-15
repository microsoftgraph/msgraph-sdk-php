<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class B2BRegistrationMetricsRecent extends B2BRegistrationMetricsBase implements Parsable 
{
    /**
     * Instantiates a new B2BRegistrationMetricsRecent and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.b2BRegistrationMetricsRecent');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return B2BRegistrationMetricsRecent
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): B2BRegistrationMetricsRecent {
        return new B2BRegistrationMetricsRecent();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'updateDateTime' => fn(ParseNode $n) => $o->setUpdateDateTime($n->getDateTimeValue()),
        ]);
    }

    /**
     * Gets the updateDateTime property value. The updateDateTime property
     * @return DateTime|null
    */
    public function getUpdateDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('updateDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'updateDateTime'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateTimeValue('updateDateTime', $this->getUpdateDateTime());
    }

    /**
     * Sets the updateDateTime property value. The updateDateTime property
     * @param DateTime|null $value Value to set for the updateDateTime property.
    */
    public function setUpdateDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('updateDateTime', $value);
    }

}
