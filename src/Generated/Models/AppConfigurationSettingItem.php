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
 * Contains properties for App configuration setting item.
*/
class AppConfigurationSettingItem implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new appConfigurationSettingItem and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AppConfigurationSettingItem
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AppConfigurationSettingItem {
        return new AppConfigurationSettingItem();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): ?array {
        return $this->getBackingStore()->get('additionalData');
    }

    /**
     * Gets the appConfigKey property value. app configuration key.
     * @return string|null
    */
    public function getAppConfigKey(): ?string {
        return $this->getBackingStore()->get('appConfigKey');
    }

    /**
     * Gets the appConfigKeyType property value. App configuration key types.
     * @return MdmAppConfigKeyType|null
    */
    public function getAppConfigKeyType(): ?MdmAppConfigKeyType {
        return $this->getBackingStore()->get('appConfigKeyType');
    }

    /**
     * Gets the appConfigKeyValue property value. app configuration key value.
     * @return string|null
    */
    public function getAppConfigKeyValue(): ?string {
        return $this->getBackingStore()->get('appConfigKeyValue');
    }

    /**
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'appConfigKey' => fn(ParseNode $n) => $o->setAppConfigKey($n->getStringValue()),
            'appConfigKeyType' => fn(ParseNode $n) => $o->setAppConfigKeyType($n->getEnumValue(MdmAppConfigKeyType::class)),
            'appConfigKeyValue' => fn(ParseNode $n) => $o->setAppConfigKeyValue($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ];
    }

    /**
     * Gets the @odata.type property value. 
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('appConfigKey', $this->getAppConfigKey());
        $writer->writeEnumValue('appConfigKeyType', $this->getAppConfigKeyType());
        $writer->writeStringValue('appConfigKeyValue', $this->getAppConfigKeyValue());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
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
     * Sets the appConfigKey property value. app configuration key.
     * @param string|null $value Value to set for the appConfigKey property.
    */
    public function setAppConfigKey(?string $value): void {
        $this->getBackingStore()->set('appConfigKey', $value);
    }

    /**
     * Sets the appConfigKeyType property value. App configuration key types.
     * @param MdmAppConfigKeyType|null $value Value to set for the appConfigKeyType property.
    */
    public function setAppConfigKeyType(?MdmAppConfigKeyType $value): void {
        $this->getBackingStore()->set('appConfigKeyType', $value);
    }

    /**
     * Sets the appConfigKeyValue property value. app configuration key value.
     * @param string|null $value Value to set for the appConfigKeyValue property.
    */
    public function setAppConfigKeyValue(?string $value): void {
        $this->getBackingStore()->set('appConfigKeyValue', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the @odata.type property value. 
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
