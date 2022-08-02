<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class IncompleteData implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var DateTime|null $missingDataBeforeDateTime The service does not have source data before the specified time.
    */
    private ?DateTime $missingDataBeforeDateTime = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var bool|null $wasThrottled Some data was not recorded due to excessive activity.
    */
    private ?bool $wasThrottled = null;
    
    /**
     * Instantiates a new incompleteData and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.incompleteData');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return IncompleteData
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): IncompleteData {
        return new IncompleteData();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'missingDataBeforeDateTime' => function (ParseNode $n) use ($o) { $o->setMissingDataBeforeDateTime($n->getDateTimeValue()); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
            'wasThrottled' => function (ParseNode $n) use ($o) { $o->setWasThrottled($n->getBooleanValue()); },
        ];
    }

    /**
     * Gets the missingDataBeforeDateTime property value. The service does not have source data before the specified time.
     * @return DateTime|null
    */
    public function getMissingDataBeforeDateTime(): ?DateTime {
        return $this->missingDataBeforeDateTime;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the wasThrottled property value. Some data was not recorded due to excessive activity.
     * @return bool|null
    */
    public function getWasThrottled(): ?bool {
        return $this->wasThrottled;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeDateTimeValue('missingDataBeforeDateTime', $this->missingDataBeforeDateTime);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeBooleanValue('wasThrottled', $this->wasThrottled);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the missingDataBeforeDateTime property value. The service does not have source data before the specified time.
     *  @param DateTime|null $value Value to set for the missingDataBeforeDateTime property.
    */
    public function setMissingDataBeforeDateTime(?DateTime $value ): void {
        $this->missingDataBeforeDateTime = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the wasThrottled property value. Some data was not recorded due to excessive activity.
     *  @param bool|null $value Value to set for the wasThrottled property.
    */
    public function setWasThrottled(?bool $value ): void {
        $this->wasThrottled = $value;
    }

}
