<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SignInFrequencySessionControl extends ConditionalAccessSessionControl implements Parsable 
{
    /**
     * @var SigninFrequencyType|null $type Possible values are: days, hours, or null if frequencyInterval is everyTime .
    */
    private ?SigninFrequencyType $type = null;
    
    /**
     * @var int|null $value The number of days or hours.
    */
    private ?int $value = null;
    
    /**
     * Instantiates a new signInFrequencySessionControl and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SignInFrequencySessionControl
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SignInFrequencySessionControl {
        return new SignInFrequencySessionControl();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'type' => function (ParseNode $n) use ($o) { $o->setType($n->getEnumValue(SigninFrequencyType::class)); },
            'value' => function (ParseNode $n) use ($o) { $o->setValue($n->getIntegerValue()); },
        ]);
    }

    /**
     * Gets the type property value. Possible values are: days, hours, or null if frequencyInterval is everyTime .
     * @return SigninFrequencyType|null
    */
    public function getType(): ?SigninFrequencyType {
        return $this->type;
    }

    /**
     * Gets the value property value. The number of days or hours.
     * @return int|null
    */
    public function getValue(): ?int {
        return $this->value;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('type', $this->type);
        $writer->writeIntegerValue('value', $this->value);
    }

    /**
     * Sets the type property value. Possible values are: days, hours, or null if frequencyInterval is everyTime .
     *  @param SigninFrequencyType|null $value Value to set for the type property.
    */
    public function setType(?SigninFrequencyType $value ): void {
        $this->type = $value;
    }

    /**
     * Sets the value property value. The number of days or hours.
     *  @param int|null $value Value to set for the value property.
    */
    public function setValue(?int $value ): void {
        $this->value = $value;
    }

}
