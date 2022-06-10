<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class OnPremisesExtensionAttributes implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $extensionAttribute1 First customizable extension attribute.
    */
    private ?string $extensionAttribute1 = null;
    
    /**
     * @var string|null $extensionAttribute10 Tenth customizable extension attribute.
    */
    private ?string $extensionAttribute10 = null;
    
    /**
     * @var string|null $extensionAttribute11 Eleventh customizable extension attribute.
    */
    private ?string $extensionAttribute11 = null;
    
    /**
     * @var string|null $extensionAttribute12 Twelfth customizable extension attribute.
    */
    private ?string $extensionAttribute12 = null;
    
    /**
     * @var string|null $extensionAttribute13 Thirteenth customizable extension attribute.
    */
    private ?string $extensionAttribute13 = null;
    
    /**
     * @var string|null $extensionAttribute14 Fourteenth customizable extension attribute.
    */
    private ?string $extensionAttribute14 = null;
    
    /**
     * @var string|null $extensionAttribute15 Fifteenth customizable extension attribute.
    */
    private ?string $extensionAttribute15 = null;
    
    /**
     * @var string|null $extensionAttribute2 Second customizable extension attribute.
    */
    private ?string $extensionAttribute2 = null;
    
    /**
     * @var string|null $extensionAttribute3 Third customizable extension attribute.
    */
    private ?string $extensionAttribute3 = null;
    
    /**
     * @var string|null $extensionAttribute4 Fourth customizable extension attribute.
    */
    private ?string $extensionAttribute4 = null;
    
    /**
     * @var string|null $extensionAttribute5 Fifth customizable extension attribute.
    */
    private ?string $extensionAttribute5 = null;
    
    /**
     * @var string|null $extensionAttribute6 Sixth customizable extension attribute.
    */
    private ?string $extensionAttribute6 = null;
    
    /**
     * @var string|null $extensionAttribute7 Seventh customizable extension attribute.
    */
    private ?string $extensionAttribute7 = null;
    
    /**
     * @var string|null $extensionAttribute8 Eighth customizable extension attribute.
    */
    private ?string $extensionAttribute8 = null;
    
    /**
     * @var string|null $extensionAttribute9 Ninth customizable extension attribute.
    */
    private ?string $extensionAttribute9 = null;
    
    /**
     * Instantiates a new onPremisesExtensionAttributes and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OnPremisesExtensionAttributes
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): OnPremisesExtensionAttributes {
        return new OnPremisesExtensionAttributes();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the extensionAttribute1 property value. First customizable extension attribute.
     * @return string|null
    */
    public function getExtensionAttribute1(): ?string {
        return $this->extensionAttribute1;
    }

    /**
     * Gets the extensionAttribute10 property value. Tenth customizable extension attribute.
     * @return string|null
    */
    public function getExtensionAttribute10(): ?string {
        return $this->extensionAttribute10;
    }

    /**
     * Gets the extensionAttribute11 property value. Eleventh customizable extension attribute.
     * @return string|null
    */
    public function getExtensionAttribute11(): ?string {
        return $this->extensionAttribute11;
    }

    /**
     * Gets the extensionAttribute12 property value. Twelfth customizable extension attribute.
     * @return string|null
    */
    public function getExtensionAttribute12(): ?string {
        return $this->extensionAttribute12;
    }

    /**
     * Gets the extensionAttribute13 property value. Thirteenth customizable extension attribute.
     * @return string|null
    */
    public function getExtensionAttribute13(): ?string {
        return $this->extensionAttribute13;
    }

    /**
     * Gets the extensionAttribute14 property value. Fourteenth customizable extension attribute.
     * @return string|null
    */
    public function getExtensionAttribute14(): ?string {
        return $this->extensionAttribute14;
    }

    /**
     * Gets the extensionAttribute15 property value. Fifteenth customizable extension attribute.
     * @return string|null
    */
    public function getExtensionAttribute15(): ?string {
        return $this->extensionAttribute15;
    }

    /**
     * Gets the extensionAttribute2 property value. Second customizable extension attribute.
     * @return string|null
    */
    public function getExtensionAttribute2(): ?string {
        return $this->extensionAttribute2;
    }

    /**
     * Gets the extensionAttribute3 property value. Third customizable extension attribute.
     * @return string|null
    */
    public function getExtensionAttribute3(): ?string {
        return $this->extensionAttribute3;
    }

    /**
     * Gets the extensionAttribute4 property value. Fourth customizable extension attribute.
     * @return string|null
    */
    public function getExtensionAttribute4(): ?string {
        return $this->extensionAttribute4;
    }

    /**
     * Gets the extensionAttribute5 property value. Fifth customizable extension attribute.
     * @return string|null
    */
    public function getExtensionAttribute5(): ?string {
        return $this->extensionAttribute5;
    }

    /**
     * Gets the extensionAttribute6 property value. Sixth customizable extension attribute.
     * @return string|null
    */
    public function getExtensionAttribute6(): ?string {
        return $this->extensionAttribute6;
    }

    /**
     * Gets the extensionAttribute7 property value. Seventh customizable extension attribute.
     * @return string|null
    */
    public function getExtensionAttribute7(): ?string {
        return $this->extensionAttribute7;
    }

    /**
     * Gets the extensionAttribute8 property value. Eighth customizable extension attribute.
     * @return string|null
    */
    public function getExtensionAttribute8(): ?string {
        return $this->extensionAttribute8;
    }

    /**
     * Gets the extensionAttribute9 property value. Ninth customizable extension attribute.
     * @return string|null
    */
    public function getExtensionAttribute9(): ?string {
        return $this->extensionAttribute9;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'extensionAttribute1' => function (ParseNode $n) use ($o) { $o->setExtensionAttribute1($n->getStringValue()); },
            'extensionAttribute10' => function (ParseNode $n) use ($o) { $o->setExtensionAttribute10($n->getStringValue()); },
            'extensionAttribute11' => function (ParseNode $n) use ($o) { $o->setExtensionAttribute11($n->getStringValue()); },
            'extensionAttribute12' => function (ParseNode $n) use ($o) { $o->setExtensionAttribute12($n->getStringValue()); },
            'extensionAttribute13' => function (ParseNode $n) use ($o) { $o->setExtensionAttribute13($n->getStringValue()); },
            'extensionAttribute14' => function (ParseNode $n) use ($o) { $o->setExtensionAttribute14($n->getStringValue()); },
            'extensionAttribute15' => function (ParseNode $n) use ($o) { $o->setExtensionAttribute15($n->getStringValue()); },
            'extensionAttribute2' => function (ParseNode $n) use ($o) { $o->setExtensionAttribute2($n->getStringValue()); },
            'extensionAttribute3' => function (ParseNode $n) use ($o) { $o->setExtensionAttribute3($n->getStringValue()); },
            'extensionAttribute4' => function (ParseNode $n) use ($o) { $o->setExtensionAttribute4($n->getStringValue()); },
            'extensionAttribute5' => function (ParseNode $n) use ($o) { $o->setExtensionAttribute5($n->getStringValue()); },
            'extensionAttribute6' => function (ParseNode $n) use ($o) { $o->setExtensionAttribute6($n->getStringValue()); },
            'extensionAttribute7' => function (ParseNode $n) use ($o) { $o->setExtensionAttribute7($n->getStringValue()); },
            'extensionAttribute8' => function (ParseNode $n) use ($o) { $o->setExtensionAttribute8($n->getStringValue()); },
            'extensionAttribute9' => function (ParseNode $n) use ($o) { $o->setExtensionAttribute9($n->getStringValue()); },
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('extensionAttribute1', $this->extensionAttribute1);
        $writer->writeStringValue('extensionAttribute10', $this->extensionAttribute10);
        $writer->writeStringValue('extensionAttribute11', $this->extensionAttribute11);
        $writer->writeStringValue('extensionAttribute12', $this->extensionAttribute12);
        $writer->writeStringValue('extensionAttribute13', $this->extensionAttribute13);
        $writer->writeStringValue('extensionAttribute14', $this->extensionAttribute14);
        $writer->writeStringValue('extensionAttribute15', $this->extensionAttribute15);
        $writer->writeStringValue('extensionAttribute2', $this->extensionAttribute2);
        $writer->writeStringValue('extensionAttribute3', $this->extensionAttribute3);
        $writer->writeStringValue('extensionAttribute4', $this->extensionAttribute4);
        $writer->writeStringValue('extensionAttribute5', $this->extensionAttribute5);
        $writer->writeStringValue('extensionAttribute6', $this->extensionAttribute6);
        $writer->writeStringValue('extensionAttribute7', $this->extensionAttribute7);
        $writer->writeStringValue('extensionAttribute8', $this->extensionAttribute8);
        $writer->writeStringValue('extensionAttribute9', $this->extensionAttribute9);
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
     * Sets the extensionAttribute1 property value. First customizable extension attribute.
     *  @param string|null $value Value to set for the extensionAttribute1 property.
    */
    public function setExtensionAttribute1(?string $value ): void {
        $this->extensionAttribute1 = $value;
    }

    /**
     * Sets the extensionAttribute10 property value. Tenth customizable extension attribute.
     *  @param string|null $value Value to set for the extensionAttribute10 property.
    */
    public function setExtensionAttribute10(?string $value ): void {
        $this->extensionAttribute10 = $value;
    }

    /**
     * Sets the extensionAttribute11 property value. Eleventh customizable extension attribute.
     *  @param string|null $value Value to set for the extensionAttribute11 property.
    */
    public function setExtensionAttribute11(?string $value ): void {
        $this->extensionAttribute11 = $value;
    }

    /**
     * Sets the extensionAttribute12 property value. Twelfth customizable extension attribute.
     *  @param string|null $value Value to set for the extensionAttribute12 property.
    */
    public function setExtensionAttribute12(?string $value ): void {
        $this->extensionAttribute12 = $value;
    }

    /**
     * Sets the extensionAttribute13 property value. Thirteenth customizable extension attribute.
     *  @param string|null $value Value to set for the extensionAttribute13 property.
    */
    public function setExtensionAttribute13(?string $value ): void {
        $this->extensionAttribute13 = $value;
    }

    /**
     * Sets the extensionAttribute14 property value. Fourteenth customizable extension attribute.
     *  @param string|null $value Value to set for the extensionAttribute14 property.
    */
    public function setExtensionAttribute14(?string $value ): void {
        $this->extensionAttribute14 = $value;
    }

    /**
     * Sets the extensionAttribute15 property value. Fifteenth customizable extension attribute.
     *  @param string|null $value Value to set for the extensionAttribute15 property.
    */
    public function setExtensionAttribute15(?string $value ): void {
        $this->extensionAttribute15 = $value;
    }

    /**
     * Sets the extensionAttribute2 property value. Second customizable extension attribute.
     *  @param string|null $value Value to set for the extensionAttribute2 property.
    */
    public function setExtensionAttribute2(?string $value ): void {
        $this->extensionAttribute2 = $value;
    }

    /**
     * Sets the extensionAttribute3 property value. Third customizable extension attribute.
     *  @param string|null $value Value to set for the extensionAttribute3 property.
    */
    public function setExtensionAttribute3(?string $value ): void {
        $this->extensionAttribute3 = $value;
    }

    /**
     * Sets the extensionAttribute4 property value. Fourth customizable extension attribute.
     *  @param string|null $value Value to set for the extensionAttribute4 property.
    */
    public function setExtensionAttribute4(?string $value ): void {
        $this->extensionAttribute4 = $value;
    }

    /**
     * Sets the extensionAttribute5 property value. Fifth customizable extension attribute.
     *  @param string|null $value Value to set for the extensionAttribute5 property.
    */
    public function setExtensionAttribute5(?string $value ): void {
        $this->extensionAttribute5 = $value;
    }

    /**
     * Sets the extensionAttribute6 property value. Sixth customizable extension attribute.
     *  @param string|null $value Value to set for the extensionAttribute6 property.
    */
    public function setExtensionAttribute6(?string $value ): void {
        $this->extensionAttribute6 = $value;
    }

    /**
     * Sets the extensionAttribute7 property value. Seventh customizable extension attribute.
     *  @param string|null $value Value to set for the extensionAttribute7 property.
    */
    public function setExtensionAttribute7(?string $value ): void {
        $this->extensionAttribute7 = $value;
    }

    /**
     * Sets the extensionAttribute8 property value. Eighth customizable extension attribute.
     *  @param string|null $value Value to set for the extensionAttribute8 property.
    */
    public function setExtensionAttribute8(?string $value ): void {
        $this->extensionAttribute8 = $value;
    }

    /**
     * Sets the extensionAttribute9 property value. Ninth customizable extension attribute.
     *  @param string|null $value Value to set for the extensionAttribute9 property.
    */
    public function setExtensionAttribute9(?string $value ): void {
        $this->extensionAttribute9 = $value;
    }

}
