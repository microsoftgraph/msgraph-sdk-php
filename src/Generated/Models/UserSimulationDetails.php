<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UserSimulationDetails implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var int|null $assignedTrainingsCount Number of trainings assigned to a user in an attack simulation and training campaign.
    */
    private ?int $assignedTrainingsCount = null;
    
    /**
     * @var int|null $completedTrainingsCount Number of trainings completed by a user in an attack simulation and training campaign.
    */
    private ?int $completedTrainingsCount = null;
    
    /**
     * @var DateTime|null $compromisedDateTime Date and time of the compromising online action by a user in an attack simulation and training campaign.
    */
    private ?DateTime $compromisedDateTime = null;
    
    /**
     * @var int|null $inProgressTrainingsCount Number of trainings in progress by a user in an attack simulation and training campaign.
    */
    private ?int $inProgressTrainingsCount = null;
    
    /**
     * @var bool|null $isCompromised Indicates whether a user was compromised in an attack simulation and training campaign.
    */
    private ?bool $isCompromised = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var DateTime|null $reportedPhishDateTime Date and time when a user reported the delivered payload as phishing in the attack simulation and training campaign.
    */
    private ?DateTime $reportedPhishDateTime = null;
    
    /**
     * @var array<UserSimulationEventInfo>|null $simulationEvents List of simulation events of a user in the attack simulation and training campaign.
    */
    private ?array $simulationEvents = null;
    
    /**
     * @var AttackSimulationUser|null $simulationUser User in an attack simulation and training campaign.
    */
    private ?AttackSimulationUser $simulationUser = null;
    
    /**
     * @var array<UserTrainingEventInfo>|null $trainingEvents List of training events of a user in the attack simulation and training campaign.
    */
    private ?array $trainingEvents = null;
    
    /**
     * Instantiates a new userSimulationDetails and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.userSimulationDetails');
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
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the assignedTrainingsCount property value. Number of trainings assigned to a user in an attack simulation and training campaign.
     * @return int|null
    */
    public function getAssignedTrainingsCount(): ?int {
        return $this->assignedTrainingsCount;
    }

    /**
     * Gets the completedTrainingsCount property value. Number of trainings completed by a user in an attack simulation and training campaign.
     * @return int|null
    */
    public function getCompletedTrainingsCount(): ?int {
        return $this->completedTrainingsCount;
    }

    /**
     * Gets the compromisedDateTime property value. Date and time of the compromising online action by a user in an attack simulation and training campaign.
     * @return DateTime|null
    */
    public function getCompromisedDateTime(): ?DateTime {
        return $this->compromisedDateTime;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'assignedTrainingsCount' => function (ParseNode $n) use ($o) { $o->setAssignedTrainingsCount($n->getIntegerValue()); },
            'completedTrainingsCount' => function (ParseNode $n) use ($o) { $o->setCompletedTrainingsCount($n->getIntegerValue()); },
            'compromisedDateTime' => function (ParseNode $n) use ($o) { $o->setCompromisedDateTime($n->getDateTimeValue()); },
            'inProgressTrainingsCount' => function (ParseNode $n) use ($o) { $o->setInProgressTrainingsCount($n->getIntegerValue()); },
            'isCompromised' => function (ParseNode $n) use ($o) { $o->setIsCompromised($n->getBooleanValue()); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
            'reportedPhishDateTime' => function (ParseNode $n) use ($o) { $o->setReportedPhishDateTime($n->getDateTimeValue()); },
            'simulationEvents' => function (ParseNode $n) use ($o) { $o->setSimulationEvents($n->getCollectionOfObjectValues(array(UserSimulationEventInfo::class, 'createFromDiscriminatorValue'))); },
            'simulationUser' => function (ParseNode $n) use ($o) { $o->setSimulationUser($n->getObjectValue(array(AttackSimulationUser::class, 'createFromDiscriminatorValue'))); },
            'trainingEvents' => function (ParseNode $n) use ($o) { $o->setTrainingEvents($n->getCollectionOfObjectValues(array(UserTrainingEventInfo::class, 'createFromDiscriminatorValue'))); },
        ];
    }

    /**
     * Gets the inProgressTrainingsCount property value. Number of trainings in progress by a user in an attack simulation and training campaign.
     * @return int|null
    */
    public function getInProgressTrainingsCount(): ?int {
        return $this->inProgressTrainingsCount;
    }

    /**
     * Gets the isCompromised property value. Indicates whether a user was compromised in an attack simulation and training campaign.
     * @return bool|null
    */
    public function getIsCompromised(): ?bool {
        return $this->isCompromised;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the reportedPhishDateTime property value. Date and time when a user reported the delivered payload as phishing in the attack simulation and training campaign.
     * @return DateTime|null
    */
    public function getReportedPhishDateTime(): ?DateTime {
        return $this->reportedPhishDateTime;
    }

    /**
     * Gets the simulationEvents property value. List of simulation events of a user in the attack simulation and training campaign.
     * @return array<UserSimulationEventInfo>|null
    */
    public function getSimulationEvents(): ?array {
        return $this->simulationEvents;
    }

    /**
     * Gets the simulationUser property value. User in an attack simulation and training campaign.
     * @return AttackSimulationUser|null
    */
    public function getSimulationUser(): ?AttackSimulationUser {
        return $this->simulationUser;
    }

    /**
     * Gets the trainingEvents property value. List of training events of a user in the attack simulation and training campaign.
     * @return array<UserTrainingEventInfo>|null
    */
    public function getTrainingEvents(): ?array {
        return $this->trainingEvents;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('assignedTrainingsCount', $this->assignedTrainingsCount);
        $writer->writeIntegerValue('completedTrainingsCount', $this->completedTrainingsCount);
        $writer->writeDateTimeValue('compromisedDateTime', $this->compromisedDateTime);
        $writer->writeIntegerValue('inProgressTrainingsCount', $this->inProgressTrainingsCount);
        $writer->writeBooleanValue('isCompromised', $this->isCompromised);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeDateTimeValue('reportedPhishDateTime', $this->reportedPhishDateTime);
        $writer->writeCollectionOfObjectValues('simulationEvents', $this->simulationEvents);
        $writer->writeObjectValue('simulationUser', $this->simulationUser);
        $writer->writeCollectionOfObjectValues('trainingEvents', $this->trainingEvents);
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
     * Sets the assignedTrainingsCount property value. Number of trainings assigned to a user in an attack simulation and training campaign.
     *  @param int|null $value Value to set for the assignedTrainingsCount property.
    */
    public function setAssignedTrainingsCount(?int $value ): void {
        $this->assignedTrainingsCount = $value;
    }

    /**
     * Sets the completedTrainingsCount property value. Number of trainings completed by a user in an attack simulation and training campaign.
     *  @param int|null $value Value to set for the completedTrainingsCount property.
    */
    public function setCompletedTrainingsCount(?int $value ): void {
        $this->completedTrainingsCount = $value;
    }

    /**
     * Sets the compromisedDateTime property value. Date and time of the compromising online action by a user in an attack simulation and training campaign.
     *  @param DateTime|null $value Value to set for the compromisedDateTime property.
    */
    public function setCompromisedDateTime(?DateTime $value ): void {
        $this->compromisedDateTime = $value;
    }

    /**
     * Sets the inProgressTrainingsCount property value. Number of trainings in progress by a user in an attack simulation and training campaign.
     *  @param int|null $value Value to set for the inProgressTrainingsCount property.
    */
    public function setInProgressTrainingsCount(?int $value ): void {
        $this->inProgressTrainingsCount = $value;
    }

    /**
     * Sets the isCompromised property value. Indicates whether a user was compromised in an attack simulation and training campaign.
     *  @param bool|null $value Value to set for the isCompromised property.
    */
    public function setIsCompromised(?bool $value ): void {
        $this->isCompromised = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the reportedPhishDateTime property value. Date and time when a user reported the delivered payload as phishing in the attack simulation and training campaign.
     *  @param DateTime|null $value Value to set for the reportedPhishDateTime property.
    */
    public function setReportedPhishDateTime(?DateTime $value ): void {
        $this->reportedPhishDateTime = $value;
    }

    /**
     * Sets the simulationEvents property value. List of simulation events of a user in the attack simulation and training campaign.
     *  @param array<UserSimulationEventInfo>|null $value Value to set for the simulationEvents property.
    */
    public function setSimulationEvents(?array $value ): void {
        $this->simulationEvents = $value;
    }

    /**
     * Sets the simulationUser property value. User in an attack simulation and training campaign.
     *  @param AttackSimulationUser|null $value Value to set for the simulationUser property.
    */
    public function setSimulationUser(?AttackSimulationUser $value ): void {
        $this->simulationUser = $value;
    }

    /**
     * Sets the trainingEvents property value. List of training events of a user in the attack simulation and training campaign.
     *  @param array<UserTrainingEventInfo>|null $value Value to set for the trainingEvents property.
    */
    public function setTrainingEvents(?array $value ): void {
        $this->trainingEvents = $value;
    }

}
