<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MicrosoftManagedTrainingSetting extends TrainingSetting implements Parsable 
{
    /**
     * Instantiates a new microsoftManagedTrainingSetting and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.microsoftManagedTrainingSetting');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MicrosoftManagedTrainingSetting
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MicrosoftManagedTrainingSetting {
        return new MicrosoftManagedTrainingSetting();
    }

    /**
     * Gets the completionDateTime property value. The completion date for the training. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
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
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'completionDateTime' => fn(ParseNode $n) => $o->setCompletionDateTime($n->getDateTimeValue()),
            'trainingCompletionDuration' => fn(ParseNode $n) => $o->setTrainingCompletionDuration($n->getEnumValue(TrainingCompletionDuration::class)),
        ]);
    }

    /**
     * Gets the trainingCompletionDuration property value. The training completion duration that needs to be provided before scheduling the training. The possible values are: week, fortnite, month, unknownFutureValue.
     * @return TrainingCompletionDuration|null
    */
    public function getTrainingCompletionDuration(): ?TrainingCompletionDuration {
        $val = $this->getBackingStore()->get('trainingCompletionDuration');
        if (is_null($val) || $val instanceof TrainingCompletionDuration) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'trainingCompletionDuration'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateTimeValue('completionDateTime', $this->getCompletionDateTime());
        $writer->writeEnumValue('trainingCompletionDuration', $this->getTrainingCompletionDuration());
    }

    /**
     * Sets the completionDateTime property value. The completion date for the training. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @param DateTime|null $value Value to set for the completionDateTime property.
    */
    public function setCompletionDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('completionDateTime', $value);
    }

    /**
     * Sets the trainingCompletionDuration property value. The training completion duration that needs to be provided before scheduling the training. The possible values are: week, fortnite, month, unknownFutureValue.
     * @param TrainingCompletionDuration|null $value Value to set for the trainingCompletionDuration property.
    */
    public function setTrainingCompletionDuration(?TrainingCompletionDuration $value): void {
        $this->getBackingStore()->set('trainingCompletionDuration', $value);
    }

}
