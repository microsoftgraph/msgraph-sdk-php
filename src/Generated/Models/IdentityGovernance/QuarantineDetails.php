<?php

namespace Microsoft\Graph\Generated\Models\IdentityGovernance;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class QuarantineDetails implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new QuarantineDetails and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return QuarantineDetails
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): QuarantineDetails {
        return new QuarantineDetails();
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
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'quarantinedDateTime' => fn(ParseNode $n) => $o->setQuarantinedDateTime($n->getDateTimeValue()),
            'quarantineReason' => fn(ParseNode $n) => $o->setQuarantineReason($n->getStringValue()),
            'quarantineType' => fn(ParseNode $n) => $o->setQuarantineType($n->getEnumValue(QuarantineType::class)),
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
     * Gets the quarantinedDateTime property value. The date and time when the workflow was quarantined.
     * @return DateTime|null
    */
    public function getQuarantinedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('quarantinedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'quarantinedDateTime'");
    }

    /**
     * Gets the quarantineReason property value. The reason the workflow was quarantined.
     * @return string|null
    */
    public function getQuarantineReason(): ?string {
        $val = $this->getBackingStore()->get('quarantineReason');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'quarantineReason'");
    }

    /**
     * Gets the quarantineType property value. The quarantineType property
     * @return QuarantineType|null
    */
    public function getQuarantineType(): ?QuarantineType {
        $val = $this->getBackingStore()->get('quarantineType');
        if (is_null($val) || $val instanceof QuarantineType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'quarantineType'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeDateTimeValue('quarantinedDateTime', $this->getQuarantinedDateTime());
        $writer->writeStringValue('quarantineReason', $this->getQuarantineReason());
        $writer->writeEnumValue('quarantineType', $this->getQuarantineType());
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
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the quarantinedDateTime property value. The date and time when the workflow was quarantined.
     * @param DateTime|null $value Value to set for the quarantinedDateTime property.
    */
    public function setQuarantinedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('quarantinedDateTime', $value);
    }

    /**
     * Sets the quarantineReason property value. The reason the workflow was quarantined.
     * @param string|null $value Value to set for the quarantineReason property.
    */
    public function setQuarantineReason(?string $value): void {
        $this->getBackingStore()->set('quarantineReason', $value);
    }

    /**
     * Sets the quarantineType property value. The quarantineType property
     * @param QuarantineType|null $value Value to set for the quarantineType property.
    */
    public function setQuarantineType(?QuarantineType $value): void {
        $this->getBackingStore()->set('quarantineType', $value);
    }

}
