<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class MicrosoftCustomTrainingSetting extends TrainingSetting implements Parsable 
{
    /**
     * Instantiates a new microsoftCustomTrainingSetting and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.microsoftCustomTrainingSetting');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MicrosoftCustomTrainingSetting
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MicrosoftCustomTrainingSetting {
        return new MicrosoftCustomTrainingSetting();
    }

    /**
     * Gets the completionDateTime property value. The completionDateTime property
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
            'trainingAssignmentMappings' => fn(ParseNode $n) => $o->setTrainingAssignmentMappings($n->getCollectionOfObjectValues([MicrosoftTrainingAssignmentMapping::class, 'createFromDiscriminatorValue'])),
            'trainingCompletionDuration' => fn(ParseNode $n) => $o->setTrainingCompletionDuration($n->getEnumValue(TrainingCompletionDuration::class)),
        ]);
    }

    /**
     * Gets the trainingAssignmentMappings property value. The trainingAssignmentMappings property
     * @return array<MicrosoftTrainingAssignmentMapping>|null
    */
    public function getTrainingAssignmentMappings(): ?array {
        $val = $this->getBackingStore()->get('trainingAssignmentMappings');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, MicrosoftTrainingAssignmentMapping::class);
            /** @var array<MicrosoftTrainingAssignmentMapping>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'trainingAssignmentMappings'");
    }

    /**
     * Gets the trainingCompletionDuration property value. The trainingCompletionDuration property
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
        $writer->writeCollectionOfObjectValues('trainingAssignmentMappings', $this->getTrainingAssignmentMappings());
        $writer->writeEnumValue('trainingCompletionDuration', $this->getTrainingCompletionDuration());
    }

    /**
     * Sets the completionDateTime property value. The completionDateTime property
     * @param DateTime|null $value Value to set for the completionDateTime property.
    */
    public function setCompletionDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('completionDateTime', $value);
    }

    /**
     * Sets the trainingAssignmentMappings property value. The trainingAssignmentMappings property
     * @param array<MicrosoftTrainingAssignmentMapping>|null $value Value to set for the trainingAssignmentMappings property.
    */
    public function setTrainingAssignmentMappings(?array $value): void {
        $this->getBackingStore()->set('trainingAssignmentMappings', $value);
    }

    /**
     * Sets the trainingCompletionDuration property value. The trainingCompletionDuration property
     * @param TrainingCompletionDuration|null $value Value to set for the trainingCompletionDuration property.
    */
    public function setTrainingCompletionDuration(?TrainingCompletionDuration $value): void {
        $this->getBackingStore()->set('trainingCompletionDuration', $value);
    }

}
