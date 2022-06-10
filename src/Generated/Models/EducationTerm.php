<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\Date;

class EducationTerm implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $displayName Display name of the term.
    */
    private ?string $displayName = null;
    
    /**
     * @var Date|null $endDate End of the term.
    */
    private ?Date $endDate = null;
    
    /**
     * @var string|null $externalId ID of term in the syncing system.
    */
    private ?string $externalId = null;
    
    /**
     * @var Date|null $startDate Start of the term.
    */
    private ?Date $startDate = null;
    
    /**
     * Instantiates a new educationTerm and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EducationTerm
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EducationTerm {
        return new EducationTerm();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the displayName property value. Display name of the term.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * Gets the endDate property value. End of the term.
     * @return Date|null
    */
    public function getEndDate(): ?Date {
        return $this->endDate;
    }

    /**
     * Gets the externalId property value. ID of term in the syncing system.
     * @return string|null
    */
    public function getExternalId(): ?string {
        return $this->externalId;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'endDate' => function (ParseNode $n) use ($o) { $o->setEndDate($n->getDateValue()); },
            'externalId' => function (ParseNode $n) use ($o) { $o->setExternalId($n->getStringValue()); },
            'startDate' => function (ParseNode $n) use ($o) { $o->setStartDate($n->getDateValue()); },
        ];
    }

    /**
     * Gets the startDate property value. Start of the term.
     * @return Date|null
    */
    public function getStartDate(): ?Date {
        return $this->startDate;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeDateValue('endDate', $this->endDate);
        $writer->writeStringValue('externalId', $this->externalId);
        $writer->writeDateValue('startDate', $this->startDate);
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
     * Sets the displayName property value. Display name of the term.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the endDate property value. End of the term.
     *  @param Date|null $value Value to set for the endDate property.
    */
    public function setEndDate(?Date $value ): void {
        $this->endDate = $value;
    }

    /**
     * Sets the externalId property value. ID of term in the syncing system.
     *  @param string|null $value Value to set for the externalId property.
    */
    public function setExternalId(?string $value ): void {
        $this->externalId = $value;
    }

    /**
     * Sets the startDate property value. Start of the term.
     *  @param Date|null $value Value to set for the startDate property.
    */
    public function setStartDate(?Date $value ): void {
        $this->startDate = $value;
    }

}
