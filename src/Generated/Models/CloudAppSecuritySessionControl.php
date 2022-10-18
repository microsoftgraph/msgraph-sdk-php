<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CloudAppSecuritySessionControl extends ConditionalAccessSessionControl implements Parsable 
{
    /**
     * @var CloudAppSecuritySessionControlType|null $cloudAppSecurityType Possible values are: mcasConfigured, monitorOnly, blockDownloads, unknownFutureValue. For more information, see Deploy Conditional Access App Control for featured apps.
    */
    private ?CloudAppSecuritySessionControlType $cloudAppSecurityType = null;
    
    /**
     * Instantiates a new CloudAppSecuritySessionControl and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.cloudAppSecuritySessionControl');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CloudAppSecuritySessionControl
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CloudAppSecuritySessionControl {
        return new CloudAppSecuritySessionControl();
    }

    /**
     * Gets the cloudAppSecurityType property value. Possible values are: mcasConfigured, monitorOnly, blockDownloads, unknownFutureValue. For more information, see Deploy Conditional Access App Control for featured apps.
     * @return CloudAppSecuritySessionControlType|null
    */
    public function getCloudAppSecurityType(): ?CloudAppSecuritySessionControlType {
        return $this->cloudAppSecurityType;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'cloudAppSecurityType' => fn(ParseNode $n) => $o->setCloudAppSecurityType($n->getEnumValue(CloudAppSecuritySessionControlType::class)),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('cloudAppSecurityType', $this->cloudAppSecurityType);
    }

    /**
     * Sets the cloudAppSecurityType property value. Possible values are: mcasConfigured, monitorOnly, blockDownloads, unknownFutureValue. For more information, see Deploy Conditional Access App Control for featured apps.
     *  @param CloudAppSecuritySessionControlType|null $value Value to set for the cloudAppSecurityType property.
    */
    public function setCloudAppSecurityType(?CloudAppSecuritySessionControlType $value ): void {
        $this->cloudAppSecurityType = $value;
    }

}
