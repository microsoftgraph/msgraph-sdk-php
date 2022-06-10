<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ModifiedProperty implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $displayName Name of property that was modified.
    */
    private ?string $displayName = null;
    
    /**
     * @var string|null $newValue New property value.
    */
    private ?string $newValue = null;
    
    /**
     * @var string|null $oldValue Old property value.
    */
    private ?string $oldValue = null;
    
    /**
     * Instantiates a new modifiedProperty and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ModifiedProperty
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ModifiedProperty {
        return new ModifiedProperty();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the displayName property value. Name of property that was modified.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'newValue' => function (ParseNode $n) use ($o) { $o->setNewValue($n->getStringValue()); },
            'oldValue' => function (ParseNode $n) use ($o) { $o->setOldValue($n->getStringValue()); },
        ];
    }

    /**
     * Gets the newValue property value. New property value.
     * @return string|null
    */
    public function getNewValue(): ?string {
        return $this->newValue;
    }

    /**
     * Gets the oldValue property value. Old property value.
     * @return string|null
    */
    public function getOldValue(): ?string {
        return $this->oldValue;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeStringValue('newValue', $this->newValue);
        $writer->writeStringValue('oldValue', $this->oldValue);
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
     * Sets the displayName property value. Name of property that was modified.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the newValue property value. New property value.
     *  @param string|null $value Value to set for the newValue property.
    */
    public function setNewValue(?string $value ): void {
        $this->newValue = $value;
    }

    /**
     * Sets the oldValue property value. Old property value.
     *  @param string|null $value Value to set for the oldValue property.
    */
    public function setOldValue(?string $value ): void {
        $this->oldValue = $value;
    }

}
