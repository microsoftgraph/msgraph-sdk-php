<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class RequestorManager extends SubjectSet implements Parsable 
{
    /**
     * Instantiates a new requestorManager and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.requestorManager');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RequestorManager
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RequestorManager {
        return new RequestorManager();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'managerLevel' => fn(ParseNode $n) => $o->setManagerLevel($n->getIntegerValue()),
        ]);
    }

    /**
     * Gets the managerLevel property value. The hierarchical level of the manager with respect to the requestor. For example, the direct manager of a requestor would have a managerLevel of 1, while the manager of the requestor's manager would have a managerLevel of 2. Default value for managerLevel is 1. Possible values for this property range from 1 to 2.
     * @return int|null
    */
    public function getManagerLevel(): ?int {
        $val = $this->getBackingStore()->get('managerLevel');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'managerLevel'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('managerLevel', $this->getManagerLevel());
    }

    /**
     * Sets the managerLevel property value. The hierarchical level of the manager with respect to the requestor. For example, the direct manager of a requestor would have a managerLevel of 1, while the manager of the requestor's manager would have a managerLevel of 2. Default value for managerLevel is 1. Possible values for this property range from 1 to 2.
     * @param int|null $value Value to set for the managerLevel property.
    */
    public function setManagerLevel(?int $value): void {
        $this->getBackingStore()->set('managerLevel', $value);
    }

}
