<?php

namespace Microsoft\Graph\Generated\DeviceManagement\ManagedDevices\Item\Wipe;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class WipePostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new wipePostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WipePostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WipePostRequestBody {
        return new WipePostRequestBody();
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
            'keepEnrollmentData' => fn(ParseNode $n) => $o->setKeepEnrollmentData($n->getBooleanValue()),
            'keepUserData' => fn(ParseNode $n) => $o->setKeepUserData($n->getBooleanValue()),
            'macOsUnlockCode' => fn(ParseNode $n) => $o->setMacOsUnlockCode($n->getStringValue()),
            'persistEsimDataPlan' => fn(ParseNode $n) => $o->setPersistEsimDataPlan($n->getBooleanValue()),
        ];
    }

    /**
     * Gets the keepEnrollmentData property value. The keepEnrollmentData property
     * @return bool|null
    */
    public function getKeepEnrollmentData(): ?bool {
        $val = $this->getBackingStore()->get('keepEnrollmentData');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'keepEnrollmentData'");
    }

    /**
     * Gets the keepUserData property value. The keepUserData property
     * @return bool|null
    */
    public function getKeepUserData(): ?bool {
        $val = $this->getBackingStore()->get('keepUserData');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'keepUserData'");
    }

    /**
     * Gets the macOsUnlockCode property value. The macOsUnlockCode property
     * @return string|null
    */
    public function getMacOsUnlockCode(): ?string {
        $val = $this->getBackingStore()->get('macOsUnlockCode');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'macOsUnlockCode'");
    }

    /**
     * Gets the persistEsimDataPlan property value. The persistEsimDataPlan property
     * @return bool|null
    */
    public function getPersistEsimDataPlan(): ?bool {
        $val = $this->getBackingStore()->get('persistEsimDataPlan');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'persistEsimDataPlan'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('keepEnrollmentData', $this->getKeepEnrollmentData());
        $writer->writeBooleanValue('keepUserData', $this->getKeepUserData());
        $writer->writeStringValue('macOsUnlockCode', $this->getMacOsUnlockCode());
        $writer->writeBooleanValue('persistEsimDataPlan', $this->getPersistEsimDataPlan());
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
     * Sets the keepEnrollmentData property value. The keepEnrollmentData property
     * @param bool|null $value Value to set for the keepEnrollmentData property.
    */
    public function setKeepEnrollmentData(?bool $value): void {
        $this->getBackingStore()->set('keepEnrollmentData', $value);
    }

    /**
     * Sets the keepUserData property value. The keepUserData property
     * @param bool|null $value Value to set for the keepUserData property.
    */
    public function setKeepUserData(?bool $value): void {
        $this->getBackingStore()->set('keepUserData', $value);
    }

    /**
     * Sets the macOsUnlockCode property value. The macOsUnlockCode property
     * @param string|null $value Value to set for the macOsUnlockCode property.
    */
    public function setMacOsUnlockCode(?string $value): void {
        $this->getBackingStore()->set('macOsUnlockCode', $value);
    }

    /**
     * Sets the persistEsimDataPlan property value. The persistEsimDataPlan property
     * @param bool|null $value Value to set for the persistEsimDataPlan property.
    */
    public function setPersistEsimDataPlan(?bool $value): void {
        $this->getBackingStore()->set('persistEsimDataPlan', $value);
    }

}
