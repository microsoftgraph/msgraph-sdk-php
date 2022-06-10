<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SharingInvitation implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $email The email address provided for the recipient of the sharing invitation. Read-only.
    */
    private ?string $email = null;
    
    /**
     * @var IdentitySet|null $invitedBy Provides information about who sent the invitation that created this permission, if that information is available. Read-only.
    */
    private ?IdentitySet $invitedBy = null;
    
    /**
     * @var string|null $redeemedBy The redeemedBy property
    */
    private ?string $redeemedBy = null;
    
    /**
     * @var bool|null $signInRequired If true the recipient of the invitation needs to sign in in order to access the shared item. Read-only.
    */
    private ?bool $signInRequired = null;
    
    /**
     * Instantiates a new sharingInvitation and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SharingInvitation
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SharingInvitation {
        return new SharingInvitation();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the email property value. The email address provided for the recipient of the sharing invitation. Read-only.
     * @return string|null
    */
    public function getEmail(): ?string {
        return $this->email;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'email' => function (ParseNode $n) use ($o) { $o->setEmail($n->getStringValue()); },
            'invitedBy' => function (ParseNode $n) use ($o) { $o->setInvitedBy($n->getObjectValue(array(IdentitySet::class, 'createFromDiscriminatorValue'))); },
            'redeemedBy' => function (ParseNode $n) use ($o) { $o->setRedeemedBy($n->getStringValue()); },
            'signInRequired' => function (ParseNode $n) use ($o) { $o->setSignInRequired($n->getBooleanValue()); },
        ];
    }

    /**
     * Gets the invitedBy property value. Provides information about who sent the invitation that created this permission, if that information is available. Read-only.
     * @return IdentitySet|null
    */
    public function getInvitedBy(): ?IdentitySet {
        return $this->invitedBy;
    }

    /**
     * Gets the redeemedBy property value. The redeemedBy property
     * @return string|null
    */
    public function getRedeemedBy(): ?string {
        return $this->redeemedBy;
    }

    /**
     * Gets the signInRequired property value. If true the recipient of the invitation needs to sign in in order to access the shared item. Read-only.
     * @return bool|null
    */
    public function getSignInRequired(): ?bool {
        return $this->signInRequired;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('email', $this->email);
        $writer->writeObjectValue('invitedBy', $this->invitedBy);
        $writer->writeStringValue('redeemedBy', $this->redeemedBy);
        $writer->writeBooleanValue('signInRequired', $this->signInRequired);
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
     * Sets the email property value. The email address provided for the recipient of the sharing invitation. Read-only.
     *  @param string|null $value Value to set for the email property.
    */
    public function setEmail(?string $value ): void {
        $this->email = $value;
    }

    /**
     * Sets the invitedBy property value. Provides information about who sent the invitation that created this permission, if that information is available. Read-only.
     *  @param IdentitySet|null $value Value to set for the invitedBy property.
    */
    public function setInvitedBy(?IdentitySet $value ): void {
        $this->invitedBy = $value;
    }

    /**
     * Sets the redeemedBy property value. The redeemedBy property
     *  @param string|null $value Value to set for the redeemedBy property.
    */
    public function setRedeemedBy(?string $value ): void {
        $this->redeemedBy = $value;
    }

    /**
     * Sets the signInRequired property value. If true the recipient of the invitation needs to sign in in order to access the shared item. Read-only.
     *  @param bool|null $value Value to set for the signInRequired property.
    */
    public function setSignInRequired(?bool $value ): void {
        $this->signInRequired = $value;
    }

}
