<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

/**
 * An item describing notification setting.
*/
class IosNotificationSettings implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new IosNotificationSettings and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return IosNotificationSettings
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): IosNotificationSettings {
        return new IosNotificationSettings();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        $val = $this->getBackingStore()->get('additionalData');
        if (is_null($val) || is_array($val)) {
            /** @var array<string, mixed>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'additionalData'");
    }

    /**
     * Gets the alertType property value. Notification Settings Alert Type.
     * @return IosNotificationAlertType|null
    */
    public function getAlertType(): ?IosNotificationAlertType {
        $val = $this->getBackingStore()->get('alertType');
        if (is_null($val) || $val instanceof IosNotificationAlertType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'alertType'");
    }

    /**
     * Gets the appName property value. Application name to be associated with the bundleID.
     * @return string|null
    */
    public function getAppName(): ?string {
        $val = $this->getBackingStore()->get('appName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'appName'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the badgesEnabled property value. Indicates whether badges are allowed for this app.
     * @return bool|null
    */
    public function getBadgesEnabled(): ?bool {
        $val = $this->getBackingStore()->get('badgesEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'badgesEnabled'");
    }

    /**
     * Gets the bundleID property value. Bundle id of app to which to apply these notification settings.
     * @return string|null
    */
    public function getBundleID(): ?string {
        $val = $this->getBackingStore()->get('bundleID');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'bundleID'");
    }

    /**
     * Gets the enabled property value. Indicates whether notifications are allowed for this app.
     * @return bool|null
    */
    public function getEnabled(): ?bool {
        $val = $this->getBackingStore()->get('enabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'enabled'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'alertType' => fn(ParseNode $n) => $o->setAlertType($n->getEnumValue(IosNotificationAlertType::class)),
            'appName' => fn(ParseNode $n) => $o->setAppName($n->getStringValue()),
            'badgesEnabled' => fn(ParseNode $n) => $o->setBadgesEnabled($n->getBooleanValue()),
            'bundleID' => fn(ParseNode $n) => $o->setBundleID($n->getStringValue()),
            'enabled' => fn(ParseNode $n) => $o->setEnabled($n->getBooleanValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'publisher' => fn(ParseNode $n) => $o->setPublisher($n->getStringValue()),
            'showInNotificationCenter' => fn(ParseNode $n) => $o->setShowInNotificationCenter($n->getBooleanValue()),
            'showOnLockScreen' => fn(ParseNode $n) => $o->setShowOnLockScreen($n->getBooleanValue()),
            'soundsEnabled' => fn(ParseNode $n) => $o->setSoundsEnabled($n->getBooleanValue()),
        ];
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        $val = $this->getBackingStore()->get('odataType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'odataType'");
    }

    /**
     * Gets the publisher property value. Publisher to be associated with the bundleID.
     * @return string|null
    */
    public function getPublisher(): ?string {
        $val = $this->getBackingStore()->get('publisher');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'publisher'");
    }

    /**
     * Gets the showInNotificationCenter property value. Indicates whether notifications can be shown in notification center.
     * @return bool|null
    */
    public function getShowInNotificationCenter(): ?bool {
        $val = $this->getBackingStore()->get('showInNotificationCenter');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'showInNotificationCenter'");
    }

    /**
     * Gets the showOnLockScreen property value. Indicates whether notifications can be shown on the lock screen.
     * @return bool|null
    */
    public function getShowOnLockScreen(): ?bool {
        $val = $this->getBackingStore()->get('showOnLockScreen');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'showOnLockScreen'");
    }

    /**
     * Gets the soundsEnabled property value. Indicates whether sounds are allowed for this app.
     * @return bool|null
    */
    public function getSoundsEnabled(): ?bool {
        $val = $this->getBackingStore()->get('soundsEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'soundsEnabled'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('alertType', $this->getAlertType());
        $writer->writeStringValue('appName', $this->getAppName());
        $writer->writeBooleanValue('badgesEnabled', $this->getBadgesEnabled());
        $writer->writeStringValue('bundleID', $this->getBundleID());
        $writer->writeBooleanValue('enabled', $this->getEnabled());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('publisher', $this->getPublisher());
        $writer->writeBooleanValue('showInNotificationCenter', $this->getShowInNotificationCenter());
        $writer->writeBooleanValue('showOnLockScreen', $this->getShowOnLockScreen());
        $writer->writeBooleanValue('soundsEnabled', $this->getSoundsEnabled());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the alertType property value. Notification Settings Alert Type.
     * @param IosNotificationAlertType|null $value Value to set for the alertType property.
    */
    public function setAlertType(?IosNotificationAlertType $value): void {
        $this->getBackingStore()->set('alertType', $value);
    }

    /**
     * Sets the appName property value. Application name to be associated with the bundleID.
     * @param string|null $value Value to set for the appName property.
    */
    public function setAppName(?string $value): void {
        $this->getBackingStore()->set('appName', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the badgesEnabled property value. Indicates whether badges are allowed for this app.
     * @param bool|null $value Value to set for the badgesEnabled property.
    */
    public function setBadgesEnabled(?bool $value): void {
        $this->getBackingStore()->set('badgesEnabled', $value);
    }

    /**
     * Sets the bundleID property value. Bundle id of app to which to apply these notification settings.
     * @param string|null $value Value to set for the bundleID property.
    */
    public function setBundleID(?string $value): void {
        $this->getBackingStore()->set('bundleID', $value);
    }

    /**
     * Sets the enabled property value. Indicates whether notifications are allowed for this app.
     * @param bool|null $value Value to set for the enabled property.
    */
    public function setEnabled(?bool $value): void {
        $this->getBackingStore()->set('enabled', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the publisher property value. Publisher to be associated with the bundleID.
     * @param string|null $value Value to set for the publisher property.
    */
    public function setPublisher(?string $value): void {
        $this->getBackingStore()->set('publisher', $value);
    }

    /**
     * Sets the showInNotificationCenter property value. Indicates whether notifications can be shown in notification center.
     * @param bool|null $value Value to set for the showInNotificationCenter property.
    */
    public function setShowInNotificationCenter(?bool $value): void {
        $this->getBackingStore()->set('showInNotificationCenter', $value);
    }

    /**
     * Sets the showOnLockScreen property value. Indicates whether notifications can be shown on the lock screen.
     * @param bool|null $value Value to set for the showOnLockScreen property.
    */
    public function setShowOnLockScreen(?bool $value): void {
        $this->getBackingStore()->set('showOnLockScreen', $value);
    }

    /**
     * Sets the soundsEnabled property value. Indicates whether sounds are allowed for this app.
     * @param bool|null $value Value to set for the soundsEnabled property.
    */
    public function setSoundsEnabled(?bool $value): void {
        $this->getBackingStore()->set('soundsEnabled', $value);
    }

}
