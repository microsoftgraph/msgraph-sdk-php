<?php

namespace Microsoft\\Graph\\Generated\Models;

use DateInterval;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AccessReviewInactiveUsersQueryScope extends AccessReviewQueryScope implements Parsable 
{
    /**
     * Instantiates a new AccessReviewInactiveUsersQueryScope and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.accessReviewInactiveUsersQueryScope');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AccessReviewInactiveUsersQueryScope
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AccessReviewInactiveUsersQueryScope {
        return new AccessReviewInactiveUsersQueryScope();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'inactiveDuration' => fn(ParseNode $n) => $o->setInactiveDuration($n->getDateIntervalValue()),
        ]);
    }

    /**
     * Gets the inactiveDuration property value. Defines the duration of inactivity. Inactivity is based on the last sign in date of the user compared to the access review instance's start date. If this property is not specified, it's assigned the default value PT0S.
     * @return DateInterval|null
    */
    public function getInactiveDuration(): ?DateInterval {
        $val = $this->getBackingStore()->get('inactiveDuration');
        if (is_null($val) || $val instanceof DateInterval) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'inactiveDuration'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateIntervalValue('inactiveDuration', $this->getInactiveDuration());
    }

    /**
     * Sets the inactiveDuration property value. Defines the duration of inactivity. Inactivity is based on the last sign in date of the user compared to the access review instance's start date. If this property is not specified, it's assigned the default value PT0S.
     * @param DateInterval|null $value Value to set for the inactiveDuration property.
    */
    public function setInactiveDuration(?DateInterval $value): void {
        $this->getBackingStore()->set('inactiveDuration', $value);
    }

}
