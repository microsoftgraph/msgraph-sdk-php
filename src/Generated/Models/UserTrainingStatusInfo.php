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

class UserTrainingStatusInfo implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new userTrainingStatusInfo and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UserTrainingStatusInfo
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UserTrainingStatusInfo {
        return new UserTrainingStatusInfo();
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
     * Gets the assignedDateTime property value. Date and time of assignment of the training to the user.
     * @return DateTime|null
    */
    public function getAssignedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('assignedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'assignedDateTime'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the completionDateTime property value. Date and time of completion of the training by the user.
     * @return DateTime|null
    */
    public function getCompletionDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('completionDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'completionDateTime'");
    }

    /**
     * Gets the displayName property value. Display name of the assigned training.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        $val = $this->getBackingStore()->get('displayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'displayName'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'assignedDateTime' => fn(ParseNode $n) => $o->setAssignedDateTime($n->getDateTimeValue()),
            'completionDateTime' => fn(ParseNode $n) => $o->setCompletionDateTime($n->getDateTimeValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'trainingStatus' => fn(ParseNode $n) => $o->setTrainingStatus($n->getEnumValue(TrainingStatus::class)),
        ];
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
     * Gets the trainingStatus property value. The status of the training assigned to the user. Possible values are: unknown, assigned, inProgress, completed, overdue, unknownFutureValue.
     * @return TrainingStatus|null
    */
    public function getTrainingStatus(): ?TrainingStatus {
        $val = $this->getBackingStore()->get('trainingStatus');
        if (is_null($val) || $val instanceof TrainingStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'trainingStatus'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeDateTimeValue('assignedDateTime', $this->getAssignedDateTime());
        $writer->writeDateTimeValue('completionDateTime', $this->getCompletionDateTime());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeEnumValue('trainingStatus', $this->getTrainingStatus());
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
     * Sets the assignedDateTime property value. Date and time of assignment of the training to the user.
     * @param DateTime|null $value Value to set for the assignedDateTime property.
    */
    public function setAssignedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('assignedDateTime', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the completionDateTime property value. Date and time of completion of the training by the user.
     * @param DateTime|null $value Value to set for the completionDateTime property.
    */
    public function setCompletionDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('completionDateTime', $value);
    }

    /**
     * Sets the displayName property value. Display name of the assigned training.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the trainingStatus property value. The status of the training assigned to the user. Possible values are: unknown, assigned, inProgress, completed, overdue, unknownFutureValue.
     * @param TrainingStatus|null $value Value to set for the trainingStatus property.
    */
    public function setTrainingStatus(?TrainingStatus $value): void {
        $this->getBackingStore()->set('trainingStatus', $value);
    }

}
