<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DaylightTimeZoneOffset extends StandardTimeZoneOffset implements Parsable 
{
    /**
     * Instantiates a new daylightTimeZoneOffset and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.daylightTimeZoneOffset');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DaylightTimeZoneOffset
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DaylightTimeZoneOffset {
        return new DaylightTimeZoneOffset();
    }

    /**
     * Gets the daylightBias property value. The time offset from Coordinated Universal Time (UTC) for daylight saving time. This value is in minutes.
     * @return int|null
    */
    public function getDaylightBias(): ?int {
        $val = $this->getBackingStore()->get('daylightBias');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'daylightBias'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'daylightBias' => fn(ParseNode $n) => $o->setDaylightBias($n->getIntegerValue()),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('daylightBias', $this->getDaylightBias());
    }

    /**
     * Sets the daylightBias property value. The time offset from Coordinated Universal Time (UTC) for daylight saving time. This value is in minutes.
     * @param int|null $value Value to set for the daylightBias property.
    */
    public function setDaylightBias(?int $value): void {
        $this->getBackingStore()->set('daylightBias', $value);
    }

}
