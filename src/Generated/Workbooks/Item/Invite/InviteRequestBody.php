<?php

namespace Microsoft\Graph\Generated\Workbooks\Item\Invite;

use Microsoft\Graph\Generated\Models\Microsoft\Graph\DriveRecipient;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class InviteRequestBody implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var string|null $expirationDateTime  */
    private ?string $expirationDateTime = null;
    
    /** @var string|null $message  */
    private ?string $message = null;
    
    /** @var string|null $password  */
    private ?string $password = null;
    
    /** @var array<DriveRecipient>|null $recipients  */
    private ?array $recipients = null;
    
    /** @var bool|null $requireSignIn  */
    private ?bool $requireSignIn = null;
    
    /** @var bool|null $retainInheritedPermissions  */
    private ?bool $retainInheritedPermissions = null;
    
    /** @var array<string>|null $roles  */
    private ?array $roles = null;
    
    /** @var bool|null $sendInvitation  */
    private ?bool $sendInvitation = null;
    
    /**
     * Instantiates a new inviteRequestBody and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return InviteRequestBody
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): InviteRequestBody {
        return new InviteRequestBody();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the expirationDateTime property value. 
     * @return string|null
    */
    public function getExpirationDateTime(): ?string {
        return $this->expirationDateTime;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'expirationDateTime' => function (self $o, ParseNode $n) { $o->setExpirationDateTime($n->getStringValue()); },
            'message' => function (self $o, ParseNode $n) { $o->setMessage($n->getStringValue()); },
            'password' => function (self $o, ParseNode $n) { $o->setPassword($n->getStringValue()); },
            'recipients' => function (self $o, ParseNode $n) { $o->setRecipients($n->getCollectionOfObjectValues(DriveRecipient::class)); },
            'requireSignIn' => function (self $o, ParseNode $n) { $o->setRequireSignIn($n->getBooleanValue()); },
            'retainInheritedPermissions' => function (self $o, ParseNode $n) { $o->setRetainInheritedPermissions($n->getBooleanValue()); },
            'roles' => function (self $o, ParseNode $n) { $o->setRoles($n->getCollectionOfPrimitiveValues()); },
            'sendInvitation' => function (self $o, ParseNode $n) { $o->setSendInvitation($n->getBooleanValue()); },
        ];
    }

    /**
     * Gets the message property value. 
     * @return string|null
    */
    public function getMessage(): ?string {
        return $this->message;
    }

    /**
     * Gets the password property value. 
     * @return string|null
    */
    public function getPassword(): ?string {
        return $this->password;
    }

    /**
     * Gets the recipients property value. 
     * @return array<DriveRecipient>|null
    */
    public function getRecipients(): ?array {
        return $this->recipients;
    }

    /**
     * Gets the requireSignIn property value. 
     * @return bool|null
    */
    public function getRequireSignIn(): ?bool {
        return $this->requireSignIn;
    }

    /**
     * Gets the retainInheritedPermissions property value. 
     * @return bool|null
    */
    public function getRetainInheritedPermissions(): ?bool {
        return $this->retainInheritedPermissions;
    }

    /**
     * Gets the roles property value. 
     * @return array<string>|null
    */
    public function getRoles(): ?array {
        return $this->roles;
    }

    /**
     * Gets the sendInvitation property value. 
     * @return bool|null
    */
    public function getSendInvitation(): ?bool {
        return $this->sendInvitation;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('expirationDateTime', $this->expirationDateTime);
        $writer->writeStringValue('message', $this->message);
        $writer->writeStringValue('password', $this->password);
        $writer->writeCollectionOfObjectValues('recipients', $this->recipients);
        $writer->writeBooleanValue('requireSignIn', $this->requireSignIn);
        $writer->writeBooleanValue('retainInheritedPermissions', $this->retainInheritedPermissions);
        $writer->writeCollectionOfPrimitiveValues('roles', $this->roles);
        $writer->writeBooleanValue('sendInvitation', $this->sendInvitation);
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
     * Sets the expirationDateTime property value. 
     *  @param string|null $value Value to set for the expirationDateTime property.
    */
    public function setExpirationDateTime(?string $value ): void {
        $this->expirationDateTime = $value;
    }

    /**
     * Sets the message property value. 
     *  @param string|null $value Value to set for the message property.
    */
    public function setMessage(?string $value ): void {
        $this->message = $value;
    }

    /**
     * Sets the password property value. 
     *  @param string|null $value Value to set for the password property.
    */
    public function setPassword(?string $value ): void {
        $this->password = $value;
    }

    /**
     * Sets the recipients property value. 
     *  @param array<DriveRecipient>|null $value Value to set for the recipients property.
    */
    public function setRecipients(?array $value ): void {
        $this->recipients = $value;
    }

    /**
     * Sets the requireSignIn property value. 
     *  @param bool|null $value Value to set for the requireSignIn property.
    */
    public function setRequireSignIn(?bool $value ): void {
        $this->requireSignIn = $value;
    }

    /**
     * Sets the retainInheritedPermissions property value. 
     *  @param bool|null $value Value to set for the retainInheritedPermissions property.
    */
    public function setRetainInheritedPermissions(?bool $value ): void {
        $this->retainInheritedPermissions = $value;
    }

    /**
     * Sets the roles property value. 
     *  @param array<string>|null $value Value to set for the roles property.
    */
    public function setRoles(?array $value ): void {
        $this->roles = $value;
    }

    /**
     * Sets the sendInvitation property value. 
     *  @param bool|null $value Value to set for the sendInvitation property.
    */
    public function setSendInvitation(?bool $value ): void {
        $this->sendInvitation = $value;
    }

}
