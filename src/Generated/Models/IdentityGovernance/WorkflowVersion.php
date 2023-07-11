<?php

namespace Microsoft\Graph\Generated\Models\IdentityGovernance;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WorkflowVersion extends WorkflowBase implements Parsable 
{
    /**
     * Instantiates a new workflowVersion and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.identityGovernance.workflowVersion');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WorkflowVersion
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WorkflowVersion {
        return new WorkflowVersion();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'versionNumber' => fn(ParseNode $n) => $o->setVersionNumber($n->getIntegerValue()),
        ]);
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        $val = $this->getBackingStore()->get('odataType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'odataType'");
    }

    /**
     * Gets the versionNumber property value. The version of the workflow.Supports $filter(lt, le, gt, ge, eq, ne) and $orderby.
     * @return int|null
    */
    public function getVersionNumber(): ?int {
        $val = $this->getBackingStore()->get('versionNumber');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'versionNumber'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeIntegerValue('versionNumber', $this->getVersionNumber());
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the versionNumber property value. The version of the workflow.Supports $filter(lt, le, gt, ge, eq, ne) and $orderby.
     * @param int|null $value Value to set for the versionNumber property.
    */
    public function setVersionNumber(?int $value): void {
        $this->getBackingStore()->set('versionNumber', $value);
    }

}
