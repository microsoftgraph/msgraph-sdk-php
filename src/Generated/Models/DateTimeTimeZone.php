<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DateTimeTimeZone implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $dateTime A single point of time in a combined date and time representation ({date}T{time}). For example, '2019-04-16T09:00:00'.
    */
    private ?string $dateTime = null;
    
    /**
     * @var string|null $timeZone Represents a time zone, for example, 'Pacific Standard Time'. See below for possible values.
    */
    private ?string $timeZone = null;
    
    /**
     * Instantiates a new dateTimeTimeZone and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DateTimeTimeZone
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DateTimeTimeZone {
        return new DateTimeTimeZone();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the dateTime property value. A single point of time in a combined date and time representation ({date}T{time}). For example, '2019-04-16T09:00:00'.
     * @return string|null
    */
    public function getDateTime(): ?string {
        return $this->dateTime;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'dateTime' => function (ParseNode $n) use ($o) { $o->setDateTime($n->getStringValue()); },
            'timeZone' => function (ParseNode $n) use ($o) { $o->setTimeZone($n->getStringValue()); },
        ];
    }

    /**
     * Gets the timeZone property value. Represents a time zone, for example, 'Pacific Standard Time'. See below for possible values.
     * @return string|null
    */
    public function getTimeZone(): ?string {
        return $this->timeZone;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('dateTime', $this->dateTime);
        $writer->writeStringValue('timeZone', $this->timeZone);
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
     * Sets the dateTime property value. A single point of time in a combined date and time representation ({date}T{time}). For example, '2019-04-16T09:00:00'.
     *  @param string|null $value Value to set for the dateTime property.
    */
    public function setDateTime(?string $value ): void {
        $this->dateTime = $value;
    }

    /**
     * Sets the timeZone property value. Represents a time zone, for example, 'Pacific Standard Time'. See below for possible values.
     *  @param string|null $value Value to set for the timeZone property.
    */
    public function setTimeZone(?string $value ): void {
        $this->timeZone = $value;
    }

}
