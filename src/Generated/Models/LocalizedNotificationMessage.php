<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class LocalizedNotificationMessage extends Entity implements Parsable 
{
    /**
     * @var bool|null $isDefault Flag to indicate whether or not this is the default locale for language fallback. This flag can only be set. To unset, set this property to true on another Localized Notification Message.
    */
    private ?bool $isDefault = null;
    
    /**
     * @var DateTime|null $lastModifiedDateTime DateTime the object was last modified.
    */
    private ?DateTime $lastModifiedDateTime = null;
    
    /**
     * @var string|null $locale The Locale for which this message is destined.
    */
    private ?string $locale = null;
    
    /**
     * @var string|null $messageTemplate The Message Template content.
    */
    private ?string $messageTemplate = null;
    
    /**
     * @var string|null $subject The Message Template Subject.
    */
    private ?string $subject = null;
    
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
            'isDefault' => function (ParseNode $n) use ($o) { $o->setIsDefault($n->getBooleanValue()); },
            'lastModifiedDateTime' => function (ParseNode $n) use ($o) { $o->setLastModifiedDateTime($n->getDateTimeValue()); },
            'locale' => function (ParseNode $n) use ($o) { $o->setLocale($n->getStringValue()); },
            'messageTemplate' => function (ParseNode $n) use ($o) { $o->setMessageTemplate($n->getStringValue()); },
            'subject' => function (ParseNode $n) use ($o) { $o->setSubject($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the isDefault property value. Flag to indicate whether or not this is the default locale for language fallback. This flag can only be set. To unset, set this property to true on another Localized Notification Message.
     * @return bool|null
    */
    public function getIsDefault(): ?bool {
        return $this->isDefault;
    }

    /**
     * Gets the lastModifiedDateTime property value. DateTime the object was last modified.
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        return $this->lastModifiedDateTime;
    }

    /**
     * Gets the locale property value. The Locale for which this message is destined.
     * @return string|null
    */
    public function getLocale(): ?string {
        return $this->locale;
    }

    /**
     * Gets the messageTemplate property value. The Message Template content.
     * @return string|null
    */
    public function getMessageTemplate(): ?string {
        return $this->messageTemplate;
    }

    /**
     * Gets the subject property value. The Message Template Subject.
     * @return string|null
    */
    public function getSubject(): ?string {
        return $this->subject;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('isDefault', $this->isDefault);
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->lastModifiedDateTime);
        $writer->writeStringValue('locale', $this->locale);
        $writer->writeStringValue('messageTemplate', $this->messageTemplate);
        $writer->writeStringValue('subject', $this->subject);
    }

    /**
     * Sets the isDefault property value. Flag to indicate whether or not this is the default locale for language fallback. This flag can only be set. To unset, set this property to true on another Localized Notification Message.
     *  @param bool|null $value Value to set for the isDefault property.
    */
    public function setIsDefault(?bool $value ): void {
        $this->isDefault = $value;
    }

    /**
     * Sets the lastModifiedDateTime property value. DateTime the object was last modified.
     *  @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value ): void {
        $this->lastModifiedDateTime = $value;
    }

    /**
     * Sets the locale property value. The Locale for which this message is destined.
     *  @param string|null $value Value to set for the locale property.
    */
    public function setLocale(?string $value ): void {
        $this->locale = $value;
    }

    /**
     * Sets the messageTemplate property value. The Message Template content.
     *  @param string|null $value Value to set for the messageTemplate property.
    */
    public function setMessageTemplate(?string $value ): void {
        $this->messageTemplate = $value;
    }

    /**
     * Sets the subject property value. The Message Template Subject.
     *  @param string|null $value Value to set for the subject property.
    */
    public function setSubject(?string $value ): void {
        $this->subject = $value;
    }

}
