<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ShiftPreferences extends ChangeTrackedEntity implements Parsable 
{
    /**
     * @var array<ShiftAvailability>|null $availability Availability of the user to be scheduled for work and its recurrence pattern.
    */
    private ?array $availability = null;
    
    /**
     * Instantiates a new shiftPreferences and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ShiftPreferences
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ShiftPreferences {
        return new ShiftPreferences();
    }

    /**
     * Gets the availability property value. Availability of the user to be scheduled for work and its recurrence pattern.
     * @return array<ShiftAvailability>|null
    */
    public function getAvailability(): ?array {
        return $this->availability;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'availability' => function (ParseNode $n) use ($o) { $o->setAvailability($n->getCollectionOfObjectValues(array(ShiftAvailability::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('availability', $this->availability);
    }

    /**
     * Sets the availability property value. Availability of the user to be scheduled for work and its recurrence pattern.
     *  @param array<ShiftAvailability>|null $value Value to set for the availability property.
    */
    public function setAvailability(?array $value ): void {
        $this->availability = $value;
    }

}
