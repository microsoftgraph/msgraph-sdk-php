<?php

namespace Microsoft\Graph\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class AnalyzedEmailDeliveryDetail implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new AnalyzedEmailDeliveryDetail and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AnalyzedEmailDeliveryDetail
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AnalyzedEmailDeliveryDetail {
        return new AnalyzedEmailDeliveryDetail();
    }

    /**
     * Gets the action property value. The delivery action of the email. The possible values are: unknown, deliveredToJunk, delivered, blocked, replaced, unknownFutureValue.
     * @return DeliveryAction|null
    */
    public function getAction(): ?DeliveryAction {
        $val = $this->getBackingStore()->get('action');
        if (is_null($val) || $val instanceof DeliveryAction) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'action'");
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
            'action' => fn(ParseNode $n) => $o->setAction($n->getEnumValue(DeliveryAction::class)),
            'latestThreats' => fn(ParseNode $n) => $o->setLatestThreats($n->getStringValue()),
            'location' => fn(ParseNode $n) => $o->setLocation($n->getEnumValue(DeliveryLocation::class)),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'originalThreats' => fn(ParseNode $n) => $o->setOriginalThreats($n->getStringValue()),
        ];
    }

    /**
     * Gets the latestThreats property value. Latest known threat on the email.
     * @return string|null
    */
    public function getLatestThreats(): ?string {
        $val = $this->getBackingStore()->get('latestThreats');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'latestThreats'");
    }

    /**
     * Gets the location property value. The delivery location of the email. The possible values are: unknown, inboxfolder, junkFolder, deletedFolder, quarantine, onpremexternal, failed, dropped, others, unknownFutureValue.
     * @return DeliveryLocation|null
    */
    public function getLocation(): ?DeliveryLocation {
        $val = $this->getBackingStore()->get('location');
        if (is_null($val) || $val instanceof DeliveryLocation) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'location'");
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
     * Gets the originalThreats property value. Threats identified at the time of delivery.
     * @return string|null
    */
    public function getOriginalThreats(): ?string {
        $val = $this->getBackingStore()->get('originalThreats');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'originalThreats'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('action', $this->getAction());
        $writer->writeStringValue('latestThreats', $this->getLatestThreats());
        $writer->writeEnumValue('location', $this->getLocation());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('originalThreats', $this->getOriginalThreats());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the action property value. The delivery action of the email. The possible values are: unknown, deliveredToJunk, delivered, blocked, replaced, unknownFutureValue.
     * @param DeliveryAction|null $value Value to set for the action property.
    */
    public function setAction(?DeliveryAction $value): void {
        $this->getBackingStore()->set('action', $value);
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
     * Sets the latestThreats property value. Latest known threat on the email.
     * @param string|null $value Value to set for the latestThreats property.
    */
    public function setLatestThreats(?string $value): void {
        $this->getBackingStore()->set('latestThreats', $value);
    }

    /**
     * Sets the location property value. The delivery location of the email. The possible values are: unknown, inboxfolder, junkFolder, deletedFolder, quarantine, onpremexternal, failed, dropped, others, unknownFutureValue.
     * @param DeliveryLocation|null $value Value to set for the location property.
    */
    public function setLocation(?DeliveryLocation $value): void {
        $this->getBackingStore()->set('location', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the originalThreats property value. Threats identified at the time of delivery.
     * @param string|null $value Value to set for the originalThreats property.
    */
    public function setOriginalThreats(?string $value): void {
        $this->getBackingStore()->set('originalThreats', $value);
    }

}
