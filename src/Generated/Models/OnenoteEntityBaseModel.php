<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class OnenoteEntityBaseModel extends Entity implements Parsable 
{
    /**
     * Instantiates a new OnenoteEntityBaseModel and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OnenoteEntityBaseModel
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): OnenoteEntityBaseModel {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.notebook': return new Notebook();
                case '#microsoft.graph.onenoteEntityHierarchyModel': return new OnenoteEntityHierarchyModel();
                case '#microsoft.graph.onenoteEntitySchemaObjectModel': return new OnenoteEntitySchemaObjectModel();
                case '#microsoft.graph.onenotePage': return new OnenotePage();
                case '#microsoft.graph.onenoteResource': return new OnenoteResource();
                case '#microsoft.graph.onenoteSection': return new OnenoteSection();
                case '#microsoft.graph.sectionGroup': return new SectionGroup();
            }
        }
        return new OnenoteEntityBaseModel();
    }

    /**
     * Gets the self property value. The endpoint where you can get details about the page. Read-only.
     * @return string|null
    */
    public function getEscapedSelf(): ?string {
        $val = $this->getBackingStore()->get('escapedSelf');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'escapedSelf'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'self' => fn(ParseNode $n) => $o->setEscapedSelf($n->getStringValue()),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('self', $this->getEscapedSelf());
    }

    /**
     * Sets the self property value. The endpoint where you can get details about the page. Read-only.
     * @param string|null $value Value to set for the self property.
    */
    public function setEscapedSelf(?string $value): void {
        $this->getBackingStore()->set('escapedSelf', $value);
    }

}
