<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DateTimeColumn implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var string|null $displayAs How the value should be presented in the UX. Must be one of default, friendly, or standard. See below for more details. If unspecified, treated as default. */
    private ?string $displayAs = null;
    
    /** @var string|null $format Indicates whether the value should be presented as a date only or a date and time. Must be one of dateOnly or dateTime */
    private ?string $format = null;
    
    /**
     * Instantiates a new dateTimeColumn and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DateTimeColumn
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): DateTimeColumn {
        return new DateTimeColumn();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the displayAs property value. How the value should be presented in the UX. Must be one of default, friendly, or standard. See below for more details. If unspecified, treated as default.
     * @return string|null
    */
    public function getDisplayAs(): ?string {
        return $this->displayAs;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'displayAs' => function (self $o, ParseNode $n) { $o->setDisplayAs($n->getStringValue()); },
            'format' => function (self $o, ParseNode $n) { $o->setFormat($n->getStringValue()); },
        ];
    }

    /**
     * Gets the format property value. Indicates whether the value should be presented as a date only or a date and time. Must be one of dateOnly or dateTime
     * @return string|null
    */
    public function getFormat(): ?string {
        return $this->format;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('displayAs', $this->displayAs);
        $writer->writeStringValue('format', $this->format);
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
     * Sets the displayAs property value. How the value should be presented in the UX. Must be one of default, friendly, or standard. See below for more details. If unspecified, treated as default.
     *  @param string|null $value Value to set for the displayAs property.
    */
    public function setDisplayAs(?string $value ): void {
        $this->displayAs = $value;
    }

    /**
     * Sets the format property value. Indicates whether the value should be presented as a date only or a date and time. Must be one of dateOnly or dateTime
     *  @param string|null $value Value to set for the format property.
    */
    public function setFormat(?string $value ): void {
        $this->format = $value;
    }

}
