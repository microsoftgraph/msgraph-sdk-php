<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AccessReviewInstanceDecisionItemAccessPackageAssignmentPolicyResource extends AccessReviewInstanceDecisionItemResource implements Parsable 
{
    /**
     * @var string|null $odataType The OdataType property
    */
    public ?string $odataType = null;
    
    /**
     * Instantiates a new accessReviewInstanceDecisionItemAccessPackageAssignmentPolicyResource and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.accessReviewInstanceDecisionItemAccessPackageAssignmentPolicyResource');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AccessReviewInstanceDecisionItemAccessPackageAssignmentPolicyResource
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AccessReviewInstanceDecisionItemAccessPackageAssignmentPolicyResource {
        return new AccessReviewInstanceDecisionItemAccessPackageAssignmentPolicyResource();
    }

    /**
     * Gets the accessPackageDisplayName property value. Display name of the access package to which access has been granted.
     * @return string|null
    */
    public function getAccessPackageDisplayName(): ?string {
        $val = $this->getBackingStore()->get('accessPackageDisplayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'accessPackageDisplayName'");
    }

    /**
     * Gets the accessPackageId property value. Identifier of the access package to which access has been granted.
     * @return string|null
    */
    public function getAccessPackageId(): ?string {
        $val = $this->getBackingStore()->get('accessPackageId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'accessPackageId'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'accessPackageDisplayName' => fn(ParseNode $n) => $o->setAccessPackageDisplayName($n->getStringValue()),
            'accessPackageId' => fn(ParseNode $n) => $o->setAccessPackageId($n->getStringValue()),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('accessPackageDisplayName', $this->getAccessPackageDisplayName());
        $writer->writeStringValue('accessPackageId', $this->getAccessPackageId());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
    }

    /**
     * Sets the accessPackageDisplayName property value. Display name of the access package to which access has been granted.
     * @param string|null $value Value to set for the accessPackageDisplayName property.
    */
    public function setAccessPackageDisplayName(?string $value): void {
        $this->getBackingStore()->set('accessPackageDisplayName', $value);
    }

    /**
     * Sets the accessPackageId property value. Identifier of the access package to which access has been granted.
     * @param string|null $value Value to set for the accessPackageId property.
    */
    public function setAccessPackageId(?string $value): void {
        $this->getBackingStore()->set('accessPackageId', $value);
    }

}
