<?php

namespace Microsoft\Graph\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UriClickSecurityState implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $clickAction The clickAction property
    */
    private ?string $clickAction = null;
    
    /**
     * @var DateTime|null $clickDateTime The clickDateTime property
    */
    private ?DateTime $clickDateTime = null;
    
    /**
     * @var string|null $id The id property
    */
    private ?string $id = null;
    
    /**
     * @var string|null $sourceId The sourceId property
    */
    private ?string $sourceId = null;
    
    /**
     * @var string|null $uriDomain The uriDomain property
    */
    private ?string $uriDomain = null;
    
    /**
     * @var string|null $verdict The verdict property
    */
    private ?string $verdict = null;
    
    /**
     * Instantiates a new uriClickSecurityState and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UriClickSecurityState
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UriClickSecurityState {
        return new UriClickSecurityState();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the clickAction property value. The clickAction property
     * @return string|null
    */
    public function getClickAction(): ?string {
        return $this->clickAction;
    }

    /**
     * Gets the clickDateTime property value. The clickDateTime property
     * @return DateTime|null
    */
    public function getClickDateTime(): ?DateTime {
        return $this->clickDateTime;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'clickAction' => function (ParseNode $n) use ($o) { $o->setClickAction($n->getStringValue()); },
            'clickDateTime' => function (ParseNode $n) use ($o) { $o->setClickDateTime($n->getDateTimeValue()); },
            'id' => function (ParseNode $n) use ($o) { $o->setId($n->getStringValue()); },
            'sourceId' => function (ParseNode $n) use ($o) { $o->setSourceId($n->getStringValue()); },
            'uriDomain' => function (ParseNode $n) use ($o) { $o->setUriDomain($n->getStringValue()); },
            'verdict' => function (ParseNode $n) use ($o) { $o->setVerdict($n->getStringValue()); },
        ];
    }

    /**
     * Gets the id property value. The id property
     * @return string|null
    */
    public function getId(): ?string {
        return $this->id;
    }

    /**
     * Gets the sourceId property value. The sourceId property
     * @return string|null
    */
    public function getSourceId(): ?string {
        return $this->sourceId;
    }

    /**
     * Gets the uriDomain property value. The uriDomain property
     * @return string|null
    */
    public function getUriDomain(): ?string {
        return $this->uriDomain;
    }

    /**
     * Gets the verdict property value. The verdict property
     * @return string|null
    */
    public function getVerdict(): ?string {
        return $this->verdict;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('clickAction', $this->clickAction);
        $writer->writeDateTimeValue('clickDateTime', $this->clickDateTime);
        $writer->writeStringValue('id', $this->id);
        $writer->writeStringValue('sourceId', $this->sourceId);
        $writer->writeStringValue('uriDomain', $this->uriDomain);
        $writer->writeStringValue('verdict', $this->verdict);
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
     * Sets the clickAction property value. The clickAction property
     *  @param string|null $value Value to set for the clickAction property.
    */
    public function setClickAction(?string $value ): void {
        $this->clickAction = $value;
    }

    /**
     * Sets the clickDateTime property value. The clickDateTime property
     *  @param DateTime|null $value Value to set for the clickDateTime property.
    */
    public function setClickDateTime(?DateTime $value ): void {
        $this->clickDateTime = $value;
    }

    /**
     * Sets the id property value. The id property
     *  @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value ): void {
        $this->id = $value;
    }

    /**
     * Sets the sourceId property value. The sourceId property
     *  @param string|null $value Value to set for the sourceId property.
    */
    public function setSourceId(?string $value ): void {
        $this->sourceId = $value;
    }

    /**
     * Sets the uriDomain property value. The uriDomain property
     *  @param string|null $value Value to set for the uriDomain property.
    */
    public function setUriDomain(?string $value ): void {
        $this->uriDomain = $value;
    }

    /**
     * Sets the verdict property value. The verdict property
     *  @param string|null $value Value to set for the verdict property.
    */
    public function setVerdict(?string $value ): void {
        $this->verdict = $value;
    }

}
