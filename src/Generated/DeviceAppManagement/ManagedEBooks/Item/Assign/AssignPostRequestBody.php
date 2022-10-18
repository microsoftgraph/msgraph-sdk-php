<?php

namespace Microsoft\Graph\Generated\DeviceAppManagement\ManagedEBooks\Item\Assign;

use Microsoft\Graph\Generated\Models\ManagedEBookAssignment;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AssignPostRequestBody implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var array<ManagedEBookAssignment>|null $managedEBookAssignments The managedEBookAssignments property
    */
    private ?array $managedEBookAssignments = null;
    
    /**
     * Instantiates a new assignPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AssignPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AssignPostRequestBody {
        return new AssignPostRequestBody();
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
            'managedEBookAssignments' => fn(ParseNode $n) => $o->setManagedEBookAssignments($n->getCollectionOfObjectValues([ManagedEBookAssignment::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the managedEBookAssignments property value. The managedEBookAssignments property
     * @return array<ManagedEBookAssignment>|null
    */
    public function getManagedEBookAssignments(): ?array {
        return $this->managedEBookAssignments;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('managedEBookAssignments', $this->managedEBookAssignments);
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
     * Sets the managedEBookAssignments property value. The managedEBookAssignments property
     *  @param array<ManagedEBookAssignment>|null $value Value to set for the managedEBookAssignments property.
    */
    public function setManagedEBookAssignments(?array $value ): void {
        $this->managedEBookAssignments = $value;
    }

}
