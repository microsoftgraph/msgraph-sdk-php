<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SortProperty implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var bool|null $isDescending True if the sort order is descending. Default is false, with the sort order as ascending. Optional.
    */
    private ?bool $isDescending = null;
    
    /**
     * @var string|null $name The name of the property to sort on. Required.
    */
    private ?string $name = null;
    
    /**
     * Instantiates a new sortProperty and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SortProperty
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SortProperty {
        return new SortProperty();
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
            'isDescending' => function (ParseNode $n) use ($o) { $o->setIsDescending($n->getBooleanValue()); },
            'name' => function (ParseNode $n) use ($o) { $o->setName($n->getStringValue()); },
        ];
    }

    /**
     * Gets the isDescending property value. True if the sort order is descending. Default is false, with the sort order as ascending. Optional.
     * @return bool|null
    */
    public function getIsDescending(): ?bool {
        return $this->isDescending;
    }

    /**
     * Gets the name property value. The name of the property to sort on. Required.
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('isDescending', $this->isDescending);
        $writer->writeStringValue('name', $this->name);
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
     * Sets the isDescending property value. True if the sort order is descending. Default is false, with the sort order as ascending. Optional.
     *  @param bool|null $value Value to set for the isDescending property.
    */
    public function setIsDescending(?bool $value ): void {
        $this->isDescending = $value;
    }

    /**
     * Sets the name property value. The name of the property to sort on. Required.
     *  @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value ): void {
        $this->name = $value;
    }

}
