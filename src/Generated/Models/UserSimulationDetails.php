<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class UserSimulationDetails implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new userSimulationDetails and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UserSimulationDetails
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UserSimulationDetails {
        return new UserSimulationDetails();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): ?array {
        return $this->getBackingStore()->get('additionalData');
    }

    /**
     * Gets the assignedTrainingsCount property value. Number of trainings assigned to a user in an attack simulation and training campaign.
     * @return int|null
    */
    public function getAssignedTrainingsCount(): ?int {
        return $this->getBackingStore()->get('assignedTrainingsCount');
    }

    /**
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the completedTrainingsCount property value. Number of trainings completed by a user in an attack simulation and training campaign.
     * @return int|null
    */
    public function getCompletedTrainingsCount(): ?int {
        return $this->getBackingStore()->get('completedTrainingsCount');
    }

    /**
     * Gets the compromisedDateTime property value. Date and time of the compromising online action by a user in an attack simulation and training campaign.
     * @return DateTime|null
    */
    public function getCompromisedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('compromisedDateTime');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'assignedTrainingsCount' => fn(ParseNode $n) => $o->setAssignedTrainingsCount($n->getIntegerValue()),
            'completedTrainingsCount' => fn(ParseNode $n) => $o->setCompletedTrainingsCount($n->getIntegerValue()),
            'compromisedDateTime' => fn(ParseNode $n) => $o->setCompromisedDateTime($n->getDateTimeValue()),
            'inProgressTrainingsCount' => fn(ParseNode $n) => $o->setInProgressTrainingsCount($n->getIntegerValue()),
            'isCompromised' => fn(ParseNode $n) => $o->setIsCompromised($n->getBooleanValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'reportedPhishDateTime' => fn(ParseNode $n) => $o->setReportedPhishDateTime($n->getDateTimeValue()),
            'simulationEvents' => fn(ParseNode $n) => $o->setSimulationEvents($n->getCollectionOfObjectValues([UserSimulationEventInfo::class, 'createFromDiscriminatorValue'])),
            'simulationUser' => fn(ParseNode $n) => $o->setSimulationUser($n->getObjectValue([AttackSimulationUser::class, 'createFromDiscriminatorValue'])),
            'trainingEvents' => fn(ParseNode $n) => $o->setTrainingEvents($n->getCollectionOfObjectValues([UserTrainingEventInfo::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the inProgressTrainingsCount property value. Number of trainings in progress by a user in an attack simulation and training campaign.
     * @return int|null
    */
    public function getInProgressTrainingsCount(): ?int {
        return $this->getBackingStore()->get('inProgressTrainingsCount');
    }

    /**
     * Gets the isCompromised property value. Indicates whether a user was compromised in an attack simulation and training campaign.
     * @return bool|null
    */
    public function getIsCompromised(): ?bool {
        return $this->getBackingStore()->get('isCompromised');
    }

    /**
     * Gets the @odata.type property value. 
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Gets the reportedPhishDateTime property value. Date and time when a user reported the delivered payload as phishing in the attack simulation and training campaign.
     * @return DateTime|null
    */
    public function getReportedPhishDateTime(): ?DateTime {
        return $this->getBackingStore()->get('reportedPhishDateTime');
    }

    /**
     * Gets the simulationEvents property value. List of simulation events of a user in the attack simulation and training campaign.
     * @return array<UserSimulationEventInfo>|null
    */
    public function getSimulationEvents(): ?array {
        return $this->getBackingStore()->get('simulationEvents');
    }

    /**
     * Gets the simulationUser property value. User in an attack simulation and training campaign.
     * @return AttackSimulationUser|null
    */
    public function getSimulationUser(): ?AttackSimulationUser {
        return $this->getBackingStore()->get('simulationUser');
    }

    /**
     * Gets the trainingEvents property value. List of training events of a user in the attack simulation and training campaign.
     * @return array<UserTrainingEventInfo>|null
    */
    public function getTrainingEvents(): ?array {
        return $this->getBackingStore()->get('trainingEvents');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('assignedTrainingsCount', $this->getAssignedTrainingsCount());
        $writer->writeIntegerValue('completedTrainingsCount', $this->getCompletedTrainingsCount());
        $writer->writeDateTimeValue('compromisedDateTime', $this->getCompromisedDateTime());
        $writer->writeIntegerValue('inProgressTrainingsCount', $this->getInProgressTrainingsCount());
        $writer->writeBooleanValue('isCompromised', $this->getIsCompromised());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeDateTimeValue('reportedPhishDateTime', $this->getReportedPhishDateTime());
        $writer->writeCollectionOfObjectValues('simulationEvents', $this->getSimulationEvents());
        $writer->writeObjectValue('simulationUser', $this->getSimulationUser());
        $writer->writeCollectionOfObjectValues('trainingEvents', $this->getTrainingEvents());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the assignedTrainingsCount property value. Number of trainings assigned to a user in an attack simulation and training campaign.
     * @param int|null $value Value to set for the assignedTrainingsCount property.
    */
    public function setAssignedTrainingsCount(?int $value): void {
        $this->getBackingStore()->set('assignedTrainingsCount', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the completedTrainingsCount property value. Number of trainings completed by a user in an attack simulation and training campaign.
     * @param int|null $value Value to set for the completedTrainingsCount property.
    */
    public function setCompletedTrainingsCount(?int $value): void {
        $this->getBackingStore()->set('completedTrainingsCount', $value);
    }

    /**
     * Sets the compromisedDateTime property value. Date and time of the compromising online action by a user in an attack simulation and training campaign.
     * @param DateTime|null $value Value to set for the compromisedDateTime property.
    */
    public function setCompromisedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('compromisedDateTime', $value);
    }

    /**
     * Sets the inProgressTrainingsCount property value. Number of trainings in progress by a user in an attack simulation and training campaign.
     * @param int|null $value Value to set for the inProgressTrainingsCount property.
    */
    public function setInProgressTrainingsCount(?int $value): void {
        $this->getBackingStore()->set('inProgressTrainingsCount', $value);
    }

    /**
     * Sets the isCompromised property value. Indicates whether a user was compromised in an attack simulation and training campaign.
     * @param bool|null $value Value to set for the isCompromised property.
    */
    public function setIsCompromised(?bool $value): void {
        $this->getBackingStore()->set('isCompromised', $value);
    }

    /**
     * Sets the @odata.type property value. 
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the reportedPhishDateTime property value. Date and time when a user reported the delivered payload as phishing in the attack simulation and training campaign.
     * @param DateTime|null $value Value to set for the reportedPhishDateTime property.
    */
    public function setReportedPhishDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('reportedPhishDateTime', $value);
    }

    /**
     * Sets the simulationEvents property value. List of simulation events of a user in the attack simulation and training campaign.
     * @param array<UserSimulationEventInfo>|null $value Value to set for the simulationEvents property.
    */
    public function setSimulationEvents(?array $value): void {
        $this->getBackingStore()->set('simulationEvents', $value);
    }

    /**
     * Sets the simulationUser property value. User in an attack simulation and training campaign.
     * @param AttackSimulationUser|null $value Value to set for the simulationUser property.
    */
    public function setSimulationUser(?AttackSimulationUser $value): void {
        $this->getBackingStore()->set('simulationUser', $value);
    }

    /**
     * Sets the trainingEvents property value. List of training events of a user in the attack simulation and training campaign.
     * @param array<UserTrainingEventInfo>|null $value Value to set for the trainingEvents property.
    */
    public function setTrainingEvents(?array $value): void {
        $this->getBackingStore()->set('trainingEvents', $value);
    }

}
