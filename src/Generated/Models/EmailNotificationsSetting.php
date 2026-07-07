<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class EmailNotificationsSetting extends Entity implements Parsable 
{
    /**
     * Instantiates a new EmailNotificationsSetting and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EmailNotificationsSetting
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EmailNotificationsSetting {
        return new EmailNotificationsSetting();
    }

    /**
     * Gets the additionalEvents property value. The additionalEvents property
     * @return NotificationEventsType|null
    */
    public function getAdditionalEvents(): ?NotificationEventsType {
        $val = $this->getBackingStore()->get('additionalEvents');
        if (is_null($val) || $val instanceof NotificationEventsType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'additionalEvents'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'additionalEvents' => fn(ParseNode $n) => $o->setAdditionalEvents($n->getEnumValue(NotificationEventsType::class)),
            'isEnabled' => fn(ParseNode $n) => $o->setIsEnabled($n->getBooleanValue()),
            'recipients' => fn(ParseNode $n) => $o->setRecipients($n->getObjectValue([NotificationRecipients::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the isEnabled property value. Indicates whether notifications are enabled.
     * @return bool|null
    */
    public function getIsEnabled(): ?bool {
        $val = $this->getBackingStore()->get('isEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isEnabled'");
    }

    /**
     * Gets the recipients property value. The recipients property
     * @return NotificationRecipients|null
    */
    public function getRecipients(): ?NotificationRecipients {
        $val = $this->getBackingStore()->get('recipients');
        if (is_null($val) || $val instanceof NotificationRecipients) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'recipients'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('additionalEvents', $this->getAdditionalEvents());
        $writer->writeBooleanValue('isEnabled', $this->getIsEnabled());
        $writer->writeObjectValue('recipients', $this->getRecipients());
    }

    /**
     * Sets the additionalEvents property value. The additionalEvents property
     * @param NotificationEventsType|null $value Value to set for the additionalEvents property.
    */
    public function setAdditionalEvents(?NotificationEventsType $value): void {
        $this->getBackingStore()->set('additionalEvents', $value);
    }

    /**
     * Sets the isEnabled property value. Indicates whether notifications are enabled.
     * @param bool|null $value Value to set for the isEnabled property.
    */
    public function setIsEnabled(?bool $value): void {
        $this->getBackingStore()->set('isEnabled', $value);
    }

    /**
     * Sets the recipients property value. The recipients property
     * @param NotificationRecipients|null $value Value to set for the recipients property.
    */
    public function setRecipients(?NotificationRecipients $value): void {
        $this->getBackingStore()->set('recipients', $value);
    }

}
