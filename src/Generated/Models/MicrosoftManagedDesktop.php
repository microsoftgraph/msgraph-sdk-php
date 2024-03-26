<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class MicrosoftManagedDesktop implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new MicrosoftManagedDesktop and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MicrosoftManagedDesktop
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MicrosoftManagedDesktop {
        return new MicrosoftManagedDesktop();
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
            'managedType' => fn(ParseNode $n) => $o->setManagedType($n->getEnumValue(MicrosoftManagedDesktopType::class)),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'profile' => fn(ParseNode $n) => $o->setProfile($n->getStringValue()),
        ];
    }

    /**
     * Gets the managedType property value. Indicates the provisioning policy associated with Microsoft Managed Desktop settings. Possible values are: notManaged, premiumManaged, standardManaged, starterManaged, unknownFutureValue. The default is notManaged.
     * @return MicrosoftManagedDesktopType|null
    */
    public function getManagedType(): ?MicrosoftManagedDesktopType {
        $val = $this->getBackingStore()->get('managedType');
        if (is_null($val) || $val instanceof MicrosoftManagedDesktopType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'managedType'");
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
     * Gets the profile property value. The name of the Microsoft Managed Desktop profile that the Windows 365 Cloud PC is associated with.
     * @return string|null
    */
    public function getProfile(): ?string {
        $val = $this->getBackingStore()->get('profile');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'profile'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('managedType', $this->getManagedType());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('profile', $this->getProfile());
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
     * Sets the managedType property value. Indicates the provisioning policy associated with Microsoft Managed Desktop settings. Possible values are: notManaged, premiumManaged, standardManaged, starterManaged, unknownFutureValue. The default is notManaged.
     * @param MicrosoftManagedDesktopType|null $value Value to set for the managedType property.
    */
    public function setManagedType(?MicrosoftManagedDesktopType $value): void {
        $this->getBackingStore()->set('managedType', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the profile property value. The name of the Microsoft Managed Desktop profile that the Windows 365 Cloud PC is associated with.
     * @param string|null $value Value to set for the profile property.
    */
    public function setProfile(?string $value): void {
        $this->getBackingStore()->set('profile', $value);
    }

}
