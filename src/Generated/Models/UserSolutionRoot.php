<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UserSolutionRoot extends Entity implements Parsable 
{
    /**
     * Instantiates a new UserSolutionRoot and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UserSolutionRoot
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UserSolutionRoot {
        return new UserSolutionRoot();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'workingTimeSchedule' => fn(ParseNode $n) => $o->setWorkingTimeSchedule($n->getObjectValue([WorkingTimeSchedule::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the workingTimeSchedule property value. The workingTimeSchedule property
     * @return WorkingTimeSchedule|null
    */
    public function getWorkingTimeSchedule(): ?WorkingTimeSchedule {
        $val = $this->getBackingStore()->get('workingTimeSchedule');
        if (is_null($val) || $val instanceof WorkingTimeSchedule) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'workingTimeSchedule'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('workingTimeSchedule', $this->getWorkingTimeSchedule());
    }

    /**
     * Sets the workingTimeSchedule property value. The workingTimeSchedule property
     * @param WorkingTimeSchedule|null $value Value to set for the workingTimeSchedule property.
    */
    public function setWorkingTimeSchedule(?WorkingTimeSchedule $value): void {
        $this->getBackingStore()->set('workingTimeSchedule', $value);
    }

}
