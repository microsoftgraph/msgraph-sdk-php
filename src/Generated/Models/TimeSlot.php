<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TimeSlot implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var DateTimeTimeZone|null $end The end property
    */
    private ?DateTimeTimeZone $end = null;
    
    /**
     * @var DateTimeTimeZone|null $start The start property
    */
    private ?DateTimeTimeZone $start = null;
    
    /**
     * Instantiates a new timeSlot and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TimeSlot
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TimeSlot {
        return new TimeSlot();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the end property value. The end property
     * @return DateTimeTimeZone|null
    */
    public function getEnd(): ?DateTimeTimeZone {
        return $this->end;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'end' => function (ParseNode $n) use ($o) { $o->setEnd($n->getObjectValue(array(DateTimeTimeZone::class, 'createFromDiscriminatorValue'))); },
            'start' => function (ParseNode $n) use ($o) { $o->setStart($n->getObjectValue(array(DateTimeTimeZone::class, 'createFromDiscriminatorValue'))); },
        ];
    }

    /**
     * Gets the start property value. The start property
     * @return DateTimeTimeZone|null
    */
    public function getStart(): ?DateTimeTimeZone {
        return $this->start;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('end', $this->end);
        $writer->writeObjectValue('start', $this->start);
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
     * Sets the end property value. The end property
     *  @param DateTimeTimeZone|null $value Value to set for the end property.
    */
    public function setEnd(?DateTimeTimeZone $value ): void {
        $this->end = $value;
    }

    /**
     * Sets the start property value. The start property
     *  @param DateTimeTimeZone|null $value Value to set for the start property.
    */
    public function setStart(?DateTimeTimeZone $value ): void {
        $this->start = $value;
    }

}
