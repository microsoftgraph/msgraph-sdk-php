<?php

namespace Microsoft\\Graph\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

/**
 * The Windows Autopilot Deployment Profile settings used by the device for the out-of-box experience. Supports: $select, $top, $skip. $Search, $orderBy and $filter are not supported.
*/
class OutOfBoxExperienceSetting implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new OutOfBoxExperienceSetting and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OutOfBoxExperienceSetting
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): OutOfBoxExperienceSetting {
        return new OutOfBoxExperienceSetting();
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
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the deviceUsageType property value. The deviceUsageType property
     * @return WindowsDeviceUsageType|null
    */
    public function getDeviceUsageType(): ?WindowsDeviceUsageType {
        $val = $this->getBackingStore()->get('deviceUsageType');
        if (is_null($val) || $val instanceof WindowsDeviceUsageType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceUsageType'");
    }

    /**
     * Gets the escapeLinkHidden property value. When TRUE, the link that allows user to start over with a different account on company sign-in is hidden. When false, the link that allows user to start over with a different account on company sign-in is available. Default value is FALSE.
     * @return bool|null
    */
    public function getEscapeLinkHidden(): ?bool {
        $val = $this->getBackingStore()->get('escapeLinkHidden');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'escapeLinkHidden'");
    }

    /**
     * Gets the eulaHidden property value. When TRUE, EULA is hidden to the end user during OOBE. When FALSE, EULA is shown to the end user during OOBE. Default value is FALSE.
     * @return bool|null
    */
    public function getEulaHidden(): ?bool {
        $val = $this->getBackingStore()->get('eulaHidden');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'eulaHidden'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'deviceUsageType' => fn(ParseNode $n) => $o->setDeviceUsageType($n->getEnumValue(WindowsDeviceUsageType::class)),
            'escapeLinkHidden' => fn(ParseNode $n) => $o->setEscapeLinkHidden($n->getBooleanValue()),
            'eulaHidden' => fn(ParseNode $n) => $o->setEulaHidden($n->getBooleanValue()),
            'keyboardSelectionPageSkipped' => fn(ParseNode $n) => $o->setKeyboardSelectionPageSkipped($n->getBooleanValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'privacySettingsHidden' => fn(ParseNode $n) => $o->setPrivacySettingsHidden($n->getBooleanValue()),
            'userType' => fn(ParseNode $n) => $o->setUserType($n->getEnumValue(WindowsUserType::class)),
        ];
    }

    /**
     * Gets the keyboardSelectionPageSkipped property value. When TRUE, the keyboard selection page is hidden to the end user during OOBE if Language and Region are set. When FALSE, the keyboard selection page is skipped during OOBE.
     * @return bool|null
    */
    public function getKeyboardSelectionPageSkipped(): ?bool {
        $val = $this->getBackingStore()->get('keyboardSelectionPageSkipped');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'keyboardSelectionPageSkipped'");
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
     * Gets the privacySettingsHidden property value. When TRUE, privacy settings is hidden to the end user during OOBE. When FALSE, privacy settings is shown to the end user during OOBE. Default value is FALSE.
     * @return bool|null
    */
    public function getPrivacySettingsHidden(): ?bool {
        $val = $this->getBackingStore()->get('privacySettingsHidden');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'privacySettingsHidden'");
    }

    /**
     * Gets the userType property value. The userType property
     * @return WindowsUserType|null
    */
    public function getUserType(): ?WindowsUserType {
        $val = $this->getBackingStore()->get('userType');
        if (is_null($val) || $val instanceof WindowsUserType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userType'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('deviceUsageType', $this->getDeviceUsageType());
        $writer->writeBooleanValue('escapeLinkHidden', $this->getEscapeLinkHidden());
        $writer->writeBooleanValue('eulaHidden', $this->getEulaHidden());
        $writer->writeBooleanValue('keyboardSelectionPageSkipped', $this->getKeyboardSelectionPageSkipped());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeBooleanValue('privacySettingsHidden', $this->getPrivacySettingsHidden());
        $writer->writeEnumValue('userType', $this->getUserType());
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
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the deviceUsageType property value. The deviceUsageType property
     * @param WindowsDeviceUsageType|null $value Value to set for the deviceUsageType property.
    */
    public function setDeviceUsageType(?WindowsDeviceUsageType $value): void {
        $this->getBackingStore()->set('deviceUsageType', $value);
    }

    /**
     * Sets the escapeLinkHidden property value. When TRUE, the link that allows user to start over with a different account on company sign-in is hidden. When false, the link that allows user to start over with a different account on company sign-in is available. Default value is FALSE.
     * @param bool|null $value Value to set for the escapeLinkHidden property.
    */
    public function setEscapeLinkHidden(?bool $value): void {
        $this->getBackingStore()->set('escapeLinkHidden', $value);
    }

    /**
     * Sets the eulaHidden property value. When TRUE, EULA is hidden to the end user during OOBE. When FALSE, EULA is shown to the end user during OOBE. Default value is FALSE.
     * @param bool|null $value Value to set for the eulaHidden property.
    */
    public function setEulaHidden(?bool $value): void {
        $this->getBackingStore()->set('eulaHidden', $value);
    }

    /**
     * Sets the keyboardSelectionPageSkipped property value. When TRUE, the keyboard selection page is hidden to the end user during OOBE if Language and Region are set. When FALSE, the keyboard selection page is skipped during OOBE.
     * @param bool|null $value Value to set for the keyboardSelectionPageSkipped property.
    */
    public function setKeyboardSelectionPageSkipped(?bool $value): void {
        $this->getBackingStore()->set('keyboardSelectionPageSkipped', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the privacySettingsHidden property value. When TRUE, privacy settings is hidden to the end user during OOBE. When FALSE, privacy settings is shown to the end user during OOBE. Default value is FALSE.
     * @param bool|null $value Value to set for the privacySettingsHidden property.
    */
    public function setPrivacySettingsHidden(?bool $value): void {
        $this->getBackingStore()->set('privacySettingsHidden', $value);
    }

    /**
     * Sets the userType property value. The userType property
     * @param WindowsUserType|null $value Value to set for the userType property.
    */
    public function setUserType(?WindowsUserType $value): void {
        $this->getBackingStore()->set('userType', $value);
    }

}
