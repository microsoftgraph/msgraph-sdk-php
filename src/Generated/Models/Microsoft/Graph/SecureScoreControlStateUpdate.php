<?php

namespace Microsoft\Graph\Generated\Models\Microsoft\Graph;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SecureScoreControlStateUpdate implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var string|null $assignedTo Assigns the control to the user who will take the action. */
    private ?string $assignedTo = null;
    
    /** @var string|null $comment Provides optional comment about the control. */
    private ?string $comment = null;
    
    /** @var string|null $state State of the control, which can be modified via a PATCH command (for example, ignored, thirdParty). */
    private ?string $state = null;
    
    /** @var string|null $updatedBy ID of the user who updated tenant state. */
    private ?string $updatedBy = null;
    
    /** @var DateTime|null $updatedDateTime Time at which the control state was updated. */
    private ?DateTime $updatedDateTime = null;
    
    /**
     * Instantiates a new secureScoreControlStateUpdate and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SecureScoreControlStateUpdate
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): SecureScoreControlStateUpdate {
        return new SecureScoreControlStateUpdate();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the assignedTo property value. Assigns the control to the user who will take the action.
     * @return string|null
    */
    public function getAssignedTo(): ?string {
        return $this->assignedTo;
    }

    /**
     * Gets the comment property value. Provides optional comment about the control.
     * @return string|null
    */
    public function getComment(): ?string {
        return $this->comment;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'assignedTo' => function (self $o, ParseNode $n) { $o->setAssignedTo($n->getStringValue()); },
            'comment' => function (self $o, ParseNode $n) { $o->setComment($n->getStringValue()); },
            'state' => function (self $o, ParseNode $n) { $o->setState($n->getStringValue()); },
            'updatedBy' => function (self $o, ParseNode $n) { $o->setUpdatedBy($n->getStringValue()); },
            'updatedDateTime' => function (self $o, ParseNode $n) { $o->setUpdatedDateTime($n->getDateTimeValue()); },
        ];
    }

    /**
     * Gets the state property value. State of the control, which can be modified via a PATCH command (for example, ignored, thirdParty).
     * @return string|null
    */
    public function getState(): ?string {
        return $this->state;
    }

    /**
     * Gets the updatedBy property value. ID of the user who updated tenant state.
     * @return string|null
    */
    public function getUpdatedBy(): ?string {
        return $this->updatedBy;
    }

    /**
     * Gets the updatedDateTime property value. Time at which the control state was updated.
     * @return DateTime|null
    */
    public function getUpdatedDateTime(): ?DateTime {
        return $this->updatedDateTime;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('assignedTo', $this->assignedTo);
        $writer->writeStringValue('comment', $this->comment);
        $writer->writeStringValue('state', $this->state);
        $writer->writeStringValue('updatedBy', $this->updatedBy);
        $writer->writeDateTimeValue('updatedDateTime', $this->updatedDateTime);
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
     * Sets the assignedTo property value. Assigns the control to the user who will take the action.
     *  @param string|null $value Value to set for the assignedTo property.
    */
    public function setAssignedTo(?string $value ): void {
        $this->assignedTo = $value;
    }

    /**
     * Sets the comment property value. Provides optional comment about the control.
     *  @param string|null $value Value to set for the comment property.
    */
    public function setComment(?string $value ): void {
        $this->comment = $value;
    }

    /**
     * Sets the state property value. State of the control, which can be modified via a PATCH command (for example, ignored, thirdParty).
     *  @param string|null $value Value to set for the state property.
    */
    public function setState(?string $value ): void {
        $this->state = $value;
    }

    /**
     * Sets the updatedBy property value. ID of the user who updated tenant state.
     *  @param string|null $value Value to set for the updatedBy property.
    */
    public function setUpdatedBy(?string $value ): void {
        $this->updatedBy = $value;
    }

    /**
     * Sets the updatedDateTime property value. Time at which the control state was updated.
     *  @param DateTime|null $value Value to set for the updatedDateTime property.
    */
    public function setUpdatedDateTime(?DateTime $value ): void {
        $this->updatedDateTime = $value;
    }

}
