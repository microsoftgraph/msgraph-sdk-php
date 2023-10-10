<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class ProvisioningErrorInfo implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new provisioningErrorInfo and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ProvisioningErrorInfo
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ProvisioningErrorInfo {
        return new ProvisioningErrorInfo();
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
     * Gets the additionalDetails property value. Additional details if there's error.
     * @return string|null
    */
    public function getAdditionalDetails(): ?string {
        $val = $this->getBackingStore()->get('additionalDetails');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'additionalDetails'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the errorCategory property value. Categorizes the error code. Possible values are failure, nonServiceFailure, success, unknownFutureValue
     * @return ProvisioningStatusErrorCategory|null
    */
    public function getErrorCategory(): ?ProvisioningStatusErrorCategory {
        $val = $this->getBackingStore()->get('errorCategory');
        if (is_null($val) || $val instanceof ProvisioningStatusErrorCategory) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'errorCategory'");
    }

    /**
     * Gets the errorCode property value. Unique error code if any occurred. Learn more
     * @return string|null
    */
    public function getErrorCode(): ?string {
        $val = $this->getBackingStore()->get('errorCode');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'errorCode'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'additionalDetails' => fn(ParseNode $n) => $o->setAdditionalDetails($n->getStringValue()),
            'errorCategory' => fn(ParseNode $n) => $o->setErrorCategory($n->getEnumValue(ProvisioningStatusErrorCategory::class)),
            'errorCode' => fn(ParseNode $n) => $o->setErrorCode($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'reason' => fn(ParseNode $n) => $o->setReason($n->getStringValue()),
            'recommendedAction' => fn(ParseNode $n) => $o->setRecommendedAction($n->getStringValue()),
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
     * Gets the reason property value. Summarizes the status and describes why the status happened.
     * @return string|null
    */
    public function getReason(): ?string {
        $val = $this->getBackingStore()->get('reason');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'reason'");
    }

    /**
     * Gets the recommendedAction property value. Provides the resolution for the corresponding error.
     * @return string|null
    */
    public function getRecommendedAction(): ?string {
        $val = $this->getBackingStore()->get('recommendedAction');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'recommendedAction'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('additionalDetails', $this->getAdditionalDetails());
        $writer->writeEnumValue('errorCategory', $this->getErrorCategory());
        $writer->writeStringValue('errorCode', $this->getErrorCode());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('reason', $this->getReason());
        $writer->writeStringValue('recommendedAction', $this->getRecommendedAction());
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
     * Sets the additionalDetails property value. Additional details if there's error.
     * @param string|null $value Value to set for the additionalDetails property.
    */
    public function setAdditionalDetails(?string $value): void {
        $this->getBackingStore()->set('additionalDetails', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the errorCategory property value. Categorizes the error code. Possible values are failure, nonServiceFailure, success, unknownFutureValue
     * @param ProvisioningStatusErrorCategory|null $value Value to set for the errorCategory property.
    */
    public function setErrorCategory(?ProvisioningStatusErrorCategory $value): void {
        $this->getBackingStore()->set('errorCategory', $value);
    }

    /**
     * Sets the errorCode property value. Unique error code if any occurred. Learn more
     * @param string|null $value Value to set for the errorCode property.
    */
    public function setErrorCode(?string $value): void {
        $this->getBackingStore()->set('errorCode', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the reason property value. Summarizes the status and describes why the status happened.
     * @param string|null $value Value to set for the reason property.
    */
    public function setReason(?string $value): void {
        $this->getBackingStore()->set('reason', $value);
    }

    /**
     * Sets the recommendedAction property value. Provides the resolution for the corresponding error.
     * @param string|null $value Value to set for the recommendedAction property.
    */
    public function setRecommendedAction(?string $value): void {
        $this->getBackingStore()->set('recommendedAction', $value);
    }

}
