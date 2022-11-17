<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AuthenticationContextClassReference extends Entity implements Parsable 
{
    /**
     * Instantiates a new authenticationContextClassReference and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.authenticationContextClassReference');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AuthenticationContextClassReference
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AuthenticationContextClassReference {
        return new AuthenticationContextClassReference();
    }

    /**
     * Gets the description property value. A short explanation of the policies that are enforced by authenticationContextClassReference. This value should be used to provide secondary text to describe the authentication context class reference when building user-facing admin experiences. For example, a selection UX.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->getBackingStore()->get('description');
    }

    /**
     * Gets the displayName property value. The display name is the friendly name of the authenticationContextClassReference object. This value should be used to identify the authentication context class reference when building user-facing admin experiences. For example, a selection UX.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->getBackingStore()->get('displayName');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'isAvailable' => fn(ParseNode $n) => $o->setIsAvailable($n->getBooleanValue()),
        ]);
    }

    /**
     * Gets the isAvailable property value. Indicates whether the authenticationContextClassReference has been published by the security admin and is ready for use by apps. When it is set to false, it should not be shown in authentication context selection UX, or used to protect app resources. It will be shown and available for Conditional Access policy authoring. The default value is false.  Supports $filter (eq).
     * @return bool|null
    */
    public function getIsAvailable(): ?bool {
        return $this->getBackingStore()->get('isAvailable');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeBooleanValue('isAvailable', $this->getIsAvailable());
    }

    /**
     * Sets the description property value. A short explanation of the policies that are enforced by authenticationContextClassReference. This value should be used to provide secondary text to describe the authentication context class reference when building user-facing admin experiences. For example, a selection UX.
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the displayName property value. The display name is the friendly name of the authenticationContextClassReference object. This value should be used to identify the authentication context class reference when building user-facing admin experiences. For example, a selection UX.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the isAvailable property value. Indicates whether the authenticationContextClassReference has been published by the security admin and is ready for use by apps. When it is set to false, it should not be shown in authentication context selection UX, or used to protect app resources. It will be shown and available for Conditional Access policy authoring. The default value is false.  Supports $filter (eq).
     *  @param bool|null $value Value to set for the isAvailable property.
    */
    public function setIsAvailable(?bool $value): void {
        $this->getBackingStore()->set('isAvailable', $value);
    }

}
