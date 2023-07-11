<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * Notification messages are messages that are sent to end users who are determined to be not-compliant with the compliance policies defined by the administrator. Administrators choose notifications and configure them in the Intune Admin Console using the compliance policy creation page under the “Actions for non-compliance” section. Use the notificationMessageTemplate object to create your own custom notifications for administrators to choose while configuring actions for non-compliance.
*/
class NotificationMessageTemplate extends Entity implements Parsable 
{
    /**
     * @var string|null $odataType The OdataType property
    */
    public ?string $odataType = null;
    
    /**
     * Instantiates a new notificationMessageTemplate and sets the default values.
    */
    public function __construct() {
        parent::__construct();
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
        $val = $this->getBackingStore()->get('brandingOptions');
        if (is_null($val) || $val instanceof NotificationTemplateBrandingOptions) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'brandingOptions'");
    }

    /**
     * Gets the defaultLocale property value. The default locale to fallback onto when the requested locale is not available.
     * @return string|null
    */
    public function getDefaultLocale(): ?string {
        $val = $this->getBackingStore()->get('defaultLocale');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'defaultLocale'");
    }

    /**
     * Gets the displayName property value. Display name for the Notification Message Template.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        $val = $this->getBackingStore()->get('displayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'displayName'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'brandingOptions' => fn(ParseNode $n) => $o->setBrandingOptions($n->getEnumValue(NotificationTemplateBrandingOptions::class)),
            'defaultLocale' => fn(ParseNode $n) => $o->setDefaultLocale($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
            'localizedNotificationMessages' => fn(ParseNode $n) => $o->setLocalizedNotificationMessages($n->getCollectionOfObjectValues([LocalizedNotificationMessage::class, 'createFromDiscriminatorValue'])),
            'roleScopeTagIds' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setRoleScopeTagIds($val);
            },
        ]);
    }

    /**
     * Gets the lastModifiedDateTime property value. DateTime the object was last modified.
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('lastModifiedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastModifiedDateTime'");
    }

    /**
     * Gets the localizedNotificationMessages property value. The list of localized messages for this Notification Message Template.
     * @return array<LocalizedNotificationMessage>|null
    */
    public function getLocalizedNotificationMessages(): ?array {
        $val = $this->getBackingStore()->get('localizedNotificationMessages');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, LocalizedNotificationMessage::class);
            /** @var array<LocalizedNotificationMessage>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'localizedNotificationMessages'");
    }

    /**
     * Gets the roleScopeTagIds property value. List of Scope Tags for this Entity instance.
     * @return array<string>|null
    */
    public function getRoleScopeTagIds(): ?array {
        $val = $this->getBackingStore()->get('roleScopeTagIds');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'roleScopeTagIds'");
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
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeCollectionOfPrimitiveValues('roleScopeTagIds', $this->getRoleScopeTagIds());
    }

    /**
     * Sets the brandingOptions property value. Branding Options for the Message Template. Branding is defined in the Intune Admin Console.
     * @param NotificationTemplateBrandingOptions|null $value Value to set for the brandingOptions property.
    */
    public function setBrandingOptions(?NotificationTemplateBrandingOptions $value): void {
        $this->getBackingStore()->set('brandingOptions', $value);
    }

    /**
     * Sets the defaultLocale property value. The default locale to fallback onto when the requested locale is not available.
     * @param string|null $value Value to set for the defaultLocale property.
    */
    public function setDefaultLocale(?string $value): void {
        $this->getBackingStore()->set('defaultLocale', $value);
    }

    /**
     * Sets the displayName property value. Display name for the Notification Message Template.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the lastModifiedDateTime property value. DateTime the object was last modified.
     * @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastModifiedDateTime', $value);
    }

    /**
     * Sets the localizedNotificationMessages property value. The list of localized messages for this Notification Message Template.
     * @param array<LocalizedNotificationMessage>|null $value Value to set for the localizedNotificationMessages property.
    */
    public function setLocalizedNotificationMessages(?array $value): void {
        $this->getBackingStore()->set('localizedNotificationMessages', $value);
    }

    /**
     * Sets the roleScopeTagIds property value. List of Scope Tags for this Entity instance.
     * @param array<string>|null $value Value to set for the roleScopeTagIds property.
    */
    public function setRoleScopeTagIds(?array $value): void {
        $this->getBackingStore()->set('roleScopeTagIds', $value);
    }

}
