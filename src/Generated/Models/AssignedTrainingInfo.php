<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AssignedTrainingInfo implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var int|null $assignedUserCount The assignedUserCount property
    */
    private ?int $assignedUserCount = null;
    
    /**
     * @var int|null $completedUserCount The completedUserCount property
    */
    private ?int $completedUserCount = null;
    
    /**
     * @var string|null $displayName The displayName property
    */
    private ?string $displayName = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * Instantiates a new assignedTrainingInfo and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.assignedTrainingInfo');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AssignedTrainingInfo
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AssignedTrainingInfo {
        return new AssignedTrainingInfo();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the assignedUserCount property value. The assignedUserCount property
     * @return int|null
    */
    public function getAssignedUserCount(): ?int {
        return $this->assignedUserCount;
    }

    /**
     * Gets the completedUserCount property value. The completedUserCount property
     * @return int|null
    */
    public function getCompletedUserCount(): ?int {
        return $this->completedUserCount;
    }

    /**
     * Gets the displayName property value. The displayName property
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
            'assignedUserCount' => function (ParseNode $n) use ($o) { $o->setAssignedUserCount($n->getIntegerValue()); },
            'completedUserCount' => function (ParseNode $n) use ($o) { $o->setCompletedUserCount($n->getIntegerValue()); },
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
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
        $writer->writeIntegerValue('assignedUserCount', $this->assignedUserCount);
        $writer->writeIntegerValue('completedUserCount', $this->completedUserCount);
        $writer->writeStringValue('displayName', $this->displayName);
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
     * Sets the assignedUserCount property value. The assignedUserCount property
     *  @param int|null $value Value to set for the assignedUserCount property.
    */
    public function setAssignedUserCount(?int $value ): void {
        $this->assignedUserCount = $value;
    }

    /**
     * Sets the completedUserCount property value. The completedUserCount property
     *  @param int|null $value Value to set for the completedUserCount property.
    */
    public function setCompletedUserCount(?int $value ): void {
        $this->completedUserCount = $value;
    }

    /**
     * Sets the displayName property value. The displayName property
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

}
