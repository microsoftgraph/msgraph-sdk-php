<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Invitation extends Entity implements Parsable 
{
    /**
     * @var User|null $invitedUser The user created as part of the invitation creation. Read-Only
    */
    private ?User $invitedUser = null;
    
    /**
     * @var string|null $invitedUserDisplayName The display name of the user being invited.
    */
    private ?string $invitedUserDisplayName = null;
    
    /**
     * @var string|null $invitedUserEmailAddress The email address of the user being invited. Required. The following special characters are not permitted in the email address:Tilde (~)Exclamation point (!)At sign (@)Number sign (#)Dollar sign ($)Percent (%)Circumflex (^)Ampersand (&)Asterisk (*)Parentheses (( ))Hyphen (-)Plus sign (+)Equal sign (=)Brackets ([ ])Braces ({ })Backslash (/)Slash mark (/)Pipe (`
    */
    private ?string $invitedUserEmailAddress = null;
    
    /**
     * @var InvitedUserMessageInfo|null $invitedUserMessageInfo Additional configuration for the message being sent to the invited user, including customizing message text, language and cc recipient list.
    */
    private ?InvitedUserMessageInfo $invitedUserMessageInfo = null;
    
    /**
     * @var string|null $invitedUserType The userType of the user being invited. By default, this is Guest. You can invite as Member if you're are company administrator. The default is false.
    */
    private ?string $invitedUserType = null;
    
    /**
     * @var string|null $inviteRedeemUrl The URL the user can use to redeem their invitation. Read-only.
    */
    private ?string $inviteRedeemUrl = null;
    
    /**
     * @var string|null $inviteRedirectUrl The URL user should be redirected to once the invitation is redeemed. Required.
    */
    private ?string $inviteRedirectUrl = null;
    
    /**
     * @var bool|null $sendInvitationMessage Indicates whether an email should be sent to the user being invited. The default is false.
    */
    private ?bool $sendInvitationMessage = null;
    
    /**
     * @var string|null $status The status of the invitation. Possible values: PendingAcceptance, Completed, InProgress, and Error
    */
    private ?string $status = null;
    
    /**
     * Instantiates a new invitation and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Invitation
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Invitation {
        return new Invitation();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'invitedUser' => function (ParseNode $n) use ($o) { $o->setInvitedUser($n->getObjectValue(array(User::class, 'createFromDiscriminatorValue'))); },
            'invitedUserDisplayName' => function (ParseNode $n) use ($o) { $o->setInvitedUserDisplayName($n->getStringValue()); },
            'invitedUserEmailAddress' => function (ParseNode $n) use ($o) { $o->setInvitedUserEmailAddress($n->getStringValue()); },
            'invitedUserMessageInfo' => function (ParseNode $n) use ($o) { $o->setInvitedUserMessageInfo($n->getObjectValue(array(InvitedUserMessageInfo::class, 'createFromDiscriminatorValue'))); },
            'invitedUserType' => function (ParseNode $n) use ($o) { $o->setInvitedUserType($n->getStringValue()); },
            'inviteRedeemUrl' => function (ParseNode $n) use ($o) { $o->setInviteRedeemUrl($n->getStringValue()); },
            'inviteRedirectUrl' => function (ParseNode $n) use ($o) { $o->setInviteRedirectUrl($n->getStringValue()); },
            'sendInvitationMessage' => function (ParseNode $n) use ($o) { $o->setSendInvitationMessage($n->getBooleanValue()); },
            'status' => function (ParseNode $n) use ($o) { $o->setStatus($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the invitedUser property value. The user created as part of the invitation creation. Read-Only
     * @return User|null
    */
    public function getInvitedUser(): ?User {
        return $this->invitedUser;
    }

    /**
     * Gets the invitedUserDisplayName property value. The display name of the user being invited.
     * @return string|null
    */
    public function getInvitedUserDisplayName(): ?string {
        return $this->invitedUserDisplayName;
    }

    /**
     * Gets the invitedUserEmailAddress property value. The email address of the user being invited. Required. The following special characters are not permitted in the email address:Tilde (~)Exclamation point (!)At sign (@)Number sign (#)Dollar sign ($)Percent (%)Circumflex (^)Ampersand (&)Asterisk (*)Parentheses (( ))Hyphen (-)Plus sign (+)Equal sign (=)Brackets ([ ])Braces ({ })Backslash (/)Slash mark (/)Pipe (`
     * @return string|null
    */
    public function getInvitedUserEmailAddress(): ?string {
        return $this->invitedUserEmailAddress;
    }

    /**
     * Gets the invitedUserMessageInfo property value. Additional configuration for the message being sent to the invited user, including customizing message text, language and cc recipient list.
     * @return InvitedUserMessageInfo|null
    */
    public function getInvitedUserMessageInfo(): ?InvitedUserMessageInfo {
        return $this->invitedUserMessageInfo;
    }

    /**
     * Gets the invitedUserType property value. The userType of the user being invited. By default, this is Guest. You can invite as Member if you're are company administrator. The default is false.
     * @return string|null
    */
    public function getInvitedUserType(): ?string {
        return $this->invitedUserType;
    }

    /**
     * Gets the inviteRedeemUrl property value. The URL the user can use to redeem their invitation. Read-only.
     * @return string|null
    */
    public function getInviteRedeemUrl(): ?string {
        return $this->inviteRedeemUrl;
    }

    /**
     * Gets the inviteRedirectUrl property value. The URL user should be redirected to once the invitation is redeemed. Required.
     * @return string|null
    */
    public function getInviteRedirectUrl(): ?string {
        return $this->inviteRedirectUrl;
    }

    /**
     * Gets the sendInvitationMessage property value. Indicates whether an email should be sent to the user being invited. The default is false.
     * @return bool|null
    */
    public function getSendInvitationMessage(): ?bool {
        return $this->sendInvitationMessage;
    }

    /**
     * Gets the status property value. The status of the invitation. Possible values: PendingAcceptance, Completed, InProgress, and Error
     * @return string|null
    */
    public function getStatus(): ?string {
        return $this->status;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('invitedUser', $this->invitedUser);
        $writer->writeStringValue('invitedUserDisplayName', $this->invitedUserDisplayName);
        $writer->writeStringValue('invitedUserEmailAddress', $this->invitedUserEmailAddress);
        $writer->writeObjectValue('invitedUserMessageInfo', $this->invitedUserMessageInfo);
        $writer->writeStringValue('invitedUserType', $this->invitedUserType);
        $writer->writeStringValue('inviteRedeemUrl', $this->inviteRedeemUrl);
        $writer->writeStringValue('inviteRedirectUrl', $this->inviteRedirectUrl);
        $writer->writeBooleanValue('sendInvitationMessage', $this->sendInvitationMessage);
        $writer->writeStringValue('status', $this->status);
    }

    /**
     * Sets the invitedUser property value. The user created as part of the invitation creation. Read-Only
     *  @param User|null $value Value to set for the invitedUser property.
    */
    public function setInvitedUser(?User $value ): void {
        $this->invitedUser = $value;
    }

    /**
     * Sets the invitedUserDisplayName property value. The display name of the user being invited.
     *  @param string|null $value Value to set for the invitedUserDisplayName property.
    */
    public function setInvitedUserDisplayName(?string $value ): void {
        $this->invitedUserDisplayName = $value;
    }

    /**
     * Sets the invitedUserEmailAddress property value. The email address of the user being invited. Required. The following special characters are not permitted in the email address:Tilde (~)Exclamation point (!)At sign (@)Number sign (#)Dollar sign ($)Percent (%)Circumflex (^)Ampersand (&)Asterisk (*)Parentheses (( ))Hyphen (-)Plus sign (+)Equal sign (=)Brackets ([ ])Braces ({ })Backslash (/)Slash mark (/)Pipe (`
     *  @param string|null $value Value to set for the invitedUserEmailAddress property.
    */
    public function setInvitedUserEmailAddress(?string $value ): void {
        $this->invitedUserEmailAddress = $value;
    }

    /**
     * Sets the invitedUserMessageInfo property value. Additional configuration for the message being sent to the invited user, including customizing message text, language and cc recipient list.
     *  @param InvitedUserMessageInfo|null $value Value to set for the invitedUserMessageInfo property.
    */
    public function setInvitedUserMessageInfo(?InvitedUserMessageInfo $value ): void {
        $this->invitedUserMessageInfo = $value;
    }

    /**
     * Sets the invitedUserType property value. The userType of the user being invited. By default, this is Guest. You can invite as Member if you're are company administrator. The default is false.
     *  @param string|null $value Value to set for the invitedUserType property.
    */
    public function setInvitedUserType(?string $value ): void {
        $this->invitedUserType = $value;
    }

    /**
     * Sets the inviteRedeemUrl property value. The URL the user can use to redeem their invitation. Read-only.
     *  @param string|null $value Value to set for the inviteRedeemUrl property.
    */
    public function setInviteRedeemUrl(?string $value ): void {
        $this->inviteRedeemUrl = $value;
    }

    /**
     * Sets the inviteRedirectUrl property value. The URL user should be redirected to once the invitation is redeemed. Required.
     *  @param string|null $value Value to set for the inviteRedirectUrl property.
    */
    public function setInviteRedirectUrl(?string $value ): void {
        $this->inviteRedirectUrl = $value;
    }

    /**
     * Sets the sendInvitationMessage property value. Indicates whether an email should be sent to the user being invited. The default is false.
     *  @param bool|null $value Value to set for the sendInvitationMessage property.
    */
    public function setSendInvitationMessage(?bool $value ): void {
        $this->sendInvitationMessage = $value;
    }

    /**
     * Sets the status property value. The status of the invitation. Possible values: PendingAcceptance, Completed, InProgress, and Error
     *  @param string|null $value Value to set for the status property.
    */
    public function setStatus(?string $value ): void {
        $this->status = $value;
    }

}
