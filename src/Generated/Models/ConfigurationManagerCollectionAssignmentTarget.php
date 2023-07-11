<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Base type for assignment targets.
*/
class ConfigurationManagerCollectionAssignmentTarget extends DeviceAndAppManagementAssignmentTarget implements Parsable 
{
    /**
     * @var string|null $odataType The OdataType property
    */
    public ?string $odataType = null;
    
    /**
     * Instantiates a new configurationManagerCollectionAssignmentTarget and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.configurationManagerCollectionAssignmentTarget');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ConfigurationManagerCollectionAssignmentTarget
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ConfigurationManagerCollectionAssignmentTarget {
        return new ConfigurationManagerCollectionAssignmentTarget();
    }

    /**
     * Gets the collectionId property value. The collection Id that is the target of the assignment.
     * @return string|null
    */
    public function getCollectionId(): ?string {
        $val = $this->getBackingStore()->get('collectionId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'collectionId'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'collectionId' => fn(ParseNode $n) => $o->setCollectionId($n->getStringValue()),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('collectionId', $this->getCollectionId());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
    }

    /**
     * Sets the collectionId property value. The collection Id that is the target of the assignment.
     * @param string|null $value Value to set for the collectionId property.
    */
    public function setCollectionId(?string $value): void {
        $this->getBackingStore()->set('collectionId', $value);
    }

}
