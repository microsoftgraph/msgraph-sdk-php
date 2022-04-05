<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Shared implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var IdentitySet|null $owner The identity of the owner of the shared item. Read-only. */
    private ?IdentitySet $owner = null;
    
    /** @var string|null $scope Indicates the scope of how the item is shared: anonymous, organization, or users. Read-only. */
    private ?string $scope = null;
    
    /** @var IdentitySet|null $sharedBy The identity of the user who shared the item. Read-only. */
    private ?IdentitySet $sharedBy = null;
    
    /** @var DateTime|null $sharedDateTime The UTC date and time when the item was shared. Read-only. */
    private ?DateTime $sharedDateTime = null;
    
    /**
     * Instantiates a new shared and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Shared
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): Shared {
        return new Shared();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'owner' => function (self $o, ParseNode $n) { $o->setOwner($n->getObjectValue(IdentitySet::class)); },
            'scope' => function (self $o, ParseNode $n) { $o->setScope($n->getStringValue()); },
            'sharedBy' => function (self $o, ParseNode $n) { $o->setSharedBy($n->getObjectValue(IdentitySet::class)); },
            'sharedDateTime' => function (self $o, ParseNode $n) { $o->setSharedDateTime($n->getDateTimeValue()); },
        ];
    }

    /**
     * Gets the owner property value. The identity of the owner of the shared item. Read-only.
     * @return IdentitySet|null
    */
    public function getOwner(): ?IdentitySet {
        return $this->owner;
    }

    /**
     * Gets the scope property value. Indicates the scope of how the item is shared: anonymous, organization, or users. Read-only.
     * @return string|null
    */
    public function getScope(): ?string {
        return $this->scope;
    }

    /**
     * Gets the sharedBy property value. The identity of the user who shared the item. Read-only.
     * @return IdentitySet|null
    */
    public function getSharedBy(): ?IdentitySet {
        return $this->sharedBy;
    }

    /**
     * Gets the sharedDateTime property value. The UTC date and time when the item was shared. Read-only.
     * @return DateTime|null
    */
    public function getSharedDateTime(): ?DateTime {
        return $this->sharedDateTime;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('owner', $this->owner);
        $writer->writeStringValue('scope', $this->scope);
        $writer->writeObjectValue('sharedBy', $this->sharedBy);
        $writer->writeDateTimeValue('sharedDateTime', $this->sharedDateTime);
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
     * Sets the owner property value. The identity of the owner of the shared item. Read-only.
     *  @param IdentitySet|null $value Value to set for the owner property.
    */
    public function setOwner(?IdentitySet $value ): void {
        $this->owner = $value;
    }

    /**
     * Sets the scope property value. Indicates the scope of how the item is shared: anonymous, organization, or users. Read-only.
     *  @param string|null $value Value to set for the scope property.
    */
    public function setScope(?string $value ): void {
        $this->scope = $value;
    }

    /**
     * Sets the sharedBy property value. The identity of the user who shared the item. Read-only.
     *  @param IdentitySet|null $value Value to set for the sharedBy property.
    */
    public function setSharedBy(?IdentitySet $value ): void {
        $this->sharedBy = $value;
    }

    /**
     * Sets the sharedDateTime property value. The UTC date and time when the item was shared. Read-only.
     *  @param DateTime|null $value Value to set for the sharedDateTime property.
    */
    public function setSharedDateTime(?DateTime $value ): void {
        $this->sharedDateTime = $value;
    }

}
