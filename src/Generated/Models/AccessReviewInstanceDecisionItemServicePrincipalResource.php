<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AccessReviewInstanceDecisionItemServicePrincipalResource extends AccessReviewInstanceDecisionItemResource implements Parsable 
{
    /**
     * Instantiates a new AccessReviewInstanceDecisionItemServicePrincipalResource and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.accessReviewInstanceDecisionItemServicePrincipalResource');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AccessReviewInstanceDecisionItemServicePrincipalResource
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AccessReviewInstanceDecisionItemServicePrincipalResource {
        return new AccessReviewInstanceDecisionItemServicePrincipalResource();
    }

    /**
     * Gets the appId property value. The globally unique identifier of the application to which access has been granted.
     * @return string|null
    */
    public function getAppId(): ?string {
        $val = $this->getBackingStore()->get('appId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'appId'");
    }

    /**
     * Gets the appRoleDisplayName property value. The display name of the app role.
     * @return string|null
    */
    public function getAppRoleDisplayName(): ?string {
        $val = $this->getBackingStore()->get('appRoleDisplayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'appRoleDisplayName'");
    }

    /**
     * Gets the appRoleId property value. The identifier of the app role.
     * @return string|null
    */
    public function getAppRoleId(): ?string {
        $val = $this->getBackingStore()->get('appRoleId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'appRoleId'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'appId' => fn(ParseNode $n) => $o->setAppId($n->getStringValue()),
            'appRoleDisplayName' => fn(ParseNode $n) => $o->setAppRoleDisplayName($n->getStringValue()),
            'appRoleId' => fn(ParseNode $n) => $o->setAppRoleId($n->getStringValue()),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('appId', $this->getAppId());
        $writer->writeStringValue('appRoleDisplayName', $this->getAppRoleDisplayName());
        $writer->writeStringValue('appRoleId', $this->getAppRoleId());
    }

    /**
     * Sets the appId property value. The globally unique identifier of the application to which access has been granted.
     * @param string|null $value Value to set for the appId property.
    */
    public function setAppId(?string $value): void {
        $this->getBackingStore()->set('appId', $value);
    }

    /**
     * Sets the appRoleDisplayName property value. The display name of the app role.
     * @param string|null $value Value to set for the appRoleDisplayName property.
    */
    public function setAppRoleDisplayName(?string $value): void {
        $this->getBackingStore()->set('appRoleDisplayName', $value);
    }

    /**
     * Sets the appRoleId property value. The identifier of the app role.
     * @param string|null $value Value to set for the appRoleId property.
    */
    public function setAppRoleId(?string $value): void {
        $this->getBackingStore()->set('appRoleId', $value);
    }

}
