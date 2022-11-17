<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class LocalizedNotificationMessage extends Entity implements Parsable 
{
    /**
     * Instantiates a new localizedNotificationMessage and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.localizedNotificationMessage');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return LocalizedNotificationMessage
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): LocalizedNotificationMessage {
        return new LocalizedNotificationMessage();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'isDefault' => fn(ParseNode $n) => $o->setIsDefault($n->getBooleanValue()),
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
            'locale' => fn(ParseNode $n) => $o->setLocale($n->getStringValue()),
            'messageTemplate' => fn(ParseNode $n) => $o->setMessageTemplate($n->getStringValue()),
            'subject' => fn(ParseNode $n) => $o->setSubject($n->getStringValue()),
        ]);
    }

    /**
     * Gets the isDefault property value. Flag to indicate whether or not this is the default locale for language fallback. This flag can only be set. To unset, set this property to true on another Localized Notification Message.
     * @return bool|null
    */
    public function getIsDefault(): ?bool {
        return $this->getBackingStore()->get('isDefault');
    }

    /**
     * Gets the lastModifiedDateTime property value. DateTime the object was last modified.
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('lastModifiedDateTime');
    }

    /**
     * Gets the locale property value. The Locale for which this message is destined.
     * @return string|null
    */
    public function getLocale(): ?string {
        return $this->getBackingStore()->get('locale');
    }

    /**
     * Gets the messageTemplate property value. The Message Template content.
     * @return string|null
    */
    public function getMessageTemplate(): ?string {
        return $this->getBackingStore()->get('messageTemplate');
    }

    /**
     * Gets the subject property value. The Message Template Subject.
     * @return string|null
    */
    public function getSubject(): ?string {
        return $this->getBackingStore()->get('subject');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('isDefault', $this->getIsDefault());
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->getLastModifiedDateTime());
        $writer->writeStringValue('locale', $this->getLocale());
        $writer->writeStringValue('messageTemplate', $this->getMessageTemplate());
        $writer->writeStringValue('subject', $this->getSubject());
    }

    /**
     * Sets the isDefault property value. Flag to indicate whether or not this is the default locale for language fallback. This flag can only be set. To unset, set this property to true on another Localized Notification Message.
     *  @param bool|null $value Value to set for the isDefault property.
    */
    public function setIsDefault(?bool $value): void {
        $this->getBackingStore()->set('isDefault', $value);
    }

    /**
     * Sets the lastModifiedDateTime property value. DateTime the object was last modified.
     *  @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastModifiedDateTime', $value);
    }

    /**
     * Sets the locale property value. The Locale for which this message is destined.
     *  @param string|null $value Value to set for the locale property.
    */
    public function setLocale(?string $value): void {
        $this->getBackingStore()->set('locale', $value);
    }

    /**
     * Sets the messageTemplate property value. The Message Template content.
     *  @param string|null $value Value to set for the messageTemplate property.
    */
    public function setMessageTemplate(?string $value): void {
        $this->getBackingStore()->set('messageTemplate', $value);
    }

    /**
     * Sets the subject property value. The Message Template Subject.
     *  @param string|null $value Value to set for the subject property.
    */
    public function setSubject(?string $value): void {
        $this->getBackingStore()->set('subject', $value);
    }

}
