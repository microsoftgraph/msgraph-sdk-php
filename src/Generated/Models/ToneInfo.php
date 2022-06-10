<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ToneInfo implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var int|null $sequenceId An incremental identifier used for ordering DTMF events.
    */
    private ?int $sequenceId = null;
    
    /**
     * @var Tone|null $tone Possible values are: tone0, tone1, tone2, tone3, tone4, tone5, tone6, tone7, tone8, tone9, star, pound, a, b, c, d, flash.
    */
    private ?Tone $tone = null;
    
    /**
     * Instantiates a new toneInfo and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ToneInfo
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ToneInfo {
        return new ToneInfo();
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
            'sequenceId' => function (ParseNode $n) use ($o) { $o->setSequenceId($n->getIntegerValue()); },
            'tone' => function (ParseNode $n) use ($o) { $o->setTone($n->getEnumValue(Tone::class)); },
        ];
    }

    /**
     * Gets the sequenceId property value. An incremental identifier used for ordering DTMF events.
     * @return int|null
    */
    public function getSequenceId(): ?int {
        return $this->sequenceId;
    }

    /**
     * Gets the tone property value. Possible values are: tone0, tone1, tone2, tone3, tone4, tone5, tone6, tone7, tone8, tone9, star, pound, a, b, c, d, flash.
     * @return Tone|null
    */
    public function getTone(): ?Tone {
        return $this->tone;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('sequenceId', $this->sequenceId);
        $writer->writeEnumValue('tone', $this->tone);
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
     * Sets the sequenceId property value. An incremental identifier used for ordering DTMF events.
     *  @param int|null $value Value to set for the sequenceId property.
    */
    public function setSequenceId(?int $value ): void {
        $this->sequenceId = $value;
    }

    /**
     * Sets the tone property value. Possible values are: tone0, tone1, tone2, tone3, tone4, tone5, tone6, tone7, tone8, tone9, star, pound, a, b, c, d, flash.
     *  @param Tone|null $value Value to set for the tone property.
    */
    public function setTone(?Tone $value ): void {
        $this->tone = $value;
    }

}
