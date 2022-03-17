<?php

namespace Microsoft\Graph\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ProvisionedIdentity extends Identity 
{
    /** @var DetailsInfo|null $details Details of the identity. */
    private ?DetailsInfo $details = null;
    
    /** @var string|null $identityType Type of identity that has been provisioned, such as 'user' or 'group'. */
    private ?string $identityType = null;
    
    /**
     * Instantiates a new provisionedIdentity and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ProvisionedIdentity
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): ProvisionedIdentity {
        return new ProvisionedIdentity();
    }

    /**
     * Gets the details property value. Details of the identity.
     * @return DetailsInfo|null
    */
    public function getDetails(): ?DetailsInfo {
        return $this->details;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'details' => function (self $o, ParseNode $n) { $o->setDetails($n->getObjectValue(DetailsInfo::class)); },
            'identityType' => function (self $o, ParseNode $n) { $o->setIdentityType($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the identityType property value. Type of identity that has been provisioned, such as 'user' or 'group'.
     * @return string|null
    */
    public function getIdentityType(): ?string {
        return $this->identityType;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('details', $this->details);
        $writer->writeStringValue('identityType', $this->identityType);
    }

    /**
     * Sets the details property value. Details of the identity.
     *  @param DetailsInfo|null $value Value to set for the details property.
    */
    public function setDetails(?DetailsInfo $value ): void {
        $this->details = $value;
    }

    /**
     * Sets the identityType property value. Type of identity that has been provisioned, such as 'user' or 'group'.
     *  @param string|null $value Value to set for the identityType property.
    */
    public function setIdentityType(?string $value ): void {
        $this->identityType = $value;
    }

}
