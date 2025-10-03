<?php

namespace Microsoft\\Graph\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * iOS Device Features Configuration Profile.
*/
class IosDeviceFeaturesConfiguration extends AppleDeviceFeaturesConfigurationBase implements Parsable 
{
    /**
     * Instantiates a new IosDeviceFeaturesConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.iosDeviceFeaturesConfiguration');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return IosDeviceFeaturesConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): IosDeviceFeaturesConfiguration {
        return new IosDeviceFeaturesConfiguration();
    }

    /**
     * Gets the assetTagTemplate property value. Asset tag information for the device, displayed on the login window and lock screen.
     * @return string|null
    */
    public function getAssetTagTemplate(): ?string {
        $val = $this->getBackingStore()->get('assetTagTemplate');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'assetTagTemplate'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'assetTagTemplate' => fn(ParseNode $n) => $o->setAssetTagTemplate($n->getStringValue()),
            'homeScreenDockIcons' => fn(ParseNode $n) => $o->setHomeScreenDockIcons($n->getCollectionOfObjectValues([IosHomeScreenItem::class, 'createFromDiscriminatorValue'])),
            'homeScreenPages' => fn(ParseNode $n) => $o->setHomeScreenPages($n->getCollectionOfObjectValues([IosHomeScreenPage::class, 'createFromDiscriminatorValue'])),
            'lockScreenFootnote' => fn(ParseNode $n) => $o->setLockScreenFootnote($n->getStringValue()),
            'notificationSettings' => fn(ParseNode $n) => $o->setNotificationSettings($n->getCollectionOfObjectValues([IosNotificationSettings::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the homeScreenDockIcons property value. A list of app and folders to appear on the Home Screen Dock. This collection can contain a maximum of 500 elements.
     * @return array<IosHomeScreenItem>|null
    */
    public function getHomeScreenDockIcons(): ?array {
        $val = $this->getBackingStore()->get('homeScreenDockIcons');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, IosHomeScreenItem::class);
            /** @var array<IosHomeScreenItem>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'homeScreenDockIcons'");
    }

    /**
     * Gets the homeScreenPages property value. A list of pages on the Home Screen. This collection can contain a maximum of 500 elements.
     * @return array<IosHomeScreenPage>|null
    */
    public function getHomeScreenPages(): ?array {
        $val = $this->getBackingStore()->get('homeScreenPages');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, IosHomeScreenPage::class);
            /** @var array<IosHomeScreenPage>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'homeScreenPages'");
    }

    /**
     * Gets the lockScreenFootnote property value. A footnote displayed on the login window and lock screen. Available in iOS 9.3.1 and later.
     * @return string|null
    */
    public function getLockScreenFootnote(): ?string {
        $val = $this->getBackingStore()->get('lockScreenFootnote');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lockScreenFootnote'");
    }

    /**
     * Gets the notificationSettings property value. Notification settings for each bundle id. Applicable to devices in supervised mode only (iOS 9.3 and later). This collection can contain a maximum of 500 elements.
     * @return array<IosNotificationSettings>|null
    */
    public function getNotificationSettings(): ?array {
        $val = $this->getBackingStore()->get('notificationSettings');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, IosNotificationSettings::class);
            /** @var array<IosNotificationSettings>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'notificationSettings'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('assetTagTemplate', $this->getAssetTagTemplate());
        $writer->writeCollectionOfObjectValues('homeScreenDockIcons', $this->getHomeScreenDockIcons());
        $writer->writeCollectionOfObjectValues('homeScreenPages', $this->getHomeScreenPages());
        $writer->writeStringValue('lockScreenFootnote', $this->getLockScreenFootnote());
        $writer->writeCollectionOfObjectValues('notificationSettings', $this->getNotificationSettings());
    }

    /**
     * Sets the assetTagTemplate property value. Asset tag information for the device, displayed on the login window and lock screen.
     * @param string|null $value Value to set for the assetTagTemplate property.
    */
    public function setAssetTagTemplate(?string $value): void {
        $this->getBackingStore()->set('assetTagTemplate', $value);
    }

    /**
     * Sets the homeScreenDockIcons property value. A list of app and folders to appear on the Home Screen Dock. This collection can contain a maximum of 500 elements.
     * @param array<IosHomeScreenItem>|null $value Value to set for the homeScreenDockIcons property.
    */
    public function setHomeScreenDockIcons(?array $value): void {
        $this->getBackingStore()->set('homeScreenDockIcons', $value);
    }

    /**
     * Sets the homeScreenPages property value. A list of pages on the Home Screen. This collection can contain a maximum of 500 elements.
     * @param array<IosHomeScreenPage>|null $value Value to set for the homeScreenPages property.
    */
    public function setHomeScreenPages(?array $value): void {
        $this->getBackingStore()->set('homeScreenPages', $value);
    }

    /**
     * Sets the lockScreenFootnote property value. A footnote displayed on the login window and lock screen. Available in iOS 9.3.1 and later.
     * @param string|null $value Value to set for the lockScreenFootnote property.
    */
    public function setLockScreenFootnote(?string $value): void {
        $this->getBackingStore()->set('lockScreenFootnote', $value);
    }

    /**
     * Sets the notificationSettings property value. Notification settings for each bundle id. Applicable to devices in supervised mode only (iOS 9.3 and later). This collection can contain a maximum of 500 elements.
     * @param array<IosNotificationSettings>|null $value Value to set for the notificationSettings property.
    */
    public function setNotificationSettings(?array $value): void {
        $this->getBackingStore()->set('notificationSettings', $value);
    }

}
