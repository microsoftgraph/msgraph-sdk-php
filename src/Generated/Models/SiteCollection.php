<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SiteCollection implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $dataLocationCode The geographic region code for where this site collection resides. Read-only.
    */
    private ?string $dataLocationCode = null;
    
    /**
     * @var string|null $hostname The hostname for the site collection. Read-only.
    */
    private ?string $hostname = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var Root|null $root If present, indicates that this is a root site collection in SharePoint. Read-only.
    */
    private ?Root $root = null;
    
    /**
     * Instantiates a new siteCollection and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.siteCollection');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SiteCollection
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SiteCollection {
        return new SiteCollection();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the dataLocationCode property value. The geographic region code for where this site collection resides. Read-only.
     * @return string|null
    */
    public function getDataLocationCode(): ?string {
        return $this->dataLocationCode;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'dataLocationCode' => fn(ParseNode $n) => $o->setDataLocationCode($n->getStringValue()),
            'hostname' => fn(ParseNode $n) => $o->setHostname($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'root' => fn(ParseNode $n) => $o->setRoot($n->getObjectValue([Root::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the hostname property value. The hostname for the site collection. Read-only.
     * @return string|null
    */
    public function getHostname(): ?string {
        return $this->hostname;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the root property value. If present, indicates that this is a root site collection in SharePoint. Read-only.
     * @return Root|null
    */
    public function getRoot(): ?Root {
        return $this->root;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('dataLocationCode', $this->dataLocationCode);
        $writer->writeStringValue('hostname', $this->hostname);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeObjectValue('root', $this->root);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the dataLocationCode property value. The geographic region code for where this site collection resides. Read-only.
     *  @param string|null $value Value to set for the dataLocationCode property.
    */
    public function setDataLocationCode(?string $value ): void {
        $this->dataLocationCode = $value;
    }

    /**
     * Sets the hostname property value. The hostname for the site collection. Read-only.
     *  @param string|null $value Value to set for the hostname property.
    */
    public function setHostname(?string $value ): void {
        $this->hostname = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the root property value. If present, indicates that this is a root site collection in SharePoint. Read-only.
     *  @param Root|null $value Value to set for the root property.
    */
    public function setRoot(?Root $value ): void {
        $this->root = $value;
    }

}
