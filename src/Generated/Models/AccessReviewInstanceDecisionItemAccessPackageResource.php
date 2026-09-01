<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AccessReviewInstanceDecisionItemAccessPackageResource extends AccessReviewInstanceDecisionItemResource implements Parsable 
{
    /**
     * Instantiates a new AccessReviewInstanceDecisionItemAccessPackageResource and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.accessReviewInstanceDecisionItemAccessPackageResource');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AccessReviewInstanceDecisionItemAccessPackageResource
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AccessReviewInstanceDecisionItemAccessPackageResource {
        return new AccessReviewInstanceDecisionItemAccessPackageResource();
    }

    /**
     * Gets the accessPackageAssignmentPolicyDisplayName property value. Display name of the access package assignment policy through which access is granted.
     * @return string|null
    */
    public function getAccessPackageAssignmentPolicyDisplayName(): ?string {
        $val = $this->getBackingStore()->get('accessPackageAssignmentPolicyDisplayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'accessPackageAssignmentPolicyDisplayName'");
    }

    /**
     * Gets the accessPackageAssignmentPolicyId property value. Identifier of the access package assignment policy through which access is granted.
     * @return string|null
    */
    public function getAccessPackageAssignmentPolicyId(): ?string {
        $val = $this->getBackingStore()->get('accessPackageAssignmentPolicyId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'accessPackageAssignmentPolicyId'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'accessPackageAssignmentPolicyDisplayName' => fn(ParseNode $n) => $o->setAccessPackageAssignmentPolicyDisplayName($n->getStringValue()),
            'accessPackageAssignmentPolicyId' => fn(ParseNode $n) => $o->setAccessPackageAssignmentPolicyId($n->getStringValue()),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('accessPackageAssignmentPolicyDisplayName', $this->getAccessPackageAssignmentPolicyDisplayName());
        $writer->writeStringValue('accessPackageAssignmentPolicyId', $this->getAccessPackageAssignmentPolicyId());
    }

    /**
     * Sets the accessPackageAssignmentPolicyDisplayName property value. Display name of the access package assignment policy through which access is granted.
     * @param string|null $value Value to set for the accessPackageAssignmentPolicyDisplayName property.
    */
    public function setAccessPackageAssignmentPolicyDisplayName(?string $value): void {
        $this->getBackingStore()->set('accessPackageAssignmentPolicyDisplayName', $value);
    }

    /**
     * Sets the accessPackageAssignmentPolicyId property value. Identifier of the access package assignment policy through which access is granted.
     * @param string|null $value Value to set for the accessPackageAssignmentPolicyId property.
    */
    public function setAccessPackageAssignmentPolicyId(?string $value): void {
        $this->getBackingStore()->set('accessPackageAssignmentPolicyId', $value);
    }

}
