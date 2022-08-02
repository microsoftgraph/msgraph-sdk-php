<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UnifiedRolePermission implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var array<string>|null $allowedResourceActions Set of tasks that can be performed on a resource.
    */
    private ?array $allowedResourceActions = null;
    
    /**
     * @var string|null $condition Optional constraints that must be met for the permission to be effective.
    */
    private ?string $condition = null;
    
    /**
     * @var array<string>|null $excludedResourceActions Set of tasks that may not be performed on a resource. Not yet supported.
    */
    private ?array $excludedResourceActions = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * Instantiates a new unifiedRolePermission and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.unifiedRolePermission');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UnifiedRolePermission
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UnifiedRolePermission {
        return new UnifiedRolePermission();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the allowedResourceActions property value. Set of tasks that can be performed on a resource.
     * @return array<string>|null
    */
    public function getAllowedResourceActions(): ?array {
        return $this->allowedResourceActions;
    }

    /**
     * Gets the condition property value. Optional constraints that must be met for the permission to be effective.
     * @return string|null
    */
    public function getCondition(): ?string {
        return $this->condition;
    }

    /**
     * Gets the excludedResourceActions property value. Set of tasks that may not be performed on a resource. Not yet supported.
     * @return array<string>|null
    */
    public function getExcludedResourceActions(): ?array {
        return $this->excludedResourceActions;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'allowedResourceActions' => function (ParseNode $n) use ($o) { $o->setAllowedResourceActions($n->getCollectionOfPrimitiveValues()); },
            'condition' => function (ParseNode $n) use ($o) { $o->setCondition($n->getStringValue()); },
            'excludedResourceActions' => function (ParseNode $n) use ($o) { $o->setExcludedResourceActions($n->getCollectionOfPrimitiveValues()); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
        ];
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfPrimitiveValues('allowedResourceActions', $this->allowedResourceActions);
        $writer->writeStringValue('condition', $this->condition);
        $writer->writeCollectionOfPrimitiveValues('excludedResourceActions', $this->excludedResourceActions);
        $writer->writeStringValue('@odata.type', $this->odataType);
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
     * Sets the allowedResourceActions property value. Set of tasks that can be performed on a resource.
     *  @param array<string>|null $value Value to set for the allowedResourceActions property.
    */
    public function setAllowedResourceActions(?array $value ): void {
        $this->allowedResourceActions = $value;
    }

    /**
     * Sets the condition property value. Optional constraints that must be met for the permission to be effective.
     *  @param string|null $value Value to set for the condition property.
    */
    public function setCondition(?string $value ): void {
        $this->condition = $value;
    }

    /**
     * Sets the excludedResourceActions property value. Set of tasks that may not be performed on a resource. Not yet supported.
     *  @param array<string>|null $value Value to set for the excludedResourceActions property.
    */
    public function setExcludedResourceActions(?array $value ): void {
        $this->excludedResourceActions = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

}
