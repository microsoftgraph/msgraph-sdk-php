<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TrainingNotificationSetting extends EndUserNotificationSetting implements Parsable 
{
    /**
     * Instantiates a new trainingNotificationSetting and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.trainingNotificationSetting');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TrainingNotificationSetting
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TrainingNotificationSetting {
        return new TrainingNotificationSetting();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'trainingAssignment' => fn(ParseNode $n) => $o->setTrainingAssignment($n->getObjectValue([BaseEndUserNotification::class, 'createFromDiscriminatorValue'])),
            'trainingReminder' => fn(ParseNode $n) => $o->setTrainingReminder($n->getObjectValue([TrainingReminderNotification::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the trainingAssignment property value. The trainingAssignment property
     * @return BaseEndUserNotification|null
    */
    public function getTrainingAssignment(): ?BaseEndUserNotification {
        $val = $this->getBackingStore()->get('trainingAssignment');
        if (is_null($val) || $val instanceof BaseEndUserNotification) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'trainingAssignment'");
    }

    /**
     * Gets the trainingReminder property value. The trainingReminder property
     * @return TrainingReminderNotification|null
    */
    public function getTrainingReminder(): ?TrainingReminderNotification {
        $val = $this->getBackingStore()->get('trainingReminder');
        if (is_null($val) || $val instanceof TrainingReminderNotification) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'trainingReminder'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('trainingAssignment', $this->getTrainingAssignment());
        $writer->writeObjectValue('trainingReminder', $this->getTrainingReminder());
    }

    /**
     * Sets the trainingAssignment property value. The trainingAssignment property
     * @param BaseEndUserNotification|null $value Value to set for the trainingAssignment property.
    */
    public function setTrainingAssignment(?BaseEndUserNotification $value): void {
        $this->getBackingStore()->set('trainingAssignment', $value);
    }

    /**
     * Sets the trainingReminder property value. The trainingReminder property
     * @param TrainingReminderNotification|null $value Value to set for the trainingReminder property.
    */
    public function setTrainingReminder(?TrainingReminderNotification $value): void {
        $this->getBackingStore()->set('trainingReminder', $value);
    }

}
