<?php

namespace Microsoft\\Graph\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class HttpRequestEndpoint extends CustomExtensionEndpointConfiguration implements Parsable 
{
    /**
     * Instantiates a new HttpRequestEndpoint and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.httpRequestEndpoint');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return HttpRequestEndpoint
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): HttpRequestEndpoint {
        return new HttpRequestEndpoint();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'targetUrl' => fn(ParseNode $n) => $o->setTargetUrl($n->getStringValue()),
        ]);
    }

    /**
     * Gets the targetUrl property value. The HTTP endpoint that a custom extension calls.
     * @return string|null
    */
    public function getTargetUrl(): ?string {
        $val = $this->getBackingStore()->get('targetUrl');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'targetUrl'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('targetUrl', $this->getTargetUrl());
    }

    /**
     * Sets the targetUrl property value. The HTTP endpoint that a custom extension calls.
     * @param string|null $value Value to set for the targetUrl property.
    */
    public function setTargetUrl(?string $value): void {
        $this->getBackingStore()->set('targetUrl', $value);
    }

}
