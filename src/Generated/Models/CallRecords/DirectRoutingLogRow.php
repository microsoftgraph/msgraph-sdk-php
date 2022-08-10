<?php

namespace Microsoft\Graph\Generated\Models\CallRecords;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DirectRoutingLogRow implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $calleeNumber Number of the user or bot who received the call. E.164 format, but may include additional data.
    */
    private ?string $calleeNumber = null;
    
    /**
     * @var int|null $callEndSubReason In addition to the SIP codes, Microsoft has own subcodes that indicate the specific issue.
    */
    private ?int $callEndSubReason = null;
    
    /**
     * @var string|null $callerNumber Number of the user or bot who made the call. E.164 format, but may include additional data.
    */
    private ?string $callerNumber = null;
    
    /**
     * @var string|null $callType Call type and direction.
    */
    private ?string $callType = null;
    
    /**
     * @var string|null $correlationId Identifier for the call that you can use when calling Microsoft Support. GUID.
    */
    private ?string $correlationId = null;
    
    /**
     * @var int|null $duration Duration of the call in seconds.
    */
    private ?int $duration = null;
    
    /**
     * @var DateTime|null $endDateTime Only exists for successful (fully established) calls. Time when call ended.
    */
    private ?DateTime $endDateTime = null;
    
    /**
     * @var DateTime|null $failureDateTime Only exists for failed (not fully established) calls.
    */
    private ?DateTime $failureDateTime = null;
    
    /**
     * @var int|null $finalSipCode The code with which the call ended, RFC 3261.
    */
    private ?int $finalSipCode = null;
    
    /**
     * @var string|null $finalSipCodePhrase Description of the SIP code and Microsoft subcode.
    */
    private ?string $finalSipCodePhrase = null;
    
    /**
     * @var string|null $id Unique call identifier. GUID.
    */
    private ?string $id = null;
    
    /**
     * @var DateTime|null $inviteDateTime When the initial invite was sent.
    */
    private ?DateTime $inviteDateTime = null;
    
    /**
     * @var bool|null $mediaBypassEnabled Indicates if the trunk was enabled for media bypass or not.
    */
    private ?bool $mediaBypassEnabled = null;
    
    /**
     * @var string|null $mediaPathLocation The datacenter used for media path in non-bypass call.
    */
    private ?string $mediaPathLocation = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var string|null $signalingLocation The datacenter used for signaling for both bypass and non-bypass calls.
    */
    private ?string $signalingLocation = null;
    
    /**
     * @var DateTime|null $startDateTime Call start time.For failed and unanswered calls, this can be equal to invite or failure time.
    */
    private ?DateTime $startDateTime = null;
    
    /**
     * @var bool|null $successfulCall Success or attempt.
    */
    private ?bool $successfulCall = null;
    
    /**
     * @var string|null $trunkFullyQualifiedDomainName Fully qualified domain name of the session border controller.
    */
    private ?string $trunkFullyQualifiedDomainName = null;
    
    /**
     * @var string|null $userDisplayName Display name of the user.
    */
    private ?string $userDisplayName = null;
    
    /**
     * @var string|null $userId Calling user's ID in Graph. This and other user info will be null/empty for bot call types. GUID.
    */
    private ?string $userId = null;
    
    /**
     * @var string|null $userPrincipalName UserPrincipalName (sign-in name) in Azure Active Directory. This is usually the same as user's SIP Address, and can be same as user's e-mail address.
    */
    private ?string $userPrincipalName = null;
    
    /**
     * Instantiates a new directRoutingLogRow and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.callRecords.directRoutingLogRow');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DirectRoutingLogRow
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DirectRoutingLogRow {
        return new DirectRoutingLogRow();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the calleeNumber property value. Number of the user or bot who received the call. E.164 format, but may include additional data.
     * @return string|null
    */
    public function getCalleeNumber(): ?string {
        return $this->calleeNumber;
    }

    /**
     * Gets the callEndSubReason property value. In addition to the SIP codes, Microsoft has own subcodes that indicate the specific issue.
     * @return int|null
    */
    public function getCallEndSubReason(): ?int {
        return $this->callEndSubReason;
    }

    /**
     * Gets the callerNumber property value. Number of the user or bot who made the call. E.164 format, but may include additional data.
     * @return string|null
    */
    public function getCallerNumber(): ?string {
        return $this->callerNumber;
    }

    /**
     * Gets the callType property value. Call type and direction.
     * @return string|null
    */
    public function getCallType(): ?string {
        return $this->callType;
    }

    /**
     * Gets the correlationId property value. Identifier for the call that you can use when calling Microsoft Support. GUID.
     * @return string|null
    */
    public function getCorrelationId(): ?string {
        return $this->correlationId;
    }

    /**
     * Gets the duration property value. Duration of the call in seconds.
     * @return int|null
    */
    public function getDuration(): ?int {
        return $this->duration;
    }

    /**
     * Gets the endDateTime property value. Only exists for successful (fully established) calls. Time when call ended.
     * @return DateTime|null
    */
    public function getEndDateTime(): ?DateTime {
        return $this->endDateTime;
    }

    /**
     * Gets the failureDateTime property value. Only exists for failed (not fully established) calls.
     * @return DateTime|null
    */
    public function getFailureDateTime(): ?DateTime {
        return $this->failureDateTime;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'calleeNumber' => function (ParseNode $n) use ($o) { $o->setCalleeNumber($n->getStringValue()); },
            'callEndSubReason' => function (ParseNode $n) use ($o) { $o->setCallEndSubReason($n->getIntegerValue()); },
            'callerNumber' => function (ParseNode $n) use ($o) { $o->setCallerNumber($n->getStringValue()); },
            'callType' => function (ParseNode $n) use ($o) { $o->setCallType($n->getStringValue()); },
            'correlationId' => function (ParseNode $n) use ($o) { $o->setCorrelationId($n->getStringValue()); },
            'duration' => function (ParseNode $n) use ($o) { $o->setDuration($n->getIntegerValue()); },
            'endDateTime' => function (ParseNode $n) use ($o) { $o->setEndDateTime($n->getDateTimeValue()); },
            'failureDateTime' => function (ParseNode $n) use ($o) { $o->setFailureDateTime($n->getDateTimeValue()); },
            'finalSipCode' => function (ParseNode $n) use ($o) { $o->setFinalSipCode($n->getIntegerValue()); },
            'finalSipCodePhrase' => function (ParseNode $n) use ($o) { $o->setFinalSipCodePhrase($n->getStringValue()); },
            'id' => function (ParseNode $n) use ($o) { $o->setId($n->getStringValue()); },
            'inviteDateTime' => function (ParseNode $n) use ($o) { $o->setInviteDateTime($n->getDateTimeValue()); },
            'mediaBypassEnabled' => function (ParseNode $n) use ($o) { $o->setMediaBypassEnabled($n->getBooleanValue()); },
            'mediaPathLocation' => function (ParseNode $n) use ($o) { $o->setMediaPathLocation($n->getStringValue()); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
            'signalingLocation' => function (ParseNode $n) use ($o) { $o->setSignalingLocation($n->getStringValue()); },
            'startDateTime' => function (ParseNode $n) use ($o) { $o->setStartDateTime($n->getDateTimeValue()); },
            'successfulCall' => function (ParseNode $n) use ($o) { $o->setSuccessfulCall($n->getBooleanValue()); },
            'trunkFullyQualifiedDomainName' => function (ParseNode $n) use ($o) { $o->setTrunkFullyQualifiedDomainName($n->getStringValue()); },
            'userDisplayName' => function (ParseNode $n) use ($o) { $o->setUserDisplayName($n->getStringValue()); },
            'userId' => function (ParseNode $n) use ($o) { $o->setUserId($n->getStringValue()); },
            'userPrincipalName' => function (ParseNode $n) use ($o) { $o->setUserPrincipalName($n->getStringValue()); },
        ];
    }

    /**
     * Gets the finalSipCode property value. The code with which the call ended, RFC 3261.
     * @return int|null
    */
    public function getFinalSipCode(): ?int {
        return $this->finalSipCode;
    }

    /**
     * Gets the finalSipCodePhrase property value. Description of the SIP code and Microsoft subcode.
     * @return string|null
    */
    public function getFinalSipCodePhrase(): ?string {
        return $this->finalSipCodePhrase;
    }

    /**
     * Gets the id property value. Unique call identifier. GUID.
     * @return string|null
    */
    public function getId(): ?string {
        return $this->id;
    }

    /**
     * Gets the inviteDateTime property value. When the initial invite was sent.
     * @return DateTime|null
    */
    public function getInviteDateTime(): ?DateTime {
        return $this->inviteDateTime;
    }

    /**
     * Gets the mediaBypassEnabled property value. Indicates if the trunk was enabled for media bypass or not.
     * @return bool|null
    */
    public function getMediaBypassEnabled(): ?bool {
        return $this->mediaBypassEnabled;
    }

    /**
     * Gets the mediaPathLocation property value. The datacenter used for media path in non-bypass call.
     * @return string|null
    */
    public function getMediaPathLocation(): ?string {
        return $this->mediaPathLocation;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the signalingLocation property value. The datacenter used for signaling for both bypass and non-bypass calls.
     * @return string|null
    */
    public function getSignalingLocation(): ?string {
        return $this->signalingLocation;
    }

    /**
     * Gets the startDateTime property value. Call start time.For failed and unanswered calls, this can be equal to invite or failure time.
     * @return DateTime|null
    */
    public function getStartDateTime(): ?DateTime {
        return $this->startDateTime;
    }

    /**
     * Gets the successfulCall property value. Success or attempt.
     * @return bool|null
    */
    public function getSuccessfulCall(): ?bool {
        return $this->successfulCall;
    }

    /**
     * Gets the trunkFullyQualifiedDomainName property value. Fully qualified domain name of the session border controller.
     * @return string|null
    */
    public function getTrunkFullyQualifiedDomainName(): ?string {
        return $this->trunkFullyQualifiedDomainName;
    }

    /**
     * Gets the userDisplayName property value. Display name of the user.
     * @return string|null
    */
    public function getUserDisplayName(): ?string {
        return $this->userDisplayName;
    }

    /**
     * Gets the userId property value. Calling user's ID in Graph. This and other user info will be null/empty for bot call types. GUID.
     * @return string|null
    */
    public function getUserId(): ?string {
        return $this->userId;
    }

    /**
     * Gets the userPrincipalName property value. UserPrincipalName (sign-in name) in Azure Active Directory. This is usually the same as user's SIP Address, and can be same as user's e-mail address.
     * @return string|null
    */
    public function getUserPrincipalName(): ?string {
        return $this->userPrincipalName;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('calleeNumber', $this->calleeNumber);
        $writer->writeIntegerValue('callEndSubReason', $this->callEndSubReason);
        $writer->writeStringValue('callerNumber', $this->callerNumber);
        $writer->writeStringValue('callType', $this->callType);
        $writer->writeStringValue('correlationId', $this->correlationId);
        $writer->writeIntegerValue('duration', $this->duration);
        $writer->writeDateTimeValue('endDateTime', $this->endDateTime);
        $writer->writeDateTimeValue('failureDateTime', $this->failureDateTime);
        $writer->writeIntegerValue('finalSipCode', $this->finalSipCode);
        $writer->writeStringValue('finalSipCodePhrase', $this->finalSipCodePhrase);
        $writer->writeStringValue('id', $this->id);
        $writer->writeDateTimeValue('inviteDateTime', $this->inviteDateTime);
        $writer->writeBooleanValue('mediaBypassEnabled', $this->mediaBypassEnabled);
        $writer->writeStringValue('mediaPathLocation', $this->mediaPathLocation);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeStringValue('signalingLocation', $this->signalingLocation);
        $writer->writeDateTimeValue('startDateTime', $this->startDateTime);
        $writer->writeBooleanValue('successfulCall', $this->successfulCall);
        $writer->writeStringValue('trunkFullyQualifiedDomainName', $this->trunkFullyQualifiedDomainName);
        $writer->writeStringValue('userDisplayName', $this->userDisplayName);
        $writer->writeStringValue('userId', $this->userId);
        $writer->writeStringValue('userPrincipalName', $this->userPrincipalName);
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
     * Sets the calleeNumber property value. Number of the user or bot who received the call. E.164 format, but may include additional data.
     *  @param string|null $value Value to set for the calleeNumber property.
    */
    public function setCalleeNumber(?string $value ): void {
        $this->calleeNumber = $value;
    }

    /**
     * Sets the callEndSubReason property value. In addition to the SIP codes, Microsoft has own subcodes that indicate the specific issue.
     *  @param int|null $value Value to set for the callEndSubReason property.
    */
    public function setCallEndSubReason(?int $value ): void {
        $this->callEndSubReason = $value;
    }

    /**
     * Sets the callerNumber property value. Number of the user or bot who made the call. E.164 format, but may include additional data.
     *  @param string|null $value Value to set for the callerNumber property.
    */
    public function setCallerNumber(?string $value ): void {
        $this->callerNumber = $value;
    }

    /**
     * Sets the callType property value. Call type and direction.
     *  @param string|null $value Value to set for the callType property.
    */
    public function setCallType(?string $value ): void {
        $this->callType = $value;
    }

    /**
     * Sets the correlationId property value. Identifier for the call that you can use when calling Microsoft Support. GUID.
     *  @param string|null $value Value to set for the correlationId property.
    */
    public function setCorrelationId(?string $value ): void {
        $this->correlationId = $value;
    }

    /**
     * Sets the duration property value. Duration of the call in seconds.
     *  @param int|null $value Value to set for the duration property.
    */
    public function setDuration(?int $value ): void {
        $this->duration = $value;
    }

    /**
     * Sets the endDateTime property value. Only exists for successful (fully established) calls. Time when call ended.
     *  @param DateTime|null $value Value to set for the endDateTime property.
    */
    public function setEndDateTime(?DateTime $value ): void {
        $this->endDateTime = $value;
    }

    /**
     * Sets the failureDateTime property value. Only exists for failed (not fully established) calls.
     *  @param DateTime|null $value Value to set for the failureDateTime property.
    */
    public function setFailureDateTime(?DateTime $value ): void {
        $this->failureDateTime = $value;
    }

    /**
     * Sets the finalSipCode property value. The code with which the call ended, RFC 3261.
     *  @param int|null $value Value to set for the finalSipCode property.
    */
    public function setFinalSipCode(?int $value ): void {
        $this->finalSipCode = $value;
    }

    /**
     * Sets the finalSipCodePhrase property value. Description of the SIP code and Microsoft subcode.
     *  @param string|null $value Value to set for the finalSipCodePhrase property.
    */
    public function setFinalSipCodePhrase(?string $value ): void {
        $this->finalSipCodePhrase = $value;
    }

    /**
     * Sets the id property value. Unique call identifier. GUID.
     *  @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value ): void {
        $this->id = $value;
    }

    /**
     * Sets the inviteDateTime property value. When the initial invite was sent.
     *  @param DateTime|null $value Value to set for the inviteDateTime property.
    */
    public function setInviteDateTime(?DateTime $value ): void {
        $this->inviteDateTime = $value;
    }

    /**
     * Sets the mediaBypassEnabled property value. Indicates if the trunk was enabled for media bypass or not.
     *  @param bool|null $value Value to set for the mediaBypassEnabled property.
    */
    public function setMediaBypassEnabled(?bool $value ): void {
        $this->mediaBypassEnabled = $value;
    }

    /**
     * Sets the mediaPathLocation property value. The datacenter used for media path in non-bypass call.
     *  @param string|null $value Value to set for the mediaPathLocation property.
    */
    public function setMediaPathLocation(?string $value ): void {
        $this->mediaPathLocation = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the signalingLocation property value. The datacenter used for signaling for both bypass and non-bypass calls.
     *  @param string|null $value Value to set for the signalingLocation property.
    */
    public function setSignalingLocation(?string $value ): void {
        $this->signalingLocation = $value;
    }

    /**
     * Sets the startDateTime property value. Call start time.For failed and unanswered calls, this can be equal to invite or failure time.
     *  @param DateTime|null $value Value to set for the startDateTime property.
    */
    public function setStartDateTime(?DateTime $value ): void {
        $this->startDateTime = $value;
    }

    /**
     * Sets the successfulCall property value. Success or attempt.
     *  @param bool|null $value Value to set for the successfulCall property.
    */
    public function setSuccessfulCall(?bool $value ): void {
        $this->successfulCall = $value;
    }

    /**
     * Sets the trunkFullyQualifiedDomainName property value. Fully qualified domain name of the session border controller.
     *  @param string|null $value Value to set for the trunkFullyQualifiedDomainName property.
    */
    public function setTrunkFullyQualifiedDomainName(?string $value ): void {
        $this->trunkFullyQualifiedDomainName = $value;
    }

    /**
     * Sets the userDisplayName property value. Display name of the user.
     *  @param string|null $value Value to set for the userDisplayName property.
    */
    public function setUserDisplayName(?string $value ): void {
        $this->userDisplayName = $value;
    }

    /**
     * Sets the userId property value. Calling user's ID in Graph. This and other user info will be null/empty for bot call types. GUID.
     *  @param string|null $value Value to set for the userId property.
    */
    public function setUserId(?string $value ): void {
        $this->userId = $value;
    }

    /**
     * Sets the userPrincipalName property value. UserPrincipalName (sign-in name) in Azure Active Directory. This is usually the same as user's SIP Address, and can be same as user's e-mail address.
     *  @param string|null $value Value to set for the userPrincipalName property.
    */
    public function setUserPrincipalName(?string $value ): void {
        $this->userPrincipalName = $value;
    }

}
