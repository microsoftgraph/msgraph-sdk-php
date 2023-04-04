<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UnifiedRbacResourceAction extends Entity implements Parsable 
{
    /**
     * Instantiates a new unifiedRbacResourceAction and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UnifiedRbacResourceAction
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UnifiedRbacResourceAction {
        return new UnifiedRbacResourceAction();
    }

    /**
     * Gets the actionVerb property value. The actionVerb property
     * @return string|null
    */
    public function getActionVerb(): ?string {
        return $this->getBackingStore()->get('actionVerb');
    }

    /**
     * Gets the authenticationContextId property value. The authenticationContextId property
     * @return string|null
    */
    public function getAuthenticationContextId(): ?string {
        return $this->getBackingStore()->get('authenticationContextId');
    }

    /**
     * Gets the description property value. The description property
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->getBackingStore()->get('description');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'actionVerb' => fn(ParseNode $n) => $o->setActionVerb($n->getStringValue()),
            'authenticationContextId' => fn(ParseNode $n) => $o->setAuthenticationContextId($n->getStringValue()),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'isAuthenticationContextSettable' => fn(ParseNode $n) => $o->setIsAuthenticationContextSettable($n->getBooleanValue()),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'resourceScopeId' => fn(ParseNode $n) => $o->setResourceScopeId($n->getStringValue()),
        ]);
    }

    /**
     * Gets the isAuthenticationContextSettable property value. The isAuthenticationContextSettable property
     * @return bool|null
    */
    public function getIsAuthenticationContextSettable(): ?bool {
        return $this->getBackingStore()->get('isAuthenticationContextSettable');
    }

    /**
     * Gets the name property value. The name property
     * @return string|null
    */
    public function getName(): ?string {
        return $this->getBackingStore()->get('name');
    }

    /**
     * Gets the resourceScopeId property value. The resourceScopeId property
     * @return string|null
    */
    public function getResourceScopeId(): ?string {
        return $this->getBackingStore()->get('resourceScopeId');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('actionVerb', $this->getActionVerb());
        $writer->writeStringValue('authenticationContextId', $this->getAuthenticationContextId());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeBooleanValue('isAuthenticationContextSettable', $this->getIsAuthenticationContextSettable());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeStringValue('resourceScopeId', $this->getResourceScopeId());
    }

    /**
     * Sets the actionVerb property value. The actionVerb property
     * @param string|null $value Value to set for the actionVerb property.
    */
    public function setActionVerb(?string $value): void {
        $this->getBackingStore()->set('actionVerb', $value);
    }

    /**
     * Sets the authenticationContextId property value. The authenticationContextId property
     * @param string|null $value Value to set for the authenticationContextId property.
    */
    public function setAuthenticationContextId(?string $value): void {
        $this->getBackingStore()->set('authenticationContextId', $value);
    }

    /**
     * Sets the description property value. The description property
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the isAuthenticationContextSettable property value. The isAuthenticationContextSettable property
     * @param bool|null $value Value to set for the isAuthenticationContextSettable property.
    */
    public function setIsAuthenticationContextSettable(?bool $value): void {
        $this->getBackingStore()->set('isAuthenticationContextSettable', $value);
    }

    /**
     * Sets the name property value. The name property
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->getBackingStore()->set('name', $value);
    }

    /**
     * Sets the resourceScopeId property value. The resourceScopeId property
     * @param string|null $value Value to set for the resourceScopeId property.
    */
    public function setResourceScopeId(?string $value): void {
        $this->getBackingStore()->set('resourceScopeId', $value);
    }

}
