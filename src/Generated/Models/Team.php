<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Team extends Entity implements Parsable 
{
    /**
     * @var array<Channel>|null $allChannels List of channels either hosted in or shared with the team (incoming channels).
    */
    private ?array $allChannels = null;
    
    /**
     * @var array<Channel>|null $channels The collection of channels and messages associated with the team.
    */
    private ?array $channels = null;
    
    /**
     * @var string|null $classification An optional label. Typically describes the data or business sensitivity of the team. Must match one of a pre-configured set in the tenant's directory.
    */
    private ?string $classification = null;
    
    /**
     * @var DateTime|null $createdDateTime Timestamp at which the team was created.
    */
    private ?DateTime $createdDateTime = null;
    
    /**
     * @var string|null $description An optional description for the team. Maximum length: 1024 characters.
    */
    private ?string $description = null;
    
    /**
     * @var string|null $displayName The name of the team.
    */
    private ?string $displayName = null;
    
    /**
     * @var TeamFunSettings|null $funSettings Settings to configure use of Giphy, memes, and stickers in the team.
    */
    private ?TeamFunSettings $funSettings = null;
    
    /**
     * @var Group|null $group The group property
    */
    private ?Group $group = null;
    
    /**
     * @var TeamGuestSettings|null $guestSettings Settings to configure whether guests can create, update, or delete channels in the team.
    */
    private ?TeamGuestSettings $guestSettings = null;
    
    /**
     * @var array<Channel>|null $incomingChannels List of channels shared with the team.
    */
    private ?array $incomingChannels = null;
    
    /**
     * @var array<TeamsAppInstallation>|null $installedApps The apps installed in this team.
    */
    private ?array $installedApps = null;
    
    /**
     * @var string|null $internalId A unique ID for the team that has been used in a few places such as the audit log/Office 365 Management Activity API.
    */
    private ?string $internalId = null;
    
    /**
     * @var bool|null $isArchived Whether this team is in read-only mode.
    */
    private ?bool $isArchived = null;
    
    /**
     * @var array<ConversationMember>|null $members Members and owners of the team.
    */
    private ?array $members = null;
    
    /**
     * @var TeamMemberSettings|null $memberSettings Settings to configure whether members can perform certain actions, for example, create channels and add bots, in the team.
    */
    private ?TeamMemberSettings $memberSettings = null;
    
    /**
     * @var TeamMessagingSettings|null $messagingSettings Settings to configure messaging and mentions in the team.
    */
    private ?TeamMessagingSettings $messagingSettings = null;
    
    /**
     * @var array<TeamsAsyncOperation>|null $operations The async operations that ran or are running on this team.
    */
    private ?array $operations = null;
    
    /**
     * @var Channel|null $primaryChannel The general channel for the team.
    */
    private ?Channel $primaryChannel = null;
    
    /**
     * @var Schedule|null $schedule The schedule of shifts for this team.
    */
    private ?Schedule $schedule = null;
    
    /**
     * @var TeamSpecialization|null $specialization Optional. Indicates whether the team is intended for a particular use case.  Each team specialization has access to unique behaviors and experiences targeted to its use case.
    */
    private ?TeamSpecialization $specialization = null;
    
    /**
     * @var TeamsTemplate|null $template The template this team was created from. See available templates.
    */
    private ?TeamsTemplate $template = null;
    
    /**
     * @var string|null $tenantId The ID of the Azure Active Directory tenant.
    */
    private ?string $tenantId = null;
    
    /**
     * @var TeamVisibilityType|null $visibility The visibility of the group and team. Defaults to Public.
    */
    private ?TeamVisibilityType $visibility = null;
    
    /**
     * @var string|null $webUrl A hyperlink that will go to the team in the Microsoft Teams client. This is the URL that you get when you right-click a team in the Microsoft Teams client and select Get link to team. This URL should be treated as an opaque blob, and not parsed.
    */
    private ?string $webUrl = null;
    
    /**
     * Instantiates a new team and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Team
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Team {
        return new Team();
    }

    /**
     * Gets the allChannels property value. List of channels either hosted in or shared with the team (incoming channels).
     * @return array<Channel>|null
    */
    public function getAllChannels(): ?array {
        return $this->allChannels;
    }

    /**
     * Gets the channels property value. The collection of channels and messages associated with the team.
     * @return array<Channel>|null
    */
    public function getChannels(): ?array {
        return $this->channels;
    }

    /**
     * Gets the classification property value. An optional label. Typically describes the data or business sensitivity of the team. Must match one of a pre-configured set in the tenant's directory.
     * @return string|null
    */
    public function getClassification(): ?string {
        return $this->classification;
    }

    /**
     * Gets the createdDateTime property value. Timestamp at which the team was created.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->createdDateTime;
    }

    /**
     * Gets the description property value. An optional description for the team. Maximum length: 1024 characters.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * Gets the displayName property value. The name of the team.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'allChannels' => function (ParseNode $n) use ($o) { $o->setAllChannels($n->getCollectionOfObjectValues(array(Channel::class, 'createFromDiscriminatorValue'))); },
            'channels' => function (ParseNode $n) use ($o) { $o->setChannels($n->getCollectionOfObjectValues(array(Channel::class, 'createFromDiscriminatorValue'))); },
            'classification' => function (ParseNode $n) use ($o) { $o->setClassification($n->getStringValue()); },
            'createdDateTime' => function (ParseNode $n) use ($o) { $o->setCreatedDateTime($n->getDateTimeValue()); },
            'description' => function (ParseNode $n) use ($o) { $o->setDescription($n->getStringValue()); },
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'funSettings' => function (ParseNode $n) use ($o) { $o->setFunSettings($n->getObjectValue(array(TeamFunSettings::class, 'createFromDiscriminatorValue'))); },
            'group' => function (ParseNode $n) use ($o) { $o->setGroup($n->getObjectValue(array(Group::class, 'createFromDiscriminatorValue'))); },
            'guestSettings' => function (ParseNode $n) use ($o) { $o->setGuestSettings($n->getObjectValue(array(TeamGuestSettings::class, 'createFromDiscriminatorValue'))); },
            'incomingChannels' => function (ParseNode $n) use ($o) { $o->setIncomingChannels($n->getCollectionOfObjectValues(array(Channel::class, 'createFromDiscriminatorValue'))); },
            'installedApps' => function (ParseNode $n) use ($o) { $o->setInstalledApps($n->getCollectionOfObjectValues(array(TeamsAppInstallation::class, 'createFromDiscriminatorValue'))); },
            'internalId' => function (ParseNode $n) use ($o) { $o->setInternalId($n->getStringValue()); },
            'isArchived' => function (ParseNode $n) use ($o) { $o->setIsArchived($n->getBooleanValue()); },
            'members' => function (ParseNode $n) use ($o) { $o->setMembers($n->getCollectionOfObjectValues(array(ConversationMember::class, 'createFromDiscriminatorValue'))); },
            'memberSettings' => function (ParseNode $n) use ($o) { $o->setMemberSettings($n->getObjectValue(array(TeamMemberSettings::class, 'createFromDiscriminatorValue'))); },
            'messagingSettings' => function (ParseNode $n) use ($o) { $o->setMessagingSettings($n->getObjectValue(array(TeamMessagingSettings::class, 'createFromDiscriminatorValue'))); },
            'operations' => function (ParseNode $n) use ($o) { $o->setOperations($n->getCollectionOfObjectValues(array(TeamsAsyncOperation::class, 'createFromDiscriminatorValue'))); },
            'primaryChannel' => function (ParseNode $n) use ($o) { $o->setPrimaryChannel($n->getObjectValue(array(Channel::class, 'createFromDiscriminatorValue'))); },
            'schedule' => function (ParseNode $n) use ($o) { $o->setSchedule($n->getObjectValue(array(Schedule::class, 'createFromDiscriminatorValue'))); },
            'specialization' => function (ParseNode $n) use ($o) { $o->setSpecialization($n->getEnumValue(TeamSpecialization::class)); },
            'template' => function (ParseNode $n) use ($o) { $o->setTemplate($n->getObjectValue(array(TeamsTemplate::class, 'createFromDiscriminatorValue'))); },
            'tenantId' => function (ParseNode $n) use ($o) { $o->setTenantId($n->getStringValue()); },
            'visibility' => function (ParseNode $n) use ($o) { $o->setVisibility($n->getEnumValue(TeamVisibilityType::class)); },
            'webUrl' => function (ParseNode $n) use ($o) { $o->setWebUrl($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the funSettings property value. Settings to configure use of Giphy, memes, and stickers in the team.
     * @return TeamFunSettings|null
    */
    public function getFunSettings(): ?TeamFunSettings {
        return $this->funSettings;
    }

    /**
     * Gets the group property value. The group property
     * @return Group|null
    */
    public function getGroup(): ?Group {
        return $this->group;
    }

    /**
     * Gets the guestSettings property value. Settings to configure whether guests can create, update, or delete channels in the team.
     * @return TeamGuestSettings|null
    */
    public function getGuestSettings(): ?TeamGuestSettings {
        return $this->guestSettings;
    }

    /**
     * Gets the incomingChannels property value. List of channels shared with the team.
     * @return array<Channel>|null
    */
    public function getIncomingChannels(): ?array {
        return $this->incomingChannels;
    }

    /**
     * Gets the installedApps property value. The apps installed in this team.
     * @return array<TeamsAppInstallation>|null
    */
    public function getInstalledApps(): ?array {
        return $this->installedApps;
    }

    /**
     * Gets the internalId property value. A unique ID for the team that has been used in a few places such as the audit log/Office 365 Management Activity API.
     * @return string|null
    */
    public function getInternalId(): ?string {
        return $this->internalId;
    }

    /**
     * Gets the isArchived property value. Whether this team is in read-only mode.
     * @return bool|null
    */
    public function getIsArchived(): ?bool {
        return $this->isArchived;
    }

    /**
     * Gets the members property value. Members and owners of the team.
     * @return array<ConversationMember>|null
    */
    public function getMembers(): ?array {
        return $this->members;
    }

    /**
     * Gets the memberSettings property value. Settings to configure whether members can perform certain actions, for example, create channels and add bots, in the team.
     * @return TeamMemberSettings|null
    */
    public function getMemberSettings(): ?TeamMemberSettings {
        return $this->memberSettings;
    }

    /**
     * Gets the messagingSettings property value. Settings to configure messaging and mentions in the team.
     * @return TeamMessagingSettings|null
    */
    public function getMessagingSettings(): ?TeamMessagingSettings {
        return $this->messagingSettings;
    }

    /**
     * Gets the operations property value. The async operations that ran or are running on this team.
     * @return array<TeamsAsyncOperation>|null
    */
    public function getOperations(): ?array {
        return $this->operations;
    }

    /**
     * Gets the primaryChannel property value. The general channel for the team.
     * @return Channel|null
    */
    public function getPrimaryChannel(): ?Channel {
        return $this->primaryChannel;
    }

    /**
     * Gets the schedule property value. The schedule of shifts for this team.
     * @return Schedule|null
    */
    public function getSchedule(): ?Schedule {
        return $this->schedule;
    }

    /**
     * Gets the specialization property value. Optional. Indicates whether the team is intended for a particular use case.  Each team specialization has access to unique behaviors and experiences targeted to its use case.
     * @return TeamSpecialization|null
    */
    public function getSpecialization(): ?TeamSpecialization {
        return $this->specialization;
    }

    /**
     * Gets the template property value. The template this team was created from. See available templates.
     * @return TeamsTemplate|null
    */
    public function getTemplate(): ?TeamsTemplate {
        return $this->template;
    }

    /**
     * Gets the tenantId property value. The ID of the Azure Active Directory tenant.
     * @return string|null
    */
    public function getTenantId(): ?string {
        return $this->tenantId;
    }

    /**
     * Gets the visibility property value. The visibility of the group and team. Defaults to Public.
     * @return TeamVisibilityType|null
    */
    public function getVisibility(): ?TeamVisibilityType {
        return $this->visibility;
    }

    /**
     * Gets the webUrl property value. A hyperlink that will go to the team in the Microsoft Teams client. This is the URL that you get when you right-click a team in the Microsoft Teams client and select Get link to team. This URL should be treated as an opaque blob, and not parsed.
     * @return string|null
    */
    public function getWebUrl(): ?string {
        return $this->webUrl;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('allChannels', $this->allChannels);
        $writer->writeCollectionOfObjectValues('channels', $this->channels);
        $writer->writeStringValue('classification', $this->classification);
        $writer->writeDateTimeValue('createdDateTime', $this->createdDateTime);
        $writer->writeStringValue('description', $this->description);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeObjectValue('funSettings', $this->funSettings);
        $writer->writeObjectValue('group', $this->group);
        $writer->writeObjectValue('guestSettings', $this->guestSettings);
        $writer->writeCollectionOfObjectValues('incomingChannels', $this->incomingChannels);
        $writer->writeCollectionOfObjectValues('installedApps', $this->installedApps);
        $writer->writeStringValue('internalId', $this->internalId);
        $writer->writeBooleanValue('isArchived', $this->isArchived);
        $writer->writeCollectionOfObjectValues('members', $this->members);
        $writer->writeObjectValue('memberSettings', $this->memberSettings);
        $writer->writeObjectValue('messagingSettings', $this->messagingSettings);
        $writer->writeCollectionOfObjectValues('operations', $this->operations);
        $writer->writeObjectValue('primaryChannel', $this->primaryChannel);
        $writer->writeObjectValue('schedule', $this->schedule);
        $writer->writeEnumValue('specialization', $this->specialization);
        $writer->writeObjectValue('template', $this->template);
        $writer->writeStringValue('tenantId', $this->tenantId);
        $writer->writeEnumValue('visibility', $this->visibility);
        $writer->writeStringValue('webUrl', $this->webUrl);
    }

    /**
     * Sets the allChannels property value. List of channels either hosted in or shared with the team (incoming channels).
     *  @param array<Channel>|null $value Value to set for the allChannels property.
    */
    public function setAllChannels(?array $value ): void {
        $this->allChannels = $value;
    }

    /**
     * Sets the channels property value. The collection of channels and messages associated with the team.
     *  @param array<Channel>|null $value Value to set for the channels property.
    */
    public function setChannels(?array $value ): void {
        $this->channels = $value;
    }

    /**
     * Sets the classification property value. An optional label. Typically describes the data or business sensitivity of the team. Must match one of a pre-configured set in the tenant's directory.
     *  @param string|null $value Value to set for the classification property.
    */
    public function setClassification(?string $value ): void {
        $this->classification = $value;
    }

    /**
     * Sets the createdDateTime property value. Timestamp at which the team was created.
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value ): void {
        $this->createdDateTime = $value;
    }

    /**
     * Sets the description property value. An optional description for the team. Maximum length: 1024 characters.
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value ): void {
        $this->description = $value;
    }

    /**
     * Sets the displayName property value. The name of the team.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the funSettings property value. Settings to configure use of Giphy, memes, and stickers in the team.
     *  @param TeamFunSettings|null $value Value to set for the funSettings property.
    */
    public function setFunSettings(?TeamFunSettings $value ): void {
        $this->funSettings = $value;
    }

    /**
     * Sets the group property value. The group property
     *  @param Group|null $value Value to set for the group property.
    */
    public function setGroup(?Group $value ): void {
        $this->group = $value;
    }

    /**
     * Sets the guestSettings property value. Settings to configure whether guests can create, update, or delete channels in the team.
     *  @param TeamGuestSettings|null $value Value to set for the guestSettings property.
    */
    public function setGuestSettings(?TeamGuestSettings $value ): void {
        $this->guestSettings = $value;
    }

    /**
     * Sets the incomingChannels property value. List of channels shared with the team.
     *  @param array<Channel>|null $value Value to set for the incomingChannels property.
    */
    public function setIncomingChannels(?array $value ): void {
        $this->incomingChannels = $value;
    }

    /**
     * Sets the installedApps property value. The apps installed in this team.
     *  @param array<TeamsAppInstallation>|null $value Value to set for the installedApps property.
    */
    public function setInstalledApps(?array $value ): void {
        $this->installedApps = $value;
    }

    /**
     * Sets the internalId property value. A unique ID for the team that has been used in a few places such as the audit log/Office 365 Management Activity API.
     *  @param string|null $value Value to set for the internalId property.
    */
    public function setInternalId(?string $value ): void {
        $this->internalId = $value;
    }

    /**
     * Sets the isArchived property value. Whether this team is in read-only mode.
     *  @param bool|null $value Value to set for the isArchived property.
    */
    public function setIsArchived(?bool $value ): void {
        $this->isArchived = $value;
    }

    /**
     * Sets the members property value. Members and owners of the team.
     *  @param array<ConversationMember>|null $value Value to set for the members property.
    */
    public function setMembers(?array $value ): void {
        $this->members = $value;
    }

    /**
     * Sets the memberSettings property value. Settings to configure whether members can perform certain actions, for example, create channels and add bots, in the team.
     *  @param TeamMemberSettings|null $value Value to set for the memberSettings property.
    */
    public function setMemberSettings(?TeamMemberSettings $value ): void {
        $this->memberSettings = $value;
    }

    /**
     * Sets the messagingSettings property value. Settings to configure messaging and mentions in the team.
     *  @param TeamMessagingSettings|null $value Value to set for the messagingSettings property.
    */
    public function setMessagingSettings(?TeamMessagingSettings $value ): void {
        $this->messagingSettings = $value;
    }

    /**
     * Sets the operations property value. The async operations that ran or are running on this team.
     *  @param array<TeamsAsyncOperation>|null $value Value to set for the operations property.
    */
    public function setOperations(?array $value ): void {
        $this->operations = $value;
    }

    /**
     * Sets the primaryChannel property value. The general channel for the team.
     *  @param Channel|null $value Value to set for the primaryChannel property.
    */
    public function setPrimaryChannel(?Channel $value ): void {
        $this->primaryChannel = $value;
    }

    /**
     * Sets the schedule property value. The schedule of shifts for this team.
     *  @param Schedule|null $value Value to set for the schedule property.
    */
    public function setSchedule(?Schedule $value ): void {
        $this->schedule = $value;
    }

    /**
     * Sets the specialization property value. Optional. Indicates whether the team is intended for a particular use case.  Each team specialization has access to unique behaviors and experiences targeted to its use case.
     *  @param TeamSpecialization|null $value Value to set for the specialization property.
    */
    public function setSpecialization(?TeamSpecialization $value ): void {
        $this->specialization = $value;
    }

    /**
     * Sets the template property value. The template this team was created from. See available templates.
     *  @param TeamsTemplate|null $value Value to set for the template property.
    */
    public function setTemplate(?TeamsTemplate $value ): void {
        $this->template = $value;
    }

    /**
     * Sets the tenantId property value. The ID of the Azure Active Directory tenant.
     *  @param string|null $value Value to set for the tenantId property.
    */
    public function setTenantId(?string $value ): void {
        $this->tenantId = $value;
    }

    /**
     * Sets the visibility property value. The visibility of the group and team. Defaults to Public.
     *  @param TeamVisibilityType|null $value Value to set for the visibility property.
    */
    public function setVisibility(?TeamVisibilityType $value ): void {
        $this->visibility = $value;
    }

    /**
     * Sets the webUrl property value. A hyperlink that will go to the team in the Microsoft Teams client. This is the URL that you get when you right-click a team in the Microsoft Teams client and select Get link to team. This URL should be treated as an opaque blob, and not parsed.
     *  @param string|null $value Value to set for the webUrl property.
    */
    public function setWebUrl(?string $value ): void {
        $this->webUrl = $value;
    }

}
