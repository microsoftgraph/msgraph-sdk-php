<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ResultInfo implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var int|null $code The result code.
    */
    private ?int $code = null;
    
    /**
     * @var string|null $message The message.
    */
    private ?string $message = null;
    
    /**
     * @var int|null $subcode The result sub-code.
    */
    private ?int $subcode = null;
    
    /**
     * Instantiates a new resultInfo and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ResultInfo
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ResultInfo {
        return new ResultInfo();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the code property value. The result code.
     * @return int|null
    */
    public function getCode(): ?int {
        return $this->code;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'code' => function (ParseNode $n) use ($o) { $o->setCode($n->getIntegerValue()); },
            'message' => function (ParseNode $n) use ($o) { $o->setMessage($n->getStringValue()); },
            'subcode' => function (ParseNode $n) use ($o) { $o->setSubcode($n->getIntegerValue()); },
        ];
    }

    /**
     * Gets the message property value. The message.
     * @return string|null
    */
    public function getMessage(): ?string {
        return $this->message;
    }

    /**
     * Gets the subcode property value. The result sub-code.
     * @return int|null
    */
    public function getSubcode(): ?int {
        return $this->subcode;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('code', $this->code);
        $writer->writeStringValue('message', $this->message);
        $writer->writeIntegerValue('subcode', $this->subcode);
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
     * Sets the code property value. The result code.
     *  @param int|null $value Value to set for the code property.
    */
    public function setCode(?int $value ): void {
        $this->code = $value;
    }

    /**
     * Sets the message property value. The message.
     *  @param string|null $value Value to set for the message property.
    */
    public function setMessage(?string $value ): void {
        $this->message = $value;
    }

    /**
     * Sets the subcode property value. The result sub-code.
     *  @param int|null $value Value to set for the subcode property.
    */
    public function setSubcode(?int $value ): void {
        $this->subcode = $value;
    }

}
