<?php

namespace Microsoft\Graph\Generated\Identity\B2xUserFlows\Item\UserAttributeAssignments\SetOrder;

use Microsoft\Graph\Generated\Models\AssignmentOrder;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SetOrderPostRequestBody implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var AssignmentOrder|null $newAssignmentOrder The newAssignmentOrder property
    */
    private ?AssignmentOrder $newAssignmentOrder = null;
    
    /**
     * Instantiates a new setOrderPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SetOrderPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SetOrderPostRequestBody {
        return new SetOrderPostRequestBody();
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
            'newAssignmentOrder' => function (ParseNode $n) use ($o) { $o->setNewAssignmentOrder($n->getObjectValue(array(AssignmentOrder::class, 'createFromDiscriminatorValue'))); },
        ];
    }

    /**
     * Gets the newAssignmentOrder property value. The newAssignmentOrder property
     * @return AssignmentOrder|null
    */
    public function getNewAssignmentOrder(): ?AssignmentOrder {
        return $this->newAssignmentOrder;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('newAssignmentOrder', $this->newAssignmentOrder);
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
     * Sets the newAssignmentOrder property value. The newAssignmentOrder property
     *  @param AssignmentOrder|null $value Value to set for the newAssignmentOrder property.
    */
    public function setNewAssignmentOrder(?AssignmentOrder $value ): void {
        $this->newAssignmentOrder = $value;
    }

}
