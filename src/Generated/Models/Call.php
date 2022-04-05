<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Call extends Entity 
{
    /** @var array<AudioRoutingGroup>|null $audioRoutingGroups Read-only. Nullable. */
    private ?array $audioRoutingGroups = null;
    
    /** @var string|null $callbackUri The callback URL on which callbacks will be delivered. Must be https. */
    private ?string $callbackUri = null;
    
    /** @var string|null $callChainId A unique identifier for all the participant calls in a conference or a unique identifier for two participant calls in a P2P call.  This needs to be copied over from Microsoft.Graph.Call.CallChainId. */
    private ?string $callChainId = null;
    
    /** @var CallOptions|null $callOptions The callOptions property */
    private ?CallOptions $callOptions = null;
    
    /** @var array<CallRoute>|null $callRoutes The routing information on how the call was retargeted. Read-only. */
    private ?array $callRoutes = null;
    
    /** @var ChatInfo|null $chatInfo The chat information. Required information for joining a meeting. */
    private ?ChatInfo $chatInfo = null;
    
    /** @var CallDirection|null $direction The direction of the call. The possible value are incoming or outgoing. Read-only. */
    private ?CallDirection $direction = null;
    
    /** @var IncomingContext|null $incomingContext The context associated with an incoming call. Read-only. Server generated. */
    private ?IncomingContext $incomingContext = null;
    
    /** @var MediaConfig|null $mediaConfig The media configuration. Required. */
    private ?MediaConfig $mediaConfig = null;
    
    /** @var CallMediaState|null $mediaState Read-only. The call media state. */
    private ?CallMediaState $mediaState = null;
    
    /** @var MeetingInfo|null $meetingInfo The meeting information that's required for joining a meeting. */
    private ?MeetingInfo $meetingInfo = null;
    
    /** @var string|null $myParticipantId The myParticipantId property */
    private ?string $myParticipantId = null;
    
    /** @var array<CommsOperation>|null $operations Read-only. Nullable. */
    private ?array $operations = null;
    
    /** @var array<Participant>|null $participants Read-only. Nullable. */
    private ?array $participants = null;
    
    /** @var array<Modality>|null $requestedModalities The requestedModalities property */
    private ?array $requestedModalities = null;
    
    /** @var ResultInfo|null $resultInfo The resultInfo property */
    private ?ResultInfo $resultInfo = null;
    
    /** @var ParticipantInfo|null $source The source property */
    private ?ParticipantInfo $source = null;
    
    /** @var CallState|null $state The state property */
    private ?CallState $state = null;
    
    /** @var string|null $subject The subject property */
    private ?string $subject = null;
    
    /** @var array<InvitationParticipantInfo>|null $targets The targets property */
    private ?array $targets = null;
    
    /** @var string|null $tenantId The tenantId property */
    private ?string $tenantId = null;
    
    /** @var ToneInfo|null $toneInfo The toneInfo property */
    private ?ToneInfo $toneInfo = null;
    
    /** @var CallTranscriptionInfo|null $transcription The transcription information for the call. Read-only. */
    private ?CallTranscriptionInfo $transcription = null;
    
    /**
     * Instantiates a new call and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Call
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): Call {
        return new Call();
    }

    /**
     * Gets the audioRoutingGroups property value. Read-only. Nullable.
     * @return array<AudioRoutingGroup>|null
    */
    public function getAudioRoutingGroups(): ?array {
        return $this->audioRoutingGroups;
    }

    /**
     * Gets the callbackUri property value. The callback URL on which callbacks will be delivered. Must be https.
     * @return string|null
    */
    public function getCallbackUri(): ?string {
        return $this->callbackUri;
    }

    /**
     * Gets the callChainId property value. A unique identifier for all the participant calls in a conference or a unique identifier for two participant calls in a P2P call.  This needs to be copied over from Microsoft.Graph.Call.CallChainId.
     * @return string|null
    */
    public function getCallChainId(): ?string {
        return $this->callChainId;
    }

    /**
     * Gets the callOptions property value. The callOptions property
     * @return CallOptions|null
    */
    public function getCallOptions(): ?CallOptions {
        return $this->callOptions;
    }

    /**
     * Gets the callRoutes property value. The routing information on how the call was retargeted. Read-only.
     * @return array<CallRoute>|null
    */
    public function getCallRoutes(): ?array {
        return $this->callRoutes;
    }

    /**
     * Gets the chatInfo property value. The chat information. Required information for joining a meeting.
     * @return ChatInfo|null
    */
    public function getChatInfo(): ?ChatInfo {
        return $this->chatInfo;
    }

    /**
     * Gets the direction property value. The direction of the call. The possible value are incoming or outgoing. Read-only.
     * @return CallDirection|null
    */
    public function getDirection(): ?CallDirection {
        return $this->direction;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'audioRoutingGroups' => function (self $o, ParseNode $n) { $o->setAudioRoutingGroups($n->getCollectionOfObjectValues(AudioRoutingGroup::class)); },
            'callbackUri' => function (self $o, ParseNode $n) { $o->setCallbackUri($n->getStringValue()); },
            'callChainId' => function (self $o, ParseNode $n) { $o->setCallChainId($n->getStringValue()); },
            'callOptions' => function (self $o, ParseNode $n) { $o->setCallOptions($n->getObjectValue(CallOptions::class)); },
            'callRoutes' => function (self $o, ParseNode $n) { $o->setCallRoutes($n->getCollectionOfObjectValues(CallRoute::class)); },
            'chatInfo' => function (self $o, ParseNode $n) { $o->setChatInfo($n->getObjectValue(ChatInfo::class)); },
            'direction' => function (self $o, ParseNode $n) { $o->setDirection($n->getEnumValue(CallDirection::class)); },
            'incomingContext' => function (self $o, ParseNode $n) { $o->setIncomingContext($n->getObjectValue(IncomingContext::class)); },
            'mediaConfig' => function (self $o, ParseNode $n) { $o->setMediaConfig($n->getObjectValue(MediaConfig::class)); },
            'mediaState' => function (self $o, ParseNode $n) { $o->setMediaState($n->getObjectValue(CallMediaState::class)); },
            'meetingInfo' => function (self $o, ParseNode $n) { $o->setMeetingInfo($n->getObjectValue(MeetingInfo::class)); },
            'myParticipantId' => function (self $o, ParseNode $n) { $o->setMyParticipantId($n->getStringValue()); },
            'operations' => function (self $o, ParseNode $n) { $o->setOperations($n->getCollectionOfObjectValues(CommsOperation::class)); },
            'participants' => function (self $o, ParseNode $n) { $o->setParticipants($n->getCollectionOfObjectValues(Participant::class)); },
            'requestedModalities' => function (self $o, ParseNode $n) { $o->setRequestedModalities($n->getCollectionOfEnumValues(Modality::class)); },
            'resultInfo' => function (self $o, ParseNode $n) { $o->setResultInfo($n->getObjectValue(ResultInfo::class)); },
            'source' => function (self $o, ParseNode $n) { $o->setSource($n->getObjectValue(ParticipantInfo::class)); },
            'state' => function (self $o, ParseNode $n) { $o->setState($n->getEnumValue(CallState::class)); },
            'subject' => function (self $o, ParseNode $n) { $o->setSubject($n->getStringValue()); },
            'targets' => function (self $o, ParseNode $n) { $o->setTargets($n->getCollectionOfObjectValues(InvitationParticipantInfo::class)); },
            'tenantId' => function (self $o, ParseNode $n) { $o->setTenantId($n->getStringValue()); },
            'toneInfo' => function (self $o, ParseNode $n) { $o->setToneInfo($n->getObjectValue(ToneInfo::class)); },
            'transcription' => function (self $o, ParseNode $n) { $o->setTranscription($n->getObjectValue(CallTranscriptionInfo::class)); },
        ]);
    }

    /**
     * Gets the incomingContext property value. The context associated with an incoming call. Read-only. Server generated.
     * @return IncomingContext|null
    */
    public function getIncomingContext(): ?IncomingContext {
        return $this->incomingContext;
    }

    /**
     * Gets the mediaConfig property value. The media configuration. Required.
     * @return MediaConfig|null
    */
    public function getMediaConfig(): ?MediaConfig {
        return $this->mediaConfig;
    }

    /**
     * Gets the mediaState property value. Read-only. The call media state.
     * @return CallMediaState|null
    */
    public function getMediaState(): ?CallMediaState {
        return $this->mediaState;
    }

    /**
     * Gets the meetingInfo property value. The meeting information that's required for joining a meeting.
     * @return MeetingInfo|null
    */
    public function getMeetingInfo(): ?MeetingInfo {
        return $this->meetingInfo;
    }

    /**
     * Gets the myParticipantId property value. The myParticipantId property
     * @return string|null
    */
    public function getMyParticipantId(): ?string {
        return $this->myParticipantId;
    }

    /**
     * Gets the operations property value. Read-only. Nullable.
     * @return array<CommsOperation>|null
    */
    public function getOperations(): ?array {
        return $this->operations;
    }

    /**
     * Gets the participants property value. Read-only. Nullable.
     * @return array<Participant>|null
    */
    public function getParticipants(): ?array {
        return $this->participants;
    }

    /**
     * Gets the requestedModalities property value. The requestedModalities property
     * @return array<Modality>|null
    */
    public function getRequestedModalities(): ?array {
        return $this->requestedModalities;
    }

    /**
     * Gets the resultInfo property value. The resultInfo property
     * @return ResultInfo|null
    */
    public function getResultInfo(): ?ResultInfo {
        return $this->resultInfo;
    }

    /**
     * Gets the source property value. The source property
     * @return ParticipantInfo|null
    */
    public function getSource(): ?ParticipantInfo {
        return $this->source;
    }

    /**
     * Gets the state property value. The state property
     * @return CallState|null
    */
    public function getState(): ?CallState {
        return $this->state;
    }

    /**
     * Gets the subject property value. The subject property
     * @return string|null
    */
    public function getSubject(): ?string {
        return $this->subject;
    }

    /**
     * Gets the targets property value. The targets property
     * @return array<InvitationParticipantInfo>|null
    */
    public function getTargets(): ?array {
        return $this->targets;
    }

    /**
     * Gets the tenantId property value. The tenantId property
     * @return string|null
    */
    public function getTenantId(): ?string {
        return $this->tenantId;
    }

    /**
     * Gets the toneInfo property value. The toneInfo property
     * @return ToneInfo|null
    */
    public function getToneInfo(): ?ToneInfo {
        return $this->toneInfo;
    }

    /**
     * Gets the transcription property value. The transcription information for the call. Read-only.
     * @return CallTranscriptionInfo|null
    */
    public function getTranscription(): ?CallTranscriptionInfo {
        return $this->transcription;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('audioRoutingGroups', $this->audioRoutingGroups);
        $writer->writeStringValue('callbackUri', $this->callbackUri);
        $writer->writeStringValue('callChainId', $this->callChainId);
        $writer->writeObjectValue('callOptions', $this->callOptions);
        $writer->writeCollectionOfObjectValues('callRoutes', $this->callRoutes);
        $writer->writeObjectValue('chatInfo', $this->chatInfo);
        $writer->writeEnumValue('direction', $this->direction);
        $writer->writeObjectValue('incomingContext', $this->incomingContext);
        $writer->writeObjectValue('mediaConfig', $this->mediaConfig);
        $writer->writeObjectValue('mediaState', $this->mediaState);
        $writer->writeObjectValue('meetingInfo', $this->meetingInfo);
        $writer->writeStringValue('myParticipantId', $this->myParticipantId);
        $writer->writeCollectionOfObjectValues('operations', $this->operations);
        $writer->writeCollectionOfObjectValues('participants', $this->participants);
        $writer->writeCollectionOfEnumValues('requestedModalities', $this->requestedModalities);
        $writer->writeObjectValue('resultInfo', $this->resultInfo);
        $writer->writeObjectValue('source', $this->source);
        $writer->writeEnumValue('state', $this->state);
        $writer->writeStringValue('subject', $this->subject);
        $writer->writeCollectionOfObjectValues('targets', $this->targets);
        $writer->writeStringValue('tenantId', $this->tenantId);
        $writer->writeObjectValue('toneInfo', $this->toneInfo);
        $writer->writeObjectValue('transcription', $this->transcription);
    }

    /**
     * Sets the audioRoutingGroups property value. Read-only. Nullable.
     *  @param array<AudioRoutingGroup>|null $value Value to set for the audioRoutingGroups property.
    */
    public function setAudioRoutingGroups(?array $value ): void {
        $this->audioRoutingGroups = $value;
    }

    /**
     * Sets the callbackUri property value. The callback URL on which callbacks will be delivered. Must be https.
     *  @param string|null $value Value to set for the callbackUri property.
    */
    public function setCallbackUri(?string $value ): void {
        $this->callbackUri = $value;
    }

    /**
     * Sets the callChainId property value. A unique identifier for all the participant calls in a conference or a unique identifier for two participant calls in a P2P call.  This needs to be copied over from Microsoft.Graph.Call.CallChainId.
     *  @param string|null $value Value to set for the callChainId property.
    */
    public function setCallChainId(?string $value ): void {
        $this->callChainId = $value;
    }

    /**
     * Sets the callOptions property value. The callOptions property
     *  @param CallOptions|null $value Value to set for the callOptions property.
    */
    public function setCallOptions(?CallOptions $value ): void {
        $this->callOptions = $value;
    }

    /**
     * Sets the callRoutes property value. The routing information on how the call was retargeted. Read-only.
     *  @param array<CallRoute>|null $value Value to set for the callRoutes property.
    */
    public function setCallRoutes(?array $value ): void {
        $this->callRoutes = $value;
    }

    /**
     * Sets the chatInfo property value. The chat information. Required information for joining a meeting.
     *  @param ChatInfo|null $value Value to set for the chatInfo property.
    */
    public function setChatInfo(?ChatInfo $value ): void {
        $this->chatInfo = $value;
    }

    /**
     * Sets the direction property value. The direction of the call. The possible value are incoming or outgoing. Read-only.
     *  @param CallDirection|null $value Value to set for the direction property.
    */
    public function setDirection(?CallDirection $value ): void {
        $this->direction = $value;
    }

    /**
     * Sets the incomingContext property value. The context associated with an incoming call. Read-only. Server generated.
     *  @param IncomingContext|null $value Value to set for the incomingContext property.
    */
    public function setIncomingContext(?IncomingContext $value ): void {
        $this->incomingContext = $value;
    }

    /**
     * Sets the mediaConfig property value. The media configuration. Required.
     *  @param MediaConfig|null $value Value to set for the mediaConfig property.
    */
    public function setMediaConfig(?MediaConfig $value ): void {
        $this->mediaConfig = $value;
    }

    /**
     * Sets the mediaState property value. Read-only. The call media state.
     *  @param CallMediaState|null $value Value to set for the mediaState property.
    */
    public function setMediaState(?CallMediaState $value ): void {
        $this->mediaState = $value;
    }

    /**
     * Sets the meetingInfo property value. The meeting information that's required for joining a meeting.
     *  @param MeetingInfo|null $value Value to set for the meetingInfo property.
    */
    public function setMeetingInfo(?MeetingInfo $value ): void {
        $this->meetingInfo = $value;
    }

    /**
     * Sets the myParticipantId property value. The myParticipantId property
     *  @param string|null $value Value to set for the myParticipantId property.
    */
    public function setMyParticipantId(?string $value ): void {
        $this->myParticipantId = $value;
    }

    /**
     * Sets the operations property value. Read-only. Nullable.
     *  @param array<CommsOperation>|null $value Value to set for the operations property.
    */
    public function setOperations(?array $value ): void {
        $this->operations = $value;
    }

    /**
     * Sets the participants property value. Read-only. Nullable.
     *  @param array<Participant>|null $value Value to set for the participants property.
    */
    public function setParticipants(?array $value ): void {
        $this->participants = $value;
    }

    /**
     * Sets the requestedModalities property value. The requestedModalities property
     *  @param array<Modality>|null $value Value to set for the requestedModalities property.
    */
    public function setRequestedModalities(?array $value ): void {
        $this->requestedModalities = $value;
    }

    /**
     * Sets the resultInfo property value. The resultInfo property
     *  @param ResultInfo|null $value Value to set for the resultInfo property.
    */
    public function setResultInfo(?ResultInfo $value ): void {
        $this->resultInfo = $value;
    }

    /**
     * Sets the source property value. The source property
     *  @param ParticipantInfo|null $value Value to set for the source property.
    */
    public function setSource(?ParticipantInfo $value ): void {
        $this->source = $value;
    }

    /**
     * Sets the state property value. The state property
     *  @param CallState|null $value Value to set for the state property.
    */
    public function setState(?CallState $value ): void {
        $this->state = $value;
    }

    /**
     * Sets the subject property value. The subject property
     *  @param string|null $value Value to set for the subject property.
    */
    public function setSubject(?string $value ): void {
        $this->subject = $value;
    }

    /**
     * Sets the targets property value. The targets property
     *  @param array<InvitationParticipantInfo>|null $value Value to set for the targets property.
    */
    public function setTargets(?array $value ): void {
        $this->targets = $value;
    }

    /**
     * Sets the tenantId property value. The tenantId property
     *  @param string|null $value Value to set for the tenantId property.
    */
    public function setTenantId(?string $value ): void {
        $this->tenantId = $value;
    }

    /**
     * Sets the toneInfo property value. The toneInfo property
     *  @param ToneInfo|null $value Value to set for the toneInfo property.
    */
    public function setToneInfo(?ToneInfo $value ): void {
        $this->toneInfo = $value;
    }

    /**
     * Sets the transcription property value. The transcription information for the call. Read-only.
     *  @param CallTranscriptionInfo|null $value Value to set for the transcription property.
    */
    public function setTranscription(?CallTranscriptionInfo $value ): void {
        $this->transcription = $value;
    }

}
