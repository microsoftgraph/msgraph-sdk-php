<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AccessPackageAssignmentRequestWorkflowExtension extends CustomCalloutExtension implements Parsable 
{
    /**
     * Instantiates a new AccessPackageAssignmentRequestWorkflowExtension and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.accessPackageAssignmentRequestWorkflowExtension');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AccessPackageAssignmentRequestWorkflowExtension
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AccessPackageAssignmentRequestWorkflowExtension {
        return new AccessPackageAssignmentRequestWorkflowExtension();
    }

    /**
     * Gets the callbackConfiguration property value. The callback configuration for a custom extension.
     * @return CustomExtensionCallbackConfiguration|null
    */
    public function getCallbackConfiguration(): ?CustomExtensionCallbackConfiguration {
        $val = $this->getBackingStore()->get('callbackConfiguration');
        if (is_null($val) || $val instanceof CustomExtensionCallbackConfiguration) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'callbackConfiguration'");
    }

    /**
     * Gets the createdBy property value. The userPrincipalName of the user or identity of the subject that created this resource. Read-only.
     * @return string|null
    */
    public function getCreatedBy(): ?string {
        $val = $this->getBackingStore()->get('createdBy');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'createdBy'");
    }

    /**
     * Gets the createdDateTime property value. When the object was created.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('createdDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'createdDateTime'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'callbackConfiguration' => fn(ParseNode $n) => $o->setCallbackConfiguration($n->getObjectValue([CustomExtensionCallbackConfiguration::class, 'createFromDiscriminatorValue'])),
            'createdBy' => fn(ParseNode $n) => $o->setCreatedBy($n->getStringValue()),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'lastModifiedBy' => fn(ParseNode $n) => $o->setLastModifiedBy($n->getStringValue()),
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
        ]);
    }

    /**
     * Gets the lastModifiedBy property value. The userPrincipalName of the identity that last modified the object.
     * @return string|null
    */
    public function getLastModifiedBy(): ?string {
        $val = $this->getBackingStore()->get('lastModifiedBy');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastModifiedBy'");
    }

    /**
     * Gets the lastModifiedDateTime property value. When the object was last modified.
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('lastModifiedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastModifiedDateTime'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('callbackConfiguration', $this->getCallbackConfiguration());
        $writer->writeStringValue('createdBy', $this->getCreatedBy());
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeStringValue('lastModifiedBy', $this->getLastModifiedBy());
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->getLastModifiedDateTime());
    }

    /**
     * Sets the callbackConfiguration property value. The callback configuration for a custom extension.
     * @param CustomExtensionCallbackConfiguration|null $value Value to set for the callbackConfiguration property.
    */
    public function setCallbackConfiguration(?CustomExtensionCallbackConfiguration $value): void {
        $this->getBackingStore()->set('callbackConfiguration', $value);
    }

    /**
     * Sets the createdBy property value. The userPrincipalName of the user or identity of the subject that created this resource. Read-only.
     * @param string|null $value Value to set for the createdBy property.
    */
    public function setCreatedBy(?string $value): void {
        $this->getBackingStore()->set('createdBy', $value);
    }

    /**
     * Sets the createdDateTime property value. When the object was created.
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the lastModifiedBy property value. The userPrincipalName of the identity that last modified the object.
     * @param string|null $value Value to set for the lastModifiedBy property.
    */
    public function setLastModifiedBy(?string $value): void {
        $this->getBackingStore()->set('lastModifiedBy', $value);
    }

    /**
     * Sets the lastModifiedDateTime property value. When the object was last modified.
     * @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastModifiedDateTime', $value);
    }

}
