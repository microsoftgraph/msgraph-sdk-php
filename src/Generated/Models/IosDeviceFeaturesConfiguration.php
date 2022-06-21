<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class IosDeviceFeaturesConfiguration extends AppleDeviceFeaturesConfigurationBase implements Parsable 
{
    /**
     * @var string|null $assetTagTemplate Asset tag information for the device, displayed on the login window and lock screen.
    */
    private ?string $assetTagTemplate = null;
    
    /**
     * @var array<IosHomeScreenItem>|null $homeScreenDockIcons A list of app and folders to appear on the Home Screen Dock. This collection can contain a maximum of 500 elements.
    */
    private ?array $homeScreenDockIcons = null;
    
    /**
     * @var array<IosHomeScreenPage>|null $homeScreenPages A list of pages on the Home Screen. This collection can contain a maximum of 500 elements.
    */
    private ?array $homeScreenPages = null;
    
    /**
     * @var string|null $lockScreenFootnote A footnote displayed on the login window and lock screen. Available in iOS 9.3.1 and later.
    */
    private ?string $lockScreenFootnote = null;
    
    /**
     * @var array<IosNotificationSettings>|null $notificationSettings Notification settings for each bundle id. Applicable to devices in supervised mode only (iOS 9.3 and later). This collection can contain a maximum of 500 elements.
    */
    private ?array $notificationSettings = null;
    
    /**
     * Instantiates a new IosDeviceFeaturesConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
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
        return $this->assetTagTemplate;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'assetTagTemplate' => function (ParseNode $n) use ($o) { $o->setAssetTagTemplate($n->getStringValue()); },
            'homeScreenDockIcons' => function (ParseNode $n) use ($o) { $o->setHomeScreenDockIcons($n->getCollectionOfObjectValues(array(IosHomeScreenItem::class, 'createFromDiscriminatorValue'))); },
            'homeScreenPages' => function (ParseNode $n) use ($o) { $o->setHomeScreenPages($n->getCollectionOfObjectValues(array(IosHomeScreenPage::class, 'createFromDiscriminatorValue'))); },
            'lockScreenFootnote' => function (ParseNode $n) use ($o) { $o->setLockScreenFootnote($n->getStringValue()); },
            'notificationSettings' => function (ParseNode $n) use ($o) { $o->setNotificationSettings($n->getCollectionOfObjectValues(array(IosNotificationSettings::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the homeScreenDockIcons property value. A list of app and folders to appear on the Home Screen Dock. This collection can contain a maximum of 500 elements.
     * @return array<IosHomeScreenItem>|null
    */
    public function getHomeScreenDockIcons(): ?array {
        return $this->homeScreenDockIcons;
    }

    /**
     * Gets the homeScreenPages property value. A list of pages on the Home Screen. This collection can contain a maximum of 500 elements.
     * @return array<IosHomeScreenPage>|null
    */
    public function getHomeScreenPages(): ?array {
        return $this->homeScreenPages;
    }

    /**
     * Gets the lockScreenFootnote property value. A footnote displayed on the login window and lock screen. Available in iOS 9.3.1 and later.
     * @return string|null
    */
    public function getLockScreenFootnote(): ?string {
        return $this->lockScreenFootnote;
    }

    /**
     * Gets the notificationSettings property value. Notification settings for each bundle id. Applicable to devices in supervised mode only (iOS 9.3 and later). This collection can contain a maximum of 500 elements.
     * @return array<IosNotificationSettings>|null
    */
    public function getNotificationSettings(): ?array {
        return $this->notificationSettings;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('assetTagTemplate', $this->assetTagTemplate);
        $writer->writeCollectionOfObjectValues('homeScreenDockIcons', $this->homeScreenDockIcons);
        $writer->writeCollectionOfObjectValues('homeScreenPages', $this->homeScreenPages);
        $writer->writeStringValue('lockScreenFootnote', $this->lockScreenFootnote);
        $writer->writeCollectionOfObjectValues('notificationSettings', $this->notificationSettings);
    }

    /**
     * Sets the assetTagTemplate property value. Asset tag information for the device, displayed on the login window and lock screen.
     *  @param string|null $value Value to set for the assetTagTemplate property.
    */
    public function setAssetTagTemplate(?string $value ): void {
        $this->assetTagTemplate = $value;
    }

    /**
     * Sets the homeScreenDockIcons property value. A list of app and folders to appear on the Home Screen Dock. This collection can contain a maximum of 500 elements.
     *  @param array<IosHomeScreenItem>|null $value Value to set for the homeScreenDockIcons property.
    */
    public function setHomeScreenDockIcons(?array $value ): void {
        $this->homeScreenDockIcons = $value;
    }

    /**
     * Sets the homeScreenPages property value. A list of pages on the Home Screen. This collection can contain a maximum of 500 elements.
     *  @param array<IosHomeScreenPage>|null $value Value to set for the homeScreenPages property.
    */
    public function setHomeScreenPages(?array $value ): void {
        $this->homeScreenPages = $value;
    }

    /**
     * Sets the lockScreenFootnote property value. A footnote displayed on the login window and lock screen. Available in iOS 9.3.1 and later.
     *  @param string|null $value Value to set for the lockScreenFootnote property.
    */
    public function setLockScreenFootnote(?string $value ): void {
        $this->lockScreenFootnote = $value;
    }

    /**
     * Sets the notificationSettings property value. Notification settings for each bundle id. Applicable to devices in supervised mode only (iOS 9.3 and later). This collection can contain a maximum of 500 elements.
     *  @param array<IosNotificationSettings>|null $value Value to set for the notificationSettings property.
    */
    public function setNotificationSettings(?array $value ): void {
        $this->notificationSettings = $value;
    }

}
