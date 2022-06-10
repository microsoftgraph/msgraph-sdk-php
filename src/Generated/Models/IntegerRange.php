<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class IntegerRange implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var int|null $end The inclusive upper bound of the integer range.
    */
    private ?int $end = null;
    
    /**
     * @var int|null $start The inclusive lower bound of the integer range.
    */
    private ?int $start = null;
    
    /**
     * Instantiates a new integerRange and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return IntegerRange
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): IntegerRange {
        return new IntegerRange();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the end property value. The inclusive upper bound of the integer range.
     * @return int|null
    */
    public function getEnd(): ?int {
        return $this->end;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'end' => function (ParseNode $n) use ($o) { $o->setEnd($n->getIntegerValue()); },
            'start' => function (ParseNode $n) use ($o) { $o->setStart($n->getIntegerValue()); },
        ];
    }

    /**
     * Gets the start property value. The inclusive lower bound of the integer range.
     * @return int|null
    */
    public function getStart(): ?int {
        return $this->start;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('end', $this->end);
        $writer->writeIntegerValue('start', $this->start);
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
     * Sets the end property value. The inclusive upper bound of the integer range.
     *  @param int|null $value Value to set for the end property.
    */
    public function setEnd(?int $value ): void {
        $this->end = $value;
    }

    /**
     * Sets the start property value. The inclusive lower bound of the integer range.
     *  @param int|null $value Value to set for the start property.
    */
    public function setStart(?int $value ): void {
        $this->start = $value;
    }

}
