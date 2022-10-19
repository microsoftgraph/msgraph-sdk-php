<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TrainingEventsContent implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var array<AssignedTrainingInfo>|null $assignedTrainingsInfos List of assigned trainings and their information in an attack simulation and training campaign.
    */
    private ?array $assignedTrainingsInfos = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var int|null $trainingsAssignedUserCount Number of users who were assigned trainings in an attack simulation and training campaign.
    */
    private ?int $trainingsAssignedUserCount = null;
    
    /**
     * Instantiates a new trainingEventsContent and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.trainingEventsContent');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TrainingEventsContent
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TrainingEventsContent {
        return new TrainingEventsContent();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the assignedTrainingsInfos property value. List of assigned trainings and their information in an attack simulation and training campaign.
     * @return array<AssignedTrainingInfo>|null
    */
    public function getAssignedTrainingsInfos(): ?array {
        return $this->assignedTrainingsInfos;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'assignedTrainingsInfos' => fn(ParseNode $n) => $o->setAssignedTrainingsInfos($n->getCollectionOfObjectValues([AssignedTrainingInfo::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'trainingsAssignedUserCount' => fn(ParseNode $n) => $o->setTrainingsAssignedUserCount($n->getIntegerValue()),
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
     * Gets the trainingsAssignedUserCount property value. Number of users who were assigned trainings in an attack simulation and training campaign.
     * @return int|null
    */
    public function getTrainingsAssignedUserCount(): ?int {
        return $this->trainingsAssignedUserCount;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('assignedTrainingsInfos', $this->assignedTrainingsInfos);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeIntegerValue('trainingsAssignedUserCount', $this->trainingsAssignedUserCount);
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
     * Sets the assignedTrainingsInfos property value. List of assigned trainings and their information in an attack simulation and training campaign.
     *  @param array<AssignedTrainingInfo>|null $value Value to set for the assignedTrainingsInfos property.
    */
    public function setAssignedTrainingsInfos(?array $value ): void {
        $this->assignedTrainingsInfos = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the trainingsAssignedUserCount property value. Number of users who were assigned trainings in an attack simulation and training campaign.
     *  @param int|null $value Value to set for the trainingsAssignedUserCount property.
    */
    public function setTrainingsAssignedUserCount(?int $value ): void {
        $this->trainingsAssignedUserCount = $value;
    }

}
