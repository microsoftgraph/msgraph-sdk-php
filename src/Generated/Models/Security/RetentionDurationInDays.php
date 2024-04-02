<?php

namespace Microsoft\Graph\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class RetentionDurationInDays extends RetentionDuration implements Parsable 
{
    /**
     * Instantiates a new RetentionDurationInDays and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.security.retentionDurationInDays');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RetentionDurationInDays
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RetentionDurationInDays {
        return new RetentionDurationInDays();
    }

    /**
     * Gets the days property value. The days property
     * @return int|null
    */
    public function getDays(): ?int {
        $val = $this->getBackingStore()->get('days');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'days'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'days' => fn(ParseNode $n) => $o->setDays($n->getIntegerValue()),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('days', $this->getDays());
    }

    /**
     * Sets the days property value. The days property
     * @param int|null $value Value to set for the days property.
    */
    public function setDays(?int $value): void {
        $this->getBackingStore()->set('days', $value);
    }

}
