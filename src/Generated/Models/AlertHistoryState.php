<?php

namespace Microsoft\Graph\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AlertHistoryState implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $appId The Application ID of the calling application that submitted an update (PATCH) to the alert. The appId should be extracted from the auth token and not entered manually by the calling application.
    */
    private ?string $appId = null;
    
    /**
     * @var string|null $assignedTo UPN of user the alert was assigned to (note: alert.assignedTo only stores the last value/UPN).
    */
    private ?string $assignedTo = null;
    
    /**
     * @var array<string>|null $comments Comment entered by signed-in user.
    */
    private ?array $comments = null;
    
    /**
     * @var AlertFeedback|null $feedback Analyst feedback on the alert in this update. Possible values are: unknown, truePositive, falsePositive, benignPositive.
    */
    private ?AlertFeedback $feedback = null;
    
    /**
     * @var AlertStatus|null $status Alert status value (if updated). Possible values are: unknown, newAlert, inProgress, resolved, dismissed.
    */
    private ?AlertStatus $status = null;
    
    /**
     * @var DateTime|null $updatedDateTime Date and time of the alert update. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
    */
    private ?DateTime $updatedDateTime = null;
    
    /**
     * @var string|null $user UPN of the signed-in user that updated the alert (taken from the bearer token - if in user/delegated auth mode).
    */
    private ?string $user = null;
    
    /**
     * Instantiates a new alertHistoryState and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AlertHistoryState
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AlertHistoryState {
        return new AlertHistoryState();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the appId property value. The Application ID of the calling application that submitted an update (PATCH) to the alert. The appId should be extracted from the auth token and not entered manually by the calling application.
     * @return string|null
    */
    public function getAppId(): ?string {
        return $this->appId;
    }

    /**
     * Gets the assignedTo property value. UPN of user the alert was assigned to (note: alert.assignedTo only stores the last value/UPN).
     * @return string|null
    */
    public function getAssignedTo(): ?string {
        return $this->assignedTo;
    }

    /**
     * Gets the comments property value. Comment entered by signed-in user.
     * @return array<string>|null
    */
    public function getComments(): ?array {
        return $this->comments;
    }

    /**
     * Gets the feedback property value. Analyst feedback on the alert in this update. Possible values are: unknown, truePositive, falsePositive, benignPositive.
     * @return AlertFeedback|null
    */
    public function getFeedback(): ?AlertFeedback {
        return $this->feedback;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'appId' => function (ParseNode $n) use ($o) { $o->setAppId($n->getStringValue()); },
            'assignedTo' => function (ParseNode $n) use ($o) { $o->setAssignedTo($n->getStringValue()); },
            'comments' => function (ParseNode $n) use ($o) { $o->setComments($n->getCollectionOfPrimitiveValues()); },
            'feedback' => function (ParseNode $n) use ($o) { $o->setFeedback($n->getEnumValue(AlertFeedback::class)); },
            'status' => function (ParseNode $n) use ($o) { $o->setStatus($n->getEnumValue(AlertStatus::class)); },
            'updatedDateTime' => function (ParseNode $n) use ($o) { $o->setUpdatedDateTime($n->getDateTimeValue()); },
            'user' => function (ParseNode $n) use ($o) { $o->setUser($n->getStringValue()); },
        ];
    }

    /**
     * Gets the status property value. Alert status value (if updated). Possible values are: unknown, newAlert, inProgress, resolved, dismissed.
     * @return AlertStatus|null
    */
    public function getStatus(): ?AlertStatus {
        return $this->status;
    }

    /**
     * Gets the updatedDateTime property value. Date and time of the alert update. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     * @return DateTime|null
    */
    public function getUpdatedDateTime(): ?DateTime {
        return $this->updatedDateTime;
    }

    /**
     * Gets the user property value. UPN of the signed-in user that updated the alert (taken from the bearer token - if in user/delegated auth mode).
     * @return string|null
    */
    public function getUser(): ?string {
        return $this->user;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('appId', $this->appId);
        $writer->writeStringValue('assignedTo', $this->assignedTo);
        $writer->writeCollectionOfPrimitiveValues('comments', $this->comments);
        $writer->writeEnumValue('feedback', $this->feedback);
        $writer->writeEnumValue('status', $this->status);
        $writer->writeDateTimeValue('updatedDateTime', $this->updatedDateTime);
        $writer->writeStringValue('user', $this->user);
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
     * Sets the appId property value. The Application ID of the calling application that submitted an update (PATCH) to the alert. The appId should be extracted from the auth token and not entered manually by the calling application.
     *  @param string|null $value Value to set for the appId property.
    */
    public function setAppId(?string $value ): void {
        $this->appId = $value;
    }

    /**
     * Sets the assignedTo property value. UPN of user the alert was assigned to (note: alert.assignedTo only stores the last value/UPN).
     *  @param string|null $value Value to set for the assignedTo property.
    */
    public function setAssignedTo(?string $value ): void {
        $this->assignedTo = $value;
    }

    /**
     * Sets the comments property value. Comment entered by signed-in user.
     *  @param array<string>|null $value Value to set for the comments property.
    */
    public function setComments(?array $value ): void {
        $this->comments = $value;
    }

    /**
     * Sets the feedback property value. Analyst feedback on the alert in this update. Possible values are: unknown, truePositive, falsePositive, benignPositive.
     *  @param AlertFeedback|null $value Value to set for the feedback property.
    */
    public function setFeedback(?AlertFeedback $value ): void {
        $this->feedback = $value;
    }

    /**
     * Sets the status property value. Alert status value (if updated). Possible values are: unknown, newAlert, inProgress, resolved, dismissed.
     *  @param AlertStatus|null $value Value to set for the status property.
    */
    public function setStatus(?AlertStatus $value ): void {
        $this->status = $value;
    }

    /**
     * Sets the updatedDateTime property value. Date and time of the alert update. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     *  @param DateTime|null $value Value to set for the updatedDateTime property.
    */
    public function setUpdatedDateTime(?DateTime $value ): void {
        $this->updatedDateTime = $value;
    }

    /**
     * Sets the user property value. UPN of the signed-in user that updated the alert (taken from the bearer token - if in user/delegated auth mode).
     *  @param string|null $value Value to set for the user property.
    */
    public function setUser(?string $value ): void {
        $this->user = $value;
    }

}
