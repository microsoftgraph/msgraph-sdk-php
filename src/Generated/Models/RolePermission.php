<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class RolePermission implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var array<ResourceAction>|null $resourceActions Resource Actions each containing a set of allowed and not allowed permissions.
    */
    private ?array $resourceActions = null;
    
    /**
     * Instantiates a new rolePermission and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RolePermission
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RolePermission {
        return new RolePermission();
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
            'resourceActions' => function (ParseNode $n) use ($o) { $o->setResourceActions($n->getCollectionOfObjectValues(array(ResourceAction::class, 'createFromDiscriminatorValue'))); },
        ];
    }

    /**
     * Gets the resourceActions property value. Resource Actions each containing a set of allowed and not allowed permissions.
     * @return array<ResourceAction>|null
    */
    public function getResourceActions(): ?array {
        return $this->resourceActions;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('resourceActions', $this->resourceActions);
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
     * Sets the resourceActions property value. Resource Actions each containing a set of allowed and not allowed permissions.
     *  @param array<ResourceAction>|null $value Value to set for the resourceActions property.
    */
    public function setResourceActions(?array $value ): void {
        $this->resourceActions = $value;
    }

}
