<?php

namespace Microsoft\Graph\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ConditionalAccessLocations implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var array<string>|null $excludeLocations Location IDs excluded from scope of policy. */
    private ?array $excludeLocations = null;
    
    /** @var array<string>|null $includeLocations Location IDs in scope of policy unless explicitly excluded, All, or AllTrusted. */
    private ?array $includeLocations = null;
    
    /**
     * Instantiates a new conditionalAccessLocations and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ConditionalAccessLocations
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): ConditionalAccessLocations {
        return new ConditionalAccessLocations();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the excludeLocations property value. Location IDs excluded from scope of policy.
     * @return array<string>|null
    */
    public function getExcludeLocations(): ?array {
        return $this->excludeLocations;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'excludeLocations' => function (self $o, ParseNode $n) { $o->setExcludeLocations($n->getCollectionOfPrimitiveValues()); },
            'includeLocations' => function (self $o, ParseNode $n) { $o->setIncludeLocations($n->getCollectionOfPrimitiveValues()); },
        ];
    }

    /**
     * Gets the includeLocations property value. Location IDs in scope of policy unless explicitly excluded, All, or AllTrusted.
     * @return array<string>|null
    */
    public function getIncludeLocations(): ?array {
        return $this->includeLocations;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfPrimitiveValues('excludeLocations', $this->excludeLocations);
        $writer->writeCollectionOfPrimitiveValues('includeLocations', $this->includeLocations);
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
     * Sets the excludeLocations property value. Location IDs excluded from scope of policy.
     *  @param array<string>|null $value Value to set for the excludeLocations property.
    */
    public function setExcludeLocations(?array $value ): void {
        $this->excludeLocations = $value;
    }

    /**
     * Sets the includeLocations property value. Location IDs in scope of policy unless explicitly excluded, All, or AllTrusted.
     *  @param array<string>|null $value Value to set for the includeLocations property.
    */
    public function setIncludeLocations(?array $value ): void {
        $this->includeLocations = $value;
    }

}
