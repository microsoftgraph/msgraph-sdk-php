<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class NotificationMessageTemplate extends Entity implements Parsable 
{
    /**
     * Instantiates a new notificationMessageTemplate and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.notificationMessageTemplate');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return NotificationMessageTemplate
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): NotificationMessageTemplate {
        return new NotificationMessageTemplate();
    }

    /**
     * Gets the brandingOptions property value. Branding Options for the Message Template. Branding is defined in the Intune Admin Console.
     * @return NotificationTemplateBrandingOptions|null
    */
    public function getBrandingOptions(): ?NotificationTemplateBrandingOptions {
        return $this->getBackingStore()->get('brandingOptions');
    }

    /**
     * Gets the defaultLocale property value. The default locale to fallback onto when the requested locale is not available.
     * @return string|null
    */
    public function getDefaultLocale(): ?string {
        return $this->getBackingStore()->get('defaultLocale');
    }

    /**
     * Gets the displayName property value. Display name for the Notification Message Template.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->getBackingStore()->get('displayName');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'brandingOptions' => fn(ParseNode $n) => $o->setBrandingOptions($n->getEnumValue(NotificationTemplateBrandingOptions::class)),
            'defaultLocale' => fn(ParseNode $n) => $o->setDefaultLocale($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
            'localizedNotificationMessages' => fn(ParseNode $n) => $o->setLocalizedNotificationMessages($n->getCollectionOfObjectValues([LocalizedNotificationMessage::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the lastModifiedDateTime property value. DateTime the object was last modified.
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('lastModifiedDateTime');
    }

    /**
     * Gets the localizedNotificationMessages property value. The list of localized messages for this Notification Message Template.
     * @return array<LocalizedNotificationMessage>|null
    */
    public function getLocalizedNotificationMessages(): ?array {
        return $this->getBackingStore()->get('localizedNotificationMessages');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('brandingOptions', $this->getBrandingOptions());
        $writer->writeStringValue('defaultLocale', $this->getDefaultLocale());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->getLastModifiedDateTime());
        $writer->writeCollectionOfObjectValues('localizedNotificationMessages', $this->getLocalizedNotificationMessages());
    }

    /**
     * Sets the brandingOptions property value. Branding Options for the Message Template. Branding is defined in the Intune Admin Console.
     *  @param NotificationTemplateBrandingOptions|null $value Value to set for the brandingOptions property.
    */
    public function setBrandingOptions(?NotificationTemplateBrandingOptions $value): void {
        $this->getBackingStore()->set('brandingOptions', $value);
    }

    /**
     * Sets the defaultLocale property value. The default locale to fallback onto when the requested locale is not available.
     *  @param string|null $value Value to set for the defaultLocale property.
    */
    public function setDefaultLocale(?string $value): void {
        $this->getBackingStore()->set('defaultLocale', $value);
    }

    /**
     * Sets the displayName property value. Display name for the Notification Message Template.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the lastModifiedDateTime property value. DateTime the object was last modified.
     *  @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastModifiedDateTime', $value);
    }

    /**
     * Sets the localizedNotificationMessages property value. The list of localized messages for this Notification Message Template.
     *  @param array<LocalizedNotificationMessage>|null $value Value to set for the localizedNotificationMessages property.
    */
    public function setLocalizedNotificationMessages(?array $value): void {
        $this->getBackingStore()->set('localizedNotificationMessages', $value);
    }

}
