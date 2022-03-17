<?php

namespace Microsoft\Graph\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ModifiedProperty implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var string|null $displayName Indicates the property name of the target attribute that was changed. */
    private ?string $displayName = null;
    
    /** @var string|null $newValue Indicates the updated value for the propery. */
    private ?string $newValue = null;
    
    /** @var string|null $oldValue Indicates the previous value (before the update) for the property. */
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
    public function createFromDiscriminatorValue(ParseNode $parseNode): ModifiedProperty {
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
     * Gets the displayName property value. Indicates the property name of the target attribute that was changed.
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
        return  [
            'displayName' => function (self $o, ParseNode $n) { $o->setDisplayName($n->getStringValue()); },
            'newValue' => function (self $o, ParseNode $n) { $o->setNewValue($n->getStringValue()); },
            'oldValue' => function (self $o, ParseNode $n) { $o->setOldValue($n->getStringValue()); },
        ];
    }

    /**
     * Gets the newValue property value. Indicates the updated value for the propery.
     * @return string|null
    */
    public function getNewValue(): ?string {
        return $this->newValue;
    }

    /**
     * Gets the oldValue property value. Indicates the previous value (before the update) for the property.
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
     * Sets the displayName property value. Indicates the property name of the target attribute that was changed.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the newValue property value. Indicates the updated value for the propery.
     *  @param string|null $value Value to set for the newValue property.
    */
    public function setNewValue(?string $value ): void {
        $this->newValue = $value;
    }

    /**
     * Sets the oldValue property value. Indicates the previous value (before the update) for the property.
     *  @param string|null $value Value to set for the oldValue property.
    */
    public function setOldValue(?string $value ): void {
        $this->oldValue = $value;
    }

}
