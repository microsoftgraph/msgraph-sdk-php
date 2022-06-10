<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PersonType implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $EscapedClass The type of data source, such as Person.
    */
    private ?string $escapedClass = null;
    
    /**
     * @var string|null $subclass The secondary type of data source, such as OrganizationUser.
    */
    private ?string $subclass = null;
    
    /**
     * Instantiates a new personType and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PersonType
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PersonType {
        return new PersonType();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the class property value. The type of data source, such as Person.
     * @return string|null
    */
    public function getClass(): ?string {
        return $this->escapedClass;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'class' => function (ParseNode $n) use ($o) { $o->setClass($n->getStringValue()); },
            'subclass' => function (ParseNode $n) use ($o) { $o->setSubclass($n->getStringValue()); },
        ];
    }

    /**
     * Gets the subclass property value. The secondary type of data source, such as OrganizationUser.
     * @return string|null
    */
    public function getSubclass(): ?string {
        return $this->subclass;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('class', $this->escapedClass);
        $writer->writeStringValue('subclass', $this->subclass);
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
     * Sets the class property value. The type of data source, such as Person.
     *  @param string|null $value Value to set for the EscapedClass property.
    */
    public function setClass(?string $value ): void {
        $this->escapedClass = $value;
    }

    /**
     * Sets the subclass property value. The secondary type of data source, such as OrganizationUser.
     *  @param string|null $value Value to set for the subclass property.
    */
    public function setSubclass(?string $value ): void {
        $this->subclass = $value;
    }

}
