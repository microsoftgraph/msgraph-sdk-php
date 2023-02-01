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
 * Device Configuration Setting State for a given device.
*/
class DeviceConfigurationSettingState implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new deviceConfigurationSettingState and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceConfigurationSettingState
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceConfigurationSettingState {
        return new DeviceConfigurationSettingState();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): ?array {
        return $this->getBackingStore()->get('additionalData');
    }

    /**
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the currentValue property value. Current value of setting on device
     * @return string|null
    */
    public function getCurrentValue(): ?string {
        return $this->getBackingStore()->get('currentValue');
    }

    /**
     * Gets the errorCode property value. Error code for the setting
     * @return int|null
    */
    public function getErrorCode(): ?int {
        return $this->getBackingStore()->get('errorCode');
    }

    /**
     * Gets the errorDescription property value. Error description
     * @return string|null
    */
    public function getErrorDescription(): ?string {
        return $this->getBackingStore()->get('errorDescription');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'currentValue' => fn(ParseNode $n) => $o->setCurrentValue($n->getStringValue()),
            'errorCode' => fn(ParseNode $n) => $o->setErrorCode($n->getIntegerValue()),
            'errorDescription' => fn(ParseNode $n) => $o->setErrorDescription($n->getStringValue()),
            'instanceDisplayName' => fn(ParseNode $n) => $o->setInstanceDisplayName($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'setting' => fn(ParseNode $n) => $o->setSetting($n->getStringValue()),
            'settingName' => fn(ParseNode $n) => $o->setSettingName($n->getStringValue()),
            'sources' => fn(ParseNode $n) => $o->setSources($n->getCollectionOfObjectValues([SettingSource::class, 'createFromDiscriminatorValue'])),
            'state' => fn(ParseNode $n) => $o->setState($n->getEnumValue(ComplianceStatus::class)),
            'userEmail' => fn(ParseNode $n) => $o->setUserEmail($n->getStringValue()),
            'userId' => fn(ParseNode $n) => $o->setUserId($n->getStringValue()),
            'userName' => fn(ParseNode $n) => $o->setUserName($n->getStringValue()),
            'userPrincipalName' => fn(ParseNode $n) => $o->setUserPrincipalName($n->getStringValue()),
        ];
    }

    /**
     * Gets the instanceDisplayName property value. Name of setting instance that is being reported.
     * @return string|null
    */
    public function getInstanceDisplayName(): ?string {
        return $this->getBackingStore()->get('instanceDisplayName');
    }

    /**
     * Gets the @odata.type property value. 
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Gets the setting property value. The setting that is being reported
     * @return string|null
    */
    public function getSetting(): ?string {
        return $this->getBackingStore()->get('setting');
    }

    /**
     * Gets the settingName property value. Localized/user friendly setting name that is being reported
     * @return string|null
    */
    public function getSettingName(): ?string {
        return $this->getBackingStore()->get('settingName');
    }

    /**
     * Gets the sources property value. Contributing policies
     * @return array<SettingSource>|null
    */
    public function getSources(): ?array {
        return $this->getBackingStore()->get('sources');
    }

    /**
     * Gets the state property value. 
     * @return ComplianceStatus|null
    */
    public function getState(): ?ComplianceStatus {
        return $this->getBackingStore()->get('state');
    }

    /**
     * Gets the userEmail property value. UserEmail
     * @return string|null
    */
    public function getUserEmail(): ?string {
        return $this->getBackingStore()->get('userEmail');
    }

    /**
     * Gets the userId property value. UserId
     * @return string|null
    */
    public function getUserId(): ?string {
        return $this->getBackingStore()->get('userId');
    }

    /**
     * Gets the userName property value. UserName
     * @return string|null
    */
    public function getUserName(): ?string {
        return $this->getBackingStore()->get('userName');
    }

    /**
     * Gets the userPrincipalName property value. UserPrincipalName.
     * @return string|null
    */
    public function getUserPrincipalName(): ?string {
        return $this->getBackingStore()->get('userPrincipalName');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('currentValue', $this->getCurrentValue());
        $writer->writeIntegerValue('errorCode', $this->getErrorCode());
        $writer->writeStringValue('errorDescription', $this->getErrorDescription());
        $writer->writeStringValue('instanceDisplayName', $this->getInstanceDisplayName());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('setting', $this->getSetting());
        $writer->writeStringValue('settingName', $this->getSettingName());
        $writer->writeCollectionOfObjectValues('sources', $this->getSources());
        $writer->writeEnumValue('state', $this->getState());
        $writer->writeStringValue('userEmail', $this->getUserEmail());
        $writer->writeStringValue('userId', $this->getUserId());
        $writer->writeStringValue('userName', $this->getUserName());
        $writer->writeStringValue('userPrincipalName', $this->getUserPrincipalName());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the currentValue property value. Current value of setting on device
     * @param string|null $value Value to set for the currentValue property.
    */
    public function setCurrentValue(?string $value): void {
        $this->getBackingStore()->set('currentValue', $value);
    }

    /**
     * Sets the errorCode property value. Error code for the setting
     * @param int|null $value Value to set for the errorCode property.
    */
    public function setErrorCode(?int $value): void {
        $this->getBackingStore()->set('errorCode', $value);
    }

    /**
     * Sets the errorDescription property value. Error description
     * @param string|null $value Value to set for the errorDescription property.
    */
    public function setErrorDescription(?string $value): void {
        $this->getBackingStore()->set('errorDescription', $value);
    }

    /**
     * Sets the instanceDisplayName property value. Name of setting instance that is being reported.
     * @param string|null $value Value to set for the instanceDisplayName property.
    */
    public function setInstanceDisplayName(?string $value): void {
        $this->getBackingStore()->set('instanceDisplayName', $value);
    }

    /**
     * Sets the @odata.type property value. 
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the setting property value. The setting that is being reported
     * @param string|null $value Value to set for the setting property.
    */
    public function setSetting(?string $value): void {
        $this->getBackingStore()->set('setting', $value);
    }

    /**
     * Sets the settingName property value. Localized/user friendly setting name that is being reported
     * @param string|null $value Value to set for the settingName property.
    */
    public function setSettingName(?string $value): void {
        $this->getBackingStore()->set('settingName', $value);
    }

    /**
     * Sets the sources property value. Contributing policies
     * @param array<SettingSource>|null $value Value to set for the sources property.
    */
    public function setSources(?array $value): void {
        $this->getBackingStore()->set('sources', $value);
    }

    /**
     * Sets the state property value. 
     * @param ComplianceStatus|null $value Value to set for the state property.
    */
    public function setState(?ComplianceStatus $value): void {
        $this->getBackingStore()->set('state', $value);
    }

    /**
     * Sets the userEmail property value. UserEmail
     * @param string|null $value Value to set for the userEmail property.
    */
    public function setUserEmail(?string $value): void {
        $this->getBackingStore()->set('userEmail', $value);
    }

    /**
     * Sets the userId property value. UserId
     * @param string|null $value Value to set for the userId property.
    */
    public function setUserId(?string $value): void {
        $this->getBackingStore()->set('userId', $value);
    }

    /**
     * Sets the userName property value. UserName
     * @param string|null $value Value to set for the userName property.
    */
    public function setUserName(?string $value): void {
        $this->getBackingStore()->set('userName', $value);
    }

    /**
     * Sets the userPrincipalName property value. UserPrincipalName.
     * @param string|null $value Value to set for the userPrincipalName property.
    */
    public function setUserPrincipalName(?string $value): void {
        $this->getBackingStore()->set('userPrincipalName', $value);
    }

}
