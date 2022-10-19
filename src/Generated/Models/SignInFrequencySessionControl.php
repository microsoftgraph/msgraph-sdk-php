<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SignInFrequencySessionControl extends ConditionalAccessSessionControl implements Parsable 
{
    /**
     * @var SignInFrequencyAuthenticationType|null $authenticationType The possible values are primaryAndSecondaryAuthentication, secondaryAuthentication, unknownFutureValue.
    */
    private ?SignInFrequencyAuthenticationType $authenticationType = null;
    
    /**
     * @var SignInFrequencyInterval|null $frequencyInterval The possible values are timeBased, everyTime, unknownFutureValue.
    */
    private ?SignInFrequencyInterval $frequencyInterval = null;
    
    /**
     * @var SigninFrequencyType|null $type Possible values are: days, hours.
    */
    private ?SigninFrequencyType $type = null;
    
    /**
     * @var int|null $value The number of days or hours.
    */
    private ?int $value = null;
    
    /**
     * Instantiates a new SignInFrequencySessionControl and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.signInFrequencySessionControl');
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
     * Gets the authenticationType property value. The possible values are primaryAndSecondaryAuthentication, secondaryAuthentication, unknownFutureValue.
     * @return SignInFrequencyAuthenticationType|null
    */
    public function getAuthenticationType(): ?SignInFrequencyAuthenticationType {
        return $this->authenticationType;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'authenticationType' => fn(ParseNode $n) => $o->setAuthenticationType($n->getEnumValue(SignInFrequencyAuthenticationType::class)),
            'frequencyInterval' => fn(ParseNode $n) => $o->setFrequencyInterval($n->getEnumValue(SignInFrequencyInterval::class)),
            'type' => fn(ParseNode $n) => $o->setType($n->getEnumValue(SigninFrequencyType::class)),
            'value' => fn(ParseNode $n) => $o->setValue($n->getIntegerValue()),
        ]);
    }

    /**
     * Gets the frequencyInterval property value. The possible values are timeBased, everyTime, unknownFutureValue.
     * @return SignInFrequencyInterval|null
    */
    public function getFrequencyInterval(): ?SignInFrequencyInterval {
        return $this->frequencyInterval;
    }

    /**
     * Gets the type property value. Possible values are: days, hours.
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
        $writer->writeEnumValue('authenticationType', $this->authenticationType);
        $writer->writeEnumValue('frequencyInterval', $this->frequencyInterval);
        $writer->writeEnumValue('type', $this->type);
        $writer->writeIntegerValue('value', $this->value);
    }

    /**
     * Sets the authenticationType property value. The possible values are primaryAndSecondaryAuthentication, secondaryAuthentication, unknownFutureValue.
     *  @param SignInFrequencyAuthenticationType|null $value Value to set for the authenticationType property.
    */
    public function setAuthenticationType(?SignInFrequencyAuthenticationType $value ): void {
        $this->authenticationType = $value;
    }

    /**
     * Sets the frequencyInterval property value. The possible values are timeBased, everyTime, unknownFutureValue.
     *  @param SignInFrequencyInterval|null $value Value to set for the frequencyInterval property.
    */
    public function setFrequencyInterval(?SignInFrequencyInterval $value ): void {
        $this->frequencyInterval = $value;
    }

    /**
     * Sets the type property value. Possible values are: days, hours.
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
