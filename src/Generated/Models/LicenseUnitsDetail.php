<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class LicenseUnitsDetail implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new licenseUnitsDetail and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return LicenseUnitsDetail
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): LicenseUnitsDetail {
        return new LicenseUnitsDetail();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
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
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the enabled property value. The number of units that are enabled for the active subscription of the service SKU.
     * @return int|null
    */
    public function getEnabled(): ?int {
        $val = $this->getBackingStore()->get('enabled');
        if (is_null($val) || is_int($val)) {
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
            'enabled' => fn(ParseNode $n) => $o->setEnabled($n->getIntegerValue()),
            'lockedOut' => fn(ParseNode $n) => $o->setLockedOut($n->getIntegerValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'suspended' => fn(ParseNode $n) => $o->setSuspended($n->getIntegerValue()),
            'warning' => fn(ParseNode $n) => $o->setWarning($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the lockedOut property value. The lockedOut property
     * @return int|null
    */
    public function getLockedOut(): ?int {
        $val = $this->getBackingStore()->get('lockedOut');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lockedOut'");
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
     * Gets the suspended property value. The number of units that are suspended because the subscription of the service SKU has been cancelled. The units cannot be assigned but can still be reactivated before they are deleted.
     * @return int|null
    */
    public function getSuspended(): ?int {
        $val = $this->getBackingStore()->get('suspended');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'suspended'");
    }

    /**
     * Gets the warning property value. The number of units that are in warning status. When the subscription of the service SKU has expired, the customer has a grace period to renew their subscription before it is cancelled (moved to a suspended state).
     * @return int|null
    */
    public function getWarning(): ?int {
        $val = $this->getBackingStore()->get('warning');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'warning'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('enabled', $this->getEnabled());
        $writer->writeIntegerValue('lockedOut', $this->getLockedOut());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeIntegerValue('suspended', $this->getSuspended());
        $writer->writeIntegerValue('warning', $this->getWarning());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the additionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the backingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the enabled property value. The number of units that are enabled for the active subscription of the service SKU.
     * @param int|null $value Value to set for the enabled property.
    */
    public function setEnabled(?int $value): void {
        $this->getBackingStore()->set('enabled', $value);
    }

    /**
     * Sets the lockedOut property value. The lockedOut property
     * @param int|null $value Value to set for the lockedOut property.
    */
    public function setLockedOut(?int $value): void {
        $this->getBackingStore()->set('lockedOut', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the suspended property value. The number of units that are suspended because the subscription of the service SKU has been cancelled. The units cannot be assigned but can still be reactivated before they are deleted.
     * @param int|null $value Value to set for the suspended property.
    */
    public function setSuspended(?int $value): void {
        $this->getBackingStore()->set('suspended', $value);
    }

    /**
     * Sets the warning property value. The number of units that are in warning status. When the subscription of the service SKU has expired, the customer has a grace period to renew their subscription before it is cancelled (moved to a suspended state).
     * @param int|null $value Value to set for the warning property.
    */
    public function setWarning(?int $value): void {
        $this->getBackingStore()->set('warning', $value);
    }

}
