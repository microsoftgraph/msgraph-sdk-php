<?php

namespace Microsoft\Graph\Generated\Users\Item\Drives\Item\Root\Invite;

use Microsoft\Graph\Generated\Models\DriveRecipient;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class InvitePostRequestBody implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $expirationDateTime The expirationDateTime property
    */
    private ?string $expirationDateTime = null;
    
    /**
     * @var string|null $message The message property
    */
    private ?string $message = null;
    
    /**
     * @var string|null $password The password property
    */
    private ?string $password = null;
    
    /**
     * @var array<DriveRecipient>|null $recipients The recipients property
    */
    private ?array $recipients = null;
    
    /**
     * @var bool|null $requireSignIn The requireSignIn property
    */
    private ?bool $requireSignIn = null;
    
    /**
     * @var bool|null $retainInheritedPermissions The retainInheritedPermissions property
    */
    private ?bool $retainInheritedPermissions = null;
    
    /**
     * @var array<string>|null $roles The roles property
    */
    private ?array $roles = null;
    
    /**
     * @var bool|null $sendInvitation The sendInvitation property
    */
    private ?bool $sendInvitation = null;
    
    /**
     * Instantiates a new invitePostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return InvitePostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): InvitePostRequestBody {
        return new InvitePostRequestBody();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the expirationDateTime property value. The expirationDateTime property
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
        $o = $this;
        return  [
            'expirationDateTime' => fn(ParseNode $n) => $o->setExpirationDateTime($n->getStringValue()),
            'message' => fn(ParseNode $n) => $o->setMessage($n->getStringValue()),
            'password' => fn(ParseNode $n) => $o->setPassword($n->getStringValue()),
            'recipients' => fn(ParseNode $n) => $o->setRecipients($n->getCollectionOfObjectValues([DriveRecipient::class, 'createFromDiscriminatorValue'])),
            'requireSignIn' => fn(ParseNode $n) => $o->setRequireSignIn($n->getBooleanValue()),
            'retainInheritedPermissions' => fn(ParseNode $n) => $o->setRetainInheritedPermissions($n->getBooleanValue()),
            'roles' => fn(ParseNode $n) => $o->setRoles($n->getCollectionOfPrimitiveValues()),
            'sendInvitation' => fn(ParseNode $n) => $o->setSendInvitation($n->getBooleanValue()),
        ];
    }

    /**
     * Gets the message property value. The message property
     * @return string|null
    */
    public function getMessage(): ?string {
        return $this->message;
    }

    /**
     * Gets the password property value. The password property
     * @return string|null
    */
    public function getPassword(): ?string {
        return $this->password;
    }

    /**
     * Gets the recipients property value. The recipients property
     * @return array<DriveRecipient>|null
    */
    public function getRecipients(): ?array {
        return $this->recipients;
    }

    /**
     * Gets the requireSignIn property value. The requireSignIn property
     * @return bool|null
    */
    public function getRequireSignIn(): ?bool {
        return $this->requireSignIn;
    }

    /**
     * Gets the retainInheritedPermissions property value. The retainInheritedPermissions property
     * @return bool|null
    */
    public function getRetainInheritedPermissions(): ?bool {
        return $this->retainInheritedPermissions;
    }

    /**
     * Gets the roles property value. The roles property
     * @return array<string>|null
    */
    public function getRoles(): ?array {
        return $this->roles;
    }

    /**
     * Gets the sendInvitation property value. The sendInvitation property
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
     * Sets the expirationDateTime property value. The expirationDateTime property
     *  @param string|null $value Value to set for the expirationDateTime property.
    */
    public function setExpirationDateTime(?string $value ): void {
        $this->expirationDateTime = $value;
    }

    /**
     * Sets the message property value. The message property
     *  @param string|null $value Value to set for the message property.
    */
    public function setMessage(?string $value ): void {
        $this->message = $value;
    }

    /**
     * Sets the password property value. The password property
     *  @param string|null $value Value to set for the password property.
    */
    public function setPassword(?string $value ): void {
        $this->password = $value;
    }

    /**
     * Sets the recipients property value. The recipients property
     *  @param array<DriveRecipient>|null $value Value to set for the recipients property.
    */
    public function setRecipients(?array $value ): void {
        $this->recipients = $value;
    }

    /**
     * Sets the requireSignIn property value. The requireSignIn property
     *  @param bool|null $value Value to set for the requireSignIn property.
    */
    public function setRequireSignIn(?bool $value ): void {
        $this->requireSignIn = $value;
    }

    /**
     * Sets the retainInheritedPermissions property value. The retainInheritedPermissions property
     *  @param bool|null $value Value to set for the retainInheritedPermissions property.
    */
    public function setRetainInheritedPermissions(?bool $value ): void {
        $this->retainInheritedPermissions = $value;
    }

    /**
     * Sets the roles property value. The roles property
     *  @param array<string>|null $value Value to set for the roles property.
    */
    public function setRoles(?array $value ): void {
        $this->roles = $value;
    }

    /**
     * Sets the sendInvitation property value. The sendInvitation property
     *  @param bool|null $value Value to set for the sendInvitation property.
    */
    public function setSendInvitation(?bool $value ): void {
        $this->sendInvitation = $value;
    }

}
