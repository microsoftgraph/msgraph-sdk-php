<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Invitation extends Entity implements Parsable 
{
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
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'invitedUser' => fn(ParseNode $n) => $o->setInvitedUser($n->getObjectValue([User::class, 'createFromDiscriminatorValue'])),
            'invitedUserDisplayName' => fn(ParseNode $n) => $o->setInvitedUserDisplayName($n->getStringValue()),
            'invitedUserEmailAddress' => fn(ParseNode $n) => $o->setInvitedUserEmailAddress($n->getStringValue()),
            'invitedUserMessageInfo' => fn(ParseNode $n) => $o->setInvitedUserMessageInfo($n->getObjectValue([InvitedUserMessageInfo::class, 'createFromDiscriminatorValue'])),
            'invitedUserType' => fn(ParseNode $n) => $o->setInvitedUserType($n->getStringValue()),
            'inviteRedeemUrl' => fn(ParseNode $n) => $o->setInviteRedeemUrl($n->getStringValue()),
            'inviteRedirectUrl' => fn(ParseNode $n) => $o->setInviteRedirectUrl($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'resetRedemption' => fn(ParseNode $n) => $o->setResetRedemption($n->getBooleanValue()),
            'sendInvitationMessage' => fn(ParseNode $n) => $o->setSendInvitationMessage($n->getBooleanValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getStringValue()),
        ]);
    }

    /**
     * Gets the invitedUser property value. The user created as part of the invitation creation. Read-Only
     * @return User|null
    */
    public function getInvitedUser(): ?User {
        $val = $this->getBackingStore()->get('invitedUser');
        if (is_null($val) || $val instanceof User) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'invitedUser'");
    }

    /**
     * Gets the invitedUserDisplayName property value. The display name of the user being invited.
     * @return string|null
    */
    public function getInvitedUserDisplayName(): ?string {
        $val = $this->getBackingStore()->get('invitedUserDisplayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'invitedUserDisplayName'");
    }

    /**
     * Gets the invitedUserEmailAddress property value. The email address of the user being invited. Required. The following special characters are not permitted in the email address:Tilde (~)Exclamation point (!)Number sign (#)Dollar sign ($)Percent (%)Circumflex (^)Ampersand (&)Asterisk (*)Parentheses (( ))Plus sign (+)Equal sign (=)Brackets ([ ])Braces ({ })Backslash (/)Slash mark (/)Pipe (/|)Semicolon (;)Colon (:)Quotation marks (')Angle brackets (< >)Question mark (?)Comma (,)However, the following exceptions apply:A period (.) or a hyphen (-) is permitted anywhere in the user name, except at the beginning or end of the name.An underscore (_) is permitted anywhere in the user name. This includes at the beginning or end of the name.
     * @return string|null
    */
    public function getInvitedUserEmailAddress(): ?string {
        $val = $this->getBackingStore()->get('invitedUserEmailAddress');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'invitedUserEmailAddress'");
    }

    /**
     * Gets the invitedUserMessageInfo property value. Additional configuration for the message being sent to the invited user, including customizing message text, language and cc recipient list.
     * @return InvitedUserMessageInfo|null
    */
    public function getInvitedUserMessageInfo(): ?InvitedUserMessageInfo {
        $val = $this->getBackingStore()->get('invitedUserMessageInfo');
        if (is_null($val) || $val instanceof InvitedUserMessageInfo) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'invitedUserMessageInfo'");
    }

    /**
     * Gets the invitedUserType property value. The userType of the user being invited. By default, this is Guest. You can invite as Member if you are a company administrator.
     * @return string|null
    */
    public function getInvitedUserType(): ?string {
        $val = $this->getBackingStore()->get('invitedUserType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'invitedUserType'");
    }

    /**
     * Gets the inviteRedeemUrl property value. The URL the user can use to redeem their invitation. Read-only.
     * @return string|null
    */
    public function getInviteRedeemUrl(): ?string {
        $val = $this->getBackingStore()->get('inviteRedeemUrl');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'inviteRedeemUrl'");
    }

    /**
     * Gets the inviteRedirectUrl property value. The URL the user should be redirected to once the invitation is redeemed. Required.
     * @return string|null
    */
    public function getInviteRedirectUrl(): ?string {
        $val = $this->getBackingStore()->get('inviteRedirectUrl');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'inviteRedirectUrl'");
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        $val = $this->getBackingStore()->get('odataType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'odataType'");
    }

    /**
     * Gets the resetRedemption property value. Reset the user's redemption status and reinvite a user while retaining their user identifier, group memberships, and app assignments. This property allows you to enable a user to sign-in using a different email address from the one in the previous invitation. For more information about using this property, see Reset redemption status for a guest user.
     * @return bool|null
    */
    public function getResetRedemption(): ?bool {
        $val = $this->getBackingStore()->get('resetRedemption');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'resetRedemption'");
    }

    /**
     * Gets the sendInvitationMessage property value. Indicates whether an email should be sent to the user being invited. The default is false.
     * @return bool|null
    */
    public function getSendInvitationMessage(): ?bool {
        $val = $this->getBackingStore()->get('sendInvitationMessage');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sendInvitationMessage'");
    }

    /**
     * Gets the status property value. The status of the invitation. Possible values are: PendingAcceptance, Completed, InProgress, and Error.
     * @return string|null
    */
    public function getStatus(): ?string {
        $val = $this->getBackingStore()->get('status');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'status'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('invitedUser', $this->getInvitedUser());
        $writer->writeStringValue('invitedUserDisplayName', $this->getInvitedUserDisplayName());
        $writer->writeStringValue('invitedUserEmailAddress', $this->getInvitedUserEmailAddress());
        $writer->writeObjectValue('invitedUserMessageInfo', $this->getInvitedUserMessageInfo());
        $writer->writeStringValue('invitedUserType', $this->getInvitedUserType());
        $writer->writeStringValue('inviteRedeemUrl', $this->getInviteRedeemUrl());
        $writer->writeStringValue('inviteRedirectUrl', $this->getInviteRedirectUrl());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeBooleanValue('resetRedemption', $this->getResetRedemption());
        $writer->writeBooleanValue('sendInvitationMessage', $this->getSendInvitationMessage());
        $writer->writeStringValue('status', $this->getStatus());
    }

    /**
     * Sets the invitedUser property value. The user created as part of the invitation creation. Read-Only
     * @param User|null $value Value to set for the invitedUser property.
    */
    public function setInvitedUser(?User $value): void {
        $this->getBackingStore()->set('invitedUser', $value);
    }

    /**
     * Sets the invitedUserDisplayName property value. The display name of the user being invited.
     * @param string|null $value Value to set for the invitedUserDisplayName property.
    */
    public function setInvitedUserDisplayName(?string $value): void {
        $this->getBackingStore()->set('invitedUserDisplayName', $value);
    }

    /**
     * Sets the invitedUserEmailAddress property value. The email address of the user being invited. Required. The following special characters are not permitted in the email address:Tilde (~)Exclamation point (!)Number sign (#)Dollar sign ($)Percent (%)Circumflex (^)Ampersand (&)Asterisk (*)Parentheses (( ))Plus sign (+)Equal sign (=)Brackets ([ ])Braces ({ })Backslash (/)Slash mark (/)Pipe (/|)Semicolon (;)Colon (:)Quotation marks (')Angle brackets (< >)Question mark (?)Comma (,)However, the following exceptions apply:A period (.) or a hyphen (-) is permitted anywhere in the user name, except at the beginning or end of the name.An underscore (_) is permitted anywhere in the user name. This includes at the beginning or end of the name.
     * @param string|null $value Value to set for the invitedUserEmailAddress property.
    */
    public function setInvitedUserEmailAddress(?string $value): void {
        $this->getBackingStore()->set('invitedUserEmailAddress', $value);
    }

    /**
     * Sets the invitedUserMessageInfo property value. Additional configuration for the message being sent to the invited user, including customizing message text, language and cc recipient list.
     * @param InvitedUserMessageInfo|null $value Value to set for the invitedUserMessageInfo property.
    */
    public function setInvitedUserMessageInfo(?InvitedUserMessageInfo $value): void {
        $this->getBackingStore()->set('invitedUserMessageInfo', $value);
    }

    /**
     * Sets the invitedUserType property value. The userType of the user being invited. By default, this is Guest. You can invite as Member if you are a company administrator.
     * @param string|null $value Value to set for the invitedUserType property.
    */
    public function setInvitedUserType(?string $value): void {
        $this->getBackingStore()->set('invitedUserType', $value);
    }

    /**
     * Sets the inviteRedeemUrl property value. The URL the user can use to redeem their invitation. Read-only.
     * @param string|null $value Value to set for the inviteRedeemUrl property.
    */
    public function setInviteRedeemUrl(?string $value): void {
        $this->getBackingStore()->set('inviteRedeemUrl', $value);
    }

    /**
     * Sets the inviteRedirectUrl property value. The URL the user should be redirected to once the invitation is redeemed. Required.
     * @param string|null $value Value to set for the inviteRedirectUrl property.
    */
    public function setInviteRedirectUrl(?string $value): void {
        $this->getBackingStore()->set('inviteRedirectUrl', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the resetRedemption property value. Reset the user's redemption status and reinvite a user while retaining their user identifier, group memberships, and app assignments. This property allows you to enable a user to sign-in using a different email address from the one in the previous invitation. For more information about using this property, see Reset redemption status for a guest user.
     * @param bool|null $value Value to set for the resetRedemption property.
    */
    public function setResetRedemption(?bool $value): void {
        $this->getBackingStore()->set('resetRedemption', $value);
    }

    /**
     * Sets the sendInvitationMessage property value. Indicates whether an email should be sent to the user being invited. The default is false.
     * @param bool|null $value Value to set for the sendInvitationMessage property.
    */
    public function setSendInvitationMessage(?bool $value): void {
        $this->getBackingStore()->set('sendInvitationMessage', $value);
    }

    /**
     * Sets the status property value. The status of the invitation. Possible values are: PendingAcceptance, Completed, InProgress, and Error.
     * @param string|null $value Value to set for the status property.
    */
    public function setStatus(?string $value): void {
        $this->getBackingStore()->set('status', $value);
    }

}
