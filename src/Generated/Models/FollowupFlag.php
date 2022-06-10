<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class FollowupFlag implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var DateTimeTimeZone|null $completedDateTime The date and time that the follow-up was finished.
    */
    private ?DateTimeTimeZone $completedDateTime = null;
    
    /**
     * @var DateTimeTimeZone|null $dueDateTime The date and time that the follow up is to be finished. Note: To set the due date, you must also specify the startDateTime; otherwise, you will get a 400 Bad Request response.
    */
    private ?DateTimeTimeZone $dueDateTime = null;
    
    /**
     * @var FollowupFlagStatus|null $flagStatus The status for follow-up for an item. Possible values are notFlagged, complete, and flagged.
    */
    private ?FollowupFlagStatus $flagStatus = null;
    
    /**
     * @var DateTimeTimeZone|null $startDateTime The date and time that the follow-up is to begin.
    */
    private ?DateTimeTimeZone $startDateTime = null;
    
    /**
     * Instantiates a new followupFlag and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return FollowupFlag
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): FollowupFlag {
        return new FollowupFlag();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the completedDateTime property value. The date and time that the follow-up was finished.
     * @return DateTimeTimeZone|null
    */
    public function getCompletedDateTime(): ?DateTimeTimeZone {
        return $this->completedDateTime;
    }

    /**
     * Gets the dueDateTime property value. The date and time that the follow up is to be finished. Note: To set the due date, you must also specify the startDateTime; otherwise, you will get a 400 Bad Request response.
     * @return DateTimeTimeZone|null
    */
    public function getDueDateTime(): ?DateTimeTimeZone {
        return $this->dueDateTime;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'completedDateTime' => function (ParseNode $n) use ($o) { $o->setCompletedDateTime($n->getObjectValue(array(DateTimeTimeZone::class, 'createFromDiscriminatorValue'))); },
            'dueDateTime' => function (ParseNode $n) use ($o) { $o->setDueDateTime($n->getObjectValue(array(DateTimeTimeZone::class, 'createFromDiscriminatorValue'))); },
            'flagStatus' => function (ParseNode $n) use ($o) { $o->setFlagStatus($n->getEnumValue(FollowupFlagStatus::class)); },
            'startDateTime' => function (ParseNode $n) use ($o) { $o->setStartDateTime($n->getObjectValue(array(DateTimeTimeZone::class, 'createFromDiscriminatorValue'))); },
        ];
    }

    /**
     * Gets the flagStatus property value. The status for follow-up for an item. Possible values are notFlagged, complete, and flagged.
     * @return FollowupFlagStatus|null
    */
    public function getFlagStatus(): ?FollowupFlagStatus {
        return $this->flagStatus;
    }

    /**
     * Gets the startDateTime property value. The date and time that the follow-up is to begin.
     * @return DateTimeTimeZone|null
    */
    public function getStartDateTime(): ?DateTimeTimeZone {
        return $this->startDateTime;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('completedDateTime', $this->completedDateTime);
        $writer->writeObjectValue('dueDateTime', $this->dueDateTime);
        $writer->writeEnumValue('flagStatus', $this->flagStatus);
        $writer->writeObjectValue('startDateTime', $this->startDateTime);
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
     * Sets the completedDateTime property value. The date and time that the follow-up was finished.
     *  @param DateTimeTimeZone|null $value Value to set for the completedDateTime property.
    */
    public function setCompletedDateTime(?DateTimeTimeZone $value ): void {
        $this->completedDateTime = $value;
    }

    /**
     * Sets the dueDateTime property value. The date and time that the follow up is to be finished. Note: To set the due date, you must also specify the startDateTime; otherwise, you will get a 400 Bad Request response.
     *  @param DateTimeTimeZone|null $value Value to set for the dueDateTime property.
    */
    public function setDueDateTime(?DateTimeTimeZone $value ): void {
        $this->dueDateTime = $value;
    }

    /**
     * Sets the flagStatus property value. The status for follow-up for an item. Possible values are notFlagged, complete, and flagged.
     *  @param FollowupFlagStatus|null $value Value to set for the flagStatus property.
    */
    public function setFlagStatus(?FollowupFlagStatus $value ): void {
        $this->flagStatus = $value;
    }

    /**
     * Sets the startDateTime property value. The date and time that the follow-up is to begin.
     *  @param DateTimeTimeZone|null $value Value to set for the startDateTime property.
    */
    public function setStartDateTime(?DateTimeTimeZone $value ): void {
        $this->startDateTime = $value;
    }

}
