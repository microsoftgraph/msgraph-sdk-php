<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class AppsInstallationOptionsForMac implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new AppsInstallationOptionsForMac and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AppsInstallationOptionsForMac
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AppsInstallationOptionsForMac {
        return new AppsInstallationOptionsForMac();
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
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'isMicrosoft365AppsEnabled' => fn(ParseNode $n) => $o->setIsMicrosoft365AppsEnabled($n->getBooleanValue()),
            'isSkypeForBusinessEnabled' => fn(ParseNode $n) => $o->setIsSkypeForBusinessEnabled($n->getBooleanValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ];
    }

    /**
     * Gets the isMicrosoft365AppsEnabled property value. Specifies whether users can install Microsoft 365 apps on their MAC devices. The default value is true.
     * @return bool|null
    */
    public function getIsMicrosoft365AppsEnabled(): ?bool {
        $val = $this->getBackingStore()->get('isMicrosoft365AppsEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isMicrosoft365AppsEnabled'");
    }

    /**
     * Gets the isSkypeForBusinessEnabled property value. Specifies whether users can install Skype for Business on their MAC devices running OS X El Capitan 10.11 or later. The default value is true.
     * @return bool|null
    */
    public function getIsSkypeForBusinessEnabled(): ?bool {
        $val = $this->getBackingStore()->get('isSkypeForBusinessEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isSkypeForBusinessEnabled'");
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
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('isMicrosoft365AppsEnabled', $this->getIsMicrosoft365AppsEnabled());
        $writer->writeBooleanValue('isSkypeForBusinessEnabled', $this->getIsSkypeForBusinessEnabled());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
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
     * Sets the isMicrosoft365AppsEnabled property value. Specifies whether users can install Microsoft 365 apps on their MAC devices. The default value is true.
     * @param bool|null $value Value to set for the isMicrosoft365AppsEnabled property.
    */
    public function setIsMicrosoft365AppsEnabled(?bool $value): void {
        $this->getBackingStore()->set('isMicrosoft365AppsEnabled', $value);
    }

    /**
     * Sets the isSkypeForBusinessEnabled property value. Specifies whether users can install Skype for Business on their MAC devices running OS X El Capitan 10.11 or later. The default value is true.
     * @param bool|null $value Value to set for the isSkypeForBusinessEnabled property.
    */
    public function setIsSkypeForBusinessEnabled(?bool $value): void {
        $this->getBackingStore()->set('isSkypeForBusinessEnabled', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
