<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UserTrainingEventInfo implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $displayName Display name of the training.
    */
    private ?string $displayName = null;
    
    /**
     * @var TrainingStatus|null $latestTrainingStatus Latest status of the training assigned to the user. Possible values are: unknown, assigned, inProgress, completed, overdue, unknownFutureValue.
    */
    private ?TrainingStatus $latestTrainingStatus = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var UserTrainingContentEventInfo|null $trainingAssignedProperties Event details of the training when it was assigned to the user.
    */
    private ?UserTrainingContentEventInfo $trainingAssignedProperties = null;
    
    /**
     * @var UserTrainingContentEventInfo|null $trainingCompletedProperties Event details of the training when it was completed by the user.
    */
    private ?UserTrainingContentEventInfo $trainingCompletedProperties = null;
    
    /**
     * @var UserTrainingContentEventInfo|null $trainingUpdatedProperties Event details of the training when it was updated/in-progress by the user.
    */
    private ?UserTrainingContentEventInfo $trainingUpdatedProperties = null;
    
    /**
     * Instantiates a new userTrainingEventInfo and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.userTrainingEventInfo');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UserTrainingEventInfo
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UserTrainingEventInfo {
        return new UserTrainingEventInfo();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the displayName property value. Display name of the training.
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
            'latestTrainingStatus' => function (ParseNode $n) use ($o) { $o->setLatestTrainingStatus($n->getEnumValue(TrainingStatus::class)); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
            'trainingAssignedProperties' => function (ParseNode $n) use ($o) { $o->setTrainingAssignedProperties($n->getObjectValue(array(UserTrainingContentEventInfo::class, 'createFromDiscriminatorValue'))); },
            'trainingCompletedProperties' => function (ParseNode $n) use ($o) { $o->setTrainingCompletedProperties($n->getObjectValue(array(UserTrainingContentEventInfo::class, 'createFromDiscriminatorValue'))); },
            'trainingUpdatedProperties' => function (ParseNode $n) use ($o) { $o->setTrainingUpdatedProperties($n->getObjectValue(array(UserTrainingContentEventInfo::class, 'createFromDiscriminatorValue'))); },
        ];
    }

    /**
     * Gets the latestTrainingStatus property value. Latest status of the training assigned to the user. Possible values are: unknown, assigned, inProgress, completed, overdue, unknownFutureValue.
     * @return TrainingStatus|null
    */
    public function getLatestTrainingStatus(): ?TrainingStatus {
        return $this->latestTrainingStatus;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the trainingAssignedProperties property value. Event details of the training when it was assigned to the user.
     * @return UserTrainingContentEventInfo|null
    */
    public function getTrainingAssignedProperties(): ?UserTrainingContentEventInfo {
        return $this->trainingAssignedProperties;
    }

    /**
     * Gets the trainingCompletedProperties property value. Event details of the training when it was completed by the user.
     * @return UserTrainingContentEventInfo|null
    */
    public function getTrainingCompletedProperties(): ?UserTrainingContentEventInfo {
        return $this->trainingCompletedProperties;
    }

    /**
     * Gets the trainingUpdatedProperties property value. Event details of the training when it was updated/in-progress by the user.
     * @return UserTrainingContentEventInfo|null
    */
    public function getTrainingUpdatedProperties(): ?UserTrainingContentEventInfo {
        return $this->trainingUpdatedProperties;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeEnumValue('latestTrainingStatus', $this->latestTrainingStatus);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeObjectValue('trainingAssignedProperties', $this->trainingAssignedProperties);
        $writer->writeObjectValue('trainingCompletedProperties', $this->trainingCompletedProperties);
        $writer->writeObjectValue('trainingUpdatedProperties', $this->trainingUpdatedProperties);
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
     * Sets the displayName property value. Display name of the training.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the latestTrainingStatus property value. Latest status of the training assigned to the user. Possible values are: unknown, assigned, inProgress, completed, overdue, unknownFutureValue.
     *  @param TrainingStatus|null $value Value to set for the latestTrainingStatus property.
    */
    public function setLatestTrainingStatus(?TrainingStatus $value ): void {
        $this->latestTrainingStatus = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the trainingAssignedProperties property value. Event details of the training when it was assigned to the user.
     *  @param UserTrainingContentEventInfo|null $value Value to set for the trainingAssignedProperties property.
    */
    public function setTrainingAssignedProperties(?UserTrainingContentEventInfo $value ): void {
        $this->trainingAssignedProperties = $value;
    }

    /**
     * Sets the trainingCompletedProperties property value. Event details of the training when it was completed by the user.
     *  @param UserTrainingContentEventInfo|null $value Value to set for the trainingCompletedProperties property.
    */
    public function setTrainingCompletedProperties(?UserTrainingContentEventInfo $value ): void {
        $this->trainingCompletedProperties = $value;
    }

    /**
     * Sets the trainingUpdatedProperties property value. Event details of the training when it was updated/in-progress by the user.
     *  @param UserTrainingContentEventInfo|null $value Value to set for the trainingUpdatedProperties property.
    */
    public function setTrainingUpdatedProperties(?UserTrainingContentEventInfo $value ): void {
        $this->trainingUpdatedProperties = $value;
    }

}
