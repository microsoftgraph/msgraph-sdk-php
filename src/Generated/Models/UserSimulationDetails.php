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
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class UserSimulationDetails implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new UserSimulationDetails and sets the default values.
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
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        $val = $this->getBackingStore()->get('additionalData');
        if (is_null($val) || is_array($val)) {
            /** @var array<string, mixed>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'additionalData'");
    }

    /**
     * Gets the assignedTrainingsCount property value. Number of trainings assigned to a user in an attack simulation and training campaign.
     * @return int|null
    */
    public function getAssignedTrainingsCount(): ?int {
        $val = $this->getBackingStore()->get('assignedTrainingsCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'assignedTrainingsCount'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
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
        $val = $this->getBackingStore()->get('completedTrainingsCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'completedTrainingsCount'");
    }

    /**
     * Gets the compromisedDateTime property value. Date and time of the compromising online action by a user in an attack simulation and training campaign.
     * @return DateTime|null
    */
    public function getCompromisedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('compromisedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'compromisedDateTime'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
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
        $val = $this->getBackingStore()->get('inProgressTrainingsCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'inProgressTrainingsCount'");
    }

    /**
     * Gets the isCompromised property value. Indicates whether a user was compromised in an attack simulation and training campaign.
     * @return bool|null
    */
    public function getIsCompromised(): ?bool {
        $val = $this->getBackingStore()->get('isCompromised');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isCompromised'");
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        $val = $this->getBackingStore()->get('odataType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'odataType'");
    }

    /**
     * Gets the reportedPhishDateTime property value. Date and time when a user reported the delivered payload as phishing in the attack simulation and training campaign.
     * @return DateTime|null
    */
    public function getReportedPhishDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('reportedPhishDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'reportedPhishDateTime'");
    }

    /**
     * Gets the simulationEvents property value. List of simulation events of a user in the attack simulation and training campaign.
     * @return array<UserSimulationEventInfo>|null
    */
    public function getSimulationEvents(): ?array {
        $val = $this->getBackingStore()->get('simulationEvents');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, UserSimulationEventInfo::class);
            /** @var array<UserSimulationEventInfo>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'simulationEvents'");
    }

    /**
     * Gets the simulationUser property value. User in an attack simulation and training campaign.
     * @return AttackSimulationUser|null
    */
    public function getSimulationUser(): ?AttackSimulationUser {
        $val = $this->getBackingStore()->get('simulationUser');
        if (is_null($val) || $val instanceof AttackSimulationUser) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'simulationUser'");
    }

    /**
     * Gets the trainingEvents property value. List of training events of a user in the attack simulation and training campaign.
     * @return array<UserTrainingEventInfo>|null
    */
    public function getTrainingEvents(): ?array {
        $val = $this->getBackingStore()->get('trainingEvents');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, UserTrainingEventInfo::class);
            /** @var array<UserTrainingEventInfo>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'trainingEvents'");
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
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
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
     * Sets the BackingStore property value. Stores model information.
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
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
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
