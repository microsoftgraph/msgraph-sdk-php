<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PatternedRecurrence implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var RecurrencePattern|null $pattern The frequency of an event. Do not specify for a one-time access review.  For access reviews: Do not specify this property for a one-time access review.   Only interval, dayOfMonth, and type (weekly, absoluteMonthly) properties of recurrencePattern are supported.
    */
    private ?RecurrencePattern $pattern = null;
    
    /**
     * @var RecurrenceRange|null $range The duration of an event.
    */
    private ?RecurrenceRange $range = null;
    
    /**
     * Instantiates a new patternedRecurrence and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PatternedRecurrence
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PatternedRecurrence {
        return new PatternedRecurrence();
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
            'pattern' => function (ParseNode $n) use ($o) { $o->setPattern($n->getObjectValue(array(RecurrencePattern::class, 'createFromDiscriminatorValue'))); },
            'range' => function (ParseNode $n) use ($o) { $o->setRange($n->getObjectValue(array(RecurrenceRange::class, 'createFromDiscriminatorValue'))); },
        ];
    }

    /**
     * Gets the pattern property value. The frequency of an event. Do not specify for a one-time access review.  For access reviews: Do not specify this property for a one-time access review.   Only interval, dayOfMonth, and type (weekly, absoluteMonthly) properties of recurrencePattern are supported.
     * @return RecurrencePattern|null
    */
    public function getPattern(): ?RecurrencePattern {
        return $this->pattern;
    }

    /**
     * Gets the range property value. The duration of an event.
     * @return RecurrenceRange|null
    */
    public function getRange(): ?RecurrenceRange {
        return $this->range;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('pattern', $this->pattern);
        $writer->writeObjectValue('range', $this->range);
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
     * Sets the pattern property value. The frequency of an event. Do not specify for a one-time access review.  For access reviews: Do not specify this property for a one-time access review.   Only interval, dayOfMonth, and type (weekly, absoluteMonthly) properties of recurrencePattern are supported.
     *  @param RecurrencePattern|null $value Value to set for the pattern property.
    */
    public function setPattern(?RecurrencePattern $value ): void {
        $this->pattern = $value;
    }

    /**
     * Sets the range property value. The duration of an event.
     *  @param RecurrenceRange|null $value Value to set for the range property.
    */
    public function setRange(?RecurrenceRange $value ): void {
        $this->range = $value;
    }

}
