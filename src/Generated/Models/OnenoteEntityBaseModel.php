<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class OnenoteEntityBaseModel extends Entity implements Parsable 
{
    /**
     * @var string|null $escapedSelf The endpoint where you can get details about the page. Read-only.
    */
    public ?string $escapedSelf = null;
    
    /**
     * Instantiates a new onenoteEntityBaseModel and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.onenoteEntityBaseModel');
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
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'self' => fn(ParseNode $n) => $o->setSelf($n->getStringValue()),
        ]);
    }

    /**
     * Gets the self property value. The endpoint where you can get details about the page. Read-only.
     * @return string|null
    */
    public function getSelf(): ?string {
        return $this->getBackingStore()->get('escapedSelf');
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
     *  @param string|null $value Value to set for the EscapedSelf property.
    */
    public function setSelf(?string $value): void {
        $this->getBackingStore()->set('escapedSelf', $value);
    }

}
