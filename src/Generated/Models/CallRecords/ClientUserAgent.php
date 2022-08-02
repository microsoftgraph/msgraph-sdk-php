<?php

namespace Microsoft\Graph\Generated\Models\CallRecords;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ClientUserAgent extends UserAgent implements Parsable 
{
    /**
     * @var ClientPlatform|null $platform The platform property
    */
    private ?ClientPlatform $platform = null;
    
    /**
     * @var ProductFamily|null $productFamily The productFamily property
    */
    private ?ProductFamily $productFamily = null;
    
    /**
     * Instantiates a new ClientUserAgent and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.callRecords.clientUserAgent');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ClientUserAgent
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ClientUserAgent {
        return new ClientUserAgent();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'platform' => function (ParseNode $n) use ($o) { $o->setPlatform($n->getEnumValue(ClientPlatform::class)); },
            'productFamily' => function (ParseNode $n) use ($o) { $o->setProductFamily($n->getEnumValue(ProductFamily::class)); },
        ]);
    }

    /**
     * Gets the platform property value. The platform property
     * @return ClientPlatform|null
    */
    public function getPlatform(): ?ClientPlatform {
        return $this->platform;
    }

    /**
     * Gets the productFamily property value. The productFamily property
     * @return ProductFamily|null
    */
    public function getProductFamily(): ?ProductFamily {
        return $this->productFamily;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('platform', $this->platform);
        $writer->writeEnumValue('productFamily', $this->productFamily);
    }

    /**
     * Sets the platform property value. The platform property
     *  @param ClientPlatform|null $value Value to set for the platform property.
    */
    public function setPlatform(?ClientPlatform $value ): void {
        $this->platform = $value;
    }

    /**
     * Sets the productFamily property value. The productFamily property
     *  @param ProductFamily|null $value Value to set for the productFamily property.
    */
    public function setProductFamily(?ProductFamily $value ): void {
        $this->productFamily = $value;
    }

}
