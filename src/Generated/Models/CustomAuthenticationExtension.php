<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CustomAuthenticationExtension extends CustomCalloutExtension implements Parsable 
{
    /**
     * Instantiates a new CustomAuthenticationExtension and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.customAuthenticationExtension');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CustomAuthenticationExtension
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CustomAuthenticationExtension {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.onAttributeCollectionStartCustomExtension': return new OnAttributeCollectionStartCustomExtension();
                case '#microsoft.graph.onAttributeCollectionSubmitCustomExtension': return new OnAttributeCollectionSubmitCustomExtension();
                case '#microsoft.graph.onTokenIssuanceStartCustomExtension': return new OnTokenIssuanceStartCustomExtension();
            }
        }
        return new CustomAuthenticationExtension();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
    }

}
