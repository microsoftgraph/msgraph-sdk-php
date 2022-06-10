<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WindowsInformationProtectionResourceCollection implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $displayName Display name
    */
    private ?string $displayName = null;
    
    /**
     * @var array<string>|null $resources Collection of resources
    */
    private ?array $resources = null;
    
    /**
     * Instantiates a new windowsInformationProtectionResourceCollection and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WindowsInformationProtectionResourceCollection
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WindowsInformationProtectionResourceCollection {
        return new WindowsInformationProtectionResourceCollection();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the displayName property value. Display name
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
            'resources' => function (ParseNode $n) use ($o) { $o->setResources($n->getCollectionOfPrimitiveValues()); },
        ];
    }

    /**
     * Gets the resources property value. Collection of resources
     * @return array<string>|null
    */
    public function getResources(): ?array {
        return $this->resources;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeCollectionOfPrimitiveValues('resources', $this->resources);
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
     * Sets the displayName property value. Display name
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the resources property value. Collection of resources
     *  @param array<string>|null $value Value to set for the resources property.
    */
    public function setResources(?array $value ): void {
        $this->resources = $value;
    }

}
