<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SignInFrequencySessionControl extends ConditionalAccessSessionControl implements Parsable 
{
    /**
     * @var string|null $odataType The OdataType property
    */
    public ?string $odataType = null;
    
    /**
     * Instantiates a new signInFrequencySessionControl and sets the default values.
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
        $val = $this->getBackingStore()->get('authenticationType');
        if (is_null($val) || $val instanceof SignInFrequencyAuthenticationType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'authenticationType'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
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
        $val = $this->getBackingStore()->get('frequencyInterval');
        if (is_null($val) || $val instanceof SignInFrequencyInterval) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'frequencyInterval'");
    }

    /**
     * Gets the type property value. Possible values are: days, hours.
     * @return SigninFrequencyType|null
    */
    public function getType(): ?SigninFrequencyType {
        $val = $this->getBackingStore()->get('type');
        if (is_null($val) || $val instanceof SigninFrequencyType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'type'");
    }

    /**
     * Gets the value property value. The number of days or hours.
     * @return int|null
    */
    public function getValue(): ?int {
        $val = $this->getBackingStore()->get('value');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'value'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('authenticationType', $this->getAuthenticationType());
        $writer->writeEnumValue('frequencyInterval', $this->getFrequencyInterval());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeEnumValue('type', $this->getType());
        $writer->writeIntegerValue('value', $this->getValue());
    }

    /**
     * Sets the authenticationType property value. The possible values are primaryAndSecondaryAuthentication, secondaryAuthentication, unknownFutureValue.
     * @param SignInFrequencyAuthenticationType|null $value Value to set for the authenticationType property.
    */
    public function setAuthenticationType(?SignInFrequencyAuthenticationType $value): void {
        $this->getBackingStore()->set('authenticationType', $value);
    }

    /**
     * Sets the frequencyInterval property value. The possible values are timeBased, everyTime, unknownFutureValue.
     * @param SignInFrequencyInterval|null $value Value to set for the frequencyInterval property.
    */
    public function setFrequencyInterval(?SignInFrequencyInterval $value): void {
        $this->getBackingStore()->set('frequencyInterval', $value);
    }

    /**
     * Sets the type property value. Possible values are: days, hours.
     * @param SigninFrequencyType|null $value Value to set for the type property.
    */
    public function setType(?SigninFrequencyType $value): void {
        $this->getBackingStore()->set('type', $value);
    }

    /**
     * Sets the value property value. The number of days or hours.
     * @param int|null $value Value to set for the value property.
    */
    public function setValue(?int $value): void {
        $this->getBackingStore()->set('value', $value);
    }

}
